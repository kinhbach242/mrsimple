<?php
class Database
{

    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $databaseName = 'mrsimple';
    private $charset = 'utf8';
    private $conn;
    public function __construct()
    {
        $this->connect();
    }
    public function connect()
    {
        if (!$this->conn) {
            $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->databaseName);
            if (mysqli_connect_errno()) {
                echo 'Failed: ' . mysqli_connect_error();
                die();
            }
            mysqli_set_charset($this->conn, $this->charset);
        }
    }
    public function disConnect()
    {
        if ($this->conn)
            mysqli_close($this->conn);
    }
    public function error()
    {
        if ($this->conn)
            return mysqli_error($this->conn);
        else
            return false;
    }
    public function insert($table = '', $data = [])
    {
        $keys = '';
        $values = '';
        foreach ($data as $key => $value) {
            $keys .= ',' . $key;
            $values .= ',"' . mysqli_real_escape_string($this->conn, $value) . '"';
        }
        $sql = 'INSERT INTO ' . $table . '(' . trim($keys, ',') . ') VALUES (' . trim($values, ',') . ')';
        return mysqli_query($this->conn, $sql);
    }
    public function update($table = '', $data = [], $id = [], $key = '')
    {
        $content = '';
        if (is_integer($id))
            $where = $key . '=' . $id;
        else if (is_array($id) && count($id) == 1) {
            $listKey = array_keys($id);
            $where = $listKey[0] . '=' . $id[$listKey[0]];
        } else
            die('Không thể có nhiều hơn 1 khóa chính và id truyền vào phải là số');
        foreach ($data as $key => $value) {
            $content .= ',' . $key . '="' . mysqli_real_escape_string($this->conn, $value) . '"';
        }
        $sql = 'UPDATE ' . $table . ' SET ' . trim($content, ',') . ' WHERE ' . $where;
        return mysqli_query($this->conn, $sql);
    }
    public function delete($table = '', $id, $key = '')
    {
        $content = '';
        if (is_integer($id))
            $where = $key . '=' . $id;
        else if (is_array($id) && count($id) == 1) {
            $listKey = array_keys($id);
            $where = $listKey[0] . '=' . $id[$listKey[0]];
        } else
            die('Không thể có nhiều hơn 1 khóa chính và id truyền vào phải là số');
        $sql = 'DELETE FROM ' . $table . ' WHERE ' . $where;
        return mysqli_query($this->conn, $sql);
    }
    public function getObject($table = '',$id= '')
    {
        $sql = 'SELECT * FROM ' . $table .' ORDER BY '. $id .' DESC';
        $data = null;
        if ($result = mysqli_query($this->conn, $sql)) {
            while ($row = mysqli_fetch_object($result)) {
                $data[] = $row;
            }
            mysqli_free_result($result);
            return $data;
        }
        return false;
    }
    public function getObjectSelect($table = '', $id = [], $key = '')
    {
        $data = null;
        if (is_integer($id))
            $where = $key . '=' . $id;
        else if (is_array($id) && count($id) == 1) {
            $listKey = array_keys($id);
            $where = $listKey[0] . '=' . $id[$listKey[0]];
        } else
            die('Không thể có nhiều hơn 1 khóa chính và id truyền vào phải là số');
        $sql = 'SELECT * FROM ' . $table . ' WHERE ' . $where;
        if ($result = mysqli_query($this->conn, $sql)) {
            while ($row = mysqli_fetch_object($result)) {
                $data[] = $row;
            }
            mysqli_free_result($result);
            return $data;
        } else
            return false;
    }
    public function getArray($table = '')
    {
        $sql = 'SELECT * FROM ' . $table;
        $data = null;
        if ($result = mysqli_query($this->conn, $sql)) {
            while ($row = mysqli_fetch_array($result)) {
                $data[] = $row;
            }
            mysqli_free_result($result);
            return $data;
        } else
            return false;
    }
    public function getRowObject($table = '', $id = [], $key = '')
    {
        if (is_integer($id))
            $where = $key . '=' . $id;
        else if (is_array($id) && count($id) == 1) {
            $listKey = array_keys($id);
            $where = $listKey[0] . '=' . $id[$listKey[0]];
        } else
            die('Không thể có nhiều hơn 1 khóa chính và id truyền vào phải là số');
        $sql = 'SELECT * FROM ' . $table . ' WHERE ' . $where;

        if ($result = mysqli_query($this->conn, $sql)) {
            $data = mysqli_fetch_object($result);
            mysqli_free_result($result);
            return $data;
        } else
            return false;
    }
    public function getRowArray($table = '', $id = [])
    {
        if (is_integer($id))
            $where = 'id = ' . $id;
        else if (is_array($id) && count($id) == 1) {
            $listKey = array_keys($id);
            $where = $listKey[0] . '=' . $id[$listKey[0]];
        } else
            die('Không thể có nhiều hơn 1 khóa chính và id truyền vào phải là số');
        $sql = 'SELECT * FROM ' . $table . ' WHERE ' . $where;

        if ($result = mysqli_query($this->conn, $sql)) {
            $data = mysqli_fetch_array($result);
            mysqli_free_result($result);
            return $data;
        } else
            return false;
    }
    public function query($sql = '', $return = true)
    {
        if ($result = mysqli_query($this->conn, $sql)) {
            if ($return === true) {
                while ($row = mysqli_fetch_array($result)) {
                    $data[] = $row;
                }
                mysqli_free_result($result);
                return $data;
            } else
                return true;
        } else
            return false;
    }
    public function save_file($fieldname = '', $target_dir = '')
    {
        $file_uploaded = $_FILES[$fieldname];
        $file_name = basename($file_uploaded["name"]);
        $target_path = $target_dir . $file_name;
        move_uploaded_file($file_uploaded["tmp_name"], $target_path);
        return $file_name;
    }
    public function getTopSelling()
    {
        $sql = 'SELECT prd.idProduct, prd.nameProduct,pd.idProductDetail, SUM( bd.quantity) as "countSell" 
                FROM products as prd, productdetail as pd, billdetail as bd 
                WHERE prd.idProduct = pd.idProduct && bd.idProductDetail = pd.idProductDetail 
                GROUP BY prd.idProduct ,prd.nameProduct ORDER BY countSell DESC limit 10';
        $data = null;
        if ($result = mysqli_query($this->conn, $sql)) {
            while ($row = mysqli_fetch_object($result)) {
                $data[] = $row;
            }
            mysqli_free_result($result);
            return $data;
        }
        return false;
    }
    public function countData($id, $table)
    {
        $sql = 'SELECT COUNT('.$id.') as count FROM '.$table;
        $data = null;
        if ($result = mysqli_query($this->conn, $sql)) {
            while ($row = mysqli_fetch_array($result)) {
                $data[] = $row;
            }
            mysqli_free_result($result);
            return $data;
        }
        return false;
    }
    public function getLowQuantity()
    {
        $sql = 'SELECT prd.idProduct, prd.nameProduct,pd.idProductDetail,pd.quantity
                FROM products as prd, productdetail as pd
                WHERE prd.idProduct = pd.idProduct && pd.quantity <= 10
                ORDER BY prd.idProduct ASC ';
        $data = null;
        if ($result = mysqli_query($this->conn, $sql)) {
            while ($row = mysqli_fetch_object($result)) {
                $data[] = $row;
            }
            mysqli_free_result($result);
            return $data;
        }
        return false;
    }
    public function getHighQuantity()
    {
        $sql = 'SELECT prd.idProduct, prd.nameProduct,pd.idProductDetail,pd.quantity
                FROM products as prd, productdetail as pd
                WHERE prd.idProduct = pd.idProduct && pd.quantity >= 30
                ORDER BY prd.idProduct ASC ';
        $data = null;
        if ($result = mysqli_query($this->conn, $sql)) {
            while ($row = mysqli_fetch_object($result)) {
                $data[] = $row;
            }
            mysqli_free_result($result);
            return $data;
        }
        return false;
    }
    public function getRevenueCurrentMonth()
    {
        $sql = 'SELECT DATE(b.date) as "date",SUM(b.total) as "totalDay"
                FROM bill as b
                WHERE MONTH(DATE(b.date)) = MONTH(CURRENT_DATE())
                GROUP BY DATE(b.date) 
                ORDER BY b.date ASC';
        if ($result = mysqli_query($this->conn, $sql)) {
            while ($row = mysqli_fetch_object($result)) {
                $data[] = $row;
            }
            mysqli_free_result($result);
            return $data;
        }
        return false;
    }
    public function __destruct()
    {
        $this->disConnect();
    }
}

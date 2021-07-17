<?php
function connect(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    try{
        $conn = new PDO("mysql:host=$servername;dbname=mrsimple", $username, $password);
        //set the PDO error mode to exception
        $conn->exec("set names utf8");
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
       // echo "Connected successfully!";
    } catch(PDOException $e){
            // echo "Connection failed: " . $e->getMessage();
        }
        // array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
   
}

//Gửi câu truy vấn SELECT và trả về tất cả hàng.
function query($sql){
    $connect = connect();
    $result = $connect->query($sql)->fetchAll();
    return $result;
}

//Gửi câu truy vấn SELECT và trả về 1 hàng.
function queryOne($sql){
    $connect = connect();
    $result = $connect->query($sql)->fetch(PDO::FETCH_ASSOC);
    return $result;
}

//Gửi câu truy vấn thêm xoá sửa và trả về ID vừa tương tác.
function execute($sql){
    $connect = connect();
    $result = $connect->exec($sql);
    $id = $connect->lastInsertId();
    return $id;
}

function pdo_query_one($sql){
    $sql_args = array_slice(func_get_args(), 1);
try{
    $conn = connect();
    $stmt = $conn->prepare($sql);
    $stmt->execute($sql_args);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}
catch(PDOException $e){
    throw $e;
}
finally{
    unset($conn);
}

}
function pdo_execute($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}


?>
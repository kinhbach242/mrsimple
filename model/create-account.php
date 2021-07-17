<?php 
    function create_account($conn, $full_name, $email, $address, $phone, $date, $username, $password) {
        try {
            $regex_pwd = "/^(?=.*\d.*\d)[0-9A-Za-z!@#$%*]{8,}$/";
            if(filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match($regex_pwd, $password)) {
                $sql = "INSERT INTO user (idUser, fullName, email, address, phoneNumber, dateOfBirth, username, password, idRole)
VALUES (null, '$full_name', '$email', '$address', '$phone', '$date', '$username', '$password', 4)";
            $conn->exec($sql);  
                return true;
            }
            
        } catch(PDOException $e) {
            return false;
        }
    }

    function isEmptyAccount($conn, $email, $username) {
        $sql = "SELECT email, username FROM user WHERE email = '$email' or username='$username'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return count($data);
    }

?>

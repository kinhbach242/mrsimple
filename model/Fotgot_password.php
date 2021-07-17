<?php 
    function forgot_password($conn, $email) {
        // $to_email = $email;
        // $new_password = rand();
        // $subject = "Forgot Password";
        // $body = "Xin chào, mật khẩu của bạn đã được đổi thành ". $new_password. " . Vui lòng đăng nhập bằng mật khẩu này cho lần đăng nhập tiếp theo";
        // $headers = "From j2team.tranminhquang@gmail.com";
        $new_password = rand();
        $recipient = $_POST['email'];
        $subject = "Đổi mật khẩu Mr Simple Shop";
        $message = "Xin chào " . $recipient. ", mật khẩu của bạn đã được đổi thành " . $new_password . ". Vui lòng đăng nhập bằng mật khẩu này cho lần đăng nhập tiếp theo.";
        $sender = "From shop.mrsimple@gmail.com";
        if(empty($recipient)) {
            return "Email are required!";
        } else {
            if(mail($recipient, $subject, $message, $sender)) {
                try{
                    $query = "UPDATE user SET password = md5('$new_password') WHERE email = '$recipient';";
                    $conn->query($query);
                    return "Email sending successfully";
                } catch(PDOException $e) {
                    echo $e;
                    return "Email sending fail";
                }
            } else {
                return "Email sending fail";
            }
        }
    }
?>
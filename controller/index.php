<?php
    session_start();

    require_once ("../model/connect.php");
    require_once ("../model/shop.php");  
//    connect();
        $conn = connect();
        $IMAGE_DIR =  "../images/";
    include_once "../view/header.php";
    if(isset($_GET["act"])){
        $act= $_GET["act"];
        switch($act){
                            
            case 'about':
                    include "../view/about.php";
                    break;
            case 'checkouttr':
                     echo "<script type='text/javascript'>alert('Thanh toán thành công');</script>";
                    break;
            case 'blog-details':
                    include "../view/blog-details.php";
                    break;
            case 'blog':
                    include "../view/blog.php";
                    break;
            case 'shopping-cart':
                    include "../view/cart.php";
                    break;                    
            case 'change_pass':
                $MESSAGE="";
                if(isset($_SESSION['username'])){
                        
                        include '../model/changepass.php';  
                        include_once "../view/change_pass.php";
                                      
                        if(isset($_POST["change_pass"])) {
                        $idUser = $_POST["idUser"];    
                        $old_password = @MD5($_POST["old_password"]);
                        $new_password =@($_POST['new_password']);
                        $passwordcf = @($_POST['passwordcf']);

                        if ($old_password != $_SESSION['username']['password'])
                        {
                                echo "<script type='text/javascript'>alert('Old password entered incorrectly, make sure caps lock is turned off');</script>";
                        
                        }
                        else if (strlen($new_password) < 6)
                        {
                                echo "<script type='text/javascript'>alert('The password is too short, try with another more secure password');</script>";
                        
                        }
                        else if ($new_password != $passwordcf)
                        {
                                echo "<script type='text/javascript'>alert('Re-enter the new password that doesn't match, make sure caps lock is turned off');</script>";
                        
                        }
                        else
                        {
                                
                                $new_password = md5($new_password);
                                $sql_change_pass = "UPDATE user SET password = '$new_password' WHERE idUser = $idUser";                                
                                $conn->query($sql_change_pass);                                
                                if($sql_change_pass) {                                
                                        echo "<script type='text/javascript'>alert('Change password successfully');</script>"; 
                                        unset($_SESSION['username']);
                                } else {
                                        echo "<script type='text/javascript'>alert('Change password failed!');</script>"; 
                                }
                                
                        }
                }
                        }else{
                        $MESSAGE = 'Please login your account';
                        echo "<script type='text/javascript'>alert('$MESSAGE');</script>";
                                include "../view/login/login-form.php";
                                
                                
                        }

                
                    break;
            case 'checkout':                
                if(!isset($_SESSION['username'])){
                        $MESSAGE = 'Please login your account';
                        // header
                        echo "<script type='text/javascript'>alert('$MESSAGE');</script>";
                 include "../view/login/login-form.php";                
                }else{
                        
                        include "../view/checkout.php";
                        

                }
                  
                  
                       include "../view/checkout.php";
                    
                    break;
            case 'confirmation':
                    include "../view/confirmation.php";
                    break;
            case 'change_info':
                if(isset($_SESSION['username'])){                        
                        include "../view/change_info.php";
                        if(isset($_POST["change_info"])) {
                        $idUser = $_POST["idUser"];    
                        $fullname_new = ($_POST["fullName"]);
                        $phonenumber_new =($_POST['phoneNumber']);
                        $addres_new = ($_POST['address']);
                        if(strlen($fullname_new) < 1)
                        {
                                echo "<script type='text/javascript'>alert('Quý khách chưa nhập đủ thông tin');</script>";
                        
                        } 
                        else
                        {
                                $sql_change_info = "UPDATE user SET fullName = '$fullname_new', phoneNumber = '$phonenumber_new',  Address='$addres_new'  WHERE idUser = $idUser";                                
                                $conn->query($sql_change_info);                                
                                if($sql_change_info) {                                
                                        echo "<script type='text/javascript'>alert('Đăng ký thành công- vui Lòng đăng nhập lại');</script>";
                                        unset($_SESSION['username']);
                                       
                                } else {
                                        echo "<script type='text/javascript'>alert('Đăng ký thất bại');</script>"; 
                                }
                                
                                
                        }
                
                        }   
                        
                }else{
                        $MESSAGE = 'Quý khách vừa đổi thông tin vui lòng đăng nhập lại';
                        // header
                        echo "<script type='text/javascript'>alert('$MESSAGE');</script>";
                                include "../view/login/login-form.php";
                                
                                
                        }
        
                    break;
            case 'contact':
                    include "../view/contact.php";
                    break;
            case 'productDetail':
                    include "../model/Products.php";
                    include "../model/ProductDetail.php";
                    $data = "";
                    $size = "";
                    if(isset($_GET['id'])&&$_GET['id']>0){
                        $id= $_GET['id'];
                        $data = getProductDetail($conn, $id);
                        if(isset($_GET['idDetail'])&&$_GET['idDetail']>0){
                                $idDetail= $_GET['idDetail'];
                                $size = getProductDetailById($conn, $idDetail);
                        }
                    }else {
                        $pro=0;
                    }
                    // echo"<pre>";
                    // print_r($data);
                    include "../view/product_details.php";
                    
                    break;
            case 'shop':
                include "../model/ProductDetail.php";
                include "../model/Products.php";
                $products = getAllProduct($conn);
                $brand = getAllBrand();
                $group = getAllGroup();
                    include "../view/shop.php";
                    break;
            case 'register':
                    include "../view/register.php";
                    break;
            case 'login':
                    //login
                        require "../model/user.php";
                        $MESSAGE="";
                        extract($_REQUEST);
                        if(array_key_exists("login", $_REQUEST)){
                        $user = khach_hang_select_by_id($username);
                        if($user){
                                if($user['password'] == MD5($password)){        
                                $MESSAGE = "Đăng nhập thành công!"; 
                                $_SESSION["username"] = $user;                                                 
                                }else{
                                $MESSAGE = "Sai mật khẩu!";
                                }                              
                        }else{
                                $MESSAGE = "Sai tên đăng nhập!";
                        }}                        
                    if(isset($_SESSION['username'])){
                        include '../view/login/info.php';
                    }else{         
                        include "../view/login/login-form.php";
                    }                        
                    //logout
                    // if(isset($_GET['logout'])){
                    //     unset($_SESSION['username']);
                    //     // header
                    //     include "../view/login/login-form.php";
                  
                    //     } 
                    break;
            case 'logout': 
                      unset($_SESSION['username']);
                      $MESSAGE = 'đăng xuất thành công';
                        // header
                        echo "<script type='text/javascript'>alert('$MESSAGE');</script>";
                        $MESSAGE = '';

                        include "../view/login/login-form.php";
            break;

            case 'forgot_password':
                        include "../model/Fotgot_password.php";
                        include "../view/forgotpassword.php";
                        if(isset($_POST['fpw_btn'])) {
                                $email = $_POST['email'];
                                $message = forgot_password($conn, $email);
                                echo "<script type='text/javascript'>alert('$message');</script>";
                        }
                break;
        case "create_account":
                include "../model/create-account.php";
                include '../view/login/create-account.php';
                if(isset($_POST["create"])) {
                        $full_name = $_POST["full_name"];
                        $email = $_POST["email"];
                        $address = $_POST["address"];
                        $phone = $_POST["phone"];
                        $date = $_POST["date"];
                        $username = $_POST["username"];
                        $password = $_POST["password"];

                        if(empty($full_name) || empty($email) || empty($address) || empty($phone) || empty($date) || empty($username) || empty($password)) {
                                echo "<script type='text/javascript'>alert('Vui lòng điền đầy đủ các trường để đăng ký');</script>";
                        } else {
                                $checkEmptyAccount = isEmptyAccount($conn, $email, $username);
                                if($checkEmptyAccount) {
                                   echo "<script type='text/javascript'>alert('Email hoặc username đã được tồn tại');</script>";      
                                } else {
                                        $result = create_account($conn, $full_name, $email, $address, $phone, $date, $username, MD5($password));
                                        if($result) {
                                                echo "<script type='text/javascript'>alert('Đăng ký thành công');</script>"; 
                                        } else {
                                                echo "<script type='text/javascript'>alert('Đăng ký thất bại');</script>"; 
                                        }
                                }
                        }
                       
                }

        break;

            case 'cart':
                        include_once "../view/cart.php";
                        break;

            default:
                include "../model/Products.php";
                include_once "../view/home.php";
                break;
    } 
    }else {
        include "../model/ProductDetail.php";
        include "../model/Products.php";
        $data = getFlashSale($conn);
        $newProducts = getProductsNew($conn);
        $bestSeller = getProductsPoppular($conn);
        $products = getAllProduct($conn);
        include_once "../view/home.php";
    }
  
    include_once "../view/footer.php";
?>
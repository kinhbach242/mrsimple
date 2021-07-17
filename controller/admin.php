<?php

    include_once "../view/header.php";
    
    if(isset($_GET["act"])){
        $act= $_GET["act"];
        switch($act){            
            case 'about':
                    include "../view/about.php";
                    break;
            case 'blog-details':
                    include "../view/blog-details.php";
                    break;
            case 'blog':
                    include "../view/blog.php";
                    break;
            case 'cart':
                    include "../view/cart.php";
                    break;
            case 'checkout':
                    include "../view/checkout.php";
                    break;
            case 'confirmation':
                    include "../view/confirmation.php";
                    break;
            case 'contact':
                    include "../view/contact.php";
                    break;
            case 'productDetail':
                    include "../view/product_details.php";
                    break;
            case 'shop':
                    include "../view/shop.php";
                    break;
            case 'register':
                    include "../view/register.php";
                    break;
            case 'login':
                    //login
                   
                        include "../view/login.php";
                    
                    //logout
                    if(isset($_GET['logout'])&&($_GET['logout'])==1){
                        unset($_SESSION['sid']);
                        unset($_SESSION['suser']);
                        header("location: index.php");
                    }
                   
                    break;
            case 'cart':
                        include_once "../view/cart.php";
                        break;

            default: 
                include_once "../view/home.php";
                break;
    } 
    }else {
        include_once "../view/home.php";
    }
  
    include_once "../view/footer.php";
?>
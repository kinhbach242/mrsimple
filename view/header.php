<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr Simple</title>
    <link rel="shortcut icon" type="image/x-icon" href="../view/assets/img/favicon.jpg">
    <!-- CSS here -->
    <link rel="stylesheet" href="../view/assets/css/reset.css">
    <link rel="stylesheet" href="../view/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../view/assets/css/flaticon.css">
    <link rel="stylesheet" href="../view/assets/css/slicknav.css">
    <link rel="stylesheet" href="../view/assets/css/animate.min.css">
    <link rel="stylesheet" href="../view/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../view/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../view/assets/css/themify-icons.css">
    <link rel="stylesheet" href="../view/assets/css/slick.css">
    <link rel="stylesheet" href="../view/assets/css/nice-select.css">
    <link rel="stylesheet" href="../view/assets/css/style.css">
    <!-- <script src="./assets/js/loading.js"></script> -->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
    <!--? Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="../view/assets/img/logo/logo.svg" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky" id="navbar">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.php"><img src="../view/assets/img/logo/logo-white.png" alt="logo"></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>                                                
                                <ul id="navigation">  
                                    <li class="li-parents" ><a href="index.php">Trang chủ</a></li>
                                    <li class="li-parents"><a href="?act=shop">Cửa hàng</a></li>
                                    <li class="li-parents"><a href="?act=about">Giới thiệu</a></li>
                                    <li class="hot li-parents"><a href="?act=shop">Bán chạy</a></li>
                                    <li class="li-parents"><a href="#">Pages</a>
                                        <ul class="submenu">
                                            <li><a href="?act=login">Đăng nhập</a></li>
                                            <li><a href="?act=cart">Giỏ hàng</a></li>
                                            <li><a href="?act=checkout">Kiểm tra đơn hàng</a></li>
                                        </ul>
                                    </li>
                                    <li class="li-parents"><a href="?act=contact">Liên hệ</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Right -->
                        <div class="header-right">
                            <ul>
                                <li>
                                <div class="nav-search search-switch">
                                    <div id="search" class="search">
                                            <span class="closebtn" onclick="closeSearch()" title="Close">×</span>
                                            <div class="search-content">
                                                <form action="/action_page.php">
                                                    <input type="text" onkeyup="tim(this.value);" autocomplete="off" placeholder="Search.."
                                                        name="search" id="delete_search">
                                                    <button type="submit"><i class="fas fa-search"></i></button>
                                                    <div class="in" style="clear: both;background: white;text-align: initial !important;">
                                                        <ul id="s" style="display: grid !important;justify-content: normal;"></ul>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <button class="openBtn" onclick="openSearch()"><span class="flaticon-search"></span></button>
                                        <script >
                                            //search modal
                                            function openSearch() {
                                                document.getElementById("search").style.display = "block";
                                                var s = document.getElementById("delete_search").value = "";
                                                tim(s);
                                            }

                                            function closeSearch() {
                                                document.getElementById("search").style.display = "none";
                                            }
                                            function tim(x) {
                                                var search = document.getElementById("s");
                                                $.ajax({
                                                    url: '../view/ajax.php',
                                                    type: 'GET',
                                                    data: 'search=' + x,
                                                    success: function(data) {
                                                        search.innerHTML=data;
                                                    }
                                                });
                                                return false;
                                            }
                                        </script>
                                    </div>
                                </li>
                                <li>
                                <?php                                    
                                    if(!isset($_SESSION['username'])){
                                        ?>                                        
                                <a href="?act=login"><span class="flaticon-user"></span></a>                                        
                                        <?php
                                    }                                    
                                    else{
                                        echo"<a href='?act=login'><span class='flaticon-user'></span></a>" .$_SESSION['username']['fullName'];                                        
                                    }                                   
                                    ?></li>
                                <li><a href="?act=shopping-cart"><span class="flaticon-shopping-cart"></span></a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
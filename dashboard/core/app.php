<?php
session_start();
//cái này là định dạng các url cho web nha các bro. 
$ROOT_URL = "..";
$PUBLIC_URL = "$ROOT_URL/public";
$ADMIN_URL = "$ROOT_URL/dashboard";
$SITE_URL = "$ROOT_URL/website";


$IMAGE_DIR =  "../../images/";

/*
 * 2 biến toàn cục cần thiết để chia sẻ giữa controller và view
 */
$VIEW_NAME = "index.php";
$MESSAGE = "";

/**
 * Kiểm tra sự tồn tại của một tham số trong request
 * @param string $fieldname là tên tham số cần kiểm tra
 * @return boolean true tồn tại
 */
function exist_param($fieldname){
    return array_key_exists($fieldname, $_REQUEST);
}
/**
 * Lưu file upload vào thư mục
 * @param string $fieldname là tên trường file
* @param string $target_dir thư mục lưu file
 * @return tên file upload
 */
function save_file($fieldname, $target_dir){
    $file_uploaded = $_FILES[$fieldname];
    $file_name = basename($file_uploaded["name"]);
    $target_path = $target_dir . $file_name;
    move_uploaded_file($file_uploaded["tmp_name"], $target_path);
    return $file_name;
}
/**
 * Tạo cookie
 * @param string $name là tên cookie
 * @param string $value là giá trị cookie
 * @param int $day là số ngày tồn tại cookie
 */
function add_cookie($name, $value, $day){
    setcookie($name, $value, time() + (86400 * $day), "/");
}
/**
 * Xóa cookie
 * @param string $name là tên cookie
 */
function delete_cookie($name){
    add_cookie($name,"", -1);
}

function check_role(){
    global $SITE_URL;
   if(isset($_SESSION['username'])){
       if(($_SESSION['username']['idRole'] == 1) || ($_SESSION['username']['idRole'] == 2) || ($_SESSION['username']['idRole'] == 3)){
           return;
       } else {
           
       }
       if(strpos($_SERVER["REQUEST_URI"], '/dashboard/') == FALSE){
           return;
       }
   }
   $_SESSION['request_uri'] = $_SERVER["REQUEST_URI"];
   header("location: ../../controller/index.php?act=login");
}
function check_admin(){
    global $SITE_URL;
   if(isset($_SESSION['username'])){
       if(($_SESSION['username']['idRole'] == 1)){
           return;
       } else {
           
       }
       if(strpos($_SERVER["REQUEST_URI"], '/dashboard/') == FALSE){
           return;
       }
   }
   $_SESSION['request_uri'] = $_SERVER["REQUEST_URI"];
   echo "<script type='text/javascript'>alert('Không đủ thẩm quyền!');</script>";
   header("location:../controller");
}
function check_manage(){
    global $SITE_URL;
   if(isset($_SESSION['username'])){
       if(($_SESSION['username']['idRole'] == 1) || ($_SESSION['username']['idRole'] == 2)){
           return;
       } else {
           
       }
       if(strpos($_SERVER["REQUEST_URI"], '/dashboard/') == FALSE){
           return;
       }
   }
   $_SESSION['request_uri'] = $_SERVER["REQUEST_URI"];
   echo "<script type='text/javascript'>alert('Không đủ thẩm quyền!');</script>";
   header("location:../controller");
}
function check_data(){
    global $SITE_URL;
   if(isset($_SESSION['username'])){
       if(($_SESSION['username']['idRole'] == 1) || ($_SESSION['username']['idRole'] == 3)){
           return;
       } else {
           
       }
       if(strpos($_SERVER["REQUEST_URI"], '/dashboard/') == FALSE){
           return;
       }
   }
   $_SESSION['request_uri'] = $_SERVER["REQUEST_URI"];
   echo "<script type='text/javascript'>alert('Không đủ thẩm quyền!');</script>";
   header("location:../controller");
}
?>
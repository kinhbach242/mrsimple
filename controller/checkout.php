<?php
session_start();
include "../model/connect.php";
$conn=connect(); 
$cart=(isset($_SESSION['cart']))? $_SESSION['cart'] : [];
    $total_price = 0; 
    foreach($cart as $k =>$v){
    $total_price += ($v['price'] * $v['quantity']);
    }
 $date = date("Y-m-d H:i:s");
if(isset($_POST["btn_paybal"])){
    $idUser= $_SESSION['username']['idUser'];
    $sql="INSERT INTO `bill` (`idUser`, `total`, `date`) 
    VALUES ('$idUser','$total_price' , '$date')";
    $bill=$conn->exec($sql);
    
   
}
$last_id=   $conn->lastInsertId();
// echo"<pre>";
// var_dump($cart);

foreach ($cart as $k => $v) {
    $price=$v['price'];
    $quantity=$v['quantity'];
    $subtotal=$v['price']*$v['quantity'];
    $sql1= " INSERT INTO `billdetail` (`idBillDetails`, `idBill`, `idProductDetail`, `unitPrice`, `quantity`, `discount`, `subtotal`)
    VALUES (NULL, '$last_id', '$k', '$price', '$quantity', NULL, '$subtotal');";
    $billdetail=connect()->exec($sql1);      
}         


header("location: index.php?act=checkouttr");
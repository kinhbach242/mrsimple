<?php
session_start();
include "../model/cart.php"; 
include "../model/connect.php";

if(isset($_GET['id'])){
    $id=$_GET['id'];

//     $action = (isset($_GET['action'])) ? $_GET['action'] : 'add';
//     $quantity =(isset($_GET['quantity'])) ? $_GET['quantity'] : 1;

//     if($quantity <= 0){
//         $quantity=1;
//     }      

//     $item = getProductDetailId(connect(), $id);

// foreach($item as $i){
//         $i=
//         [
//                 'id'=>$i['idProductDetail'],
//                 'color'=>$i['color'],
//                 'size'=>$i['size'],
//                 'price'=>($i['price']>0) ? $i['price'] : $i['oldPrice'],
//                 'img'=>$i['imgUrl'],
//                 'quantity'=> $quantity


//         ]; 
                 
// }

// if($action == 'add'){
//     if(isset($_SESSION['cart'] [$id])){
//         $_SESSION['cart'] [$id]['quantity']+=$quantity;
    
//     }else{
//         $_SESSION['cart'] [$id] = $i;
//     }
// }

// if($action == 'update'){
//     $_SESSION['cart'][$id]['quantity'] = $quantity;
    
// }
// if($action == 'delete'){
//     unset($_SESSION['cart'][$id]);

// }
//     header("location: index.php?act=shopping-cart");
}

    $action = (isset($_GET['action'])) ? $_GET['action'] : 'add';
    $quantity =(isset($_GET['quantity'])) ? $_GET['quantity'] : 1;
    if($quantity <= 0){
    $quantity=1;
    }                                                                                                
$item = getProductDetailId(connect(), $id);


foreach($item as $i){
        $i=
        [
                'id'=>$i['idProductDetail'],
                'color'=>$i['color'],
                'size'=>$i['size'],
                'price'=>($i['price']>0) ? $i['price'] : $i['oldPrice'],
                'img'=>$i['imgUrl'],
                'quantity'=> $quantity


        ]; 
                 
}

if($action == 'add'){
    if(isset($_SESSION['cart'] [$id])){
        $_SESSION['cart'] [$id]['quantity']+=$quantity;
    
    }else{
        $_SESSION['cart'] [$id] = $i;
    }
}

if($action == 'update'){
    $_SESSION['cart'][$id]['quantity'] = $quantity;
}
if($action == 'delete'){
    unset($_SESSION['cart'][$id]);

}
    header("location: index.php?act=shopping-cart");


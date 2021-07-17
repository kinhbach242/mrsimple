<?php   
    function getProductDetail($conn, $id) {
        $sql = "SELECT * FROM `products`AS products INNER JOIN `productdetail` AS productDetail ON productDetail.`idProduct` = products.`idProduct` WHERE products.`idProduct` = '$id'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }
    function getProductDetailById($conn, $id) {
        $sql = "SELECT * FROM `products`AS products INNER JOIN `productdetail` AS productDetail ON productDetail.`idProduct` = products.`idProduct` WHERE productDetail.`idProductDetail` = '$id'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetch();
        return $data;
    }
?>
<?php 
    function getProductsNew($conn) {
        $sql = "SELECT * FROM `products` ORDER BY idProduct DESC LIMIT 4";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }
    function getProductsPoppular($conn){
        $sql = "SELECT DISTINCT *, SUM(billdetail.quantity) AS times
        FROM bill inner join billdetail on bill.idBill= billdetail.idBill inner join productdetail on billdetail.idProductDetail = productdetail.idProductDetail inner join products on products.idProduct = productdetail.idProduct
        GROUP BY productdetail.idProduct
        ORDER BY times DESC LIMIT 6";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
      
    }
    function getFlashSale($conn) {
        $sql = "SELECT products.`idProduct` , products.`nameProduct`,productDetail.`idProductDetail`,productDetail.`price` , productDetail.`oldPrice`,products.`imgUrl` , productDetail.`size`,productDetail.`quantity`,products.`flashSale`,products.`note`,products.`date` FROM `products`AS products INNER JOIN `productdetail` AS productDetail ON productDetail.`idProduct` = products.`idProduct` WHERE products.`flashSale` = 1 GROUP BY idProduct LIMIT 6";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    
    function getAllProduct($conn) {
        $sql = "SELECT products.`idProduct` , products.`nameProduct`,productDetail.`idProductDetail`,productDetail.`price` , productDetail.`oldPrice`,products.`imgUrl` ,productDetail.`quantity`, products.`date`,products.`flashSale`, products.`note` FROM `products`AS products INNER JOIN `productdetail` AS productDetail ON productDetail.`idProduct` = products.`idProduct` GROUP BY idProduct";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }
    function insertbill($conn){
        $sql = "INSERT INTO bill (idBill, idUser, total, date, status)";
        $stmt = $conn->prepare($sql);
        $stmt = execute($sql);
    }    
?>


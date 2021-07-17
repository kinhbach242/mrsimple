<?php
function getProductDetailId($conn, $id) {
    $sql = "SELECT * FROM productdetail WHERE idProductDetail = $id ";
    $stmt = $conn->prepare($sql); 
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}



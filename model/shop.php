<?php
    function getAllShop(){
        $sql = "select * from products inner join productdetail where products.idProduct = productdetail.idProduct GROUP BY products.idProduct";
        return query($sql);
    }
    function getAllBrand(){
        $sql = "select * from brand";
        return query($sql);
    }
    function getAllGroup(){
        $sql = "select * from groupproduct";
        return query($sql);
    }
    function getAllGroupById($id){
        $sql = "select * from groupproduct where idGroupProduct = $id";
        return queryOne($sql);
    }
    function getAllGroupProductById($id){
        $sql = "select * from category where idGroupProduct = $id";
        return query($sql);
    }
    function getAllProductByFilter($where){
        $sql = "select products.idProduct, products.nameProduct, products.idCategory, products.idBrand, products.imgUrl, products.note, price, oldPrice,quantity ,productdetail.idProductDetail from products inner join productdetail on products.idProduct = productdetail.idProduct $where";
        return query($sql);
    }
?>
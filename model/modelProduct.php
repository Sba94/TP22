<?php
class modelProduct{

    private $db;

    function __construct(){
    
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_cevecera;charset=utf8', 'root', '');
    }

    function getProducts(){
        $query = $this->db->prepare("SELECT * FROM product");
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    function getProduct($id){
            
        $query = $this->db->prepare("SELECT * FROM product WHERE id=?");
        $query->execute(array($id));
        $productDetail = $query->fetchAll(PDO::FETCH_OBJ);

        return $productDetail;
    }
    
}
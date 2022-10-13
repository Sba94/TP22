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
    
    function addProduct($name, $price, $stock, $description, $id_category){
        $query = $this->db->prepare("INSERT INTO product (name, price, stock, description, id_category) VALUES (?, ?, ?, ?, ?)");
        $query->execute(array($name, $price, $stock, $description, $id_category));
    }

    function deleteProduct($id){
        $query = $this->db->prepare("DELETE FROM product WHERE id=?");
        $query->execute(array($id));
    }

    function editProduct($name, $price, $stock, $description, $id){
        $query = $this->db->prepare("UPDATE product SET name=?, price=?, stock=?, description=?  WHERE id=?");
        $query->execute(array($name, $price, $stock, $description, $id));
    }

    function addCategory($name, $description){
        $query = $this->db->prepare("INSERT INTO category(name,description) VALUES (?,?)");
        $query->execute(array($name, $description));
    }
}
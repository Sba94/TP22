<?php
class modelCategory{

    private $db;

    function __construct(){
        
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_cevecera;charset=utf8', 'root', '');
    }

    function getCategories(){
        $query = $this->db->prepare("SELECT * FROM category");
        $query->execute();
        $categories = $query->fetchAll(PDO::FETCH_OBJ);
        return $categories;
    }

    function getCategory($id){
            
        $query = $this->db->prepare("SELECT * FROM category WHERE id=?");
        $query->execute(array($id));
        $category = $query->fetchAll(PDO::FETCH_OBJ);

        return $category;
    }

    function getProductsByCategory($id){
        $query = $this->db->prepare("SELECT * FROM product WHERE id_category=?");
        $query->execute(array($id));
        $productsByCategory = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $productsByCategory;
    
    }

    function deleteCategory($id){
        $query = $this->db->prepare("DELETE FROM category WHERE id=?");
        $query->execute(array($id));
    }

    function editCategory($name, $description, $id){
        $query = $this->db->prepare("UPDATE category SET name=?, description=? WHERE id=?");
        $query->execute(array($name, $description, $id));
    }

}
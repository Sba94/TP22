<?php
class modelCategory{

    private $db;

    function __construct(){
        
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_cevecera;charset=utf8', 'root', '');
    }

    function getCategories()
    {
        $query = $this->db->prepare("SELECT * FROM category");
        $query->execute();
        $categories = $query->fetchAll(PDO::FETCH_OBJ);
        return $categories;
    }
}
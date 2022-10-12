<?php

require_once './model/modelCategory.php';
require_once './view/viewCategory.php';
require_once './model/modelProduct.php';
require_once './view/viewProduct.php';
require_once './helpers/userHelper.php';

class adminController {
    private $model;
    private $view;
    private $userHelper;
    private $viewCategory;
    private $modelCategory;


function __construct() {
    $this->modelProduct = new modelProduct();
    $this->viewProduct = new viewProduct();
    $this->model = new modelCategory();
    $this->viewCategory = new viewCategory();
    $this->userHelper = new userHelper();
}

function admin(){
    $this->userHelper->checkloggedIn();
    $categories = $this->modelCategory->getCategories();
    $products= $this->modelProduct->getProducts();
    $this->view->admin($products, $categories);
}

function adminCategory($id){
    $this->userHelper->checkLoggedIn();
    $categories = $this->modelCategory->getCategories($id);
    $this->viewCategory->adminCategory($categories);
}

function adminProduct($id){
    $this->userHelper->checkLoggedIn();
    $products = $this->modelProduct->getProducts($id);
    $categories = $this->modelCategory->getCategories();    
    $this->viewProduct->adminProduct($products, $categories);
}

function addProduct(){
    $this->userHelper->checkLoggedIn();
    $this->modelProduct->addProduct($_POST['name'], $_POST['price'], $_POST['stock'], $_POST['description']);
    header("Location: " . BASE_URL . "admin");
}

function deleteProduct($id){
    $this->userHelper->checkLoggedIn();
    $this->modelProduct->deleteProduct($id);
    header("Location: " . BASE_URL . "admin");
}

function editProduct($id){
    $this->userHelper->checkLoggedIn();
    $this->modelProduct->editProduct($_POST['name'], $_POST['price'], $_POST['stock'], $_POST['description']);
    header("Location: " . BASE_URL . "admin");
}

function addCategory(){
    $this->userHelper->checkLoggedIn();
    $this->modelCategory->addCategory($_POST['name'], $_POST['description']);
    header("Location: " . BASE_URL . "admin");
}

function deleteCategory($id){
    $this->userHelper->checkLoggedIn();
    $this->modelCategory->deleteCategory($id);
    header("Location: " . BASE_URL . "admin");
}

function editCategory($id){
    $this->userHelper->checkLoggedIn();
    $this->modelCategory->editCategory($_POST['name'], $_POST['description'], $_POST['id']);
    header("Location: " . BASE_URL . "admin"); 
}
}

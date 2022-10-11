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
    $this->model = new modelProduct();
    $this->view = new viewProduct();
    $this->model = new modelCategory();
    $this->view = new viewCategory();
    $this->userHelper = new userHelper();
}

function adminView(){
    $this->userHelper->checkloggedIn();
    $categories = $this->modelCategory->getCategories();
    $products= $this->model->getProducts();
    $this->view->adminView($products, $categories);
}

function adminCategory($id){
    $this->userHelper->checkLoggedIn();
    $categories = $this->modelCategory->getCategories();
    $this->view->adminCategory($categories);
}

function adminProduct($id){
    $this->userHelper->checkLoggedIn();
    $products = $this->model->getProducts($id);
    $categories = $this->modelCategory->getCategories();    
    $this->view->adminProduct($products, $categories);
}

function addProduct(){
    $this->userHelper->checkLoggedIn();
    $this->modelProduct->addProduct($_POST['name'], $_POST['price'], $_POST['stock'], $_POST['description']);
    header("Location: " . BASE_URL . "admin");
}

function deleteProduct($id){
    $this->userHelper->checkLoggedIn();
    $this->model->deleteProduct($id);
    header("Location: " . BASE_URL . "admin");
}

function editProduct($id){
    $this->userHelper->checkLoggedIn();
    $name = $_POST['name'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $description = $_POST['description'];
    $id = $this->model->editProduct($name, $price, $stock, $description);
    header("Location: " . BASE_URL . "admin");
}

function addCategory(){
    $this->userHelper->checkLoggedIn();
    $this->modelCategory->addCategory($_POST['name'], $_POST['description']);
    header("Location: " . BASE_URL . "admin");
}

function
}

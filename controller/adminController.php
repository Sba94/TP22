<?php

require_once './model/modelCategory.php';
require_once './view/viewCategory.php';
require_once './model/modelProduct.php';
require_once './view/viewProduct.php';
require_once './helpers/userHelper.php';
require_once './View/view404.php';

class adminController {
    private $model;
    private $view;
    private $userHelper;
    private $viewCategory;
    private $modelCategory;
    private $view404;


function __construct() {
    $this->model = new modelProduct();
    $this->view = new viewProduct();
    $this->modelCategory = new modelCategory();
    $this->viewCategory = new viewCategory();
    $this->userHelper = new userHelper();
    $this->view404 = new view404();
}

function admin(){
    $this->userHelper->checkloggedIn();
    $categories = $this->modelCategory->getCategories();
    $products= $this->model->getProducts();
    $this->view->admin($products, $categories);
}

function adminCategory($id){
    $this->userHelper->checkLoggedIn();
    $categories = $this->modelCategory->getCategories($id);
    $this->viewCategory->adminCategory($categories);
}

function adminProduct($id){
    $this->userHelper->checkLoggedIn();
    $products = $this->model->getProducts($id);
    $categories = $this->modelCategory->getCategories();    
    $this->view->adminProduct($products, $categories);
}

function addProduct(){
    $this->userHelper->checkLoggedIn();
    $this->model->addProduct($_POST['name'], $_POST['price'], $_POST['stock'], $_POST['description']);
    header("Location: " . BASE_URL . "admin");
}

function deleteProduct($id){
    $this->userHelper->checkLoggedIn();
    $this->model->deleteProduct($id);
    header("Location: " . BASE_URL . "admin");
}

function editProduct($id){
    $this->userHelper->checkLoggedIn();
    $this->model->editProduct($_POST['name'], $_POST['price'], $_POST['stock'], $_POST['description'], $_POST['id']);
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

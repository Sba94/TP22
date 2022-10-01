<?php
require_once './model/modelProduct.php';
require_once './view/viewProduct.php';

class controllerProduct{

    private $model;
    private $view;

    function __construct(){
        $this->model = new modelProduct();
        $this->view = new viewProduct();

    }

    function home(){
        $products = $this->model->getProducts();
        $this->view->home($products);

    }
}

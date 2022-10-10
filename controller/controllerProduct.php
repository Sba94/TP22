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
        session_start();
        $products = $this->model->getProducts();
        $this->view->home($products);

    }

    public function showDetail($id){
        session_start();
        $productDetail = $this->model->getProduct($id);
        if(!empty($productDetail))
        $this->view->showDetail($productDetail);
        else
        $this->view404->show404();
    }
}

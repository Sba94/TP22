<?php
require_once './model/modelCategory.php';
require_once './view/viewCategory.php';

class controllerCategory{

    private $model;
    private $view;

    function __construct(){
        $this->model = new modelCategory();
        $this->view = new viewCategory();

    }

    function showCategories(){
        $categories = $this->model->getCategories();
        $this->view->showCategories($categories);

    }

    function showCategory($name){
        $category = $this->model->getCategory($name);
        $productsByCategory = $this->model->getProductsByCategory($name);
        $this->view->showCategory($category, $productsByCategory);
    }
}
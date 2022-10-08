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

    function home(){
        $categories = $this->model->getCategories();
        $this->view->home($categories);

    }
}
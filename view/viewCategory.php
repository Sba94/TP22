<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
class viewCategory{

    private $smarty;

    function __construct(){
       $this->smarty = new Smarty();
    }

    function showCategories($categories){
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('templates/categories.tpl');
    }

    function showCategory($category, $productsByCategory){
            
        $this->smarty->assign('category', $category);
        $this->smarty->assign('productsByCategory',  $productsByCategory);
        $this->smarty->display('templates/category.tpl');

    }
    
}
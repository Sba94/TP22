<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
class viewCategory{

    private $smarty;

    function __construct(){
       $this->smarty = new Smarty();
    }

    function home($categories){
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('templates/home.tpl');
    }
}
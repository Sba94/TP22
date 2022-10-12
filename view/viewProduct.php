<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
class viewProduct{

    private $smarty;

    function __construct(){
       $this->smarty = new Smarty();
    }

    function home($products){
        $this->smarty->assign('products', $products);
        $this->smarty->display('templates/home.tpl');
    }

    function showDetail($productDetail){

        $this->smarty->assign('productDetail', $productDetail);
        $this->smarty->display('templates/details.tpl');

    }


    function admin($categories, $product){
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('product', $product);
        $this->smarty->display('templates/admin');
    }

    function adminProduct($categories, $product){
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('product', $product);
        $this->smarty->display('templates/editProduct.tpl');
    }

}

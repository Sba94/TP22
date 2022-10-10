<?php
require_once 'controller/controllerProduct.php';
require_once 'controller/controllerCategory.php';
require_once 'controller/userController.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

$controller = new controllerProduct();
$controllerCategory = new controllerCategory();


switch ($params[0]) {
    case 'home':
        $controller->home();
        break;

    case 'details':
        $controller = new controllerProduct(); 
        $controller->showDetail($params[1]);
    break;
    
    case 'category':
        $controllerCategory = new controllerCategory();
        if(isset($params[1]))
        $controllerCategory->showCategory($params[1]);
        else
        $controllerCategory->showCategories();
        break;


       
            case 'userLogin':
                $userController = new userController();
                $userController->userLogin();
                break;

            case 'validate':
                $userController = new userController();
                $userController->validateUser();
                break;
        
            case 'logout':
                $userController = new userController();
                $userController->logout();
                break;
        

    default:
        echo ('404 Page not found');
        break;
}

<?php
require_once 'controller/controllerProduct.php';
require_once 'controller/controllerCategory.php';
require_once 'controller/userController.php';
require_once 'controller/adminController.php';
require_once './View/view404.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'home':
        $controller = new controllerProduct();
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

    case 'admin':
        $adminController = new adminController();
        $adminController->admin();
        break;  

    case 'adminProduct':
        $id = $params [1];
        $adminController = new adminController();
        $adminController->adminProduct($id);
        break;

    case 'addProduct':
        $adminController = new adminController();
        $adminController->addProduct();
        break;

    case 'deleteProduct':
        $adminController = new adminController();
        $adminController->deleteProduct($params[1]);
        break;

    case 'editProduct':
        $id = $params[1];
        $adminController = new adminController();
        $adminController->editProduct($id);
        break;

    case 'adminCategory':
        $id = $params [1];
        $adminController = new adminController();
        $adminController->adminCategory($id); 
        break;

    case 'addCategory':
        $adminController = new adminController();
        $adminController->addCategory();
        break;

    case 'deleteCategory':
        $id = $params[1];
        $adminController = new adminController();
        $adminController->deleteCategory($id);
        break;

    case 'editCategory':
        $id = $params[1];
        $adminController = new adminController();
        $adminController->editCategory($id);
        break;

            
    default:
        $view404 = new view404();
        $view404->show404();
        break;
}

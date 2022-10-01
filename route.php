<?php
require_once 'controller/controllerProduct.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);
$controller = new controllerProduct();


switch ($params[0]) {
    case 'home':
        $controller->home();
        break; 
    default:
        echo ('404 Page not found');
        break;
}

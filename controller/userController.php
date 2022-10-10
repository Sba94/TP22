<?php

require_once './view/userView.php';
require_once './model/userModel.php';


class userController {
    private $view;
    private $model;

        function __construct(){   
            $this->model = new userModel();
            $this->view = new userView();
        }
    
        function userLogin(){
            $this->view->userLogin();
        }

function validateUser() {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = $this->model->getUserByEmail($email);
    if ($user && password_verify($password, $user->password)) {
        session_start();
            $_SESSION['USER_ID'] = $user->id;
            $_SESSION['USER_EMAIL'] = $user->email;
            $_SESSION['IS_LOGGED'] = true;
        header("Location: " . BASE_URL);
    } else {
        $this->view->userLogin("El usuario o la contraseña no existe.");
        } 
    
function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }
}




}
<?php
    require_once "./libs/smarty-4.2.1/libs/Smarty.class.php";
    
    class view404{
        
        private $smarty;

        public function __construct(){
            $this->smarty = new Smarty();
        }
        
        function show404(){
            $this->smarty->display('templates/404.tpl');
        }

    }
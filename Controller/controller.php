<?php
require_once "./RouterAvanzado.php";
require_once "View/View.php";

class Controller{
    private $view;

    public function __construct(){
        $this->view= new View();
    }

    function home(){
        $this->view->showHome();
    }
    
    
}
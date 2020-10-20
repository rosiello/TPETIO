<?php
require_once "./RouterAvanzado.php";
require_once "View/View.php";

class controller{
    private $view;

    public function __construct(){
        $this->view= new View();
    }
//NAVEGACION//
    function home(){
        $this->view->showHome();
    }
    function galeria(){
        $this->view->showGaleria();
    }
    function nosotros(){
        $this->view->showNosotros();
    } 
    function tecnicas(){
        $this->view->showTecnicas();
    }
    function login(){
        $this->view->showLogin();
    }
}
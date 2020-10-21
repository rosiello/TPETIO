<?php

require_once "RouterClass.php";
require_once "Controller/Controller.php";

define ("BASE_URL", '//'.$_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]).'/');


$r = new Router();

//Navegacion//
$r->addRoute("home", "GET","Controller","home"); 
$r->addRoute("galeria", "GET","Controller","galeria");
$r->addRoute("tecnicas", "GET","Controller","tecnicas");
$r->addRoute("nosotros", "GET","Controller","nosotros");
$r->addRoute("contacto", "GET","Controller","home");
$r->addRoute("agradecimientos", "GET","Controller","home");
$r->addRoute("login", "GET","Controller","login");
$r->addRoute("artistas", "GET", "Controller","artistas");
  
  //////////////////DEFAULT/////////////////////
$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);
$r->setDefaultRoute("Controller", "home");




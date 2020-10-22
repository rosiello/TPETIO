<?php

require_once "RouterClass.php";
require_once "Controller/Controller.php";

define ("BASE_URL", '//'.$_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]).'/');


$r = new Router();

//Navegacion//

  //////////////////DEFAULT/////////////////////
$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);
$r->setDefaultRoute("Controller", "Home");




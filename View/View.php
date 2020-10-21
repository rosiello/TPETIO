<?php
require_once "Controller/Controller.php";
require_once "libs/Smarty.class.php";

    class View{
        function __construct(){

        }

        function showHome(){
            $smarty = new Smarty();
            $smarty->assign("titulo","Me gusta el arte");
            $smarty->display("templates/home.tpl");
        }
        function showGaleria(){
            $smarty = new Smarty();
            $smarty->assign("titulo","Me gusta el arte");
            $smarty->display("templates/galeria.tpl");
        }
        function showNosotros(){
            $smarty = new Smarty();
            $smarty->assign("titulo","Me gusta el arte");
            $smarty->display("templates/nosotres.tpl");
        }
        function showTecnicas(){
            $smarty = new Smarty();
            $smarty->assign("titulo","Me gusta el arte");
            $smarty->display("templates/tecnicas.tpl");
        }
        function showLogin(){
            $smarty = new Smarty();
            $smarty->assign("titulo","Me gusta el arte");
            $smarty->display("templates/login.tpl");
        }
        function showArtistas(){
            $smarty = new Smarty();
            $smarty->assign("titulo","El arte vive en nosotrxs");
            $smarty->display("templates/artistas.tpl");
            
        }
            
          
    }
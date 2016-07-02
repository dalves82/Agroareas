<?php

require_once("in/classes/Agroareas.class.php");


switch($_POST['acc']){
    
    case("login"):
        
        switch($_POST['obj']){
        
            case("objUsuarioapp"):
                $aa = new Agroareas();
                
                if($aa->autenticarUsuario($_POST['email'], $_POST['password'])){
                    header("location: in/panel.php");
                }else{
                    header("location: login.php?r=x");
                }
                break;
        }
        break;
        
    case("registro"):
        
        switch($_POST['obj']){
        
            case("objUsuarioapp"):
                $aa = new Agroareas();
                if($aa->registrarUsuario($_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['password'])){
                    if($aa->autenticarUsuario($_POST['email'], $_POST['password'])){
                        header("location: in/panel.php");
                    }else{
                        header("location: login.php?r=x");
                    }
                }
                break;
        }
        break;
}

?>



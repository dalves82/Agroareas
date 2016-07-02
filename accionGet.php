<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//session_start();
include("verif.php");

require_once("classes/Observatorio.class.php");


switch($_GET['acc']){
    
    case("eliminar"):

        switch($_GET['obj']){
            
            case("objUsuario"):
                
                $o = new Observatorio();
                echo $o->eliminarUsuario($_GET['id']);
                break;
            
            case("objPoblacionFlotante"):
                
                $o = new Observatorio();
                if($o->eliminarPoblacionFlotante($_GET['fch'],$_GET['h'])){
                
                    header("location: panel.php");
                    
                }else{
                    header("location: panel.php?e=db");
                }
                break;
                
            case("objMedioTransporte"):
                
                $o = new Observatorio();
                echo $o->eliminarMedioTransporte($_GET['id']);
                break;
            
            case("objZona"):
                
                $o = new Observatorio();
                echo $o->eliminarZona($_GET['id']);
                break;
            
            case("objContinente"):
                
                $o = new Observatorio();
                echo $o->eliminarContinente($_GET['id']);
                break;
            
            case("objCiudad"):
                
                $o = new Observatorio();
                echo $o->eliminarCiudad($_GET['id']);
                break;
            
            case("objPuerto"):
                
                $o = new Observatorio();
                echo $o->eliminarPuerto($_GET['id']);
                break;
            
            case("objHotel"):
                
                $o = new Observatorio();
                echo $o->eliminarHotel($_GET['id']);
                break;
            
            case("objPais"):
                
                $o = new Observatorio();
                echo $o->eliminarPais($_GET['id']);
                break;
            
            case("objCentroInformes"):
                
                $o = new Observatorio();
                echo $o->eliminarCentroInformes($_GET['id']);
                break;
        }
        break;

    case("editar"):
        
        switch($_GET['obj']){
        
            case("objMedioTransporte"):
                $o = new Observatorio();
                echo $o->actualizarMedioTransporte($_POST['name'], $_POST['value'], $_POST['pk']);
                break;
            
            case("objZona"):
                $o = new Observatorio();
                echo $o->actualizarZona($_POST['name'], $_POST['value'], $_POST['pk']);
                break;
            
            case("objContinente"):
                $o = new Observatorio();
                echo $o->actualizarContinente($_POST['name'], $_POST['value'], $_POST['pk']);
                break;
            
            case("objCiudad"):
                $o = new Observatorio();
                echo $o->actualizarCiudad($_POST['name'], $_POST['value'], $_POST['pk']);
                break;
            
            case("objPuerto"):
                $o = new Observatorio();
                echo $o->actualizarPuerto($_POST['name'], $_POST['value'], $_POST['pk']);
                break;
            
            case("objPais"):
                $o = new Observatorio();
                echo $o->actualizarPais($_POST['name'], $_POST['value'], $_POST['pk']);
                break;
            
            case("objHotel"):
                $o = new Observatorio();
                echo $o->actualizarHotel($_POST['name'], $_POST['value'], $_POST['pk']);
                break;
            
            case("objCentroInformes"):
                $o = new Observatorio();
                echo $o->actualizarCentroInformes($_POST['name'], $_POST['value'], $_POST['pk']);
                break;
            
            case("objUsuarioAsociadoHotel"):
                $o = new Observatorio();
                echo $o->actualizarAsociadoUsuario($_POST['value'], $_POST['pk']);
                break;
            
            case("objUsuarioAsociadoInformes"):
                $o = new Observatorio();
                echo $o->actualizarAsociadoUsuario($_POST['value'], $_POST['pk']);
                break;
            
            case("objUsuarioPass"):
                $o = new Observatorio();
                if($o->resetearPassUsuario($_GET['id'])){
                    header("location: panel.php?t=gUsuarios");
                }
                break;
        }
        break;
}
     

?>

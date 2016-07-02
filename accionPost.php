<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//session_start();
include("verif.php");

require_once("classes/Agroareas.class.php");


switch($_POST['acc']){
    
    /*case("registro"):
        
        switch($_POST['obj']){
        
            case("objUsuarioapp"):
                $aa = new Agroareas();
                if($aa->registrarUsuario($_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['password'])){
                    if($aa->autenticarUsuario($email, $pass)){
                        header("location: panel.php");
                    }else{
                        header("location: login.php?r=x");
                    }
                }
                break;
        }
        break;*/
  
    case("actualizarUsuario"):
        
        switch ($_POST['obj']){
        
            case("usuario"):
                
                break;
        }
        break;
    
    case("alta"):
        
        switch($_POST['obj']){
        
            case("objUsuario"):
                $o = new Observatorio();
                echo json_encode($o->guardarUsuario($_POST['nomUsuario'], $_POST['codRolUsuario']));
                break;
            
            
            case("objIngresosPuertoPais"):
                $o = new Observatorio();
                echo json_encode($o->procesarIngresoPuertoPais($_POST['selPuerto'], $_POST['ingPuertosFchDesde'], $_POST['ingPuertosFchHasta'], $_POST['selPais'], $_POST['ingPuertosPaisCantidad']));
                break;
        
            case("objIngresosPuertoContinente"):
                $o = new Observatorio();
                echo json_encode($o->procesarIngresoPuertoContinente($_POST['selPuerto'], $_POST['ingPuertosFchDesde'], $_POST['ingPuertosFchHasta'], $_POST['selContinente'], $_POST['ingPuertosContCantidad']));
                break;
            
            case("objRegistroCentroInformes"):
        
                //echo "<pre>";
                //print_r($_POST);
                
                $ci ="";
                if(isset($_POST['selCentroInforme'])){
                    $ci = $_POST['selCentroInforme']; 
                }else{
                    $ci = $_SESSION['CodCentro'];
                }
                
                $o = new Observatorio();
                $r = $o->procesarRegistroVisitasCentroInformes($ci, $_POST['infFchDesde'], $_POST['infFchHasta'], $_POST['infOmnibus'], $_POST['infExcursion'], $_POST['infBarco'], $_POST['infVehiculo'], $_POST['infOtros'], $_POST['infPorDia'], $_POST['infPernocta'], $_POST['infUruguay'], $_POST['infCanada'], $_POST['infArgentina'], $_POST['infUSA'], $_POST['infBrasil'], $_POST['infEuropa'], $_POST['infChile'], $_POST['infAsia'], $_POST['infRestoAmerica'], $_POST['infAfrica'], $_POST['infOceania']);
                
                if(!$r){
                    die("Error al procesar el registro de visitas de centros de informes.");
                }else{
                    header("location: panel.php?r=ok");
                }
                break;
                
            case("objPoblacionFlotante"):
                
                if($_FILES['archivo']['name']<>""){
                    
                    $o = new Observatorio();
                    
                    $hotel = $o->consultarNomAsociadoUsuario($_SESSION['CodUsuario']);
                    
                    $archivo="";
                    $archivo = procesarArchivo($_FILES['archivo'], $hotel, $_POST['fchPoblacionFlotante']);
                    
                    if(count($o->cargarOcupacionFecha($_POST['fchPoblacionFlotante'],$_SESSION['CodHotel']))>0){
                        $result = "exis"; 
                    }else{
                        $result = $o->procesarPoblacionFlotante($_POST['fchPoblacionFlotante'],$_SESSION['CodHotel'],$archivo);
                    }
                    switch($result){
                        
                        case("ok"):
                            $para = "comunicacion@coloniaturismo.com";
                            $copia = $_POST['ccMailPoblacionFlotante'];
                            $asunto = $hotel." - ".$_POST['fchPoblacionFlotante']." Población flotante.";
                            $cuerpo = "El usuario ".$_SESSION['NomUsuario']." envia como adjunto la planilla de población flotante del hotel ".$hotel." correspondiente a ".$_POST['fchPoblacionFlotante'];
                            //$o->enviarMail($para, $copia, $asunto, $cuerpo, $archivo);
                            unlink("archivos/".$archivo);
                            header("location: panel.php?fch=".$_POST['fchPoblacionFlotante']);
                            break;
                        case("err"):
                            header("location: panel.php?e=db");
                            break;
                        case("exis"):
                            header("location: panel.php?e=exis&fch=".$_POST['fchPoblacionFlotante']);
                            break;
                        default:
                            if($result<>""){
                                header("location: panel.php?celda=".$result);
                            }else{
                                header("location: panel.php");
                            }
                            break;
                    }
                }
                break;
            
        }
        break;
    
    case("editar"):
        
        switch ($_POST['obj']) {
            case ("objUsuarioPass"):
                $o = new Observatorio();
                if($o->actulizarPassUsuario($_POST['myPassword'], $_POST['id'])){
                    header("location: logout.php?l=c");
                }
                break;
        }
        
        break;
    
}
     

/*
function procesarArchivo($file,$hotel,$fecha){

    $archivo="";

    if($file["name"]<>""){// obtenemos los datos del archivo

        $tamano     = $file['size'];
        $tipo       = $file['type'];
        $archivo    = $file['name'];
        $prefijo    = str_replace(" ", "_", $hotel)."_".$fecha;

        $planilla     = $prefijo."_".substr(md5(uniqid(rand())),0,6)."_".str_replace(" ", "_", $archivo);

        if ($archivo != "") {
            // guardamos el archivo a la carpeta files
            $destino =  "archivos/".$planilla;
            if (copy($file['tmp_name'],$destino)) {
                //echo "Archivo subido: <b>".$archivo."</b>";
            } else {
                //echo "Error al subir el archivo";
            }
        } else {
            //echo "Error al subir archivo";
        }


        $archivo = $planilla;
        //unlink($destino);


    }

    return $archivo;
    

}
*/

?>

<?php

//iniciamos la sesión
session_name("loginUsuario");
session_start();

//antes de hacer los cálculos, compruebo que el usuario está logueado
//utilizamos el mismo script que antes
if (!isset($_SESSION["UsId"]) || (isset($_GET['s']) && $_GET['s']=='c')) {
    //si no está logueado lo envío a la página de autentificación
    session_destroy();
    header("Location: ../index.php?l=s");
} 
 


?>
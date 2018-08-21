<?php 
session_start(); //Inicia una nueva sesión o reanuda la existente
require '../../conexion.php';
//Evaluamos si existe la variable de sesión id_usuario, si no existe redirigimos al index
if(!isset($_SESSION["id_usuario"])){
    header("Location: ../../index.php");
}

?>
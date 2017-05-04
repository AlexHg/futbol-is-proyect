<?php 
Model::load("Usuario");

$user = Usuario::registrarCuenta($_POST["nombre"],$_POST["apellidos"],$_POST["correo"],$_POST["telefono"], $_POST["contrasena"]);

switch ($user) {
    case 0:
    	$_SESSION['n'] = "exito";
        Flight::redirect('/registrarCuenta?n=done');
        break;
    case 1:
    	$_SESSION['n'] = "error";
        Flight::redirect('/registrarCuenta?n=err');
    default:
        // Otro Error
        echo $user;
        break;
}
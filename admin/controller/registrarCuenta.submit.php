<?php 
Model::load("Usuario");

$user = Usuario::registrarCuenta($_POST["nombre"],$_POST["apellidos"],$_POST["correo"],$_POST["telefono"], $_POST["contrasena"]);


switch ($user) {
    case 0:
        Flight::redirect('/registrarCuenta?n=exito');
        break;
    case 1:
        Flight::redirect('/registrarCuenta?n=error');
    default:
        // Otro Error
        echo $user;
        break;
}
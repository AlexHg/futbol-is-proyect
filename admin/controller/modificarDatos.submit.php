<?php
    Model::load("Usuario");

    $nombre = $_POST["name"];
	$apellido = $_POST["lastname"];
	$telefono = $_POST["phone"];
	$contrasena = $_POST["pass"];
	$correo = $_POST["mail"];
	
	if(Usuario::updateDatosUsuario($nombre, $apellido, $telefono, $contrasena, $correo)){
        Flight::redirect('/modificarDatos?n=done');
    }else{
        Flight::redirect('/modificarDatos?n=err');
    }
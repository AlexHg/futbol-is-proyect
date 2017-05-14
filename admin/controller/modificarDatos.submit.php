<?php
    Model::load("Usuario");

    $nombre = $_POST["name"];
	$apellido = $_POST["lastname"];
	$telefono = $_POST["phone"];
	$contrasena = $_POST["pass"];
	$correo = $_POST["mail"];
	
	if(Usuario::updateDatosUsuario($nombre, $apellido, $telefono, $contrasena, $correo)){
        Session::start(
            array(
                "role"=>$_SESSION["role"], 
                "rolename"=>$_SESSION["rolename"], 
                "name" => $_POST["name"]." ".$_POST["lastname"], 
                "email" => $_SESSION["email"], 
                "avatar" => $_SESSION["avatar"]
            )
        );
        Flight::redirect('/modificarDatos?n=done');
    }else{
        Flight::redirect('/modificarDatos?n=err');
    }
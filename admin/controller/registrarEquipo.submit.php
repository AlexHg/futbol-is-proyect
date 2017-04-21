<?php
Model::load("Jugador");
Model::load("Equipo");

$Equipo = $_POST["name"];
$Correo = $_POST["email"];
$Desc = $_POST["uniforme"];

if(Jugador::registrarEquipo($Correo, $Equipo, $Desc) ){
	Session::start(array("role"=>2, "rolename"=>"Capitan", "name" => $_SESSION["name"], "email" => $_SESSION["email"], "avatar" => $_SESSION["avatar"]));
	Flight::redirect('/home?n=exito');
}else{
	Flight::redirect('/registrarEquipo?n=error');
}



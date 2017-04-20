<?php
Model::load("Capitan");
Model::load("Equipo");

$idEquipo = Equipo::getIdEquipoByCorreo($_SESSION['email']);
$op = Capitan::enviarPeticionTorneo($_POST['seleccionados'][0],$idEquipo);
switch ($op) {
    case 0: Flight::redirect('/inscripcionTorneo?n=exito'); break;
    case -1: Flight::redirect('/inscripcionTorneo?n=aprovado'); break;
    case -2: Flight::redirect('/inscripcionTorneo?n=espera'); break;
    default: echo $op;
}


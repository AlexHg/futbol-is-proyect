<?php
Model::load("Jugador");
/*$op = Jugador::registrarEquipo($_SESSION['email'],$_POST['nombreEquipo'],$_POST['uniforme']);
switch ($op) {
	case 0: $_SESSION['n'] = "exito"; break;
	case 1: $_SESSION['n'] = "error"; break;
	default: echo $op; break;
}
*/
Flight::redirect('/registrarEquipo');

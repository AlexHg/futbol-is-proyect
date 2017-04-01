<?php
function getConexion() {
	$conexion = mysqli_connect('localhost','root','','torneos');
	mysqli_query($conexion, "SET NAMES 'utf8'");

	if ($conexion->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
	}
	return $conexion;
}
?>
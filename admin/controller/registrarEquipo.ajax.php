<?php
$conexion = mysqli_connect('localhost','root','','torneos');
mysqli_query($conexion,"SET NAMES 'utf8'");

$Equipo = $_POST["name"];
$Correo = $_POST["email"];

$consulta1 = "select IDJugador from jugador where correo ='$Correo'";
$res = mysqli_query($conexion, $consulta1);
$IDJugador = mysqli_fetch_array($res, MYSQLI_NUM);

$sql = "insert into Solicitud_Equipo(idSolicitud,NombreEquipo,IDJugador,Tipo_Solicitud)values(null,'$Equipo','$IDJugador[0]',1)";

if($res1=$conexion->query($sql)){
    echo 1;
}
else {
    echo "Error: " . mysqli_error($conexion);
}
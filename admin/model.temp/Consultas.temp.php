<?php
Model::use("conexionDB.temp");

function DatosJugador($sesion)
{
	$conexion = getConexion();
	
	$sql = "select * from usuario where Correo = '$sesion'";
	
	if($res=$conexion->query($sql)){
		$Datos = mysqli_fetch_array($res, MYSQLI_NUM);
			return $Datos;
	}
	else {
		return "Error: " . mysqli_error($conexion);
	}
	
	mysqli_close($conexion);
	
}

function Idcapitan($sesion)
{
		$conexion = getConexion();
		
		$sql = "select IDCapitan from capitan where Correo='$sesion'";
		
		if($res=$conexion->query($sql)){
		$IDCapitan = mysqli_fetch_array($res, MYSQLI_NUM);
			return $IDCapitan;
		}
		else {
			return "Error: " . mysqli_error($conexion);
		}
		
		mysqli_close($conexion);
}

function DatosSesion($sesion)
{
	$conexion = getConexion();
	$sql = "select * from usuario where Correo = '$sesion'";
	if($res=$conexion->query($sql)){
		$row = mysqli_fetch_array($res, MYSQLI_NUM);
			return $row;
	}
	else {
			return "Error: " . mysqli_error($conexion);
	}
	mysqli_close($conexion);
}

function Jugadores()
{
		$conexion = getConexion();
		$sql ="select Nombre,Apellidos,Correo from Usuario where EsCapitan=0;";
		if($res=$conexion->query($sql)){
			return $res;
		}
		else {
			return "Error: " . mysqli_error($conexion);
		}
		mysqli_close($conexion);
}

function EnviarInvitacion($correojugador,$correocapitan)
{
	$conexion = getConexion();
	$consulta1 ="select IDEquipo from Equipo e,Capitan c where e.idcapitan=c.idcapitan and c.correo='$correocapitan'";
	$res = mysqli_query($conexion, $consulta1);
	$IDEquipo = mysqli_fetch_array($res, MYSQLI_NUM);
	
	$consulta2 = "select IDJugador from jugador where Correo='$correojugador'";
	$aux = mysqli_query($conexion, $consulta2);
	$IDJugador = mysqli_fetch_array($aux, MYSQLI_NUM); 
	
	$sql = "insert into Solicitud(IDEquipo,IDJugador,Tipo_Solicitud) values($IDEquipo[0],$IDJugador[0],1)";
	
	if (mysqli_query($conexion, $sql)) {
		return 1;
	} else {
	    return "Error: " . mysqli_error($conexion);
	}
	
	mysqli_close($conexion);
}

function Equipos()
{
		$conexion = getConexion();
		$sql = "select u.Nombre, e.NombreEquipo from Equipo e,Capitan c,Usuario u where e.IDCapitan=c.IDCapitan and c.correo=u.correo;";
		$res = mysqli_query($conexion, $sql);
		if($res = mysqli_query($conexion, $sql)){
		return $res;
		}
		else {
			return "Error: " . mysqli_error($conexion);
		}
		mysqli_close($conexion);
}

function EnviarSolicitud($equipo,$correo)
{
	$conexion = getConexion();
	$consulta1 = "select IDEquipo from Equipo e where e.NombreEquipo='$equipo'";
	$res = mysqli_query($conexion, $consulta1);
	$IDEquipo = mysqli_fetch_array($res, MYSQLI_NUM);
	
	$consulta2 = "select IDJugador from jugador where Correo='$correo'";
	$aux = mysqli_query($conexion, $consulta2);
	$IDJugador = mysqli_fetch_array($aux, MYSQLI_NUM);
	
	$sql = "insert into Solicitud(IDEquipo,IDJugador,Tipo_Solicitud) values($IDEquipo[0],$IDJugador[0],0)";
	
	
	if (mysqli_query($conexion, $sql)) {
		return 1;
	} else {
	    return "Error: " . mysqli_error($conexion);
	}
	
	mysqli_close($conexion);
}

function getJugadoresEquipo($idCapitan){
	$conexion = getConexion();
	$consulta ="SELECT usuario.Nombre,usuario.Apellidos,usuario.Correo FROM usuario
				JOIN jugador USING(Correo)
				JOIN equipo_jugador USING(IDJugador)
				JOIN  equipo USING(IDEquipo)
				WHERE IDCapitan ='$idCapitan';";
	if ($resultado=$conexion->query($consulta)) {
		return $resultado;
	} else {
	    return "Error: " . mysqli_error($conexion);
	}
	mysqli_close($conexion);
}

function eliminarJugadorEquipo($correoEliminar,$idCapitan){
	$conexion = getConexion();
	$consulta ="DELETE d from equipo_jugador d
				JOIN jugador USING(IDJugador)
				JOIN equipo USING(IDEquipo)
				JOIN capitan USING(IDCapitan)
				WHERE jugador.Correo='$correoEliminar' AND capitan.IDCapitan='$idCapitan';";
	if ($conexion->query($consulta)) {
		return 1;
	} else {
	    return "Error: " . mysqli_error($conexion);
	}
	mysqli_close($conexion);
}

function insertarUsuario($nombre,$apellidos,$correo,$telefono,$contrasena,$imagen){
	$conexion = getConexion();
	$consulta1="INSERT INTO usuario(correo,Nombre,Apellidos,Contraseña,Telefono,EsCapitan,imagen) values('$correo','$nombre','$apellidos','$contrasena','$telefono',0,'111.JPG');";
	$consulta2="insert into jugador (Correo) values('$correo');";
	$resultado1=$conexion->query($consulta1);
	if ($resultado1) {
			$resultado2=$conexion->query($consulta2);
			return 1;
	} else {
		if($conexion->errno==1062){
			return "El correo ya existe";
		}else{
	    	return "Error: " . mysqli_error($conexion);}
	}
	mysqli_close($conexion);
}

function getSolicitudesDeJugador($idCapitan){
	$conexion = getConexion();
	$consulta ="SELECT usuario.Nombre, usuario.Apellidos,usuario.Correo FROM usuario
				JOIN jugador USING(Correo)
				JOIN solicitud USING(IDJugador)
				JOIN equipo USING(IDEquipo)
				JOIN capitan USING(IDCapitan)
				WHERE Tipo_Solicitud=0 AND IDCapitan='$idCapitan';";
	if ($resultado=$conexion->query($consulta)) {
		return $resultado;
	} else {
	    return "Error: " . mysqli_error($conexion);
	}
	mysqli_close($conexion);
}

function aceptarSolicitudDeJugador($idCapitan,$correoJugador){
	$conexion = getConexion();
	$consulta ="INSERT INTO equipo_jugador(IDEquipo, IDJugador)
				VALUES((SELECT IDEquipo FROM equipo WHERE IDCapitan='$idCapitan') ,
				(SELECT IDJugador from jugador WHERE Correo='$correoJugador'))";
	$consulta2="DELETE FROM solicitud WHERE
				IDEquipo=(SELECT IDEquipo FROM equipo WHERE IDCapitan='$idCapitan') AND IDJugador=(SELECT IDJugador from jugador WHERE Correo='$correoJugador');";
	if ($conexion->query($consulta) && $conexion->query($consulta2)) {
		return 1;
	} else {
	    return "Error: " . mysqli_error($conexion);
	}
	mysqli_close($conexion);

}

function rechazarSolicitudDeJugador($idCapitan,$correoJugador){
	$conexion = getConexion();
	$consulta="DELETE FROM solicitud WHERE
				IDEquipo=(SELECT IDEquipo FROM equipo WHERE IDCapitan='$idCapitan') AND IDJugador=(SELECT IDJugador from jugador WHERE Correo='$correoJugador');";
	if ($conexion->query($consulta)) {
		return 1;
	} else {
	    return "Error: " . mysqli_error($conexion);
	}
	mysqli_close($conexion);
}

function getResultados($NombreEquipo){
	$conexion = getConexion();

	$consulta1="select count(*) as juegosTotales from equipo e, JuegosResultado j
				where e.idequipo=j.idequipo and e.NombreEquipo like concat('$NombreEquipo','%');";
	$consulta2="select count(*) as juegosGanados from equipo e, JuegosResultado j 
				where e.idequipo=j.idequipo and j.golesaFavor>j.golesencontra and e.NombreEquipo like concat('$NombreEquipo','%');";
	$consulta3="select count(*) as juegosEmpatados from equipo e, JuegosResultado j 
				where e.idequipo=j.idequipo and j.golesaFavor=j.golesencontra and e.NombreEquipo like concat('$NombreEquipo','%');";
	$consulta4="select count(*) as juegosPerdidos from equipo e, JuegosResultado j 
				where e.idequipo=j.idequipo and j.golesaFavor<j.golesencontra and e.NombreEquipo like concat('$NombreEquipo','%');";
	$consulta5="select sum(Golesafavor) as golesaFavor from equipo e, JuegosResultado j
				where e.idequipo=j.idequipo
				and e.nombreequipo like concat('$NombreEquipo','%');";
	$consulta6="select sum(Golesencontra) as golesenContra from equipo e, JuegosResultado j
				where e.idequipo=j.idequipo
				and e.nombreequipo like concat('$NombreEquipo','%');";
	$res1=$conexion->query($consulta1)->fetch_object()->juegosTotales;
	$res2=$conexion->query($consulta2)->fetch_object()->juegosGanados;
	$res3=$conexion->query($consulta3)->fetch_object()->juegosEmpatados;
	$res4=$conexion->query($consulta4)->fetch_object()->juegosPerdidos;
	$res5=$conexion->query($consulta5)->fetch_object()->golesaFavor;
	$res6=$conexion->query($consulta6)->fetch_object()->golesenContra;
	$res=array(1=>$res1,2=>$res2,3=>$res3,4=>$res4,5=>$res5,6=>$res6);
	return $res;
	mysqli_close($conexion);
}

function getEquiposTorneo($idTorneo){
	$conexion = getConexion();
	$consulta ="SELECT nombreequipo from equipo
				JOIN equipo_torneo USING(IDEquipo)
				WHERE IDTorneo='$idTorneo';";
	if ($resultado=$conexion->query($consulta)) {
		return $resultado;
	} else {
	    return "Error: " . mysqli_error($conexion);
	}
	mysqli_close($conexion);
}


function getEquipos(){
	$conexion = getConexion();
	$consulta ="SELECT nombreequipo from equipo
				JOIN equipo_torneo USING(IDEquipo);";
	if ($resultado=$conexion->query($consulta)) {
		return $resultado;
	} else {
	    return "Error: " . mysqli_error($conexion);
	}
	mysqli_close($conexion);
}

function getCapitan($nombreEquipo){
	$conexion = getConexion();
	$consulta="select Nombre,Apellidos from usuario u, capitan c, equipo e
				where u.correo=c.correo
				and c.idcapitan=e.idcapitan
				and e.NombreEquipo like '$nombreEquipo';";
	if ($resultado=$conexion->query($consulta)) {
		return $resultado;
	} else {
	    return "Error: " . mysqli_error($conexion);
	}
	mysqli_close($conexion);
}

function eliminarEquipo($nombreEquipo,$nombreCapitan,$apellidosCapitan){
	$conexion = getConexion();
	if ($resultado=$conexion->query("Call p2('$nombreEquipo','$nombreCapitan','$apellidosCapitan')")) {
		return 1;
	} else {
	    return "Error: " . mysqli_error($conexion);
	}
	mysqli_close($conexion);
}

?>
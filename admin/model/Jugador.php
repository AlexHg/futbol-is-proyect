<?php
class Jugador{
    public static function enviarInvitacion(){
        $conexion = Database::connect();

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
    
    public static function obtenerTodos(){
        $conexion = Database::connect();
		$sql ="select Nombre,Apellidos,Correo from Usuario where EsCapitan=0;";
		if($res=$conexion->query($sql)){
			return $res;
		}
		else {
			return "Error: " . mysqli_error($conexion);
		}
		mysqli_close($conexion);
    }

    public static function getSolicitudesDeJugador($idCapitan){
		$conexion = Database::connect();
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

    public static function registrarEquipo($correoJugador,$nombreEquipo,$descEquipo){
        $db = Database::connect();
        $res = $db->query("SELECT NombreEquipo FROM equipo WHERE NombreEquipo='$nombreEquipo'");
        if(mysqli_num_rows($res) > 0){ // Si ya existe ese nombre
            return 1;
        }else{
            $db->query("INSERT INTO capitan (Correo) VALUES ('$correoJugador')");
            $db->query("DELETE FROM jugador WHERE Correo='$correoJugador'");
            $db->query("INSERT INTO equipo (Correo,NombreEquipo,DescripcionUniforme) values ('$correoJugador','$nombreEquipo','$descEquipo')");
            $db->query("UPDATE usuario set EsCapitan='1' where correo='$correoJugador'");
            return 0;
        }
    }
}
<?php
class Jugador{
    public static function getIdJugadorByCorreo($Correo){
        $conexion = Database::connect();
        $consulta1 = "SELECT IDJugador from jugador where correo ='".$Correo."'";
        $res = mysqli_query($conexion, $consulta1);
        $IDJugador = mysqli_fetch_array($res, MYSQLI_NUM);
        return $IDJugador[0];
    }

    public static function getCorreoByIdJugador($id){
        $conexion = Database::connect();
        $consulta1 = "select Correo from jugador where IDJugador ='$id'";
        $res = mysqli_query($conexion, $consulta1);
        $IDJugador = mysqli_fetch_array($res, MYSQLI_NUM);
        return $IDJugador[0];
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
            return false;
        }else{
            $db->query("INSERT INTO capitan (Correo) VALUES ('$correoJugador')");
            $db->query("DELETE FROM jugador WHERE Correo='$correoJugador'");
            $db->query("INSERT INTO equipo (Correo,NombreEquipo,DescripcionUniforme) values ('$correoJugador','$nombreEquipo','$descEquipo')");
            $db->query("UPDATE usuario set EsCapitan='1' where correo='$correoJugador'");
            return true;
        }
    }
        /*
         * User: criscastro
         */
        public static function getInvitacionesAEquipos($correo){
        $conexion = Database::connect();
        if ($resultado=$conexion->query("select e.NombreEquipo as equipo ,u.nombre as capitan, u.imagen as imagenCapitan, e.idequipo as idequipo  from solicitud s,Equipo e,capitan c,usuario u where u.correo=c.correo and c.correo=e.correo and e.idequipo=s.idequipo and s.tipo_solicitud=1 and s.correo='$correo'")) {
            return $resultado;
        } else {
            return "Error: " . mysqli_error($conexion);
        }
            mysqli_close($conexion);

    }

    /*
    select e.NombreEquipo as equipo ,u.nombre as capitan, u.imagen as imagenCapitan from solicitud s,Equipo e,capitan c,usuario u where u.correo=c.correo and c.correo=e.correo and e.idequipo=s.idequipo and s.tipo_solicitud=1 and s.correo="el correo del jugador";
    */
    /*
     * User: criscastro
     */



    public static function aceptarSolicitudDeEquipo($invitaciones,$correo){
        $conexion = Database::connect();
       $invitacion=$invitaciones;
       $idjugador = "";
       $query = mysqli_query($conexion,"select IDJugador from jugador where Correo='$correo'");

       if($row = mysqli_fetch_array($query)){
       //Guardo los datos de la BD en las variables de php
       $idjugador = $row['IDJugador'];

       }
        //echo($idjugador);
       foreach($invitacion as $IDEquipo){
        //echo($IDEquipo);
       $conexion->query("insert into Equipo_Jugador (IDEquipo,IDJugador) values('$IDEquipo','$idjugador')");
       $conexion->query("delete from solicitud where IDEquipo='$IDEquipo'and correo='$correo'");
       }


       mysqli_close($conexion);

     }


     public static function rechazarSolicitudDeEquipo($invitaciones,$correo){
       $invitacion=$invitaciones;
       $conexion = Database::connect();
       foreach($invitacion as $IDEquipo){
       $conexion->query("delete from solicitud where IDEquipo='$IDEquipo'and correo='$correo'");
       }
       mysqli_close($conexion);

     }


    /*

        * User: criscastro
        * TODO vincular a enviarsolicitud de equipo.php
        *
        */
    public static function enviarSolicitudAEquipo($IDEquipo,$correo){
        $db = Database::connect();
        
        if($db->query("SELECT * FROM solicitud WHERE IDEquipo = $IDEquipo AND correo = '".$_SESSION['email']."' AND Tipo_Solicitud=0 LIMIT 1")->num_rows>0) return -1; // El Jugador Ya envio solicitud a este equipo
        if($db->query("SELECT * FROM solicitud WHERE IDEquipo = $IDEquipo AND correo = '".$_SESSION['email']."' AND Tipo_Solicitud=1 LIMIT 1")->num_rows>0) return -2; // El Capitan ya envio invitacion a este jugador
        if($db->query("SELECT * FROM jugador,equipo_jugador WHERE equipo_jugador.IDJugador = jugador.IDJugador AND equipo_jugador.IDEquipo = ".$IDEquipo." AND jugador.Correo = '".$_SESSION['email']."' LIMIT 1")->num_rows>0) return -3; // El Jugador ya esta en el equipo
        $result = $db->query("INSERT INTO solicitud (IDEquipo, correo, Tipo_Solicitud) VALUES ('$IDEquipo', '$correo', '0')");
        if($result) return 0;
        else        "Error: " . mysqli_error($conexion);
        
        mysqli_close($db);
    }


}

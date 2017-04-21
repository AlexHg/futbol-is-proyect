<?php
class Capitan{
    public static function getCapitan($nombreEquipo){
        $conexion = Database::connect();
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
    public static function Idcapitan($sesion){
		$conexion = Database::connect();
		
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
    public static function enviarPeticionTorneo($idtorneo,$IdEquipo){
        $conexion = Database::connect();
        // Checa que el coordinador no haya aceptado ya la peticion.
        if($conexion->query("SELECT * FROM equipo_torneo WHERE IDTorneo = $idtorneo AND IDEquipo = $IdEquipo LIMIT 1")->num_rows>0) return -1;
        // Checa que el capitan no haya hecho la peticion antes.
        if($conexion->query("SELECT * FROM solicitud_equipo WHERE IDTorneo = $idtorneo AND IDEquipo = $IdEquipo LIMIT 1")->num_rows>0) return -2;
        // De cumplir con lo anterior, realiza la peticiion.
        $result = $conexion->query("INSERT INTO solicitud_equipo (idtorneo,idequipo) VALUES ($idtorneo,$IdEquipo)");
        if($result) return 0;
        else return "Error: " . mysqli_error($conexion);
        mysqli_close($conexion);
        return $result1;
    }

    //peticiones
    public static function getPeticionesAEquipo($correo){
        $conexion = Database::connect();
        if ($resultado=$conexion->query("select u.Nombre as nombre, u.Apellidos as apellido,e.idequipo as idequipo, j.IDJugador as idjugador, j.Correo as correo  from solicitud s,Equipo e,jugador j,usuario u where e.idequipo=s.idequipo and s.tipo_solicitud=0 and s.correo=u.correo and u.Correo=j.Correo and e.Correo='$correo'")) {
            return $resultado;
        } else {
            return "Error: " . mysqli_error($conexion);
        }
            mysqli_close($conexion);

    }


    public static function aceptarPeticionJugador($invitaciones){
        $conexion = Database::connect();
        $invitacion=$invitaciones;

       foreach($invitacion as $datos){
       // echo($datos);
        list($idequipo,$idjugador,$correoj)=explode(",",$datos);

            //echo ("$idtorneo");
            //echo ("$idequipo");
       $conexion->query("insert into equipo_jugador (IDEquipo,IDJugador) values('$idequipo','$idjugador')");
       $conexion->query("delete from solicitud  where tipo_solicitud=0 and IDEquipo='$idequipo'and correo='$correoj'");
       }

       mysqli_close($conexion);
     }


    public static function rechazarPeticionJugador($invitaciones){
       $invitacion=$invitaciones;
       $conexion = Database::connect();

       foreach($invitacion as $datos){
       // echo($datos);
        list($idequipo,$idjugador,$correoj)=explode(",",$datos);

            //echo ("$idtorneo");
            //echo ("$idequipo");
       $conexion->query("delete from solicitud  where tipo_solicitud=0 and IDEquipo='$idequipo'and correo='$correoj'");
       }
       mysqli_close($conexion);

     }

    public static function enviarInvitacion($correojugador,$correocapitan){
        $conexion = Database::connect();
        $IDEquipo = mysqli_fetch_array(mysqli_query($conexion,"SELECT IDEquipo from Equipo where Correo='$correocapitan'"), MYSQLI_NUM);
        if (mysqli_query($conexion, "INSERT into Solicitud(IDEquipo,correo,Tipo_Solicitud) values($IDEquipo[0],'$correojugador',1)")) return 1;
        else return "Error: " . mysqli_error($conexion);        
        mysqli_close($conexion); //--//
    }


}

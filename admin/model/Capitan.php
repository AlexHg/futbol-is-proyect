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
}
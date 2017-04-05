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
}
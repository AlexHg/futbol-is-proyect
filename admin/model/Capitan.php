<?php
class Capitan{
    function getCapitan($nombreEquipo){
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
}
<?php
class Torneo{
    public static function getEquipos($idTorneo){
        $conexion = Database::connect();
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

public static function getTorneos(){
        $conexion = Database::connect();
        $consulta ="SELECT nombre from Torneo;";
        if ($resultado=$conexion->query($consulta)) {
            return $resultado;
        } else {
            return "Error: " . mysqli_error($conexion);
        }
        mysqli_close($conexion);
    }

     public static function eliminarTorneo($nombreTorneo){
        $conexion = Database::connect();
        if ($resultado=$conexion->query("Call p2('$nombreTorneo')")) {
            return 1;
        } else {
            return "Error: " . mysqli_error($conexion);
        }
        mysqli_close($conexion);
    }


}


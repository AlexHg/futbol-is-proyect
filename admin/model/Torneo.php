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
}
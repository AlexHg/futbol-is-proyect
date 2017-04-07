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

     public static function eliminarTorneo($IDTorneo){
        $conexion = Database::connect();
        if ($resultado=$conexion->query("DELETE from torneo WHERE IDTorneo='$IDTorneo'")) {
            return 1;
        } else {
            return "Error: " . mysqli_error($conexion);
        }
        mysqli_close($conexion);
    }
        /*
         *
         * User:CrisCastro
         * @param $tipoTorneo: recibe el tipo de torneo soccer o futbol rapido
         * @param $fechaActual:recibe la fecha actual para saber que torneos estan vigentes (abietos a inscripcion)
         *
         * @output $torneosDisponibles : devuelve un arreglo de  filas que muestran los torneos disponibles con sus caracteristicas.
         * TODO
         * */

    public static function getTorneosDisponibles($tipoTorneo,$fechaActual){


    }




}


<?php
class Torneo{
    public static function getEquipos($tipoTorneo=1){// @param $tipoTorneo: recibe si el torneo es de futbol rapido (1) o soccer (0)  si no se  ingresa poner el tipo de torneo como futbol rapido por default
        $conexion = Database::connect();
        $consulta ="SELECT nombreEquipo,IDEquipo,correo,Nombre,Imagen FROM torneo JOIN equipo_torneo USING(IDTorneo) JOIN equipo USING(IDEquipo) JOIN capitan USING(correo) JOIN usuario USING (correo) WHERE Tipo_Torneo='$tipoTorneo'";
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


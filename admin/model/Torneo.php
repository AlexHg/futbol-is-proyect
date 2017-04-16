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

    public static function crearTorneo($nombre,$tipo,$fechaInicio,$fechaLimite){        
        $conexion = Database::connect();
        $consulta ="INSERT into torneo (Nombre,Tipo_Torneo, Fecha_Inicio, Fecha_Cierre_Inscripcion)values('$nombre',$tipo,'$fechaInicio','$fechaLimite');"; 
        if ($conexion->query($consulta)) {
            return true;
        } else {
            return "Error: " . mysqli_error($conexion);
        }
        mysqli_close($conexion);
    }

    public static function asignarDiaTorneo($dia, $nombre){        
        $conexion = Database::connect();
        $consulta ="INSERT into Torneo_Grupo values ((select idGrupo from Grupo where dia like $dia ),(select IDTorneo from Torneo where Nombre like '$nombre'));";
        if ($conexion->query($consulta)) {
            return true;
        } else {
            return "Error: " . mysqli_error($conexion);
        }
        mysqli_close($conexion);
    }

    public static function getTorneos(){
        $conexion = Database::connect();
        $consulta ="SELECT IDTorneo,nombre from Torneo;";
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



}


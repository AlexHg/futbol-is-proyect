<?php
class Torneo{
    public static function getEquipos($tipoTorneo=1){// @param $tipoTorneo: recibe si el torneo es de futbol rapido (1) o soccer (0)  si no se  ingresa poner el tipo de torneo como futbol rapido por default
        $conexion = Database::connect();
        $consulta ="SELECT * FROM torneo JOIN equipo_torneo USING(IDTorneo) JOIN equipo USING(IDEquipo) JOIN capitan USING(correo) JOIN usuario USING (correo) WHERE Tipo_Torneo='$tipoTorneo'";
        if ($resultado=$conexion->query($consulta)) {
            return $resultado;
        } else {
            return "Error: " . mysqli_error($conexion);
        }
        mysqli_close($conexion);
    }
    public static function getEquiposTorneo2($idTorneo){
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
    public static function getEquiposTorneo($torneo){
        $conexion = Database::connect();
        $consulta ="SELECT e.NombreEquipo as nombre, e.idequipo as id from equipo e,equipo_torneo et where et.idequipo=e.idequipo and et.idtorneo = $torneo";
        if ($resultado=$conexion->query($consulta)) {
            return $resultado;
        } else {
            return "Error: " . mysqli_error($conexion);
        }
        mysqli_close($conexion);
    }
    public static function getNombreTorneo($idTorneo){
        $conexion = Database::connect();
        $consulta ="SELECT Nombre from torneo where idtorneo = $idTorneo";
        if ($resultado=$conexion->query($consulta)) {
            return $resultado;
        } else {
            return "Error: " . mysqli_error($conexion);
        }
        mysqli_close($conexion);
    }
    public static function bajaEquipo($equipo, $torneo){
        $conexion = Database::connect();
        $consulta = "DELETE from equipo_torneo where IDEquipo=$equipo and IDTorneo=$torneo";
        $consulta1 = "DELETE from equipogrupo where IDEquipo=$equipo and IDTorneo=$torneo";
        $consulta2 = "DELETE from juegosresultado where IDEquipo=$equipo and IDTorneo=$torneo;"; 
        if ($conexion->query($consulta) && $conexion->query($consulta2) && $conexion->query($consulta1)) {
            return true;
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

    public static function getInfoByType($tipo){ // Obtiene Nombre, Fecha Inicio e ID a partir del tipo de torneo
        $conexion = Database::connect();
        $resultado=$conexion->query("SELECT nombre,fecha_inicio,idtorneo FROM torneo WHERE tipo_torneo=$tipo");
        if ($resultado) return $resultado;
        else            return "Error: " . mysqli_error($conexion);
        mysqli_close($conexion);
    }

    public static function getDatesByID($idTorneo,$tipo){ // Obtiene los dias que se juega un torneo y retorna una cadena.
        $ccat = "";
        $conexion = Database::connect();
        $resultado=$conexion->query("SELECT g.Dia from torneo t, torneo_grupo tg, grupo g where tipo_torneo=$tipo and t.idtorneo=tg.idtorneo and tg.idgrupo=g.idgrupo and t.idtorneo=$idTorneo");
        if ($resultado){
            while($row = $resultado->fetch_array(MYSQLI_ASSOC)) $ccat.=$row['Dia'].', ';
            return substr($ccat, 0, -1);
        }else            return "Error: " . mysqli_error($conexion);
        mysqli_close($conexion);
    }

}


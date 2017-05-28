<?php
class Equipo{
    public static function getTorneos($NombreEquipo){
        $conexion = Database::connect();
        $consulta = "SELECT torneo.Nombre as torneos FROM equipo,equipo_torneo,torneo WHERE equipo.NombreEquipo = '".$NombreEquipo."' AND equipo.IDEquipo = equipo_torneo.IDEquipo AND equipo_torneo.IDTorneo = torneo.IDTorneo";
        if ($resultado=$conexion->query($consulta)) {
            return $resultado;
        } else {
            return "Error: " . mysqli_error($conexion);
        }
        mysqli_close($conexion);
    }
    public static function getCapitan($NombreEquipo) {
        $conexion = Database::connect();
        $consulta =  "SELECT CONCAT(usuario.Nombre,' ',usuario.Apellidos) as capitan FROM usuario,equipo WHERE equipo.Correo = usuario.Correo AND equipo.NombreEquipo = '".$NombreEquipo."'";
        if ($resultado=$conexion->query($consulta)) {
            return $resultado->fetch_array(MYSQLI_ASSOC)['capitan'];
        } else {
            return "Error: " . mysqli_error($conexion);
        }
        mysqli_close($conexion);
    }
    public static function numeroJugadoresEquipo($correo){
        $consulta = 'SELECT count(usuario.Correo) from equipo, usuario, equipo_jugador, jugador WHERE jugador.Correo = usuario.Correo and jugador.IDJugador = equipo_jugador.IDJugador and equipo.IDEquipo = equipo_jugador.IDEquipo and equipo.Correo ="'.$correo.'"';
        $conexion = Database::connect();
        $res = mysqli_query($conexion, $consulta);
        $jugadores = mysqli_fetch_array($res, MYSQLI_NUM);
        return $jugadores[0];
    }
    public static function getIdEquipoByCorreo($Correo){
        $conexion = Database::connect();
        $consulta1 = "SELECT IDEquipo FROM equipo where correo ='$Correo'";
        $res = mysqli_query($conexion, $consulta1);
        return mysqli_fetch_array($res, MYSQLI_NUM)[0];
    }

    public static function getNombreByCorreo($Correo){
        return mysqli_fetch_array(mysqli_query(Database::connect(), "SELECT NombreEquipo FROM equipo where correo ='$Correo'"), MYSQLI_NUM)[0];
    }

    public static function getEquipoById($id){
        $conexion = Database::connect();
        $consulta1 = "SELECT * FROM equipo where IDEquipo =$id";
        $res = mysqli_query($conexion, $consulta1);
        return mysqli_fetch_array($res, MYSQLI_ASSOC);
    }

   public static function eliminarEquipo($IDEquipo){
        $conexion = Database::connect();
        $sql = "SELECT Correo from Equipo Where IDequipo = '$IDEquipo'";
        $res = mysqli_query($conexion, $sql);
        $correo = mysqli_fetch_array($res, MYSQLI_NUM)[0];

        if (
        $conexion->query("DELETE from Equipo WHERE IDequipo='$IDEquipo'") &&
        $conexion->query("INSERT into jugador (IDJugador,Correo) values (null,'$correo')") &&
        $conexion->query("DELETE from capitan where correo='$correo'") &&
        $conexion->query("UPDATE usuario set EsCapitan=0 where correo='$correo'")
        ) {
            return 1;
        } else {
            return "Error: " . mysqli_error($conexion);
        }
        mysqli_close($conexion);
    }

    public static function eliminarJugadorEquipo($IDJugador,$idCapitan){
        $conexion = Database::connect();
        
        $consulta ="delete from equipo_jugador where idjugador=$IDJugador and idequipo=$idCapitan;";
        if ($conexion->query($consulta)) {
            return true;
        } else {
            return "Error: " . mysqli_error($conexion);
        }
        mysqli_close($conexion);
    }

    public static function getEquipos(){
        $conexion = Database::connect();
        $consulta ="SELECT idequipo,NombreEquipo FROM equipo;";
        if ($resultado=$conexion->query($consulta)) {
            return $resultado;
        } else {
            return "Error: " . mysqli_error($conexion);
        }
        mysqli_close($conexion);
    }

    public static function getJugadoresEquipo($idCapitan){
        $conexion = Database::connect();
        $consulta ="SELECT usuario.Nombre,usuario.Apellidos,usuario.Correo from equipo, usuario, equipo_jugador, jugador WHERE jugador.Correo = usuario.Correo and jugador.IDJugador = equipo_jugador.IDJugador and equipo.IDEquipo = equipo_jugador.IDEquipo and equipo.Correo = '".$idCapitan."'";
        if ($resultado=$conexion->query($consulta)) {
            return $resultado;
        } else {
            return "Error: " . mysqli_error($conexion);
        }
        mysqli_close($conexion);
    }

    public static function aceptarSolicitudDeJugador($idCapitan,$correoJugador){
        $conexion = Database::connect();
        $consulta ="INSERT INTO equipo_jugador(IDEquipo, IDJugador)
                    VALUES((SELECT IDEquipo FROM equipo WHERE IDCapitan='$idCapitan') ,
                    (SELECT IDJugador from jugador WHERE Correo='$correoJugador'))";
        $consulta2="DELETE FROM solicitud WHERE
                    IDEquipo=(SELECT IDEquipo FROM equipo WHERE IDCapitan='$idCapitan') AND IDJugador=(SELECT IDJugador from jugador WHERE Correo='$correoJugador');";
        if ($conexion->query($consulta) && $conexion->query($consulta2)) {
            return 1;
        } else {
            return "Error: " . mysqli_error($conexion);
        }
        mysqli_close($conexion);

    }

    public static function rechazarSolicitudDeJugador($idCapitan,$correoJugador){
        $conexion = Database::connect();
        $consulta="DELETE FROM solicitud WHERE
                    IDEquipo=(SELECT IDEquipo FROM equipo WHERE IDCapitan='$idCapitan') AND IDJugador=(SELECT IDJugador from jugador WHERE Correo='$correoJugador');";
        if ($conexion->query($consulta)) {
            return 1;
        } else {
            return "Error: " . mysqli_error($conexion);
        }
        mysqli_close($conexion);
    }

    public static function enviarSolicitud($IDJugador, $Equipo){
        $conexion = Database::connect();
        $sql = "INSERT into solicitud(NombreEquipo,IDJugador,Tipo_Solicitud)values('$Equipo',$IDJugador,1)";
        if($res1=$conexion->query($sql)){
            return true;
        }
        else {
            return false;
            echo "Error: " . mysqli_error($conexion);
        }
    }

    public static function obtenerJugadoresDePartido($idPartido){
        $conexion = Database::connect();
        if($res1=$conexion->query("select e.nombreEquipo,u.nombre,u.apellidos, \"\" as numero_de_jugador 
from equipo e, usuario u, jugador j, equipo_jugador ej,juego ju
where ej.idEquipo=e.idEquipo 
and j.idjugador=ej.idjugador 
and j.correo=u.correo 
and ju.idEquipo=e.idEquipo
and ju.idjuego=$idPartido")) return $res1;
        else {
            return "Error: " . mysqli_error($conexion);
            echo "Error: " . mysqli_error($conexion);
        }

    }

}

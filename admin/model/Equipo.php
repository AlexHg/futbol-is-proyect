<?php
class Equipo{
    public static function getResultados($NombreEquipo){
        $conexion = Database::connect();

        $consulta1="select count(*) as juegosTotales from equipo e, JuegosResultado j
                    where e.idequipo=j.idequipo and e.NombreEquipo like concat('$NombreEquipo','%');";
        $consulta2="select count(*) as juegosGanados from equipo e, JuegosResultado j 
                    where e.idequipo=j.idequipo and j.golesaFavor>j.golesencontra and e.NombreEquipo like concat('$NombreEquipo','%');";
        $consulta3="select count(*) as juegosEmpatados from equipo e, JuegosResultado j 
                    where e.idequipo=j.idequipo and j.golesaFavor=j.golesencontra and e.NombreEquipo like concat('$NombreEquipo','%');";
        $consulta4="select count(*) as juegosPerdidos from equipo e, JuegosResultado j 
                    where e.idequipo=j.idequipo and j.golesaFavor<j.golesencontra and e.NombreEquipo like concat('$NombreEquipo','%');";
        $consulta5="select sum(Golesafavor) as golesaFavor from equipo e, JuegosResultado j
                    where e.idequipo=j.idequipo
                    and e.nombreequipo like concat('$NombreEquipo','%');";
        $consulta6="select sum(Golesencontra) as golesenContra from equipo e, JuegosResultado j
                    where e.idequipo=j.idequipo
                    and e.nombreequipo like concat('$NombreEquipo','%');";
        $res1=$conexion->query($consulta1)->fetch_object()->juegosTotales;
        $res2=$conexion->query($consulta2)->fetch_object()->juegosGanados;
        $res3=$conexion->query($consulta3)->fetch_object()->juegosEmpatados;
        $res4=$conexion->query($consulta4)->fetch_object()->juegosPerdidos;
        $res5=$conexion->query($consulta5)->fetch_object()->golesaFavor;
        $res6=$conexion->query($consulta6)->fetch_object()->golesenContra;
        $res=array(1=>$res1,2=>$res2,3=>$res3,4=>$res4,5=>$res5,6=>$res6);
        return $res;
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
        $IDJugador = mysqli_fetch_array($res, MYSQLI_NUM);
        return $IDJugador[0];
    }
    public static function getEquipoById($id){
        $conexion = Database::connect();
        $consulta1 = "SELECT * FROM equipo where IDEquipo =$id";
        $res = mysqli_query($conexion, $consulta1);
        $IDJugador = mysqli_fetch_array($res, MYSQLI_ASSOC);
        return $IDJugador;
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

}

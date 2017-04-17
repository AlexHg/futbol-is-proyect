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

   public static function eliminarEquipo($IDEquipo){
        $conexion = Database::connect();
        if ($resultado=$conexion->query("DELETE from Equipo WHERE IDequipo='$IDEquipo'")) {
            return 1;
        } else {
            return "Error: " . mysqli_error($conexion);
        }
        mysqli_close($conexion);
    }

    public static function eliminarJugadorEquipo($correoEliminar,$idCapitan){
        $conexion = Database::connect();
        $consulta ="DELETE d from equipo_jugador d
                    JOIN jugador USING(IDJugador)
                    JOIN equipo USING(IDEquipo)
                    JOIN capitan USING(IDCapitan)
                    WHERE jugador.Correo='$correoEliminar' AND capitan.IDCapitan='$idCapitan';";
        if ($conexion->query($consulta)) {
            return 1;
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
        $consulta ="SELECT usuario.Nombre,usuario.Apellidos,usuario.Correo FROM usuario
                    JOIN jugador USING(Correo)
                    JOIN equipo_jugador USING(IDJugador)
                    JOIN  equipo USING(IDEquipo)
                    WHERE IDCapitan ='$idCapitan';";
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


}

<?php
class Equipo{
    function getResultados($NombreEquipo){
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
}

<?php
class Torneo{
    public static function getEquipos($tipoTorneo){// @param $tipoTorneo: recibe si el torneo es de futbol rapido (1) o soccer (0)  si no se  ingresa poner el tipo de torneo como futbol rapido por default
        $conexion = Database::connect();
        $consulta ="SELECT * FROM torneo JOIN equipo_torneo USING(IDTorneo) JOIN equipo USING(IDEquipo) JOIN capitan USING(correo) JOIN usuario USING (correo) WHERE Tipo_Torneo='$tipoTorneo'";
        if ($resultado=$conexion->query($consulta)) {
            return $resultado;
        } else {
            return "Error: " . mysqli_error($conexion);
        }
        mysqli_close($conexion);
    }
    public static function registrarResultado($equipo1, $equipo2, $juego, $goles1, $goles2, $torneo, $fase){
        $conexion = Database::connect();
        $insert1 = "INSERT INTO JuegosResultado (idequipo,idjuego,golesafavor,golesencontra,idtorneo,idfase)values($equipo1, $juego, $goles1, $goles2, $torneo, $fase)";
        $insert2 = "INSERT INTO JuegosResultado (idequipo,idjuego,golesafavor,golesencontra,idtorneo,idfase)values($equipo2, $juego, $goles1, $goles2, $torneo, $fase)";
        if ($conexion->query($insert1) && $conexion->query($insert2)) {
            return true;
        } else {
            return "Error: " . mysqli_error($conexion);
        }
        mysqli_close($conexion);
    }
    public static function getPartidosSinJugar(){
        $conexion = Database::connect();
        $consulta ="SELECT j.idjuego as juego, hj.diayhora as horario, f.descripcion as fase, f.IDFase as IDFase, t.nombre as torneo, t.IDTorneo as IDTorneo, SUBSTRING_INDEX(SUBSTRING_INDEX(GROUP_CONCAT(j.idEquipo), ',', 1), ',', -1) as equipo1, SUBSTRING_INDEX(SUBSTRING_INDEX(GROUP_CONCAT(j.idEquipo), ',', 2), ',', -1) as equipo2 from juego j, horario_juego hj, torneo t,fase f where idjuego not in (select jr.idjuego from juegosresultado jr) and j.idhorario=hj.idhorario and j.idfase=f.idfase and j.idtorneo=t.idtorneo group by(idjuego)";
        if ($resultado=$conexion->query($consulta)) {
            return $resultado;
        } else {
            return "Error: " . mysqli_error($conexion);
        }
        mysqli_close($conexion);
    }
    public static function getPartidosSinJugarByTorneo($IDTorneo){
        $conexion = Database::connect();
        $consulta ="SELECT j.idjuego, hj.diayhora as horario, f.descripcion as fase, t.nombre as torneo, SUBSTRING_INDEX(SUBSTRING_INDEX(GROUP_CONCAT(j.idEquipo), ',', 1), ',', -1) as equipo1, SUBSTRING_INDEX(SUBSTRING_INDEX(GROUP_CONCAT(j.idEquipo), ',', 2), ',', -1) as equipo2 from juego j, horario_juego hj, torneo t,fase f where idjuego not in (select jr.idjuego from juegosresultado jr) and j.idhorario=hj.idhorario and j.idfase=f.idfase and j.idtorneo=t.idtorneo and j.idtorneo = $IDTorneo group by(idjuego);";
        if ($resultado=$conexion->query($consulta)) {
            return $resultado;
        } else {
            return "Error: " . mysqli_error($conexion);
        }
        mysqli_close($conexion);
    }
    public static function getEquiposTorneo2($tipoTorneo){
        $conexion = Database::connect();
        $consulta ="SELECT nombreequipo FROM torneo JOIN equipo_torneo USING(IDTorneo) JOIN equipo USING(IDEquipo) JOIN capitan USING(correo) JOIN usuario USING (correo) WHERE Tipo_Torneo='$tipoTorneo'";
        if ($resultado=$conexion->query($consulta)) {
            return $resultado;
        } else {
            return "Error: " . mysqli_error($conexion);
        }
        mysqli_close($conexion);
    }

    public static function getResultadosTorneo($torneo){
        $conexion = Database::connect();
        $consulta ="SELECT SUBSTRING_INDEX(SUBSTRING_INDEX(GROUP_CONCAT(distinct jr.idEquipo), ',', 1), ',', -1) as equipo1, SUBSTRING_INDEX(SUBSTRING_INDEX(GROUP_CONCAT(distinct jr.idEquipo), ',', 2), ',', -1) as equipo2,SUBSTRING_INDEX(SUBSTRING_INDEX(group_concat(distinct jr.golesafavor), ',', 1), ',', -1) as goles1,SUBSTRING_INDEX(SUBSTRING_INDEX(group_concat(distinct jr.golesafavor), ',', 2), ',', -1) as goles2,f.descripcion as jornada ,t.nombre as torneo,hj.diayhora as horario from juegosresultado jr, juego j, horario_juego hj,fase f , torneo t where hj.idhorario=j.idjuego and j.idjuego=jr.idjuego and j.idjuego=1 and jr.idfase=f.idfase and jr.idtorneo=t.idtorneo  and t.idTorneo = $torneo group by hj.diayhora,jr.idfase,jr.idtorneo;";
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

    public static function crearTorneo($nombre,$tipo/*,$fechaInicio,$fechaLimite*/){        
        $conexion = Database::connect();
        $consulta ="INSERT into torneo (Nombre,Tipo_Torneo)values('$nombre',$tipo);"; 
        if ($conexion->query($consulta)) {
            return true;
        } else {
            return false;
            
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

    public static function getListTorneosSoccer(){
        $conexion = Database::connect();
        $consulta ="SELECT * from Torneo where Tipo_Torneo = 1";
        if ($resultado=$conexion->query($consulta)) {
            return $resultado;
        } else {
            return "Error: " . mysqli_error($conexion);
        }
        mysqli_close($conexion);
    }

    public static function getListTorneosRapido(){
        $conexion = Database::connect();
        $consulta ="SELECT * from Torneo where Tipo_Torneo = 0";
        if ($resultado=$conexion->query($consulta)) {
            return $resultado;
        } else {
            return "Error: " . mysqli_error($conexion);
        }
        mysqli_close($conexion);
    }
    
    public static function getCountEquiposTorneo($IDTorneo){
        $conexion = Database::connect();
        $consulta ="SELECT count(*) as count FROM equipo_torneo WHERE IDTorneo = $IDTorneo";
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

    public static function getDiaHoraTorneo($torneo){
        $conexion = Database::connect();
        //echo("Recibi ID:".$torneo);
        $consulta ="SELECT diayhora,idhorario from horario_juego hj where idtorneo=$torneo and hj.idhorario not in (select hj.idhorario from juego j,horario_juego hj where hj.idhorario=j.idhorario)";
        //echo($consulta);
        if ($resultado=$conexion->query($consulta)) {
            return $resultado;
        } else {
            return "Error: " . mysqli_error($conexion);
        }
        mysqli_close($conexion);
    }
    public static function horariosFull($idTorneo){
        $db = Database::connect();
        if($db->query("SELECT diayhora,idhorario from horario_juego hj where idtorneo=$idTorneo and hj.idhorario not in (select hj.idhorario from juego j,horario_juego hj where hj.idhorario=j.idhorario)")->num_rows>0) 
            return false;
        else return true;
    }

    public static function getTorneosCurDate(){
        $conexion = Database::connect();
        $resultado=$conexion->query("SELECT IDTorneo,Nombre from torneo where curdate()<Fecha_Fin");
        if ($resultado) return $resultado;
        else return "Error: " . mysqli_error($conexion);
        mysqli_close($conexion); //--//
    }    

    public static function getFases(){
        $conexion = Database::connect();
        $resultado=$conexion->query("SELECT * from fase");
        if ($resultado) return $resultado;
        else return "Error: " . mysqli_error($conexion);
        mysqli_close($conexion); //--//
    } 

    public static function crearPartido($idEquipo1,$idEquipo2,$idHorario,$idFase,$idTorneo){
        $conexion = Database::connect();
        $idJuego = $conexion->query("SELECT max(idjuego) as max from juego where idtorneo=$idTorneo")->fetch_array(MYSQLI_ASSOC)['max'] + 1;
        $resultado=$conexion->query("INSERT INTO juego (idEquipo,idtorneo,idjuego,idfase,idhorario) values($idEquipo1,$idTorneo,$idJuego,$idFase,$idHorario)");
        if(!$resultado) return "Error: " . mysqli_error($conexion);
        else{
            $resultado=$conexion->query("INSERT INTO juego (idEquipo,idtorneo,idjuego,idfase,idhorario) values($idEquipo2,$idTorneo,$idJuego,$idFase,$idHorario)");
            if($resultado) return 0;
            else return "Error: " . mysqli_error($conexion);
        }
        mysqli_close($conexion); //--//*/
    }
}


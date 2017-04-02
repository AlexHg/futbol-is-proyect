<?php
class Jugador{
    public static function enviarInvitacion(){
        $conexion = Database::connect();

        $consulta1 ="select IDEquipo from Equipo e,Capitan c where e.idcapitan=c.idcapitan and c.correo='$correocapitan'";
        $res = mysqli_query($conexion, $consulta1);
        $IDEquipo = mysqli_fetch_array($res, MYSQLI_NUM);
        
        $consulta2 = "select IDJugador from jugador where Correo='$correojugador'";
        $aux = mysqli_query($conexion, $consulta2);
        $IDJugador = mysqli_fetch_array($aux, MYSQLI_NUM); 
        
        $sql = "insert into Solicitud(IDEquipo,IDJugador,Tipo_Solicitud) values($IDEquipo[0],$IDJugador[0],1)";
        
        if (mysqli_query($conexion, $sql)) {
            return 1;
        } else {
            return "Error: " . mysqli_error($conexion);
        }
        
        mysqli_close($conexion);
    }
    
    public static function obtenerTodos(){
        $conexion = Database::connect();
		$sql ="select Nombre,Apellidos,Correo from Usuario where EsCapitan=0;";
		if($res=$conexion->query($sql)){
			return $res;
		}
		else {
			return "Error: " . mysqli_error($conexion);
		}
		mysqli_close($conexion);
    }
}
<?php
class Coordinador{
    public static function login($email, $password){
        $db = Database::connect();
        $sql = "select * from coordinador where Correo='$email' and Contra='$password'";
        if($res=$db->query($sql)){
			$Datos = mysqli_fetch_array($res, MYSQLI_ASSOC);
				return $Datos;
		}
		else {
			return "Error: " . mysqli_error($db);
		}
		
		mysqli_close($db);
    }

    //funcion de obtener todas las peticiones de equipos

    public static function getPeticionesdeEquipos(){
        $conexion = Database::connect();
        if ($resultado=$conexion->query("SELECT e.NombreEquipo as nombreEquipo ,u.Nombre as capitan ,t.Nombre as torneo, t.IDTorneo as idtorneo, e.IDEquipo as idequipo  FROM capitan c,equipo e,torneo t,solicitud_equipo s, usuario u where s.IDEquipo=e.IDEquipo and e.Correo=c.Correo and c.Correo=u.Correo and s.IDTorneo=t.IDTorneo ;")) {
            return $resultado;
        } else {
            return "Error: " . mysqli_error($conexion);
        }
            mysqli_close($conexion);

    }

    public static function aceptarSolicitudDeEquipo($invitaciones){
        $conexion = Database::connect();
        $invitacion=$invitaciones;

       foreach($invitacion as $datos){
       // echo($datos);
        list($idtorneo,$idequipo)=explode(",",$datos);

            //echo ("$idtorneo");
            //echo ("$idequipo");
       $conexion->query("insert into equipo_torneo (IDtorneo,IDEquipo) values('$idtorneo','$idequipo')");
       $conexion->query("delete from solicitud_equipo  where IDEquipo='$idequipo'and IDTorneo='$idtorneo'");
       }

       mysqli_close($conexion);
     }


     public static function rechazarSolicitudDeEquipo($invitaciones){
       $invitacion=$invitaciones;
       $conexion = Database::connect();

       foreach($invitacion as $datos){
       list($idtorneo,$idequipo)=explode(",",$datos);

       $conexion->query("delete from solicitud_equipo  where IDEquipo='$idequipo'and IDTorneo='$idtorneo'");
       }
       mysqli_close($conexion);

     }
}

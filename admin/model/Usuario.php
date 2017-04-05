<?php
class Usuario{
    public static function login($email, $password){
        $db = Database::connect();
        $sql = "SELECT * from usuario where Correo='$email' and contra='$password'";
        if($res=$db->query($sql)){
			$Datos = mysqli_fetch_array($res, MYSQLI_ASSOC);
				return $Datos;
		}
		else {
			return "Error: " . mysqli_error($db);
		}

		mysqli_close($db);
    }

    public static function registrarCuenta($nombre,$apellidos,$correo,$telefono,$contrasena){
		$db = Database::connect();
		$consulta1="INSERT INTO usuario(Correo,Nombre,Apellidos,contra,Telefono,EsCapitan,Imagen) values('$correo','$nombre','$apellidos','$contrasena','$telefono',0,'default.png')";
		$consulta2="INSERT INTO jugador (Correo) values('$correo')";
		if ($db->query($consulta1)) { // Si puede insertar en usuario
				$db->query($consulta2); // Inserta en Jugador
				return 0;
		} else {
			if($db->errno==1062){
				return 1;
			}else{
		    	return "Error: " . mysqli_error($db);
		    }
		}
		mysqli_close($db);
	}

}
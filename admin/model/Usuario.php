<?php
class Usuario{
    public static function login($email, $password){
        $db = Database::connect();
        $sql = "select * from usuario where Correo='$email' and Contraseña='$password'";
        if($res=$db->query($sql)){
			$Datos = mysqli_fetch_array($res, MYSQLI_ASSOC);
				return $Datos;
		}
		else {
			return "Error: " . mysqli_error($db);
		}

		mysqli_close($db);
    }

}
<?php
class Usuario{
    public function login($email, $password){
        $db = Database::connect();
        $sql = "select * from usuario where Correo='$email' and Contraseña='$password'";
        $res = $db->query($sql);
        return (array)$res->fetch_object();
    }

}
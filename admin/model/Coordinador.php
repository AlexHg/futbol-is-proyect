<?php
class Coordinador{
    public function login($email, $password){
        $db = Database::connect();
        $sql = "select * from coordinador where Correo='$email' and Contraseña='$password'";
        $res = $db->query($sql);
        return (array)$res->fetch_object();
    }

}
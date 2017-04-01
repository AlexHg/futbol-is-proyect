<?php
Class Database{
    public function connect(){
        $conexion = new mysqli("localhost", "root", "", "torneos");
        $conexion->query("SET NAMES 'utf8'");
        // Check for errors
        if(mysqli_connect_errno()){
            echo mysqli_connect_error();
        }
        return $conexion;
    }
}


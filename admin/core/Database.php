<?php
Class Database{
    public static function connect(){
        $dbconfig = Config::database;
        $conexion = mysqli_connect($dbconfig['host'],$dbconfig['user'],$dbconfig['pass'],$dbconfig['db']);
        mysqli_query($conexion, "SET NAMES 'utf8'");

        if ($conexion->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
        }
        return $conexion;
    }
}


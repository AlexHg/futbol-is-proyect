<?php

/**
 * Created by PhpStorm.
 * User: christophercastro
 * Date: 30/03/17
 * Time: 14:29
 */
require_once 'conexion.php';
class Jugador extends usuario
{
 private $idJugador;
    const TABLAJ = 'Jugador';
    const TABLAS = 'Solicitud';

    public function __construct($idJugador,$correo, $nombre, $apellidos, $password, $telefono, $imagen, $isCapitan = false)
 {
     parent::__construct($correo, $nombre, $apellidos, $password, $telefono, $imagen, $isCapitan);
    $this->idJugador=$idJugador;
 }

    public function guardar()
    {
        parent::guardar();
        $conexion = new Conexion();
        if ($this->idJugador) /*Modifica*/ {
            $consulta = $conexion->prepare('UPDATE ' . self::TABLAJ . ' SET IDJugador = :idJugador, Correo = :correo WHERE IDJugador = :idJugador');
            $consulta->bindParam(':idJugador', $this->idJugador);
            $consulta->bindParam(':correo', $this->getCorreo());
            $consulta->execute();
        } else /*Inserta*/ {
            $consulta = $conexion->prepare('INSERT INTO' . self::TABLAJ . '(IDJugador,Correo) VALUES(:idJugador,:correo)');
            $consulta->bindParam(':idJugador', $this->idJugador);
            $consulta->bindParam(':correo', $this->getCorreo());
            $consulta->execute();
           // $this->idJugador = $conexion->lastInsertId(); not this time bro :(
        }
        $conexion = null;
    }

    public  function  enviarSolicitud($IDEquipo,$TipoSolicitud){
        $conexion = new Conexion();
        $consulta = $conexion->prepare('INSERT INTO' . self::TABLAS . '(IDEquipo,IDJugador,Tipo_Solicitud) VALUES(:idEquipo,:idJugador,:tipoSolicitud)');
        $consulta->bindParam(':idEquipo', $IDEquipo);
        $consulta->bindParam(':idJugador', $this->idJugador);
        $consulta->bindParam(':tipoSolicitud', $TipoSolicitud);
        $consulta->execute();


    }
}
<?php
/**
 * Created by PhpStorm.
 * User: christophercastro
 * Date: 30/03/17
 * Time: 14:29
 */
require_once 'conexion.php';
require_once 'Usuario.php';
class JugadorTEMP extends Usuario{
    const TABLAJ = 'JugadorTEMP';
    const TABLAS = 'Solicitud';
    const TABLAE_J = 'equipo_jugador';
    private $idJugador;

    public function __construct($correo, $nombre, $apellidos, $password, $telefono, $imagen, $isCapitan = 0,$idJugador = null )
    {
        parent::__construct($correo, $nombre, $apellidos, $password, $telefono, $imagen, $isCapitan);
        $this->idJugador = $idJugador;
    }

    public function guardar()
    {
        parent::guardar();
        $conexion = new Conexion();
        if ($this->idJugador!=null) /*Modifica*/ {
            echo 'modificando kjkjk';
            $consulta = $conexion->prepare('UPDATE ' . self::TABLAJ . ' SET IDJugador = :idJugador, Correo = :correo WHERE IDJugador = :idJugador');
            $consulta->bindParam(':idJugador', $this->idJugador);
            $consulta->bindParam(':correo', $this->getCorreo());
            $consulta->execute();
        } else /*Inserta*/ {
            echo 'insertando kjkjk';
            $consulta = $conexion->prepare('INSERT INTO ' . self::TABLAJ . ' (Correo) VALUES(:correo)');
            $consulta->bindParam(':correo', $this->getCorreo());
            $consulta->execute();
            $this->idJugador = $conexion->lastInsertId();
        }
        $conexion = null;
    }

    public function enviarSolicitud($IDEquipo, $TipoSolicitud)
    {
        try{
            $conexion = new Conexion();
            $consulta = $conexion->prepare('INSERT INTO' . self::TABLAS . '(IDEquipo,IDJugador,Tipo_Solicitud) VALUES(:idEquipo,:idJugador,:tipoSolicitud)');
            $consulta->bindParam(':idEquipo', $IDEquipo);
            $consulta->bindParam(':idJugador', $this->idJugador);
            $consulta->bindParam(':tipoSolicitud', $TipoSolicitud);
            $consulta->execute();
        }catch(PDOException $e){
            echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
            exit;
        }
    }

    //TODO revisar si se va a implementar
    public function aceptarSolicitud($IDEquipo, $TipoSolicitud){
        try{
            $conexion = new Conexion();
            /**verifica que  la solitud exista*/
            if($conexion->record_exists2columns(self::TABLAS,'IDEquipo','IDJugador',$IDEquipo,$this->idJugador)){
                /*registrando el jugador en el equipo*/

                $consulta = $conexion->prepare('INSERT INTO ' . self::TABLAE_J . '(IDEquipo,IDJugador) VALUES(:idEquipo,:idJugador)');
                $consulta->bindParam(':idEquipo', $IDEquipo);
                $consulta->bindParam(':idJugador', $this->idJugador);
                $consulta->execute();
                /*ELIMINANDO LA SOLICITUD*/
                $conexion = new Conexion();
                $consulta = $conexion->prepare('DELETE FROM ' . self::TABLAS. 'WHERE IDJugador = :idJugador AND IDEquipo = :idEquipo');
                $consulta->bindParam(':idEquipo', $IDEquipo);
                $consulta->bindParam(':idJugador', $this->idJugador);
                $consulta->execute();
            }else{
                //TODO no existe la solicitud notificar el error al usuario
            }


        }catch(PDOException $e){
            echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
            exit;
        }
    }

    /**
     * @return mixed
     */
    public function getIdJugador()
    {
        return $this->idJugador;
    }

    /**
     * @param mixed $idJugador
     */
    public function setIdJugador($idJugador)
    {
        $this->idJugador = $idJugador;
    }

}

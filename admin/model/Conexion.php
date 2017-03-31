<?php
/**
 * Created by PhpStorm.
 * User: christophercastro
 * Date: 10/03/17
 * Time: 11:23
 */
 class Conexion extends PDO {

     private $tipo_de_base = 'mysql';
     private $host = 'localhost';
     private $nombre_de_base = 'torneos';
     private $usuario='root';
     private $contrasena = '';
     public function __construct() {
         //Sobreescribo el método constructor de la clase PDO.
         try{
             parent::__construct($this->tipo_de_base.':host='.$this->host.';dbname='.$this->nombre_de_base,
                 $this->usuario,
                 $this->contrasena);
         }catch(PDOException $e){
             echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
             exit;
         }
     }
 }
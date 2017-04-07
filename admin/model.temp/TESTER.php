<?php
/**
 * Created by PhpStorm.
 * User: christophercastro
 * Date: 31/03/17
 * Time: 11:07
 */
require_once 'Usuario.php';
require_once 'JugadorTEMP.php';

const TABLAU = 'usuario';
$persona = new Usuario("doro@gmail.com","pancho","perz Lopez","1234","33333333","doro.jpg",1);
$persona2 = new Usuario("santuario@gmail.com","luis","santuario Lopez","223","48439473","santi.jpg");
$jugador1 = new JugadorTEMP("criz@gmail.com", "cris", "castro", "98hol8dfdf", "878939473", "cris.jpg", 0);
$conexion = new Conexion();
$persona->guardar();
$persona2->guardar();
$jugador1->guardar();
echo $persona->getNombre() . ' se ha guardado correctamente con el nomre: ' . $persona->getNombre();
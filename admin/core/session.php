<?php
/*
    Roles
    Coordinador: 3
    Capitan: 2
    jugador: 1
*/
class Session{
    function start(){
        $_SESSION["role"] = 3;
        $_SESSION["rolename"] = "Coordinador";
        $_SESSION["name"] = "Alejandro Hernandez";
        $_SESSION["mail"] = "alexxh42@gmail.com" ;
    }
    function destroy(){
        $_SESSION = array();
        session_destroy();
    }
    function preAccess(callable $callback){
        if(!isset($_SESSION["role"])){
            $callback();
        }else{
            Flight::redirect('/');
        }
    }
    function access($dataAccess,callable $callback){
        if(isset($_SESSION["role"])){
            if($_SESSION["role"] >= $dataAccess["minRole"] ){
                $callback();
            }else{
                Flight::redirect('/inaccesible');
            }
        }else{
            Flight::redirect('/iniciarSesion');
        }
    }
    function accessOnly($dataAccess,callable $callback){
        if(isset($_SESSION["role"])){
            if($_SESSION["role"] >= $dataAccess["role"] ){
                $callback();
            }else{
                Flight::redirect('/inaccesible');
            }
        }else{
            Flight::redirect('/iniciarSesion');
        }
    }
    function showOnly($dataAccess,callable $callback){
        if(isset($_SESSION["role"])){
            if($_SESSION["role"] == $dataAccess["role"] )
                $callback();
        }
    }
}
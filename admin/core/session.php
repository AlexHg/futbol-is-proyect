<?php
class Session{
    function start(){
        $_SESSION["role"] = 1;
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
}
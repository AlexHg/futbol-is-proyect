<?php
/*
    Roles
        Coordinador: 3
        Capitan: 2
        Jugador: 1
*/
class Session{
    function start($_DB){
        $_SESSION["role"] = $_DB["role"];
        $_SESSION["rolename"] = $_DB["rolename"];
        $_SESSION["name"] = $_DB["name"];
        $_SESSION["email"] = $_DB["email"];
        $_SESSION["avatar"] = 'source/img/avatar/'.$_DB["avatar"];
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
    function roleName($num){
        if($num == 1){
            return "Jugador";
        }else if($num == 2){
            return "Capitán";
        }
        else if($num == 3){
            return "Coordinador";
        }
        else{
            return "NoRole";
        }
    }
}
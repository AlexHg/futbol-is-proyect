<?php
require 'lib/flight/Flight.php';

Flight::route("/", function(){
    #if session is open & the user have the correct role
    echo "inicio<br>";
    if(isset($_GET["u"]) ){
        echo $_GET["u"];
    }
    #if is not -> redirect to /login
});

Flight::route('/login', function(){
    #if session is not open
    echo "Inicio de sesión";
    #if is -> redirect to /
});

Flight::route('/register', function(){
    #if session is not open
    echo "Registro de usuario";
    #if is -> redirect to /
});

Flight::route('/demo', function(){
    #if session is open & the user have the correct role
    require "source/ini.php"; #Html head, menu, header
    require "source/view/demo.html"; #html content
    require "source/fin.php"; #Html footer
    #if is not -> redirect to /login
});

Flight::route('/user/[0-9]+', function(){
    echo "hello";
});

Flight::route('/users/@name', function($name){
    echo "hello, $name !";
});

Flight::start();

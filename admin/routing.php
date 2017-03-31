<?php
require 'lib/flight/Flight.php';
Flight::set('flight.views.path', 'source/view');

Flight::route("/", function(){
    Flight::redirect('/demo');
    #if session is open & the user have the correct role
    /*echo "inicio<br>";
    if(isset($_GET["u"]) ){
        echo $_GET["u"];
    }*/
    #if is not opened -> redirect to /login
    //Flight::redirect('/login');
    #if have not the correct role -> redirect to /login
    //Flight::redirect('/inaccesible');
});

Flight::route('/login', function(){
    #if session is not open
    echo "Inicio de sesión";
    #if is -> redirect to /
    //Flight::redirect('/');
});

Flight::route('/register', function(){
    #if session is not open
    echo "Registro de usuario";
    #if is -> redirect to /
    //Flight::redirect('/');
});

Flight::route('/demo', function(){
    $hola = "Hola a todos";
    #if session is open & the user have the correct role
    View::render('template/ini', array("hola" => $hola)); #Html head, menu, header
    View::render('demo'); #html content
    View::render('template/fin'); #Html footer
    #if is not -> redirect to /login
});

Flight::route('/user/[0-9]+', function(){
    echo "hello";
});

Flight::route('/users/@name', function($name){
    echo "hello, $name !";
});

Flight::route('/inaccesible', function(){
    echo "No tiene los permisos necesarios para acceder a esta funcionalidad";
});

Flight::map('notFound', function(){
    echo "404 not found!";
});

#Flight start
Flight::start();

<?php
#Inicio - Raiz
Flight::route("/", function(){
    //Flight::redirect('/demo');
    Session::access(array("minRole" => 1), function(){
        Controller::run("resumen");
        View::render('template/ini'); #Html head, menu, header
        View::render('resumen'); #html content
        View::render('template/fin'); #Html footer
    });
});

Flight::route("/modificarDatos", function(){
    //Flight::redirect('/demo');
    Session::access(array("minRole" => 1), function(){
        Controller::run("modificarDatos");
        View::render('template/ini'); #Html head, menu, header
        View::render('modificarDatos'); #html content
        View::render('template/fin'); #Html footer
    });
});

Flight::route("/home", function(){
    //Flight::redirect('/demo');
    Session::access(array("minRole" => 1), function(){
        Flight::redirect('/');
    });
});
#Final - Raiz


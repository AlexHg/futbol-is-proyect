<?php
#Inicio - Raiz
Flight::route("/", function(){
    //Flight::redirect('/demo');
    Session::showOnly(array("role" => 1), function(){
        Controller::run("bienvenidaJugador");
        View::render('template/ini'); #Html head, menu, header
        View::render('bienvenidaJugador'); #html content
        View::render('template/fin'); #Html footer
    });
    Session::showOnly(array("role" => 2), function(){
        //Controller::run("resumen");
        View::render('template/ini'); #Html head, menu, header
        View::render('bienvenidaCapitan'); #html content
        View::render('template/fin'); #Html footer
    });
    Session::showOnly(array("role" => 3), function(){
        //Controller::run("resumen");
        View::render('template/ini'); #Html head, menu, header
        View::render('bienvenidaCoordinador'); #html content
        View::render('template/fin'); #Html footer
    });
    Session::showNoRole(function(){
        Flight::redirect('/iniciarSesion');

    });
}); 

Flight::route("/resumen", function(){
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


<?php
Flight::route("/gestionarEquipos", function(){
    //Flight::redirect('/demo');
    Session::accessOnly(array("role" => 3), function(){
        Controller::run("gestionarEquipos");
        View::render('template/ini'); #Html head, menu, header
        View::render('gestionarEquipos'); #html content
        View::render('template/fin'); #Html footer
    });
});

Flight::route("/eliminarEquipo", function(){
    //Flight::redirect('/demo');
    Session::accessOnly(array("role" => 3), function(){
        Controller::run("eliminarEquipo");
        View::render('template/ini'); #Html head, menu, header
        View::render('eliminarEquipo'); #html content
        View::render('template/fin'); #Html footer
    });
});


Flight::route("/eliminarTorneo", function(){
    //Flight::redirect('/demo');
    Session::accessOnly(array("role" => 3), function(){
        Controller::run("eliminarTorneo");
        View::render('template/ini'); #Html head, menu, header
        View::render('eliminarTorneo'); #html content
        View::render('template/fin'); #Html footer
    });
});

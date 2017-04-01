<?php
#Con cuenta
Flight::route("/torneo", function(){
    //Flight::redirect('/demo');
    Session::access(array("minRole" => 1), function(){
        View::render('template/ini'); #Html head, menu, header
        View::render('torneo'); #html content
        View::render('template/fin'); #Html footer
    });
});

Flight::route("/horarios", function(){
    //Flight::redirect('/demo');
    Session::access(array("minRole" => 1), function(){
        View::render('template/ini'); #Html head, menu, header
        View::render('consultarHorarios'); #html content
        View::render('template/fin'); #Html footer
    });
});

Flight::route("/consultarEquipos", function(){
    //Flight::redirect('/demo');
    Session::access(array("minRole" => 1), function(){
        Controller::run("consultarEquipos");
        View::render('template/ini'); #Html head, menu, header
        View::render('consultarEquipos'); #html content
        View::render('template/fin'); #Html footer
    });
});

Flight::route("/gestionarEquipos", function(){
    //Flight::redirect('/demo');
    Session::accessOnly(array("role" => 3), function(){
        Controller::run("gestionarEquipos");
        View::render('template/ini'); #Html head, menu, header
        View::render('gestionarEquipos'); #html content
        View::render('template/fin'); #Html footer
    });
});
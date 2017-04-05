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

Flight::route("/aceptarPeticiones", function(){
    //Flight::redirect('/demo');
    Session::access(array("minRole" => 1), function(){
        View::render('template/ini'); #Html head, menu, header
        View::render('aceptarPeticiones'); #html content
        View::render('template/fin'); #Html footer
    });
});

Flight::route("/registrarEquipo", function(){
    Session::access(array("minRole" => 2), function(){
        //Controller::run('registrarEquipo'); 
        View::render('template/ini'); #Html head, menu, header
        View::render('registrarEquipo'); #html content
        View::render('template/fin'); #Html footer
    });
});





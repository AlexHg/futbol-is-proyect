<?php
Flight::route("/eliminarJugador", function(){
    //Flight::redirect('/demo');
    Session::accessOnly(array("role" => 2), function(){
        Controller::run("eliminarJugador");
        View::render('template/ini'); #Html head, menu, header
        View::render('eliminarJugador'); #html content
        View::render('template/fin'); #Html footer
    });
});

Flight::route("/enviarInvitacion", function(){
    //Flight::redirect('/demo');
    Session::accessOnly(array("role" => 2), function(){
        Controller::run("enviarInvitacion");
        View::render('template/ini'); #Html head, menu, header
        View::render('enviarInvitacion'); #html content
        View::render('template/fin'); #Html footer
    });
});

Flight::route("/elegirHorario", function(){
    //Flight::redirect('/demo');
    Session::accessOnly(array("role" => 2), function(){
        View::render('template/ini'); #Html head, menu, header
        View::render('elegirHorario'); #html content
        View::render('template/fin'); #Html footer
    });
});

Flight::route("/aceptarInvitacionEquipo", function(){
    //Flight::redirect('/demo');
    Session::accessOnly(array("role" => 2), function(){
        View::render('template/ini'); #Html head, menu, header
        View::render('aceptarInvitacionEquipo'); #html content
        View::render('template/fin'); #Html footer
    });
});

Flight::route("/aceptarPeticionJugador", function(){
    //Flight::redirect('/demo');
    Session::accessOnly(array("role" => 2), function(){
        Controller::run('aceptarPeticionJugador'); #html content
        View::render('template/ini'); #Html head, menu, header
        View::render('aceptarPeticionJugador'); #html content
        View::render('template/fin'); #Html footer
    });
});

Flight::route("/modificarHorario", function(){
    //Flight::redirect('/demo');
    Session::accessOnly(array("role" => 2), function(){
        View::render('template/ini'); #Html head, menu, header
        View::render('modificarHorario'); #html content
        View::render('template/fin'); #Html footer
    });
});
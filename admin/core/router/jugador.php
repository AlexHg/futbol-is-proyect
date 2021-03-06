<?php

Flight::route('/registrarEquipo', function(){
    #if session is not open
    Session::accessOnly(array("role" => 1), function(){
        View::render('template/ini'); #Html head, menu, header
        View::render('registrarEquipo'); #html content
        View::render('template/fin'); #Html footer
    });
});

Flight::route('/aceptarInvitacionEquipo', function(){
    #if session is not open
    Session::accessOnly(array("role" => 1), function(){
        Controller::run("aceptarInvitacionEquipo");
        View::render('template/ini'); #Html head, menu, header
        View::render('aceptarInvitacionEquipo'); #html content
        View::render('template/fin'); #Html footer
    });
});

Flight::route('/enviarSolicitudAEquipo', function(){
    #if session is not open
    Session::accessOnly(array("role" => 1), function(){
        Controller::run("enviarSolicitudAEquipo");
        View::render('template/ini'); #Html head, menu, header
        View::render('enviarSolicitudAEquipo'); #html content
        View::render('template/fin'); #Html footer
    });
});

<?php
# Inicio - Solo sin sesión ni permisos
Flight::route('/iniciarSesion', function(){
    #if session is not open
    Session::preAccess(function(){
        View::render('template/ini.noaside'); #Html head, menu, header
        View::render('iniciarSesion'); #html content
        View::render('template/fin'); #Html footer
    });
});

Flight::route('/registrarCuenta', function(){
    #if session is not open
    Session::preAccess(function(){
        View::render('template/ini.noaside'); #Html head, menu, header
        View::render('registrarCuenta'); #html content
        View::render('template/fin'); #Html footer
    });
});

Flight::route('/recuperarCuenta', function(){
    Session::preAccess(function(){
        Controller::run("recuperarContrasena");
        View::render('template/ini.noaside'); #Html head, menu, header
        View::render('recuperarContrasena'); #html content
        View::render('template/fin'); #Html footer
    });
});

# Final - Sin sesión ni permisos



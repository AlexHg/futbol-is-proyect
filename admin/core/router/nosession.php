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
    #if session is not open
    Session::preAccess(function(){
        View::render('template/ini.noaside'); #Html head, menu, header
        View::render('recuperarContrasena'); #html content
        View::render('template/fin'); #Html footer
    });
});

Flight::route('/creditos', function(){

    View::render('template/ini.noaside'); #Html head, menu, header
    View::render('creditos'); #html content
    View::render('template/fin'); #Html footer

});

Flight::route('/designDemo', function(){
    View::render('template/ini'); #Html head, menu, header
    View::render('demo'); #html content
    View::render('template/fin'); #Html footer

});
# Final - Sin sesión ni permisos



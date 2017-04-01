<?php
require 'core/flight/Flight.php';
Flight::set('flight.views.path', 'source/view');

#CONTROLADORES
Flight::route('/action/@controller', function($controller){
    Controller::run($controller);
    Controller::print_path($controller);
});


#VISTAS
#Inicio - Raiz
Flight::route("/", function(){
    //Flight::redirect('/demo');
    Session::access(array("minRole" => 1), function(){
        View::render('template/ini'); #Html head, menu, header
        View::render('blank'); #html content
        View::render('template/fin'); #Html footer
    });
});
#Final - Raiz


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


# Inicio - Vistas de errores & excepciones
Flight::route('/inaccesible', function(){
    View::render('template/ini.noaside'); #Html head, menu, header
    View::render('inaccesible'); #html content
    View::render('template/fin'); #Html footer
});

Flight::map('notFound', function(){
    View::render('template/ini.noaside'); #Html head, menu, header
    View::render('404'); #html content
    View::render('template/fin'); #Html footer
});
# Final - Vistas de errores & excepciones


#Inicio - Otros
Flight::route('/user/[0-9]+', function(){
    echo "hello";
});

Flight::route('/users/@name', function($name){
    echo "hello, $name !";
});
#Final - Otros


#Flight start
Flight::start();

<?php
#Inicio - Otros
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
Flight::route('/notify', function(){
    View::render('template/ini.noaside'); #Html head, menu, header
    View::render('Notify_example'); #html content
    View::render('template/fin'); #Html footer
});
Flight::route('/user/[0-9]+', function(){
    //Model::use("Consultas.temp");
    //print_r(DatosJugador("capitan@hotmail.com"));
});
Flight::route('/users/@name', function($name){
    echo "hello, $name !";
});
#Final - Otros
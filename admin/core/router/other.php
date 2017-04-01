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
Flight::route('/user/[0-9]+', function(){
    echo "hello";
});
Flight::route('/users/@name', function($name){
    echo "hello, $name !";
});
#Final - Otros
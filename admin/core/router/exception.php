<?php


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


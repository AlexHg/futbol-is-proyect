<?php
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


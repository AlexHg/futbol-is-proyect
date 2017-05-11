<?php

Flight::route('/public', function(){
    Controller::run("resumen");
    View::render('public'); #html content
});

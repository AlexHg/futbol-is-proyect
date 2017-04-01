<?php
#Inicio - Otros
Flight::route('/user/[0-9]+', function(){
    echo "hello";
});

Flight::route('/users/@name', function($name){
    echo "hello, $name !";
});
#Final - Otros
<?php 
# Llama al modelo de usuario-coordinador
#if usuario esta en la DB
    Session::start(
        array(
            "role" => 1, 
            "rolename" => "coordinador", 
            "name" => "Alejandro Hernandez Gomez", 
            "email" => "alexxh42@gmail.com", 
            "avatar" => "avatar/avatar1.jpg"
        )
    );
Flight::redirect('/');
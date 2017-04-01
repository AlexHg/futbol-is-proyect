<?php
# Flight Framework require
require 'core/flight/Flight.php';

# Core require
require "core/Database.php";
require "core/View.php";
require "core/Controller.php";
require "core/Model.php";
require "core/Session.php";

# Session start 
session_start();

# Simulate session
/*Session::start(
    array(
        "role" => 1, 
        "rolename" => "coordinador", 
        "name" => "Alejandro Hernández", 
        "email" => "alexxh42@gmail.com", 
        "avatar" => "avatar/avatar1.jpg"
    )
);*/

# Content require
require 'core/Router.php';

# Flight start
Flight::start();
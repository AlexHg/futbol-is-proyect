<?php
# Flight Framework require
require 'core/flight/Flight.php';

# Core require
require "core/Config.php";
require "core/Database.php";
require "core/View.php";
require "core/Controller.php";
require "core/Model.php";
require "core/Session.php";

# Session start 
session_start();

# Content require
require 'core/Router.php';

# Flight start
Flight::start();
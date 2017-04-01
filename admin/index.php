<?php
#core
require "core/View.php";
require "core/Controller.php";
require "core/Model.php";
require "core/Session.php";

#Session start 
session_start();

Session::start();
#Content require
require 'router.php';
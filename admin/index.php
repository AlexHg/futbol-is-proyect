<?php
#core
require "core/view.php";
require "core/controller.php";
require "core/model.php";
require "core/session.php";

#Session start 
session_start();

#Content require
require 'routing.php';

#Session end


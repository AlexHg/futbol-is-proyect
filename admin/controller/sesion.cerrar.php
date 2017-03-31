<?php 
$_SESSION = array();
session_destroy();
Flight::redirect('/');
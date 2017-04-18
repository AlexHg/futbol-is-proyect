<?php
    Model::load("Usuario");

    function getDatos(){ return Usuario::getDatosUsuario($_SESSION['email']); }
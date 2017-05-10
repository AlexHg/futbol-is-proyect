<?php

#Routing include
require 'core/router/allsession.php'; //Disponible para todos los permisos
require 'core/router/nosession.php'; //Disponible para quien no haya iniciado sesión
require 'core/router/jugador.php'; //Disponible solo para quien tenga permisos de jugador
require 'core/router/capitan.php'; //Disponible solo para quien tenga permisos de capitan
require 'core/router/coordinador.php'; //Disponible solo para quien tenga permisos de coordinador
require 'core/router/controller.php'; //Ruteo de controladores
require 'core/router/exception.php'; //Disponible cuando hay algun error o excepcion
require 'core/router/other.php'; //Otros ruteos no descritos
require 'core/router/public.php'; //publico
require 'core/router/temporal.php'; //Los que aun no se donde clasificarlos


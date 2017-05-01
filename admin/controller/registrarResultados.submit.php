<?php
Model::load("Torneo");
Model::load("Equipo");

if(Torneo::registrarResultado($_POST["idequipo1"], $_POST["idequipo2"], $_POST["idjuego"], $_POST["equipo1res"], $_POST["equipo2res"], $_POST["idtorneo"], $_POST["idfase"]) ){
    Flight::redirect('/registrarResultados?n=done');
}else{
    Flight::redirect('/registrarResultados?n=error');
}

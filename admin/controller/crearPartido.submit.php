<?php
    Model::load("Torneo");
    if($_POST['equipo1'] === $_POST['equipo2']) Flight::redirect('/eligeTorneo_Partido?n=sameTeam');
    $msg = Torneo::crearPartido($_POST['equipo1'],$_POST['equipo2'],$_POST['horario'],$_POST['fase'],$_POST['idTorneo']);
    if($msg === 0) Flight::redirect('/eligeTorneo_Partido?n=done');	
    else echo($msg);
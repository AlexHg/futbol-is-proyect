<?php
    Model::load("Torneo");

    if( !isset($_POST['nombre']) || strlen($_POST['nombre']) < 1 ){
        Flight::redirect('/crearTorneo?n=noname');
    }
    if( count($_POST['dia']) < 4 ){
        if(count($_POST['dia']) < 4){
            Flight::redirect('/crearTorneo?n=zdays');
        }
        Flight::redirect('/crearTorneo?n=nodays');
    }
    if( Torneo::crearTorneo($_POST['nombre'],$_POST['tipo'],$_POST['fechaInicio'],$_POST['fechaLimite']) ){
        foreach($_POST['dia'] as $dia){
            Torneo::asignarDiaTorneo($dia,$_POST['nombre']);
        }
        Flight::redirect('/crearTorneo?n=done');
    }else{
        Flight::redirect('/crearTorneo?n=usado');
    }

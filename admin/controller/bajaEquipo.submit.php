<?php
    Model::load("Torneo");
    
    if( Torneo::bajaEquipo($_POST['equipo'], $_POST['torneo']) ){
        Flight::redirect('/eligeTorneo?n=done&e='.$_POST['equipo'].'&t='.$_POST['torneo']);
    }else{
        Flight::redirect('/eligeTorneo?n=err');
    }
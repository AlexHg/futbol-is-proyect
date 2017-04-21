<?php
Model::load("Torneo");

function listaTorneos(){
    $torneos=Torneo::getTorneos();
    while ($row = $torneos->fetch_array(MYSQLI_ASSOC)) {
        echo '<option value="'.$row["IDTorneo"].'">'.$row["nombre"].'</option>';
    }
}

function listaTorneosActuales(){
    $torneos=Torneo::getTorneosCurDate();
    while ($row = $torneos->fetch_array(MYSQLI_ASSOC)) {
        echo '<option value="'.$row["IDTorneo"].'">'.$row["Nombre"].'</option>';
    }
}
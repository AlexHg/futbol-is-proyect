<?php
Model::load("Torneo");
Model::load("Equipo");

function printEquipo($nombreequipo,$num){
    $torneos = Equipo::getTorneos($nombreequipo);
    if($torneos->num_rows > 0){ // Esta Inscrito en torneos, concatenar todos.
        $torneos_array = array();
        while ($row = $torneos->fetch_array(MYSQLI_ASSOC)) $torneos_array[] = $row['torneos'];
        $torneos_string = implode(", ", $torneos_array);
    }else{
        $torneos_string = "Ningun Torneo Inscrito";
    }        
    echo '<tr>';
    echo '<th scope="row">'.$num,'</th>';
    echo '<td>'.$nombreequipo.'</td>';
    echo '<td>'.Equipo::getCapitan($nombreequipo);.'</td>';
    echo '<td>'.$torneos_string.'</td>';
    echo '</tr>';
}


function mostrarRapido(){
    $equipos = Torneo::getEquiposTorneo2(1);
    $i = 1;
    while ($row = $equipos->fetch_array(MYSQLI_ASSOC)) {
        printEquipo($row["nombreequipo"],$i);
        $i++;
    }
}

function mostrarSoccer(){
    $equipos = Torneo::getEquiposTorneo2(0);
    $i = 1;
    while ($row = $equipos->fetch_array(MYSQLI_ASSOC)) {
        printEquipo($row["nombreequipo"],$i);
        $i++;
    }
}


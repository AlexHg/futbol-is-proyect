<?php
Model::load("Torneo");
Model::load("Equipo");

function print_table(){
    //Reemplazar por id de torneo
    $equipos = Torneo::getEquiposTorneo2(1);
    $i = 1;
    while ($row = $equipos->fetch_array(MYSQLI_ASSOC)) {
        $nombreequipo=$row["nombreequipo"];
        $resultados =Equipo::getResultados($nombreequipo);
        $puntos=$resultados[2]*3+$resultados[3];
        $diferencia=$resultados[5]-$resultados[6];
        echo '<tr>';
        echo '<th scope="row">'.$i,'</th>';
        echo '<td>'.$nombreequipo.'</td>';
        echo '<td>'.$resultados[1].'</td>';
        echo '<td>'.$resultados[2].'</td>';
        echo '<td>'.$resultados[3].'</td>';
        echo '<td>'.$resultados[4].'</td>';
        echo '<td>'.$resultados[5].'</td>';
        echo '<td>'.$resultados[6].'</td>';
        echo '<td>'.$diferencia.'</td>';
        echo '<td>'.$puntos.'</td>';
        echo '</tr>';
        $i++;
    }
}

    function mostrarSoccer(){
    //Reemplazar por id de torneo
    $equipos = Torneo::getEquiposTorneo2(0);
    $i = 1;
    while ($row = $equipos->fetch_array(MYSQLI_ASSOC)) {
        $nombreequipo=$row["nombreequipo"];
        $resultados =Equipo::getResultados($nombreequipo);
        $puntos=$resultados[2]*3+$resultados[3];
        $diferencia=$resultados[5]-$resultados[6];
        echo '<tr>';
        echo '<th scope="row">'.$i,'</th>';
        echo '<td>'.$nombreequipo.'</td>';
        echo '<td>'.$resultados[1].'</td>';
        echo '<td>'.$resultados[2].'</td>';
        echo '<td>'.$resultados[3].'</td>';
        echo '<td>'.$resultados[4].'</td>';
        echo '<td>'.$resultados[5].'</td>';
        echo '<td>'.$resultados[6].'</td>';
        echo '<td>'.$diferencia.'</td>';
        echo '<td>'.$puntos.'</td>';
        echo '</tr>';
        $i++;
    }
}


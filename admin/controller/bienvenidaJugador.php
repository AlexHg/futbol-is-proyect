<?php
Model::load("Jugador");

function enlistarEquipos(){
    $resultado = Jugador::getEquipos();
    if($resultado->num_rows > 0){
        echo '<h2><b>Estos son los equipos a los que perteneces</b></h2>
    <table class="table table-striped " id="example"  cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>#</th>
            <th>Equipo</th>
            <th>Capitán</th>
            <th>Uniforme</th>
        </tr>
        </thead>
        <tbody>';
        $index = 0;
        while ($equipo = $resultado->fetch_array(MYSQLI_ASSOC)) {
            echo '
        <tr>
            <td>'.++$index.'</td>
            <td>'.$equipo['nombreEquipo'].'</td>
            <td>'.$equipo['nombreCapitan'].'</td>
            <td>'.$equipo['DescripcionUniforme'].'</td>
        </tr>';
        }
        echo '</tbody></table>';
    }else{
        echo '<h2><b>Aun no perteneces a ningun equipo.</b></h2>';
    }

}


<?php
Model::load("Torneo");
Model::load("Equipo");

function enlistarTorneos(){
    $resultado = Torneo::getTorneos();
    while ($torneo = $resultado->fetch_array(MYSQLI_ASSOC)) {
        echo("<option>".$torneo['nombre']."</option>");
    }
}

function mostrarReporte(){
    if(isset($_POST['reporteSelect'])){
    switch ($_POST['reporteSelect']) {
        case 'Tabla General de Torneo': // 3
            $resultado = Torneo::getResultadosTorneo($_POST['nombreTorneo']);
            $tipo = Torneo::getTipo($_POST['nombreTorneo']);
            $tablaGeneral = [];
            while ($partido = $resultado->fetch_array(MYSQLI_ASSOC)) {
                $equipo1 = Equipo::getEquipoById($partido["equipo1"])["NombreEquipo"];
                $equipo2 = Equipo::getEquipoById($partido["equipo2"])["NombreEquipo"];
                if(!array_key_exists($equipo1, $tablaGeneral)) $tablaGeneral[$equipo1]=0;
                if(!array_key_exists($equipo2, $tablaGeneral)) $tablaGeneral[$equipo2]=0;
                if($partido['golesequipo1']>$partido['golesequipo2']){ // Gana Equipo 1
                    if($tipo == 1){ //Rapido
                        $tablaGeneral[$equipo1] += 3;
                    }else{//Soccer
                        $tablaGeneral[$equipo1] += 2;
                        $tablaGeneral[$equipo2] += 1;
                    }
                }elseif($partido['golesequipo1']==$partido['golesequipo2']){ // Empate
                    $tablaGeneral[$equipo1] += 1;
                    $tablaGeneral[$equipo2] += 1;
                }else{ // Gana Equipo 2
                    if($tipo == 1){ //Rapido
                        $tablaGeneral[$equipo2] += 3;
                    }else{//Soccer
                        $tablaGeneral[$equipo2] += 2;
                        $tablaGeneral[$equipo1] += 1;
                    }
                }
            }
            echo "<h2>Tabla de Posiciones General Torneo: ".$_POST['nombreTorneo']."</h2>";
            arsort($tablaGeneral); //DESC
            echo '<table class="table table-striped"><tr><th>#</th><th>Equipo</th><th>Puntos</th></tr>'; // Primer Fila
            $pos = 0;
            foreach ($tablaGeneral as $key => $value) {
                echo '<tr>';
                echo "<td>".++$pos."</td>";
                echo "<td>".$key."</td>";
                echo "<td>".$value."</td>";
                echo '</tr>';
            }
            break;
        
        default:
            # code...
            break;
    }
}
}

function tabla_resultados_torneo($torneo){
    $resultados = Torneo::getResultadosTorneo($torneo);
    while ($partido = $resultados->fetch_array(MYSQLI_ASSOC)) {  
        $equipo1 = Equipo::getEquipoById($partido["equipo1"])["NombreEquipo"];
        $equipo2 = Equipo::getEquipoById($partido["equipo2"])["NombreEquipo"]; 
        ?>
            <tr>
                <th scope="row"><?php echo $equipo1." "."VS"." ".$equipo2 ?></th>
                <td><?php echo $partido["goles1"]." a ".$partido["goles2"] ?></td>
                <td><?php echo $partido["jornada"] ?></td>
                <td><?php echo $partido["horario"] ?></td>
            </tr>
        <?php
    }
}
function tablas_resultados_Torneos(){
    $torneosList = Torneo::getTorneos();

    while ($torneo = $torneosList->fetch_array(MYSQLI_ASSOC)) {

        ?>
            <br>
            <h3>Torneo: <?php echo $torneo["nombre"] ?></h3>
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>VS</th>
                        <th>Resultados</th>
                        <th>Jornada</th>
                        <th>Fecha y hora</th>
                    </tr>
                </thead>
                <tbody>
                    <?php tabla_resultados_torneo($torneo["IDTorneo"]) ?>
                </tbody>
            </table> 
            <br>
        <?php
    }
}

function tabla_torneos_soccer(){
    $torneosList = Torneo::getListTorneosSoccer();
    while ($torneo = $torneosList->fetch_array(MYSQLI_ASSOC)) {
        $countEquipos = Torneo::getCountEquiposTorneo($torneo["IDTorneo"])->fetch_array(MYSQLI_ASSOC)["count"];

        ?>
            <tr>
                <th scope="row"><?php echo $torneo["IDTorneo"] ?></th>
                <td><?php echo $torneo["Nombre"] ?></td>
                <td><?php echo $torneo["Fecha_Inicio"] ?></td>
                <td><?php echo $torneo["Fecha_Fin"] ?></td>
                <td><?php echo $torneo["Fecha_Cierre_Inscripcion"] ?></td>
                <td><?php echo $countEquipos ?></td>
            </tr>
        <?php
    }
}

function tabla_torneos_rapido(){
    $torneosList = Torneo::getListTorneosRapido();
    while ($torneo = $torneosList->fetch_array(MYSQLI_ASSOC)) {
        $countEquipos = Torneo::getCountEquiposTorneo($torneo["IDTorneo"])->fetch_array(MYSQLI_ASSOC)["count"];

        ?>
            <tr>
                <th scope="row"><?php echo $torneo["IDTorneo"] ?></th>
                <td><?php echo $torneo["Nombre"] ?></td>
                <td><?php echo $torneo["Fecha_Inicio"] ?></td>
                <td><?php echo $torneo["Fecha_Fin"] ?></td>
                <td><?php echo $torneo["Fecha_Cierre_Inscripcion"] ?></td>
                <td><?php echo $countEquipos ?></td>
            </tr>
        <?php
    }
}

function tabla_torneos_soccer_index(){
    $torneosList = Torneo::getListTorneosSoccer();
    while ($torneo = $torneosList->fetch_array(MYSQLI_ASSOC)) {
        $countEquipos = Torneo::getCountEquiposTorneo($torneo["IDTorneo"])->fetch_array(MYSQLI_ASSOC)["count"];
        $dia=Torneo::recibirDias($torneo["IDTorneo"])->fetch_array(MYSQLI_ASSOC)["dias"];
        ?>
            <tr>
                <th scope="row"><?php echo $torneo["IDTorneo"] ?></th>
                <td><?php echo $torneo["Nombre"] ?></td>
                <td><?php echo $torneo["Fecha_Inicio"] ?></td>
                <td><?php echo $torneo["Fecha_Fin"] ?></td>
                <td><?php echo $dia ?></td>
            </tr>
        <?php
    }
}

function tabla_torneos_rapido_index(){
    $torneosList = Torneo::getListTorneosRapido();
    while ($torneo = $torneosList->fetch_array(MYSQLI_ASSOC)) {
        $countEquipos = Torneo::getCountEquiposTorneo($torneo["IDTorneo"])->fetch_array(MYSQLI_ASSOC)["count"];
        $dia=Torneo::recibirDias($torneo["IDTorneo"])->fetch_array(MYSQLI_ASSOC)["dias"];
        ?>
            <tr>
                <th scope="row"><?php echo $torneo["IDTorneo"] ?></th>
                <td><?php echo $torneo["Nombre"] ?></td>
                <td><?php echo $torneo["Fecha_Inicio"] ?></td>
                <td><?php echo $torneo["Fecha_Fin"] ?></td>
                <td><?php echo $dia ?></td>

            </tr>
        <?php
    }
}



function tablas_resultados_Torneos_index(){
    $torneosList = Torneo::getTorneos();
    while ($torneo = $torneosList->fetch_array(MYSQLI_ASSOC)) {

        ?>
            <h3>Torneo: <?php echo $torneo["nombre"] ?></h3>
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>VS</th>
                        <th>Resultados</th>
                        <th>Jornada</th>
                        <th>Fecha y hora</th>
                    </tr>
                </thead>
                <tbody>
                    <?php tabla_resultados_torneo($torneo["IDTorneo"]) ?>
                </tbody>
            </table>
        <?php
    }
}

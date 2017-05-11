<?php
Model::load("Torneo");
Model::load("Equipo");

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

        ?>
            <tr>
                <th scope="row"><?php echo $torneo["IDTorneo"] ?></th>
                <td><?php echo $torneo["Nombre"] ?></td>
                <td><?php echo $torneo["Fecha_Inicio"] ?></td>
                <td><?php echo $torneo["Fecha_Fin"] ?></td>
                <td><?php echo $torneo["Fecha_Cierre_Inscripcion"] ?></td>

            </tr>
        <?php
    }
}

function tabla_torneos_rapido_index(){
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

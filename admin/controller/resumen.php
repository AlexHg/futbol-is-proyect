<?php
Model::load("Torneo");
Model::load("Equipo");

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
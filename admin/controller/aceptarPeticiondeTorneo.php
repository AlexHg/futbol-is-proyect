<?php

Model::load("Coordinador");


function mostrarSolicitudes(){
    $peticiones = Coordinador::getPeticionesdeEquipos();
    //echo ($row['equipo']);

    while ($row = $peticiones->fetch_array(MYSQLI_ASSOC)) {
        echo '<tr>';
        echo '<th scope="row">';
        //se envia la fila entera para manipular sobre ella
        echo '<input id="checkbox0c" type="checkbox" name="invitacionesSeleccionadas[]" value="' .$row['idtorneo'].",".$row['idequipo']. '"</input>';
        echo '<div class="checkbox checkbox-dark">';
        echo '</div>';
        echo '</th>';
        echo '<td>' . $row['nombreEquipo'] . '</td>';
        echo '<td>' . $row['capitan'] . '</td>';
        echo '<td>' . $row['torneo'] . '</td>';
        echo '</tr>';

    }

}

function procesarSolicitud(){

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (isset($_POST["invitacionesSeleccionadas"])) {
                $invitacionesAceptadas = $_POST['invitacionesSeleccionadas'];

                if(isset($_POST["aceptar"])){

                    Coordinador::aceptarSolicitudDeEquipo($invitacionesAceptadas);
                    ?>
                   <div style="background-color:#81F781; height:30px; padding-top:10px; padding-left: 30px;"><b>Petición aceptada</b></div>
                   <?php


                }else if(isset($_POST["rechazar"])){

                    Coordinador::rechazarSolicitudDeEquipo($invitacionesAceptadas);

                     ?>
                   <div style="background-color:#81F781; height:30px; padding-top:10px; padding-left: 30px;"><b>Petición rechazada</b></div>
                   <?php

                }

            } else {
             ?>
            <div style="background-color:#F5A9A9; height:30px; padding-top:10px; padding-left: 30px;"><b>No hay peticiones seleccionadas, por favor seleccione una</b></div>
            <?php

            }
         }
}

?>

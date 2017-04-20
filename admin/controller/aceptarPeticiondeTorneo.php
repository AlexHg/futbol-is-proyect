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
                    echo("El equipo se ha unido al torneo");


                }else if(isset($_POST["rechazar"])){

                    Coordinador::rechazarSolicitudDeEquipo($invitacionesAceptadas);

                    echo ("La peticion  ha sido rechazada");

                }

            } else {
                echo "No hay invitaciones seleccionadas";

            }
         }
}

?>

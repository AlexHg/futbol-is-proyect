<?php
/**
 * Created by PhpStorm.
 * User: criscastro
 * Date: 05/04/17
 * Time: 17:06
 */
Model::load("Jugador");

function mostrarInvitaciones($correo){
    /*
     * @param $IDJugador recibe el id del jugador para mostar las invitaciones que le han hecho los spitanes de unirse a su equipo*/
    $invitaciones = Jugador::getInvitacionesAEquipos($correo);
    while ($row = $invitaciones->fetch_array(MYSQLI_ASSOC)) {
        echo '<tr>';
        echo '<th scope="row">';
        //se envia la fila entera para manipular sobre ella
        echo '<input id="checkbox0c" type="checkbox" name="invitacionesAceptadas[]" value="' . $row . '"</input>';
        echo '<div class="checkbox checkbox-dark">';
        echo '</div>';
        echo '</th>';
        echo '<td>' . $row["equipo"] . '</td>';
        echo '<td>' . $row["capitan"] . '</td>';
        echo '<td>' . $row["imagenCapitan"] . '</td>';
        echo '</tr>';
    }

    function aceptarSolicitud($correo){

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["invitacionesAceptadas"])) {
                $invitacionesAceptadas = $_POST['invitacionesAceptadas'];
                foreach ($invitacionesAceptadas as $invitacion) {
                    //Cambiar por ID obtenido de sesión
                    Jugador::aceptarSolicitudDeEquipo($invitacion['equipo'], $correo);
                    echo 'Haz aceptado la invitacion al  equipo' . $invitacion['equipo'];
                }
            } else {
                echo "No hay invitaciones seleccionadas";
            }
        }
    }

}
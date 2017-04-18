<?php
Model::load("Jugador");
/**
 * Created by PhpStorm.
 * User: criscastro
 * Date: 05/04/17
 * Time: 17:06
 */

function mostrarInvitaciones(){
   $correo=$_SESSION['email'];
    $invitaciones = Jugador::getInvitacionesAEquipos($correo);
    //echo ($row['equipo']);

    while ($row = $invitaciones->fetch_array(MYSQLI_ASSOC)) {
        echo '<tr>';
        echo '<th scope="row">';
        //se envia la fila entera para manipular sobre ella
        echo '<input id="checkbox0c" type="checkbox" name="invitacionesAceptadas[]" value="' .$row['idequipo']. '"</input>';
        echo '<div class="checkbox checkbox-dark">';
        echo '</div>';
        echo '</th>';
        echo '<td>' . $row['equipo'] . '</td>';
        echo '<td>' . $row['capitan'] . '</td>';
        echo '<td>' . $row['imagenCapitan'] . '</td>';
        echo '</tr>';

    }

}



   function aceptarSolicitud(){

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["invitacionesAceptadas"])) {
                $invitacionesAceptadas = $_POST['invitacionesAceptadas'];


                foreach ($invitacionesAceptadas as $invitacion) {
                    //Cambiar por ID obtenido de sesión
                    //Jugador::aceptarSolicitudDeEquipo($invitacion['equipo'], $correo);
                    echo 'Haz aceptado la invitacion al  equipo'.' ' . $invitacion;
                }

            } else {
                echo "No hay invitaciones seleccionadas";
            }
        }
    }

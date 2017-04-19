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
        echo '<input id="checkbox0c" type="checkbox" name="invitacionesSeleccionadas[]" value="' .$row['idequipo']. '"</input>';
        echo '<div class="checkbox checkbox-dark">';
        echo '</div>';
        echo '</th>';
        echo '<td>' . $row['equipo'] . '</td>';
        echo '<td>' . $row['capitan'] . '</td>';
        echo '<td>' . $row['imagenCapitan'] . '</td>';
        echo '</tr>';

    }

}


   function procesarSolicitud(){

        if(isset($_POST["aceptar"])){

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (isset($_POST["invitacionesSeleccionadas"])) {
                $invitacionesAceptadas = $_POST['invitacionesSeleccionadas'];
                foreach ($invitacionesAceptadas as $invitacion) {
                    //Cambiar por ID obtenido de sesión
                    //Jugador::aceptarSolicitudDeEquipo($invitacion['equipo'], $correo);
                   Notify::alert(
                'La invitación fue aceptada',
                'La invitación fue aceptada exitosamente',
                'Aceptar');
                }

            } else {
               Notify::alert(
                'Invitación no seleccionada',
                'No hay invitaciones seleccionadas, por favor selecciona al menos una',
                'Reintentar');
            }
         }
    }

       else if(isset($_POST["rechazar"])){

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["invitacionesSeleccionadas"])) {
                $invitacionesAceptadas = $_POST['invitacionesSeleccionadas'];


                foreach ($invitacionesAceptadas as $invitacion) {
                    //Cambiar por ID obtenido de sesión
                    //Jugador::aceptarSolicitudDeEquipo($invitacion['equipo'], $correo);
                    Notify::alert(
                'La invitación fue rechazada',
                'La invitación fue rechazada exitosamente',
                'Aceptar');
                }

            } else {
               Notify::alert(
                'Invitación no seleccionada',
                'No hay invitaciones seleccionadas, por favor selecciona al menos una',
                'Reintentar');
            }
        }

       }

    }

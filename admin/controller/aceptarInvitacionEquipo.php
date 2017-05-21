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
        echo '</tr>';

    }

}


   function procesarSolicitud(){
     $correo=$_SESSION['email'];
     $mensaje=0;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (isset($_POST["invitacionesSeleccionadas"])) {
                $invitacionesAceptadas = $_POST['invitacionesSeleccionadas'];

                if(isset($_POST["aceptar"])){

                    Jugador::aceptarSolicitudDeEquipo($invitacionesAceptadas,$correo);
                    ?>
                   <div style="background-color:#81F781; height:30px; padding-top:10px; padding-left: 30px;"><b>Invitación aceptada</b></div>
                   <?php


                }else if(isset($_POST["rechazar"])){

                    Jugador::rechazarSolicitudDeEquipo($invitacionesAceptadas,$correo);
                   ?>
                   <div style="background-color:#81F781; height:30px; padding-top:10px; padding-left: 30px;"><b>Invitación rechazada</b></div>
                   <?php

                }

            } else {
                ?>
            <div style="background-color:#F5A9A9; height:30px; padding-top:10px; padding-left: 30px;"><b>No hay invitaciones seleccionadas, por favor selecciona una</b></div>
            <?php

            }
         }
       /*
       //mensajes
         if($mensaje==1){
             Notify::confirm('Solicitud Aceptada',
                    "Ahora eres miembro de este equipo ",
                    "window.location='aceptarInvitacionEquipo'");
         }elseif($mensaje==2){
             Notify::confirm('Solicitud Rechazada',
                    "La solicitud ha sido rechazada",
                    "window.location='aceptarInvitacionEquipo'");
         }
       //final de mensajes
       */
    }

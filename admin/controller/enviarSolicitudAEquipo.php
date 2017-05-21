<?php
/**
 * Created by PhpStorm.
 * User: criscastro
 * Date: 09/04/17
 * Time: 20:04
 */
Model::load("Jugador");
Model::load("Equipo");
Model::load("Torneo");
function mostrarEquipos(){
    $correo=$_SESSION['email'];
    $invitaciones = Torneo::getEquipos(1);
    //echo ($row['equipo']);

    while ($row = $invitaciones->fetch_array(MYSQLI_ASSOC)) {
        echo '<tr>';
        echo '<th scope="row">';
        //se envia la fila entera para manipular sobre ella
        echo '<input id="checkbox0c" type="checkbox" name="invitacionesSeleccionadas[]" value="' .$row['IDEquipo']. '"</input>';
        echo '<div class="checkbox checkbox-dark">';
        echo '</div>';
        echo '</th>';
        echo '<td>' . $row['NombreEquipo'] . '</td>';
        echo '<td>' . $row['Nombre'] . '</td>';
        echo '</tr>';

    }

}


   function enviarSolicitudes(){
       $correo=$_SESSION['email'];

       if ($_SERVER["REQUEST_METHOD"] == "POST") {

           if (isset($_POST["invitacionesSeleccionadas"])) {
               $invitacionesAceptadas = $_POST['invitacionesSeleccionadas'];
               if(isset($_POST["aceptar"])){
                    foreach ($invitacionesAceptadas as $aceptada)
                   $op = Jugador::enviarSolicitudAEquipo($aceptada,$correo);
                 switch ($op) {
                   case -3:
                   ?>
                   <div style="background-color:#F5DA81; height:30px; padding-top:10px; padding-left: 30px;"><b>Ya eres miembro de este equipo</b></div>
                   <?php
                   break;
                   case -2:
                   ?>
                   <div style="background-color:#F5DA81; height:30px; padding-top:10px; padding-left: 30px;"><b>El capitán de este equipo ya te envió una Invitación</b></div>
                    <?php      
                   break;
                   case -1: ?> 
                   <div style="background-color:#A9D0F5; height:30px; padding-top:10px; padding-left: 30px;"><b>Ya habías enviado una solicitud para este equipo antes, por favor espera a que el capitán la apruebe</b></div> 
                   <?php
                   break;
                   case 0:
                   ?>
                   <div style="background-color:#81F781; height:30px; padding-top:10px; padding-left: 30px;"><b>La solicitud fue enviada con éxito</b></div>
                   <?php
                   break;
                   default: echo($op); break; // Otro Error
                 }
               }else if(isset($_POST["rechazar"])){
                   echo ("La solicitud ha sido rechazada");

               }

           } else {
               ?>
            <div style="background-color:#F5A9A9; height:30px; padding-top:10px; padding-left: 30px;"><b>No hay solicitudes seleccionadas, por favor seleccione una</b></div>
            <?php

           }
       }
   }



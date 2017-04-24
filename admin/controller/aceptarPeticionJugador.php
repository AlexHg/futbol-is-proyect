<?php

Model::load("Capitan");



function mostrarPeticiones(){
   $correo=$_SESSION['email'];
    $invitaciones = Capitan::getPeticionesAEquipo($correo);
    //echo ($row['equipo']);

    while ($row = $invitaciones->fetch_array(MYSQLI_ASSOC)) {
        echo '<tr>';
        echo '<th scope="row">';
        //se envia la fila entera para manipular sobre ella
        echo '<input id="checkbox0c" type="checkbox" name="invitacionesSeleccionadas[]" value="' .$row['idequipo'].",".$row['idjugador'].",".$row['correo'].'"</input>';
        echo '<div class="checkbox checkbox-dark">';
        echo '</div>';
        echo '</th>';
        echo '<td>' . $row['nombre'] . '</td>';
        echo '<td>' . $row['apellido'] . '</td>';
        echo '</tr>';
    }
}

function procesarSolicitud(){

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (isset($_POST["invitacionesSeleccionadas"])) {
                $invitacionesAceptadas = $_POST['invitacionesSeleccionadas'];

                if(isset($_POST["aceptar"])){

                    Capitan::aceptarPeticionJugador($invitacionesAceptadas);
                   ?>
                   <div style="background-color:#81F781; height:30px; padding-top:10px; padding-left: 30px;"><b>Solicitud aceptada</b></div>
                   <?php


                }else if(isset($_POST["rechazar"])){

                    Capitan::rechazarPeticionJugador($invitacionesAceptadas);

                    ?>
                   <div style="background-color:#81F781; height:30px; padding-top:10px; padding-left: 30px;"><b>Solicitud rechazada</b></div>
                   <?php

                }

            } else {
                ?>
            <div style="background-color:#F5A9A9; height:30px; padding-top:10px; padding-left: 30px;"><b>No hay solicitudes seleccionadas, por favor selecciona una</b></div>
            <?php

            }
         }
}

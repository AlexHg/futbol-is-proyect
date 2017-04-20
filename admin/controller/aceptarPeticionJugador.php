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
                    echo("El jugador se ha unido a tu equipo");


                }else if(isset($_POST["rechazar"])){

                    Capitan::rechazarPeticionJugador($invitacionesAceptadas);

                    echo ("La petición  ha sido rechazada");

                }

            } else {
                echo "No hay peticiones seleccionadas";

            }
         }
}

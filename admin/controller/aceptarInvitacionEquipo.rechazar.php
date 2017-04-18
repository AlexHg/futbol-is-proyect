<?php
Model::load("Jugador");


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["invitacionesAceptadas"])) {
                $invitacionesAceptadas = $_POST['invitacionesAceptadas'];


                foreach ($invitacionesAceptadas as $invitacion) {
                    //Cambiar por ID obtenido de sesión
                    //Jugador::aceptarSolicitudDeEquipo($invitacion['equipo'], $correo);
                    echo 'Haz rechazado la invitacion al  equipo' .' '. $invitacion;
                }

            } else {
                echo "No hay invitaciones seleccionadas";
            }
        }


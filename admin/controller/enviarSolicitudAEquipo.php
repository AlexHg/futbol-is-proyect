<?php
/**
 * Created by PhpStorm.
 * User: criscastro
 * Date: 09/04/17
 * Time: 20:04
 */
Model::load("Jugador");
Model::load("Equipo");
function mostrarEquipos($tipoTorneo)
{
    /*
        * @param $IDJugador recibe el id del jugador para mostar las invitaciones que le han hecho los spitanes de unirse a su equipo*/
    //$invitaciones = Jugador::getInvitacionesAEquipos($correo);
    $equipos = Torneo::getEquipos($tipoTorneo);
    while ($row = $equipos->fetch_array(MYSQLI_ASSOC)) {
        echo '<tr>';
        echo '<th scope="row">';
        //se envia la fila entera para manipular sobre ella
        echo '<input id="checkbox0c" type="checkbox" name="invitacionesAceptadas[]" value="' . $row. '"</input>';
        echo '<div class="checkbox checkbox-dark">';
        echo '</div>';
        echo '</th>';
        echo '<td>' . $row["nombreEquipo"] . '</td>'; //nombre del equipo
        echo '<td>' . $row["Nombre"] . '</td>'; //nombre capitan
        echo '<td>' . $row["Imagen"] . '</td>';//imagen del capitan
        echo '</tr>';

    }

    function enviarSolicitudAEquipo($correo){

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["solicitudesSeleccionadas"])) {
                $solicitudesSeleccionadas = $_POST['solicitudesSeleccionadas'];
                foreach ($solicitudesSeleccionadas as $solicitud) {
                    //Cambiar por ID obtenido de sesión
                    Jugador::enviarSolicitudAEquipo($solicitud["IDEquipo"],$correo);
                    echo 'Haz enviado  la invitacion al  equipo' . $solicitud['equipo'];
                     Notify::alert(
                'Solicitud enviada',
                'La solicitud fue enviada con éxito',
                'Aceptar');
                }
            } else {
                Notify::alert(
                'Solicitudes no seleccionadas',
                'No hay solicitudes seleccionadas',
                'Reintentar');
            }
        }
    }
}

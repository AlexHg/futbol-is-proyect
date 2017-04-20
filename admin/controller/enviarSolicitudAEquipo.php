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
        echo '<td>' . $row['Imagen'] . '</td>';
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
                   Jugador::enviarSolicitudAEquipo($aceptada,$correo);
                   echo("Las solicitudes han sido enviadas");


               }else if(isset($_POST["rechazar"])){

                   echo ("La solicitud ha sido rechazada");

               }

           } else {
               echo "No hay invitaciones seleccionadas";

           }
       }
   }



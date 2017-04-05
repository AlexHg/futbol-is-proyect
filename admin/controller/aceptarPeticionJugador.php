<?php
Model::load("Equipo");
Model::load("Capitan");
Model::load("Jugador");

function aceptarRechazarJugador(){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['Aceptar'])) {
            if (isset($_POST["seleccionados"])) {
                $seleccionados = $_POST['seleccionados'];
                foreach ($seleccionados as $seleccionado){
                    echo $seleccionado." fue aceptado<br />";
                    //Cambiar por ID obtenido de sesión
                    Equipo::aceptarSolicitudDeJugador(3,$seleccionado);
                }
            }
            else{
                echo "No hay jugadores seleccionados<br>";
            }
        }
        if (isset($_POST['Rechazar'])) {
            if (isset($_POST["seleccionados"])) {
                $seleccionados = $_POST['seleccionados'];
                foreach ($seleccionados as $seleccionado){
                    echo $seleccionado." fue rechazado<br />";
                    //Cambiar por ID obtenido de sesión
                    $IDCapitan=Capitan::Idcapitan($_SESSION["email"]);
                    Equipo::rechazarSolicitudDeJugador($IDCapitan,$seleccionado);
                }
            }
            else{
                echo "No hay jugadores seleccionados<br>";
            }
        }
    }
}
function showTable_jugadores(){
    $IDCapitan=Equipo::Idcapitan($_SESSION["email"]);
    $resultado =Jugador::getSolicitudesDeJugador($IDCapitan);
        while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) {
            echo '<div class="checkbox checkbox-primary">';
            echo '<input id="checkbox0c" type="checkbox" name="seleccionados[]" value="'.$row["Correo"].'"</input>';
            echo '<label for="checkbox0">';
            echo $row["Nombre"].' '.$row["Apellidos"];
            echo '</label>';
            echo '</div>';
        }
}
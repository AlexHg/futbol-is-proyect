<?php
Model::load("Capitan");
Model::load("Equipo");

function adiosEquipo(){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["ne"])) {
            $seleccionado = $_POST['ne'];
            $Capitan=Capitan::getCapitan("$seleccionado");
            $Cap = $Capitan->fetch_array(MYSQLI_ASSOC);
            $nombre= $Cap["Nombre"];
            $apellidos= $Cap["Apellidos"];
            if(Equipo::eliminarEquipo("$seleccionado","$nombre","$apellidos")){
                echo $seleccionado." eliminado <br>";
            }
        }
        else{
            echo "No hay jugadores seleccionados<br>";
        }
    }
}

function listaEquipos(){
    $equipos=Equipo::getEquipos();
    while ($row = $equipos->fetch_array(MYSQLI_ASSOC)) {
        echo '<option value="'.$row["nombreequipo"].'">'.$row["nombreequipo"].'</option>';
    }
}

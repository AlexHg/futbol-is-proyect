<?php
Model::load("Torneo");

function adiosTorneo(){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["ni"])) {
            $seleccionado = $_POST['ni'];
            if(Torneo::eliminarTorneo("$seleccionado")){
                echo $seleccionado." eliminado <br>";
            }
        }
        else{
            echo "No hay jugadores seleccionados<br>";
        }
    }
}


function listaTorneos(){
    $torneos=Torneo::getTorneos();
    while ($row = $torneos->fetch_array(MYSQLI_ASSOC)) {
        echo '<option value="'.$row["nombre"].'">'.$row["nombre"].'</option>';
    }
}

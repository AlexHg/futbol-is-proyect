<?php
Model::load("Torneo");

function adiosTorneo(){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["ni"])) {
            $seleccionado = $_POST['ni'];
            list($IDTorneo,$nombre)=explode(".",$seleccionado);

            if(Torneo::eliminarTorneo("$IDTorneo")){
                echo $nombre." eliminado <br>";
            }
        }
        else{
            echo "No hay Torneo seleccionado<br>";
        }
    }
}


function listaTorneos(){
    $torneos=Torneo::getTorneos();
    while ($row = $torneos->fetch_array(MYSQLI_ASSOC)) {
        echo '<option value="'.$row["IDTorneo"].".".$row["nombre"].'">'.$row["nombre"].'</option>';
    }
}

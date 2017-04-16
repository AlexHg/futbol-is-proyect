<?php
Model::load("Torneo");

function adiosTorneo(){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["ni"])) {
            $seleccionado = $_POST['ni'];
            list($IDTorneo,$nombre)=explode(".",$seleccionado);
            echo $IDTorneo;
            if(Torneo::eliminarTorneo("$IDTorneo")){
                Notify::confirm('Torneo eliminado correctamente $IDTorneo',
                    "El torneo ".$nombre." fue eliminado correctamente. ¿Desea eliminar otro Toreno?",
                    "window.location='eliminarTorneo'");
            }
        }
        else{
            Notify::alert(
                'No seleccionaste ningun torneo',
                'Asegurate de haber seleccionado un toreo antes de proceder',
                'Reintentar!');
        }
    }
}


function listaTorneos(){
    $torneos=Torneo::getTorneos();
    while ($row = $torneos->fetch_array(MYSQLI_ASSOC)) {
        echo '<option value="'.$row["IDTorneo"].".".$row["nombre"].'">'.$row["nombre"].'</option>';
    }
}

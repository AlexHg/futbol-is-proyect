<?php
Model::load("Torneo");

function adiosTorneo(){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["ni"])) {
            $seleccionado = $_POST['ni'];
            list($IDTorneo,$nombre)=explode(".",$seleccionado);
            if(Torneo::eliminarTorneo("$IDTorneo")){
               Notify::alert_if('Torneo Eliminado',"El torneo".' '.$nombre." fue eliminado correctamente.",
                                'Aceptar',"window.location='eliminarTorneo"); 
            }
        }
        else{
            Notify::alert(
                'No se seleccionó ningún torneo',
                'Se debe seleccionar un torneo antes de eliminarlo',
                'Reintentar');
        }
    }
}
function listaTorneos(){ 
    $torneos=Torneo::getTorneos();
    while ($row = $torneos->fetch_array(MYSQLI_ASSOC)) {
        echo '<option value="'.$row["IDTorneo"].".".$row["nombre"].'">'.$row["nombre"].'</option>';
    }
}

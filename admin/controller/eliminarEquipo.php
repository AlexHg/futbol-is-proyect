<?php
Model::load("Capitan");
Model::load("Equipo");

function adiosEquipo(){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["equipo"])) {
            $seleccionado = $_POST['equipo'];
            list($IDequipo,$nombre)=explode(".",$seleccionado);
            if(Equipo::eliminarEquipo("$IDequipo")){
                Notify::alert_if('Operación realizada exitosamente',"El Equipo".' '.$nombre." fue eliminado correctamente.",
                                'Aceptar',"window.location='eliminarEquipo"); 
            }
        }
        else{
            ?>
            <div style="background-color:#F5A9A9; height:30px; padding-top:10px; padding-left: 30px;"><b>No hay equipos seleccionados, por favor seleccione uno</b></div>
            <?php
        }
    }
}

function listaEquipos(){
    $equipo=Equipo::getEquipos();
    while ($row = $equipo->fetch_array(MYSQLI_ASSOC)) {
       echo '<option value="'.$row["idequipo"].".".$row["NombreEquipo"].'">'.$row["NombreEquipo"].'</option>';
    }
}

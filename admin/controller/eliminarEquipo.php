<?php
Model::load("Capitan");
Model::load("Equipo");

function adiosEquipo(){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["equipo"])) {
            $seleccionado = $_POST['equipo'];
            list($IDequipo,$nombre)=explode(".",$seleccionado);
            if(Equipo::eliminarEquipo("$IDequipo")){
                Notify::confirm('Equipo eliminado correctamente',
                    "El Equipo".' '.$nombre." fue eliminado correctamente. ¿Desea eliminar otro Equipo?",
                    "window.location='eliminarEquipo");
            }
        }
        else{
            Notify::alert(
                'No seleccionaste ningun Equipo',
                'Asegurate de haber seleccionado un Equipo antes de proceder',
                'Reintentar!');
        }
    }
}

function listaEquipos(){
    $equipo=Equipo::getEquipos();
    while ($row = $equipo->fetch_array(MYSQLI_ASSOC)) {
       echo '<option value="'.$row["idequipo"].".".$row["NombreEquipo"].'">'.$row["NombreEquipo"].'</option>';
    }
}

<?php
Model::load("Equipo");
function seleccionEliminados(){
    $estado="";
    //$seleccionados=[];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["seleccionados"])) {
            $jugador = $_POST['seleccionados'];
            foreach ($jugador as $seleccionado){
                echo $seleccionado." fue eliminado<br />";
                //Cambiar por ID obtenido de sesión
                Equipo::eliminarJugadorEquipo($seleccionado,3);
            }
        }
        else{
            echo "No hay jugadores seleccionados";
        }
    }
} 
function imprimeTabla(){
    $resultado =Equipo::getJugadoresEquipo(3);
    while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) {
        echo '<tr>';
        echo '<th scope="row">';
        echo '<input id="checkbox0c" type="checkbox" name="seleccionados[]" value="'.$row["Correo"].'"</input>';
        echo '<div class="checkbox checkbox-dark">';
        echo '</div>';
        echo '</th>';
        echo '<td>'.$row["Nombre"].'</td>';
        echo '<td>'.$row["Apellidos"].'</td>';
        echo '<td>'.$row["Correo"].'</td>';
        echo '</tr>';
    }
}

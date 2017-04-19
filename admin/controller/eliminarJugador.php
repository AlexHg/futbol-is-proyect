<?php
Model::load("Equipo");
Model::load("Jugador");
function seleccionEliminados(){
    $estado="";
    //$seleccionados=[];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["seleccionados"])) {
            $jugador = $_POST['seleccionados'];
            print_r($jugador);
            foreach ($jugador as $seleccionado){
                echo $seleccionado." fue eliminado<br />";
                //Cambiar por ID obtenido de sesión
                echo "J".Jugador::getIdJugadorByCorreo($seleccionado);
                echo "e".Jugador::getIdJugadorByCorreo($_SESSION['email']);
                Equipo::eliminarJugadorEquipo(Jugador::getIdJugadorByCorreo($seleccionado),Jugador::getIdJugadorByCorreo($_SESSION['email']));
            }
            //Flight::redirect('/eliminarJugador?n=done');
        }
        else{
            echo "No hay jugadores seleccionados";
             Notify::alert(
                'Jugador no seleccionado',
                'No hay jugadores seleccionados, por favor seleccione al menos uno',
                'Reintentar');
        }
    }
} 
function imprimeTabla(){
    $resultado =Equipo::getJugadoresEquipo(Jugador::getIdJugadorByCorreo($_SESSION['email']));
    #print_r($resultado);
    
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

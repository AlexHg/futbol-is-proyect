<?php
Model::load("Jugador");
function seleccion(){
    $estado="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["seleccionados"])) {
            $jugador = $_POST['seleccionados'];
            foreach ($jugador as $seleccionado){
                echo "Se envio la invitacion a ".$seleccionado."<br />";
                //Cambiar por Correo obtenido de sesión
                $mensaje=Jugador::enviarInvitacion($seleccionado,$sesion);
                echo $mensaje;
            }
        }
        else{
            echo "No se selecciono un Jugador";
        }
    }
}

function imprimirTabla(){
    $res = Jugador::obtenerTodos();
    while($resultados = $res->fetch_array(MYSQLI_ASSOC)){
        echo '<tr>
            <th>    
                <div class="checkbox checkbox-primary">
                <input id="checkbox0c" type="checkbox" name="seleccionados[]" value="'.$resultados["Correo"].'">
                <label for="checkbo0c">
                </label>
                </div>
                </th>
                <td>'.$resultados["Nombre"].'</td>
                <td>'.$resultados["Apellidos"].'</td>
                <td>'.$resultados["Correo"].'</td>
            </tr>';
    }
}
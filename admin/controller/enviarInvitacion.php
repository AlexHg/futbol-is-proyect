<?php
Model::load("Jugador");
Model::load("Capitan");
function seleccion(){
    $estado="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["seleccionados"])) {
            $jugador = $_POST['seleccionados'];
            foreach ($jugador as $seleccionado){
                Capitan::enviarInvitacion($seleccionado,$_SESSION["email"]);
            }
            Flight::redirect('enviarInvitacion?n=exito');
        }
        else{
            Flight::redirect('enviarInvitacion?n=err');
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

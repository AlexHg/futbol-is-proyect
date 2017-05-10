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
            ?>
                <div style="background-color:#81F781; height:30px; padding-top:10px; padding-left: 30px;"><b>La invitación fue enviada con éxito</b></div>
            <?php
        }
        else{
            ?>
            <div style="background-color:#F5A9A9; height:30px; padding-top:10px; padding-left: 30px;"><b>No hay jugadores seleccionados, por favor seleccione uno</b></div>
            <?php
        }
    }
}

function imprimirTabla(){
    $res = Jugador::obtenerTodos();
    $i = 0;
    while($resultados = $res->fetch_array(MYSQLI_ASSOC)){ $i++;
        echo '<tr>
                <th>    
                    <div class="checkbox checkbox-primary">
                        <input id="checkbox'.$i.'" type="checkbox" name="seleccionados[]" value="'.$resultados["Correo"].'">
                        <label for="checkbox'.$i.'"></label>
                    </div>
                </th>
                <td>'.$resultados["Nombre"].'</td>
                <td>'.$resultados["Apellidos"].'</td>
                <td>'.$resultados["Correo"].'</td>
            </tr>';
    }
}

<?php
Model::load("Capitan");
Model::load("Equipo");
Model::load("Torneo");
$index = 0;

function seleccion(){
    $idEquipo = Equipo::getIdEquipoByCorreo($_SESSION['email']);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['seleccionados'])) {
            $op = Capitan::enviarPeticionTorneo($_POST['seleccionados'][0],$idEquipo);
            switch ($op) {
                case 0:
                  ?>
                  <div style="background-color:#81F781; height:30px; padding-top:10px; padding-left: 30px;"><b>La petición ha sido enviada exitosamente </b></div>
                  <?php   
                 break;
                case -1: 
                ?>
                <div style="background-color:#F5DA81; height:30px; padding-top:10px; padding-left: 30px;"><b>Tu equipo ya está inscrito al torneo seleccionado</b></div>
                <?php 
                break;
                case -2: 
                ?> 
                 <div style="background-color:#A9D0F5; height:30px; padding-top:10px; padding-left: 30px;"><b>Ya habías enviado una petición para este torneo antes, por favor espera a que el coordinador del Club de Fútbol la apruebe</b></div> 
                 <?php
                 break;
                default: echo $op;
            }
        }
        else{
            ?>
            <div style="background-color:#F5A9A9; height:30px; padding-top:10px; padding-left: 30px;"><b>No hay torneos seleccionados, por favor seleccione uno</b></div>
            <?php
        }
    }
}

function mostrarTipoTorneo($tipo){
    global $index; $index++;
    $array = Torneo::getInfoByType($tipo);
    while($row = $array->fetch_array(MYSQLI_ASSOC)){
        echo '<td>
        <div class="checkbox">
            <input id="checkbox'.$index.'" type="checkbox" name="seleccionados[]" value="'.$row['idtorneo'].'">
            <label for="checkbox'.$index.'">'.$row['nombre'].'</label>
        </div>
        </td>';
        echo '<td>'.$row['fecha_inicio'].'</td>';
        echo '<td>'.Torneo::getDatesByID($row['idtorneo'],$tipo).'</td>';
        echo '<td>'.(($tipo == 0)?'Rapido':'Soccer').'</td>';
        echo '</tr>';
    }
}

function mostrarTorneos(){
    mostrarTipoTorneo(0);
    mostrarTipoTorneo(1);
}

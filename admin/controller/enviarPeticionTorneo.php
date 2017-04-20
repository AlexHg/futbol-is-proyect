<?php
Model::load("Capitan");
Model::load("Torneo");
$index = 0;

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

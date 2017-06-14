<?php
Model::load("Torneo");
Model::load("Equipo");

function tabla_juegos_sin_resultado(){
    $resultado = Torneo::getPartidosSinJugar();
    while($partido = $resultado->fetch_array(MYSQLI_ASSOC)){
        $equipo1 = Equipo::getEquipoById($partido["equipo1"])["NombreEquipo"];
        $equipo2 = Equipo::getEquipoById($partido["equipo2"])["NombreEquipo"]; 
        ?>
            <tr>
                <th scope="row"><?php echo $equipo1." VS ".$equipo2 ?></th>
                <td><?php echo $partido["fase"] ?></td>
                <td><?php echo $partido["torneo"] ?></td>
                <td><?php echo $partido["horario"] ?></td>
                <td> 
                    <button class="modal btn btn-primary"  data-modal="modal-<?php echo $equipo1." VS ".$equipo2.$partido["IDTorneo"].$partido["IDFase"].$partido["juego"] ?>">Registrar resultados</button>
                    <form action="action/registrarResultados.submit" method="post">
                        <input type="hidden" name="idequipo1" value="<?php echo $partido["equipo1"] ?>">
                        <input type="hidden" name="idequipo2" value="<?php echo $partido["equipo2"] ?>">
                        <input type="hidden" name="idjuego" value="<?php echo $partido["juego"] ?>">
                        <input type="hidden" name="idfase" value="<?php echo $partido["IDFase"] ?>">
                        <input type="hidden" name="idtorneo" value="<?php echo $partido["IDTorneo"] ?>"> 
                        
                        <div class="modal" id="modal-<?php echo $equipo1." VS ".$equipo2.$partido["IDTorneo"].$partido["IDFase"].$partido["juego"] ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-header">
                                    <h2>Registrar resultado: <br><small><?php echo $equipo1." VS ".$equipo2 ?></small></h2>
                                    <a href="#" class="modal-close" aria-hidden="true">×</a>
                                </div>
                                <div class="modal-body" style="text-align:center;">
                                    <label for="equipo1res">Goles de <?php echo $equipo1 ?>:</label><br><input type="number" min="0" max="50" name="equipo1res" id="equipo1res" value="0"><br><br>
                                    <label for="equipo2res">Goles de <?php echo $equipo2 ?>:</label><br><input type="number" min="0" max="50" name="equipo2res" name="equipo2res" value="0">
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" class="btn btn-primary" value="Registrar resultados">
                                </div>
                            </div>
                        </div>
                    </form>
                </td>
            </tr>
        <?php
    }
}
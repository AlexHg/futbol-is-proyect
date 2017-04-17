<?php 
    Model::load("Torneo");
    Model::load("Equipo");

    if(!isset($_POST['torneo'])){
        Flight::redirect('/eligeTorneo?n=err');
    }else{
         $torneo = 1;
    }

    function idTorneo(){
        return $_POST['torneo'];
    }

    function nombreTorneo(){
        $torneo = $_POST["torneo"];
        return Torneo::getNombreTorneo($torneo)->fetch_array(MYSQLI_ASSOC)['Nombre'];
    }

    function selectEquipos(){
        $equipos = Torneo::getEquiposTorneo($_POST["torneo"]);
        while ($row = $equipos->fetch_array(MYSQLI_ASSOC)) {
            ?>
                <option value="<?php echo $row["id"]; ?>"><?php echo $row["nombre"]; ?></option>
            <?php
        }

    }
    
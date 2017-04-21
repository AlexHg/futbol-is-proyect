<?php 
    Model::load("Torneo");
    Model::load("Equipo");

    if(!isset($_POST['torneo'])){
        Flight::redirect('/eligeTorneo_Partido?n=err');
    }else{
         //Checa si este torneo tiene horarios disponibles, si no, redirect y mensaje.
        if(Torneo::horariosFull($_POST['torneo'])) Flight::redirect('/eligeTorneo_Partido?n=full');
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
    
    function selectTiempo(){
        $dias = Torneo::getDiaHoraTorneo($_POST["torneo"]);

        while ($row = $dias->fetch_array(MYSQLI_ASSOC)) {
            $date = strtotime($row["diayhora"]);
            ?>
                <option value="<?php echo $row["idhorario"]; ?>"><?php echo(date('F j, g:i a', $date)); ?></option>
            <?php
        }
    }

    function selectFase(){
        $fases = Torneo::getFases();
        while ($row = $fases->fetch_array(MYSQLI_ASSOC)) {
            ?>
                <option value="<?php echo $row["IDFase"]; ?>"><?php echo $row["Descripcion"]; ?></option>
            <?php
        }
    }
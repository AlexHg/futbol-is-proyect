<?php
Model::load("Capitan");
Model::load("Equipo");

$idEquipo = Equipo::getIdEquipoByCorreo($_SESSION['email']);
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


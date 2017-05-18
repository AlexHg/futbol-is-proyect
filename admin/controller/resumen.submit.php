<?php
Model::load('Equipo');

$partido = Equipo::obtenerJugadoresDePartido($_POST['Partido']);
$equipo = 'nada';
$index = 0;
while ($jugadores = $partido->fetch_array(MYSQLI_ASSOC)) {
	if(strcmp($equipo, $jugadores['nombreEquipo']) == 0){

	echo "
	<div style='display: inline-block'><img src='/admin/source/img/box.jpg' width='20'></div>
	<div style='display: inline-block'><p>".$jugadores['nombre']." ".$jugadores["apellidos"]."</p></div><br>";		
	}else{
		$equipo = $jugadores['nombreEquipo'];
		echo "<h2>".$equipo."</h2><hr>";
	}
}
	
echo "<script>window.print();</script>";
?>
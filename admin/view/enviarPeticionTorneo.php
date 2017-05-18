<div id="content-title">
    <h2>Envía una petición para inscribirte a un Torneo</h2>
</div>
<h3>Torneos Disponibles: </h3>
<form action="inscripcionTorneo" method="post">
    <table class="table table-striped " style="overflow-x: hidden; overflow-y: scroll;">
        <thead>
            <tr>
                <th>Nombre de Torneo</th>
                <th>Fecha de Inicio</th>
                <th>Días de Juego</th>
                <th>Tipo de Torneo</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            seleccion();
            mostrarTorneos();
            ?>
        </tbody>
    </table> 

    <br><br>
    <center>
         <center><button type="submit" class="btn btn-success" data-type="alerta">Enviar Petición</button></center>
    </center>
</form>
</div>

<?php
Notify::alert_if(
    'Petición Enviada',
    'El coordinador del Club de Fútbol deberá aprobar la petición antes de poder elegir tu horario de partido',
    'Aceptar',
    isset($_GET['n']) && strcasecmp($_GET['n'],'exito') == 0); 
Notify::alert_if(
    'Peticion en Espera',
    'Ya habías enviado una petición para este torneo antes, por favor espera a que el coordinador del Club de Fútbol la apruebe',
    'Regresar',
    isset($_GET['n']) && strcasecmp($_GET['n'],'espera') == 0); 
Notify::alert_if(
    'Torneo ya Inscrito',
    'Tu equipo ya está inscrito al torneo seleccionado',
    'Regresar',
    isset($_GET['n']) && strcasecmp($_GET['n'],'aprovado') == 0); 
?>

<div id="content-title">
    <h2>Envía una Invitación para agregar jugadores</h2>
</div>


<h3>Jugadores Disponibles: </h3>
<form action="enviarInvitacion" method="post">
    <table class="table table-striped " style="overflow-x: hidden; overflow-y: scroll;">
        <thead>
            <tr>
                <th><span><i class="ti-layout-width-full"></i></span></th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
                seleccion();
                imprimirTabla();
            ?>
        
        </tbody>
    </table> 

    <br><br>
    <center>
         <center><button type="submit" class="btn btn-success" data-type="alerta">Enviar Invitación</button></center>
    </center>
</form>
<?php
Notify::alert_if(
    'Invitación enviada',
    'La invitación fue enviada con éxito',
    'Aceptar',
    isset($_GET['n']) && strcasecmp($_GET['n'],'exito') == 0);
Notify::alert_if(
    'Jugador no seleccionado',
    'No hay jugadores seleccionados, por favor seleccione al menos uno',
    'Reintentar',
    isset($_GET['n']) && strcasecmp($_GET['n'],'err') == 0); 

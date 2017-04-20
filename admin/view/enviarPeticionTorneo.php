<div id="content-title">
    <h2>Envia una petición para inscribirte a un Torneo</h2>
</div>
<h3>Torneos Disponibles: </h3>
<form action="action/enviarPeticionTorneo.submit" method="post">
    <table class="table table-striped " style="overflow-x: hidden; overflow-y: scroll;">
        <thead>
            <tr>
                <th><span><i class="ti-layout-width-full"></i></span> Nombre de Torneo</th>
                <th>Fecha de Inicio</th>
                <th>Días de Juego</th>
                <th>Tipo de Torneo</th>
            </tr>
        </thead>
        <tbody>
            <?php mostrarTorneos(); ?>
        </tbody>
    </table> 

    <br><br>
    <center>
         <center><button type="submit" class="btn btn-success" data-type="alerta">Enviar Petición</button></center>
    </center>
</form>
</div>
<!--
<script> <div class="overlay-container">
                        <div class="window-container alerta">
                            <h3>Confirmación de Cancelación</h3> 
                            Estas seguro de deshacer la operación en curso<br/>
                            <br/>
                            <center>
							<button class="btn btn-success close">Aceptar</button>
                            <button class="btn btn-danger close" >Cancelar</button>
                            </center>
                        </div>
          </div></script>
    <script> <div class="overlay-container">
                        <div class="window-container alerta">
                            <h3>Confirmación de envio</h3> 
                            ¿Estas seguro de realizar esta operación, cambiara tu perfil de usuario?<br/>
                            <br/>
                            <center>
							<button class="btn btn-success close">Aceptar</button>
                            <button class="btn btn-danger close" >Cancelar</button>
                            </center>
                        </div>
          </div></script>
    <script> <div class="overlay-container">
                        <div class="window-container alerta">
                            <h3>Operación realizada exitosamente</h3> 
                            La operación se realizó exitosamente<br/>
                            <br/>
                            <center>
							<button class="btn btn-success close">Aceptar</button>
                            </center>
                        </div>
          </div></script>
-->
<?php
Notify::alert_if(
    'Peticion enviada correctamente',
    'El coordinador debera aprovar la peticion antes de poder elejir tu horario',
    'Aceptar',
    isset($_GET['n']) && strcasecmp($_GET['n'],'exito') == 0); 
Notify::alert_if(
    'Error! Peticion se encuentra en espera',
    'Ya habias enviado esta solicitud antes, porfavor espera a que el coordinador la aprueve',
    'Regresar',
    isset($_GET['n']) && strcasecmp($_GET['n'],'espera') == 0); 
Notify::alert_if(
    'Error! Torneo ya inscrito',
    'Tu equipo ya esta inscrito al torneo seleccionado',
    'Regresar',
    isset($_GET['n']) && strcasecmp($_GET['n'],'aprovado') == 0); 

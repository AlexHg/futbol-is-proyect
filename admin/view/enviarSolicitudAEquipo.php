<div id="content-title">
    <h2>Envia una solicitud para unirte a un equipo</h2>
<h3>Selecciona la categoría a buscar: </h3>
<center>
    <button type="button" class="btn btn-dark">Torneo Soccer</button>
    <button type="button" class="btn btn-primary">Torneo rápido</button>
</center>
<br><br>
</div>
<h3>Selecciona la categoría a buscar: </h3>
<center>
    <button type="button" class="btn btn-dark">Torneo Soccer</button>
    <button type="button" class="btn btn-primary">Torneo rápido</button>
</center>
<br><br>
</div>
<div id="content-body">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <table class="table table-striped ">
            <thead>
            <tr>
                <th>Elegir</th>
                <th>Equipo</th>
                <th>Capitán</th>
                <th>imagen</th>
            </tr>
            </thead>
            <tbody>

            <?php
            enviarSolicitudAEquipo($_SESSION['email']);
            mostrarEquipos();//se uso futbol rapido por default cambiara con el boton de arriba
            ?>
            </tbody>
        </table>
        <div class="row center-xs center-sm center-md center-lg">
            <div class="ol-xs-3 col-md-3 col-lg-3">
                <div class="box">
                    <button id="cancelarInvitacion" type="submit" class="btn btn-success" data-type="alerta">Aceptar</button>
                </div>
            </div>
            <div class="col-xs-3 col-md-3 col-lg-3">
                <div class="box">
                    <button id="aceptarInvitacion" type="button" class="btn btn-danger" data-type="alerta2">Rechazar</button>
                </div>
            </div>
        </div>
</div>
<br/>
<hr>
<br/>
<!--Mensaje acptar solicitud para 1-->
<div class="overlay-container">
    <div class="window-container alerta">
        <h3>Confirmación de solicitud de Equipo</h3>
            ¿Deseas enviar estas solicitudes?
        <br/>
        <center>
            <button class="btn btn-success close" class="window-container aceptar" >Aceptar</button>
            <button class="btn btn-danger" >Cancelar</button>
        </center>
    </div>
</div>
<div class="overlay-container">
    <div class="window-container aceptar">
        <h3>Solicitud Aceptada</h3>
        Ahora eres miembro de este equipo <br/>
        <br/>
        <center>
            <button class="btn btn-success close" >Aceptar</button>
        </center>
    </div>
</div>
<!--Mensaje acptar solicitud para 2-->
<div class="overlay-container">
    <div class="window-container alerta">
        <h3>Confirmación de Rechazo de Equipo</h3>
        ¿Estás seguro de que deseas rechazar a este equipo?
        <br/>
        <center>
            <button class="btn btn-success close" class="window-container rechazar" >Aceptar</button>
            <button class="btn btn-danger" >Cancelar</button>
        </center>
    </div>
</div>
<div class="overlay-container">
    <div class="window-container rechazar">
        <h3>Solicitud Rechazada</h3>
        La solicitud ha sido rechazada <br/>
        <br/>
        <center>
            <button class="btn btn-success close" >Aceptar</button>
        </center>
    </div>
</div>


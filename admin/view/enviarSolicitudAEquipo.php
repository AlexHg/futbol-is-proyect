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
                <th>Torneo</th>                 
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



<div id="content-title">
    <h2>Aceptar Invitacion de Equipo</h2>
</div>
<h3>Estas son las invitaciones de los capitanes que te quieren en su equipo: </h3>
<div id="content-body">
    <form id="aceptarInvitacionEquipo" method="post" class="form-control-cont" role="form" action="aceptarInvitacionEquipo">
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
                procesarSolicitud();
                mostrarInvitaciones();
            
            ?>

            </tbody>
        </table>
        <div class="row center-xs center-sm center-md center-lg">
            <div class="ol-xs-3 col-md-3 col-lg-3">
                <div class="box">

<!-- cmbiar por un input -->
                    <button id="btnAceptar" type="submit" class="btn btn-success" data-type="alerta" name="aceptar">Aceptar</button>

                </div>
            </div>
            <div class="col-xs-3 col-md-3 col-lg-3">
                <div class="box">

                    <button id="rechazarInvitacion" type="submit" class="btn btn-danger" data-type="alerta2" name="rechazar">Rechazar</button>


                </div>
            </div>
        </div>


    </form>
</div>


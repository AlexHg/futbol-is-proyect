<div id="content-title">
    <h2>Aceptar Peticion de Jugador</h2>
</div>
<h3>Peticiones de jugadores que quieren unirse a tu equipo: </h3>
<div id="content-body">
    <form id="aceptarPeticionJugador" method="post" class="form-control-cont" role="form" action="aceptarPeticionJugador">
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th>Elegir</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                </tr>
            </thead>
            <tbody>

            <?php
                procesarSolicitud();
                mostrarPeticiones();
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


<div id="content-title">
    <h2>Enviar solicitud a Equipo</h2>
</div>
<div id="content-body">
    <form id="enviarSolicitudAEquipo" method="post" class="form-control-cont" role="form" action="enviarSolicitudAEquipo">
        <table class="table table-striped ">
            <thead>
            <tr>
                <th>Elegir</th>
                <th>Equipo</th>
                <th>Capitán</th>
            </tr>
            </thead>
            <tbody>

            <?php
            enviarSolicitudes();
            mostrarEquipos();

            ?>

            </tbody>
        </table>
        <div class="row center-xs center-sm center-md center-lg">
            <div class="ol-xs-3 col-md-3 col-lg-3">
                <div class="box">

                    <!-- cmbiar por un input -->
                    <button id="btnAceptar" type="submit" class="btn btn-success" data-type="alerta" name="aceptar">Enviar</button>

                </div>
            </div>
        </div>


    </form>
</div>

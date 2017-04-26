<div id="content-title">
    <h2>Crear Partido en torneo '<?php echo nombreTorneo(); ?>'</h2>
</div>

<div id="content-body">
    <div>
        <h3>Selecciona los partidos a enfrentarse</h3>
    </div>
    <div id="content-body">
    <form  method="post" class="form-control" role="form" action="action/crearPartido.submit" style="width: 90%" id="crearPartidoForm">
        <div class="form-group">
            <label class="control-label">Equipo1</label>
            <div class="form-control-cont">
                <select name="equipo1" class="form-control full" form="crearPartidoForm" data-validation="required"  data-validation-error-msg="Campo obligatorio">
                    <?php selectEquipos(); ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label">Equipo2</label>
            <div class="form-control-cont">
                <select name="equipo2" class="form-control full" form="crearPartidoForm" data-validation="required"  data-validation-error-msg="Campo obligatorio">
                    <?php selectEquipos(); ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label">Dia y Hora</label>
            <div class="form-control-cont">
                <select name="horario" class="form-control full" form="crearPartidoForm" data-validation="required"  data-validation-error-msg="Campo obligatorio">
                    <?php selectTiempo(); ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label">Fase</label>
            <div class="form-control-cont">
                <select name="fase" class="form-control full" form="crearPartidoForm" data-validation="required"  data-validation-error-msg="Campo obligatorio">
                    <?php selectFase(); ?>
                </select>
            </div>
        </div>
        <input type="hidden" name="idTorneo" value="<?php echo($_POST['torneo']); ?>" form="crearPartidoForm">
        <center>
            <input type="submit" id="baja" class="btn btn-success" value="Crear Partido"/>
        </center>
        
    </form>
    <br>
    <br>

</div>

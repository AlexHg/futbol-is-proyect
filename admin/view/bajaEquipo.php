<div id="content-title">
    <h2>Baja de Equipos del Torneo '<?php echo nombreTorneo(); ?>'</h2>
</div>

<div id="content-body">
<form class="form-control" role="form" action="action/bajaEquipo.submit" method="post" style="width: 90%">
    <div class="form-group">
        <label class="control-label">Equipo: </label>
        <div class="form-control-cont">
            <input type="hidden" name="torneo" value="<?php echo idTorneo(); ?>">
            <select class="form-control full" name="equipo" id="EquipoSelect" data-validation="required"  data-validation-error-msg="Campo obligatorio">
                <?php selectEquipos(); ?>
            </select>
        </div>
    </div>
    <center>
        <input type="submit" id="baja" class="btn btn-success" value="Dar de Baja"/>
    </center>
</form>
<br>
<?php
    Notify::confirm_activedById('Confirmación de baja de Equipo',
            '¿Está seguro que desea dar de baja a el equipo?',
            "baja", "submitForm()");
    Notify::alert_if(
            'Operación Realizada Exitosamente',
            'La operación se realizó exitosamente',
            'Aceptar',
            isset($_GET['n']) && strcasecmp($_GET['n'],'done') == 0);
?>


  
<!--

    <script> <div class="overlay-container">
                        <div class="window-container alerta">
                            <h3>¿Esta seguro que desea eliminar el equipo?</h3> 
                            Se eliminará toda la información generada para este equipo en el torneo<br/>
                            <br/>
                            <center>
							<button class="btn btn-success close">Aceptar</button>
                            <button class="btn btn-danger close" >Cancelar</button>
                            </center>
                        </div>
          </div></script>
	
-->


<div id="content-title">
    <h2>Crear Nuevo Partido para Torneo</h2>
</div>
<div id="content-body">
<form class="form-control" action="crearPartido" method="post" role="form" style="width: 90%">
    <div class="form-group">
        <label class="control-label">Torneo: </label>
        <div class="form-control-cont">
            <select name="torneo" class="form-control full" id="TorneoSelect" data-validation="required"  data-validation-error-msg="No hay torneos seleccionados, por favor seleccione uno.">
                <?php
                    listaTorneosActuales();
                ?>
            </select>
        </div>
    </div>
    <br>
    <center>
        <input type="submit" class="btn btn-success" value="Visualizar equipos"/>
    </center>
</form>
<br>
<?php
// ACTUALIZAR
Notify::alert_if(
    'Operacion Denegada',
    'Se debe seleccionar al menos un torneo',
    'Reintentar',
    isset($_GET['n']) && strcasecmp($_GET['n'],'err') == 0); 

 Notify::alert_if(
    'Operación realizada exitosamente',
    'La operación se realizó exitosamente',
    'Aceptar',
    isset($_GET['n']) && strcasecmp($_GET['n'],'done') == 0); 

  Notify::alert_if(
    'Torneo Lleno',
    'Ya no existen horarios disponibles para este torneo',
    'Aceptar',
    isset($_GET['n']) && strcasecmp($_GET['n'],'full') == 0); 

    Notify::alert_if(
    'Enfrentamiento con el mismo equipo',
    'Se ha seleccionado el mismo equipo para el enfrentamiento',
    'Reintentar',
    isset($_GET['n']) && strcasecmp($_GET['n'],'sameTeam') == 0); 

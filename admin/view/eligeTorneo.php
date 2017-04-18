
<div id="content-title">
    <h2>Baja de Equipos del Torneo</h2>
</div>
<div id="content-body">
<form class="form-control" action="bajaEquipo" method="post" role="form" style="width: 90%">
    <div class="form-group">
        <label class="control-label">Torneo: </label>
        <div class="form-control-cont">
            <select name="torneo" class="form-control full" id="TorneoSelect">
                <?php
                    listaTorneos();
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
Notify::alert_if(
    'No se dio de baja el equipo',
    'Por favor vuelva a intentarlo más tarde',
    'Reintentar!',
    isset($_GET['n']) && strcasecmp($_GET['n'],'err') == 0); 

 Notify::alert_if(
    'Operación realizada exitosamente',
    'La operación se realizó exitosamente',
    'Aceptar',
    isset($_GET['n']) && strcasecmp($_GET['n'],'done') == 0); 

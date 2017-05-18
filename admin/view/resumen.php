<div id="content-title">
    <!--<h2 style="display:flex;justify-content:space-between;">Resumen <small><small><button class="btn btn-primary" onclick="descargarExcel(Tablas)">Generar Reporte .XLS</button></small></small></h2> 
-->
</div>
<div id="content-body">
    <center><h3>Selecciona la informacion que deseas desplegar:</h3></center>
    <form role="form" method="POST" action="resumen">         
        <div class="form-group" style="display: block;text-align: center;">
            <div class="form-control-cont">
                <select class="form-control half" style="width: 50%" id="reporteSelect" name="reporteSelect">
                    <option>Tabla General de Torneo</option>
                    <option>Enfrentamientos Por Partido</option>
                </select>
            </div>
        </div>
        <div id="extraReporte1" class="form-group" style="display: flex;width: 50%;margin-left: 25%">
            <label class="control-label">Torneo</label>
            <div class="form-control-cont">
                <select class="form-control full" name="nombreTorneo" id="torneoSelect">
                    <?php enlistarTorneos(); ?>
                </select>
            </div>
            <label class="control-label">Fase</label>
            <div class="form-control-cont">
                <select class="form-control full" name="fase" id="faseSelect">
                    <option>Actual</option>
                    <option>Jornada1</option>
                    <option>Jornada2</option>
                    <option>Jornada3</option>
                    <option>Cuartos de Final</option>
                    <option>Semifinal</option>
                    <option>Octavos de Final</option>
                    <option>Final</option>
                    <?php //enlistarFases() ?>
                </select>
            </div>
        </div>
        <div id="extraReporte2" class="form-group" style="display: none;width: 50%;margin-left: 25%">
            <label class="control-label">Torneo</label>
            <div class="form-control-cont">
                <select class="form-control full" name="nombreTorneo2" id="torneoSelect">
                    <?php enlistarTorneos(); ?>
                </select>
            </div>
        </div>
        <div class="form-group half" style="text-align: right;width: 76%">
            <div class="form-control-cont">
                <input type="submit" name="generate" class="btn btn-primary" value="Generar">                  
            </div>
        </div>
    </form>
    <hr/>
<?php
mostrarReporte();
?>
<script type="text/javascript">
    $("#reporteSelect").on('change', function() {
        var sel = $("#reporteSelect").val();
        if (sel=='Tabla General de Torneo') {
            $("#extraReporte1").css("display", "flex");
            $("#extraReporte2").css("display", "none");
        }else{
            $("#extraReporte1").css("display", "none");
            $("#extraReporte2").css("display", "flex");
        }
    });  
</script>

<script>
    var Tablas = "<h1>Reporte del club de futbol</h1><br><br>"+document.querySelector("#content-body").outerHTML;
    function descargarExcel(variable_conTabla){
        var tmpElemento = document.createElement('a');
        var data_type = 'data:application/vnd.ms-excel;';
        var tabla_div = variable_conTabla;
        var tabla_html = tabla_div.replace(/ /g, '%20');
        tmpElemento.href = data_type + ', ' + tabla_html;
        tmpElemento.download = 'Reporte club de futból.xls';
        tmpElemento.click();
    }
</script>
<!--
    <h3>Torneos de f. soccer</h3>
    <table class="table table-striped " > 
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Inicio</th>
                <th>Limite de inscripciones</th>
                <th>Finalización</th>
                <th>Equipos registrados</th>
            </tr>
        </thead>
        <tbody>
            <?php tabla_torneos_soccer() ?>
        </tbody>
    </table> 

    <h3>Torneos de f. rapido</h3>
    <table class="table table-striped " >
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Inicio</th>
                <th>Limite de inscripciones</th>
                <th>Finalización</th>
                <th>Equipos registrados</th>
            </tr>
        </thead>
        <tbody>
            <?php tabla_torneos_rapido() ?>
        </tbody>
    </table> 

    <br><br><br>
    <h2>Tablas de resultados</h2>
    <?php tablas_resultados_Torneos() ?>

    <br><br><br>
    <h2>Tablas de resultados</h2>
    <?php #tablas_posiciones_Torneos(); ?>
</div>



-->

<div id="content-title">
    <h2 style="display:flex;justify-content:space-between;">Resumen <small><small><button class="btn btn-primary" onclick="descargarExcel(Tablas)">Generar Reporte .XLS</button></small></small></h2> 
</div>
<div id="content-body">
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

<div id="content-title">
    <h2>Resumen</h2>
</div>
<div id="content-body">
    <h3>Torneos de f. soccer</h3>
    <table class="table table-striped ">
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
    <table class="table table-striped ">
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



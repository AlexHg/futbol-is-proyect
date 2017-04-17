<div id="content-title">
    <h2>Equipos Inscritos</h2>
</div>
<div id="content-body">
     <div class="form-group">
                            <label class="control-label">Selecciona Equipo</label>
                            <div class="form-control-cont">
                                <select class="form-control full">
                                    <option>Eq1</option>
                                    <option>Eq2</option>
                                  <!--Modificar la seleccion de los equipos para la visualizacion de la informacion en tablas y btns-->
                                </select>
                            </div>
                        </div>
    <div align="right">
        <button onclick="window.location.href='#'" type="button" class="btn btn-info">Ver partidos</button>
    
        <button onclick="window.location.href='#'" type="button" class="btn btn-info">Vista general</button>
    </div>
    <table class="table table-striped " id="example"  cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>#</th>
            <th>Equipo</th>
            <th>Juegos totales</th>
            <th>Juegos ganados</th>
            <th>Juegos empatados</th>
            <th>Juegos perdidos</th>
            <th>Goles a favor</th>
            <th>Goles en contra</th>
            <th>Diferencia</th>
            <th>Puntos</th>
            <th>Torneo</th><!--Implementar, info necesaria-->
        </tr>
        </thead>
        <tbody>
            <?php print_table() ?>
        </tbody>
    </table>
</div>

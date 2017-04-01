<div id="content-title">
    <h2>Equipos Inscritos</h2>
</div>
<div id="content-body">
    <h2>Torneo de fútbol rápido 2017-1</h2>
    <h3>Equipos Inscritos</h3>
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
        </tr>
        </thead>
        <tbody>
            <?php print_table() ?>
        </tbody>
    </table>
</div>
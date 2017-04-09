<div id="content-title">
    <h2>Envia una petición para inscribirte a un Torneo</h2>
</div>
<h3>Selecciona la categoría a buscar: </h3>
                <center>
                <button type="button" class="btn btn-dark">Torneo Soccer</button>
                <button type="button" class="btn btn-primary">Torneo rápido</button>
                </center>

<br><br>

<h3>Torneos Disponibles: </h3>
<form action="enviarPeticion" method="post">
    <table class="table table-striped " style="overflow-x: hidden; overflow-y: scroll;">
        <thead>
            <tr>
                <th><span><i class="ti-layout-width-full"></i></span></th>
                <th>Seleccionar</th>
                <th>Nombre de Torneo</th>
                <th>Fecha de Inicio</th>
                <th>Días de Juego</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
               
            ?>
        
        </tbody>
    </table> 

    <br><br>
    <center>
         <center><button type="submit" class="btn btn-success" data-type="alerta">Enviar Petición</button></center>
    </center>
</form>
</div>

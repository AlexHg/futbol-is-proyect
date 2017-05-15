<div id="content-title">
    <h2>Envía una Invitación para agregar jugadores</h2>
</div>


<h3>Jugadores Disponibles: </h3>
<form action="enviarInvitacion" method="post">
    <table class="table table-striped " style="overflow-x: hidden; overflow-y: scroll;">
        <thead>
            <tr>
                <th>Elegir</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
                seleccion();
                imprimirTabla();
            ?>
        
        </tbody>
    </table> 

    <br><br>
    <center>
         <center><button type="submit" class="btn btn-success" data-type="alerta">Enviar Invitación</button></center>
    </center>
</form>

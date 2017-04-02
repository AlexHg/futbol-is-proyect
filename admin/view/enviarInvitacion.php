<div id="content-title">
    <h2>Enviar Invitaciones para agregar jugadores.</h2>
</div>

<button type="button" class="btn btn-primary">Torneo Soccer.</button>
<button type="button" class="btn btn-primary">Torneo rápido.</button>

<br><br>

<h3>Jugadores Disponibles.</h3>
<form action="enviarInvitacion" method="post">
    <table class="table table-striped " style="overflow-x: hidden; overflow-y: scroll;">
        <thead>
            <tr>
                <th><span><i class="ti-layout-width-full"></i></span></th>
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
        <input type="submit" value="Enviar Invitacion" class="button" data-type="zoomin" />
    </center>
</form>
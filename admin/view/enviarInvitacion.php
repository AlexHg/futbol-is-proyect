<div id="content-title">
    <h2>Envia una Invitación para agregar jugadores</h2>
</div>
<h3>Selecciona la categoría a buscar: </h3>
                <center>
                <button type="button" class="btn btn-dark">Torneo Soccer</button>
                <button type="button" class="btn btn-primary">Torneo rápido</button>
                </center>

<br><br>

<h3>Jugadores Disponibles: </h3>
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
         <center><button type="submit" class="btn btn-success" data-type="alerta">Enviar Invitación</button></center>
    </center>
</form>
<!--Mensaje de confirmacion de envío-->
<div class="overlay-container">
                        <div class="window-container alerta">
                            <h3>Envío Exitoso</h3> 
                            Se ha enviado la invitación<br/>
                            <br/>
                            <center>
                            <button class="btn btn-success close">Aceptar</button>
                            </center>
                        </div>
</div>

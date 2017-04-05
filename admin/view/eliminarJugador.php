 <div id="content-title">
    <h2>Eliminar Jugador del Equipo</h2>
</div>
<div id="content-body">
    <h3>Jugadores del Equipo</h3>
    <h5>Selecciona al jugador que deseas eliminar</h5>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <table class="table table-striped ">
            <thead>
            <tr>
                <th>Elegir</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Avatar</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    seleccionEliminados();
                    //Cambiar por ID obtenido de la sesión
                    imprimeTabla();
                ?>
            </tbody>
        </table>
        <br>
        <center>
            <button id="aceptarInvitacion" type="button" class="btn btn-danger" data-type="alerta">Eliminar</button>
            <input type="submit" value="Eliminar" class="button" data-type="zoomin" data-type="alerta"/>
        </center>
    </form>
</div>
<!--Mensaje de confirmacion-->
<div class="overlay-container">
                        <div class="window-container alerta">
                            <h3>Confirmación de Eliminación de Jugador</h3> 
                            ¿Esta seguro que desea eliminar al jugador?<br/>
                            <br/>
                            <center>
                            <button class="btn btn-success close" data-type="aceptar">Aceptar</button>
                            <button class="btn btn-danger" >Cancelar</button>
                            </center>
                        </div>
</div>
 <!--Mensaje de operacion exitosa-->
<div class="overlay-container">
                        <div class="window-container aceptar">
                            <h3>Operación realizada exitosamente</h3> 
                            La operación se realizó exitosamente<br/>
                            <br/>
                            <center>
                            <button class="btn btn-success close" >Aceptar</button>
                            </center>
                        </div>
</div>

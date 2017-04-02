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
            <button id="aceptarInvitacion" type="button" class="btn btn-danger">Eliminar</button>
            <input type="submit" value="Eliminar" class="button" data-type="zoomin" />
        </center>
    </form>
</div>
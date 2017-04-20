 <div id="content-title">
    <h2>Gestionar Equipo</h2>
</div>
<div id="content-body">
    <h3>Jugadores del Equipo</h3>
    <h5>Selecciona a un jugador si deseas eliminarlo</h5>
    <form method="post" id="eliminarJugadorForm">
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
            <input id="EliminarJugadorBtn" type="button" class="btn btn-danger" value="Eliminar" class="button" data-type="zoomin" data-type="alerta"/>
        </center>
    </form>
</div>
<script>
    function eliminarJugadorFun(){
        document.querySelector("#eliminarJugadorForm").submit();
    }
</script>
<?php 
        Notify::confirm_activedById(
            'Eliminación de Jugador',
            '¿Estás seguro que deseas eliminar al jugador?',
            'EliminarJugadorBtn',
            'eliminarJugadorFun()'); 

        Notify::alert_if(
            'Operación realizada exitosamente',
            'La operación se realizó exitosamente',
            'Aceptar',
            isset($_GET['n']) && strcasecmp($_GET['n'],'done') == 0); 

?>

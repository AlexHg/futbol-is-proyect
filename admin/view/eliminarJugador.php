 <div id="content-title">
    <h2>Eliminar Jugador del Equipo</h2>
</div>
<div id="content-body">
    <h3>Jugadores del Equipo</h3>
    <h5>Selecciona al jugador que deseas eliminar</h5>
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
            'Confirmación de Eliminación de Jugador',
            '¿Esta seguro que desea eliminar al jugador?',
            'EliminarJugadorBtn',
            'eliminarJugadorFun()'); 

        Notify::alert(
            'Operación realizada exitosamente',
            'La operación se realizó exitosamente',
            'Aceptar',
            isset($_GET['n']) && strcasecmp($_GET['n'],'done') == 0); 

?>

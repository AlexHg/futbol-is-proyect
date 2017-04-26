 <div id="content-title">
    <h2>Gestionar Equipo</h2>
</div>
<div id="content-body">
    <h3>Jugadores del Equipo</h3>
    <h5>Selecciona a un jugador si deseas eliminarlo</h5>
    <form method="post" id="eliminarJugadorForm">
    <span id="noselect" style="display:none;"><div style="background-color:#F5A9A9; height:30px; padding-top:10px; padding-left: 30px;"><b>No hay jugadores seleccionados, por favor selecciona uno</b></div></span>
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
    <button class="modal" style="display:none;" data-modal="modal-aceptdelete">Modal!</button>
    <div class="modal" id="modal-aceptdelete" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-header">
                <h2>Eliminación de Jugador</h2>
                <a href="#" class="modal-close" aria-hidden="true">×</a>
            </div>
            <div class="modal-body">
            ¿Estás seguro que deseas eliminar al jugador?</p>
            </div>
            <div class="modal-footer">
                <a href="#"><button  class="btn btn-success" onclick="eliminarJugadorFun()">Aceptar</button></a>
                <a href="#"><button  class="btn btn-danger">Cancelar</button></a>
            </div>
        </div>
    </div>

    <script> 
        document.querySelector("#EliminarJugadorBtn").addEventListener("click", function() {
            var noselect = true;
            for(var i =0; i < document.querySelectorAll(".checkbox0c").length; i++){
                if(document.querySelectorAll(".checkbox0c")[i].checked){
                    noselect = false;
                }
            }
            if(!noselect) document.querySelector("[data-modal=modal-aceptdelete]").click();
            else document.querySelector("#noselect").style="";
        });
    </script>
</div>
<script>
    function eliminarJugadorFun(){
        document.querySelector("#eliminarJugadorForm").submit();
    }
</script>
<?php 

        Notify::alert_if(
            'Operación realizada exitosamente',
            'La operación se realizó exitosamente',
            'Aceptar',
            isset($_GET['n']) && strcasecmp($_GET['n'],'done') == 0); 

?>

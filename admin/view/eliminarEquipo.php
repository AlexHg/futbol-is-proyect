<div id="content-title">
    <h2>Eliminar Equipo Definitivamente</h2>
</div>
<h3>Para eliminar un equipo definitivamente del Sistema, seleccione lo siguiente:</h3>
<div id="content-body">
    <div class="row center-xs">
        <div class="box">
            <?php
                adiosEquipo();
            ?>
            <form method="post" class="form-control" role="form" action="eliminarEquipo">
                <div class="form-group">
                    <label class="control-label">Nombre de equipo:</label>
                    <div class="form-control-cont">
                        <select onChange="change(this.value)" name="ne" class="form-control full" id="EquipoSelect">
                            <?php
                                listaEquipos();
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Capitan:</label>
                    <div class="form-control-cont">
                        <input type="text" class="form-control full" readonly="" value="" id="">
                    </div>
                </div>
                <br>
                <br>
                <input type="submit" class="btn btn-success" name="Aceptar" value="Aceptar" data-type="alerta"/>
            </form>
        </div>                        
    </div> 
</div>
 <!--Mensaje de confirmacion-->
<div class="overlay-container">
                        <div class="window-container alerta">
                            <h3>Confirmación de Eliminación de Equipo</h3> 
                            ¿Esta seguro que desea eliminar el equipo?<br/>
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

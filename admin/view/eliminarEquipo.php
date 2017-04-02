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
                <input type="submit" class="btn btn-success" name="Aceptar" value="Aceptar"/>
                <input type="submit" class="btn btn-danger" name="Cancelar" value="Rechazar"/>
            </form>
        </div>                        
    </div> 
</div>
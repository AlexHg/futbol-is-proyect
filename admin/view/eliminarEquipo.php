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
 <!--Consultas
me muestra todos los equipos que no estan actualente en un torneo en el combo box de la pantalla
select nombreEquipo from equipo where idEquipo not in(select idEquipo from equipo_torneo);
me muestra los datos del capitan de este equipo en el label de al ladito (en la pantalla)
select Nombre,Apellidos from Usuario u, capitan c,equipo e where u.correo=c.correo and c.correo=e.correo and nombreEquipo="al nombre seleccionado del combo box";
obtengo el correo de ese capitan
select correo from equipo where NombreEquipo="al nombre seleccionado del combo box";
lo meto en jugador
insert into jugador (IDJugador,Correo) values (null,"correo de consulta anterior");
elimino su equipo y su cuenta de capitan , le cambio sus privilegios de usuario a 0
delete from equipo where correo="Hector@outlook.com"; -- es el correo de la consulta anterior
delete from capitan where correo="Hector@outlook.com";--tambien es el correo de la consulta anterior
update usuario set EsCapitan='0' where correo="Hector@outlook.com";

-->

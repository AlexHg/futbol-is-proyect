  <div id="content-title">
    <h2>Aceptar Petición</h2>
</div>
<div id="content-body">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <table class="table table-striped ">
            <thead>
            <tr>
                <th>Elegir</th>
                <th>Equipo</th>
                <th>Capitán</th>
                <th>Torneo</th>
            </tr>
            </thead>
            <tbody>
            <?php
            
            ?>
            </tbody>
        </table>
                     <div class="row center-xs center-sm center-md center-lg">
                        <div class="ol-xs-3 col-md-3 col-lg-3">
                            <div class="box">
                                <button id="cancelarInvitacion" type="submit" class="btn btn-success" data-type="alerta">Aceptar</button>
                            </div>
                        </div>
                        <div class="col-xs-3 col-md-3 col-lg-3">
                            <div class="box">
                                <button id="aceptarInvitacion" type="button" class="btn btn-danger" data-type="alerta2">Rechazar</button>
                            </div>
                        </div>
                    </div>
    </form>
 </div>
    <br/>
    <hr>
    <br/>
<!--Consultas para esta pantalla--
Para obtener el ID del equipo y el id del torneo de las solicitudes al coordinador
select IDEquipo,IDTorneo from solicitud_equipo;
dados esos datos vamos a obtener los registros de las tablas torneo y equipo estos datos son los que se ponen en la vista con estas sabes que equipo aplica a que vista
select Nombre from torneo where IDTorneo=1;
select NombreEquipo from equipo where IDEquipo=1;
select nombre from usuario where correo="elcorreodelcapitan";
cuando el coordinador decida aceptar una solicitud entonces hacer este insert
donde se pasa el id del equipo y el del torneo : para obtener los valores de idequipo y torneo
select IDTorneo from torneo where Nombre="nombredeltorneo";
select IDEquipo from equipo where NombreEquipo="nombreequipo";
insert into equipo_torneo (IDEquipo,IDTorneo) values (1,1);
borramos de solicitud_equipo la solicitud, esta consulta tambien sirve cuando se rechaza un equipo por parte del coordinador
delete from solicitud_equipo where IDEquipo=1 and IDTorneo=1;


    <script> <div class="overlay-container">
                        <div class="window-container alerta">
                            <h3>¿Esta seguro de realizar esta operación?</h3> 
                            Esta seguro de que deseas aceptar este equipo en este torneo<br/>
                            <br/>
                            <center>
							<button class="btn btn-success close">Aceptar</button>
                            <button class="btn btn-danger close" >Cancelar</button>
                            </center>
                        </div>
          </div></script>
	
    <script> <div class="overlay-container">
                        <div class="window-container alerta">
                            <h3>Operación realizada exitosamente</h3> 
                            La operación se realizó exitosamente<br/>
                            <br/>
                            <center>
							<button class="btn btn-success close">Aceptar</button>
                            </center>
                        </div>
          </div></script>
-->

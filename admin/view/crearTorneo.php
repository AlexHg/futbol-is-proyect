                <div id="content-title">
                    <h2>Crear Torneo</h2>
                </div>
                <div id="content-body">
                <form class="form-control" role="form" style="width: 90%">
                        <div class="form-group">
                            <label class="control-label">Nombre</label>
                                <div class="form-control-cont">
                                    <input type="text" class="form-control full" placeholder="Nombre">
                                </div>
                            </div>
                       
                        <div class="form-group">
                            <label class="control-label">Fecha Inicio</label>
                            <div class="form-control-cont">
                                <input class="form-control full" type="text" id="fechaInicio">
                            </div>
                        </div>
                        <script>
                            $( function() {
                                $( "#fechaInicio" ).datepicker();
                            } );
                        </script>
                        
                        <div class="form-group">
                            <label class="control-label">Fecha límite inscripcion</label>
                            <div class="form-control-cont">
                                <input class="form-control full" type="text" id="fechaLimite">
                            </div>
                        </div>
                        <script>
                            $( function() {
                                $( "#fechaLimite" ).datepicker();
                            } );
                        </script>
                        <div class="form-group">
                            <label class="control-label">Tipo Torneo</label>
                            <div class="form-control-cont">
                                <select class="form-control full">
                                    <option>Soccer</option>
                                    <option>Rápido</option>
                                </select>
                            </div>
                        </div>
                         <h1>Días de Juego</h1>
                        <div class="checkbox checkbox-primary">
                                    <input id="checkbox" type="checkbox" name="diaLunes" checked="">
                                    <label for="checkbox">
                                       Lunes
                                    </label>
                        </div>
                          <div class="checkbox checkbox-primary">
                                    <input id="checkbox1" type="checkbox" name="diaMartes" checked="">
                                    <label for="checkbox1">
                                       Martes
                                    </label>
                        </div>
                          <div class="checkbox checkbox-primary">
                                    <input id="checkbox2" type="checkbox" name="diaMiercoles" checked="">
                                    <label for="checkbox2">
                                       Miércoles
                                    </label>
                        </div>
                          <div class="checkbox checkbox-primary">
                                    <input id="checkbox3" type="checkbox" name="diaJueves" checked="">
                                    <label for="checkbox3">
                                       Jueves
                                    </label>
                        </div>
                          <div class="checkbox checkbox-primary">
                                    <input id="checkbox4" type="checkbox" name="diaViernes" checked="">
                                    <label for="checkbox4">
                                       Viernes
                                    </label>
                        </div>
                        </form>
                    <center><button type="button" class="btn btn-success"  data-type="alerta">Crear</button></center>
                </div>
<?php
     Notify::alert_if(
            'Operación Realizada Exitosamente',
            'El torneo se creó satisfactoriamente',
            'Aceptar',
            isset($_GET['n']) && strcasecmp($_GET['n'],'done') == 0);
    
    Notify::alert_if(
            'El nombre del torneo ya existe',
            'El nombre del torneo que ingresó ya existe, por favor ingrese otro nombre para el nuevo torneo',
            'Reintentar',
            isset($_GET['n']) && strcasecmp($_GET['n'],'usado') == 0); 
    
    Notify::alert_if(
            'No ingresó nombre de torneo',
            'No ingresó un nombre de torneo',
            'Reintentar',
            isset($_GET['n']) && strcasecmp($_GET['n'],'noname') == 0); 
    
    Notify::alert_if(
            'Deben seleccionarse al menos 4 días de juego',
            'Se seleccionaron menos de 4 días de juego, por favor ingresa mas dias.',
            'Reintentar',
            isset($_GET['n']) && strcasecmp($_GET['n'],'nodays') == 0);
?>
<!--Mensajes para esta pantalla
     

CONSULTAS PARA ESTA PANTALLA

insert into torneo (Nombre,Tipo_Torneo, Fecha_Inicio, Fecha_Fin, Fecha_Cierre_Inscripcion) values("NombreTorneo",TipoTorneo,"2009-10-09","2009-12-08","2009-12-08");
select IDTorneo from Torneo
where Nombre like "NuevoTorneo";

Antes de insertar los dias del torneo revisar si ya tiene 4 dias asignados:

select count(*) from Torneo_grupo g, Torneo t
where g.IDTorneo=t.IDTorneo 
and t.Nombre like "NuevoTorneo";

Si es menor a 4 se puede realizar el siguiente insert para cada uno de los dias de juego, 
%Dia es el dato seleccionado con los checkbox:

insert into Torneo_Grupo
values ((select idGrupo from Grupo where dia like "%Dia" ),(select IDTorneo from Torneo
where Nombre like "NuevoTorneo"));




-->

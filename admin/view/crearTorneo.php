                <div id="content-title">
                    <h2>Crear Torneo</h2>
                </div>
                <div id="content-body">
                <form class="form-control" role="form" style="width: 90%">
                        <div class="form-group">
                            <label class="control-label">Nombre de Torneo</label>
                                <div class="form-control-cont">
                                    <input type="text" class="form-control full" placeholder="Nombre">
                                </div>
                            </div>
                       <h1>
                       ***CAMBIAR COMBOS DE FECHAS A CALENDAR</h1>
                        <div class="form-group">
                            <label class="control-label">Fecha de Inicio</label>
                            <div class="form-control-cont">
                                <select class="form-control full">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                         <h1>**CAMBIAR COMBOS DE FECHAS A CALENDAR</h1>
                        <div class="form-group">
                            <label class="control-label">Fecha límite de inscripción</label>
                            <div class="form-control-cont">
                                <select class="form-control full">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tipo de Torneo</label>
                            <div class="form-control-cont">
                                <select class="form-control full">
                                    <option>Soccer</option>
                                    <option>Rápido</option>
                                </select>
                            </div>
                        </div>
                         <h1>Días de Juego</h1>
                        <div class="checkbox checkbox-primary">
                                    <input id="checkbox2" type="checkbox" checked="">
                                    <label for="checkbox2">
                                       Lunes
                                    </label>
                        </div>
                          <div class="checkbox checkbox-primary">
                                    <input id="checkbox2" type="checkbox" checked="">
                                    <label for="checkbox2">
                                       Martes
                                    </label>
                        </div>
                          <div class="checkbox checkbox-primary">
                                    <input id="checkbox2" type="checkbox" checked="">
                                    <label for="checkbox2">
                                       Miércoles
                                    </label>
                        </div>
                          <div class="checkbox checkbox-primary">
                                    <input id="checkbox2" type="checkbox" checked="">
                                    <label for="checkbox2">
                                       Jueves
                                    </label>
                        </div>
                          <div class="checkbox checkbox-primary">
                                    <input id="checkbox2" type="checkbox" checked="">
                                    <label for="checkbox2">
                                       Viernes
                                    </label>
                        </div>
                        </form>
                    <center><button type="button" class="btn btn-success"  data-type="alerta">Crear</button></center>
                </div>

<!--Mensajes para esta pantalla
 <div class="window-container alerta">
                            <h3>Operación Realizada Exitosamente </h3> 
                            La operación se realizó exitosamente<br/>
                            <br/>
                            <center>
                            <button class="btn btn-success" >Aceptar</button>
                            </center>
   </div>

 <div class="window-container alerta">
                            <h3>El nombre del torneo ya existe</h3> 
                            El nombre del torneo que ingresó ya existe, por favor ingrese otro nombre para el nuevo torneo<br/>
                            <br/>
                            <center>
                            <button class="btn btn-danger" >Reintentar</button>
                            </center>
                        </div>
 <div class="window-container alerta">
                            <h3>No ingresó nombre de torneo</h3> 
                            No ingresó un nombre de torneo<br/>
                            <br/>
                            <center>
                            <button class="btn btn-danger" >Reintentar</button>
                            </center>
                        </div>

 <div class="window-container alerta">
                            <h3>Deben seleccionarse al menos 4 días de juego</h3> 
                            Se seleccionaron menos de 4 días de juego<br/>
                            <br/>
                            <center>
                            <button class="btn btn-danger" >Reintentar</button>
                            </center>
                        </div>

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

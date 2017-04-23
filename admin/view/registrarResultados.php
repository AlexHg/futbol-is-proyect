 <div id="content-title">
                    <h2>Registrar Resultados</h2>
                </div>
                <div id="content-body">


                    <h3>Resultados de Torneo de Fútbol Soccer y Fútbol Rápido</h3>
                    <form class="form-control" role="form" style="width: 90%">
                    <div align="center">
                   <div class="form-group">
                            <label class="control-label">Tipo de Torneo </label>
                            <div class="form-control-cont">
                                <select class="form-control full">
                                    <option>Soccer</option>
                                    <option>Rápido</option>
                                    
                                </select>
                            </div>
                   </div>
                     <br>
                     
                     <div align="center">
                   <div class="form-group">
                            <label class="control-label">Nombre de Torneo </label>
                            <div class="form-control-cont">
                                <select class="form-control full">
                                    <option>Pavo</option>
                                    <option>Otro nombre :P</option>
                                    
                                </select>
                            </div>
                   </div>
                     <br>         
                    <div>
                    
                       </div>
                         
                            <div class="form-group">
                            <label class="control-label">Fecha </label>
                            <div class="form-control-cont">
                                <select class="form-control full">
                                    <option>10/03/2017</option>
                                    <option>11/03/2017</option>
                                    <option>12/03/2017</option>
                                    <option>13/03/2017</option>
                                    <option>15/03/2017</option>
                                </select>
                            </div>
                            
                            
                            <label class="control-label">Hora </label>
                            <div class="form-control-cont">
                                <select class="form-control full">
                                    <option>10:30</option>
                                    <option>11:00</option>
                                    <option>12:00</option>
                                    <option>13:00</option>
                                    <option>15:00</option>
                                </select>
                            </div>
                        </div>
                    <br>
                    <div align="center">
                    	<button type="button" class="btn btn-primary" onclick="myFunction3()">Buscar Partido</button>
<br>
                        <script>
                            function myFunction3() {
                                alert("No se han podido guardar los cambios. Uno o más partidos no se han llevado a cabo.");
                            }
                        </script>
                        <script>
                            function myFunction2() {
                                var x;
                                if (confirm("No se han podido guardar los cambios. El partido no se ha llevado a cabo.") == true) {
                                    x = "You pressed OK!";
                                } else {
                                    x = "You pressed Cancel!";
                                }
                                document.getElementById("demo").innerHTML = x;
                            }
                        </script>
                        <br>
                        
                          <br>
			    <div class="form-group">
                            <label class="control-label">Equipo 1 </label>
                            <div class="form-control-cont">
                                <select class="form-control full">
                                    <option>1</option>
                                    <option>2</option>
				    <option>3</option>
                                    <option>4</option>
				    <option>5</option>
                                    <option>6</option>
				    <option>7</option>
                                    <option>8</option>
				    <option>9</option>
                                    <option>10</option>
				    <option>11</option>
                                    <option>12</option>
				    <option>13</option>
                                    <option>14</option>
				    <option>15</option>
                                    <option>16</option>
				    <option>17</option>
                                    <option>18</option>
				    <option>19</option>
                                    <option>20</option>
                                </select>
                            </div>
                   	</div>
                        <br>
			 <div class="form-group">
                            <label class="control-label">Equipo 1 </label>
                            <div class="form-control-cont">
                                <select class="form-control full">
                                    <option>1</option>
                                    <option>2</option>
				    <option>3</option>
                                    <option>4</option>
				    <option>5</option>
                                    <option>6</option>
				    <option>7</option>
                                    <option>8</option>
				    <option>9</option>
                                    <option>10</option>
				    <option>11</option>
                                    <option>12</option>
				    <option>13</option>
                                    <option>14</option>
				    <option>15</option>
                                    <option>16</option>
				    <option>17</option>
                                    <option>18</option>
				    <option>19</option>
                                    <option>20</option>
                                </select>
                            </div>
                   	</div>
                              
                            <div align="center">
                            	
					<button type="button" class="btn btn-success" onclick="myFunction3()">Guardar Cambios</button>
							</div>
		</form> 
                        <br>
                        <br>
                    </div>
                </div>
            </section>
        </section>
        </div>
<!-- MENSAJES

<div class="window-container alerta">
                            <h3>Operación Realizada Exitosamente </h3> 
                            La operación se realizó exitosamente<br/>
                            <br/>
                            <center>
                            <button class="btn btn-success" >Aceptar</button>
                            </center>
   </div>

<div class="window-container alerta">
                            <h3>No se han podido guardar los cambios</h3> 
                            No se han podido guardar los cambios. Uno o más partidos
			    no se han llevado a cabo<br/>
                            <br/>
                            <center>
                            <button class="btn btn-danger" >Reintentar</button>
                            </center>
   </div>
CONSULTAS
si selecciona en tipo de torneo soccer
select * from torneo where tipo_torneo=0;
si selecciona en tipo de torneo rapido
select * from torneo where tipo_torneo=1;
select idtorneo from torneo where Nombre="nombreseleccionado"; ejemplo: select idtorneo from torneo where Nombre="del pavo";
el id del torneo ya se recupero en este punto
aqui se van a mostrar los dias y las horas de los partidos jugados a los que no le ha registrado resultados
select diayhora from horario_juego where idtorneo=1 and idhorario not in (select idhorario from juego j,juegosresultado js where js.idjuego=j.idjuego); 
el dia y la hora del partido ya se recupero en este punto
select idfase,idhorario from horario_juego where idtorneo=1 and diayhora="la hora que selecciono el coordinador"; ejemplo select idfase,idhorario from horario_juego where idtorneo=1 and diayhora="2016-05-01 01:30:00";
la fase y el horario ya se recuperaron en este punto
select idequipo from juego where idtorneo="ya lo leiste (recuperado antes)" and idfase="consultafaseyhorario" and idhorario ="consultafaseyhorario"; ejemplo select idequipo from juego where idtorneo=1 and idfase=2 and idhorario =3;
esto de devuelve 2 equipos los 2 que jugaron hay que poner sus nombres en pantalla
select nombreEquipo from equipo where idEquipo="lo acabas de obtener";
select idjuego from juego where idtorneo="el que seleccion el coordinador" and idequipo="alguno de los id equipo que se tienen" and idfase="tambien ya se tiene" and idhorario="ya se saco";
de la salida de esta consulta se va a sumar uno para ambas inserciones 
vas a leer goles a favor de cada uno de los equipos, entonces, insert para el equipo 1
ya se tienen los id de los equipos se sacaron de esta consulta: select idequipo from juego where idtorneo="ya lo leiste" and idfase="consultafaseyhorario" and idhorario ="consultafaseyhorario";
ya se tiene idjuego: select idjuego from juego where idtorneo="el que seleccion el coordinador" and idequipo="alguno de los id equipo que se tienen" and idfase="tambien ya se tiene" and idhorario="ya se saco";
goles a favor : son los goles que se lean del lado del equipo que se esta ingresando
goles en contra: goles que se lean del otro equipo, el que no se esta ingresando
id fase: ya se tiene, se saco de esta consulta select idfase,idhorario from horario_juego where idtorneo=1 and diayhora="la hora que selecciono el coordinador";
y ya solo se hacen ambos inserts
insert into juegosresultado (IDEquipo,IDJuego,Golesafavor,Golesencontra,IDTorneo,IDFase) values(1,5,3,5,1,7);
insert into juegosresultado (IDEquipo,IDJuego,Golesafavor,Golesencontra,IDTorneo,IDFase) values(2,5,3,5,1,7);
-->


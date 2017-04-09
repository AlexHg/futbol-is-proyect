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
                       
							<div class="form-group" >
                            <label class="control-label">Equipo 1</label>
                                <div class="form-control-cont">
                                    <input type="text" class="form-control full" value="Goles Anotados">
                                </div>
                            </div>
                        
                            <br>
                           
                            <div class="form-group" >
                            <label class="control-label">Equipo 2</label>
                                <div class="form-control-cont">
                                    <input type="text" class="form-control full" value="Goles Anotados">
                                </div>
                            </div>
                            </div>
                              
                            <div align="center">
                            	
					<button type="button" class="btn btn-success" onclick="myFunction3()">Guardar Cambios</button>
							</div>
							</form> 

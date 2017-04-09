 <section id="content">
                <div id="content-title">
                         <h2>Baja de Equipos del Torneo</h2>
                </div>
                <div id="content-body">
                <form class="form-control" role="form" style="width: 90%">
                        <div class="form-group">
                            <label class="control-label">Nombre de Equipo: </label>
                            <div class="form-control-cont">
                                <select class="form-control full" id="EquipoSelect" data-validation="required"  data-validation-error-msg="Campo obligatorio">
                                    <option>Cerverus</option>
                                    <option>ESCOM United</option>
                                    <option>Cochos FC</option>
                                    <option>Oxigeno</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Capitán: </label>
                            <div class="form-control-cont">
                                <input type="text" class="form-control" disabled="" value="Nombre">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Torneos Inscritos:</label>
                            <div class="form-control-cont">
                                <select class="form-control full" id="EquipoSelect" data-validation="required"  data-validation-error-msg="Campo obligatorio">
                                    <option value=""></option>
                                    <!-- Incluir los option con el sig formato
                                        <option value="1">Cerverus</option>  
                                    -->
                                    <option>Cerverus</option>
                                    <option>ESCOM United</option>
                                    <option>Cochos FC</option>
                                    <option>Oxigeno</option>
                                </select>
                            </div>
                        </div>
                        </form>
                <center>
                    <button type="button" onclick="confirm('¿Esta Seguro de dar este Equipo de Baja?');"class="btn btn-success">Dar de Baja</button>
                </center>
                <br>
           </section>
<script>
    function cambiaOpciones(arreglo){
        var $el = $("#TorneoSelect");
        $el.empty(); // remove old options
        $.each(arreglo, function(key,value) {
            $el.append($("<option></option>")
                .attr("value", value).text(key));
        });
    }
    
    var options1 = {"Torneo 1": "value1","Torneo 2": "value2","Torneo 3": "value3"};
    var options2 = {"Torneo 2": "value1","Torneo 3": "value2","Torneo 4": "value3"};
    var options3 = {"Torneo 3": "value1"};
    var options4 = {"Torneo 2": "value1","Torneo 3": "value2"};
    $("#EquipoSelect").change(function(){
        var str = "";
        $( "#EquipoSelect option:selected" ).each(function() {
            str += $( this ).text();
        });
        if(str == " ") console.log("Regreso a Vacio!");
        else {            
            $("#TorneoSelect").prop('disabled',false);
            $("#TorneoSelect").empty();
            switch(str){
                case "Equipo 1":
                    $("#CapitanText").val("Alina Perez");
                    cambiaOpciones(options1);
                    break;
                case "Equipo 2":
                    $("#CapitanText").val("Rolando Romero");
                    cambiaOpciones(options2);
                    break;
                case "Equipo 3":
                    $("#CapitanText").val("Katia Santillan")
                    cambiaOpciones(options3);
                    break;
                case "Equipo 4":
                    $("#CapitanText").val("Rick Sanchez")
                    cambiaOpciones(options4);
                    break;
            }
        }
        
    })
    
    
</script>
  
  <!--

Consultas para esta pantalla

Para mostrar el nombre de los equipos (para el combobox)
select NombreEquipo from equipo e,equipo_torneo et where et.idequipo=e.idequipo;
Para mostrar el nombre del capitan para el equipo que se seleccione
select Nombre,Apellidos from Usuario where correo="elcorreodelcapitan";
mostrar los torneos donde se ha registrado este equipo
select T.nombre from torneo t, equipo_torneo et, equipo e where e.idequipo=et.idequipo and t.idtorneo=et.idtorneo and e.correo="el correo del capitan";
y despues se van a hacer estas consultas para eliminar el equipo del torneo las primeras 2 son para conocer el id del torneo y el id del equipo
select IDTorneo from torneo where Nombre="elnombredeltorneo";
select IDEquipo from equipo where correo="elcorreodelcapitan";
delete from equipo_torneo where IDEquipo=1 and IDTorneo=1;

Mensajes

    <script> <div class="overlay-container">
                        <div class="window-container alerta">
                            <h3>¿Esta seguro que desea eliminar el equipo?</h3> 
                            Se eliminará toda la información generada para este equipo en el torneo<br/>
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

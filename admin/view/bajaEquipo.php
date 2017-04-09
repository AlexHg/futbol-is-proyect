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


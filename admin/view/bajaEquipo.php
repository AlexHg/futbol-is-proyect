<div id="content-title">
    <h2>Dar Equipo de Baja de Torneo</h2>
</div>
<div id="content-body">
    <div class="row center-xs">
        <div class="box">
            <form class="form-control" role="form">
                <div class="form-group">
                    <label class="control-label">Nombre de equipo:</label>
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
                    <label class="control-label">Capitan:</label>
                    <div class="form-control-cont">
                        <input type="text" class="form-control" readonly="" value="Seleccione Equipo" id="CapitanText">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Torneo Inscritos:</label>
                    <div class="form-control-cont">
                        <select class="form-control full" disabled="" id="TorneoSelect" data-validation="required"  data-validation-error-msg="Campo obligatorio">
                            <option value="">Seleccione Equipo</option>
                            <!-- Incluir los option con el sig formato
                                <option value="1">Soccer</option>  
                            -->
                        </select>
                    </div>
                </div>
                <br>
                <center>
                    <button type="button" onclick="confirm('¿Esta Seguro de dar este Equipo de Baja?');"class="btn btn-success">Dar Equipo de Baja</button>
                    <button type="button" onclick="confirm('¿Esta seguro de Cancelar la Operacion?');"class="btn btn-danger btn-rounded">Cancelar</button>
                </center>
                <br>
            </form>
        </div>                        
    </div> 
</div>
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


<div id="content-title">
    <h2>Modificar Horario de Partido</h2>
</div>
<div id="content-body">


    <div align="center">
        <div>
            <h3>Selecciona el nuevo horario</h3>
            <br>
            <br>
        </div>
       <div id="content-body">
         <form class="form-control" role="form" style="width: 90%">
             <div class="form-group">
                <label class="control-label">Torneo: </label>
                <div class="form-control-cont">
                    <select class="form-control full">
                        <option>T1</option>
                        <option>T2</option>
                        
                    </select>
                </div>
              </div>
             <div class="form-group">
                <label class="control-label">Nombre de Equipo: </label>
                <div class="form-control-cont">
                    <select class="form-control full">
                        <option>E1</option>
                        <option>E2</option>
                        
                    </select>
                </div>
              </div>
            <div class="form-group">
                <label class="control-label">Hora</label>
                <div class="form-control-cont">
                    <select class="form-control full" data-validation="required"  data-validation-error-msg="Campo obligatorio">
                        <option value=""></option>
                        <!-- Insertar los campos de los dias en la forma 
                            <option>12:00 - 1:30</option>
                        -->
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Día</label>
                <div class="form-control-cont">
                    <select class="form-control full" data-validation="required"  data-validation-error-msg="Campo obligatorio">
                        <option value=""></option>
                        <!-- Insertar los campos de los dias en la forma 
                            <option value="1">Lunes</option>
                        -->
                    </select>
                </div>
            </div>
        </form>
        <br>
        <br>
        <button type="button" class="btn btn-success"  data-type="alerta">Guardar Cambios</button>
    </div>
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
                            <h3>Modificación fallida </h3> 
                            El periodo de modificación de horario ya ha finalizado<br/>
                            <br/>
                            <center>
                            <button class="btn btn-success" >Aceptar</button>
                            </center>
   </div>

<div class="window-container alerta">
                            <h3>Horario no disponible </h3> 
                            El horario elegido no está disponible<br/>
                            <br/>
                            <center>
                            <button class="btn btn-danger" >Reintentar</button>
                            </center>
   </div>


-->

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
            <div class="form-group">
            <label class="control-label">TORNEO</label>
            <div class="form-control-cont">
                <select class="form-control full">
                    <option>Torneo1</option>
                    <option>Torneo2</option>
                    <option>Torneo3</option>
                </select>
            </div>
        </div>
        </form>
        <br>
        <br>
        <button type="button" class="btn btn-success">Guardar Cambios</button>
    </div>
</div>

<div id="content-title">
    <h2>Registrar Equipo</h2>
</div>
<div id="content-body" style="display:flex; justify-content:center; align-items:center; min-height:60vh;">
    <center>
        <form name="registrarEquipo" id="registrarEquipo" class="form-control" role="form" method="post" style="transform:scale(1.2)" action="action/registrarEquipo.submit">
            <h3>Registra a tu equipo para participar en los proximos torneos.</h3>
            <label class="control-label">Nombre del Equipo</label>
            <div class="form-group">
                <div class="form-control-cont">
                    <input type="text" class="form-control full" name="nombreEquipo"data-validation="required"  data-validation-error-msg="El nombre no debe estar vacio y debe de contener de 3 a 12 letras">
                </div>
            </div>
            <label class="control-label">Descripcion del Uniforme</label>
            <div class="form-group">
                <div class="form-control-cont">
                    <textarea class="form-control full" rows="1" name="uniforme" form="registrarEquipo" data-validation="required" data-validation-error-msg="Se ha omitido la descripcion del uniforme"></textarea>
                </div>
            </div>
            <button type="button" class="button btn btn-primary" data-type="confirmar">Registrar</button>
            <br><br>
        </form>
    </center>
</div>

<div class="overlay-container">
    <div class="window-container confirmar">
        <h3>Confirmación de Registro de Equipo</h3> 
        <center>
        <p>¿Estas seguro de registrar este equipo?</p>
        <p>Al hacerlo tu rol cambiara a <strong>Capitan</strong> y deberás volver a iniciar sesión para ver los cambios.</p>
        <p>Una vez que hayas iniciado sesión, podrás enviar solicitudes a Jugadores para unirse a tu equipo.</p>
        <p>Puedes revertir este proceso contactando al Coordinador del Club de Fútbol, para regresar a tu rol de Jugador.</p>
        <br/>
        <input type="submit" name="submit" value="De Acuerdo" form="registrarEquipo" class="btn btn-success">
        <button class="btn btn-danger close">Regresar</button>
        </center>
    </div>
</div>

<?php if(isset($_SESSION['n']) && strcasecmp($_SESSION['n'],'exito') == 0){ 
    unset($_SESSION['n']);?>
    <div class="overlay-container">
        <div class="window-container exito">
            <h3>Operación realizada exitosamente</h3>
            <center>La operación se realizó exitosamente</center>
            <br/>
            <center>
               <button class="btn btn-success" onclick="location.href = 'action/sesion.cerrar';">Regresar</button>
            </center>
        </div>
    </div>
    <script>$(document).ready(function(){openWindow("exito")});</script>
<?php } else if(isset($_SESSION['n']) && strcasecmp($_SESSION['n'],'error') == 0){
    unset($_SESSION['n'])?>
    <div class="overlay-container">
        <div class="window-container error">
            <h3>Equipo repetido</h3>
            <center>El equipo ya está registrado en el Sistema prueba con otro nombre</center>
            <br/>
            <center>
               <button class="btn btn-danger close">Reintentar</button>
            </center>
        </div>
    </div>
    <script>$(document).ready(function(){openWindow("error")});</script>
<?php }?>

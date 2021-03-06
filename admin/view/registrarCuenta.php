<div id="content-title">
    <h2>Registrar Cuenta</h2>
</div>
<div id="content-body" style="display:flex; justify-content:center; align-items:center; min-height:60vh;">
    <center>
        <form class="form-control" role="form" method="post" action="action/registrarCuenta.submit">
            <h3>Ingrese los siguientes datos para crear una cuenta como jugador</h3>                  
            <div class="form-group">
                <label class="control-label">Nombre</label>
                <div class="form-control-cont">
                    <input type="text" class="form-control full" name="nombre" onkeydown="return soloLetras(event)" data-validation="required"  data-validation-error-msg="Se ha omitido el nombre">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label">Apellidos</label>
                <div class="form-control-cont">
                    <input type="text" class="form-control full" name="apellidos" onkeydown="return soloLetras(event)" data-validation="required"  data-validation-error-msg="Se ha omitido el apellido">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label">Correo</label>
                <div class="form-control-cont">
                    <input type="required email" name="correo" class="form-control full" data-validation="email required" data-validation-error-msg-required="No has proporcionado un correo válido, verifique su entrada" data-validation-error-msg-email="Correo electrónico no válido">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label">Teléfono</label>
                <div class="form-control-cont">
                    <input type="text" class="form-control full" name="telefono" onkeydown="return soloNumeros(event)" data-validation="required length" data-validation-length="10" data-validation-error-msg-required="Se ha omitido el teléfono" data-validation-error-msg-length="La contraseña debe de tener 10 dígitos.">
                </div>
            </div>
            
            <div class="form-group">
                <label class="control-label">Contraseña</label>
                <div class="form-control-cont">
                    <input type="password" class="form-control full" name="contrasena" data-validation="length required" data-validation-length="6-15" data-validation-error-msg-length="La contraseña debe de tener entre 6 a 15 caracteres" data-validation-error-msg-required="Se ha omitido contraseña"  placeholder="************">
                </div>
            </div>
            <br>
            <div class="form-group" style="display:none;">
                <label class="control-label" >Elija su avatar</label>
                <input type="file" class="filestyle" data-buttonname="btn-default" id="image" accept="image/*" tabindex="-1" style="position: absolute; clip: rect(0px 0px 0px 0px);">
                <div style="margin-left:20px;"></div>
                <label for="image" style="padding-top:9px;"><div class="btn btn-primary"><i class="ti-file"></i> imagen</div></label>

            </div>
            <br><br>
            <input type="submit" name="submit" value="Registrarse" class="btn btn-primary" data-type="alerta">
            <br><br>
        </form>
    </center>
</div>

<?php if(isset($_SESSION['n']) && strcasecmp($_SESSION['n'],'exito') == 0){ 
    unset($_SESSION['n']);?>
    <div class="overlay-container">
        <div class="window-container exito">
            <h3>Registro de Cuenta Exitoso</h3>
            <center>Cuenta registrada exitosamente</center>
            <br/>
            <center>
               <button class="btn btn-primary" onclick="location.href = 'iniciarSesion';">Iniciar Sesion</button>
            </center>
        </div>
    </div>
    <script>
        function goToLogin(){
            window.location="iniciarSesion"
        }
        $(document).ready(function(){openWindow("exito")});
    </script>


<?php } else if(isset($_SESSION['n']) && strcasecmp($_SESSION['n'],'error') == 0){
    unset($_SESSION['n'])?>
    <!--<div class="overlay-container">
        <div class="window-container error">
            <h3>Correo Existente</h3>
            <center>La cuenta ya ha sido registrada anteriormente</center>
            <br/>
            <center>
               <button class="btn btn-danger close">Reintentar</button>
            </center>
        </div>
    </div>
    <script>$(document).ready(function(){openWindow("error")});</script>-->
<?php }?>

<?php
Notify::alert_if_and(
    'Registro de Cuenta Exitoso',
    'Cuenta registrada exitosamente',
    isset($_GET['n']) && strcasecmp($_GET['n'],'done') == 0,
    'goToLogin()'); 


Notify::alert_if(
    'Datos Incorrectos',
    'Los datos ingresados son incorrectos o ya se encuentran registrados, favor de verificarlos',
    'Reintentar',
    isset($_GET['n']) && strcasecmp($_GET['n'],'err') == 0); 

									

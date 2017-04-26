
<div id="content-title">
    <h2>Iniciar Sesión</h2>
</div>
<div id="content-body" style="display:flex; justify-content:center; align-items:center; min-height:60vh;">
    <center>
        <form class="form-control" role="form" style="transform:scale(1)" method="POST" action="action/iniciarSesion.submit">         
            <h3>Ingresa los siguientes datos requeridos:</h3>                 
            <div class="form-group">
                <label class="control-label">Correo</label>
                <div class="form-control-cont">
                    <input name="email" type="email"  class="form-control full"  data-validation="email" data-validation-error-msg="No has proporcionado un correo válido, verifique su entrada" id="example-email"  class="form-control" placeholder="alex@ingdesoft.com.mx">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Password</label>
                <div class="form-control-cont">
                    <input name="pass" type="password" class="form-control full" data-validation="length" data-validation-length="6-15"  data-validation-error-msg="Se ha omitido contraseña" placeholder="************">
                </div>
            </div>
            <div>
                No tienes una cuenta?<a href='registrarCuenta'> Registrate</a>
                <br><br>
                <a href='recuperarCuenta'>Recuperar Contraseña</a>
                <br><br>
            </div>
            <div>
                <div class="box">
                    <input type="submit" class="btn btn-primary" value="Iniciar sesión"/>
                    <br><br>
                </div>
            </div>
        </form> 
    </center>
    <br><br>
</div>

<?php 
    Notify::alert_if(
        'Datos Incorrectos',
        'Los datos ingresados son incorrectos o no se encuentran registrados, favor de verificarlos',
        'Reintentar',
        isset($_GET['n']) && strcasecmp($_GET['n'],'nofound') == 0); 
        
?>


<div style="background:#f9fcd4; padding:1rem;"><pre>
<b>Datos de ejemplo</b>

Jugador
    barney@outlook.com
    oscarito

Capitan
    Hector@outlook.com
    12345

Coordinador
    coordinador@gmail.com
    diegoelguapo
</pre></div>

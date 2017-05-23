<div id="content-title">
    <h2>Recuperar Contraseña</h2>
</div>
<div id="content-body" style="display:flex; justify-content:center; align-items:center; min-height:60vh;">
    <center>   
            <form class="form-control" role="form" method="post" action="recuperarCuenta" style="transform:scale(1.2)">

            <h3>Ingrese su correo electrónico<br><small style="font-weight:400">Le enviaremos la información de recuperación</small></h3>  
            <div class="form-group">
                <label class="control-label" for="example-email">Correo</label>
                <div class="form-control-cont">
                    <input type="email"  class="form-control full"  data-validation="email required" data-validation-error-msg-required="No has proporcionado un correo válido, verifique su entrada" data-validation-error-msg-email="Correo electrónico no válido" id="example-email" name="example-email" class="form-control" placeholder="alex@ingdesoft.com.mx">
                </div>
            </div>
            <div>
                <?php
                processingForm();
                ?>
                <br>
                <input type="submit" name="submit" value="Registrarse" class="btn btn-primary" data-type="alerta">
                <br><br>
            </div>
        </form>
    </center>
</div>
 <!--Mensaje de confirmacion-->

<?php
 Notify::alert_activedById('Correo Enviado', 
            'Se ha enviado la contraseña por correo electrónico.',
            'Aceptar',
            "correo"); 

 ?>

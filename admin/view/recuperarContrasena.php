<div id="content-title">
    <h2>Recuperar Contraseña</h2>
</div>
<div id="content-body" style="display:flex; justify-content:center; align-items:center; min-height:60vh;">
    <center>   
        <form class="form-control" role="form" style="transform:scale(1.2)" >
            <h3>Ingrese su correo electronico<br><small style="font-weight:400">Le enviaremos la información de recuperación</small></h3>  
            <div class="form-group">
                <label class="control-label" for="example-email">Correo</label>
                <div class="form-control-cont">
                    <input type="email"  class="form-control full"  data-validation="email" data-validation-error-msg="email no válido" id="example-email" name="example-email" class="form-control" placeholder="alex@ingdesoft.com.mx">
                </div>
            </div>
            <div>
                <br>
                <button type="button" id="correo" class="btn btn-primary" data-type="alerta">Recuperar Contraseña</button>
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

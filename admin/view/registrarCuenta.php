<div id="content-title">
    <h2>Registrar Jugador</h2>
</div>
<div id="content-body" style="display:flex; justify-content:center; align-items:center; min-height:60vh;">
    <center>
        <form class="form-control" role="form" method="post" style="transform:scale(1.2)" action="action/registrarCuenta.submit">
            <h3>Ingrese los siguientes datos para crear una cuenta</h3>                  
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
                    <input type="required email" name="correo" class="form-control full" data-validation="email" data-validation-error-msg-required="No has proporcionado un correo valido, verifique su entrada" data-validation-error-msg-email="Email no válido">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label">Telefono</label>
                <div class="form-control-cont">
                    <input type="text" class="form-control full" name="telefono" onkeydown="return soloNumeros(event)" data-validation="required"  data-validation-error-msg="Se ha omitido el telefono">
                </div>
            </div>
            
            <div class="form-group">
                <label class="control-label">Contraseña</label>
                <div class="form-control-cont">
                    <input type="password" class="form-control full" name="contrasena" data-validation="length" data-validation-length="5-15" data-validation-error-msg="La contraseña debe de tener entre 6 a 15 caracteres." placeholder="************">
                </div>
            </div>
            <br>
            <input type="submit" name="submit" value="Registrarse" class="btn btn-primary" data-type="alerta">
            <br><br>
        </form>
    </center>
</div>

<?php if(isset($_GET['n']) && strcasecmp($_GET['n'],'exito') == 0){ ?>
    <script>
        <div class="overlay-container">
                        <div class="window-container alerta">
                            <h3>Confirmación de Registro</h3> 
                            Cuenta registrada exitosamente<br/>
                            <br/>
                            <center>
                            <button class="btn btn-success close" >Aceptar</button>
                            </center>
                        </div>
          </div>
    </script>
<?php } else if(isset($_GET['n']) && strcasecmp($_GET['n'],'error') == 0){ // Checar MSG?>
    <script>
        <div class="overlay-container">
                        <div class="window-container alerta">
                            <h3>Alerta de Registro</h3> 
                            La cuenta ya ha sido registrada anteriormente<br/>
                            <br/>
                            <center>
                            <button class="btn btn-success close" >Aceptar</button>
                            </center>
                        </div>
          </div>
    </script> 
<?php }?>

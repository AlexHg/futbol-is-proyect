<div id="content-title">
    <h2>Registrar Jugador</h2>
</div>
<div id="content-body" style="display:flex; justify-content:center; align-items:center; min-height:60vh;">
                    
<?php
    /*include('include/consultas.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre=$_POST['nombre'];
        $apellidos=$_POST['apellidos'];
        $correo=$_POST['correo'];
        $telefono=$_POST['telefono'];
        $contrasena=$_POST['contrasena'];
        $imagen='test.jpg';

        $res=insertarUsuario($nombre,$apellidos,$correo,$telefono,$contrasena,$imagen);
        if ($res==1) {
            echo "Registrado";
        }
        else{
            echo $res;
        }
    }*/
?>
    <center>
        <form class="form-control" role="form" method="post" style="transform:scale(1.2)" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h3>Ingrese los siguientes datos para crear una cuenta</h3>                  
            <div class="form-group">
                <label class="control-label">Nombre</label>
                <div class="form-control-cont">
                    <input type="text" class="form-control full" name="nombre" data-validation="required"  data-validation-error-msg="Se ha omitido el nombre">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label">Apellidos</label>
                <div class="form-control-cont">
                    <input type="text" class="form-control full" name="apellidos" data-validation="required"  data-validation-error-msg="Se ha omitido el apellido">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label">Telefono</label>
                <div class="form-control-cont">
                    <input type="text" class="form-control full" name="telefono" data-validation="required"  data-validation-error-msg="Se ha omitido el telefono">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label">Correo</label>
                <div class="form-control-cont">
                    <input type="email" name="correo" class="form-control full" data-validation="email" data-validation-error-msg="No has proporcionado un correo valido, verifique su entrada" placeholder="alex@ingdesoft.com.mx">
                </div>
            </div>
            
            <div class="form-group">
                <label class="control-label">Contraseña</label>
                <div class="form-control-cont">
                    <input type="password" class="form-control full" name="contrasena" data-validation="required"  data-validation-error-msg="Se ha omitido contraseña" placeholder="************">
                </div>
            </div>
            <br>
            <input type="submit" name="submit" value="Registrarse" class="btn btn-primary">
            <br><br>
        </form>
    </center>
</div>
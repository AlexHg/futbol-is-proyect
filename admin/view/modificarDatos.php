	
<script>
/*function btnmodificar()
{
    var nombre=document.getElementById("name").value
    var apellido=document.getElementById("lastname").value
	var telefono=document.getElementById("phone").value
    var password=document.getElementById("pass").value
	var correo=document.getElementById("email").value
	
    $.ajax({
        method:"post",
        url:"include/modificar.php",
        data:{name:nombre,lastname:apellido,phone:telefono,pass:password,email:correo},
        success:function(respuesta){
            if(respuesta==1){
                alert("Datos Modificados");
            }
            else{
                alert(repuesta);
            }
        }
    });
}*/
</script>   	
	
</head>

<div id="content-title">
    <h2>Modificar Datos del Jugador</h2>
</div>

<div id="content-body">
    <center>
    <form class="form-control" action="action/modificarDatos.submit" method="post" role="form">
        <h3>Datos del Usuario</h3>
        
        <?php $Datos=getDatos(); ?>
        <div class="form-group">
            <label class="control-label">Nombre</label>
                <div class="form-control-cont">
                    <input type="text" name="name" class="form-control full" id="name" value="<?php echo $Datos[1]; ?>" onkeydown="return soloLetras(event)" data-validation="required"  data-validation-error-msg="Se ha omitido el nombre">
                </div>
        </div>
        
        <div class="form-group">
            <label class="control-label">Apellidos</label>
                <div class="form-control-cont">
                    <input type="text" name="lastname" class="form-control full" id="lastname" value="<?php echo $Datos[2]; ?>" onkeydown="return soloLetras(event)" data-validation="required"  data-validation-error-msg="Se ha omitido el apellido">
                </div>
        </div>
        
        <div class="form-group">
            <label class="control-label" for="example-email">Correo</label>
            <div class="form-control-cont">
                <input type="email" id="email" name="mail" class="form-control full" readonly value="<?php echo $Datos[0]; ?>" data-validation="email required" data-validation-error-msg-required="No has proporcionado un correo válido, verifique su entrada" data-validation-error-msg-email="Correo electrónico no válido" id="example-email">
            </div>
        </div>
        
        <div class="form-group">
            <label >Teléfono</label>
            <div class="form-control-cont">
                <input type="text" name="phone" class="form-control full" id="phone" value="<?php echo $Datos[4]; ?>" data-validation="required length" data-validation-length="10" data-validation-error-msg-required="Se ha omitido el teléfono" data-validation-error-msg-length="La contraseña debe de tener 10 dígitos.">
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label">Contraseña</label>
            <div class="form-control-cont">
                <input type="password" name="pass" class="form-control full" id="pass" value="<?php echo $Datos[3]; ?>" data-validation="length required" data-validation-length="6-15" data-validation-error-msg-length="La contraseña debe de tener entre 6 a 15 caracteres" data-validation-error-msg-required="Se ha omitido contraseña">
            </div>
        </div>

        <center><input type="submit" id="abrir" type="button" class="btn btn-primary" onclick="btnmodificar()" value="Modificar"/></center>
        
    </form>
    </center>
</div>
<?php 

Notify::alert_if(
    'Datos modificados',
    'Los datos han sido modificados exitosamente',
    'Aceptar',
    isset($_GET['n']) && strcasecmp($_GET['n'],'done') == 0); 


Notify::alert_if(
    'Datos NO modificados',
    'No ha sido posible modificar los datos, inténtalo de nuevo más tarde',
    'Reintentar',
    isset($_GET['n']) && strcasecmp($_GET['n'],'err') == 0); 

									

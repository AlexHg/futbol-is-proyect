<style>
    #profileCapitan {
        padding: 0 0rem;
        height: 100%;
        display: flex;
        align-items: center;
        position: relative;
    }
    
    #profileCapitan img {
        width: 55px;
        height: 55px;
        border-radius: 100%;
        vertical-align: top;
    }
</style>
    
	
<script>
    function crearEquipo(){
        document.querySelector("#crearEquipoForm").submit();
    }
</script>

<div id="content-title">
    <h2>Registrar Equipo</h2>
</div>
<div id="content-body">
    <h3>Registra a tu equipo para participar en los siguientes torneos.</h3>
    <center>
        <form class="form-control" id="crearEquipoForm" action="action/registrarEquipo.submit" method="post" role="form">
            <h3>Ingresa los siguientes datos: </h3>   
            <div class="form-group">
                <label class="control-label">Equipo</label>
                    <div class="form-control-cont">
                        <input type="text" class="form-control full" id="Equipo" name="name" placeholder="Nombre del Equipo" data-validation="required" data-validation-error-msg="Se ha omitido la el nombre del equipo">
                    </div>
            </div>
            <div class="form-group">
                <label class="control-label">Correo</label>
                    <div class="form-control-cont">
                        <input type="text" class="form-control full" id="Correo" name="email" readonly value="<?php echo $_SESSION['email'] ?>" >
                    </div>
            </div>						
            <br>
            <label class="control-label"><b>Descripcion del Uniforme</b></label>
            <div class="form-group">
                <div class="form-control-cont">
                    <textarea class="form-control full" rows="1" name="uniforme" data-validation="required" data-validation-error-msg="Se ha omitido la descripción del uniforme" form="crearEquipoForm"></textarea>
                </div>
            </div>
            <button type="button" class="button btn btn-primary" id="btnConfirmar" data-type="confirmar">Registrar</button>
            <br><br>
        </form>
    </center>
</div>
<?php 
    Notify::confirm_activedById('Confirmación de Registro de Equipo',
            '¿Estás seguro de registrar este equipo? Al hacerlo tu rol cambiará a capitán y podrás enviar solicitudes a Jugadores para unirse a tu equipo.
             *Puedes revertir este proceso contactando al Coordinador del Club del Club de fútbol, para regresar tu rol a Jugador.',
            "btnConfirmar", "crearEquipo()");

    Notify::alert_if(
            'Operación realizada exitosamente',
            'La operación se realizó exitosamente',
            'Aceptar',
            isset($_GET['n']) && strcasecmp($_GET['n'],'exito') == 0); 

    Notify::alert_if(
            'Equipo Existente',
            'El equipo ya está registrado en el Sistema prueba con otro nombre',
            'Reintentar',
            isset($_GET['n']) && strcasecmp($_GET['n'],'error') == 0); 

    Notify::alert_if(
            'Equipo sin nombre',
            'El equipo que se intenta registrar no tiene un nombre valido. Por favor vuelva a intentarlo',
            'Reintentar',
            isset($_GET['n']) && strcasecmp($_GET['n'],'noname') == 0); 

?>



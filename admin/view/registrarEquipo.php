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
    function btnenviar(){
        var equipo=document.getElementById("Equipo").value
        var correo=document.getElementById("Correo").value

        $.ajax({
            method:"post",
            url:"action/registrarEquipo",
            data:{name:equipo,email:correo},
            success:function(respuesta){
                if(respuesta==1){
                    alert("Equipo Creado");
                }
                else{
                    alert("Error");
                }
            }
        });
    }
</script>
<div id="content-title">
    <h2>Registrar Equipo</h2>
</div>
<div id="content-body">
    <h3>Registra a tu equipo para participar en los siguientes torneos.</h3>
    
    <center>
    
    <form class="form-control" role="form">
    
        <h3>Ingresa los siguientes datos: </h3>   

    
        <div class="form-group">
            <label class="control-label">Nombre de Equipo</label>
                <div class="form-control-cont">
                    <input type="text" class="form-control full" id="Equipo" placeholder="Nombre del equipo">
                </div>
        </div>

    
        
        <div class="form-group">
            <label class="control-label">Correo de jugador</label>
                <div class="form-control-cont">
                    <input type="text" class="form-control full" id="Correo" disabled="disabled" value="<?php echo $_SESSION["email"]; ?>">
                </div>
        </div>
    
                                
    <div class="row center-xs center-sm center-md center-lg">
        <div class="ol-xs-5 col-md-5 col-lg-5">
            <div class="box">
            <center><button id="abrir" type="button" class="btn btn-primary" onclick="btnenviar()">Registrar</button></center>
                
            </div>
        </div>
        <!--<div class="col-xs-5 col-md-5 col-lg-5">
            <div class="box">
                <button id="registrarEquipo" type="button" class="btn btn-danger">Cancelar</button>
            </div>
        </div>-->

    </div>
    </form>

</div>
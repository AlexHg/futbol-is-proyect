<div id="content-title">
    <h2>Eliminar Torneo</h2>
</div>

<div id="content-body">
    <div class="row center-xs center-md center-lg">
        <div class="box">
           <?php
            adiosTorneo();
            ?>
            <form method="post" class="form-control-cont" role="form" action="eliminarTorneo">
                <div class="form-control-cont">

                    <label class="control-label">Nombre del Torneo:</label>

                    <div class="form-control-cont">
                        <select onChange="change(this.value)" name="ni" class="form-control full" id="TorneoSelect">
                            <?php
                                listaTorneos();
                            ?>
                        </select>
                    </div>
                </div>

                <center>
                    <input type="submit" class="btn btn-success" name="Aceptar" value="Aceptar" data-type="alerta"/>
                    
                </center>
            </form>
        </div>
    </div>
</div>

<!-- MENSAJES

<div class="window-container alerta">
                            <h3>Operación Realizada Exitosamente </h3> 
                            La operación se realizó exitosamente<br/>
                            <br/>
                            <center>
                            <button class="btn btn-success" >Aceptar</button>
                            </center>
   </div>



-->

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

CONSULTAS -- para llamar el procedure: call e1("nombre del torneo a eliminar");

delimiter #
create procedure e1(in torneo varchar(45))
begin

delete from juegosresultado
where IDTorneo=(select IDTorneo from Torneo where Nombre like concat(torneo,"%"));

delete from Equipo_Torneo
where IDTorneo=(select IDTorneo from Torneo where Nombre like concat(torneo,"%"));

delete from Juego
where IDTorneo=(select IDTorneo from Torneo where Nombre like concat(torneo,"%"));

delete from Horario_Juego
where IDTorneo=(select IDTorneo from Torneo where Nombre like concat(torneo,"%"));

delete from Torneo_grupo
where IDTorneo=(select IDTorneo from Torneo where Nombre like concat(torneo,"%"));

delete from Torneo
where IDTorneo = (select IDTorneo from (SELECT * FROM torneo) as IDT where Nombre like concat(torneo,"%")); 

end #

delimiter ;

-->

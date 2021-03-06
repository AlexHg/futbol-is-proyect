<div id="content-title">
    <h2>Tabla de Próximos Partidos</h2>
</div>
<div id="content-body">
                    <div class="form-group">
                            <label class="control-label">Nombre de Torneo</label>
                            <div class="form-control-cont">
                                <select class="form-control full" data-validation="required"  data-validation-error-msg="Campo obligatorio">
                                    <option>Soccer</option>
                                    <option>Rápido</option>
                                </select>
                            </div>
                        </div>
                        
  <button onclick="window.location.href='#'" type="button" class="btn btn-info">Consultar</button>
    <table class="table table-striped ">
        <thead>
            <tr>
                <th>Fase</th>
                <th>Torneo</th>
                <th>Equipo</th>
                <th>Equipo</th>
                <th>Horario</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Inauguración</th>
                <td>Finales</td>
                <td>Torneo</td>
                <td>Equipo1</td>
                <td>Equipo2</td>
                <td>Horario</td>
            </tr>                                                                                   
        </tbody>
    </table>  
</div>
<!--MEnsaje
<div class="overlay-container">
                        <div class="window-container aceptar">
                            <h3>No es posible mostrar la información</h3> 
                            No fue posible mostrar la información, inténtalo más tarde<br/>
                            <br/>
                            <center>
                            <button class="btn btn-success close" >Aceptar</button>
                            </center>
                        </div>
</div>

----CONSULTA 

create procedure CP(in tipo BOOLEAN)
begin


select e.NombreEquipo as Equipo, f.descripcion as Fase, t.nombre as Torneo, h.DiayHora as Horario
from equipo e, fase f, juego j, torneo t, horario_juego h
where j.idEquipo = e.idEquipo
and j.idHorario = h.IDHorario
and t.IDTorneo = j.idTorneo
and f.idfase = j.idfase
and t.Tipo_Torneo = tipo;


end #

delimiter ;

-- para llamar a procedure: call cp(1); (dentro del paréntesis va 0 o 1 dependiendo del tipo de torneo que desea consultarse.
Devuelve los equipos enfrentados con su fase, torneo y horario
-->

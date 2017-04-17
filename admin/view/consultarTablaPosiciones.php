<div id="content-title">
    <h2>Tabla de Posiciones</h2>
</div>
<div id="content-body">
                    <div class="form-group">
                            <label class="control-label">Nombre de Torneo</label>
                            <div class="form-control-cont">
                                <select class="form-control full">
                                    <option>Torneo1</option>
                                    <option>Torneo2</option>
                                </select>
                            </div>
                        </div>
                        
  <button onclick="window.location.href='#'" type="button" class="btn btn-info">Consultar</button>
    <table class="table table-striped ">
        <thead>
            <tr>
                <th>Equipo</th>
                <th>Juegos Ganados</th>
                <th>Juegos Perdidos</th>
                <th>Juegos Empatados</th>
                <th>Goles a favor</th>
                <th>Goles en Contra</th>
                <th>Goles en Contra</th>
                <th>Diferencia</th>
                <th>Puntos Acomulados</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Inauguración</th>
                <td>19/09/16</td>
                <td>A (12:30)</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">Jornada 1</th>
                <td>Del 19/09/16 al 23/09/16</td>
                <td>A (13:30)</td>
                <td>B (12:30 y 13:30)</td>
                <td>C (12:30 y 13:30)</td>
                <td>D (12:30 y 13:30)</td>
            </tr>
            <tr>
                <th scope="row">Jornada 2</th>
                <td>Del 26/09/16 al 30/09/16</td>
                <td>A (12:30 y 13:30)</td>
                <td>B (12:30 y 13:30)</td>
                <td>C (12:30 y 13:30)</td>
                <td>D (12:30 y 13:30)</td>
            </tr>
            <tr>
                <th scope="row">Jornada 3</th>
                <td>Del 03/10/16 al 07/10/16</td>
                <td>A (12:30 y 13:30)</td>
                <td>B (12:30 y 13:30)</td>
                <td>C (12:30 y 13:30)</td>
                <td>D (12:30 y 13:30)</td>
            </tr>
            <tr>
                <th scope="row">Cuartos de final</th>
                <td>Del 11/10/16 al 13/10/16</td>
                <td></td>
                <td><div>A1 vs B1 (12:30) (W)</div><div> B1 vs A2 (13:30) (X)</div></td>
                <td></td>
                <td><div>C1 vs D2 (12:30) (Y)</div><div> D1 vs C2 (13:30) (Z)</div></td>
            </tr>
            <tr>
                <th scope="row">Semifinal</th>
                <td>18/10/16</td>
                <td></td>
                <td><div>(W) vs (Y) (12:30)</div><div>(X) vs (Z) (13:30)</div></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">Final</th>
                <td>26/10/16</td>
                <td></td>
                <td></td>
                <td><div>Ganador (W vs Y)</div><div>vs</div><div>Ganador (W vs Z)</div></td>
                <td></td>
            </tr>                                                                                          
        </tbody>
    </table>  
</div>
<!--Mensahe-->
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

<!--CONSULTA

5.2 Consultar tabla de posiciones

select nombreequipo from equipo e, juegosresultado j
where e.idequipo=j.idequipo
group by nombreequipo;

ingresar los nombres de equipo de la consulta anterior e ingresarlos
en el siguiente procedure con call p1("NombreEquipo");

delimiter #
create procedure p1(in ap varchar(50))
begin
select count(*) as juegosTotales from equipo e, JuegosResultado j 
where e.idequipo=j.idequipo and e.NombreEquipo like concat(ap,"%");
select count(*) as juegosGanados from equipo e, JuegosResultado j 
where e.idequipo=j.idequipo and j.golesaFavor>j.golesencontra and e.NombreEquipo like concat(ap,"%");
select count(*) as juegosEmpatados from equipo e, JuegosResultado j 
where e.idequipo=j.idequipo and j.golesaFavor=j.golesencontra and e.NombreEquipo like concat(ap,"%");
select count(*) as juegosPerdidos from equipo e, JuegosResultado j 
where e.idequipo=j.idequipo and j.golesaFavor<j.golesencontra and e.NombreEquipo like concat(ap,"%");
select sum(Golesafavor) as golesaFavor from equipo e, JuegosResultado j
where e.idequipo=j.idequipo
and e.nombreequipo like concat(ap,"%");
select sum(Golesencontra) as golesenContra from equipo e, JuegosResultado j
where e.idequipo=j.idequipo
and e.nombreequipo like concat(ap,"%");
end #



-->

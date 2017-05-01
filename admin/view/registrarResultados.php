 <div id="content-title">
    <h2>Registrar Resultados</h2>
</div>
<div id="content-body">
    <h3>Elija el partido al cual desea registrar un resultado</h3>
    <table class="table table-striped ">
        <thead>
            <tr>
                <th>VS</th>
                <th>Fase</th>
                <th>Torneo</th>
                <th>Horario</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php tabla_juegos_sin_resultado() ?>
        </tbody>
    </table>        
</div>
<?php
Notify::alert_if(
        'Operación realizada exitosamente',
        'La operación se realizó exitosamente',
        'Aceptar',
        isset($_GET['n']) && strcasecmp($_GET['n'],'done') == 0); 

Notify::alert_if(
        'Equipo Existente',
        'No se han podido guardar los cambios. Uno o más partidos no se han llevado a cabo',
        'Reintentar',
        isset($_GET['n']) && strcasecmp($_GET['n'],'error') == 0); 
?>
<!-- MENSAJES

<div class="window-container alerta">
                            <h3>Operación Realizada Exitosamente </h3> 
                            La operación se realizó exitosamente<br/>
                            <br/>
                            <center>
                            <button class="btn btn-success" >Aceptar</button>
                            </center>
   </div>

<div class="window-container alerta">
                            <h3>No se han podido guardar los cambios</h3> 
                            No se han podido guardar los cambios. Uno o más partidos
			    no se han llevado a cabo<br/>
                            <br/>
                            <center>
                            <button class="btn btn-danger" >Reintentar</button>
                            </center>
   </div>
CONSULTAS
si selecciona en tipo de torneo soccer
select * from torneo where tipo_torneo=0;
si selecciona en tipo de torneo rapido
select * from torneo where tipo_torneo=1;
select idtorneo from torneo where Nombre="nombreseleccionado"; ejemplo: select idtorneo from torneo where Nombre="del pavo";
el id del torneo ya se recupero en este punto
aqui se van a mostrar los dias y las horas de los partidos jugados a los que no le ha registrado resultados
select diayhora from horario_juego where idtorneo=1 and idhorario not in (select idhorario from juego j,juegosresultado js where js.idjuego=j.idjuego); 
el dia y la hora del partido ya se recupero en este punto
select idfase,idhorario from horario_juego where idtorneo=1 and diayhora="la hora que selecciono el coordinador"; ejemplo select idfase,idhorario from horario_juego where idtorneo=1 and diayhora="2016-05-01 01:30:00";
la fase y el horario ya se recuperaron en este punto
select idequipo from juego where idtorneo="ya lo leiste (recuperado antes)" and idfase="consultafaseyhorario" and idhorario ="consultafaseyhorario"; ejemplo select idequipo from juego where idtorneo=1 and idfase=2 and idhorario =3;
esto de devuelve 2 equipos los 2 que jugaron hay que poner sus nombres en pantalla
select nombreEquipo from equipo where idEquipo="lo acabas de obtener";
select idjuego from juego where idtorneo="el que seleccion el coordinador" and idequipo="alguno de los id equipo que se tienen" and idfase="tambien ya se tiene" and idhorario="ya se saco";
de la salida de esta consulta se va a sumar uno para ambas inserciones 
vas a leer goles a favor de cada uno de los equipos, entonces, insert para el equipo 1
ya se tienen los id de los equipos se sacaron de esta consulta: select idequipo from juego where idtorneo="ya lo leiste" and idfase="consultafaseyhorario" and idhorario ="consultafaseyhorario";
ya se tiene idjuego: select idjuego from juego where idtorneo="el que seleccion el coordinador" and idequipo="alguno de los id equipo que se tienen" and idfase="tambien ya se tiene" and idhorario="ya se saco";
goles a favor : son los goles que se lean del lado del equipo que se esta ingresando
goles en contra: goles que se lean del otro equipo, el que no se esta ingresando
id fase: ya se tiene, se saco de esta consulta select idfase,idhorario from horario_juego where idtorneo=1 and diayhora="la hora que selecciono el coordinador";
y ya solo se hacen ambos inserts
insert into juegosresultado (IDEquipo,IDJuego,Golesafavor,Golesencontra,IDTorneo,IDFase) values(1,5,3,5,1,7);
insert into juegosresultado (IDEquipo,IDJuego,Golesafavor,Golesencontra,IDTorneo,IDFase) values(2,5,3,5,1,7);
-->


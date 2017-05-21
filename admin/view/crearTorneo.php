
                <div id="content-title">
                    <h2>Crear Torneo</h2>
                </div>
                <div id="content-body">
                <form class="form-control" role="form" action="action/crearTorneo.submit" method="post" style="width: 70%">
                        <div class="form-group">
                            <label class="control-label">Nombre</label>
                                <div class="form-control-cont">
                                    <input type="text" name="nombre" class="form-control full" placeholder="Nombre" data-validation="required" data-validation-error-msg="Campo obligatorio">
                                </div>
                            </div>
                       
                        <div class="form-group">
                            <label class="control-label">Fecha Inicio</label>
                            <div class="form-control-cont">
                                <input class="form-control full" name="fechaInicio" type="text" id="fechaInicio" data-validation="date" data-validation-help="Formato de fecha yy-mm-dd">
                            </div>
                        </div>
                        <script>
                            $( function() {
                                $( "#fechaInicio" ).datepicker();
                                $( "#fechaInicio" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
                            } );
                        </script>
                        
                        <div class="form-group">
                            <label class="control-label">Fecha límite inscripción</label>
                            <div class="form-control-cont">
                                <input class="form-control full" name="fechaLimite" type="text" id="fechaLimite" data-validation="date"  data-validation-help="Formato de fecha yy-mm-dd">
                            </div>
                        </div>
                        <script>
                            $( function() {
                                $( "#fechaLimite" ).datepicker();
                                $( "#fechaLimite" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
                            } );
                        </script>
                        <div class="form-group">
                            <label class="control-label">Tipo Torneo</label>
                            <div class="form-control-cont">
                                <select class="form-control full" name="tipo" data-validation="required"  data-validation-error-msg="Campo obligatorio">
                                    <option value="0">Soccer</option>
                                    <option value="1">Rápido</option>
                                </select>
                            </div>
                        </div>
                         <h1>Días de Juego</h1>
                        <div class="checkbox checkbox-primary">
                                    <input id="checkbox" type="checkbox" value="Lunes" name="dia[]" >
                                    <label for="checkbox" >
                                       Lunes
                                    </label>
                        </div>
                          <div class="checkbox checkbox-primary">
                                    <input id="checkbox1" type="checkbox" value="Martes" name="dia[]" >
                                    <label for="checkbox1" >
                                       Martes
                                    </label>
                        </div>
                          <div class="checkbox checkbox-primary">
                                    <input id="checkbox2" type="checkbox" value="Miercoles" name="dia[]" >
                                    <label for="checkbox2" >
                                       Miércoles
                                    </label>
                        </div>
                          <div class="checkbox checkbox-primary">
                                    <input id="checkbox3" type="checkbox" value="Jueves" name="dia[]" >
                                    <label for="checkbox3" >
                                       Jueves
                                    </label>
                        </div>
                          <div class="checkbox checkbox-primary">
                                    <input id="checkbox4" type="checkbox" value="Viernes" name="dia[]">
                                    <label for="checkbox4" >
                                       Viernes
                                    </label>
                        </div>
                        <center><input type="submit" class="btn btn-success" value="Crear" /></center>
                    </form>
                    
                </div>
<?php
     Notify::alert_if(
            'Operación Realizada Exitosamente',
            'La operación se realizó exitosamente',
            'Aceptar',
            isset($_GET['n']) && strcasecmp($_GET['n'],'done') == 0);
    
    Notify::alert_if(
            'Nombre del torneo ya existe',
            'El nombre del torneo que ingresó ya existe, por favor ingrese otro nombre para el nuevo torneo',
            'Reintentar',
            isset($_GET['n']) && strcasecmp($_GET['n'],'usado') == 0); 
    
    Notify::alert_if(
            'No se ingresó nombre de torneo',
            'No ingresó un nombre de torneo',
            'Reintentar',
            isset($_GET['n']) && strcasecmp($_GET['n'],'noname') == 0); 
    
    Notify::alert_if(
            'Deben seleccionarse al menos 4 días de juego',
            'Por favor ingrese al menos 4 días de juego.',
            'Reintentar',
            isset($_GET['n']) && strcasecmp($_GET['n'],'nodays') == 0);

    Notify::alert_if(
            'Deben seleccionarse al menos 4 días de juego ',
            'Por favor ingrese al menos 4 días de juego.',
            'Reintentar',
            isset($_GET['n']) && strcasecmp($_GET['n'],'zdays') == 0);
?>
<!--Mensajes para esta pantalla
     

CONSULTAS PARA ESTA PANTALLA

insert into torneo (Nombre,Tipo_Torneo, Fecha_Inicio, Fecha_Fin, Fecha_Cierre_Inscripcion) values("NombreTorneo",TipoTorneo,"2009-10-09","2009-12-08","2009-12-08");
select IDTorneo from Torneo
where Nombre like "NuevoTorneo";

Antes de insertar los dias del torneo revisar si ya tiene 4 dias asignados:

select count(*) from Torneo_grupo g, Torneo t
where g.IDTorneo=t.IDTorneo 
and t.Nombre like "NuevoTorneo";

Si es menor a 4 se puede realizar el siguiente insert para cada uno de los dias de juego, 
%Dia es el dato seleccionado con los checkbox:

insert into Torneo_Grupo
values ((select idGrupo from Grupo where dia like "%Dia" ),(select IDTorneo from Torneo
where Nombre like "NuevoTorneo"));




-->


   <script>
    function submitForm(){
        document.querySelector("#eliminarEquipo").submit();
    }
</script>

   <div id="content-title">
    <h2>Eliminar Equipo Definitivamente</h2>
</div>
<div id="content-body">
    <div class="row center-xs center-md center-lg">
        <div class="box">
            <?php
                adiosEquipo();
            ?>
            <form id="eliminarEquipo" method="post" class="form-control-cont" role="form" action="eliminarEquipo">

                <div class="form-control-cont">
                    <label class="control-label">Nombre de equipo:</label>
                    <div class="form-control-cont">
                        <select onChange="change(this.value)" name="equipo" class="form-control full" id="EquipoSelect" data-validation="required"  data-validation-error-msg="Seleccione un equipo a eliminar antes de proceder">
                            <?php
                                listaEquipos();
                            ?>
                        </select>
                    </div>
                </div>
                <br>
                <br>
                <center>
                <a id="submitFormButton" class="btn btn-success" name="Aceptar">Aceptar</a>
                </center>
            </form>
        </div>                        
    </div> 
</div>
 <!--Mensaje de confirmacion-->
<?php
    Notify::confirm_activedById('Confirmación de Eliminación de Equipo',
            '¿Está seguro que desea eliminar el equipo? Se eliminará toda la información relacionada a este equipo.',
            "submitFormButton", "submitForm()");
?>

 <!--Consultas
me muestra todos los equipos que no estan actualente en un torneo en el combo box de la pantalla
select nombreEquipo from equipo where idEquipo not in(select idEquipo from equipo_torneo);
me muestra los datos del capitan de este equipo en el label de al ladito (en la pantalla)
select Nombre,Apellidos from Usuario u, capitan c,equipo e where u.correo=c.correo and c.correo=e.correo and nombreEquipo="al nombre seleccionado del combo box";
obtengo el correo de ese capitan
select correo from equipo where NombreEquipo="al nombre seleccionado del combo box";
lo meto en jugador
insert into jugador (IDJugador,Correo) values (null,"correo de consulta anterior");
elimino su equipo y su cuenta de capitan , le cambio sus privilegios de usuario a 0
delete from equipo where correo="Hector@outlook.com"; -- es el correo de la consulta anterior
delete from capitan where correo="Hector@outlook.com";--tambien es el correo de la consulta anterior
update usuario set EsCapitan='0' where correo="Hector@outlook.com";

-->

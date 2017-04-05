<div id="content-title">
    <h2>Solicitudes de jugadores para unirse a tu equipo</h2>
</div>
<div id="content-body">
    <center>
    <?php
        aceptarRechazarJugador();
    ?>

    <form class="form-control" role="form" style="text-align:left;" action="aceptarPeticionJugador" method="post">
    <h3>Selecciona a los jugadores que desees aceptar en tu equipo</h3>
    <?php
        showTable_jugadores()
    ?>                    
    <br>
    <br>
    <div align="center">
        <input type="submit" class="btn btn-success" name="Aceptar" value="Aceptar"/>
        <input type="submit" class="btn btn-danger btn-rounded" name="Rechazar" value="Rechazar"/>
    </div>
    </form>
    </center>

    <script>
        function myFunction2() {
            alert("No seleccionaste ninguna casilla");
        }
    </script>

    <script>
        function myFunction() {
            var x;
            if (confirm("¿Estás seguro de añadir los jugadores seleccionados a tu equipo?") == true) {
                x = "You pressed OK!";
            } else {
                x = "You pressed Cancel!";
            }
            document.getElementById("demo").innerHTML = x;
        }
    </script>

    <script>
        function myFunction1() {
            var x;
            if (confirm("¿Estás seguro de rechazar las solicitudes de los jugadores seleccionados?") == true) {
                x = "You pressed OK!";
            } else {
                x = "You pressed Cancel!";
            }
            document.getElementById("demo").innerHTML = x;
        }
    </script>
</div>
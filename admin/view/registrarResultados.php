<div id="content-title">
    <h2>Registrar Resultados</h2>
</div>
<div id="content-body">
    <h3>Resultados de Torneo de Fútbol Soccer</h3>
    <table class="table table-striped ">
        <thead>
            <tr>
                <th>#</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Grupo</th>
                <th>Equipo</th>
                <th>Puntos</th>
                <th>Puntos</th>
                <th>Equipo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>06/03/17</td>
                <td>12:30 Hrs</td>
                <td>A</td>
                <td>Cerveros</td>
                <td>3</td>
                <td>0</td>
                <td>Semillerianos</td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>06/03/17</td>
                <td>2:30 Hrs</td>
                <td>B</td>
                <td>BFFs</td>
                <td>3</td>
                <td>2</td>
                <td>ESCOM UNITED</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>08/03/17</td>
                <td>12:30 Hrs</td>
                <td>C</td>
                <td>ESCOMips</td>
                <td>1</td>
                <td>2</td>
                <td>Vengadores</td>
            </tr>
        </tbody>
    </table>
    <br>
    <div align="center">
        <button type="button" class="btn btn-success" onclick="myFunction3()">Guardar Cambios</button>

        <script>
            function myFunction3() {
                alert("No se han podido guardar los cambios. Uno o más partidos no se han llevado a cabo.");
            }
        </script>
        <script>
            function myFunction2() {
                var x;
                if (confirm("No se han podido guardar los cambios. El partido no se ha llevado a cabo.") == true) {
                    x = "You pressed OK!";
                } else {
                    x = "You pressed Cancel!";
                }
                document.getElementById("demo").innerHTML = x;
            }
        </script>


        <br>
        <br>
    </div>
</div>
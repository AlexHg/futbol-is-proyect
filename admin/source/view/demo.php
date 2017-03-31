<div id="content-title">
    <h2>Elements</h2>
</div>
<div id="content-body">

    <div>
        <h3>Themify Icon</h3>
        <a href="https://themify.me/themify-icons">https://themify.me/themify-icons</a>
        <br><br>
    </div>
    <h3>Alertas</h3>
    <button type="button" class="button btn btn-primary" data-type="nombrealerta">Mostrar alerta</button>
    <div class="overlay-container">
        <div class="window-container nombrealerta">
            <h3>Confirmación de eliminación de jugador</h3> 
            ¿Esta seguro que desea eliminar al jugador Juan Pérez del equipo Toros?<br/>
            <br/>
            <center>
            <button class="btn btn-success close" >Aceptar</button>
            <button class="btn btn-danger btn-rounded close" >Cancelar</button>
            </center>
        </div>
    </div>
    <h3>Botones</h3>
    <button type="button" class="btn btn-white">White</button>
    <button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-warning btn-rounded">Warning</button>
    <button type="button" class="btn btn-danger btn-rounded">Danger</button>
    <button type="button" class="btn btn-dark btn-rounded">Dark</button>
    <br><br>
    
    <h3>Formulario</h3>
    <form class="form-horizontal" role="form">
        <div class="form-group">
            <label class="control-label">Input</label>
                <div class="form-control-cont">
                    <input type="text" class="form-control full" value="Texto aqui">
                </div>
            </div>
        <div class="form-group">
            <label class="control-label" for="example-email">Correo</label>
            <div class="form-control-cont">
                <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label">Password</label>
            <div class="form-control-cont">
                <input type="password" class="form-control" value="password">
            </div>
        </div>

        <div class="form-group">
            <label >Placeholder</label>
            <div class="form-control-cont">
                <input type="text" class="form-control" placeholder="placeholder">
            </div>
        </div>
        <div class="form-group">
            <label class=" control-label">Text-area</label>
            <div class="form-control-cont">
                <textarea class="form-control" rows="5"></textarea>
            </div>
        </div>
    </form>
    <form class="form-horizontal" role="form">
        <div class="form-group">
            <label class="control-label">Prop:Readonly</label>
            <div class="form-control-cont">
                <input type="text" class="form-control" readonly="" value="Readonly value">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label">Prop:Disabled</label>
            <div class="form-control-cont">
                <input type="text" class="form-control" disabled="" value="Disabled value">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label">Helping text</label>
            <div class="form-control-cont">
                <input type="text" class="form-control" placeholder="Helping text">
                <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label">Input Select</label>
            <div class="form-control-cont">
                <select class="form-control full">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label">Multiple select</label>
            <div class="form-control-cont">
                <select multiple="" class="form-control full">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
        </div>
    </form>
    <div>
        <div>
            <div>
                
                
                <div class="checkbox">
                    <input id="checkbox0" type="checkbox">
                    <label for="checkbox0">
                        class: checkbox
                    </label>
                </div>
                <div class="checkbox checkbox-custom">
                    <input id="checkbox111" type="checkbox">
                    <label for="checkbox111">
                        class: checkbox checkbox-custom
                    </label>
                </div>
                <div class="checkbox checkbox-primary">
                    <input id="checkbox2" type="checkbox" checked="">
                    <label for="checkbox2">
                        class: checkbox checkbox-primary
                    </label>
                </div>
                <div class="checkbox checkbox-success">
                    <input id="checkbox3" type="checkbox">
                    <label for="checkbox3">
                        class: checkbox checkbox-success
                    </label>
                </div>
                <div class="checkbox checkbox-info">
                    <input id="checkbox4" type="checkbox">
                    <label for="checkbox4">
                        class: checkbox checkbox-info
                    </label>
                </div>
                <div class="checkbox checkbox-warning">
                    <input id="checkbox5" type="checkbox" checked="">
                    <label for="checkbox5">
                        class: checkbox checkbox-warning
                    </label>
                </div>
                <div class="checkbox checkbox-danger">
                    <input id="checkbox6" type="checkbox" checked="">
                    <label for="checkbox6">
                        class: checkbox checkbox-danger
                    </label>
                </div>
                <div class="checkbox checkbox-dark">
                    <input id="checkbox6c" type="checkbox">
                    <label for="checkbox6c">
                        class: checkbox checkbox-dark
                    </label>
                </div>

                <div class="checkbox checkbox-single">
                    <input type="checkbox" id="singleCheckbox1" value="option1" aria-label="Single checkbox One">
                    <label>class: checkbox checkbox-single</label>
                </div>
                <div class="checkbox checkbox-primary checkbox-single">
                    <input type="checkbox" id="singleCheckbox2" value="option2" checked="" aria-label="Single checkbox Two">
                    <label>class: checkbox checkbox-primary checkbox-single</label>
                </div>

                <div class="checkbox checkbox-inline">
                    <input type="checkbox" id="inlineCheckbox1" value="option1">
                    <label for="inlineCheckbox1"> class: checkbox checkbox-inline </label>
                </div>
                <div class="checkbox checkbox-success checkbox-inline">
                    <input type="checkbox" id="inlineCheckbox2" value="option1" checked="">
                    <label for="inlineCheckbox2"> class: checkbox checkbox-success checkbox-inline </label>
                </div>
                <div class="checkbox checkbox-pink checkbox-inline">
                    <input type="checkbox" id="inlineCheckbox3" value="option1">
                    <label for="inlineCheckbox3"> class: checkbox checkbox-pink checkbox-inline </label>
                </div>
            </div>
        </div>

        <div>
            <div>
                <div class="checkbox checkbox-custom checkbox-circle">
                    <input id="checkbox08" type="checkbox" checked="">
                    <label for="checkbox08">
                        class: checkbox checkbox-custom checkbox-circle
                    </label>
                </div>

                <div class="checkbox checkbox-circle">
                    <input id="checkbox7" type="checkbox">
                    <label for="checkbox7">
                        class: checkbox checkbox-circle
                    </label>
                </div>
                <div class="checkbox checkbox-info checkbox-circle">
                    <input id="checkbox8" type="checkbox" checked="">
                    <label for="checkbox8">
                        class: checkbox checkbox-info checkbox-circle
                    </label>
                </div>
                <div class="checkbox checkbox-primary checkbox-circle">
                    <input id="checkbox-9" type="checkbox">
                    <label for="checkbox-9">
                        class: checkbox checkbox-primary checkbox-circle
                    </label>
                </div>
                <div class="checkbox checkbox-success checkbox-circle">
                    <input id="checkbox-10" type="checkbox" checked="">
                    <label for="checkbox-10">
                        class: checkbox checkbox-success checkbox-circle
                    </label>
                </div>
                <div class="checkbox checkbox-warning checkbox-circle">
                    <input id="checkbox-11" type="checkbox">
                    <label for="checkbox-11">
                        class: checkbox checkbox-warning checkbox-circle
                    </label>
                </div>
                <div class="checkbox checkbox-danger checkbox-circle">
                    <input id="checkbox-12" type="checkbox" checked="">
                    <label for="checkbox-12">
                        class: checkbox checkbox-danger checkbox-circle
                    </label>
                </div>

                <div class="checkbox checkbox-dark checkbox-circle">
                    <input id="checkbox-15" type="checkbox" checked="">
                    <label for="checkbox-15">
                        class: checkbox checkbox-dark checkbox-circle
                    </label>
                </div>


                <p >Checkboxes without label text </p>
                <div class="checkbox checkbox-single checkbox-circle">
                    <input type="checkbox" id="singleCheckbox11" value="option1" aria-label="Single checkbox One">
                    <label></label>
                </div>
                <div class="checkbox checkbox-primary checkbox-single checkbox-circle">
                    <input type="checkbox" id="singleCheckbox21" value="option2" checked="" aria-label="Single checkbox Two">
                    <label></label>
                </div>


                <p>Inline checkboxes</p>
                <div class="checkbox checkbox-inline checkbox-circle">
                    <input type="checkbox" id="inlineCheckbox11" value="option1">
                    <label for="inlineCheckbox11"> Inline One </label>
                </div>
                <div class="checkbox checkbox-success checkbox-inline checkbox-circle">
                    <input type="checkbox" id="inlineCheckbox21" value="option1" checked="">
                    <label for="inlineCheckbox21"> Inline Two </label>
                </div>
                <div class="checkbox checkbox-primary checkbox-inline checkbox-circle">
                    <input type="checkbox" id="inlineCheckbox31" value="option1">
                    <label for="inlineCheckbox31"> Inline Three </label>
                </div>

            </div>
        </div>

        <div>
            <div>

                <h5>Disabled</h5>

                <p>
                    Disabled state also supported.
                </p>

                <div class="checkbox">
                    <input id="checkbox9" type="checkbox" disabled="">
                    <label for="checkbox9">
                        class="checkbox"
                    </label>
                </div>
                <div class="checkbox checkbox-custom">
                    <input id="checkbox10" type="checkbox" disabled="" checked="">
                    <label for="checkbox10">
                        class="checkbox checkbox-custom"
                    </label>
                </div>
                <div class="checkbox checkbox-warning checkbox-circle">
                    <input id="checkbox110" type="checkbox" disabled="" checked="">
                    <label for="checkbox110">
                        class="checkbox checkbox-warning checkbox-circle"
                    </label>
                </div>
                <div class="checkbox checkbox-info">
                    <input id="checkbox12" type="checkbox" disabled="" checked="">
                    <label for="checkbox12">
                        class="checkbox checkbox-info"
                    </label>
                </div>
                <div class="checkbox checkbox-primary">
                    <input id="checkbox13" type="checkbox" disabled="" checked="">
                    <label for="checkbox13">
                        class="checkbox checkbox-primary" 
                    </label>
                </div>
                <div class="checkbox checkbox-danger checkbox-circle">
                    <input id="checkbox14" type="checkbox" disabled="" checked="">
                    <label for="checkbox14">
                        class="checkbox checkbox-danger checkbox-circle"
                    </label>
                </div>

            </div>
        </div>

    </div>
    <h3>Tabla Basica</h3>
    <table class="table table-striped ">
        <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table> 
    <h3>Graficas</h3>
    <h5>Stacked Bar Chart</h5>
    
    <div id="morris-bar-stacked" ></div>

    <h5>Area Chart</h5>
    
    <div id="morris-area-example" ></div>

    <h5>Line Chart</h5>
    
    <div id="morris-line-example"></div>
                    
    <h5>Bar Chart</h5>
    
    <div id="morris-bar-example"></div>
                    
    <h4>Area Chart with Point</h4>
    
    <div id="morris-area-with-dotted"></div>
                    
    <h5>Donut Chart</h5>
    
    <div id="morris-donut-example"></div>
    <!--
    <div id="website-stats" style="height: 320px; padding: 0px; position: relative;" class="flot-chart"></div>
    <div id="website-stats1" style="height: 320px; padding: 0px; position: relative;" class="flot-chart"></div>
    <div id="flotRealTime" style="height: 320px; padding: 0px; position: relative;" class="flot-chart"></div>
    <div id="donut-chart">
        <div id="donut-chart-container" style="height: 320px; padding: 0px; position: relative;" class="flot-chart"></div>
    </div>
    <div id="pie-chart" style="height: 320px; padding: 0px; position: relative;" class="flot-chart"></div>
    <div id="ordered-bars-chart" style="height: 320px; padding: 0px; position: relative;" class="flot-chart"></div>
    <div id="line-chart-alt" style="height: 320px; padding: 0px; position: relative;" class="flot-chart"></div>
    <div id="combine-chart">
        <div id="combine-chart-container" style="height: 320px; padding: 0px; position: relative;" class="flot-chart"></div>
    </div>
    -->
</div>



<?php
class Notify{
    public static function alert($title, $content, $acept){
        $cont = rand();
        ?>
            <button class="modal" style="display:none;" data-modal="modal-<?php echo $cont ?>">Modal!</button>
            <div class="modal" id="modal-<?php echo $cont ?>" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-header">
                        <h2>Datos Incorrectos</h2>
                        <a href="#" class="modal-close" aria-hidden="true">×</a>
                    </div>
                    <div class="modal-body">
                    Los datos ingresados son incorrectos o no se encuentran registrados, favor de verificarlos</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#"><button  class="btn btn-success">Reintentar!</button></a>
                    </div>
                </div>
            </div>

            <script> 
                document.addEventListener("DOMContentLoaded", function() {
                    document.querySelector("[data-modal=modal-<?php echo $cont ?>]").click();
                });
            </script>
        <?php 
    }
    public static function Login_incorrect(){
         $cont = rand();
        if(isset($_GET['n']) && strcasecmp($_GET['n'],'nofound') == 0){ ?>
            <button class="modal" style="display:none;" data-modal="modal-<?php echo $cont ?>">Modal!</button>
            <div class="modal" id="modal-<?php echo $cont ?>" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-header">
                        <h2>Datos Incorrectos</h2>
                        <a href="#" class="modal-close" aria-hidden="true">×</a>
                    </div>
                    <div class="modal-body">
                    Los datos ingresados son incorrectos o no se encuentran registrados, favor de verificarlos</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#"><button  class="btn btn-success">Reintentar!</button></a>
                    </div>
                </div>
            </div>

            <script> 
                document.addEventListener("DOMContentLoaded", function() {
                    document.querySelector("[data-modal=modal-<?php echo $cont ?>]").click();
                });
            </script>
        <?php }
    }
}

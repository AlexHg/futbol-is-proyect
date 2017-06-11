<?php
class Notify{
    public static function alert_activedById($title, $content, $acept, $id){
        $cont = rand();
        ?>
            <button class="modal" style="display:none;" data-modal="modal-<?php echo $cont ?>">Modal!</button>
            <div class="modal" id="modal-<?php echo $cont ?>" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-header">
                        <h2><?php echo $title ?></h2>
                        <a href="#" class="modal-close" aria-hidden="true">×</a>
                    </div>
                    <div class="modal-body">
                    <?php echo $content ?></p>
                    </div>
                    <div class="modal-footer">
                        <a href="#"><button  class="btn btn-success"><?php echo $acept ?></button></a>
                    </div>
                </div>
            </div>

            <script> 
                document.querySelector("#<?php echo $id ?>").addEventListener("click", function() {
                    document.querySelector("[data-modal=modal-<?php echo $cont ?>]").click();
                });
            </script>
        <?php  
    }
    public static function alert_if($title, $content, $acept, $conditional){
        if($conditional == true){
            $cont = rand();
            ?>
                <button class="modal" style="display:none;" data-modal="modal-<?php echo $cont ?>">Modal!</button>
                <div class="modal" id="modal-<?php echo $cont ?>" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-header">
                            <h2><?php echo $title ?></h2>
                            <a href="#" class="modal-close" aria-hidden="true">×</a>
                        </div>
                        <div class="modal-body">
                        <?php echo $content ?></p>
                        </div>
                        <div class="modal-footer">
                            <a href="#"><button  class="btn btn-success"><?php echo $acept ?></button></a>
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
    }
    public static function alert_if_and($title, $content, $conditional, $function){
        if($conditional == true){
            $cont = rand();
            ?>
                <button class="modal" style="display:none;" data-modal="modal-<?php echo $cont ?>">Modal!</button>
                <div class="modal" id="modal-<?php echo $cont ?>" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-header">
                            <h2><?php echo $title ?></h2>
                            <a href="#" class="modal-close" aria-hidden="true">×</a>
                        </div>
                        <div class="modal-body">
                        <?php echo $content ?></p>
                        </div>
                        <div class="modal-footer">
                            <a href="#"><button  class="btn btn-success" onclick="<?php echo $function ?>">Aceptar</button></a>
                        </div>
                    </div>
                </div>

                <script> 
                function goToLogin(){
                    window.location="iniciarSesion"
                }
                    document.addEventListener("DOMContentLoaded", function() {
                        document.querySelector("[data-modal=modal-<?php echo $cont ?>]").click();
                    });
                </script>
            <?php  
        }
    }
    public static function alert($title, $content, $acept){
        $cont = rand();
        ?>
            <button class="modal" style="display:none;" data-modal="modal-<?php echo $cont ?>">Modal!</button>
            <div class="modal" id="modal-<?php echo $cont ?>" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-header">
                        <h2><?php echo $title ?></h2>
                        <a href="#" class="modal-close" aria-hidden="true">×</a>
                    </div>
                    <div class="modal-body">
                    <?php echo $content ?></p>
                    </div>
                    <div class="modal-footer">
                        <a href="#"><button  class="btn btn-success"><?php echo $acept ?></button></a>
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



    public static function confirm_activedById($title, $content, $id, $function){
        $cont = rand();
        ?>
            <button class="modal" style="display:none;" data-modal="modal-<?php echo $cont ?>">Modal!</button>
            <div class="modal" id="modal-<?php echo $cont ?>" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-header">
                        <h2><?php echo $title ?></h2>
                        <a href="#" class="modal-close" aria-hidden="true">×</a>
                    </div>
                    <div class="modal-body">
                    <?php echo $content ?></p>
                    </div>
                    <div class="modal-footer">
                        <a href="#"><button  class="btn btn-success" onclick="<?php echo $function ?>">Aceptar</button></a>
                        <a href="#"><button  class="btn btn-danger">Cancelar</button></a>
                    </div>
                </div>
            </div>

            <script> 
                document.querySelector("#<?php echo $id ?>").addEventListener("click", function() {
                    document.querySelector("[data-modal=modal-<?php echo $cont ?>]").click();
                });
            </script>
        <?php  
    }
    public static function confirm_if($title, $content, $conditional, $function){
        if($conditional == true){
            $cont = rand();
            ?>
                <button class="modal" style="display:none;" data-modal="modal-<?php echo $cont ?>">Modal!</button>
                <div class="modal" id="modal-<?php echo $cont ?>" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-header">
                            <h2><?php echo $title ?></h2>
                            <a href="#" class="modal-close" aria-hidden="true">×</a>
                        </div>
                        <div class="modal-body">
                        <?php echo $content ?></p>
                        </div>
                        <div class="modal-footer">
                            <a href="#"><button  class="btn btn-success" onclick="<?php echo $function ?>">Aceptar</button></a>
                            <a href="#"><button  class="btn btn-danger">Cancelar</button></a>
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
    }
    public static function confirm($title, $content, $function){
        $cont = rand();
        ?>
            <button class="modal" style="display:none;" data-modal="modal-<?php echo $cont ?>">Modal!</button>
            <div class="modal" id="modal-<?php echo $cont ?>" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-header">
                        <h2><?php echo $title ?></h2>
                        <a href="#" class="modal-close" aria-hidden="true">×</a>
                    </div>
                    <div class="modal-body">
                    <?php echo $content ?></p>
                    </div>
                    <div class="modal-footer">
                        <a href="#"><button  class="btn btn-success" onclick="<?php echo $function ?>">Aceptar</button></a>
                        <a href="#"><button  class="btn btn-danger">Cancelar</button></a>
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
    
}

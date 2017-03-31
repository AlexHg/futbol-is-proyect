<?php
class View{
    public function render($path, $_VIEW = NULL){
        require View::path_base().$path.".php";
    }
    public function path_base(){
        return "source/view/";
    }
}
<?php
class View{
    public function render($path, $_VIEW = NULL){
        require View::path_base().$path.".php";
    }
    public function path_complete($path){
        return View::path_base().$path.".php";
    }
    public function path_base(){
        return "source/view/";
    }
    public function print_path($path){
        echo View::path_base().$path.".php";
    }
}
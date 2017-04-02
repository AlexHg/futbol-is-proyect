<?php
class View{
    public static function render($path, $_VIEW = NULL){
        require View::path_base().$path.".php";
    }
    public static function path_complete($path){
        return View::path_base().$path.".php";
    }
    public static function path_base(){
        return "view/";
    }
    public static function print_path($path){
        echo View::path_base().$path.".php";
    }
}
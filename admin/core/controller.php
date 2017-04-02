<?php
class Controller{
    public static function run($path, $_CONTROLLER = NULL){
        require Controller::path_base().$path.".php";
    }
    public static function path_complete($path){
        return Controller::path_base().$path.".php";
    }
    public static function path_base(){
        return "controller/";
    }
    public static function print_path($path){
        echo Controller::path_base().$path.".php";
    }
}
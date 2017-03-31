<?php
class Controller{
    public function run($path, $_CONTROLLER = NULL){
        require Controller::path_base().$path.".php";
    }
    public function path_complete($path){
        return Controller::path_base().$path.".php";
    }
    public function path_base(){
        return "controller/";
    }
    public function print_path($path){
        echo Controller::path_base().$path.".php";
    }
}
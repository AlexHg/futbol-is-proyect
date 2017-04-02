<?php
//require "core/DataBase.php";

class Model{
    public static function load($path){
        require Model::path_base().$path.".php";
    }
    public static function path_complete($path){
        return Model::path_base().$path.".php";
    }
    public static function path_base(){
        return "model/";
    }
    public static function print_path($path){
        echo Model::path_base().$path.".php";
    }
}




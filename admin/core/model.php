<?php
//require "core/DataBase.php";

class Model{
    public function use($path){
        require Model::path_base().$path.".php";
    }
    public function path_complete($path){
        return Model::path_base().$path.".php";
    }
    public function path_base(){
        return "model/";
    }
    public function print_path($path){
        echo Model::path_base().$path.".php";
    }
}




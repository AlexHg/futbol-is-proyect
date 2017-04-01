<?php 
Model::use("Coordinador");
Model::use("Usuario");

$admin = Coordinador::login($_POST["email"], $_POST["pass"]);
$user = Usuario::login($_POST["email"], $_POST["pass"]);

if(isset($admin) && isset($admin["Nombre"]) && isset($admin["Correo"])){
    Session::start(
        array(
            "role" => 3, 
            "rolename" => Session::roleName(3), 
            "name" => $admin["Nombre"], 
            "email" => $admin["Correo"], 
            "avatar" => ""
        )
    );
    Flight::redirect('/');
}else if(isset($user) && isset($user["Nombre"]) && isset($user["Correo"])){
    Session::start(
        array(
            "role" => intval($user["EsCapitan"])+1, 
            "rolename" => Session::roleName(intval($user["EsCapitan"])+1), 
            "name" => $user["Nombre"]." ".$user["Apellidos"], 
            "email" => $user["Correo"], 
            "avatar" => $user["Imagen"]
        )
    );
    Flight::redirect('/');
}else{
    Flight::redirect('/iniciarSesion?n=nofound');
}

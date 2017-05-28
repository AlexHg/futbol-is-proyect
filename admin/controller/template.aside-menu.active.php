<?php
function isActive($url){
    if(strcasecmp(Flight::request()->url, $url) == 0){
        echo "active";
    }
}

function listarEquipos(){
    switch($_SESSION['role']){
        case 1: // Jugador
            $equipos = Jugador::getEquipos();
            if($equipos->num_rows > 0){
                echo "<small>Jugador de:</small>";
                while ($row = $equipos->fetch_array(MYSQLI_ASSOC)) {
                echo "<br><small>&emsp;".$row['nombreEquipo']."</small>";
                }
            }else{
                echo "<small>Jugador</small>";
            }
        break;
        case 2: // Capitan
            Model::load("Equipo");
            echo "<small> Capitán de ".Equipo::getNombreByCorreo($_SESSION["email"])."</small>";
        break;
        default:
            echo "<small>".$_SESSION["rolename"]."</small>";
        break;
    }
}
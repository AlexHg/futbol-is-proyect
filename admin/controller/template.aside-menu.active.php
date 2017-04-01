<?php
function isActive($url){
    if(strcasecmp(Flight::request()->url, $url) == 0){
        echo "active";
    }
}
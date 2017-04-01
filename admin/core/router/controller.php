<?php
#CONTROLADORES
Flight::route('/action/@controller', function($controller){
    Controller::run($controller);
    Controller::print_path($controller);
});

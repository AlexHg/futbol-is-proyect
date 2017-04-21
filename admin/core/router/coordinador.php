<?php
Flight::route("/gestionarEquipos", function(){
    //Flight::redirect('/demo');
    Session::accessOnly(array("role" => 3), function(){
        #Controller::run("gestionarEquipos");
        View::render('template/ini'); #Html head, menu, header
        View::render('gestionarEquipos'); #html content
        View::render('template/fin'); #Html footer
    });
});

Flight::route("/eliminarEquipo", function(){
    //Flight::redirect('/demo');
    Session::accessOnly(array("role" => 3), function(){
        Controller::run("eliminarEquipo");
        View::render('template/ini'); #Html head, menu, header
        View::render('eliminarEquipo'); #html content
        View::render('template/fin'); #Html footer
    });
});

Flight::route("/eligeTorneo", function(){
    //Flight::redirect('/demo');
    Session::accessOnly(array("role" => 3), function(){
        Controller::run("eligeTorneo");
        View::render('template/ini'); #Html head, menu, header
        View::render('eligeTorneo'); #html content
        View::render('template/fin'); #Html footer
    });
});


Flight::route("/eliminarTorneo", function(){
    //Flight::redirect('/demo');
    Session::accessOnly(array("role" => 3), function(){
        Controller::run("eliminarTorneo");
        View::render('template/ini'); #Html head, menu, header
        View::render('eliminarTorneo'); #html content
        View::render('template/fin'); #Html footer
    });
});

Flight::route("/aceptarPeticiondeTorneo", function(){
    //Flight::redirect('/demo');
    Session::accessOnly(array("role" => 3), function(){
        Controller::run("aceptarPeticiondeTorneo");
        View::render('template/ini'); #Html head, menu, header
        View::render('aceptarPeticiondeTorneo'); #html content
        View::render('template/fin'); #Html footer
    });
});

Flight::route("/crearTorneo", function(){
    //Flight::redirect('/demo');
    Session::accessOnly(array("role" => 3), function(){
        View::render('template/ini'); #Html head, menu, header
        View::render('crearTorneo'); #html content
        View::render('template/fin'); #Html footer
    });
});

Flight::route("/bajaEquipo", function(){
    //Flight::redirect('/demo');
    Session::accessOnly(array("role" => 3), function(){
        Controller::run("bajaEquipo");
        View::render('template/ini'); #Html head, menu, header
        View::render('bajaEquipo'); #html content
        View::render('template/fin'); #Html footer
    });
});

Flight::route("/registrarResultados", function(){
    //Flight::redirect('/demo');
    Session::accessOnly(array("role" => 3), function(){
        #Controller::run("eliminarTorneo");
        View::render('template/ini'); #Html head, menu, header
        View::render('registrarResultados'); #html content
        View::render('template/fin'); #Html footer
    });
});


Flight::route("/eligeTorneo_Partido", function(){
    //Flight::redirect('/demo');
    Session::accessOnly(array("role" => 3), function(){
        Controller::run("eligeTorneo");
        View::render('template/ini'); #Html head, menu, header
        View::render('eligeTorneo_Partido'); #html content
        View::render('template/fin'); #Html footer
    });
});
Flight::route("/crearPartido", function(){
    //Flight::redirect('/demo');
    Session::accessOnly(array("role" => 3), function(){
        Controller::run("crearPartido");
        View::render('template/ini'); #Html head, menu, header
        View::render('crearPartido'); #html content
        View::render('template/fin'); #Html footer
    });
});
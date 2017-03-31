# futbol-is-proyect
Proyecto para el club de futbol de escom de la materia de Ingeniería de software

Microframework php

http://flightphp.com/learn/

Se está utilizando actualmente solo para el ruteo 



CREAR UNA RUTA NUEVA:
1. entrar a admin/routing.php
2. agregar una ruta de la forma
  Flight::route("/", function(){ //Contenido ruta- Accion a seguir });
  
  

RENDERIZAR UNA VISTA:
Normalmente se deberia de incluir en el contenido de una ruta: 

    View::render('vistaEjemplo'); <- Se llama a la vista 

Ejemplo: En la mayoria de los casos debe de seguirse la siguiente estructura

    View::render('template/ini'); <- Headers, css, metas, title...
    
    View::render('iniciarSesion'); <- Contenido
    
    View::render('template/fin'); <- Fin del documento, cierre de etiquetas de template/ini, scripts js
    
    
    
LLAMAR UN CONTROLADOR:
Hay varias maneras de llamar a un controlador:

Si queremos llamar al controlador desde el html (En un form o desde un ajax) es necesario llamarlo desde una ruta definida: action/@controller donde @controller es el nombre del controlador de forma que action/inicioSesion.submit es la ruta para acceder al controlador inicioSesion.submit.php y se usaria como se descibe en el siguiente ejemplo.

Este metodo de uso representa en la mayoria de los casos un controlador que necesita una accion del usuario para funcionar

    <form action="action/inicioSesion.submit"></form>
    
Tambien es posible correr un controlador desde el codigo php (en una vista, por ejemplo). Si tuvieramos un controlador jugadores.getJugadores.php que nos facilita un arreglo de jugadores de la BD necesaria para crear una tabla de todos ellos, la forma mas apropiada de generarla es con la funcion:

    Controller::run(jugadores.getJugadores);
    
Al llamar de ambas al controlador, en su codigo estarán disponibles las variables globales $_GET, $_POST, $_SESSION



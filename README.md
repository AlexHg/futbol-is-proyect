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

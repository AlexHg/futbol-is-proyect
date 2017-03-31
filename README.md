# futbol-is-proyect
Proyecto para el club de futbol de escom de la materia de Ingeniería de software

Microframework php

http://flightphp.com/learn/

Se está utilizando actualmente solo para el ruteo 


ESTRUCTURA DEL PROYECTO Y GUÍAS DE ESTILO:

Las vistas
    
    DEBERN IR EN LA CARPETA admin/source/view Y DEBEN TENER UN NOMBRE DESCRIPTIVO DE 
    LO QUE MUESTRAN O DE PARA QUE SIVE:
    iniciarSesion.php, registrarCuenta.php, torneoGeneral.php, tablaPartidos.php, etc.

Los controladores

    DEBEN IR EN LA CARPETA admin/controller Y DEBEN LA ESTRUCTURA DEBE SER vista.accion.php, 
    DE MODO QUE SI TENEMOS UNA VISTA perfil Y UN CONTROLADOR actualizar QUE ACTUALICE LA INFORMACIÓN DE perfil 
    EL CONTROLADOR DEBERÁ TENER EL NOMBRE perfil.actualizar.php

Los modelos
    
    DEBEN IR EN LA CARPETA admin/model Y DEBEN TENER UN NOMBRE DESCRIPTIVO DE LA 
    INFORMACIÓN QUE MANIPULA:
    jugadores.php, torneos.php, usuarios.php, partidos.php
    LOS MODELOS EXTRICTAMENTE DEBEN CONTENER UNA CLASE CON EL MISMO NOMBRE DEL ARCHIVO Y DESDE EL OBJETO SE DEBEN 
    PODER HACER TODAS LAS ACCIONES A LA BASE DE DATOS Y ESTAR LISTO PARA SER USADO DESDE LOS CONTROLADORES

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



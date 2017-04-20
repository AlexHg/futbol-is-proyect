<?php Controller::run("template.aside-menu.active"); ?>
<aside id="navigator">
    <div id="user">
        <h3>
            <span style="overflow: hidden;max-height: 19px;display: block;"><?php echo $_SESSION["name"]; ?></span>
            <small><?php echo $_SESSION["rolename"]; ?></small>
        </h3>
    </div>
    <ul>
        <?php Session::showOnly(array("role" => 1 ), function(){ ?>
            <li class="<?php isActive('/') ?>">
                <a href="home">
                    <span>
                        <i class="ti-dashboard"></i>Resumen
                    </span>
                </a>
            </li>
            <li class="submenu <?php isActive('/torneo') ?>">
                <a href="torneo">
                    <span>
                        <i class="ti-crown"></i>Torneos
                    </span>
                </a>
            </li>
            <li class="<?php isActive('/horarios') ?>">
                <a href="horarios">
                    <span><i class="ti-medall"></i>Horarios</span>
                </a>
            </li>
            <li class="submenu <?php isActive('/consultarEquipos') ?>">
                <a href="consultarEquipos">
                    <span><i class="ti-heart"></i>Equipos</span>
                    <i class="ti-angle-right submenu-arrow"></i>
                </a>
                <ul class="submenu-content">
                    <li class="<?php isActive('/registrarEquipo') ?>"><a href="registrarEquipo"><span><i class="ti-plus"></i>Nuevo Equipo</span></a></li>
                </ul>
            </li>
            <li class="submenu <?php isActive('/solicitudess') ?>">
                <a href="solicitudess">
                    <span><i class="ti-folder"></i>Solicitudes</span>
                    <i class="ti-angle-right submenu-arrow"></i>    
                </a>
                <ul class="submenu-content">
                    <li class="<?php isActive('/enviarSolicitud') ?>"><a href="enviarSolicitud"><span><i class="ti-plus"></i>Unirse a Un Equipo</span></a></li>      
                </ul>
            </li>
        <?php }) ?> 
        <?php Session::showOnly(array("role" => 2 ), function(){ ?>
            <li class="<?php isActive('/') ?>">
                <a href="home">
                    <span>
                        <i class="ti-dashboard"></i>Resumen
                    </span>
                </a>
            </li>
            <li class="submenu <?php isActive('/torneo') ?>">
                <a href="torneo">
                    <span>
                        <i class="ti-crown"></i>Torneos
                    </span>
                    <i class="ti-angle-right submenu-arrow"></i>
                </a>
                <ul class="submenu-content">
                    <li class="<?php isActive('/inscripcionTorneo') ?>"><a href="inscripcionTorneo"><span><i class="ti-pencil-alt"></i>Inscribir a Torneo</span></a></li>
                    <li class="<?php isActive('/elegirHorario') ?>"><a href="elegirHorario"><span><i class="ti-alarm-clock"></i>Elejir Horario de Partido</span></a></li>
                    <li class="<?php isActive('/modificarHorario') ?>"><a href="modificarHorario"><span><i class="ti-settings"></i>Modificar Horario de Partido</span></a></li>
                </ul>
            </li>
            <li class="<?php isActive('/horarios') ?>">
                <a href="horarios">
                    <span><i class="ti-medall"></i>Horarios</span>
                </a>
            </li>
            <li class="submenu <?php isActive('/consultarEquipos') ?>">
                <a href="#">
                    <span><i class="ti-heart"></i>Equipos</span>
                    <i class="ti-angle-right submenu-arrow"></i>
                </a>
                <ul class="submenu-content">
                    <li><a href="registrarEquipo"><span><i class="ti-plus"></i>Nuevo Equipo</span></a></li>
                </ul>
            </li>
            <li class="submenu <?php isActive('/jugadores') ?>">
                <a href="jugadores">
                    <span> 
                        <i class="ti-user"></i>Jugadores
                    </span>
                    <i class="ti-angle-right submenu-arrow"></i>
                </a>
                <ul class="submenu-content">
                    <li class="<?php isActive('/enviarInvitación') ?>"><a href="enviarInvitacion"><span><i class="ti-plus"></i>Invitar Jugador</span></a></li>
                    <li class="<?php isActive('/eliminarJugador') ?>"><a href="eliminarJugador"><span><i class="ti-minus"></i>Eliminar Jugador</span></a></li>
                </ul>
            </li>
            <li class="submenu <?php isActive('/solicitudes') ?>">
                <a href="#">
                    <span><i class="ti-folder"></i>Solicitudes</span>
                    <i class="ti-angle-right submenu-arrow"></i>    
                </a>
                <ul class="submenu-content">
                    <li class="<?php isActive('/enviarSolicitud') ?>"><a href="enviarSolicitud"><span><i class="ti-plus"></i>Unirse a Un Equipo</span></a></li>
                    <li class="<?php isActive('/aceptarSolicitudJugador') ?>"><a href="aceptarSolicitudJugador"><span><i class="ti-minus"></i>Aceptar Solicitudes</span></a></li>
                </ul>
            </li>
        <?php }) ?> 
        <?php Session::showOnly(array("role" => 3 ), function(){ ?>
            <li class="<?php isActive('/') ?>">
                <a href="home">
                    <span>
                        <i class="ti-dashboard"></i>Resumen
                    </span>
                </a>
            </li>
            <li class="submenu <?php isActive('/torneo') ?>">
                <a href="torneo">
                    <span>
                        <i class="ti-crown"></i>Torneos
                    </span>
                    <i class="ti-angle-right submenu-arrow"></i>
                </a>
                <ul class="submenu-content">
                    <li class="<?php isActive('/crearTorneo') ?>"><a href="crearTorneo"><span><i class="ti-plus"></i>Nuevo Torneo</span></a></li>
                    <li class="<?php isActive('/eliminarTorneo') ?>"><a href="eliminarTorneo"><span><i class="ti-minus"></i>Eliminar Torneo</span></a></li>
                    <li class="<?php isActive('/eligeTorneo') ?>"><a href="eligeTorneo"><span><i class="ti-close"></i>Dar Equipo de Baja</span></a></li>
                    <li class="<?php isActive('/registrarResultados') ?>"><a href="registrarResultados"><span><i class="ti-pencil-alt"></i>Registrar Resultados</span></a></li> 
                </ul>
            </li>
            <li class="<?php isActive('/horarios') ?>">
                <a href="horarios">
                    <span><i class="ti-medall"></i>Horarios</span>
                </a>
            </li>
            <li class="submenu <?php isActive('/gestionarEquipos') ?>">
                <a href="gestionarEquipos">
                    <span><i class="ti-heart"></i>Equipos</span>
                    <i class="ti-angle-right submenu-arrow"></i>
                </a>
                <ul class="submenu-content">    
                    <li class="<?php isActive('/consultarEquipos') ?>">
                        <a href="consultarEquipos">
                            <span><i class="ti-eye"></i>Consultar Equipos</span>
                        </a>
                    </li>   
                    <li class="<?php isActive('/eliminarEquipo') ?>">
                        <a href="eliminarEquipo">
                            <span><i class="ti-minus"></i>Eliminar Equipo</span>
                        </a>
                    </li>     
                </ul>
            </li>
            <li class="submenu <?php isActive('/aceptarPeticiones') ?>">
                <a href="aceptarPeticiones">
                    <span><i class="ti-folder"></i>Solicitudes</span>
                </a>
            </li>
        <?php }) ?> 
    </ul>
</aside>

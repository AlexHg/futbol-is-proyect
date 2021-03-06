<?php Controller::run("template.aside-menu.active"); ?>
<aside id="navigator">
    <div id="user">
        <h3>
            <span style="overflow: hidden;max-height: 19px;display: block;"><?php echo $_SESSION["name"]; ?></span>
            <?php listarEquipos() ?>
        </h3>
    </div>
    <ul>
        <?php Session::showOnly(array("role" => 1 ), function(){ ?>
            <li class="<?php isActive('/') ?>">
                <a href="home">
                    <span>
                        <i class="ti-hand-open"></i>Bienvenida
                    </span>
                </a>
            </li>
            <li class="submenu <?php isActive('/torneo') ?>">
                <a href="/">
                    <span>
                        <i class="ti-crown"></i>Consultar Horarios
                    </span>
                </a>
            </li>

            <li class="submenu <?php isActive('/consultarEquipos') ?>">
                <a href="#">
                    <span><i class="ti-heart"></i>Equipos</span>
                    <i class="ti-angle-right submenu-arrow"></i>
                </a>
                <ul class="submenu-content">
                    <li class="<?php isActive('/registrarEquipo') ?>"><a href="registrarEquipo"><span><i class="ti-plus"></i>Crear Equipo</span></a></li>
                </ul>
            </li>
            <li class="<?php isActive('/enviarSolicitudAEquipo') ?>">
                <a href="enviarSolicitudAEquipo"><span><i class="ti-plus"></i>Unirse a Un Equipo</span></a>
            </li>
            <li class="<?php isActive('/enviarSolicitudAEquipo') ?>">
                <a href="aceptarInvitacionEquipo">
                    <span><i class="ti-plus"></i>Aceptar invitación de Equipo</span>
                </a>
            </li>
            
        <?php }) ?>

        <?php Session::showOnly(array("role" => 2 ), function(){ ?>
            <li class="<?php isActive('/') ?>">
                <a href="home">
                    <span>
                        <i class="ti-dashboard"></i>Bienvenida
                    </span>
                </a>
            <li class="submenu <?php isActive('/torneo') ?>">
                <a href="#">
                    <span>
                        <i class="ti-crown"></i>Torneos
                    </span>
                    <i class="ti-angle-right submenu-arrow"></i>
                </a>
                <ul class="submenu-content">
                    <li class="<?php isActive('/inscripcionTorneo') ?>"><a href="inscripcionTorneo"><span><i class="ti-pencil-alt"></i>Inscribir a Torneo</span></a></li>
                </ul>
            </li>
            <li class="<?php isActive('/horarios') ?>">
                <a href="/">
                    <span><i class="ti-medall"></i>Consultar Horarios</span>
                </a>
            </li>
            <li class="submenu <?php isActive('/enviarInvitación') ?>">
                <a href="#">
                    <span> 
                        <i class="ti-user"></i>Jugadores
                    </span>
                    <i class="ti-angle-right submenu-arrow"></i>
                </a>
                <ul class="submenu-content">
                    <li class="<?php isActive('/enviarInvitación') ?>"><a href="enviarInvitacion"><span><i class="ti-plus"></i>Invitar Jugador</span></a></li>
                    <li class="<?php isActive('/eliminarJugador') ?>"><a href="eliminarJugador"><span><i class="ti-minus"></i>Gestionar Equipo</span></a></li>
                </ul>
            </li>
            <li class="submenu <?php isActive('/aceptarPeticionJugador') ?>">
                <a href="">
                    <span><i class="ti-folder"></i>Solicitudes</span>
                    <i class="ti-angle-right submenu-arrow"></i>    
                </a>
                 <ul class="submenu-content">
                    <li class="<?php isActive('/enviarInvitación') ?>"><a href="aceptarPeticionJugador"><span><i class="ti-plus"></i>Aceptar Solicitudes</span></a></li>
                </ul>

            </li>
        <?php }) ?> 
        <?php Session::showOnly(array("role" => 3 ), function(){ ?>
            <li class="<?php isActive('/') ?>">
                <a href="home">
                    <span>
                        <i class="ti-dashboard"></i>Bienvenida
                    </span>
                </a>
            </li>
            <li class="<?php isActive('/resumen') ?>">
                <a href="resumen">
                    <span>
                        <i class="ti-dashboard"></i>Resumen
                    </span>
                </a>
            </li>
            <li class="submenu <?php isActive('/torneo') ?>">
                <a href="#">
                    <span>
                        <i class="ti-crown"></i>Torneos
                    </span>
                    <i class="ti-angle-right submenu-arrow"></i>
                </a>
                <ul class="submenu-content">
                    <li class="<?php isActive('/crearTorneo') ?>"><a href="crearTorneo"><span><i class="ti-plus"></i>Crear Torneo</span></a></li>
                    <li class="<?php isActive('/eligeTorneo_Partido') ?>"><a href="eligeTorneo_Partido"><span><i class="ti-plus"></i>Crear Partido</span></a></li>
                    <li class="<?php isActive('/eliminarTorneo') ?>"><a href="eliminarTorneo"><span><i class="ti-minus"></i>Eliminar Torneo</span></a></li>
                    <li class="<?php isActive('/eligeTorneo') ?>"><a href="eligeTorneo"><span><i class="ti-close"></i>Dar de Baja Equipo</span></a></li>
                    <li class="<?php isActive('/registrarResultados') ?>"><a href="registrarResultados"><span><i class="ti-pencil-alt"></i>Registrar Resultados de los Partidos</span></a></li> 
                </ul>
            </li>
            <li class="<?php isActive('/horarios') ?>">
                <a href="/">
                    <span><i class="ti-medall"></i>Consultar Horarios</span>
                </a>
            </li>
            <li class="submenu <?php isActive('/gestionarEquipos') ?>">
                <a href="#">
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
            <li class="submenu <?php isActive('/aceptarPeticiondeTorneo') ?>">
                <a href="">
                    <span><i class="ti-folder"></i>Peticiones</span>
                </a>
                <ul class="submenu-content">    
                    <li class="<?php isActive('/consultarEquipos') ?>">
                        <a href="aceptarPeticiondeTorneo">
                            <span><i class="ti-eye"></i>Aceptar Peticiones de Inscripción</span>
                        </a>
                    </li>       
                </ul>
            </li>
        <?php }) ?> 
    </ul>
</aside>

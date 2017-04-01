<aside id="navigator">
    <div id="user">
        <h3>
            <?php echo $_SESSION["name"]; ?>
            <small><?php echo $_SESSION["rolename"]; ?></small>
        </h3>
    </div>
    <ul>
        <?php Session::showOnly(array("role" => 1 ), function(){ ?>
            <li>
                <a href="">
                    <span>
                        <i class="ti-dashboard"></i>Resumen
                    </span>
                </a>
            </li>
            <li class="submenu">
                <a href="torneo">
                    <span>
                        <i class="ti-crown"></i>Torneos
                    </span>
                </a>
            </li>
            <li>
                <a href="horarios">
                    <span><i class="ti-medall"></i>Horarios</span>
                </a>
            </li>
            <li class="submenu">
                <a href="consultarEquipos">
                    <span><i class="ti-heart"></i>Equipos</span>
                    <i class="ti-angle-right submenu-arrow"></i>
                </a>
                <ul class="submenu-content">
                    <li><a href="registrarEquipo"><span><i class="ti-plus"></i>Nuevo Equipo</span></a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                    <span><i class="ti-folder"></i>Solicitudes</span>
                    <i class="ti-angle-right submenu-arrow"></i>    
                </a>
                <ul class="submenu-content">
                    <li><a href="enviarSolicitud"><span><i class="ti-plus"></i>Unirse a Un Equipo</span></a></li>      
                </ul>
            </li>
        <?php }) ?> 
        <?php Session::showOnly(array("role" => 2 ), function(){ ?>
            <li>
                <a href="">
                    <span>
                        <i class="ti-dashboard"></i>Resumen
                    </span>
                </a>
            </li>
            <li class="submenu">
                <a href="torneo">
                    <span>
                        <i class="ti-crown"></i>Torneos
                    </span>
                    <i class="ti-angle-right submenu-arrow"></i>
                </a>
                <ul class="submenu-content">
                    <li><a href="inscripcionTorneo"><span><i class="ti-pencil-alt"></i>Inscribir a Torneo</span></a></li>
                    <li><a href="elegirHorario"><span><i class="ti-alarm-clock"></i>Elejir Horario de Partido</span></a></li>
                    <li><a href="modificarHorario"><span><i class="ti-settings"></i>Modificar Horario de Partido</span></a></li>
                </ul>
            </li>
            <li>
                <a href="horarios">
                    <span><i class="ti-medall"></i>Horarios</span>
                </a>
            </li>
            <li class="submenu">
                <a href="consultarEquipos">
                    <span><i class="ti-heart"></i>Equipos</span>
                    <i class="ti-angle-right submenu-arrow"></i>
                </a>
                <ul class="submenu-content">
                    <li><a href="registrarEquipo"><span><i class="ti-plus"></i>Nuevo Equipo</span></a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                    <span> 
                        <i class="ti-user"></i>Jugadores
                    </span>
                    <i class="ti-angle-right submenu-arrow"></i>
                </a>
                <ul class="submenu-content">
                    <li><a href="enviarInvitacion"><span><i class="ti-plus"></i>Invitar Jugador</span></a></li>
                    <li><a href="eliminarJugador"><span><i class="ti-minus"></i>Eliminar Jugador</span></a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                    <span><i class="ti-folder"></i>Solicitudes</span>
                    <i class="ti-angle-right submenu-arrow"></i>    
                </a>
                <ul class="submenu-content">
                    <li><a href="enviarSolicitud"><span><i class="ti-plus"></i>Unirse a Un Equipo</span></a></li>
                    <li><a href="aceptarSolicitudJugador"><span><i class="ti-minus"></i>Aceptar Solicitudes</span></a></li>
                </ul>
            </li>
        <?php }) ?> 
        <?php Session::showOnly(array("role" => 3 ), function(){ ?>
            <li>
                <a href="">
                    <span>
                        <i class="ti-dashboard"></i>Resumen
                    </span>
                </a>
            </li>
            <li class="submenu">
                <a href="torneo">
                    <span>
                        <i class="ti-crown"></i>Torneos
                    </span>
                    <i class="ti-angle-right submenu-arrow"></i>
                </a>
                <ul class="submenu-content">
                    <li><a href="crearTorneo"><span><i class="ti-plus"></i>Nuevo Torneo</span></a></li>
                    <li><a href="eliminarTorneo"><span><i class="ti-minus"></i>Eliminar Torneo</span></a></li>
                    <li><a href="bajaEquipo"><span><i class="ti-close"></i>Dar Equipo de Baja</span></a></li>
                    <li><a href="registrarResultados"><span><i class="ti-pencil-alt"></i>Registrar Resultados</span></a></li> 
                </ul>
            </li>
            <li>
                <a href="horarios">
                    <span><i class="ti-medall"></i>Horarios</span>
                </a>
            </li>
            <li class="submenu">
                <a href="gestionarEquipos">
                    <span><i class="ti-heart"></i>Equipos</span>
                    <i class="ti-angle-right submenu-arrow"></i>
                </a>
                <ul class="submenu-content">    
                    <li>
                        <a href="eliminarEquipo">
                            <span><i class="ti-minus"></i>Eliminar Equipo</span>
                        </a>
                    </li>     
                </ul>
            </li>
            <li class="submenu">
                <a href="aceptarPeticiones">
                    <span><i class="ti-folder"></i>Solicitudes</span>
                </a>
            </li>
        <?php }) ?> 
    </ul>
</aside>

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
        <li class="<?php isActive('/inscriptcionTorneo') ?>"><a href="inscripcionTorneo"><span><i class="ti-pencil-alt"></i>Inscribir a Torneo</span></a></li>
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
    <a href="consultarEquipos">
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
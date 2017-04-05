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
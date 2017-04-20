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
        <li class="<?php isActive('/bajaEquipo') ?>"><a href="bajaEquipo"><span><i class="ti-close"></i>Dar Equipo de Baja</span></a></li>
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
        <li class="<?php isActive('/eliminarEquipo') ?>">
            <a href="eliminarEquipo">
                <span><i class="ti-minus"></i>Eliminar Equipo</span>
            </a>
        </li>     
    </ul>
</li>
<li class="submenu <?php isActive('/aceptarPeticiondeTorneo') ?>">
    <a href="aceptarPeticiondeTorneo">
        <span><i class="ti-folder"></i>Solicitudes</span>
    </a>
</li>

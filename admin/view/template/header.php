<div style="height: 70px;"> 
    <header style="height:70px" id="topbar">
        <div id="logo">
            <div id="openMenuB"><a onclick="openMenu()"><i class="ti-menu"></i></a></div>
            <div id="closeMenuB" style="display:none!important;"><a onclick="closeMenu()"><i class="ti-menu"></i></a></div>
            <a href="/"><h1 style="display: flex;justify-content: space-between;align-items: center;"><img src="source/img/logo-FUT.png" style="height:60px; margin-right:1rem;"/>Fútbol</h1> </a>
        </div>
        <div id="topbar-op">
            <nav>
            <!--<a href="#">About</a>
                <a href="#">Docs</a>
                <a href="#">Log</a>
                <a href="#">Help</a>
                <a href="#">Contact</a>-->
            </nav>
            <nav >
                <a href="#" id="notification" style="display:none;">
                    <i class="ti-bell" style="position:relative;">
                        <span class="badge badge-danger" style="position:absolute; top:0;right:-15px;">32</span>
                    </i>
                </a>
                <ul id="notifi">
                    <li><a href="#notif1">
                        <i class="ti-bell blue" style="position:relative;"></i>
                        <h4>Notificación 1<br><small>Descripcion Notificación</small></h4>
                    </a></li>
                    <li><a href="#notif1">
                        <i class="ti-bell yellow" style="position:relative;"></i>
                        <h4>Notificación 2<br><small>Descripcion Notificación</small></h4>
                    </a></li>
                    <li><a href="#notif1">
                        <i class="ti-bell green" style="position:relative;"></i>
                        <h4>Notificación 3<br><small>Descripcion Notificación</small></h4>
                    </a></li>
                    <li><a href="#notif1">
                        <i class="ti-bell purple" style="position:relative;"></i>
                        <h4>Notificación 4<br><small>Descripcion Notificación</small></h4>
                    </a></li>
                    <li><a href="#notif1">
                        <i class="ti-bell red" style="position:relative;"></i>
                        <h4>Notificación 5<br><small>Descripcion Notificación</small></h4>
                    </a></li>
                    <li><a href="#notifications" style="background:#f7f7f7;justify-content: center;text-align: center;">
                        <h4>See all (32) notifications<br><small>Clicking here</small></h4>
                    </a></li>
                </ul>
                <a href="#" id="profile">
                    <img src="source/img/avatar/default.png" alt=""> &nbsp;&nbsp;<span>Opciones</span>
                </a>
                <ul id="profil">
                <?php Session::hideFrom(array("role" => 3 ), function(){ ?>
                    <li><a href="modificarDatos"><i class="ti-settings"></i>Modificar Datos</a></li>
                <?php }); ?>
                    <li style="border-top: 1px solid #e5e5e5;"><a href="action/sesion.cerrar"><i class="ti-power-off"></i>Cerrar sesión</a></li>

                </ul>
            </nav>
        </div>
    </header>
</div>

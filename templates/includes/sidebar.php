<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a class="brand-link">
        <img src="<?php echo IMAGES.'icon_ciis.png' ?>" alt="AdminLTE Logo" class="brand-image">
        <span class="brand-text font-weight-light">XXI CIIS </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3">

            <div class="image " style="float:left;">
                <img src="<?php echo IMAGES.'profile.png' ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="<?php echo URL.'usuario' ?>" class="d-block textNombre"></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <!--<li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-tachometer-alt"></i>
                    <p>
                    Panel Principal
                    <i class="right fa fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="<?php echo URL.'dashboard' ?>" class="nav-link">
                        <i class="fa fa-circle nav-icon"></i>
                        <p>Panel Principal</p>
                    </a>
                    </li>
                </ul>
            </li> -->
                <li class="nav-item">
                    <a href="<?php echo URL.'dashboard' ?>" class="nav-link">
                        <i class="nav-icon fa fa-tachometer-alt "></i>
                        <p style="color:#fff">
                            Panel Principal
                            <i class="right fa fa-angle-right"></i>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo URL.'dashboard/asistencia' ?>" class="nav-link">
                        <i class="nav-icon fa fa-tachometer-alt"></i>
                        <p style="color:#fff">
                            Asistencia
                            <i class="right fa fa-angle-right"></i>
                        </p>
                    </a>
                </li>

                <!--<li class="nav-item">
                <a href="<?php echo URL.'dashboard/academico' ?>" class="nav-link">
                    <i class="nav-icon fa fa-tachometer-alt"></i>
                    <p>
                    Contenido Académico
                    <i class="right fa fa-angle-right"></i>
                    </p>
                </a>
            </li> -->

                <li class="nav-item">
                    <a href="<?php echo URL.'dashboard/talleres' ?>" class="nav-link">
                        <i class="nav-icon fa fa-tachometer-alt"></i>
                        <p style="color:#fff">
                            Talleres
                            <i class="right fa fa-angle-right"></i>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo URL.'dashboard/calendario' ?>" class="nav-link">
                        <i class="nav-icon fa fa-tachometer-alt"></i>
                        <p style="color:#fff">
                            Calendario
                            <i class="right fa fa-angle-right"></i>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
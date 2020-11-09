<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a class="nav-link">Inicio</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo IMAGES.'profile.png' ?>" class="user-image" alt="User Image">
                <span class="hidden-xs textNombre"></span>
            </a>
            <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                    <img src="<?php echo IMAGES.'icon_ciis.png' ?>" class="img-circle" alt="Ciis Image">

                    <p>
                        XXI CONGRESO INTERNACIONAL DE INFORMÁTICA Y SISTEMAS
                    </p>
                </li>
                <br>
                <!-- Menu Footer-->
                <li class="user-footer">
                    <div class="pull-left">
                        <a href="<?php echo URL.'usuario' ?>" class="btn-primary btn-lg ">Perfil</a>
                    </div>

                    <div class="pull-right">
                        <a href="#" class="btn-danger btn-lg  logout">Salir</a>
                    </div>

                </li>
            </ul>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
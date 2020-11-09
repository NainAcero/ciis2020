<?php require_once INCLUDES.'inc_header_admin.php'; ?>

<style>
    img {
        height: auto;
        /* Make sure images are scaled correctly. */
        max-width: 100%;
        /* Adhere to container width. */
    }

    .btn-btn {
        font-weight: 500;
        text-align: center;
        color: #fff;
        background: #20232E;
        display: inline-block;
        padding: 14px 30px;
        border-radius: 0px;
        text-transform: uppercase;
        cursor: pointer;
        font-size: 16px;
        overflow: hidden;
        position: relative;
        border: none;
        box-shadow: none;
        vertical-align: middle;
        -webkit-transform: perspective(1px) translateZ(0);
        transform: perspective(1px) translateZ(0);
        -webkit-transition: all 0.3s ease 0s;
        -moz-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }

    .btn-btn:before {
        content: "";
        position: absolute;
        z-index: -1;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: #1281E8;
        -webkit-transform: scaleX(0);
        transform: scaleX(0);
        -webkit-transform-origin: 50%;
        transform-origin: 50%;
        -webkit-transition: all 0.3s ease 0s;
        -moz-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }

    .btn-btn:hover:before, .btn-btn:focus:before, .btn-btn:active:before {
        transform: scaleX(1);
    }

    .btn-btn:hover, .btn-btn:focus, .btn-btn:active {
        color: #fff;
    }

    /* Primary */

    .btn-btn.primary {
        background: #20232E;
        color: #fff;
    }

    .btn-btn.primary:before {
        transform: scaleX(1);
    }

    .btn-btn.primary:hover:before {
        transform: scaleX(0);
    }

    /* White */

    .btn-btn.white {
        background: #fff;
        color: #252525;
    }

    .btn-btn.white:hover {
        color: #fff;
    }

    /* White Primary */

    .btn-btn.white.primary {
        color: #fff;
    }

    .btn-btn.white.primary:before {
        transform: scaleX(1);
    }

    .btn.white.primary:hover:before {
        transform: scaleX(0);
    }

    .btn-btn.white.primary:hover {
        color: #252525;
    }
</style>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">


<form class="bee_add_new_usuario">

</form>

  <?php require_once INCLUDES.'navbar.php'; ?>

  <?php require_once INCLUDES.'sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Inicio</li>
              <li class="breadcrumb-item active">Talleres</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title" id="nombretaller">REGISTRARSE A UN TALLER</h3>

          <div class="card-tools">
            <button class=" btn-danger  btn-sm"  id="eliminarTaller">SALIR DEL TALLER</button>                     
          </div>
        </div>
        <div class="card-body bee_add_taller">

            <div class="col-lg-12 col-md-12 col-12 btnCargando">

                <div class="single-course">

                    <div class="course-body">

                        <div class="text-center">

                            <h5>Cargando ...</h5>

                            <br>

                            <div class="spinner-border" role="status">

                                <span class="sr-only">Loading...</span>

                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
     
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<?php require_once INCLUDES.'inc_footer_admin.php'; ?>

<script src="<?php echo JS.'admin.js' ?>"></script>

<script src="<?php echo JS.'talleres.js' ?>"></script>

</body>



</html>

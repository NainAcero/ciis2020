<?php require_once INCLUDES.'inc_header_admin.php'; ?>

</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <?php require_once INCLUDES.'navbar.php'; ?>

  <?php require_once INCLUDES.'sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>PERFIL DE USUARIO</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"></a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title" id="usuarioName"></h3>

            <div class="card-tools">
              <!--<button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fa fa-times"></i>
              </button> -->
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          <form class="bee_update_new_usuario text-center" novalidate id="bee_update_new_usuario">

            <div class="form-row">

                <div class="col-md-6">

                    <div class="form-group input-group">

                        <div class="input-group-prepend">

                            <span class="input-group-text"><i class="fa fa-address-book"></i></span>

                        </div>

                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombres"

                            required>

                    </div>

                    <div class="form-group input-group ">

                        <div class="input-group-prepend">

                            <span class="input-group-text"><i class="fa fa-address-book"></i></span>

                        </div>

                        <input type="text" class="form-control" name="apellido" id="apellido"

                            placeholder="Apellidos" required>

                    </div>

                    <div class="form-group input-group ">

                        <div class="input-group-prepend">

                            <span class="input-group-text"><i class="fa fa-address-card"></i></span>

                        </div>

                        <input type="number" class="form-control" name="numero_doc" id="numero_doc"

                            placeholder="N° Doc. Identidad" required>

                    </div>

                    <div class="form-group input-group ">

                        <div class="input-group-prepend">

                            <span class="input-group-text"><i class="fa fa-phone"></i></span>

                        </div>

                        <input type="text" class="form-control" name="celular" id="celular"

                            placeholder="Celular" required>

                    </div>

                    <div class="form-group input-group">

                        <div class="input-group-prepend">

                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>

                        </div>

                        <input type="email" class="form-control" name="email" id="email"

                            placeholder="Correo Electrónico" required>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group input-group ">

                        <div class="input-group-prepend">

                            <span class="input-group-text"><i class="fa fa-briefcase"></i></span>

                        </div>

                        <select name="cargo" id="cargo" class="form-control bee_add_cargos" required>

                        </select>

                    </div>

                    <div class="form-group input-group ">

                        <div class="input-group-prepend">

                            <span class="input-group-text"><i class="fa fa-building"></i></span>

                        </div>

                        <input type="text" class="form-control" name="institucion" id="institucion"

                            placeholder="Institución/Empresa" required>

                    </div>

                    <div class="form-group input-group  text-left">



                        <div class="input-group-prepend">

                            <span class="input-group-text"><i class="fa fa-graduation-cap"></i></span>

                        </div>

                        <input type="text" class="form-control" name="profesion" id="profesion"

                            placeholder="Carrera Profesional">

                    </div>

                    <div class="form-group input-group ">

                        <div class="input-group-prepend">

                            <span class="input-group-text"><i class="fa fa-globe"></i></span>

                        </div>

                        <input type="text" class="form-control" name="pais" id="pais" placeholder="País"

                            required>

                    </div>

                    <div class="form-group input-group ">

                        <div class="input-group-prepend">

                            <span class="input-group-text"><i class="fa fa-globe"></i></span>

                        </div>

                        <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Ciudad"

                            required>

                    </div>

                </div>

            </div>

            <div class="text-left">
            
                <button type="submit" class="btn-primary btn-sm"> ACTUALIZAR DATOS</button>
            </div>

            </form>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
 
          </div>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
    </section>

  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<?php require_once INCLUDES.'inc_footer_admin.php'; ?>

<script src="<?php echo JS.'admin.js' ?>"></script>

<script src="<?php echo JS.'usuario.js' ?>"></script>

</body>



</html>



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
            <h1>Bienvenido al XXI CIIS</h1>
          </div>
          <div class="col-sm-6">
            <!--<ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Inicio</li>
              <li class="breadcrumb-item active">Principal</li>
            </ol> -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <!--<h3 class="card-title"><Strong> Bienvenido al XXI CIIS</Strong></h3>-->

          <!--<div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fa fa-times"></i>
            </button>
          </div> -->
        </div>
        <div class="card-body">
        El Círculo de Estudios y Responsabilidad Social de la ESIS junto con los estudiantes de la <Strong>XXVI Promoción de la Escuela Profesional de Ingeniería en Informática y Sistemas</Strong> organizan el <strong>
        XXI Congreso Internacional de Informática y Sistemas </strong> con el fin de brindarle una gama de conocimientos, con <Strong> ponentes del más alto nivel </Strong> en los distintos campos de Ciencias de la Computación.
        </div>



        <img src="<?php echo IMAGES.'banerpresentacion.png' ?>" alt="#">
        


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

</body>



</html>



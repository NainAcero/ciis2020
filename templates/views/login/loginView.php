<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CIIS XXI</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css"> -->
    <link rel="stylesheet" href="<?php echo CSS.'font-awesome.min.css' ?>">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo CSS.'bootstrap.min.css' ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo CSS.'adminlte.min.css' ?>">
</head>
<style>
@import url('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900');

html,
body {
    background-image: url('<?php echo IMAGES."fondo-login.png"?>');
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
    font-family: 'Roboto', sans-serif;
}

.container {
    height: 100%;
    align-content: center;
}

.card {
    height: 370px;
    margin-top: auto;
    margin-bottom: auto;
    width: 400px;
    background-color: rgba(0, 0, 0, 0.6) !important;
}

.card-header h3 {
    color: white;
}


.input-group-prepend span {
    width: 50px;
    background-color: #FFC312;
    color: black;
    border: 0 !important;
}

input:focus {
    outline: 0 0 0 0 !important;
    box-shadow: 0 0 0 0 !important;

}

.login_btn {
    color: black;
    background-color: #FFC312;
    width: 100px;
}

.login_btn:hover {
    color: black;
    background-color: white;
}

.links {
    color: white;
}

.links a {
    margin-left: 4px;
}
</style>


<body class="hold-transition login-page">
    <div class="login-box text-center ">
        <div class="login-logo " style="width:400px!important;">

            <h4 style="color:white;"><b>XXI CONGRESO INTERNACIONAL DE INFORMÁTICA Y SISTEMAS</b></h4>

        </div>
        <!-- /.login-logo -->

        <div class="card ">
            <div class="card-body ">
                <a href="/2020"><img src="<?php echo IMAGES.'logo_ciis_blank.png' ?>"
                        style="width: 130px !important; margin: 0 10px 10px 5px;" alt="CIIS XXI"></a>
                <p class="login-box-msg" style="color:white;"><b>INICIO DE SESIÓN</b></p>

                <form method="post" class="bee_add_login_user">
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fa fa-envelope"></i>
                            </div>
                        </div>
                        <input type="email" name="email" class="form-control" id="email"
                            placeholder="Correo Electrónico">

                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fa fa-address-card"></i>
                            </div>
                        </div>
                        <input type="password" id="password" name="password" class="form-control"
                            placeholder="Número de Documento">

                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-12 pt-4">
                            <button type="submit" class="btn btn-primary btn-block">INGRESAR</button>
                        </div>
                        <!-- /.col -->
                    </div>

                    <p style="color:#555">Si tiene problemas  para  ingresar  comunicarse a <Strong> ciistacna@gmail.com</Strong></Strong></p>

                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?php echo JS.'jquery.min.js' ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo JS.'bootstrap.bundle.min.js' ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo JS.'adminlte.min.js' ?>"></script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="<?php echo JS.'login.js' ?>"></script>

</body>

</html>
<?php require_once INCLUDES.'inc_header_admin.php'; ?>



<style type="text/css">

th,

td {

    font-family: 'Rajdhani', sans-serif;

    border-color: #343a40 !important;

    vertical-align: middle !important;

}



table {

    border: 4 !important;

}



th {

    padding: .25rem !important;

}



.button-container {

    display: inline-block;

    position: relative;



}



.button-container a {

    position: absolute;

    bottom: 7em;

    right: 4em;

    background-color: #8F0005;

    border-radius: 1.5em;

    color: white;

    text-transform: uppercase;

    padding: 1em 1.5em;



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



.btn-btn:hover:before,

.btn-btn:focus:before,

.btn-btn:active:before {

    transform: scaleX(1);

}



.btn-btn:hover,

.btn-btn:focus,

.btn-btn:active {

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



img {

    height: auto;

    /* Make sure images are scaled correctly. */

    max-width: 100%;

    /* Adhere to container width. */

}



.wp-caption img[class*="wp-image-"] {

    display: block;

    margin-left: auto;

    margin-right: auto;

}



@media (max-width: 1000px) {

    .button-container a {

        bottom: 4em;



    }

}



@media (max-width: 720px) {



    .button-container a {

        bottom: -2em;

    }



    .button-container {

        text-align: center;

        margin: auto;

    }



}

</style>



<link rel="stylesheet" href="<?php echo CSS.'style.css' ?>">



<style>

.main-sidebar {

    margin-top: 0px;

}

</style>



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

                        <div class="col-sm-8">

                            <li class="breadcrumb-item">&nbsp<b>Importante</b>: La asistencia correspondiente se

                                habilitará al inicio de cada ponencia.</li>

                        </div>
                        <br><br>

                        <div class="col-sm-4">

                            <ol class="breadcrumb float-sm-right">

                                <li class="breadcrumb-item">Inicio</li>

                                <li class="breadcrumb-item active">Asistencia</li>

                            </ol>

                        </div>

                    </div>

                </div><!-- /.container-fluid -->

            </section>



            <form class="bee_add_new_usuario">



            </form>



            <section class="courses" style="background-color: #F7F7F7; margin-top: -5%">

                <div class=" container">

                    <div class="row bee_wrapper_ponencias">



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

                </div>

            </section>



        </div>

        <!-- /.content-wrapper -->

    </div>

    <!-- ./wrapper -->



    <?php require_once INCLUDES.'inc_footer_admin.php'; ?>



    <script src="<?php echo JS.'admin.js' ?>"></script>

    <script src="<?php echo JS.'asistenciaAdmin.js' ?>"></script>



</body>







</html>
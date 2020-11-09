<?php require_once INCLUDES.'inc_header_admin.php'; ?>
<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500;600&display=swap" rel="stylesheet">
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
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">Inicio</li>
                                <li class="breadcrumb-item active">Cronograma</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-12">
                <div class="section-title bg">
                    <h3>CRONOGRAMA DEL XXI CIIS</h3>
                    <h5>UTC/GMT -05:00 - Noviembre 2020</h5>
                    <div class="icon"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container table-responsive">
        <table class="table text-center table-bordered " style="border-collapse: collapse;">
            <thead class="thead-dark align-middle pt-1" style="border:0;">
                <tr>
                    <th class="align-middle" colspan="2" width="100" ;>HORA
                    </th>
                    <th class="align-middle" rowspan="2" width="300">
                        LUNES 09</th>
                    <th class=" align-middle" rowspan="2" width="300">
                        MARTES 10</th>
                    <th class="align-middle" rowspan="2" width="300">
                        MIÉRCOLES 11</th>
                    <th class="align-middle" rowspan="2" width="300">
                        JUEVES 12</th>
                    <th class="align-middle" rowspan="2" width="300">
                        VIERNES 13</th>
                </tr>
                <tr>
                    <th style="font-size:13px;border-top:0;">INICIO</th>
                    <th style="font-size:13px;border-top:0;">FIN</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">09:30</td>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">10:00</td>
                    <td rowspan="6" width="300" style="">
                    </td>
                    <td colspan="1" width="300" style=""></td>
                    <td colspan="1" width="300" style=""></td>
                    <td colspan="1" width="300" style=""></td>

                    <td rowspan="2" style="background-color:#FFE599; padding:5px;"> Dr. Jesús Aguilar
                        <br>- España -<br><strong>"Ciencia e Ingeniería Analítica de Datos: perspectiva y
                            prospectiva"</strong>
                    </td>
                </tr>
                <tr>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">10:00</td>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">10:30</td>

                    <td rowspan="2" style="background-color:#FFE599; padding:5px;"> Dr. Xosé López
                        García<br>- España -<br><strong>"Contenidos digitales móviles"</strong></td>
                    <td rowspan="5" style="background-color:#010415; padding:0;">

                        <a href="<?php echo URL.'feria' ?>" target="_blank" style="background-color: black;"> <img
                                class="center" src="<?php echo IMAGES.'cronograma/feria1.png' ?>" style="width: 100%;">
                        </a>


                    </td>
                    <td rowspan="2" style="background-color:#FFE599; padding:5px;"> Dr. Manuel Gago Mariño
                        <br>- España -<br><strong>"Realidad aumentada, Realidad virtual: del efecto DEMO a la necesidad
                            de una narrativa inmersiva"</strong>
                    </td>

                </tr>
                <tr>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">10:30</td>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">11:00</td>
                    <td rowspan="2" style="background-color:#FFE599; padding:5px;"> Dr. Oscar Pastor
                        <br>- España -<br><strong>"Conceptual Modeling Programming: de los requisitos del cliente al
                            código de la aplicación"</strong>
                    </td>
                </tr>
                <tr>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">11:00</td>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">11:30</td>
                    <td rowspan="1" style="background-color:#B99EFF; padding:5px;"> <strong>II Workshop</strong>
                    </td>
                    <td rowspan="3" style="background-color:#A4C2F4; padding:5px;"> <strong>Concursos</strong></td>

                </tr>
                <tr>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">11:30</td>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">12:00</td>
                    <td rowspan="2" style="background-color:#FFE599; padding:5px;"> Dr. José Pereira Fariña<br>- España
                        -<br><strong>"La lengua TIC. El nuevo idioma de los medios de comunicación"</strong></td>
                    <td rowspan="2" style="background-color:#B99EFF; padding:5px;" hidden> <strong>Concurso de
                            Conocimientos</strong>
                    </td>
                    <td rowspan="2" style="background-color:#FFE599; padding:5px;"> Dr. João Falcão e Cunha<br>-
                        Portugal
                        -<br><strong>"Procesos de Desarrollo de Software en que participan Usuarios, Organizaciones y
                            Reguladores"</strong></td>
                </tr>
                <tr>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">12:00</td>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">12:30</td>
                </tr>
                <tr>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">12:30</td>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">14:30</td>
                    <td colspan="5" width="250" class="table-danger">
                        <strong> RECESO</strong> </a>
                    </td>
                </tr>
                <tr>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">14:30</td>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">15:00</td>
                    <td rowspan="2" style="padding:5px;"> <strong></strong>
                    </td>
                    <td rowspan="3" style="padding:5px;"> <strong></strong>
                    </td>
                    <td rowspan="3" style="padding:5px;"> <br>
                        <br><strong></strong>
                    </td>
                    <td rowspan="2" style="background-color:#FFE599; padding:5px;"> Ph.D. Jo Ueyama <br>- Brasil
                        -<br><strong></strong></td>
                    <td rowspan="2" style="background-color:#FFE599; padding:5px;">Dr. João Roberto Bertini<br>- Brasil
                        -<br><strong>"Redes neuronales constructivas"</strong></td>
                </tr>
                <tr>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">15:00</td>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">15:30</td>
                </tr>
                <tr>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">15:30</td>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">16:00</td>
                    <td rowspan="1" style="background-color:#93C47D; padding:5px;"> <strong>INAUGURACIÓN</strong>
                    </td>

                    <td rowspan="1" style="background-color:#A4C2F4; padding:5px;"> <strong>Visita a los
                            talleres</strong></td>
                    <td rowspan="1" style="background-color:#A4C2F4; padding:5px;"> <strong>Resultado de
                            talleres</strong>
                    </td>
                </tr>
                <tr>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">16:00</td>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">16:30</td>
                    <td rowspan="3" style="background-color:#FFE599; padding:5px;"> Dr. Ricardo Baeza Yates<br>- Chile
                        -<br><strong>"Sesgos en la Web"</strong></td>
                    <td rowspan="2" style="background-color:#FFE599; padding:5px;"> Dr. Renato Tinós<br>- Brasil
                        -<br><strong>"Introducción a las redes neuronales artificiales"</strong></td>
                    <td rowspan="2" style="background-color:#FFE599; padding:5px;"> Dr. Enrique Luna Ramirez<br>- México
                        -<br><strong>"Repositorio para gestionar métricas de software obtenidas mediante técnicas de
                            minería de datos"</strong></td>
                    <td rowspan="2" style="background-color:#FFE599; padding:5px;"> MSc. Sebastián Flores<br>- Chile
                        -<br><strong>"Predicción de la deserción estudiantil: consideraciones prácticas y operacionales
                            para un producto de Machine Learning"</strong></td>
                    <td rowspan="2" style="background-color:#FFE599; padding:5px;">Ph.D. Gloria Piedad Gasca
                        Hurtado<br>- Colombia
                        -<br><strong>"Gamificando un escenario de trabajo"</strong></td>
                </tr>
                <tr>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">16:30</td>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">17:00</td>
                </tr>
                <tr>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">17:00</td>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">17:30</td>
                    <td rowspan="2" style="background-color:#FFE599; padding:5px;"> Dr. Marco Álvarez<br>- Perú
                        -<br><strong>"Deep learning: An overview and recent advances"</strong></td>
                    <td rowspan="2" style="background-color:#FFE599; padding:5px;"> Dr. Mauricio Ochoa Echevarria<br>-
                        Colombia-<br><strong>"Componentes de la plataforma tecnológica para predicción climática y
                            gestión de recursos hídricos"</strong></td>
                    <td rowspan="2" style="background-color:#FFE599; padding:5px;"> Ph.D. Bell Manrique Losada<br>-
                        Colombia -<br><strong>"Potencializando la cocreación de recursos educativos digitales para la
                            enseñanza online: una plataforma web 3.0"</strong></td>
                    <td rowspan="2" style="background-color:#FFE599; padding:5px;"> Mgr. Darío Mendoza<br>-
                        Ecuador-<br><strong>"Visión artificial aplicado a la robótica"</strong></td>
                </tr>
                <tr>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">17:30</td>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">18:00</td>
                    <td rowspan="1" style="background-color:#A4C2F4; padding:5px;"><strong>Presentación</strong>
                        (Talleres, Feria Tecnólogica, Concursos)</td>
                </tr>
                <tr>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">18:00</td>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">18:30</td>
                    <td rowspan="2" style="background-color:#FFE599; padding:5px;"> Mgr. David Coo<br>- Chile
                        -<br><strong>"Aplicación de modelos de Machine Learning en la clasificación de Neuropatías en
                            series de tiempo"</strong></td>


                            <td rowspan="1" style="background-color:#B99EFF; padding:5px;"><strong>Invitación a :</strong>
                            "Research Experience para Peruvian Undergraduates"</td>
                    <!--<td rowspan="2" style="background-color:#A4C2F4; padding:0;">

                        <a href="<?php echo URL.'talleres' ?>" target="_blank" style="background-color: black;"> <img
                                class="center" src="<?php echo IMAGES.'cronograma/talleres.png' ?>"
                                style="width: 100%;"> </a>
                    </td>-->

                    <td rowspan="2" style="background-color:#B99EFF; padding:5px;"> <strong>Panel<br>
                            "Conectividad y no presencialidad en las universidades"</strong></td>

                    <!--<td rowspan="2" style="background-color:#010415; padding:0;">
                        <a href="<?php echo URL.'talleres' ?>" target="_blank" style="background-color: black;"> <img
                                class="center" src="<?php echo IMAGES.'cronograma/talleres.png' ?>"
                                style="width: 100%;"> </a>
                    </td> -->

                    <td rowspan="2" style="background-color:#B99EFF; padding:5px;"> <strong>Panel<br>
                            "¿Cómo crear tu Starup?"</strong></td>

                    <td rowspan="1" style="background-color:#A4C2F4; padding:5px;"> <strong>Resultados de Concursos
                        </strong></td>
                </tr>
                <tr>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">18:30</td>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">19:00</td>
                   <td rowspan="2" style="background-color:#2886df; padding:0;">
                        <a href="<?php echo URL.'talleres' ?>" target="_blank" style="background-color: black;"> <img
                                class="center" src="<?php echo IMAGES.'cronograma/talleres.png' ?>"
                                style="width: 100%;"> </a>
                    </td> 
                    <td rowspan="2" style="background-color:#FFE599; padding:5px;">Dr. Sandeep Joshi<br>- India
                        -<br><strong>"Watermarking techniques against ambiguity attacks for color images"</strong></td>
                </tr>
                <tr>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">19:00</td>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">19:30</td>
                    <td rowspan="2" style="background-color:#FFE599; padding:5px;"> Dr. Sandeep Joshi <br>- India
                        -<br><strong>"Effective load balancing in cloud computing using virtual machine
                            migration"</strong></td>
                    
                    <td rowspan="2" style="background-color:#FFE599; padding:5px;"> Dr. Rodolfo Villarroel <br>- Chile
                        -<br><strong>"Lego Serious Play para estimación en Ingeniería de Software"</strong></td>
                        <td rowspan="1" style="background-color:#2886df; padding:0;">
                        <a href="<?php echo URL.'talleres' ?>" target="_blank" style="background-color: black;"> <img
                                class="center" src="<?php echo IMAGES.'cronograma/talleres.png' ?>"
                                style="width: 100%;"> </a>
                    </td> 



                </tr>

                <tr>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">19:30</td>
                    <td width="100" style="background-color:#DFDCE3; font-weight:bold;">20:00</td>
                    <td rowspan="1" style="padding:5px;"></td>
                    <td rowspan="1" style="padding:5px;"></td>
                    <td rowspan="1" style="background-color:#93C47D; padding:5px;"> <strong>CLAUSURA</strong>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- end tabla -->


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

</body>



</html>
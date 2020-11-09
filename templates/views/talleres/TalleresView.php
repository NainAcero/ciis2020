<?php require_once INCLUDES.'inc_header.php'; ?>
<!-- estilos para el cronograma -->
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
<!-- end estilos para el cronograma -->
<!-- portada Area -->
<section class="register-today section"
    style="padding-bottom:0 !important;padding-top:85px !important; background-color: #F7F7F7;text-align:center;">
    <img class="img-src" src="<?php echo IMAGES."talleres/portada_min.png"?>" alt="#" style="">
</section>
<!-- end portada -->
<!-- PONENTES -->
<section class="courses section" style="background: #fff">
    <div class="container">
        <h4 class="text-left title-sub" style="color:#006EB8">INSTRUCTORES</h4>
        <div class="row">
            <div class="col-12 pl-5 pr-5">
                <div class="course-slider">
                    <!-- Single Course -->
                    <div class="single-course mb-3">
                        <!-- Course Head -->
                        <div class="course-head">
                            <img src="<?php echo IMAGES.'talleres/instructores/Betty Osco Luque.png' ?>" alt="#">
                            <a href="<?php echo URL.'talleres/instructores' ?> /#BettyOscoLuque"
                                class="btn white primary">Ver más</a>
                        </div>
                        <!-- Course Body -->
                        <div class="course-body">
                            <div class="name-price text-right">
                                <div class="teacher-info " style="text-align:right;">
                                    <br><br>
                                </div>
                            </div>
                            <div class="text-center" style="height:4em;">
                                <h3 class="c-title mb-2 text-center">Ing. Betty Osco Luque
                                </h3>
                                <h6 style="color: #0056b2;">Taller de Power BI
                                </h6>
                            </div>
                        </div>
                    </div>
                    <!--/ End Single Course -->
                    <!-- Single Course -->
                    <div class="single-course mb-3">
                        <!-- Course Head -->
                        <div class="course-head">
                            <img src="<?php echo IMAGES.'talleres/instructores/Israel Nazareth Chaparro Cruz.jpg' ?>"
                                alt="#">
                            <a href="<?php echo URL.'talleres/instructores' ?>/#IsraelNazarethChaparroCruz"
                                class="btn white primary">Ver más</a>
                        </div>
                        <!-- Course Body -->
                        <div class="course-body">
                            <div class="name-price text-right">
                                <div class="teacher-info " style="text-align:right;">
                                    <br><br>
                                </div>
                            </div>
                            <div class="text-center" style="height:4em;">
                                <h3 class=" c-title mb-2 text-center">MSc.(c) Israel Chaparro Cruz </h3>
                                <h6 style="color: #0056b2;">Taller de Introducción a algoritmos de Machine Learning</h6>
                            </div>
                        </div>
                    </div>
                    <!--/ End Single Course -->
                    <!-- Single Course -->
                    <div class="single-course mb-3">
                        <!-- Course Head -->
                        <div class="course-head">
                            <img src="<?php echo IMAGES.'talleres/instructores/Jaime Freddy Polar Fuentes.png' ?>"
                                alt="#">
                            <a href="<?php echo URL.'talleres/instructores' ?>/#JaimeFreddyPolarFuentes"
                                class="btn white primary">Ver más</a>
                        </div>
                        <!-- Course Body -->
                        <div class="course-body">
                            <div class="name-price text-right">
                                <div class="teacher-info " style="text-align:right;">
                                    <br><br>
                                </div>
                            </div>
                            <div class="text-center" style="height:4em;">
                                <h3 class="c-title mb-1 text-center">Ing. Jaime Freddy Polar Fuentes </h3>
                                <h6 style="color: #0056b2;">Taller de Prestashop</h6>
                            </div>
                        </div>
                    </div>
                    <!--/ End Single Course -->
                    <!-- Single Course -->
                    <div class="single-course mb-3">
                        <!-- Course Head -->
                        <div class="course-head">
                            <img src="<?php echo IMAGES.'talleres/instructores/hugoAlatrista.png' ?>" alt="#">
                            <a href="<?php echo URL.'talleres/instructores' ?>/#HugoAlatrista"
                                class="btn white primary">Ver más</a>
                        </div>
                        <!-- Course Body -->
                        <div class="course-body">
                            <div class="name-price text-right">
                                <div class="teacher-info " style="text-align:right;">
                                    <br><br>
                                </div>
                            </div>
                            <div class="text-center" style="height:4em;">
                                <h3 class="c-title mb-1 text-center">Dr. Hugo Alatrista Salas</h3>
                                <h6 style="color: #0056b2;">Taller de Minería de datos</h6>
                            </div>
                        </div>
                    </div>
                    <!--/ End Single Course -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CRONOGRAMA -->
<div class="clients" style="background-color: #F7F7F7; margin-top: -2%">
    <div class=" container">
        <h4 class="text-left title-sub" style="color:#006EB8">CRONOGRAMA</h4>
        <div class="row justify-content-center">
            <div class="mt-3">
                <div class="section-title bg">
                    <h5>UTC/GMT -05:00 - Noviembre 2020</h5>
                </div>
            </div>
        </div>
        <div class="col-12 ">
            <!-- tabla -->
            <div class="container table-responsive">
                <table class="table text-center table-bordered " style="border-collapse: collapse;">
                    <thead class="thead-dark align-middle pt-1" style="border:0;">
                        <tr>
                            <th class="align-middle" colspan="2" width="100" ;>HORA
                            </th>
                            <th class=" align-middle" rowspan="2" colspan="1" width="600">
                                MARTES 10</th>
                            <th class="align-middle" rowspan="2" colspan="1" width="600">
                                JUEVES 12</th>
                        </tr>
                        <tr>
                            <th style="font-size:13px;border-top:0;">INICIO</th>
                            <th style="font-size:13px;border-top:0;">FIN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td width="80" style="background-color:#DFDCE3; font-weight:bold;">11:00</td>
                            <td width="80" style="background-color:#DFDCE3; font-weight:bold;">14:00</td>
                            <td rowspan="1" style="padding:5px;"> </td>
                            <td rowspan="1" style="background-color:#A4C2F4; padding:5px;"> <br>Dr. Hugo Alatrista Salas
                                <br><strong>
                                    "Taller de Minería de datos"</strong> <br><br>
                            </td>
                        </tr>
                        <tr>
                            <td width="80" style="background-color:#DFDCE3; font-weight:bold;">14:00</td>
                            <td width="80" style="background-color:#DFDCE3; font-weight:bold;">18:00</td>
                            <td rowspan="1" colspan="2" style="padding:5px;"> </td>
                        </tr>
                        <tr>
                            <td width="80" style="background-color:#DFDCE3; font-weight:bold;">18:00</td>
                            <td width="80" style="background-color:#DFDCE3; font-weight:bold;">19:30</td>
                            <td width="200" rowspan="1" style="padding:0!important;">
                                <table class="table text-center table-borderless " style="margin:0;">
                                    <td width="200" rowspan="1" style="background-color:#FFD36F; padding:0!important;">
                                        Ing. Betty Osco Luque <br>
                                        <strong>"Análisis de datos en Microsoft Power BI"</strong>
                                        <br>Sesión 1
                                    </td>
                                    <td width="200" rowspan="1" style="background-color:#90D1A1;padding:0!important; ">
                                        MSc(c) Israel Chaparro Cruz<br>
                                        <strong>“Introducción a Algoritmos de Machine Learning - Redes Neuronales y Deep
                                            Learning”</strong>
                                        <br>Sesión 1
                                    </td>
                                    <td width="200" rowspan="1" style="background-color:#EA9999; padding:5px;">
                                        Victor Damian Luque Velasquez & Ing. Jaime Freddy Polar
                                        Fuentes<br>
                                        <strong> "PRESTASHOP"</strong>
                                        <br>Sesión 1
                                    </td>
                                </table>
                            </td>
                            <td width="200" rowspan="1" style="padding:0!important;">
                                <table class="table text-center table-borderless " style="margin:0;">
                                    <td width="200" rowspan="1" style="background-color:#FFD36F; padding:0!important;">
                                        Ing. Betty Osco Luque <br>
                                        <strong> "Análisis de datos en Microsoft Power BI"</strong>
                                        <br>Sesión 2
                                    </td>
                                    <td width="200" rowspan="1" style="background-color:#90D1A1;padding:0!important; ">
                                        MSc(c) Israel Chaparro Cruz<br>
                                        <strong>“Introducción a Algoritmos de Machine Learning - Redes Neuronales y Deep
                                            Learning”</strong>
                                        <br>Sesión 2
                                    </td>
                                    <td width="200" rowspan="1" style="background-color:#EA9999; padding:5px;">
                                        <br>Victor Damian Luque Velasquez & Ing. Jaime Freddy Polar
                                        Fuentes
                                        <strong> "PRESTASHOP"</strong>
                                        <br>Sesión 2
                                    </td>
                                </table>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <!-- end tabla -->
            <br><br>
        </div>
    </div>
</div>
<!--/ End CRONOGRAMA  -->
<br><br>
<!-- Instripciones -->
<section class="courses" style="background-color: #F7F7F7; margin-top: -5%">
    <div class=" container">
        <h4 class="text-left title-sub" style="color:#006EB8">INSCRIPCIONES</h4>
        <div class="row">
            <!-- TaLLER 1 -->
            <div class="col-lg-12 col-md-12 col-12">
                <div class="single-course">
                    <div class="course-body">
                        <div class="row">
                            <!-- Taller Head -->
                            <div class="col-lg-6 col-md-6 col-12 align-self-center">
                                <div class="course-body text-center">
                                    <br>
                                    <h4 style="color: #0056b2;" class="text-uppercase">Taller de Power BI</h4>
                                </div>
                                <a href="<?php echo IMAGES."talleres/Taller 1.png"?>" data-fancybox="images">
                                    <img class="w-200 d-block" src="<?php echo IMAGES.'talleres/Taller 1 min.png' ?>"
                                        alt="#">
                                </a>
                            </div>
                            <!-- Taller body-->
                            <div class="col-lg-6 col-md-6 col-12 align-self-center" style="margin-right:0!important;">
                                <br>
                                <div class="text-center">
                                    <p style="font-size:18px;color:black;padding-bottom:6px;">
                                        <b>TEMARIO</b>
                                    </p>
                                </div>
                                <div class="row ml-3">
                                    <div class="col-6">
                                        <p style="font-size:17px;color:black;paddin-bottom:2px;text-align:center;">
                                            <b>Sesión 1</b>
                                        </p>
                                        <ul>
                                            <li style="list-style-position:outside;list-style-type: disc">¿Power BI
                                                reemplazará a Excel?.</li>
                                            <li style="list-style-position:outside;list-style-type: disc"> ¿Qué es Power
                                                BI?.</li>
                                            <li style="list-style-position:outside;list-style-type: disc"> ¿Para quiénes
                                                va dirigido?.</li>
                                            <li style="list-style-position:outside;list-style-type: disc"> Requisitos
                                                para instalarlo.</li>
                                            <li style="list-style-position:outside;list-style-type: disc"> Iniciando con
                                                Power BI.</li>
                                        </ul>
                                    </div>
                                    <div class="col-6 pl-4">
                                        <p style="font-size:17px;color:black;text-align:center;"><b>Sesión 2</b> </p>
                                        <ul>
                                            <li style="list-style-position:outside;list-style-type: disc">Cómo utilizar
                                                el Power Query Editor.</li>
                                            <li style="list-style-position:outside;list-style-type: disc">Principales
                                                funciones del Power BI.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center mt-4">
                                    <button type="button" class="btn black primary" data-toggle="modal"
                                        data-target="#exampleModalLong"
                                        onclick="inscripcionesTalleres('TALLER DE PAWERBI')">INSCRIBIRSE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END TaLLER 1 -->
            <!-- TaLLER 2 -->
            <div class="col-lg-12 col-md-12 col-12">
                <div class="single-course">
                    <div class="course-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 align-self-center ">
                                <div class="course-body text-center">
                                    <br>
                                    <h4 style="color: #0056b2;" class="text-uppercase"> TALLER DE INTRODUCCIÓN A
                                        ALGORITMOS DE MACHINE LEARNING</h4>
                                </div>
                                <a href="<?php echo IMAGES."talleres/Taller 2.png"?>" data-fancybox="images">
                                    <img class="w-100 d-block" src="<?php echo IMAGES."talleres/Taller 2 min.png"?>"
                                        alt="" />
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 align-self-center; ">
                                <br>
                                <div class="text-center">
                                    <p style="font-size:18px;color:black;padding-bottom:6px;"><br>
                                        <b>TEMARIO</b>
                                    </p>
                                </div>
                                <div class="row ml-3">
                                    <div class="col-6">
                                        <p style="font-size:17px;color:black;paddin-bottom:2px;text-align:center;">
                                            <b>Sesión 1</b>
                                        </p>
                                        <ul>
                                            <li style="list-style-position:outside;list-style-type: disc">Regresión
                                                lineal vía error cuadrático médico y estimación
                                                de máxima verosimilitud.</li>
                                            <li style="list-style-position:outside;list-style-type: disc"> Remuestreo.
                                            </li>
                                            <li style="list-style-position:outside;list-style-type: disc">Regresión
                                                lineal múltiple. y varianza.</li>
                                            <li style="list-style-position:outside;list-style-type: disc"> Compensación
                                                de sesgo y varianza.</li>
                                            <li style="list-style-position:outside;list-style-type: disc">Validación
                                                cruzada.</li>
                                        </ul>
                                    </div>
                                    <div class="col-6 pl-4">
                                        <p style="font-size:17px;color:black;text-align:center;"><b>Sesión 2</b> </p>
                                        <ul>
                                            <li style="list-style-position:outside;list-style-type: disc"> Inteligencia
                                                Artificial</li>
                                            <li style="list-style-position:outside;list-style-type: disc"> Neuronas
                                                reales.</li>
                                            <li style="list-style-position:outside;list-style-type: disc"> Neuronas
                                                artificiales.</li>
                                            <li style="list-style-position:outside;list-style-type: disc"> Aprendizaje
                                                supervisado.</li>
                                            <li style="list-style-position:outside;list-style-type: disc"> Redes
                                                neuronales convolucionales.</li>
                                            <li style="list-style-position:outside;list-style-type: disc"> Campos
                                                receptivos.</li>
                                            <li style="list-style-position:outside;list-style-type: disc"> Estado del
                                                arte.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center ">
                                    <p style="font-size:18px;color:black;padding-bottom:6px;"><br>
                                        <b>Finalizaron las Inscripciones</b>
                                    </p>
                                </div>

                                <div class="text-center mt-4" hidden>
                                    <button type="button" class="btn black primary" data-toggle="modal"
                                        data-target="#exampleModalLong"
                                        onclick="inscripcionesTalleres('INTRODUCCIÓN A ALGORITMOS DE MACHINE LEARNING')">INSCRIBIRSE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END TaLLER 2 -->
            <!-- TaLLER 3 -->
            <div class="col-lg-12 col-md-12 col-12">
                <div class="single-course">
                    <div class="course-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 align-self-center">
                                <div class="course-body text-center">
                                    <br>
                                    <h4 style="color: #0056b2;" class="text-uppercase"> TALLER DE PRESTASHOP</h4>
                                </div>
                                <a href="<?php echo IMAGES."talleres/taller3.png"?>" data-fancybox="images">
                                    <img class="w-100 d-block" src="<?php echo IMAGES."talleres/taller3_min.png"?>"
                                        alt="" />
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 align-self-center">
                                <br>
                                <div class="text-center">
                                    <p style="font-size:18px;color:black;padding-bottom:6px;"><br>
                                        <b>TEMARIO</b>
                                    </p>
                                </div>
                                <div class="row ml-3">
                                    <div class="col-6">
                                        <p style="font-size:17px;color:black;paddin-bottom:2px;text-align:center;">
                                            <b>Sesión 1</b>
                                        </p>
                                        <ul>
                                            <li style="list-style-position:outside;list-style-type: disc"> Instalación
                                                de PrestaShop
                                            <li style="list-style-position:outside;list-style-type: disc"> Configuración
                                                de transportistas e Impuesto.
                                            <li style="list-style-position:outside;list-style-type: disc">
                                                Zonas, países y estado.
                                            <li style="list-style-position:outside;list-style-type: disc">
                                                Gestión de categorías, marcas y proveedores.
                                            <li style="list-style-position:outside;list-style-type: disc">
                                                Instalación y personalización de plantillas.
                                            <li style="list-style-position:outside;list-style-type: disc"> Instalación y
                                                configuración de métodos de pago.
                                        </ul>
                                    </div>
                                    <div class="col-6 pl-4">
                                        <p style="font-size:17px;color:black;text-align:center;"><b>Sesión 2</b> </p>
                                        <ul>
                                            <li style="list-style-position:outside;list-style-type: disc"> Creación de
                                                productos y combinaciones.
                                            <li style="list-style-position:outside;list-style-type: disc"> Gestión de
                                                clientes de la tienda.
                                            <li style="list-style-position:outside;list-style-type: disc"> Instalación
                                                de módulos.
                                            <li style="list-style-position:outside;list-style-type: disc"> Crear páginas
                                                CMS (nosotros, aviso legal, etc.).
                                            <li style="list-style-position:outside;list-style-type: disc">
                                                Administración de pedidos.
                                        </ul>
                                    </div>
                                </div>

                                <div class="text-center mt-4">
                                    <button type="button" class="btn black primary" data-toggle="modal"
                                        data-target="#exampleModalLong"
                                        onclick="inscripcionesTalleres('TALLER DE PRESTASHOP')">INSCRIBIRSE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END TaLLER 3 -->
            <!-- TaLLER 4 -->
            <div class="col-lg-12 col-md-12 col-12">
                <div class="single-course">
                    <div class="course-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 align-self-center">
                                <div class="course-body text-center">
                                    <br>
                                    <h4 style="color: #0056b2;" class="text-uppercase"> TALLER DE MINERÍA DE DATOS</h4>
                                </div>
                                <a href="<?php echo IMAGES."talleres/taller4.png"?>" data-fancybox="images">
                                    <img class="w-100 d-block" src="<?php echo IMAGES."talleres/taller4_min.png"?>"
                                        alt="" />
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 ">
                                <br>
                                <div class="text-center">
                                    <p style="font-size:18px;color:black;padding-bottom:6px;"><br>
                                        <b>TEMARIO</b>
                                    </p>


                                </div>
                                <p
                                    style="font-size:16px;color:black;padding-bottom:2px;padding-bottom:2px!important;padding-top:2px;padding-left:15px!important;">
                                    <b>Requisitos: </b> Conocimientos básicos de estadística programada con R, bases de
                                    datos y MySQL.

                                </p>

                                <div class="pl-3">

                                    <p
                                        style="font-size:17px;color:black;padding-bottom:2px;padding-left:-5px!important;padding-top:2px;">
                                        <b>Teoría (80 minutos):</b>
                                    </p>
                                    <ul class=" ml-3">

                                        <li style="list-style-position:outside;list-style-type: disc"> Introducción
                                            a pattern mining.
                                        <li style="list-style-position:outside;list-style-type: disc">
                                            Extracción de itemsets frecuentes.
                                        <li style="list-style-position:outside;list-style-type: disc">
                                            Construcción de reglas de asociación.

                                    </ul>
                                    <p style="font-size:17px;color:black;padding-bottom:2px;padding-top:2px;">
                                        <b>Práctica en
                                            Python (70 minutos):</b>
                                    </p>
                                    <ul class=" ml-3">
                                        <li style="list-style-position:outside;list-style-type: disc">
                                            Itemset mining a partir de datos de Logs.
                                    </ul>
                                </div>


                                <div class="text-center mt-4">
                                    <button type="button" class="btn black primary" data-toggle="modal"
                                        data-target="#exampleModalLong"
                                        onclick="inscripcionesTalleres('TALLER DE MINERÍA DE DATOS')">INSCRIBIRSE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END TaLLER 4 -->
        </div>
        <BR><BR><BR><BR>
    </div>
    <!--/ End inscripciones  -->
    <!-- Modal -->
    <div class="modal fade registerEvento" id="exampleModalLong" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Inscripción</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <p class="mx-3 mb-2"><b>Ingrese su Número de Documento o Correo Electrónico para inscribirse al
                                Taller.</b></p>
                        <br>
                        <form class="form-inline bee_add_verifica col-12 " action="javascript:void(0)" novalidate>
                            <div class="row m-2 col-12">
                                <div class="form-group mb-2 ml-2 ">
                                    <input type="text" class="form-control-plaintext" name="numero" id="numero">
                                </div>
                                <div class="col-6">
                                    <button class="btn-primary btn-sm mb-2 ml-2 btn-block" type="submit"><span
                                            class="fa fa-search form-control-feedback"></span>&nbspVerificar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="hideRegister" style="display:none; width:100%">
                        <div class="card-header text-center text-danger">
                            Previamente haberse registrado en el evento XXI CIIS.
                        </div>
                    </div>
                    <div class="hideAsistencia" style="display:none; width:100%">
                        <div class="col-11 self-align-middle mb-3 mx-3">
                            <button type="button" class="btn-success btn-sm btn-block" onclick="inscribir()">
                                Inscribirse a este Taller</button>
                        </div>
                        <div class="modal-footer text-left "
                            style="padding: 0.5rem!important;padding-bottom:0!important;padding-top:0.8rem!important;justify-content: flex-start!important">
                            <button type="button" class="btn-danger btn-sm" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer hideRegister" style="display:none">
                    <button type="button" class="btn-danger btn-sm" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn-info btn-sm" data-toggle="modal"
                        data-target=".bd-example-modal-lg">Registrarse al Evento</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Registrarse -->
    <div class="modal fade bd-example-modal-lg modalRegister" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Registrarse al XXI CIIS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="bee_add_new_usuario text-center" novalidate id="bee_add_new_usuario">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-address-book"></i></span>
                                    </div>

                                    <input type="text" class="form-control" name="nombre" id="nombre"
                                        placeholder="Nombres" required>

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
                                    <input type="text" class="form-control" name="numero_doc" id="numero_doc"
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
                                    <select name="cargo" id="cargo" class="form-control" required>
                                        <option value="ESTUDIANTE">ESTUDIANTE</option>
                                        <option value="PROFESIONAL">PROFESIONAL</option>
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
                                    <input type="text" class="form-control" name="ciudad" id="ciudad"
                                        placeholder="Ciudad" required>
                                </div>

                            </div>



                        </div>



                        <button type="submit" class="btn-success btn-sm">REGISTRARSE</button>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class=" btn-danger btn-sm" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <?php require_once INCLUDES.'inc_footer.php'; ?>
    <script src="<?php echo JS.'inscripciones.js' ?>"></script>
    </body>

    </html>
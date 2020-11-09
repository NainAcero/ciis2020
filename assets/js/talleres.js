$(document).ready(function() {







    var user = null;



    



    if(sessionStorage.getItem("token") && sessionStorage.getItem("usuario")){







        user = JSON.parse(sessionStorage.getItem("usuario"));







    }else{







        window.location.replace("http://157.245.136.158/login");



    }







    bee_get_ponencias();







    function bee_get_ponencias(event){







        var wrapper = $('.bee_add_taller'),







        hook = 'bee_hook',







        action = 'load';







        usuario = user.id;







        $.ajax({







            url: '/2020/ajax/bee_cargar_tallere',







            type: 'post',







            dataType: 'json',







            cache: false,







            data: {







                hook, action, usuario







            },







            beforeSend: function() {







            }







        }).done(function(res) {







            var html = '';







            if(res.status === 200) {







                $('#nombretaller').text(res.data.nombre);







                if(res.data.nombre == "INTRODUCCIÓN A ALGORITMOS DE MACHINE LEARNING"){







                    html += 



                    ` <table class="table text-center table-bordered " style="border-collapse: collapse;">







                    <thead class="thead-dark align-middle pt-1" style="border:0;">



                        <tr>



                            <th class="align-middle" colspan="2" width="100" ;="">HORA



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



                            <td width="80" style="background-color:#DFDCE3; font-weight:bold;">18:00</td>



                            <td width="80" style="background-color:#DFDCE3; font-weight:bold;">19:30</td>



                            <td width="200" rowspan="1" style="background-color:#90D1A1;padding:0!important; ">



                                <br>



                                MSc(c) Israel Chaparro Cruz<br>



                                <strong>“Introducción a Algoritmos de Machine Learning - Redes Neuronales y Deep



                                    Learning”</strong>



                                <br>Sesión 1



                            </td>



                            <td width="200" rowspan="1" style="background-color:#90D1A1;padding:0!important; ">



                                <br>



                                MSc(c) Israel Chaparro Cruz<br>



                                <strong>“Introducción a Algoritmos de Machine Learning - Redes Neuronales y Deep



                                    Learning”</strong>



                                <br>Sesión 2



                            </td>



                        </tr>



                    </tbody>



                </table>



    



                <div class="col-lg-12 col-md-12 col-12">



    



                    <div class="single-course">



    



                        <div class="course-body">



    



                            <div class="row">



    



                                <div class="col-lg-6 col-md-6 col-12 align-self-center ">



    



                                    <div class="course-body text-center">



    



                                        <br>







    



                                    </div>



    



                                    <a href="https://ciistacna.com/2020/assets/images/talleres/Taller 2.png" data-fancybox="images">



    



                                        <img class="w-100 d-block" src="https://ciistacna.com/2020/assets/images/talleres/Taller 2 min.png" alt="">



    



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



    



                                    <div class="text-center mt-4">



                                        <a href="https://meet.google.com/mwm-ehdi-cqs?fbclid=IwAR0A9iAXNmilY2eds2qNIxZwnFsnlySS77bG7RXnxozrUXNI1MPMO83H6ZU" class="btn-btn black primary" target="_black" >INGRESAR AL TALLER</a>



                                    </div>



    



                                </div>



    



                            </div>



    



                        </div>



    



                    </div>



    



                </div>`;







                }else if(res.data.nombre == "TALLER DE PRESTASHOP"){







                    html += 



                    `<table class="table text-center table-bordered " style="border-collapse: collapse;">







                    <thead class="thead-dark align-middle pt-1" style="border:0;">



                        <tr>



                            <th class="align-middle" colspan="2" width="100" ;="">HORA



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



                            <td width="80" style="background-color:#DFDCE3; font-weight:bold;">18:00</td>



                            <td width="80" style="background-color:#DFDCE3; font-weight:bold;">19:30</td>



                            <td width="200" rowspan="1" style="background-color:#EA9999; padding:5px;">



                                <br>



                                Victor Damian Luque Velasquez & Ing. Jaime Freddy Polar Fuentes<br>



                                <strong>“PRESTASHOP”</strong>



                                <br>Sesión 1



                            </td>



                            <td width="200" rowspan="1" style="background-color:#EA9999; padding:5px;">



                                <br>



                                Victor Damian Luque Velasquez & Ing. Jaime Freddy Polar Fuentes<br>



                                <strong>“PRESTASHOP”</strong>



                                <br>Sesión 2



                            </td>



                        </tr>



                    </tbody>



                </table>



        



                <div class="col-lg-12 col-md-12 col-12">



        



                    <div class="single-course">



        



        



                        <div class="course-body">



        



        



                            <div class="row">



        



        



                                <div class="col-lg-6 col-md-6 col-12 align-self-center">



        



        



                                    <div class="course-body text-center">



        



        



                                        <br>



        



                                    </div>



        



                                    <a href="https://ciistacna.com/2020/assets/images/talleres/Taller 3.png" data-fancybox="images">



        



        



                                        <img class="w-100 d-block" src="https://ciistacna.com/2020/assets/images/talleres/Taller 3 min.png" alt="">



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



        



                                                </li><li style="list-style-position:outside;list-style-type: disc"> Configuración



        



                                                    de transportistas e Impuesto.



        



                                                </li><li style="list-style-position:outside;list-style-type: disc">



        



                                                    Zonas, países y estado.



        



                                                </li><li style="list-style-position:outside;list-style-type: disc">



        



                                                    Gestión de categorías, marcas y proveedores.



        



                                                </li><li style="list-style-position:outside;list-style-type: disc">



        



                                                    Instalación y personalización de plantillas.



        



                                                </li><li style="list-style-position:outside;list-style-type: disc"> Instalación y



        



                                                    configuración de métodos de pago.



        



                                            </li></ul>



        



        



                                        </div>



        



                                        <div class="col-6 pl-4">



        



                                            <p style="font-size:17px;color:black;text-align:center;"><b>Sesión 2</b> </p>



        



                                            <ul>



        



                                                <li style="list-style-position:outside;list-style-type: disc"> Creación de



        



                                                    productos y combinaciones.



        



                                                </li><li style="list-style-position:outside;list-style-type: disc"> Gestión de



        



                                                    clientes de la tienda.



        



                                                </li><li style="list-style-position:outside;list-style-type: disc"> Instalación



        



                                                    de módulos.



        



                                                </li><li style="list-style-position:outside;list-style-type: disc"> Crear páginas



        



                                                    CMS (nosotros, aviso legal, etc.).



        



                                                </li><li style="list-style-position:outside;list-style-type: disc">



        



                                                    Administración de pedidos.



        



                                            </li></ul>



        



                                        </div>



        



                                    </div>



        



                                    <div class="text-center mt-4">



                                        <a href="https://meet.google.com/own-cxkt-adx?fbclid=IwAR2-07VeTEhHRRvPIh9DtCnTE7Dy1n8GH_1sxdnySXkshGXOobt3o62SV4k" class="btn-btn black primary" target="_black" >INGRESAR AL TALLER</a>



                                    </div>



                                </div>



        



                            </div>



                        </div>



                    </div>



                </div>`;



                    







                }else if(res.data.nombre == "TALLER DE PAWERBI"){







                    html +=



                        `<table class="table text-center table-bordered " style="border-collapse: collapse;">



                            <thead class="thead-dark align-middle pt-1" style="border:0;">



                                <tr>



                                    <th class="align-middle" colspan="2" width="100" ;="">HORA



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



                                    <td width="80" style="background-color:#DFDCE3; font-weight:bold;">18:00</td>



                                    <td width="80" style="background-color:#DFDCE3; font-weight:bold;">19:30</td>



                                    <td width="200" rowspan="1" style="padding:0!important;">



                                        <table class="table text-center table-borderless " style="margin:0;">



                                            <tbody><tr><td width="200" rowspan="1" style="background-color:#FFD36F; padding:0!important;">



                                                <br> <br>



                                                Ing. Betty Osco Luque <br>



                                                <strong>"Análisis de datos en Microsoft Power BI"</strong>



                                                <br>Sesión 1



                                                <br><br><br>



                                            </td>



                                        </tr></tbody></table>



                                    </td>



                                    <td width="200" rowspan="1" style="padding:0!important;">



                                        <table class="table text-center table-borderless " style="margin:0;">



                                            <tbody><tr><td width="200" rowspan="1" style="background-color:#FFD36F; padding:0!important;">



                                            <br> <br>



                                                Ing. Betty Osco Luque <br>



                                                <strong> "Análisis de datos en Microsoft Power BI"</strong>



                                                <br>Sesión 2



                                                <br><br><br>



                                            </td>



                                        </tr></tbody></table>



                                    </td>



                                </tr>



                            </tbody>



                        </table>



                        



                        <div class="col-lg-12 col-md-12 col-12">







                            <div class="single-course">



                                <div class="course-body">



                                    <div class="row">







                                        <div class="col-lg-6 col-md-6 col-12 align-self-center">



                                            <div class="course-body text-center">



                                                <br>



                                            </div>



                                            <a href="https://ciistacna.com/2020/assets/images/talleres/Taller 1.png" data-fancybox="images">



                                                <img class="w-200 d-block" src="https://ciistacna.com/2020/assets/images/talleres/Taller 1 min.png" alt="#">



                                            </a>



                                        </div>











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



                                                <a href="https://meet.google.com/hgv-uwpu-cwp?fbclid=IwAR2C--J48lK2aVuU2Mv3Bd5y0MkOQdVAYRP-Hgq85qCA0cD5hXT-_gI8Ozc" class="btn-btn black primary" target="_black" >INGRESAR AL TALLER</a>



                                            </div>



                                        </div>







                                    </div>



                                </div>



                            </div>



                        </div>`;



                



                }else if(res.data.nombre == "TALLER DE MINERÍA DE DATOS"){







                    html += 



                    `<table class="table text-center table-bordered " style="border-collapse: collapse;">







                    <thead class="thead-dark align-middle pt-1" style="border:0;">



                        <tr>



                            <th class="align-middle" colspan="2" width="100" ;="">HORA



                            </th>



                           



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



                            <td width="200" rowspan="1" style="background-color:#97DDCC; padding:5px;">



                                <br>



                                Dr. Hugo Alatrista Salas<br>



                                <strong>"TALLER DE MINERÍA DE DATOS"</strong>



                                <br>Sesión 1



                            </td>



                        </tr>



                    </tbody>



                </table>



        



                <div class="col-lg-12 col-md-12 col-12">



        



                    <div class="single-course">



        



        



                        <div class="course-body">



        



        



                            <div class="row">



        



        



                                <div class="col-lg-6 col-md-6 col-12 align-self-center">



        



        



                                    <div class="course-body text-center">



        



        



                                        <br>



        



                                    </div>



        



                                    <a href="https://ciistacna.com/2020/assets/images/talleres/taller4.png" data-fancybox="images">



        



        



                                        <img class="w-100 d-block" src="https://ciistacna.com/2020/assets/images/talleres/taller4_min.png" alt="">



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







                                            <li style="list-style-position:outside;list-style-type: disc"> Introducción



                                                a pattern mining.



                                            <li style="list-style-position:outside;list-style-type: disc">



                                                Extracción de itemsets frecuentes.



                                            <li style="list-style-position:outside;list-style-type: disc">



                                                Construcción de reglas de asociación.







                                        </ul>



                                        <p style="font-size:17px;color:black;padding-bottom:2px;"><b>Práctica en



                                                Python(70 minutos):</b> </p>



                                        <ul>



                                            <li style="list-style-position:outside;list-style-type: disc">



                                                Itemset mining a partir de datos de Logs.



                                        </ul>



        



        



                                        </div>



        



                                        



    



                                    </div>



        



                                    <div class="text-center mt-4">



                                        <a href="https://meet.google.com/fij-rpwe-mem" class="btn-btn black primary" target="_black" >INGRESAR AL TALLER</a>



                                    </div>



                                </div>



        



                            </div>



                        </div>



                    </div>



                </div>`;



                    







                }































            } else if(res.status === 201) { 







                html += vacio();



            }







            wrapper.html(html);







        }).fail(function(err) {







            console.log('Hubo un error en la petición' , '¡Upss!');







        }).always(function() {







        })







    }







    $( "#eliminarTaller" ).click(function() {







        Swal.fire({



            title: 'Salir del taller?',



            text: "Esta seguro que desea salir del taller?",



            icon: 'warning',



            showCancelButton: true,



            confirmButtonColor: '#3085d6',



            cancelButtonColor: '#d33',



            confirmButtonText: 'Si deseo salir !'



          }).then((result) => {







            if (result.isConfirmed) {







                var wrapper = $('.bee_add_taller'), 



                



                hook = 'bee_hook',







                action = 'load';







                usuario = user.id;







                $.ajax({







                    url: '/2020/usuario/eliminarTaller',







                    type: 'post',







                    dataType: 'json',







                    cache: false,







                    data: {







                        hook, action, usuario , token







                    },







                    beforeSend: function() {







                    }







                }).done(function(res) {







                    var html = '';







                    if(res.status === 200) {







                        Swal.fire(



                            'Eliminado!',



                            'Se le ha retirado del Taller.',



                            'success'



                        )







                        wrapper.html(vacio());



                        $('#nombretaller').text("REGISTRARSE A UN TALLER");







                    } else if(res.status === 201) { 







                        Swal.fire(



                            'Error!',



                            'REGISTRESE A UN TALLER!.',



                            'warning'



                        )



                    }







                }).fail(function(err) {







                    console.log('Hubo un error en la petición' , '¡Upss!');







                }).always(function() {



                    



                })



                



            }



          })



        



    });







    function vacio(){







        return  `



     



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



                <td rowspan="1" style="background-color:#A4C2F4; padding:5px;"> Dr. Hugo Alatrista Salas



                    <br><strong>



                        "Taller de Minería de datos"</strong> <br>Sesión 1



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







































        <hr>



        



        



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































                        <a href="https://ciistacna.com/2020/assets/images/talleres/Taller 1.png" data-fancybox="images">















                            <img class="w-200 d-block" src="https://ciistacna.com/2020/assets/images/talleres/Taller 1 min.png" alt="#">















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















                            <button type="button" class="btn-btn black primary" onclick="inscripcionesTalleres('TALLER DE PAWERBI')">INSCRIBIRSE</button>















                        </div>















                    </div>















                </div>















            </div>















        </div>















    </div>







    <hr>



    



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































                        <a href="https://ciistacna.com/2020/assets/images/talleres/Taller 2.png" data-fancybox="images">















                            <img class="w-100 d-block" src="https://ciistacna.com/2020/assets/images/talleres/Taller 2 min.png" alt="">















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



























                        <div class="text-center">



                        <p style="font-size:18px;color:black;padding-bottom:6px;"><br>



                            <b>Finalizaron las Inscripciones</b>



                        </p>



                    </div>



















                        <div class="text-center mt-4" hidden>















                            <button type="button" class="btn-btn black primary"  onclick="inscripcionesTalleres('INTRODUCCIÓN A ALGORITMOS DE MACHINE LEARNING')">INSCRIBIRSE</button>















                        </div>















                    </div>















                </div>















            </div>















        </div>















    </div>



    



    



    <hr>



    



    <div class="col-lg-12 col-md-12 col-12">















        <div class="single-course">















            <div class="course-body">















                <div class="row">















                    <div class="col-lg-6 col-md-6 col-12 align-self-center">































                        <div class="course-body text-center">















                            <br>















                            <h4 style="color: #0056b2;" class="text-uppercase"> TALLER DE PRESTASHOP</h4>















                        </div>



































                        <a href="https://ciistacna.com/2020/assets/images/talleres/Taller 3.png" data-fancybox="images">















                            <img class="w-100 d-block" src="https://ciistacna.com/2020/assets/images/talleres/Taller 3 min.png" alt="">















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























                                    </li><li style="list-style-position:outside;list-style-type: disc"> Configuración







                                        de transportistas e Impuesto.















                                    </li><li style="list-style-position:outside;list-style-type: disc">















                                        Zonas, países y estado.















                                    </li><li style="list-style-position:outside;list-style-type: disc">















                                        Gestión de categorías, marcas y proveedores.























                                    </li><li style="list-style-position:outside;list-style-type: disc">















                                        Instalación y personalización de plantillas.















                                    </li><li style="list-style-position:outside;list-style-type: disc"> Instalación y







                                        configuración de métodos de pago.































                                </li></ul>































                            </div>































                            <div class="col-6 pl-4">















                                <p style="font-size:17px;color:black;text-align:center;"><b>Sesión 2</b> </p>















                                <ul>















                                    <li style="list-style-position:outside;list-style-type: disc"> Creación de







                                        productos y combinaciones.















                                    </li><li style="list-style-position:outside;list-style-type: disc"> Gestión de







                                        clientes de la tienda.















                                    </li><li style="list-style-position:outside;list-style-type: disc"> Instalación







                                        de módulos.















                                    </li><li style="list-style-position:outside;list-style-type: disc"> Crear páginas







                                        CMS (nosotros, aviso legal, etc.).















                                    </li><li style="list-style-position:outside;list-style-type: disc">







                                        Administración de pedidos.































                                </li></ul>















                            </div>















                        </div>















































                        <div class="text-center mt-4">















                            <button type="button" class="btn-btn black primary"  onclick="inscripcionesTalleres('TALLER DE PRESTASHOP')">INSCRIBIRSE</button>















                        </div>















                    </div>















                </div>











            </div>















        </div>



































        











    </div>



    



    



    



    <hr>



    



    



    



    <div class="col-lg-12 col-md-12 col-12">







    <div class="single-course">







        <div class="course-body">







            <div class="row">







                <div class="col-lg-6 col-md-6 col-12 align-self-center">







                    <div class="course-body text-center">







                        <br>







                        <h4 style="color: #0056b2;" class="text-uppercase"> TALLER DE MINERÍA DE DATOS</h4>







                    </div>







                    <a href="https://ciistacna.com/2020/assets/images/talleres/taller4.png" data-fancybox="images">











                    <img class="w-100 d-block" src="https://ciistacna.com/2020/assets/images/talleres/taller4_min.png" alt="">















                    </a>











                </div>







                <div class="col-lg-6 col-md-6 col-12 ">







                    <br>







                    <div class="text-center">







                        <p style="font-size:18px;color:black;padding-bottom:6px;"><br>







                            <b>TEMARIO</b>







                        </p>







                        <p style="font-size:17px;color:black;padding-bottom:2px;text-align:center;">







                            <b>Sesión 1</b>







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







                        <button type="button" class="btn-btn black primary" onclick="inscripcionesTalleres('TALLER DE MINERÍA DE DATOS')">INSCRIBIRSE</button>







                    </div>







                </div>







            </div>







        </div>







    </div>







</div>



    `;







    }







});







var user = null;



var token = '';



    



if(sessionStorage.getItem("token") && sessionStorage.getItem("usuario")){







    user = JSON.parse(sessionStorage.getItem("usuario"));



    token = sessionStorage.getItem("token");







}else{







    window.location.replace("http://157.245.136.158/login");



}







function inscripcionesTalleres(nom){







    var form = $('.bee_add_new_usuario'),



    hook = 'bee_hook',



    action = 'add',



    data = new FormData(form.get(0));







    data.append('hook', hook);



    data.append('action', action);



    data.append('usuario', user.id);



    data.append('token', token);



    data.append('nombre', nom);







    $.ajax({







        url: '/2020/usuario/bee_add_taller_admin',







            type: 'post',







            dataType: 'json',







            contentType: false,







            processData: false,







            cache: false,







            data: data,







        beforeSend: function() {







        }







    }).done(function(res) {







        if(res.status === 201) {



            Swal.fire(



                'Taller Registrado!',



                'Usuario ' + user.nombre + ' se registro  ' + nom,



                'success'



                );



                



                setTimeout(function(){ location.reload(); }, 2000);



        }else if(res.status === 202) {







            Swal.fire(



                'Usuario ya registrado!',



                // 'Usuario ' + res.data.nombre + ' ya se registro  a otro taller !' ,



                'dwadawd',



                'warning'



                );



        }







    }).fail(function(err) {



        console.log(err , '¡Upss!');







    }).always(function() {







    })



}












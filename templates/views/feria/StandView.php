<?php require_once INCLUDES.'inc_header.php'; ?>
<style type="text/css">
.no-img-cellphone {
    display: block;
}

.img-responsi-feria {
    margin-left: 94%;
}

@media (max-width: 720px) {
    .no-img-cellphone {
        display: none;
    }

    .img-responsi-feria {
        margin-left: 80%;
    }
}
</style>

<link rel="stylesheet" href="<?php echo CSS.'feria/css.css?family=Roboto+Condensed:400,700' ?>">
<link rel="stylesheet" href="<?php echo CSS.'feria/stilos.css' ?>">
<script src="<?php echo JS.'jquery.min.js' ?>"></script>

<script>
$(document).ready(function(e) {
    var banners = [];
    banners[0] =
        '<a href="https://www.megacentrocomercial.com" target="_blank"><img src="imgs/mega-cc-img.jpg" ></a>';
    banners[1] =
        '<a href="https://bm.ricardobarona.com" target="_blank"><img src="imgs/business-maker-img.jpg" ></a>';
    banners[2] =
        '<a href="https://www.adone.com.co/stands-bogota/" target="_blank"><img src="imgs/tucon-img.jpg" ></a>';

    function escogerimagenb() {
        mostrar = Math.floor((Math.random() * 3))
        $(".infoBt").html(banners[mostrar]);
    }
    escogerimagenb();
    /*Calificaciones*/
    $(".calificanosIconos img").click(function() {
        idNota = $(this).attr("data-nota");
        idData = $(this).parent().attr("data-calificar");
        $(this).load("calificar-proc.php?id=" + idData + "&nota=" + idNota, function(response,
            status, xhr) {
            if (status == "error") {
                $(this).html("Error al cargar: " + xhr.status + " " + xhr.statusText);
            }
        });
        $(this).parent().parent().children(".calificanosIconosGracias").show();
        $(this).parent().hide();
    })
    /*Comentarios*/
    $(".ComentariosComentar .botonEnviarComentario").click(function() {
        /*alert("Uuuuuuuuu");*/
        micoment = encodeURIComponent($(this).parent().parent().children(
            ".textocomentarioVisitante").children(".comentarioVisitante").val());
        recep = $(this).parent().parent().children(".textocomentarioVisitante").children(
            ".comentarioVisitante").attr("data-stand_id");
        $(this).parent().parent().children(".textocomentarioVisitante").children(
            ".comentarioVisitante").val("");
        /*alert("comentarios-visitantes.php?id="+recep+"&com="+micoment);*/
        if (micoment != "" && recep != "") {
            $(this).parent().parent().parent().children(".ComentariosTextos").load(
                "comentarios-visitantes.php?id=" + recep + "&com=" + micoment,
                function(response, status, xhr) {
                    if (status == "error") {
                        $(this).html("Error al cargar: " + xhr.status + " " + xhr.statusText);
                    }
                });
        }
    })
    //Muestra y oculta la tarjeta del asesor
    $(".tarjetaAsesor .cerrar").click(function() {
        $(this).parent().removeClass("animacionEntrada");
        $(this).parent().hide();
    })
    $(".botonAsesor").click(function() {
        $(this).parent().parent().children(".tarjetaAsesor").addClass("animacionEntrada");
        $(this).parent().parent().children(".tarjetaAsesor").show();
    })
    $(".botonComentar").click(function() {
        $(this).parent().parent().children(".cuadroComentarios").toggle();
    })
    $(".cuadroComentarios .cerrar").click(function() {
        $(this).parent().hide();
    })
    $(".botonMeGusta").click(function() {
        idMeGusta = $(this).attr("data-gusta");
        //alert(idMeGusta);
        $(".numeroMeGusta").load("me_gusta_uno_mas.php?id=" + idMeGusta, function(response, status,
            xhr) {
            if (status == "error") {
                $(this).html("Error al cargar: " + xhr.status + " " + xhr.statusText);
            }
        });
        $(".botonMeGusta").hide();
        $(".numeroMeGusta").show();
    })
    /*Contador de clics*/
    $(".marcoBotonesDesplegables div").click(function() {
        boton = $(this).attr("data-tipo");
        idData = $(this).parent().attr("data-id");
        //alert("componentes/estadistics_stand.php?id="+idData+"&tipo="+boton);
        $("#verificacionStatic").load("componentes/estadistics_stand.php?id=" + idData + "&tipo=" +
            boton,
            function(response, status, xhr) {
                if (status == "error") {
                    $(this).html("Error al cargar: " + xhr.status + " " + xhr.statusText);
                }
            });
    })
    $(".botonDesplegableExpositores").click(function() {
        $(".listadoExpositoresOculto").slideToggle(100);
        $(".botonDesplegableExpositores img").toggleClass("cerrar");
    })
});
</script>

<div class="clients stands-slider" style="background: #fff;margin-top: 20px;">
    <div class="stand-slider" style="">
        <!-- single-slider -->
        <div class="single-slider">
            <div class="container" style="">
                <div class="row">
                    <div class="wrapp">
                        <div class="centroFeria">
                            <div class="recorridoMascara ">
                                <div class="recorridoFeria">
                                    <div style="background-image: 
                                url('<?php echo IMAGES."feria/stands/standferia1.png" ?>');background-size: cover;background-position: center; "
                                        class="stand">
                                        <div class="nominadosMejorStand"></div>
                                        <h2 style="color:black;"><b>OK COMPUTER</b></h2>
                                        <div class="descripcion" hidden>
                                            <h3 style="color:#fff;"><img
                                                    src="<?php echo IMAGES.'feria/empresas/ok-computer/descripcion.png' ?>"
                                                    class="text-center description-img"
                                                    style="width: 260px !important; height:auto;margin: 5px 5px;"
                                                    alt="CIIS XXI">
                                            </h3>
                                            <br>
                                            <div style="color:#fff;">

                                            </div>
                                            <!-- <a href="https://www.contadorvisitasgratis.com" title="contadores de visitas"><img src="https://counter3.stat.ovh/private/contadorvisitasgratis.php?c=8xg4reezlxje18dfa4bm9eplrtjfd6nh" border="0" title="contadores de visitas" alt="contadores de visitas"></a> -->
                                        </div>

                                        <div class="video">
                                            <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/sjY0XPg_xwA" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </div>
                                        <div class="marcoBotonesDesplegables" data-id="1532">
                                            <div class="botonContactanos botonesLargos">
                                                <a href="https://www.facebook.com/OKComputerPeru/" target="_blank">
                                                    <img
                                                        src="<?php echo IMAGES.'feria/empresas/ok-computer/boton_contacto_facebook.png' ?>">
                                                </a>
                                            </div>
                                            <div class="botonContactanos botonesLargos">
                                                <a href="https://www.instagram.com/okcomputerperu/" target="_blank">
                                                    <img
                                                        src="<?php echo IMAGES.'feria/empresas/ok-computer/boton_contacto_instagram.png' ?>">
                                                </a>
                                            </div>
                                            <div class="botonContactanos botonesLargos">
                                                <a href="https://api.whatsapp.com/send?phone=51981050591"
                                                    target="_blank">
                                                    <img
                                                        src="<?php echo IMAGES.'feria/empresas/ok-computer/boton_contacto_whatsapp.png' ?>">
                                                </a>
                                            </div>

                                            <div class="botonContactanos botonesLargos">
                                                <a href="https://www.okcomputer.com.pe/" target="_blank">
                                                    <img
                                                        src="<?php echo IMAGES.'feria/empresas/ok-computer/boton_contacto_web.png' ?>">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end single-slider -->
        <!-- single-slider -->
        <div class="single-slider">
            <div class="container" style="">
                <div class="row">
                    <div class="wrapp">
                        <div class="centroFeria">
                            <div class="recorridoMascara ">
                                <div class="recorridoFeria">
                                    <div style="background-image: 
                                url('<?php echo IMAGES."feria/stands/standferia2.png" ?>');background-size: cover;background-position: center; "
                                        class="stand">
                                        <div class="nominadosMejorStand"></div>
                                        <h2 style="color:black;"><b>PERÚ E-TRONICS</b></h2>


                                        <div class="video" style="width:290px!important;">
                                            <div class="embed-responsive embed-responsive-4by3">
                                                <video class="embed-responsive-item" controls
                                                    src="<?php echo IMAGES.'feria/empresas/perue-tronics/perue-tronics.mp4' ?>"
                                                    type="video/mp4"></video>
                                            </div>
                                        </div>
                                        <div class="marcoBotonesDesplegables" data-id="1532">
                                            <div class="botonContactanos botonesLargos">
                                                <a href="https://www.facebook.com/CamarasDeSeguridadArequipa"
                                                    target="_blank">
                                                    <img src="<?php echo IMAGES.'feria/imgs/bc_facebook.png' ?>">
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end single-slider -->
        <!-- single-slider -->
        <div class="single-slider">
            <div class="container" style="">
                <div class="row">
                    <div class="wrapp">
                        <div class="centroFeria">
                            <div class="recorridoMascara ">
                                <div class="recorridoFeria">
                                    <div style="background-image: 
                                url('<?php echo IMAGES."feria/stands/standferia3.png" ?>');background-size: cover;background-position: center; "
                                        class="stand">
                                        <div class="nominadosMejorStand"></div>
                                        <h2 style="color:black;"><b>VERTICAL GAMERS STORE</b></h2>


                                        <div class="video">
                                            <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/5UYTGX5ICBo" frameborder="0"
                                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </div>
                                        <div class="marcoBotonesDesplegables" data-id="1532">
                                            <div class="botonContactanos botonesLargos">
                                                <a href="https://www.facebook.com/VerticalPeru" target="_blank">
                                                    <img src="<?php echo IMAGES.'feria/imgs/bc_facebook.png' ?>">
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end single-slider -->
        <!-- single-slider -->
        <div class="single-slider">
            <div class="container" style="">
                <div class="row">
                    <div class="wrapp">
                        <div class="centroFeria">
                            <div class="recorridoMascara ">
                                <div class="recorridoFeria">
                                    <div style="background-image: 
                                url('<?php echo IMAGES."feria/stands/standferia4.png" ?>');background-size: cover;background-position: center; "
                                        class="stand">
                                        <div class="nominadosMejorStand"></div>
                                        <h2 style="color:black;"><b>ROQASEG</b></h2>


                                        <div class="video">
                                            <iframe
                                                src="https://www.facebook.com/plugins/video.php?height=308&href=https%3A%2F%2Fwww.facebook.com%2Froqaseg.seguridadelectronica%2Fvideos%2F363688835050792%2F&show_text=false&width=560"
                                                width="560" height="308" style="border:none;overflow:hidden"
                                                scrolling="no" frameborder="0" allowTransparency="true"
                                                allow="encrypted-media" allowFullScreen="true"></iframe>
                                        </div>
                                        <div class="marcoBotonesDesplegables" data-id="1532">
                                            <div class="botonContactanos botonesLargos">
                                                <a href="https://www.facebook.com/roqaseg.seguridadelectronica"
                                                    target="_blank">
                                                    <img src="<?php echo IMAGES.'feria/imgs/bc_facebook.png' ?>">
                                                </a>
                                            </div>

                                            <div class="botonContactanos botonesLargos">
                                                <a href="http://roqaseg.com.pe/" target="_blank">
                                                    <img src="<?php echo IMAGES.'feria/imgs/bc_web.png' ?>">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end single-slider -->
        <!-- single-slider -->
        <div class="single-slider">
            <div class="container" style="">
                <div class="row">
                    <div class="wrapp">
                        <div class="centroFeria">
                            <div class="recorridoMascara ">
                                <div class="recorridoFeria">
                                    <div style="background-image: 
                                url('<?php echo IMAGES."feria/stands/standferia5.png" ?>');background-size: cover;background-position: center; "
                                        class="stand">
                                        <div class="nominadosMejorStand"></div>
                                        <h2 style="color:black;"><b>MIJO STORE</b></h2>


                                        <div class="video">
                                            <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/5UYTGX5ICBo" frameborder="0"
                                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </div>
                                        <div class="marcoBotonesDesplegables" data-id="1532">
                                            <div class="botonContactanos botonesLargos">
                                                <a href="https://www.facebook.com/mijostore.tacna/" target="_blank">
                                                    <img src="<?php echo IMAGES.'feria/imgs/bc_facebook.png' ?>">
                                                </a>
                                            </div>
                                            <div class="botonContactanos botonesLargos">
                                                <a href="https://api.whatsapp.com/send?phone=51952909892"
                                                    target="_blank">
                                                    <img src="<?php echo IMAGES.'feria/imgs/bc_whatsapp.png' ?>">
                                                </a>
                                            </div>
                                            <div class="botonContactanos botonesLargos">
                                                <a href="www.xiaomitacna.com" target="_blank">
                                                    <img src="<?php echo IMAGES.'feria/imgs/bc_web.png' ?>">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end single-slider -->
        <!-- single-slider -->
        <div class="single-slider">
            <div class="container" style="">
                <div class="row">
                    <div class="wrapp">
                        <div class="centroFeria">
                            <div class="recorridoMascara ">
                                <div class="recorridoFeria">
                                    <div style="background-image: 
                                url('<?php echo IMAGES."feria/stands/standferia6.png" ?>');background-size: cover;background-position: center; "
                                        class="stand">
                                        <div class="nominadosMejorStand"></div>
                                        <h2 style="color:black;"><b>AUDITEL</b></h2>


                                        <div class="video">
                                            <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/Fdf_FweQeu0" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </div>
                                        <div class="marcoBotonesDesplegables" data-id="1532">
                                            <div class="botonContactanos botonesLargos">
                                                <a href="https://www.facebook.com/Auditel/" target="_blank">
                                                    <img src="<?php echo IMAGES.'feria/imgs/bc_facebook.png' ?>">
                                                </a>
                                            </div>
                                            <div class="botonContactanos botonesLargos">
                                                <a href="https://bit.ly/3k9jy33" target="_blank">
                                                    <img src="<?php echo IMAGES.'feria/imgs/bc_whatsapp.png' ?>">
                                                </a>
                                            </div>
                                            <div class="botonContactanos botonesLargos">
                                                <a href="https://bit.ly/33V1lR1" target="_blank">
                                                    <img src="<?php echo IMAGES.'feria/imgs/bc_whatsapp.png' ?>">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end single-slider -->
        <!-- single-slider -->
        <div class="single-slider">
            <div class="container" style="">
                <div class="row">
                    <div class="wrapp">
                        <div class="centroFeria">
                            <div class="recorridoMascara ">
                                <div class="recorridoFeria">
                                    <div style="background-image: 
                                url('<?php echo IMAGES."feria/stands/standferia7.png" ?>');background-size: cover;background-position: center; "
                                        class="stand">
                                        <div class="nominadosMejorStand"></div>
                                        <h2 style="color:black;"><b>GL-TRACKER</b></h2>


                                        <div class="video">
                                            <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/5UYTGX5ICBo" frameborder="0"
                                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </div>
                                        <div class="marcoBotonesDesplegables" data-id="1532">
                                            <div class="botonContactanos botonesLargos">
                                                <a href="https://www.facebook.com/oficialtracker/" target="_blank">
                                                    <img src="<?php echo IMAGES.'feria/imgs/bc_facebook.png' ?>">
                                                </a>
                                            </div>

                                            <div class="botonContactanos botonesLargos">
                                                <a href="https://www.gltracker.pe/" target="_blank">
                                                    <img src="<?php echo IMAGES.'feria/imgs/bc_web.png' ?>">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end single-slider -->
        <!-- single-slider -->
        <div class="single-slider">
            <div class="container" style="">
                <div class="row">
                    <div class="wrapp">
                        <div class="centroFeria">
                            <div class="recorridoMascara ">
                                <div class="recorridoFeria">
                                    <div style="background-image: 
                                url('<?php echo IMAGES."feria/stands/standferia8.png" ?>');background-size: cover;background-position: center; "
                                        class="stand">
                                        <div class="nominadosMejorStand"></div>
                                        <h2 style="color:black;"><b>OPENINFO</b></h2>

                                        <div class="video">
                                            <iframe width="560" height="315"
                                                src="https://www.youtube.com/embed/5UYTGX5ICBo" frameborder="0"
                                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </div>
                                        <div class="marcoBotonesDesplegables" data-id="1532">
                                            <div class="botonContactanos botonesLargos">
                                                <a href="www.facebook.com/grupoopeninfo" target="_blank">
                                                    <img src="<?php echo IMAGES.'feria/imgs/bc_facebook.png' ?>">
                                                </a>
                                            </div>
                                            <div class="botonContactanos botonesLargos">
                                                <a href="www.instagram.com/grupo_openinfo" target="_blank">
                                                    <img src="<?php echo IMAGES.'feria/imgs/bc_instagram.png' ?>">
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end single-slider -->
        <!-- single-slider -->
        <div class="single-slider">
            <div class="container" style="">
                <div class="row">
                    <div class="wrapp">
                        <div class="centroFeria">
                            <div class="recorridoMascara ">
                                <div class="recorridoFeria">
                                    <div style="background-image: 
                                url('<?php echo IMAGES."feria/stands/standferia9.png" ?>');background-size: cover;background-position: center; "
                                        class="stand">
                                        <div class="nominadosMejorStand"></div>
                                        <h2 style="color:black;"><b>PROMPERÚ</b></h2>

                                        <div class="video">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <video class="embed-responsive-item" controls
                                                    src="<?php echo IMAGES.'feria/empresas/promperu/SuenoluegoviajoEsp.mp4' ?>"
                                                    type="video/mp4"></video>
                                            </div>
                                        </div>
                                        <div class="marcoBotonesDesplegables" data-id="1532">
                                            <div class="botonContactanos botonesLargos">
                                                <a href="https://www.facebook.com/promperu" target="_blank">
                                                    <img src="<?php echo IMAGES.'feria/imgs/bc_facebook.png' ?>">
                                                </a>
                                            </div>
                                            <div class="botonContactanos botonesLargos">
                                                <a href="https://www.youtube.com/channel/UCveRrj9wB1L5BOQV-9pvqfQ"
                                                    target="_blank">
                                                    <img src="<?php echo IMAGES.'feria/imgs/bc_youtube.png' ?>">
                                                </a>
                                            </div>
                                            <div class="botonContactanos botonesLargos">
                                                <a href="https://twitter.com/PromPeru" target="_blank">
                                                    <img src="<?php echo IMAGES.'feria/imgs/bc_twitter.png' ?>">
                                                </a>
                                            </div>
                                            <div class="botonContactanos botonesLargos">
                                                <a href="https://www.linkedin.com/company/promperu" target="_blank">
                                                    <img src="<?php echo IMAGES.'feria/imgs/bc_linkedin.png' ?>">
                                                </a>
                                            </div>
                                            <div class="botonContactanos botonesLargos">
                                                <a href="www.promperu.gob.pe" target="_blank">
                                                    <img src="<?php echo IMAGES.'feria/imgs/bc_web.png' ?>">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end single-slider -->

    </div>
</div>
<div class="clients" class="fondoEntradaFeriaDefault" style="background: #fff;margin-top: -80px">
    <div class=" container">
        <div class="row">
            <div class="listadoExpositores">
                <div class="botonDesplegableExpositores">
                    <img src="imgs/flecha-desplegar.png" alt="">Listado de expositores
                </div>
                <div class="listadoExpositoresOculto">
                    <div class="listadoExpositoresMarco">
                        <a class="nombreExpositor" href="">Ok Computer</a>
                        <a class="nombreExpositor" href="">Perú E-tronics</a>
                        <a class="nombreExpositor" href="">Vertical Gamers Store</a>
                        <a class="nombreExpositor" href="">Roqaseg</a>
                        <a class="nombreExpositor" href="">Mijo Store</a>
                        <a class="nombreExpositor" href="">Auditel</a>
                        <a class="nombreExpositor" href="">GL Tracker</a>
                        <a class="nombreExpositor" href="">OpenInfo</a>
                        <a class="nombreExpositor" href="">PromPerú</a>
                    </div>
                </div>
            </div>
            <div id="verificacionStatic">
            </div>
        </div>
    </div>
</div>
<!-- <img src="<?php echo IMAGES."feria/imgs/right.png" ?>"
        style="float: left;margin-top: 25% ;position:absolute;z-index:13;margin-left: 3px">
    <img src="<?php echo IMAGES."feria/imgs/left.png" ?>"
        style="float: right;margin-top: 25% ;position:absolute;z-index:13;" class="img-responsi-feria"> -->
<?php require_once INCLUDES.'inc_footer.php'; ?>
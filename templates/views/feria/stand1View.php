<?php require_once INCLUDES.'inc_header.php'; ?>
<?php require_once INCLUDES.'inc_standheader.php'; ?>


<div class="clients" style="background: #fff;margin-top: 20px;">
    <div class="owl-nav1">
        <a href="<?php echo URL.'feria/stand9' ?>">
            <div class="owl-prev" style=""><i class="fa fa-angle-left" aria-hidden="true"></i></div>
        </a>
        <a href="<?php echo URL.'feria/stand2' ?>">
            <div class="owl-next" style=""><i class="fa fa-angle-right" aria-hidden="true"></i></div>
        </a>

    </div>
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
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/sjY0XPg_xwA"
                                            frameborder="0"
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
                                            <a href="https://api.whatsapp.com/send?phone=51981050591" target="_blank">
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

</div>
<div class="clients" class="fondoEntradaFeriaDefault" style="background: #fff;margin-top: -80px">
    <div class=" container">
        <div class="row">
            <div class="listadoExpositores">
                <div class="botonDesplegableExpositores">
                    <img src="<?php echo IMAGES.'feria/imgs/flecha-desplegar.png' ?>" alt="" width="20"><b>Listado de
                        expositores </b>
                </div>
                <div class="listadoExpositoresOculto">
                    <div class="listadoExpositoresMarco">
                        <a class="nombreExpositor" href="<?php echo URL.'feria/stand1' ?>">Ok Computer</a>
                        <a class="nombreExpositor" href="<?php echo URL.'feria/stand2' ?>">Perú E-tronics</a>
                        <a class="nombreExpositor" href="<?php echo URL.'feria/stand3' ?>">Vertical Gamers Store</a>
                        <a class="nombreExpositor" href="<?php echo URL.'feria/stand4' ?>">Roqaseg</a>
                        <a class="nombreExpositor" href="<?php echo URL.'feria/stand5' ?>">Mijo Store</a>
                        <a class="nombreExpositor" href="<?php echo URL.'feria/stand6' ?>">Auditel</a>
                        <a class="nombreExpositor" href="<?php echo URL.'feria/stand7' ?>">GL Tracker</a>
                        <a class="nombreExpositor" href="<?php echo URL.'feria/stand8' ?>">OpenInfo</a>
                        <a class="nombreExpositor" href="<?php echo URL.'feria/stand9' ?>">PromPerú</a>
                    </div>
                </div>
            </div>
            <div id="verificacionStatic">
            </div>
        </div>
    </div>
</div>

<?php require_once INCLUDES.'inc_footer.php'; ?>
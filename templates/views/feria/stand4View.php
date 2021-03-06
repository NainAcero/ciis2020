<?php require_once INCLUDES.'inc_header.php'; ?>
<?php require_once INCLUDES.'inc_standheader.php'; ?>
<div class="clients" style="background: #fff;margin-top: 20px;">
    <div class="owl-nav1">
        <a href="<?php echo URL.'feria/stand3' ?>">
            <div class="owl-prev" style=""><i class="fa fa-angle-left" aria-hidden="true"></i></div>
        </a>
        <a href="<?php echo URL.'feria/stand5' ?>">
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
                                url('<?php echo IMAGES."feria/stands/standferia4.png" ?>');background-size: cover;background-position: center; "
                                    class="stand">
                                    <div class="nominadosMejorStand"></div>
                                    <h2 style="color:black;"><b>ROQASEG</b></h2>


                                    <div class="video">
                                        <iframe
                                            src="https://www.facebook.com/plugins/video.php?height=308&href=https%3A%2F%2Fwww.facebook.com%2Froqaseg.seguridadelectronica%2Fvideos%2F363688835050792%2F&show_text=false&width=560"
                                            width="560" height="308" style="border:none;overflow:hidden" scrolling="no"
                                            frameborder="0" allowTransparency="true" allow="encrypted-media"
                                            allowFullScreen="true"></iframe>
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
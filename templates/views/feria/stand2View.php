<?php require_once INCLUDES.'inc_header.php'; ?>
<?php require_once INCLUDES.'inc_standheader.php'; ?>
<div class="clients" style="background: #fff;margin-top: 20px;">
    <div class="owl-nav1">
        <a href="<?php echo URL.'feria/stand1' ?>">
            <div class="owl-prev" style=""><i class="fa fa-angle-left" aria-hidden="true"></i></div>
        </a>
        <a href="<?php echo URL.'feria/stand3' ?>">
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
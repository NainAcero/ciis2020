<?php require_once INCLUDES.'inc_header.php'; ?>


<link href="<?php echo CSS.'feria/css.css?family=Roboto+Condensed:400,700' ?>" rel="stylesheet">
<link href="<?php echo CSS.'feria/stilosEntrada.css' ?>" rel="stylesheet">



<div class="clients" class="fondoEntradaFeriaDefault"
    style="background-image: url('<?php echo IMAGES.'feria/fondos/fondoFeriaDemo.jpg' ?>');margin-top: 40px">
    <div class=" container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="ticketZone">
                    <div class="bloqueTitular">
                        <div class="titulo" style="color:#011F55">
                            <h1>
                                <a href="javascript:void(0)" title="Volver a las ferias.">
                                    <img src="<?php echo IMAGES.'feria/imgs/volver.png' ?>" width="35" height="auto">
                                </a> III Feria de Tecnológica
                            </h1>
                        </div>
                        <p>EDICIÓN VIRTUAL</p>
                        <p class="nota">Haz clic en el ticket para ingresar al pabellón.</p>
                    </div>
                </div>
                <div class="choose-right">
                    <div class="Tiquete">
                        
                        <a href="<?php echo URL.'feria/isometrica' ?>">
                            <img class="img-src" src="<?php echo IMAGES."feria/imgs/ticket-pago-bg.png"?>" alt="#">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="escarapelaZone">
                    <div class="logoFeria">
                        <img class="img-src" src="<?php echo IMAGES."feria/logos/feria/logoFeriaDemo.png" ?>">
                    </div>
                    <div class="zonaVideoPabellon">
                    </div>

                    <div class="franjaPatrocinadores">
                        <div class="tituloPatrocinadores">
                            <h3>Empresas</h3>
                        </div>
                        <div class="logosPatrocinadoresSecundarios">
                            <div class="">
                                <img src="<?php echo IMAGES.'feria/logos/empresas/OK_COMPUTER.svg' ?>" alt="">
                            </div>
                            <div class="">
                                <img src="<?php echo IMAGES.'feria/logos/empresas/PERU_ETRONICS.svg' ?>" alt="">
                            </div>
                            <div class="">
                                <img src="<?php echo IMAGES.'feria/logos/empresas/VERTICAL.svg' ?>" alt="">
                            </div>
                            <div class="">
                                <img src="<?php echo IMAGES.'feria/logos/empresas/ROQASEG.svg' ?>" alt="">
                            </div>
                            <div class="">
                                <img src="<?php echo IMAGES.'feria/logos/empresas/MIJO_STORE.svg' ?>" alt="">
                            </div>
                            <div class="">
                                <img src="<?php echo IMAGES.'feria/logos/empresas/AUDITEL.svg' ?>" alt="">
                            </div>
                            <div class="">
                                <img src="<?php echo IMAGES.'feria/logos/empresas/GL_TRACKER.svg' ?>" alt="">
                            </div>
                            <div class="">
                                <img src="<?php echo IMAGES.'feria/logos/empresas/OPENINFO-MOD.svg' ?>" alt="">
                            </div>
                            <div class="">
                                <img src="<?php echo IMAGES.'feria/logos/empresas/PROM_PERÚ.svg' ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
<?php require_once INCLUDES.'inc_footer.php'; ?>

</body>

</html>
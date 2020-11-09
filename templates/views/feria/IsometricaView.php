<?php require_once INCLUDES.'inc_header.php'; ?>

<link href="<?php echo CSS.'feria/css.css?family=Roboto+Condensed:400,700' ?>" rel="stylesheet">
<link href="<?php echo CSS.'feria/stilos.css' ?>" rel="stylesheet" type="text/css">
<script src="<?php echo JS.'jquery.min.js' ?>"></script>
<style type="text/css">
.ocultar_name {
    display: block;
}

@media (max-width: 720px) {
    .ocultar_name {
        display: none;
    }
}
</style>
<script>
$(document).ready(function(e) {
    function escogerimagenb() {

    }
    escogerimagenb();
    $(".botonDesplegableExpositores").click(function() {
        $(".listadoExpositoresOculto").slideToggle(100);
        $(".botonDesplegableExpositores img").toggleClass("cerrar");
    })
});
</script>

<div class="clients" class="fondoEntradaFeriaDefault" style="background: #fff;margin-top: 40px">
    <div class=" container">
        <div class="row">
            <div class="wrapp" style="margin-top: 2%">
                <div class="centroFeria">
                    <div class="recorridoMascaraIsometrica">
                        <div class="feriaIsometrica " style="background-image: 
                                url('<?php echo IMAGES."feria/imgs/fondo-isometrico-puertas-izq.png" ?>'), 
                                url('<?php echo IMAGES."feria/imgs/fondo-isometrico-puertas-der.png" ?>'), 
                                url('<?php echo IMAGES."feria/imgs/fondo-isometrico.jpg" ?>'); ">
                            <a href="<?php echo URL.'feria/stand1' ?>" target="_self" class="standIsometrico">
                                <img src="<?php echo IMAGES.'feria/imgs/stand-isometrico.png' ?>" alt="">
                                <div class="logo">
                                    <img src="<?php echo IMAGES.'feria/logos/empresas/OK_COMPUTER.svg' ?>"
                                        style="width: 160px !important; margin: 1px 1px;" alt="Ok Computer">
                                </div>
                                <div class="nombre ocultar_name text-center">
                                    Ok Computer </div>
                            </a>
                            <a href="<?php echo URL.'feria/stand2' ?>" target="_self" class="standIsometrico">
                                <img src="<?php echo IMAGES.'feria/imgs/stand-isometrico.png' ?>" alt="">
                                <div class="logo">
                                    <img src="<?php echo IMAGES.'feria/logos/empresas/PERU_ETRONICS.svg' ?>"
                                        style="width: 160px !important; margin: 1px 1px;" alt="Perú E-tronics">
                                </div>
                                <div class="nombre ocultar_name text-center">
                                    Perú E-tronics </div>
                            </a>
                            <a href="<?php echo URL.'feria/stand3' ?>" target="_self" class="standIsometrico">
                                <img src="<?php echo IMAGES.'feria/imgs/stand-isometrico.png' ?>" alt="">
                                <div class="logo">
                                    <img src="<?php echo IMAGES.'feria/logos/empresas/VERTICAL.svg' ?>"
                                        style="width: 160px !important; margin: 1px 1px;" alt="Vertical Gamers Store">
                                </div>
                                <div class="nombre ocultar_name text-center">
                                    Vertical Gamers Store </div>
                            </a>
                            <a href="<?php echo URL.'feria/stand4' ?>" target="_self" class="standIsometrico">
                                <img src="<?php echo IMAGES.'feria/imgs/stand-isometrico.png' ?>" alt="">
                                <div class="logo">
                                    <img src="<?php echo IMAGES.'feria/logos/empresas/ROQASEG.svg' ?>"
                                        style="width: 160px !important; margin: 1px 1px;" alt="Roqaseg">
                                </div>
                                <div class="nombre ocultar_name text-center">
                                    Roqaseg </div>
                            </a>
                            <a href="<?php echo URL.'feria/stand5' ?>" target="_self" class="standIsometrico">
                                <img src="<?php echo IMAGES.'feria/imgs/stand-isometrico.png' ?>" alt="">
                                <div class="logo">
                                    <img src="<?php echo IMAGES.'feria/logos/empresas/MIJO_STORE.svg' ?>"
                                        style="width: 160px !important; margin: 1px 1px;" alt="Mijo Store">
                                </div>
                                <div class="nombre ocultar_name text-center">
                                    Mijo Store </div>
                            </a>
                            <a href="<?php echo URL.'feria/stand6' ?>" target="_self" class="standIsometrico">
                                <img src="<?php echo IMAGES.'feria/imgs/stand-isometrico.png' ?>" alt="">
                                <div class="logo">
                                    <img src="<?php echo IMAGES.'feria/logos/empresas/AUDITEL.svg' ?>"
                                        style="width: 160px !important; margin: 1px 1px;" alt=" Auditel">
                                </div>
                                <div class="nombre ocultar_name text-center">
                                    Auditel </div>
                            </a>
                            <a href="<?php echo URL.'feria/stand7' ?>" target="_self" class="standIsometrico">
                                <img src="<?php echo IMAGES.'feria/imgs/stand-isometrico.png' ?>" alt="">
                                <div class="logo">
                                    <img src="<?php echo IMAGES.'feria/logos/empresas/GL_TRACKER.svg' ?>"
                                        style="width: 160px !important; margin: 1px 1px;" alt="GL Tracker">
                                </div>
                                <div class="nombre ocultar_name text-center">
                                    GL Tracker </div>
                            </a>
                            <a href="<?php echo URL.'feria/stand8' ?>" target="_self" class="standIsometrico">
                                <img src="<?php echo IMAGES.'feria/imgs/stand-isometrico.png' ?>" alt="">
                                <div class="logo">
                                    <img src="<?php echo IMAGES.'feria/logos/empresas/OPENINFO-MOD.svg' ?>"
                                        style="width: 160px !important; margin: 1px 1px;" alt=" OpenInfo">
                                </div>
                                <div class="nombre ocultar_name text-center">
                                    OpenInfo</div>
                            </a>
                            <a href="<?php echo URL.'feria/stand9' ?>" target="_self" class="standIsometrico">
                                <img src="<?php echo IMAGES.'feria/imgs/stand-isometrico.png' ?>" alt="">
                                <div class="logo">
                                    <img src="<?php echo IMAGES.'feria/logos/empresas/PROM_PERÚ.svg' ?>"
                                        style="width: 160px !important; margin: 1px 1px;" alt="PromPerú">
                                </div>
                                <div class="nombre ocultar_name text-center">
                                    PromPerú </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

</body>

</html>
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
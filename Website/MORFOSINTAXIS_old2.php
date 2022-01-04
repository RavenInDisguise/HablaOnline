<?php
    include_once("auto.php");
?>
<!DOCTYPE html>
<html lang="es">
    <?php
        include("sections/head.php");
        echo "<link href='css/morfo.css' rel='stylesheet' type='text/css' />";
    ?>
    <body>
    <!-- Navigation -->
    <?php
        include("sections/top_page.php");
    ?>

    <!-- Page Content -->
    <div class="container"> 
        <div class="row">
            <div class="col-lg-12">
                <h1 class="titulos">¿Cuál...?: Morfosintáxis</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <h2 class="titulos">Elije la palabra correcta para completar la oración</h2>
            </div>
        </div>
		
        <div id="contenedor">
            <div id="myCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#juego" data-slide-to="0"></li>
                    <li data-target="#juego" data-slide-to="1"></li>
                    <li data-target="#juego" data-slide-to="2"></li>
                    <li data-target="#juego" data-slide-to="3"></li>
                    <li data-target="#juego" data-slide-to="4"></li>
                    <li data-target="#juego" data-slide-to="5"></li>
                    <li data-target="#juego" data-slide-to="6"></li>
                    <li data-target="#juego" data-slide-to="7"></li>
                </ol>
                    <!-- Carousel items -->
                <div class="carousel-inner" style="background:#FFA500;height:490;">
                    <div class="active item" id="primero"><div class="row">
                        <div id="espacio" class="col-lg-12" >
                            <div id="sujetos">
                                <img src="img/img2/flores.png" class="sujeto" style="width:95px">
                            </div>
                            <div class="oracion" align="center">
                                <p class="parrafo">____ flores son hermosas.</p>
                            </div>
                            <div id="sub_espacio">
                                <img src="img/img2/cuadros_las.png" class="imagenes" id="las" onclick="bien()">
                                <img src="img/img2/cuadros_la.png" class="imagenes" id="la" onclick="mal()">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" id="segundo">
                    <div class="row">
                        <div id="espacio" class="col-lg-12">
                            <div id="sujetos">
                                <img src="img/img2/casa.jpg" id="sujeto1" style="width:200px">
                            </div>
                            <div class="oracion1" align="center">
                                <p class="parrafo">____ amo mi casa.</p>
                            </div>
                            <div id="sub_espacio">
                                <img src="img/img2/cuadros_tu.png" class="imagenes" id="tu" onclick="mal()">
                                <img src="img/img2/cuadros_yo.png" class="imagenes" id="yo" onclick="bien()">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" id="tercero">
                    <div class="row">
                        <div id="espacio" class="col-lg-12">
                            <div id="sujetos">
                                <img src="img/img2/perrito.png" class="sujeto_p" style="width:130px">
                            </div>
                            <div class="oracion" align="center">
                                <p class="parrafo">El perro tiene ____ hueso.</p>
                            </div>
                            <div id="sub_espacio">
                                <img src="img/img2/cuadros_un.png" class="imagenes" id="un" onclick="bien()">
                                <img src="img/img2/cuadros_una.png" class="imagenes" id="una" onclick="mal()">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" id="cuarto"><div class="row">
                    <div id="espacio" class="col-lg-12">
                        <div id="sujetos">
                            <img src="img/img2/piña.png" class="sujeto" style="width:95px">
                        </div>
                        <div class="oracion" align="center">
                            <p class="parrafo">La piña es ____ fruta.</p>
                        </div>
                        <div id="sub_espacio">
                            <img src="img/img2/cuadros_una.png" class="imagenes" id="una2" onclick="bien()">
                            <img src="img/img2/cuadros_unas.png" class="imagenes" id="unas" onclick="mal()">
                        </div>
                    </div>
                </div>
                <div class="item" id="quinto"><div class="row">
                    <div id="espacio" class="col-lg-12">
                        <div id="sujetos">
                            <img src="img/img2/juguete.png" id="sujeto_j" style="width:180px;">
                        </div>
                        <div class="oracion" align="center">
                            <p class="parrafo">____ juguete es divertido.</p>
                        </div>
                        <div id="sub_espacio">
                            <img src="img/img2/cuadros_la.png" class="imagenes" id="la2"onclick="mal()">
                            <img src="img/img2/cuadros_el.png" class="imagenes" id="el" onclick="bien()">
                        </div>
                    </div>
                </div>
                <div class="item" id="sexto"><div class="row">
                    <div id="espacio" class="col-lg-12">
                        <div id="sujetos">
                            <img src="img/img2/queque.png" id="sujeto_q" style="width:240px">
                        </div>
                        <div class="oracion" align="center">
                            <p class="parrafo">El queque ____ de fresa.</p>
                        </div>
                        <div id="sub_espacio">
                            <img src="img/img2/cuadros_es.png" class="imagenes" id="es"onclick="bien()">
                            <img src="img/img2/cuadros_son.png" class="imagenes" id="son" onclick="mal()">
                        </div>
                    </div>
                </div>
                <div class="item" id="setimo"><div class="row">
                    <div id="espacio" class="col-lg-12">
                        <div id="sujetos">
                            <img src="img/img2/sol.png" id="sujeto_s" style="width:225px;">
                        </div>
                        <div class="oracion" align="center">
                            <p class="parrafo" style="margin-left:15%">____ sol brilla.</p>
                        </div>
                        <div id="sub_espacio">
                            <img src="img/img2/cuadros_la.png" class="imagenes" id="la"onclick="mal()">
                            <img src="img/img2/cuadros_el.png" class="imagenes" id="el2" onclick="bien()">
                        </div>
                    </div>
                </div>
                <div class="item" id="octavo"><div class="row">
                    <div id="espacio" class="col-lg-12">
                        <div id="sujetos">
                            <img src="img/img2/manzana.png" id="sujeto_m" style="width:120px;">
                        </div>
                        <div class="oracion" align="center">
                            <p class="parrafo">Ella tiene ____ manzana.</p>
                        </div>
                        <div id="sub_espacio">
                            <img src="img/img2/cuadros_una.png" class="imagenes" id="una3"onclick="bien()">
                            <img src="img/img2/cuadros_son.png" class="imagenes" id="son" onclick="mal()">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <!-- Footer -->
        <?php
            include("sections/footer.php");
        ?>
    </div>
    <!-- /.container -->

    <?php
        include("sections/js.php");
        echo "<script type='text/javascript' src='js/morfo.js'></script>";
        echo "<audio id='ganar' src='audio/hooray.mp3'></audio>"
    ?>

</body>

</html>

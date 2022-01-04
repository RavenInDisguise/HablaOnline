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

        <!-- Marketing Icons Section -->
		
		 <div class="row">
            <div class="col-lg-12">
                <h1 class="titulos">¿Cuál...?: Morfosintáxis</h1>
            </div>
        </div>
		
		<?php
        	if(session_verify() !== false):
    	?>

		<div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="titulos">Elije la palabra correcta para completar la oración</h2>
            </div>
        </div>
		
		<br>
		
        <div class="row">
            <div id="espacio" class="col-lg-12">
				<div id="sujetos">
					<img src="img/img2/flores.png" class="sujeto" style="width:95px">
				</div>
				<div class="oracion" align="center">
					<p class="parrafo">____ flores son hermosas.</p>
				</div>
				<div id="sub_espacio">
					<img src="img/img2/cuadros_las.png" class="imagenes" onclick="bien()">
					<img src="img/img2/cuadros_la.png" class="imagenes" onclick="mal()">
				</div>
			</div>
        </div>

        <hr>
		
		 <div class="row">
            <div id="espacio" class="col-lg-12">
				<div id="sujetos">
					<img src="img/img2/casa.jpg" id="sujeto1" style="width:200px">
				</div>
				<div class="oracion1" align="center">
					<p class="parrafo">____ amo mi casa.</p>
				</div>
				<div id="sub_espacio">
					<img src="img/img2/cuadros_tu.png" class="imagenes" onclick="mal()">
					<img src="img/img2/cuadros_yo.png" class="imagenes" onclick="bien()">
				</div>
			</div>
        </div>
		
		<hr>
		
		<div class="row">
            <div id="espacio" class="col-lg-12">
				<div id="sujetos">
					<img src="img/img2/perrito.png" class="sujeto_p" style="width:130px">
				</div>
				<div class="oracion" align="center">
					<p class="parrafo">El perro tiene ____ hueso.</p>
				</div>
				<div id="sub_espacio">
					<img src="img/img2/cuadros_un.png" class="imagenes" onclick="bien()">
					<img src="img/img2/cuadros_una.png" class="imagenes" onclick="mal()">
				</div>
			</div>
		</div>
	
		<hr>

		<div class="row">
            <div id="espacio" class="col-lg-12">
				<div id="sujetos">
					<img src="img/img2/piña.png" class="sujeto" style="width:95px">
				</div>
				<div class="oracion" align="center">
					<p class="parrafo">La piña es ____ fruta.</p>
				</div>
				<div id="sub_espacio">
					<img src="img/img2/cuadros_una.png" class="imagenes" onclick="bien()">
					<img src="img/img2/cuadros_unas.png" class="imagenes" onclick="mal()">
				</div>
			</div>
		</div>
		
		<hr>

		<div class="row">
            <div id="espacio" class="col-lg-12">
				<div id="sujetos">
					<img src="img/img2/juguete.png" id="sujeto_j" style="width:180px;">
				</div>
				<div class="oracion" align="center">
					<p class="parrafo">____ juguete es divertido.</p>
				</div>
				<div id="sub_espacio">
					<img src="img/img2/cuadros_la.png" class="imagenes" onclick="mal()">
					<img src="img/img2/cuadros_el.png" class="imagenes" onclick="bien()">
				</div>
			</div>
		</div>

		<?php
            else:
        ?>
        <div class="row">
            <div class="col-xs-12">
                <div class="panel panel-danger">
                    <div class="panel-heading">No usuario encontrado</div>
                    <div class="panel-body">Para poder jugar a nuestros juegos primero debe iniciar sección</div>
                    <div class="panel-footer">
                        <button type="button" class="btn btn-primary"> 
                            <a href="EXPO.php" style="text-decoration: none; color: white;"> Volver a la página principal </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <?php
            endif;
        ?>
		
        <!-- Footer -->
        <?php
            include("sections/footer.php");
        ?>

    </div>
	
    <!-- /.container -->

    <?php
        include("sections/js.php");
        echo "<script type='text/javascript' src='js/morfo.js'></script>";
    ?>

</body>

</html>

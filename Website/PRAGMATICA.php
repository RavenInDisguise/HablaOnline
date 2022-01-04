<?php
    include_once("auto.php");
?>
<!DOCTYPE html>
<html lang="es">
    <?php
    include("sections/head.php");
    ?>
    <body>
        <?php
            include("sections/top_page.php");
            echo "<link href='css/pikachustyle.css' rel='stylesheet' type='text/css' />";
            echo "<link href='css/ealh.css' rel='stylesheet' type='text/css' />";
        ?>

        <h1>¿Es así la historia?: Pragmática</h1>

        <?php
            if(session_verify() !== false):
        ?>
        
        <h1 id="instrucciones2"> En cada fila ocurre una nueva historia... ¿Serás capaz de completarla correctamente? ¡Juguemos!</h1>
        <h1 class="instrucciones2">
            Línea 1: ¿Cómo harías un jugo de naranja?
            <br>
            Línea 2: ¿Cómo se hace una sopa?
            <br>
            Línea 3: ¿Cómo haces una copa de helado?
        </h1>
        <svg width="600" height="600" id="entorno">
            <g id="fondo"><image xlink:href="img/back3.jpg" width="400" height="400" x="200" y="100"></g>
            <g class="padre" id="0"><image xlink:href="Food/naranja.jpg" class="movil"></g>
            <g class="padre" id="1"><image xlink:href="Food/licuadora.png" class="movil"></g>
            <g class="padre" id="2"><image xlink:href="Food/jugo.png" class="movil"></g>
            <g class="padre" id="3"><image xlink:href="Food/huevo.jpg" class="movil"></g>
            <g class="padre" id="4"><image xlink:href="Food/veggies.png" class="movil"></g>
            <g class="padre" id="5"><image xlink:href="Food/sopa.png" class="movil"></g>
            <g class="padre" id="6"><image xlink:href="Food/both.png" class="movil"></g>
            <g class="padre" id="7"><image xlink:href="Food/cherry.png" class="movil"></g>
            <g class="padre" id="8"><image xlink:href="Food/helados.png" class="movil"></g>
        </svg>
        <audio id="win" src="audio/hooray.mp3"></audio>
        <hr>

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
            include("sections/js2.php");
        ?>

    </body>

</html>
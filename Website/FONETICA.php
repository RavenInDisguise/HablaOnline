<?php
    include_once("auto.php");
?>
<!DOCTYPE html>
<html lang="es">
    <?php
        include("sections/head.php");
        echo "<script type='text/javascript' src='js/jquery.js'></script>";
        echo "<script type='text/javascript' src='js/note.js'></script>";
        echo "<link href='css/note.css' rel='stylesheet' type='text/css' />";
    ?>
    <body>
        <?php
            include("sections/top_page.php");
        ?>

        <h1>No te confundas: Fonética</h1>

        <?php
            if(session_verify() !== false):
        ?>

        <h1 id="instrucciones">¡Escoge el botón que corresponda al nombre del dibujo!</h1>
        <div class="cuadro2">
            <div id="cuadro">
                <img src="Img/img/foco.png" width="150px" height="150px">
                <button class="bot" onclick="Foco();" ><sup>Foco</sup> </button>
                <button class="bot" onclick="Foro();" ><sup>Foro</sup> </button>
                <button class="bot" onclick="Foto();" ><sup>Foto</sup> </button>
                <br>
            </div>
            <div id="cuadro3">   
                <img src="Img/img/solcito.png" width="150px" height="150px">
                <button class="bot" onclick="Sal();" ><sup>Sal</sup> </button>
                <button class="bot" onclick="Son();" ><sup>Son</sup> </button>
                <button class="bot" onclick="Sol();" ><sup>Sol</sup> </button>
                <br>
            </div>
            <div id="cuadro4">   
                <img src="Img/img/torito.png" width="150px" height="150px">
                <button class="bot" onclick="Toro();" ><sup>Toro</sup> </button>
                <button class="bot" onclick="Taza();" ><sup>Taza</sup> </button>
                <button class="bot" onclick="Tira();" ><sup>Tira</sup> </button>
                <br>
            </div>
            <div id="cuadro5">   
                <img src="Img/img/ranita.png" width="150px" height="150px">
                <button class="bot" onclick="Ropa();" ><sup>Ropa</sup> </button>
                <button class="bot" onclick="Rana();" ><sup>Rana</sup> </button>
                <button class="bot" onclick="Risa();" ><sup>Risa</sup> </button>
                <br>
            </div>
            <div id="cuadro6">   
                <img src="Img/img/llavecita.png" width="150px" height="150px">
                <button class="bot" onclick="Llevo();" ><sup>Llevo</sup> </button>
                <button class="bot" onclick="Valle();" ><sup>Valle</sup> </button>
                <button class="bot" onclick="Llave();" ><sup>Llave</sup> </button>
                <br>
            </div>
            <div id="cuadro7">   
                <img src="Img/img/carrito.png" width="150px" height="150px">
                <button class="bot" onclick="Cerro();" ><sup>Cerro</sup> </button>
                <button class="bot" onclick="Carro();" ><sup>Carro</sup> </button>
                <button class="bot" onclick="Cono();" ><sup>Cono</sup> </button>
                <br>
            </div>   
            <div id="cuadro8">   
                <img src="Img/img/gallito.png" width="150px" height="150px">
                <button class="bot" onclick="Gato();" ><sup>Gato</sup> </button>
                <button class="bot" onclick="Lago();" ><sup>Lago</sup> </button>
                <button class="bot" onclick="Gallo();" ><sup>Gallo</sup> </button>
                <br>
            </div>
            <div id="cuadro9">   
                <img src="Img/img/conejito.png" width="150px" height="150px">
                <button class="bot" onclick="Conejo();" ><sup>Conejo</sup> </button>
                <button class="bot" onclick="Parejo();" ><sup>Parejo</sup> </button>
                <button class="bot" onclick="Consejo();" ><sup>Consejo</sup> </button>
                <br>
            </div>
        </div>
        <audio id="win" src="audio/hooray.mp3"></audio>

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

            <hr>
            <!-- Footer -->
            <?php
                include("sections/footer.php");
            ?>
        <!-- /.container -->
        <?php
            include("sections/js.php");
        ?>
    </body>

</html>

<?php
    include_once("auto.php");
?>
<!DOCTYPE html>
<html lang="es">
<?php
    include("sections/head.php");
    echo "<script type='text/javascript' src='js/aeiou.js'></script>";
    echo "<link href='css/aeiou.css' rel='stylesheet' type='text/css' />";
?>
<body>
    <?php
        include("sections/top_page.php");
    ?>

    <h3>A-E-I-O-U: Fonología</h3>
    
    <?php
        if(session_verify() !== false):
    ?>

	<h3 class="instrucciones2">Debes escoger correctamente la vocal que complete la palabra, ¡inténtalo!</h3>
    <div class="cuadro2">
        <div id="cuadro">
            
            <img src="img/img/uvas.png" width="150px" height="150px">
            <h1>__VAS</h1>
            <input type="text" id="n1" placeholder="" onclick="vaciar()">
            <button id="bot" onclick="Vocal()"><sup>Vocal</sup></button>
        </div>
        <div id="cuadro3">
            
            <img src="img/img/avion.png" width="150px" height="150px">
            <h1>__VIÓN</h1>
            <input type="text" id="n2" placeholder="" onclick="vaciar2()">
            <button id="bot" onclick="Vocal2()"><sup>Vocal</sup></button>
        </div>
        <div id="cuadro4">
            
            <img src="img/img/unicor.png" width="150px" height="150px">
            <h1>__NICORNIO</h1>
            <input type="text" id="n3" placeholder="" onclick="vaciar3()">
            <button id="bot" onclick="Vocal3()"><sup>Vocal</sup></button>
        </div>
        <div id="cuadro5">
            
            <img src="img/img/elefan.png" width="150px" height="150px">
            <h1>__LEFANTE</h1>
            <input type="text" id="n4" placeholder="" onclick="vaciar4()">
            <button id="bot" onclick="Vocal4()"><sup>Vocal</sup></button>
        </div>
        <div id="cuadro6">
            <img src="img/img/igloo.png" width="150px" height="150px">
            <h1>__GLÚ</h1>
            <input type="text" id="n5" placeholder="" onclick="vaciar5()">
            <button id="bot" onclick="Vocal5()"><sup>Vocal</sup></button>
        </div>
        <div id="cuadro7">
            <img src="img/img/oso.png" width="150px" height="150px">
            <h1>__SO</h1>
            <input type="text" id="n6" placeholder="" onclick="vaciar6()">
            <button id="bot" onclick="Vocal6()"><sup>Vocal</sup></button>
        </div>
        <div id="cuadro8">
            <img src="img/img/abeja.png" width="150px" height="150px">
            <h1>__BEJA</h1>
            <input type="text" id="n7" placeholder="" onclick="vaciar7()">
            <button id="bot" onclick="Vocal7()"><sup>Vocal</sup></button>
        </div>
        <div id="cuadro9">
            <img src="img/img/iguana.png" width="150px" height="150px">
            <h1>__GUANA</h1>
            <input type="text" id="n8" placeholder="" onclick="vaciar8()">
            <button id="bot" onclick="Vocal8()"><sup>Vocal</sup></button>
        </div>
    </div>
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
        include("sections/js.php");
    ?>
</body>
</html>
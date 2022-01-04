<?php
    include_once("auto.php");
?>
<!DOCTYPE html>
<html lang="es">
    <?php
        include("sections/head.php");
        echo "<script type='text/javascript' src='js/seman.js'></script>";
        echo "<link href='css/seman.css' rel='stylesheet' type='text/css' />";
        include("sections/js3.php");
    ?>
    <body>
        <?php
            include("sections/top_page.php");
        ?>

        <!-- Page Content -->
        <div class="container">

            <!-- Page Heading/Breadcrumbs -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="titulos">Buscatesoros: Semántica</h1>
                </div>
            </div>
            <!-- /.row -->

            <?php
                if(session_verify() !== false):
            ?>
            
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="titulos">Busca las parejas de palabras que tienen una relación. Ejemplo: Cepillo de dientes y pasta dental</h2>
                </div>
            </div>
            
            <br>

            <!-- Content Row -->
            <div class="row">
                <div id="caja" class="col-lg-12">
                    <script type="text/javascript">
                        juego_nuevo();
                    </script>
                </div>
            </div>
            <!-- /.row -->

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

        <!-- jQuery -->

    </body>

</html>

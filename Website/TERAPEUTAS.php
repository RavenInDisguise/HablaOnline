<?php
    include_once("auto.php");
?>
<!DOCTYPE html>
<html lang="es">
    <?php
        include("sections/head.php");
        echo "<link href='css/cons.css' rel='stylesheet' type='text/css' />";
    ?>
    <body>
        <?php
            include("sections/top_page.php");
        ?>

        <!-- Page Content -->
        <div class="container">

            <!-- Marketing Icons Section -->

            <div class="row">
                <div class="col-xs-12">
                    <h1 class="page-header">
                        Consejos de los terapeutas:
                    </h1>
                </div>
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <span></span>
                    <div class=row>
                        <div class="col-xs-12 text-center">
                            <img id="img-expo1" src="img/Consejos/cons3.png" width=700px>
                        </div>
                        <div class="col-xs-12 text-center">
                            <img id="img-expo2" src="img/Consejos/niños1.jpg" width=400px>
                        </div>
                        <div class="col-xs-12 text-center">
                            <img id="img-expo3" src="img/Consejos/cons4.png" width=700px>
                        </div> 
                        <div class="col-xs-12 text-center">
                            <img id="img-expo4" src="img/Consejos/niños2.jpg" width=400px>
                        </div>
                        <div class="col-xs-12 text-center">
                            <img id="img-expo5" src="img/Consejos/cons8.png" width=700px>
                        </div>
                        <div class="col-xs-12 text-center">
                            <img id="img-expo6" src="img/Consejos/niños3.jpg" width=400px>
                        </div>
                        <div class="col-xs-12 text-center">
                            <img id="img-expo7" src="img/Consejos/cons6.png" width=700px>
                        </div>
                        <div class="col-xs-12 text-center">
                            <img id="img-expo8" src="img/Consejos/niños4.jpg" width=400px>
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
        ?>

    </body>

</html>

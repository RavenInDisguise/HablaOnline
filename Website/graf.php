<?php
    include_once("auto.php");

    $title = "Avance de Resultados";

    $user = session_verify();

    if( $user === false ){
            header( "Location:index.php" );
    }

    // We get the user ID
    $user_id = $user[ "id" ];

    $max = 0;

    $query = "SELECT 
                    pts.* 
                FROM 
                    points AS pts

                WHERE user_id = $user_id

                ORDER BY date DESC

                LIMIT 10
                
                ;";

    $res = mysqli_query(conexion(),$query);

    $dataset = [];

    
    while( $record = mysqli_fetch_array( $res ) ){
        $dataset[ (int)$record["game"] ]["data"][] = (int)$record["points"];
    }

    $dataset[ 1 ][ "label" ] = "Fonética";
    $dataset[ 1 ][ "backgroundColor" ] = "window.chartColors.red";
    $dataset[ 1 ][ "borderColor" ] = "window.chartColors.red";
    $dataset[ 1 ][ "fill" ] = false;
    

    $dataset[ 2 ][ "label" ] = "Fonología";
    $dataset[ 2 ][ "backgroundColor" ] = "window.chartColors.orange";
    $dataset[ 2 ][ "borderColor" ] = "window.chartColors.orange";
    $dataset[ 2 ][ "fill" ] = false;
    

    $dataset[ 3 ][ "label" ] = "Morfosintaxis";
    $dataset[ 3 ][ "backgroundColor" ] = "window.chartColors.green";
    $dataset[ 3 ][ "borderColor" ] = "window.chartColors.green";
    $dataset[ 3 ][ "fill" ] = false;
    

    $dataset[ 4 ][ "label" ] = "Pragmática";
    $dataset[ 4 ][ "backgroundColor" ] = "window.chartColors.purple";
    $dataset[ 4 ][ "borderColor" ] = "window.chartColors.purple";
    $dataset[ 4 ][ "fill" ] = false;
    

    $dataset[ 5 ][ "label" ] = "Semántica";
    $dataset[ 5 ][ "backgroundColor" ] = "window.chartColors.blue";
    $dataset[ 5 ][ "borderColor" ] = "window.chartColors.blue";
    $dataset[ 5 ][ "fill" ] = false;
    

    $record_string = [];

    foreach( $dataset AS $key => $dt ){

        $dt[ "data"] = @array_reverse( $dt[ "data"] );
        $record_string[] = "
        {
                            label: '" . $dt["label"] . "',
                            backgroundColor: " . $dt["backgroundColor"] . ",
                            borderColor: " . $dt["borderColor"] . ",
                            data: [
                                " . @implode( "," , $dt["data"] ) . "
                            ],
                            fill: " . ( ( $dt["fill"] === true )?"true":"false"  ) . ",
                            }";

        if( count( $dt["data"] ) > $max  ) $max = count( $dt["data"] );
    }

    $labels = [];
    for( $i = 0 ; $i < $max ; $i++ ){
        $labels[] =  "'Sesión: " . ( $i + 1 ) . "'";
    }


?>
<!DOCTYPE html>
<html lang="es">
<?php
    include("sections/head.php");
    echo "<script type='text/javascript' src='js/utils.js'></script>";
?>
<body>
    <?php
        include("sections/top_page.php");
    ?>
    <div class="col-xs-12 ">
            <ol class="breadcrumb">
                <li><a href="comentarios.php">Comentarios</a></li>
                <li class="active"> <a href="graf.php">Gráfica de juego</a> </li>
            </ol>

            <div style="width:75%; margin-left:auto; margin-right:auto; ">
                <canvas id="canvas"></canvas>
            </div>
    
            
            <script>
                var config = {
                    type: 'line',
                    data: {
                        labels: [ <?php echo implode( "," , $labels ) ?> ],
                        datasets: [
                            /*{
                            label: "Juego Fonética",
                            backgroundColor: window.chartColors.red,
                            borderColor: window.chartColors.red,
                            data: [
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor()
                            ],
                            fill: false,
                            }*/

                            <?php echo  implode( ",",$record_string ); ?>

                    ]
                    },
                    options: {
                        responsive: true,
                        title:{
                            display:true,
                            text:'<?php echo $title ?>'
                        },
                        tooltips: {
                            mode: 'index',
                            intersect: false,
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        },
                        scales: {
                            xAxes: [{
                                display: true,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Sesiones'
                                }
                            }],
                            yAxes: [{
                                display: true,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Puntaje'
                                }
                            }]
                        }
                    }
                };

                window.onload = function() {
                    var ctx = document.getElementById("canvas").getContext("2d");
                    window.myLine = new Chart(ctx, config);
                };

                var colorNames = Object.keys(window.chartColors);
                
            </script>

            <?php
                include("sections/footer.php");
            ?>
            <!-- /.container -->
            <?php
            include("sections/js.php");
            ?>
    </div>
</body>
</html>
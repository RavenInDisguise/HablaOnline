<!-- jQuery -->
<script src="js/jquery.js" type="text/javascript"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"  type="text/javascript"></script>

    <!-- Script to Activate the Carousel -->
    <script type="text/javascript" src="js/phaser.js"></script>
    <script type="text/javascript" src="js/attrib.js"></script>
    <script type="text/javascript" src="js/Chart.bundle.min.js"></script>
    <script type="text/javascript">
    

    var textHide = 'Leer más';
    var textShow = 'Ocultar';

    $( document ).ready(function(){
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    
    $( ".colapsableButton" ).click(function( e ){
        var iddiv = $( this ).attr( "target" );
        if( $( iddiv ).hasClass("in") ){
            $( iddiv ).collapse("hide");
            $( this ).html( textHide );
        }else{
            $("p.collapse").collapse("hide");
           $( iddiv ).collapse("show");
           $( this ).html( textShow ); 
        }
    });

    });

    </script>

function bindKeepContainerH(){
    // keepContainerHeight
    $( window ).resize(function() {
        resizeOnContainer();
    });
}


function resizeOnContainer(){
    $( ".keepContainerHeight" ).height( 0 );
    $( ".keepContainerHeight" ).each(function( index , value ){
        var parentDiv = $( this ).closest(".row");
        var h = parentDiv.height();
        $( this ).height( h - 20 );
        try{
            console.log( h );
        }catch( err ){

        }
    });
}

$(document).ready(function(){
        //document.getElementById("dated").innerHTML="hola";
        var dated = new Date();
        $("#dated").html( dated.getFullYear() );
    
        bindKeepContainerH();
        resizeOnContainer();

    });
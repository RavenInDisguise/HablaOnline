var fecha_ini = null;
var fecha_fin = null;
var typeofgame = 3;

var pts_b = 1000;


function bien(){
    alert("Correcto!");
}
function mal(){
    alert("Intentalo de nuevo");
}

function ganador(){
    fecha_fin = new Date();
	var dif = fecha_fin.getTime() - fecha_ini.getTime();
	var Segundos_de_T1_a_T2 = dif / 1000;
	var Segundos_entre_fechas = Math.abs(Segundos_de_T1_a_T2);
	if(Segundos_entre_fechas == 0){
		Segundos_entre_fechas = pts_b;
	}
	var puntos = pts_b / Segundos_entre_fechas;
	puntos = Math.round(puntos);
	$.post( "function/send_pts.php", { puntos: puntos, type: typeofgame })
		  .done(function( data ) {
			  if(data == "1"){
				alert("¡Lo has hecho bien! El juego ha terminado");
				win.play();
			  }else
				  alert("Hubo un error al enviar los puntos");
	  });
}


$( document ).ready( function( e ){
	fecha_ini = new Date();
} );
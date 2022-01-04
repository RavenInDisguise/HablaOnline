var fecha_ini = null;
var fecha_fin = null;
var typeofgame = 1;

var pts_b = 1000;

function Foco(){
	alert("¡Lo has hecho bien!");
}
function Foro(){
	alert("¡Inténtalo de nuevo!");
}
function Foto(){
	alert("¡Inténtalo de nuevo!");
}


function Sal(){
	alert("¡Inténtalo de nuevo!");
}
function Son(){
	alert("¡Inténtalo de nuevo!");
}
function Sol(){
	alert("¡Lo has hecho bien!");
}


function Toro(){
	alert("¡Lo has hecho bien!");
}
function Taza(){
	alert("¡Inténtalo de nuevo!");
}
function Tira(){
	alert("¡Inténtalo de nuevo!");
}


function Ropa(){
	alert("¡Inténtalo de nuevo!");
}
function Rana(){
	alert("¡Lo has hecho bien!");
}
function Risa(){
	alert("¡Inténtalo de nuevo!");
}


function Llevo(){
	alert("¡Inténtalo de nuevo!");
}
function Valle(){
	alert("¡Inténtalo de nuevo!");
}
function Llave(){
	alert("¡Lo has hecho bien!");
}


function Cerro(){
	alert("¡Inténtalo de nuevo!");
}
function Carro(){
	alert("¡Lo has hecho bien!");
}
function Cono(){
	alert("¡Inténtalo de nuevo!");
}



function Gato(){
	alert("¡Inténtalo de nuevo!");
}
function Lago(){
	
	alert("¡Inténtalo de nuevo!");	
}
function Gallo(){
	alert("¡Lo has hecho bien!");
}


function Conejo(){
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
function Parejo(){
	alert("¡Inténtalo de nuevo!");
	
}
function Consejo(){
	alert("¡Inténtalo de nuevo!");
}


$( document ).ready( function( e ){
	fecha_ini = new Date();
} );
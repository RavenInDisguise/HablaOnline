var fecha_ini = null;
var fecha_fin = null;
var typeofgame = 2;

var pts_b = 1000;


function vaciar(){
  document.getElementById("n1").value = "";
}
function vaciar2(){
  document.getElementById("n2").value = "";
}
function vaciar3(){
  document.getElementById("n3").value = "";
}
function vaciar4(){
  document.getElementById("n4").value = "";
}
function vaciar5(){
  document.getElementById("n5").value = "";
}
function vaciar6(){
  document.getElementById("n6").value = "";
}
function vaciar7(){
  document.getElementById("n7").value = "";
}
function vaciar8(){
  document.getElementById("n8").value = "";
}

function Vocal(){
	var vec= "u";
	var vec2="U";
	var voc = document.getElementById("n1").value;
	voc.toLowerCase();
   	if(voc==vec){
		alert("¡Sigue así!");		
		}
		else
			if(voc==vec2){
				alert("¡Sigue así!");
			}
		else 
			alert("Inténtalo de nuevo");
}
function Vocal2(){
	var vec= "a";
	var vec2="A";
	var voc = document.getElementById("n2").value;
	voc.toLowerCase();
   	if(voc==vec){
		alert("¡Sigue así!");
		}
		else
			if(voc==vec2){
				alert("¡Sigue así!");	
			}
		else 
			alert("Inténtalo de nuevo");
}
function Vocal3(){
	var vec= "u";
	var vec2="U";
	var voc = document.getElementById("n3").value;
	voc.toLowerCase();
   	if(voc==vec){
		alert("¡Sigue así!");
		}
		else
			if(voc==vec2){
				alert("¡Sigue así!");	
			}
		else 
			alert("Inténtalo de nuevo");
}
function Vocal4(){
	var vec= "e";
	var vec2="E";
	var voc = document.getElementById("n4").value;
	voc.toLowerCase();
   	if(voc==vec){
		alert("¡Sigue así!");
		}
		else
			if(voc==vec2){
				alert("¡Sigue así!");
			}
		else 
			alert("Inténtalo de nuevo");
}
function Vocal5(){
	var vec= "i";
	var vec2="I";
	var voc = document.getElementById("n5").value;
	voc.toLowerCase();
   	if(voc==vec){
		alert("¡Sigue así!");
		}
		else
			if(voc==vec2){
				alert("¡Sigue así!");
			}
		else 
			alert("Inténtalo de nuevo");
}
function Vocal6(){
	var vec= "o";
	var vec2="O";
	var voc = document.getElementById("n6").value;
	voc.toLowerCase();
   	if(voc==vec){
		alert("¡Sigue así!");
		}
		else
			if(voc==vec2){
				alert("¡Sigue así!");
			}
		else 
			alert("Inténtalo de nuevo");
}
function Vocal7(){
	var vec= "o";
	var vec2="O";
	var voc = document.getElementById("n7").value;
	voc.toLowerCase();
   	if(voc==vec){
		alert("¡Sigue así!");
		}
		else
			if(voc==vec2){
				alert("¡Sigue así!");
			}
		else 
			alert("Inténtalo de nuevo");
}
function Vocal8(){
	var vec= "i";
	var vec2="I";
	var voc = document.getElementById("n8").value;
	voc.toLowerCase();
   	if(voc==vec){
		alert("¡Ganaste! El juego ha terminado");
			ganar();
		}
		else
			if(voc==vec2){
				alert("¡Ganaste! El juego ha terminado");
				ganar();
			}
		else 
			alert("Inténtalo de nuevo");
}

function ganar(){
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

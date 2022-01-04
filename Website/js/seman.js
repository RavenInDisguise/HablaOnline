var fecha_ini = null;
var fecha_fin = null;
var typeofgame = 4;

var pts_b = 1000;


var division = ['Lapiz','Borrador','Sombrero','Cabeza','Conejo','Zanahoria','Gato','Lana','Perro','Hueso','Nube','Lluvia','Ola','Arena','Flor','Mariposa'];
var valores = [];
var caratula = [];
var vuelta = 0;
Array.prototype.baraja = function(){
    var i = this.length, j, temp;
    while(--i > 0){
        j = Math.floor(Math.random() * (i+1));
        temp = this[j];
        this[j] = this[i];
        this[i] = temp;
    }
}
function juego_nuevo(){
    
    vuelta = 0;
    var salida = '';
    division.baraja();
    for(var i = 0; i < division.length; i++){
        salida += '<div id="tile_'+i+'" onclick="memoryFlipTile(this,\''+division[i]+'\')"></div>';
    }
    document.getElementById('caja').innerHTML = salida;
}
function memoryFlipTile(tile,val){
    if(tile.innerHTML == "" && valores.length < 2){
        tile.style.background = '#FFF';
        tile.innerHTML = val;
        if(valores.length == 0){
            valores.push(val);
            caratula.push(tile.id);
        } else if(valores.length == 1){
            valores.push(val);
            caratula.push(tile.id);
            if(valores[0] == 'Sombrero' && valores[1]=='Cabeza' || valores[0] == 'Cabeza' && valores[1]=='Sombrero'){
                vuelta += 2;

                valores = [];
                caratula = [];
                
                if(vuelta == division.length){
                    alert("Felicitaciones, lo has logrado. Haz click en el boton para jugar de nuevo");
                    document.getElementById('caja').innerHTML = "";
                    ganador();
                }
            }
            if(valores[0] == 'Zanahoria' && valores[1]=='Conejo' || valores[0] == 'Conejo' && valores[1]=='Zanahoria'){
                vuelta += 2;

                valores = [];
                caratula = [];
                
                if(vuelta == division.length){
                    alert("Felicitaciones, lo has logrado. Haz click en el boton para jugar de nuevo");
                    document.getElementById('caja').innerHTML = "";
                    ganador();
                }
            } 
            if(valores[0] == 'Flor' && valores[1]=='Mariposa' || valores[0] == 'Mariposa' && valores[1]=='Flor'){
                vuelta += 2;

                valores = [];
                caratula = [];
                
                if(vuelta == division.length){
                    alert("Felicitaciones, lo has logrado. Haz click en el boton para jugar de nuevo");
                    document.getElementById('caja').innerHTML = "";
                    ganador();
                }
            } 
            if(valores[0] == 'Nube' && valores[1]=='Lluvia' || valores[0] == 'Lluvia' && valores[1]=='Nube'){
                vuelta += 2;
                
                valores = [];
                caratula = [];

                if(vuelta == division.length){
                    alert("Felicitaciones, lo has logrado. Haz click en el boton para jugar de nuevo");
                    document.getElementById('caja').innerHTML = "";
                    ganador();
                }
            }
            if(valores[0] == 'Lapiz' && valores[1]=='Borrador' || valores[0] == 'Borrador' && valores[1]=='Lapiz'){
                vuelta += 2;

                valores = [];
                caratula = [];

                if(vuelta == division.length){
                    alert("Felicitaciones, lo has logrado. Haz click en el boton para jugar de nuevo");
                    document.getElementById('caja').innerHTML = "";
                    ganador();
                }
            }
            if(valores[0] == 'Gato' && valores[1]=='Lana' || valores[0] == 'Lana' && valores[1]=='Gato'){
                vuelta += 2;

                valores = [];
                caratula = [];

                if(vuelta == division.length){
                    alert("Felicitaciones, lo has logrado. Haz click en el boton para jugar de nuevo");
                    document.getElementById('caja').innerHTML = "";
                    ganador();
                }
            }
            if(valores[0] == 'Perro' && valores[1]=='Hueso' || valores[0] == 'Hueso' && valores[1]=='Perro'){
                vuelta += 2;

                valores = [];
                caratula = [];

                if(vuelta == division.length){
                    alert("Felicitaciones, lo has logrado. Haz click en el boton para jugar de nuevo");
                    document.getElementById('caja').innerHTML = "";
                    ganador();
                }
            }
            if(valores[0] == 'Ola' && valores[1]=='Arena' || valores[0] == 'Arena' && valores[1]=='Ola'){
                vuelta += 2;

                valores = [];
                caratula = [];

                if(vuelta == division.length){
                    alert("Felicitaciones, lo has logrado. Haz click en el boton para jugar de nuevo");
                    document.getElementById('caja').innerHTML = "";
                    ganador();
                }
            }
            else {
                function voltear_2(){

                    var tile_1 = document.getElementById(caratula[0]);
                    var tile_2 = document.getElementById(caratula[1]);
                    tile_1.style.background = 'url(img/img2/tile_bg.jpg) no-repeat';
                    tile_1.innerHTML = "";
                    tile_2.style.background = 'url(img/img2/tile_bg.jpg) no-repeat';
                    tile_2.innerHTML = "";
                    
                    valores = [];
                    caratula = [];
                }
                setTimeout(voltear_2, 700);
            }
        }
    }
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
				win.play();
			  }else
				  alert("Hubo un error al enviar los puntos");
      });
    juego_nuevo();
}


$( document ).ready( function( e ){
	fecha_ini = new Date();
} );
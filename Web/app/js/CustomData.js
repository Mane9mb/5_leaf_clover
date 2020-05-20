//// DATA ////
// *****************
// Jugador
// P
// *****************
// Paredes
// 1-9 --> wallx.png
// *****************
// Objetos
// a-j --> objx.png
// *****************
class CustomDATA extends DATA{
	constructor(){
		super();
	}

	_ini(){
		super._ini();

let aux=`
11111111111111111111111111111111
11111111111111111111111111111111
1                              1
1             111111111111111111
1     P                        1
1             111111111111111111
1                              1
11111111 11111111111111111111111
       1 1                      
       1 1                      
11111111 11111111111111111111111
21111111 111111111111111111111 1
2111111                        2
211   1  22222222222222222222222
211 1 1                     1111
211 1 1        11111111111111111
211 1                         11
111 1122111111111111111111111 11
111 1                       1 11
111 1111111111111111111111111 11
1      1                       1
1      1111 11111111111111111111
1      1  1      111111111111111
1      1  1 11                 1
1      1111 1111111111111111 111
1                      11111 111
1111111111111111111111111111 111



`;
		this.set('map0',aux);

aux=`
<h1>Bienvenida a 5leafClover</h1>
<p>Sigue las pistas para completar el juego!</p>
			<hr/>
<h2>Pulsa m para para salir del menú</h2>
			<hr/>
`;
		this.set('welcome',aux);
aux=`
<h1>Enhorabuena</h1>
<h2>Has completado tu misión</h2>
`;
		this.set('missionCompleted',aux);
aux=`
<h1>Algo está sucediendo</h1>
<p>Se ha oido un ruido. Parece como si se hubiera abierto una puerta secreta.</p>
			<hr/>
<h2>Investiga la zona</h2>
			<hr/>
`;
		this.set('missionSkull',aux);

aux=`
<h1>Utiliza el poder de la calavera</h1>
<p>Hay que buscar el lugar al que pertenece la calavera</p>
			</p><img src='app/img/wall6.png'/></p>
<h2>Busca este símbolo y deposita la calavera a sus pies</h2>
			<hr/>
<h2>Para dejar un objeto pulsa la tecla i</h2>
			<hr/>
`;
		this.set('missionSkull2',aux);
aux=`
<h1>Salir del laberinto</h1>
<p>Utiliza las bombas para salir del laberinto</p>
			<p><img src='app/img/bomb.png'/></p>
<h2>Esto va a ser divertido ...</h2>
`;
		this.set('missionKill',aux);

aux=`
<h1>Eliminar el bicho</h1>
<p>Este bicho puede ser eliminado utilizando algún objeto</p>
			<p><img src='app/img/obja.png'/></p>
			<hr/>
<h2>Investiguemos un poco ...</h2>
			<hr/>
`;
		this.set('missionKill1',aux);
aux=`
<h1>Eliminar el bicho</h1>
<p>Probemos a utilizar este objeto, quizá podamos eliminar el bicho</p>
			<p><img src='app/img/habilidadfuego.png'/></p>
<p>Volvamos a ver ...</p>
<hr/>
<h2>Botón izquierdo de ratón para lanzar objeto</h2>
			<hr/>
`;
		this.set('missionKill2',aux);
aux=`
<h1>Deshabilitado una puerta</h1>
<p>Una puerta ha quedado deshabilitada.</p>
			<p><img src='app/img/.png'/></p>
			<hr/>
<h2>Quizás utilizando un explosivo ...</h2>
			<hr/>
`;
		this.set('missionBomb',aux);
aux=`
<h1>Gestión del Inventario</h1>
<p>Los objetos se colocan en el inventario al tocarlos</p>
<p>Tienes 10 posiciones de inventario:</p>
			<hr/>
<h2>1 2 3 4 5 6 7 8 9 0</h2>
			<hr/>
<h2>Cada posicón se representa con un cuadrado en la parte superior de la pantalla</h2>
			<hr/>
<h2>Cambia de posición con la tecla del número correspondiente</h2>
			<hr/>
<h2>Sólo puedes tener un objeto por posición</h2>
			<hr/>
`;
		this.set('multipleObjects',aux);
aux=`
<h1>Captura la tortuga</h1>
<p>Para capturar la tortuga tienes que decir la palabra "tortuga"</p>
</hr>
<p>Haz click en la tortuga para oir cómo se pronuncia</p>
</hr>
<p>
<button onclick="
 speechSynthesis.speak(new SpeechSynthesisUtterance('tortuga'));
		">
<img src='app/img/turtle.png'/>
			</button>
			</p>
</hr>
<h2>Para hablara pulsa la tecla "h"</h2>
`;
		this.set('missionGetTurtle',aux);
aux=`
<h1>Posición ocupada</h1>
			<p>Selecciona una posición libre en el menú</p>
			<hr/>
			<h2>Para ello utiliza las teclas numéricas del 1 al 9</h2>
			<hr/>
`;
		this.set('selectAvailableStopMenu',aux);
aux=`
<h1>Enhorabuena, has cogido la tortuga</h1>
<p><img src='app/img/turtle.png'/></p>
`;
		this.set('turtleOK',aux);

	}
}

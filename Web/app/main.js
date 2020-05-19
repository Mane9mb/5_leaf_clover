function main(){
	// CustomGame
	// Parámetros
	// Tamaño mapa columnas
	// Tamaño mapa filas
	// Tamaño sprites
	// Pantalla completa
	// Minimapa2D
	// Debug por consola
	CustomGame.configureGame(32,32,64,false,true,true);
	// Ground&Ceiling
	// Establece color degradado techo
	// CustomGame.setGradientCeiling('lightblue','red');
	// Establece imagen de fondo
	CustomGame.setImageBackground("app/img/kk.jpg");
	// Establece color degradado suelo
	CustomGame.setGradientGround('gray','lightgray');
	// Custom behaviour
	CustomGame.createUsableItemShot("shot",3,3,"app/img/bomb.png","mataX");
	CustomGame.createAnimatedItem("killable",18,4,"app/img/spriteBicho.png",1,1,20,10,2,[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19],"mataY",0,9,10,19);
	CustomGame.createUsableItemShot("shot2",29,3,"app/img/habilidadfuego.png","mataY");
	CustomGame.createBreakableWall("killablewall",14,9,"app/img/wall3.png","mataX");
	CustomGame.createUsableItem("skull",3,9,"app/img/objc.png");

	CustomGame.createAnimatedItem("npc1",9,6,"app/img/spriteBicho.png",1,1,20,10,2,[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19],"mataY",0,9,10,19);
	CustomGame.createAnimatedItem("npc2",10,9,"app/img/spriteBicho.png",1,1,20,10,2,[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19],"mataY",0,9,10,19);

	CustomGame.createItem("turtle",14,3,"app/img/turtle.png");
	CustomGame.showMessage('welcome');

}

window.onload = main;

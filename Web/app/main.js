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
	CustomGame.createUsableItemShot("shot2",30,2,"app/img/habilidadfuego.png","mataY");
	CustomGame.createUsableItemShot("shot2",30,4,"app/img/habilidadAgua.png","mataY");
	CustomGame.createUsableItemShot("shot2",30,6,"app/img/habilidadaire.png","mataY");
	CustomGame.createBreakableWall("killablewall",8,8,"app/img/wall3.png","mataY");
	CustomGame.createBreakableWall("killablewall",29,18,"app/img/wall3.png","mataY");
	CustomGame.createKillableItem("killableBoss",29,17,"app/img/primerboss.png","mataY");
	CustomGame.createKillableItem("killableBoss",28,24,"app/img/tercerboss.png","mataY");
	CustomGame.createUsableItem("skull",3,9,"app/img/objc.png");
	CustomGame.createBreakableWall("killablewall",28,25,"app/img/wall3.png","mataY");
	
	//jefe secreto

	CustomGame.createBreakableWall("killablewall",3,14,"app/img/wall3.png","mataY");
	CustomGame.createBreakableWall("killablewall",3,15,"app/img/wall3.png","mataY");
	CustomGame.createBreakableWall("killablewall",3,16,"app/img/wall3.png","mataY");
	CustomGame.createBreakableWall("killablewall",3,17,"app/img/wall3.png","mataY");
	CustomGame.createBreakableWall("killablewall",3,18,"app/img/wall3.png","mataY");
	CustomGame.createBreakableWall("killablewall",3,19,"app/img/wall3.png","mataY");
	CustomGame.createBreakableWall("killablewall",7,25,"app/img/wall3.png","mataY");

	CustomGame.createKillableItem("killableBoss",2,24,"app/img/segundoboss.png","mataY");

	CustomGame.showMessage('welcome');

}

window.onload = main;

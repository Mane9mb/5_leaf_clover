
class CustomMission{
	constructor(objID,activated,x,y,speak,test){
		this.objID=objID;
		this.activated=activated;
		this.completed=false;
		this.posx=x;
		this.posy=y;
		this.speak=speak;
		this.speakTest=test;
	}
	reset(x,y,activated){
		this.posx=x;
		this.posy=y;
		this.activated=activated;
		this.completed=false;
	}
}


class CustomGame extends BaseGame{
	// Custom variables
	static msgObject1=false;
	static msgBomb=false;
	static msgMultipleInventory=false;
	static missionTurtle=false;
	static turtleOK=false;
	static turtle=new CustomMission("turtle",false,14,3,false,"tortuga");
	// Messages from the objects
	// msg: text message
	// obj: object sending the message
	// par: array with params
	static protocol(msg,obj,par){
		switch(msg){
			case 'dropItem':
				if(
					obj._id=="skull"
					&&
					par[0]==16
					&&
					par[1]==22
				)
				{
					CustomGame.showMessage('missionCompleted');
				}
				if(
					obj._id==CustomGame.turtle.objID
				)
				{
					CustomGame.turtle.reset(par[0],par[1],false);
				}
				break;
			case 'takeItem':
				if(
					obj._id=="shot"
				){
					CustomGame.showMessage('missionKill');
				}
				if(
					obj._id=="shot2"
				){
					CustomGame.showMessage('missionKill2');
				}
				if(
					obj._id=="skull"
				){
					CustomGame.remWallXY(6,5);
					CustomGame.remWallXY(7,5);
					CustomGame.showMessage('missionSkull2');
				}
				break;
			case 'touchItem':
				break;
			case 'useItem':
				break;
			case 'selectItem':
				break;
			case 'dieObject':
				if(obj._id=="killable"){
					CustomGame.remWallXY(29,5);
					CustomGame.showMessage('missionSkull');
				}
				break;
			case 'playerPosition':
				if(
					CustomGame.msgBomb==false
					&&
					par[0]==22
					&&
					par[1]==9
				){
					CustomGame.msgBomb=true;
					CustomGame.showMessage('missionBomb');
				}
				if(
					CustomGame.msgMultipleInventory==false
					&&
					par[0]==3
					&&
					par[1]==4
				){
					CustomGame.msgMultipleInventory=true
					CustomGame.createBreakableWall("killablewall",3,1,"app/img/wall3.png","mataX");
					CustomGame.addWallXY(3,6,1);
					CustomGame.showMessage('multipleObjects');
				}
				if(
					CustomGame.msgObject1==false
					&&
					par[0]==18
					&&
					par[1]==4
				){
					CustomGame.msgObject1=true;
					CustomGame.showMessage('missionKill1');
				}
				if(
					CustomGame.turtle.completed==false
					&&
					par[0]==CustomGame.turtle.posx
					&&
					par[1]==CustomGame.turtle.posy
				)
				{
					CustomGame.turtle.activated=true;
					CustomGame.turtle.speak=true;
					CustomGame.showMessage('missionGetTurtle');
				}
				break;
			case 'speechToText':
				if(
					CustomGame.turtle.speak==true
					&&
					par[0] == CustomGame.turtle.speakTest
				){
					if(CustomGame.takeItem(CustomGame.getObject(CustomGame.turtle.objID))){
						CustomGame.showMessage('turtleOK')
						CustomGame.turtle.activated=false;
						CustomGame.turtle.completed=true;
						CustomGame.turtle.speak=false;
					}else{
						CustomGame.showMessage('selectAvailableStopMenu');
					}
				}
				break;
		}
	}
}


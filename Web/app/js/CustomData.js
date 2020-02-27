//// DATA ////
class CustomDATA extends DATA{
	constructor(){
		super();
	}

	_ini(){
		super._ini();

let aux=`
11111111111111111111111111111111
1                              1
1                    111111    1
1                    1    1    1
1   P     111111111111    1    1
1                              1
1                              1
11111111111111111111111111111111
`;
		this.set('map0',aux);
	}
}

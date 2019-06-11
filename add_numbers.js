"use strict";

function add() {
	var length = Number(document.getElementById('length').value);
    var width = Number(document.getElementById('width').value);
	
	var mpr = document.getElementById('mpr').value;
	var mprResult;
	
	// Determine the correct mpr Result number
	switch(mpr) {
	  case "2800":
	  	var mprResult = .25;
		break;
	  case "2400/2500":
	  	var mprResult = .23;
		break;
	  case "2200":
	  	var mprResult = .23;
		break;
	  case "1900":
	  	var mprResult = .23;
		break;
	  case "1500":
	  	var mprResult = .23;
		break;
	  case "1200 Carbon":
	  	var mprResult = .23;
		break;
	}
	var mprResult = 1;

    document.getElementById('result').innerHTML =.39*0.818/(1-(length*2.125+(width-2.125)*2.125)/(length*width))*mprResult;
    return false;
}

document.getElementById('go').addEventListener('click', add);
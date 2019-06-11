"use strict";

function add() {
    var length = Number(document.getElementById('length').value);
    var width = Number(document.getElementById('width').value);
	var mprResult = Number(document.getElementById('mpr').value);
	var cfmResult = Number(document.getElementById('cfm').value);


	var result = cfmResult*0.818/(1-(length*2.125+(width-2.125)*2.125)/(length*width))*mprResult;
    document.getElementById('result').innerHTML = result.toFixed(2);
    return false;
}

document.getElementById('go').addEventListener('click', add);
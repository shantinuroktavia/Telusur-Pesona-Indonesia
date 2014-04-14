function hide (divName) {
	document.getElementById(divName).style.visibility = "hidden"
}

function show (divName, ordinat, absis, lokasi){

	varTime = setTimeout(function() {hidden(divName)}, 4000);
	x = ordinat;
	y = absis;
	p = document.getElementById(divName).style.width;
	document.getElementById(divName).style.left = x + "px";
	document.getElementById(divName).style.top = y + 70 +"px";
	document.getElementById(divName).style.visibility = "visible";
	document.getElementById(divName).style.left = x + "px";
	document.getElementById("wilayah").innerText = lokasi;
}

function stopper (divName, ordinat, absis, lokasi){

	clearTimeOut(varTime);
	show(divName, ordinat, absis, lokasi);
}
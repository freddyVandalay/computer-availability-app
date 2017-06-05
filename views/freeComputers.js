var totalFree = 0;
var firstFree = 0;
var secondFree = 0;
function totalFreeComputers(tfc){
     totalFree = tfc;
}
function firstFree(ffc){
     firstFree = ffc;
}
function divFirstFree(ffc){
	if ((ffc/16) > 0.7 ){
     	document.getElementById("h1floor").style.backgroundColor = "#2ECC71";
    } else if ((ffc/16) > 0.3){
    	document.getElementById("h1floor").style.backgroundColor = "#FFBB00";
    } else {
    	document.getElementById("h1floor").style.backgroundColor = "#E74C3C";
    }
}
function secondFree(sfc){
     secondFree = sfc;
}
function divSecondFree(sfc){
	if ((sfc/16) > 0.7 ){
     	document.getElementById("h2floor").style.backgroundColor = "#2ECC71";
    } else if ((sfc/16) > 0.3){
     	document.getElementById("h2floor").style.backgroundColor = "#FFBB00";
    } else {
     	document.getElementById("h2floor").style.backgroundColor = "#E74C3C";
    }
}
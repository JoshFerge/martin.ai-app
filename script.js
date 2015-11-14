function goPage() {
	window.location = "localhost:8080/enterpage.html"
}

window.onload = function() {
	document.getElementById("Text").style.visibility = "hidden";
}


function makeTextField() {
	document.getElementById("Add").style.visibility = "hidden"
	document.getElementById("Text").style.visibility = "visible"
	document.getElementById("AddText").innerHTML = "Just paste in your interview. I will take care of the rest!"
	
}



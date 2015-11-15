function goPage() {
	window.location = "localhost:8080/enterpage.html"
}

window.onload = function() {
	document.getElementById("Text").style.visibility = "hidden";
}


function makeTextField() {
	document.getElementById("Add").style.visibility = "hidden"
	// document.getElementById("Text").style.visibility = "visible"
	document.getElementById("AddText").innerHTML = "Just upload your interviews! I will take care of the rest!<br><br> <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\".bs-example-modal-lg\" >Upload Document</button> "
	
}



$("#modal").click(function() {
	window.location = "thinking.html"
});

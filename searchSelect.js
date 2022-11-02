function selector(){
	var select = document.getElementById("Tabel").value;
	construction(select);
	contract(select);
	drawings(select);
	manuals(select);
	submittals(select);
}

//  construcion check
function construction(field){
	if(field == "construction"){
		document.getElementById().style.display = "visable";
	}else{
		document.getElementById().style.display = "none";
	}
}
// contract check
function contract(field){
	if(field == "contract"){
		document.getElementById().style.display = "visable";
	}else{
		document.getElementById().style.display = "none";
	}
}
// drawings check 
function drawings(field){
	if(field == "drawings"){
		document.getElementById().style.display = "visable";
	}else{
		document.getElementById().style.display = "none";
	}
}
// manuals check
function manuals(field){
	if(field == "manuals"){
		document.getElementById().style.display = "visable";
	}else{
		document.getElementById().style.display = "none";
	}
}
// submittals check
function submittals(field){
	if(field == "submittals"){
		document.getElementById().style.display = "visable";
	}else{
		document.getElementById().style.display = "none";
	}
}

selector();
// JavaScript Document
function  clientValidate(myForm){
	
	var fail = validateName(myForm.Name.value);
		fail = fail + validateSurname(myForm.Surname.value);
		fail = fail + validateEmail(myForm.Email.value);
		fail = fail + validateCell(myForm.Phone.value);		
		fail = fail + validateMessage(myForm.Bis.value);
	
	if(fail != ""){
		return false;
	}else{		
		return true;
		
	}
}


// validate the name input
function validateName(feild){
	if(feild===""){
		document.getElementById("N").style.visibility = "visible";
		
		return "a";
	} else{
		document.getElementById("N").style.visibility = "hidden";
		return "";
	}
}// validate the Surname input
function validateSurname(feild){
	if(feild==""){
		document.getElementById("S").style.visibility = "visible";
		return "a";
	} else{
		document.getElementById("S").style.visibility = "hidden";
		return "";
	}
}
// validate the Email input
function validateEmail(feild){
	var check = /^\S+@\S+\.\S+$/;
	
	if(feild==""){
		document.getElementById("E").style.visibility = "visible";
		return "a";
	}else if(feild.match(check)){
		document.getElementById("E").style.visibility = "hidden";
		return "";	 
	}else{
		document.getElementById("E").style.visibility = "visible";
		return "a";
	}
}
// validate the Celll input
function validateCell(feild){
	var check = /^[0-9]\d{9}$/;
	if(feild==""){
		document.getElementById("C").style.visibility = "visible";
		return "a";
	} else if( feild.match(check)){
		document.getElementById("C").style.visibility = "hidden";
		return "";
	}else{
		document.getElementById("C").style.visibility = "visible";
		return "a";
	}
}

// validate the message input
function validateMessage(feild){
	if(feild==""){
		document.getElementById("M").style.visibility = "visible";
		return "a";
	} else{
		document.getElementById("M").style.visibility = "hidden";
		return "";
	}
	
}

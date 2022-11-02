<?php


//geting info from contact form
	$name = $_POST['name1'];
	$surname = $_POST['surname1'];
	$email = $_POST['email1'];
	$cell = $_POST['cell1'];
	

	$message = $_POST['mess1'];
	
	
	$myEmail = "justin@squiggles.dev";
	$tital = ' new Form Submission';
	// setting up the documetn format
	$fromDets = "Name :  $name \n".
				"surname:  $surname \n".
				"Email :  $email \n".
				"Cell :   $cell \n";
				
	
					
	// message body
	$email_body = "$fromDets \n".
					"$message \n";
	//header
	$header1 =  'MIME-Version: 1.0' . "\r\n"; 
	$header1 .= "From: $email ". "\r\n";
	//$header1 .= "reply to : $email "."\r\n";
	
	
	//customer section
	$custMess ="Thank you for contacting Eternity Servics \n".
				"We hope you have a great day , \n".
				"Thank you \n";	
	$subject = "Etenity servics contact";

	$header2 =  'MIME-Version: 1.0' . "\r\n";
	$header2 .= 	"Thank you for contacting us, we will respond to your email as soon as possible";
				
	//Email to be sent
	mail($myEmail,$email_body,$header1);
	mail($email,$subject,$custMess,$header2);
	echo"
	<script>
		alert('Your message has bean sent');
		window.location.href =\"conatact.html\";
	</script>	
	";



?>
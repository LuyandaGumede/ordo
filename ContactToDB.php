<?php

	$name = $_POST['name1'];
	$surname = $_POST['surname1'];
	$email = $_POST['email1'];
	$cell = $_POST['cell1'];
	$message = $_POST['mess1'];

//databas set up
	$con = new mysqli('localhost','root','','client'); // for the localhost on xampp
	if (!$con) {
		die("Connection failed: ".mysqli_connect_error());
	}
	
	$query = "INSERT INTO `clients`(`name`, `surname`, `email`, `cell`,`message`) VALUES ('$name','$surname','$email','$cell','$message')";
//email setup
$header =  'MIME-Version: 1.0' . "\r\n"; 
$message1 = "<html>
				<body style ='width:600px;'>
					<!-- email header section-->
					<div class='header' style ='text-align: center; padding-top: 20px;padding-bottom: 10px; background-color: #EBEBEB; border-bottom-style: groove ; border-bottom-color: #D800FF; '>
						<img src='Images/logo ES.png' width='80%'>
					</div>
					<!-- email body section-->
					<div class='mailBody' style='padding: 20px; padding-left: 50px;' >
						<h2>Hello ".$name."</h2>
						<h3>Thank you for contacting us, we will respond to message as soon as possible.</h3>
						<p> If you have any more questions about our services, don't hesitate to get in touch.</p>
						<p>You can cotact Eternity Services via:</p>
						<ul>
							<li>Email: 	info@eternityservices.co.za</li>
							<li>Phone: 	082 723 123</li>
							<li>Fax  : 	+27 021 3452</li>
						</ul>
						<h4> Kind Regards </h4>
						<h4> Eternity Services </h4>
						
					</div>
					<!-- email footer section-->
					<div class='footer' style='text-align: center; border-top-style: groove ; border-top-color: #D800FF; position:relative;'>
						<img src='Images/opacity2.jpg' alt='img' style='width: 600px; position:absolute; margin-left: -300px;''>
						<a href='portfolio.php' style='color: #3B3B3B ;'><h1 style='padding: 80px; position: absolute; text-decoration: underline;'>take a look at our past projects</h1></a>
					</div>
				</body>
				</html>";
				
				
	$result = $con->query($query);
	if($result){
		echo($message1);
		mail($email,"Eternity Services",$message1,$header);
	}else if(!$result){
		echo"oh no";
	}
	


?>
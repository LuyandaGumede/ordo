<?php

error_reporting(E_ERROR | E_PARSE);

	$name = $_POST['name'];
	$userMess = $_POST['userMess'];
	$email = $_POST['email'];

	$message = $_POST['message'];

//databas set up
	$con = new mysqli('localhost','root','','client'); // for the localhost on xampp
	if (!$con) {
		die("Connection failed: ".mysqli_connect_error());
	}
	

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
						
						<h3>Thank you for contacting us, with regards to your message:</h3>
			
						<p>- ".$userMess."</p>
						
						<h3 style='text-decoration: underline;'> Our reply</h3>
						<h4>".$message."</h4>
						<p >If you have any more questions don't hesitate to contact us and we will get back to you as soon as possible!</p>
						
						
						<ul>
							<li>Email: 	info@eternityservices.co.za</li>
							<li>Phone: 	082 723 123</li>
							<li>Fax  : 	+27 021 3452</li>
						</ul><br>
						<h4> Kind Regards, </h4>
						<h4> Eternity Services </h4>
						
					</div>
					<!-- email footer section-->
					<div class='footer' style='text-align: center; border-top-style: groove ; border-top-color: #D800FF; position:relative;'>
						<img src='Images/opacity2.jpg' alt='img' style='width: 600px; position:absolute; margin-left: -300px;''>
						<a href='../portfolio.php' style='color: #3B3B3B ;'><h1 style='padding: 80px; position: absolute; text-decoration: underline;'>take a look at our past projects</h1></a>
					</div>
				</body>
				</html>";

echo "<a href= 'dash.php'>
<button type='submit'  name ='button' value='send' method='post' formaction='../dash.php' style='width:100px;  font-size:17px; background-color: #2FC6E6; '>Back</button></a>";
				
				
$new = mail($email,"Eternity Services",$message1,$header);
	
echo($message1);

	if($new){
		echo"
							<script> 
								alert('message has been sent');
								window.location.href =\"http://localhost/ordo/SP300/login/cantactList.php\";
							</script>
							";
	}else{
		echo"oh no";
	}
	


?>
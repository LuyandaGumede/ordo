<?php
	$con=mysqli_connect("localhost","root","","client");
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$name = $_POST["Name"];
	$surname = $_POST["Surname"];
	$phone = $_POST["Phone"];
	$email = $_POST["Email"];
	$bis = $_POST["Bis"];

	$q = "INSERT INTO `client_list`( `name`, `surname`, `phone`, `email`, `Business`) VALUES ('$name','$surname','$phone','$email','$bis')";
	$resutl= mysqli_query($con,$q);
	if($resutl){
		echo"
		<script> 
			alert('Client added to database');
window.location.href =\"http://localhost/ordo/SP300/login/ClientList.php\";
		</script>
		";
	}
?>
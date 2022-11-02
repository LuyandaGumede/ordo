<?php

	
	
	$con=mysqli_connect("localhost","root","","client");
	echo "client";

					// Check connection
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}
	
						$update = "UPDATE `client_list` SET `KEY`='$_POST[key]',`name`='$_POST[name]',`surname`='$_POST[surname]',`phone`='$_POST[phone]',`email`='$_POST[email]',`Business`='$_POST[bis]' WHERE `KEY`='$_POST[hidden]'";
						
						$up = mysqli_query($con,$update);
						if($up){
							echo"
							<script> 
								alert(' $_POST[name] , has been updated');
								window.location.href =\"http://localhost/ordo/SP300/login/ClientList.php\";
							</script>
							";
						};
					
				
?>
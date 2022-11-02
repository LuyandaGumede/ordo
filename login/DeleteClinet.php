<?php

	

	$con=mysqli_connect("localhost","root","","client");
	echo "Delete";
	
	// if delete button is pressed
				// Check connection
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}

						$delete = "DELETE FROM `client_list` WHERE `KEY`='$_POST[hidden]';";
						
						$del = mysqli_query($con,$delete);
						if($del){
							echo"
							<script> 
								alert(' $_POST[name] , has bean deleted ');
								window.location.href =\"http://localhost/ordo/SP300/login/ClientList.php\";
							</script>
							";
						};
				
?>
<?php

	

	$con=mysqli_connect("localhost","root","","client");
	echo "Delete";
	
	// if delete button is pressed
				// Check connection
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}

						$delete = "DELETE FROM `clients` WHERE `index`='".$_POST[hidden]."';";
						
						$del = mysqli_query($con,$delete);
						if($del){
							echo"
							<script> 
								alert('message has been deleted');
								window.location.href =\"http://localhost/ordo/SP300/login/cantactList.php\";
							</script>
							";
						};
				
?>
<?php

	

	$con=mysqli_connect("localhost","root","","eternity");
	echo "Delete";
echo"$_POST[hidden]";
	
	// if delete button is pressed
				// Check connection
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}

						$delete = "DELETE FROM `construction_documents` WHERE `id_key`='$_POST[hidden]';";
						
						
						$del = mysqli_query($con,$delete);
						if($del){
							echo"
							<script> 
								alert('document has bean deleted');
								window.location.href =\"http://localhost/ordo/SP300/login/search_construction_documents.php\";
							</script>
							";
						};
				
?>
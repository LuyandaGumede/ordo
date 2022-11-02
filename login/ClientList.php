<?php 



    define('TITLE',"ES - Dropbox");
    include 'includes/header2.php';

    
    if(!isset($_SESSION['userId']))
    {
        header("Location: index.php");
        exit();
    }
?><!doctype html>
<html>
<head>
<meta charset="utf-8">   
<link href="css/Search.css" rel="stylesheet" type="text/css">
	 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css">
<title>client list</title>
</head>

<body>
	
	<!--top half fixed logo, name and search-->
	<div class="Topfix"> 
		<a href="Dash.php" alt="dash"><img src="Images/logo ES.png" alt="logo"></a>
       
	</div>
	<!--bottom half -->
	<div class="bHalf">
		<!--top half fixed Naveigation-->
		<div class="bHalf">
		<!--top half fixed Naveigation-->
		<div class="lFix">
			
            <div class="llFix">
            <button id="profile" title="profile">
                <a href="profile.php" alt="profile">
                <img style="border-radius: 50%;"  src=<?php echo "./uploads/".$_SESSION['userImg']; ?> alt="profile img">
                </a><span><p style="color: white; padding-bottom: 5px; margin-top: -5px; ">Profile</p></span>
            </button>
            </div>
                             
            
            
                        
			<button id="home" title="dashboard / home">
                <a href="Dash.php" alt="dash">
                <img src="../Images/home button.png" alt=" home img"><span><p style="color: white; padding-bottom: 5px; margin-top: -5px; ">Dash</p></span>
                </a>
            </button>
            
			<button id="upload" title="upload"><a href="projects.php"><img src="../Images/upload button.png" alt="upload img"></a><span><p style="color: white; padding-bottom: 5px; margin-top: -5px; ">Upload</p></span></button>
            
			<button id="help" title="help"><a href="help.php"><img src="../Images/help button.png" alt="help img"></a><span><p style="color: white; padding-bottom: 5px; margin-top: -5px; ">Help</p></span></button>
            
              
            <button id="logout" title="logout">
                <a href="includes/logout.inc.php" class="button login"><img src="../Images/logOut.png" alt="logOut"></a>
            <span><p style="color: white; padding-bottom: 5px; margin-top: -5px; ">Logout</p></span>
            </button>
            
		</div>
        
        <!--adding clinet side of the display-->
		<div class="rhlaf" style="background-image: url('Images/pans1.jpg'); background-position: 100% 50%; background-size: 40%; background-repeat: no-repeat;">
           
			
			<div class="content" >
                <form id ="clientList" name="myForm"   method="post" onSubmit="return clientValidate(this);" action="clientDBadd.php">
					<h1>Add a Client to the database</h1>
					<table id="addClient" style="background-color: #FFFFFF;">
						<tr>
							<td id="Tn" style="margin-right:  5px;"><small id="N"> * Required</small><h3>Name</h3></td>
							<td id="Ts" style="margin-right:  5px;"><small id="S"> * Required</small><h3>Surname</h3></td>
							<td id="Tp" style="margin-right:  5px;"><small id="C"> * Required</small><h3>Phone</h3></td>
							<td id="Te" style="margin-right:  5px;"><small id="E"> * Required</small><h3>Email</h3></td>
							<td id="Tb" style="margin-right:  5px;"><small id="M"> * Required</small><h3>Industry</h3></td>
						</tr>
						<tr>
							<td><input  id="name" name="Name" type="text" style="margin-right:  10px;"></td>
							<td><input id="surname" name="Surname" type="text" style="margin-right:  10px;"></td>
							<td><input id="phone" name="Phone" type="text" style="margin-right:  10px;"></td>
							<td><input id="email" name="Email" type="text" style="margin-right:  10px;"></td>
							<td><input id="bis" name="Bis" type="text" style="margin-right:  10px;"></td>
					
						</tr>
						<tr>
							<td></td>
						</tr>
						<tr>
							<td><button type="submit" style="margin-top: 20px;">Add Client</button></td>
						</tr>
					</table>
					<br>	
				
				</form>
				
				
					
                <form id ="clients" method="post">
		
					<table id="list" >
						<tr>
							<td><h3>Filter by : </h3></td><br>
							<td><button type="submit" value="name" name="N">Name</button></td>
							<td><button type="submit" value="surname" name="S">Surname</button></td>
							<td><button type="submit" value="email" name="E">Email</button></td>
							<td><button type="submit" value="cell" name="C">Cell</button></td>
							<td><button type="submit" value="bis" name="B">Industry</button></td>
						</tr>
					
					</table>
			<?php
					//geting the data from the database adn displaying it in order of the buttin clicked
					$con=mysqli_connect("localhost","root","","client");
					// Check connection
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}
					
					
					
					$result = mysqli_query($con,"SELECT * FROM client_list");
					if(isset($_POST['N'])){
						$sql = "SELECT * FROM `client_list` ORDER BY `client_list`.`name` ASC";
						$result =mysqli_query($con,$sql);
					}
					if(isset($_POST['S'])){
						$sql = "SELECT * FROM `client_list` ORDER BY `client_list`.`surname` ASC";
						$result =mysqli_query($con,$sql);
					}
					if(isset($_POST['E'])){
						$sql = "SELECT * FROM `client_list` ORDER BY `client_list`.`email` ASC";
						$result =mysqli_query($con,$sql);
					}
					if(isset($_POST['C'])){
						$sql = "SELECT * FROM `client_list` ORDER BY `client_list`.`phone` ASC";
						$result =mysqli_query($con,$sql);
					}
					if(isset($_POST['B'])){
						$sql = "SELECT * FROM `client_list` ORDER BY `client_list`.`Business` ASC";
						$result =mysqli_query($con,$sql);
					}
					
					
					
				


					
					echo "<table border='1' width='100%' font-size='20px' style='background-color: #FFFFFF;'>

					<h3 style='text-decoration: underline; padding-top:10px;padding-bottom:10px;'>Client list</h3>
					
					<tr>
					<th>Key</th>
					<th>Name</th>
					<th>Surname</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Industry</th>
					</tr>";

					                      
					while($row = mysqli_fetch_array($result))
					{
					
					//insert the field name from your database here//
				
					echo "<form name='myForm'  method='post'>";
						
					echo "<tr style ='text-align:center;'>";
					echo "<td style='width:60px;'>"."<input style='width:60px;' type='text' name ='key' value=".$row['KEY']." </td>";
					echo "<td style='width:100px;'>"."<input style='width:120px;' type='text' name ='name' value=".$row['name']." </td>";
					echo "<td style='width:100px;'>"."<input style='width:120px;' type='text' name ='surname' value=".$row['surname']." </td>";
					echo "<td style='width:100px;'>"."<input style='width:110px;' type='text' name ='phone' value=".$row['phone']." </td>";
					
					echo "<td style='width:150px;'>"."<input style='width:150px;' type='text' name ='email' value=".$row['email']." </td>";						
					echo "<td style='width:100px;'>"."<input style='width:120px;' type='text' name ='bis' value=".$row['Business']." </td>";
					
					echo "<td style='width:0.1px;'>"."<input style='width:60px; margin:' type='hidden' name ='hidden' value=".$row['KEY']." </td>";
					
						//buttons 
						
					echo "<td style='width:100px;'>"."<button type='submit'  name='button' value='Update'  method ='post' formaction='updateClinet.php' style='width:100px; margin: 5px; background-color:#323232; color:#CBF6F9; font-size:17px;'>Update"."</td>";
                        
					echo "<td style='width:100px;'>"."<button type='submit'  name ='button' value='Delete' method='post' formaction='DeleteClinet.php' style='width:100px; margin: 5px; background-color:#323232; color:#FFCDAD; font-size:17px;'>Delete"."</td>";
					
					
					
					
					echo "</tr>";
					echo "</form>";
					}
					echo "</table>";
					
							
					
					mysqli_close($con);

		?>
				</form>
              
                
                
			</div>
		</div>
	</div>
     <script src="js/db.js" type="text/javascript"></script>
    <script src="js/clientValidate.js" type="text/javascript"></script>
	
    
</body>
	
    
</html>
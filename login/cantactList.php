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
<title>mail list</title>
</head>

<body>
	
	<!--top half fixed logo, name and search-->
	<div class="Topfix"> 
		<a href="Dash.php" alt="dash"><img src="Images/logo ES.png" alt="logo"></a>
       
	</div>
	<!--bottom half -->
	<div class="bHalf">
		<!--top half fixed Naveigation-->
	<div class="lFix">
			
            <div class="llFix">
            <button id="profile" title="profile">
                <a href="profile.php" alt="profile">
                <img style="border-radius: 50%;" src=<?php echo "./uploads/".$_SESSION['userImg']; ?> alt="profile img">
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
        
        <!--Dashboard half and displayed content-->
		<div class="rhlaf" style="background-image: url('Images/pans4.jpg'); background-position: 97% 60%; background-size: 25%; background-repeat: no-repeat;">
            
		
			
			<div class="content"  style="border-style: groove; border-right: hidden; border-bottom: hidden; width: 80%; padding: 20px;" >
                <form id ="contacts" method="post">
					<h2>People who have gotten in touch with Eternity services through the contact form</h2>
					<br>
					<table id="list">
						<tr>
							<td><h3>Filter by : </h3></td><br>
							<td><button type="submit" value="name" name="N">Name</button></td>
							<td><button type="submit" value="surname" name="S">Surname</button></td>
							<td><button type="submit" value="email" name="E">Email</button></td>
							<td><button type="submit" value="cell" name="C">Cell</button></td>
						</tr>
					
					</table>
			<?php
					$con=mysqli_connect("localhost","root","","client");
					// Check connection
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}

					$result = mysqli_query($con,"SELECT * FROM clients");
					if(isset($_POST['N'])){
						$sql = "SELECT * FROM `clients` ORDER BY `clients`.`name` ASC";
						$result =mysqli_query($con,$sql);
					}
					if(isset($_POST['S'])){
						$sql = "SELECT * FROM `clients` ORDER BY `clients`.`surname` ASC";
						$result =mysqli_query($con,$sql);
					}
					if(isset($_POST['E'])){
						$sql = "SELECT * FROM `clients` ORDER BY `clients`.`email` ASC";
						$result =mysqli_query($con,$sql);
					}
					if(isset($_POST['C'])){
						$sql = "SELECT * FROM `clients` ORDER BY `clients`.`cell` ASC";
						$result =mysqli_query($con,$sql);
					}
					
					


					echo "<table border='2' width='100%' font-size='20px' style='background:#FFF;' >

					<h3 style='text-decoration: underline; padding-top:10px;padding-bottom:10px;'>Contact list</h3>
					<tr>
				
					<th style='text-align:center;'>Name</th>
					<th style='text-align:center;'>Surname</th>
					<th style='text-align:center;'>Email</th>
					<th style='text-align:center;'>Cell</th>
					<th style='text-align:center;'>Message</th>
					</tr>";

					echo "<tbody id='myTable'>";                      
					while($row = mysqli_fetch_array($result))
					{

					//insert the field name from your database here//

					//ps it needs to be exactly how you named it in your db
					echo "<form name='myForm'  method='post'>";
					echo "<tr>";
					
					echo "<td style='text-align:center; width:120px;'>" . $row['name'] . "</td>";
					echo "<td style='text-align:center; width:120px;'>" . $row['surname'] . "</td>";
					echo "<td style='text-align:center; width:200px;'>" . $row['email'] . "</td>";
					echo "<td style='text-align:center; width:120px;'>" . $row['cell'] . "</td>";
					echo "<td style='padding:5px;'>" . $row['message'] . "</td>";
					echo "<td style='width:0.1px;'>"."<input style='width:60px; margin:' type='hidden' name ='hidden' value=".$row['index']." </td>";
						
						echo "<td style='width:100px;'>"."<button type='submit'  name ='button' value='Reply' method='post' formaction='responseEmial.php' style='width:100px; margin: 5px; font-size:17px;'>Reply"."</td>";
						
					echo "<td style='width:100px;'>"."<button type='submit'  name ='button' value='Delete' method='post' formaction='contatctDelete.php' style='width:100px; margin: 5px;  font-size:17px;'>Delete"."</td>";
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
    
    
    
</body>
    
</html>
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
            
			<?php
				$con=mysqli_connect("localhost","root","","client");
					// Check connection
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}
			
			$sql= "SELECT  `name`, `surname`, `email`, `message` FROM `clients` WHERE `index` ='".$_POST['hidden']."';";
					
			$result= mysqli_query($con,$sql);//
			while($row = mysqli_fetch_array($result))
			{
				$name= $row['name'];
				$surname= $row['surname'];
				$email= $row['email'];
				$message= $row['message'];
			}
					
					
			
					
			?>
		
			
			<div class="content"  style="border-style: groove; border-right: hidden; border-bottom: hidden; width: 80%; padding: 20px;" >
				<form><button type='submit'  name ='button' value='send' method='post' formaction='cantactList.php' style='width:100px;  font-size:17px; background-color: #2FC6E6; '>Back</button></form>
                <form id ="contacts" method="post" style="width: 600px;">
					<div style="display: flex;"><h2 style="text-decoration: underline; margin-bottom: 30px;">Replying to <?php echo "$name"." "."$surname"?> </h2> 
					<button type='submit'  name ='button' value='send' method='post' formaction='replyCus.php' style='width:100px; margin: 20px;  font-size:17px; background-color: #2FC6E6; '>Send</button></div>
					
					<!-- email header section-->
					<div class='header' style ='text-align: center; padding-top: 20px;padding-bottom: 10px; background-color: #EBEBEB; border-bottom-style: groove ; border-bottom-color: #D800FF; '>
						<img src='Images/logo ES.png' width='80%'>
					</div>
					<!-- email body section-->
					<div class='mailBody' style='padding: 20px; padding-left: 50px;' >
						<h2>Hello <input name="name" style="background-color: #FFFFFF; border-color: #FFFFFF;" value="<?php echo "$name" ?>"></h2>
						
						<h3>Thank you for contacting us, with regards to your message:</h3>
			
						<p>Their message :<input name="userMess" style="border: none;" value="<?php echo "$message" ?>"></p>
						
						<h3 style="text-decoration: underline;"> Our reply</h3>
						<textarea name="message" style=" width: 80%; border-color: #A1A1A1; border-radius: 5px; text-indent: 5px;"></textarea>
						<br>
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
						<img src="Images/opacity2.jpg" alt="img" style="width: 600px; height: 50px; position:absolute; margin-left: -300px;">
					</div>
					<input name="email"  value="<?php echo "$email" ?>">
					
					
					
				</form>
              
                
                
			</div>
		</div>
	</div>
    
    
    
</body>
    
</html>
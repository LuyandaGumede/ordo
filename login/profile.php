<?php 



    define('TITLE',"Dashboard - Eternity Service");
    include 'includes/header2.php';

    
    if(!isset($_SESSION['userId']))
    {
        header("Location: index.php");
        exit();
    }
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
	 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css">
    
<link href="dash.css" rel="stylesheet" type="text/css">
<title>Eternity Services</title>
</head>

<body>
	
    
    
	<!--top half fixed logo, name and search-->
    <link href="dash.css" rel="stylesheet" type="text/css">
    

            <!---NAVIGATION--->
	<div class="Topfix"> 
		<a href="Dash.php" alt="dash"><img src="../Images/logo ES.png" alt="logo"></a>
       
	</div>
	<!--bottom half -->
	<div class="bHalf">
		<!--top half fixed Naveigation-->
		<div class="lFix">
			
            <div class="llFix">
            <button id="profile" title="profile">
                <a href="profile.php" alt="profile">
                <img src=<?php echo "./uploads/".$_SESSION['userImg']; ?> alt="profile img">
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
           <!---End NAVIGATION--->
        
        
        
        
        
        <!--Dashboard half and displayed content-->
		<div class="rhlaf" style="background-image: url(Images/upp.jpeg); background-repeat: no-repeat; background-size: 50%;  margin-top: 150px; background-position:85% 82%;">
            
							<!--Header-->
				<div style="text-align: center; width: 500px; padding: 50px;">
					<img style="width:250px; border-radius: 50%;" id="userDp" src=<?php echo "./uploads/".$_SESSION['userImg']; ?> >
				 <br> <br>


					<br><br>
					<h1><?php echo strtoupper($_SESSION['userUid']); ?></h1>
					<hr>
				

				<!--first name-->
				<h3><?php echo strtoupper($_SESSION['f_name']) . " " . strtoupper($_SESSION['l_name']); ?></h3>       

				<!--Display Gender-->
				<p>
				<?php 
					if ($_SESSION['gender'] == 'm')
					{
						echo 'Male';
					}
					else if ($_SESSION['gender'] == 'f')
					{
						echo 'Female';
					}
				?>
				</p>

				<!--User Headline and BIO-->
				<h6><?php echo $_SESSION['headline']; ?></h6>
				<p><?php echo $_SESSION['bio'];?></p> 
				<br>
				<hr>
				<br>

				 <div class="d-flex justify-content-center">
				<div class="d-flex flex-row">
				   <div class="p-2">
						 <div class="d-flex justify-content-center"><a href="edit-profile.php"><button type="button" class="btn btn-success">Edit Profile</button></a></div>
					</div> 
					<br>
					
				 </div>
				</div>               

				<?php include 'includes/footer.php'; ?> 

					</div>

                
	</div>
 
    
    
</body>
    
</html>






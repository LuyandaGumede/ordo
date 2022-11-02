<?php 



    define('TITLE',"Dashboard - Eternity Service");
    include 'includes/header2.php';

    
    if(!isset($_SESSION['userId']))
    {
        header("Location: index.php");
        exit();
    }
?>
<?php

include("db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Insert Submittal document </title>
    <link href="Construct.css" rel="stylesheet" type="text/css">
</head>
<body>
	<!-- justins content added -->
	<!--top half fixed logo, name and search-->
	<div class="Topfix"> 
		<a href="Dash.php" alt="dash"><img src="../Images/logo ES.png" alt="logo"></a>
       
	</div>
	<!--bottom half -->
	<div class="bHalf">
		<!--top half fixed Naveigation-->
		<div class="lFix" cl>
			
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
		<div class="rhlaf" style="background-image: url('../Images/pans3.jpg');  background-size: 35%; background-repeat: no-repeat; background-position:90% 82%;">
			<div class="content">
			<!-- tylor content start -->
					   
				<div id="canvasSub" class="row"><!-- row Begin -->
					<a href="projects.php"><button style="height: 30px; width: 100px; margin-top: 5px;font-size: 20px; margin-bottom: 10px; background-color: #2FC6E6; border-radius: 8px;">back</button></a>
					
					<div class="col-lg-12"><!-- col-lg-12 Begin -->
						
						<div class="panel panel-default"><!-- panel panel-default Begin -->
							
						   <div class="panel-heading"><!-- panel panel-default Begin -->
							   
							   <h3 class="panel-title"><!-- panel-title Begin -->
								   
								   <i class="fa fa-tool fa-fw"></i> Insert Submittal Documents
								   
							   </h3><!-- panel-title Finish -->
							   
						   </div> <!-- canel panel-default Finish -->
						   
						   <div class="panel-body"><!-- panel-body Begin -->
							   
							   <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
								   
								   <div class="form-group"><!-- form-group Begin -->
									   
									  <label class="col-md-3 control-label"> Submittal ID: </label> 
									  
									  <div class="col-md-6"><!-- col-md-6 Begin -->
										  
										  <input name="submittalId" type="text" class="form-control" required>
										  
									  </div><!-- col-md-6 Finish -->
									   
								   </div><!-- form-group Finish -->
								   
									<div class="form-group"><!-- form-group Begin -->
									   
									  <label class="col-md-3 control-label"> Submittal Name: </label> 
									  
									  <div class="col-md-6"><!-- col-md-6 Begin -->
										  
										  <input name="submittalName" type="text" class="form-control" required>
										  
									  </div><!-- col-md-6 Finish -->
									   
								   </div><!-- form-group Finish -->
								   
								   
								   <div class="form-group"><!-- form-group Begin -->
									   
									  <label class="col-md-3 control-label"> Submittal start date: </label> 
									  
									  <div class="col-md-6"><!-- col-md-6 Begin -->
										  
										  <input name="submittalStart" type="text" class="form-control" required>
										  
									  </div><!-- col-md-6 Finish -->
									   
								   </div><!-- form-group Finish -->
								   
								   <div class="form-group"><!-- form-group Begin -->
									   
									  <label class="col-md-3 control-label"> Submittal completion date: </label> 
									  
									  <div class="col-md-6"><!-- col-md-6 Begin -->
										  
										  <input name="submittalEnd" type="text" class="form-control" required>
										  
									  </div><!-- col-md-6 Finish -->
									   
								   </div><!-- form-group Finish -->
								   
								  
								   
								   <div class="form-group"><!-- form-group Begin -->
									   
									  <label class="col-md-3 control-label"> Add submittal document file : </label> 
									  
									  <div class="col-md-6"><!-- col-md-6 Begin -->
										  <br>
										  <input id="submittalFile" name="submittalFile" value="Upload Submittal Document File" type="file" class="form-control" required>
										  
									  </div><!-- col-md-6 Finish -->
									   
								   </div><!-- form-group Finish -->
								   
							
								   
									<div class="form-group"><!-- form-group Begin -->
									   
									  <label class="col-md-3 control-label"></label> 
									  
									  <div class="col-md-6"><!-- col-md-6 Begin -->
										  
										  <input id="button" name="submit" value="Upload Submittal Document Details" type="submit" class="btn btn-primary form-control" required>
										  
									  </div><!-- col-md-6 Finish -->
									   
								   </div><!-- form-group Finish -->
								   
							   </form><!-- form-horizontal Finish -->
							   
						   </div><!-- panel-body Finish -->
							
						</div><!-- canel panel-default Finish -->
						
					</div><!-- col-lg-12 Finish -->
					
				</div><!-- row Finish -->
				<!-- tylor content end-->
			</div>
		</div>
	</div>
    

        
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script> 
    <script src="js/tinymce/tinymce.min.js"></script>
    
</body>
</html>


<?php 

if(isset($_POST['submit'])){
    
    $submittalId = $_POST['submittalId'];
    $submittalName = $_POST['submittalName'];
    $submittalStart = $_POST['submittalStart'];
    $submittalEnd = $_POST['submittalEnd'];
    $submittalFile = $_FILES['submittalFile']['name'];
   
    
 
    
    $submittal_documents = "insert into submittal_documents (submittalId,submittalName,submittalStart,submittalEnd,submittalFile) values ('$submittalId','$submittalName','$submittalStart','$submittalEnd','$submittalFile')";
    
    $run_submittal = mysqli_query($con,$submittal_documents);
    
    if($run_submittal){
        
        if (isset($_FILES['submittalFile'])) 
        {
    $file= $_FILES['submittalFile'];
    $file_name= $file['name'];
    $file_tmp= $file['tmp_name'];
    if (!file_exists('submittaluploads')) {
      mkdir('submittaluploads');
    }
    $destination = '../submittaluploads/' . $file_name;
    move_uploaded_file($file_tmp, $destination);}
        
        echo "<script>alert('Details and document has been successfully uploaded')</script>";
        echo "<script>window.open('submittal_documents.php','_self')</script>";
        
    }
    
}

?>
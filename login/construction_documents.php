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
    <title> Insert Construction document </title>
	<link href="Construct.css" rel="stylesheet" type="text/css">
</head>
<body>
    <!-- justin addition --><!--top half fixed logo, name and search-->
		<div class="Topfix"> 
		<a href="Dash.php" alt="dash"><img src="../Images/logo ES.png" alt="logo"></a>
       
	</div>
	<!--bottom half -->
	<div class="bHalf">
		<!--top half fixed Naveigation-->
	<div class="lFix" rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			
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
		<div class="rhlaf">
			<div class="content" style="background-image: url('../Images/h1.jpeg'); background-size: 60%; background-repeat: no-repeat; background-position:100% 5%;">
				<!--tylor input-->
				
					   
				<div id="canvasCon" class="row"><!-- row Begin -->
					<a href="projects.php"><button style="height: 30px; width: 100px; margin-top: 5px;font-size: 20px; margin-bottom: 10px; background-color: #2FC6E6; border-radius: 8px;">back</button></a>
					
					<div class="col-lg-12"><!-- col-lg-12 Begin -->
						
						<div class="panel_panel-default"><!-- panel panel-default Begin -->
							
						   <div class="panel-heading"><!-- panel panel-default Begin -->
							   
							   <h3 class="panel-title"><!-- panel-title Begin -->
								   
								   <i class="fa_fa-tool_fa-fw"></i> Insert Construction Documents
								   
							   </h3><!-- panel-title Finish -->
							   
						   </div> <!-- canel panel-default Finish -->
						   
						   <div class="panel-body"><!-- panel-body Begin -->
							   
							   <form method="post" class="form-horizontal" action="construction_documents.php" name="form" enctype="multipart/form-data"><!-- form-horizontal Begin -->
								   
								   <div class="form-group"><!-- form-group Begin -->
									   
									  <label class="col-md-3 control-label"> Construction Plan ID: </label> 
									  
									  <div class="col-md-6"><!-- col-md-6 Begin -->
										  
										  <input name="constructionId" type="text" class="form-control" required>
										  
									  </div><!-- col-md-6 Finish -->
									   
								   </div><!-- form-group Finish -->
                                   
                                    
								   <div class="form-group"><!-- form-group Begin -->
									   
									  <label class="col-md-3 control-label"> Construction Name </label> 
									  
									  <div class="col-md-6"><!-- col-md-6 Begin -->
										  
										  <input name="constructionName" type="text" class="form-control" required>
										  
									  </div><!-- col-md-6 Finish -->
									   
								   </div><!-- form-group Finish -->
								   
								   
								   <div class="form-group"><!-- form-group Begin -->
									   
									  <label class="col-md-3 control-label"> Construction start date: </label> 
									  
									  <div class="col-md-6"><!-- col-md-6 Begin -->
										  
										  <input name="constructionStart" type="date" class="form-control" required>
										  
									  </div><!-- col-md-6 Finish -->
									   
								   </div><!-- form-group Finish -->
								   
								   <div class="form-group"><!-- form-group Begin -->
									   
									  <label class="col-md-3 control-label"> Construction completion date: </label> 
									  
									  <div class="col-md-6"><!-- col-md-6 Begin -->
										  
										  <input name="constructionEnd" type="date" class="form-control" required>
										  
									  </div><!-- col-md-6 Finish -->
									   
								   </div><!-- form-group Finish -->
								   
								  
								   
								   <div class="form-group"><!-- form-group Begin -->
									   
									  
									  
									  <div class="col-md-6"><!-- col-md-6 Begin -->
										<label class="col-md-3 control-label" id="label"> Add construction document file : </label>
										  <div id="flexable">
											<br>
											<input id="constructionFile" name="constructionFile" value="Upload Construction Document File" type="file" class="form-control" required><br>
										  </div>
									  </div><!-- col-md-6 Finish -->
									   
								   </div><!-- form-group Finish -->
								   
							
								   
									<div class="form-group"><!-- form-group Begin -->
									   
									  <label class="col-md-3 control-label"></label> 
									  
									  <div class="col-md-6"><!-- col-md-6 Begin -->
										  
										  <input name="submit" id="button" value="Upload Construction Document Details" type="submit" class="btn btn-primary form-control">
										  
										  
									  </div><!-- col-md-6 Finish -->
           
									   
								   </div><!-- form-group Finish -->
								   
							   </form><!-- form-horizontal Finish -->
							   
						   </div><!-- panel-body Finish -->
							
						</div><!-- canel panel-default Finish -->
						
					</div><!-- col-lg-12 Finish -->
					
				</div><!-- row Finish -->
						
				<!--Tylor input end-->
			</div>
		</div>
	</div>
	<!-- tylor part inisde -->

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script> 
    <script src="js/tinymce/tinymce.min.js"></script>
    
</body>
</html>


<?php 

if(isset($_POST['submit'])){
    
    $constructionId = $_POST['constructionId'];
    $constructionStart = $_POST['constructionStart'];
    $constructionEnd = $_POST['constructionEnd'];
    $constructionFile = $_FILES['constructionFile']['name'];
    
   
    
    $construction_documents = "insert into construction_documents (constructionId,constructionStart,constructionEnd,constructionFile) values ('$constructionId','$constructionStart','$constructionEnd','$constructionFile')";
   
    
     
    
    $run_construction = mysqli_query($con,$construction_documents);
    
    if($run_construction)
    {
        
        
     if (isset($_FILES['constructionFile'])) 
     {
    $temp_construction_file = $_FILES['constructionFile']['tmp_construction_name'];
    $file= $_FILES['constructionFile'];
    $file_name= $file['name'];
    $file_tmp= $file['tmp_name'];
    if (!file_exists('constructionuploads')) {
      mkdir('constructionuploads');
    }
    $destination = '../constructionuploads/' . $file_name;
    move_uploaded_file($file_tmp, $destination);}
  
  
               
       
        
        echo "<script>alert('Details and document has been successfully uploaded')</script>";
        echo "<script>window.open('construction_documents.php','_self')</script>";
        
    }
    
    }


?>
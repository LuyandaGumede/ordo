<?php 

/*Jarryd:

*/


    define('TITLE',"Upload - Project Manual");
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
    <title> Insert Project Manual </title>
    <link href="Construct.css" rel="stylesheet" type="text/css">
</head>
<body>
    <!--jusitn content -->
	<!--top half fixed logo, name and search-->
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
		<!--Dashboard half and displayed content-->
		<div class="rhlaf">
			<div class="content" style="background-image: url('../Images/aarc2.jpg');  background-size: 50%; background-repeat: no-repeat; background-position:80% 82%;">
				<!-- tylor content-->


				<div id="canvasPro" class="row"><!-- row Begin -->
					<a href="projects.php"><button style="height: 30px; width: 100px; margin-top: 5px;font-size: 20px; margin-bottom: 10px; background-color: #2FC6E6; border-radius: 8px;">back</button></a>

					<div class="col-lg-12"><!-- col-lg-12 Begin -->

						<div class="panel panel-default"><!-- panel panel-default Begin -->

						   <div class="panel-heading"><!-- panel panel-default Begin -->

							   <h3 class="panel-title"><!-- panel-title Begin -->

								   <i class="fa fa-pencil fa-fw"></i> Insert Project Manual

							   </h3><!-- panel-title Finish -->

						   </div> <!-- canel panel-default Finish -->

						   <div class="panel-body"><!-- panel-body Begin -->

							   <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->

								   <div class="form-group"><!-- form-group Begin -->

									  <label class="col-md-3 control-label"> Project ID: </label>

									  <div class="col-md-6"><!-- col-md-6 Begin -->

										  <input name="projectId" type="text" class="form-control" required>

									  </div><!-- col-md-6 Finish -->

								   </div><!-- form-group Finish -->


								   <div class="form-group"><!-- form-group Begin -->

									  <label class="col-md-3 control-label"> Name of the Project Manual: </label>

									  <div class="col-md-6"><!-- col-md-6 Begin -->

										  <input name="projectName" type="text" class="form-control" required>

									  </div><!-- col-md-6 Finish -->

								   </div><!-- form-group Finish -->

								   <div class="form-group"><!-- form-group Begin -->

									  <label class="col-md-3 control-label"> Project Start Date: </label>

									  <div class="col-md-6"><!-- col-md-6 Begin -->

										  <input name="projectStart" type="date" class="form-control" required>

									  </div><!-- col-md-6 Finish -->

								   </div><!-- form-group Finish -->

								   <div class="form-group"><!-- form-group Begin -->

									  <label class="col-md-3 control-label"> Project end date: </label>

									  <div class="col-md-6"><!-- col-md-6 Begin -->

										  <input name="projectEnd" type="date" class="form-control form-height-custom" required>

									  </div><!-- col-md-6 Finish -->

								   </div><!-- form-group Finish -->

								   <div class="form-group"><!-- form-group Begin -->

									  <label class="col-md-3 control-label"> Project Location:</label>

									  <div class="col-md-6"><!-- col-md-6 Begin -->

                      <select id = "projectLocation" name ="projectLocation">
                      <option value="Eastern Cape">Eastern Cape</option>
                        <option value="Free State">Free State</option>
                        <option value="Gauteng">Gauteng</option>
                        <option value="KwaZulu-Natal">KwaZulu-Natal</option>
                        <option value="Limpopo">Limpopo</option>
                        <option value="Mpumalanga">Mpumalanga</option>
                        <option value="Northern Cape">Northern Cape</option>
                        <option value="North West">North West</option>
                        <option value="Western Cape">Western Cape</option>
                      </select>
									  </div><!-- col-md-6 Finish -->

								   </div><!-- form-group Finish -->


								   <div class="form-group"><!-- form-group Begin -->

									  <label class="col-md-3 control-label"> Add project manual file : </label>

									  <div class="col-md-6"><!-- col-md-6 Begin -->
										  <br>
										  <input id="projectFile" name="projectFile" value="Upload Project Manual File" type="file" class="form-control" required>

									  </div><!-- col-md-6 Finish -->

								   </div><!-- form-group Finish -->



									<div class="form-group"><!-- form-group Begin -->

									  <label class="col-md-3 control-label"></label>

									  <div class="col-md-6"><!-- col-md-6 Begin -->

										  <input id="button" name="submit" value="Upload Project manual details" type="submit" class="btn btn-primary form-control" required>

									  </div><!-- col-md-6 Finish -->

								   </div><!-- form-group Finish -->

							   </form><!-- form-horizontal Finish -->

						   </div><!-- panel-body Finish -->

						</div><!-- canel panel-default Finish -->

					</div><!-- col-lg-12 Finish -->

				</div><!-- row Finish -->
				<!-- tylor content end -->
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

    $projectId = $_POST['projectId'];
    $projectName = $_POST['projectName'];
    $projectStart = $_POST['projectStart'];
    $projectEnd = $_POST['projectEnd'];
    $projectLocation = $_POST['projectLocation'];
    $projectFile = $_FILES['projectFile']['name'];




    $project_manuals = "insert into project_manuals (projectId,projectName,projectStart,projectEnd,projectLocation,projectFile) values ('$projectId','$projectName','$projectStart','$projectEnd','$projectLocation','$projectFile')";

    $run_manual = mysqli_query($con,$project_manuals);

    if($run_manual){

        if (isset($_FILES['projectFile']))
        {
    $temp_project_file = $_FILES['projectFile']['tmp_project_name'];
    $file= $_FILES['projectFile'];
    $file_name= $file['name'];
    $file_tmp= $file['tmp_name'];
    if (!file_exists('projectuploads')) {
      mkdir('projectuploads');
    }
    $destination = '../projectuploads/' . $file_name;
    move_uploaded_file($file_tmp, $destination);
        }

        echo "<script>alert('Details and document has been successfully uploaded')</script>";
        echo "<script>window.open('project_manuals.php','_self')</script>";

    }

}

?>

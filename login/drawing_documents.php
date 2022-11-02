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
    <title> Insert Drawing Documents </title>
      <link href="Construct.css" rel="stylesheet" type="text/css">
	
	
   
</head>
<body>

	<!--top half fixed logo, name and search-->
	<div class="Topfix"> 
		<a href="Dash.php" alt="dash"><img src="../Images/logo ES.png" alt="logo"></a>
       
	</div>
	<!--bottom half -->
	<div class="bHalf">
		<!--top half fixed Naveigation-->
		
		<div class="lFix" >
	
            <div class="llFix">
            <button id="profile" title="profile">
                <a href="profile.php" alt="profile">
                <img  style="border-radius: 50%;"  src=<?php echo "./uploads/".$_SESSION['userImg']; ?> alt="profile img">
                </a><span><p style="color: white; padding-bottom: 5px;">Profile</p></span>
            </button>
            </div>
                             
            
            
                        
			<button id="home" title="dashboard / home">
                <a href="Dash.php" alt="dash">
                <img src="../Images/home button.png" alt=" home img"><span><p style="color: white; padding-bottom: 5px;">Dash</p></span>
                </a>
            </button>
            
			<button id="upload" title="upload"><a href="projects.php"><img src="../Images/upload button.png" alt="upload img"></a><span><p style="color: white; padding-bottom: 5px;">Upload</p></span></button>
            
			<button id="help" title="help"><a href="help.php"><img src="../Images/help button.png" alt="help img"></a><span><p style="color: white; padding-bottom: 5px;">Help</p></span></button>
            
              
            <button id="logout" title="logout">
                <a href="includes/logout.inc.php" class="button login"><img src="../Images/logOut.png" alt="logOut"></a>
            <span><p style="color: white; padding-bottom: 5px;">Logout</p></span>
            </button>
            
		</div>
		<!--Dashboard half and displayed content-->
		<div class="rhlaf">
			<div class="content" style="background-image: url('../Images/draw1.jpg');  background-size: 50%; background-repeat: no-repeat; background-position:100% 82%;">
				<!-- tylor content adding -->

				<div id="canvasDraw" class="row"><!-- row Begin -->
					<a href="projects.php"><button style="height: 30px; width: 100px; margin-top: 5px;font-size: 20px; margin-bottom: 10px; background-color: #2FC6E6; border-radius: 8px;">back</button></a>

					<div class="col-lg-12"><!-- col-lg-12 Begin -->

						<div class="panel panel-default"><!-- panel panel-default Begin -->

						   <div class="panel-heading"><!-- panel panel-default Begin -->

							   <h3 class="panel-title"><!-- panel-title Begin -->

								   <i class="fa fa-pencil fa-fw"></i> Insert Drawing document

							   </h3><!-- panel-title Finish -->

						   </div> <!-- canel panel-default Finish -->

						   <div class="panel-body"><!-- panel-body Begin -->

							   <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->

			

<div class="form-group"><!-- form-group Begin -->

									  <label class="col-md-3 control-label"> Drawing id </label>

									  <div class="col-md-6"><!-- col-md-6 Begin -->

										  <input name="drawingId" type="text" class="form-control" required style="font-size:15px;
	width:74%;
	 margin-bottom: 10px;
    color: #424242;">

									  </div><!-- col-md-6 Finish -->

								   </div><!-- form-group Finish -->
                                   
                                   
                                   
								   <div class="form-group"><!-- form-group Begin -->

									  <label class="col-md-3 control-label"> Name of Drawing </label>

									  <div class="col-md-6"><!-- col-md-6 Begin -->

										  <input name="name" type="text" class="form-control" required style="font-size:15px;
	width:74%;
	 margin-bottom: 10px;
    color: #424242;">

									  </div><!-- col-md-6 Finish -->

								   </div><!-- form-group Finish -->

								   <div class="form-group"><!-- form-group Begin -->

									  <label class="col-md-3 control-label"> Type of Drawing: </label>

									  <div class="col-md-6"><!-- col-md-6 Begin -->

                      <select id = "typeDrawing" name ="typeDrawing" style="font-size:15px;
	width:74%;
	 margin-bottom: 10px;
    color: #424242;">
                      <option value="Assembly drawings">Assembly drawings</option>
                        <option value="Block plan">Block plan</option>
                        <option value="Component drawings">Component drawings</option>
                        <option value="Concept drawings/sketches">Concept drawings/sketches</option>
                        <option value="Construction drawings/working drawings">Construction drawings/working drawings</option>
                        <option value="Design drawings">Design drawings</option>
                        <option value="Detail drawings">Detail drawings</option>
                        <option value="Electrical drawing">Electrical drawing</option>
                        <option value="Elevations">Elevations</option>
                        <option value="Floor plans">Floor plans</option>
                        <option value="Engineering drawing">Engineering drawing</option>
                        <option value="Location drawings/general arrangement drawings">Location drawings/general arrangement drawings</option>
                        <option value="Installation drawings">Installation drawings</option>
                        <option value="Location plan+">Location plan</option>
                        <option value="Perspective">Perspective</option>
                        <option value="Production drawing">Production drawing</option>
                        <option value="Scale drawing">Scale drawing</option>
                        <option value="Section drawings">Section drawings</option>
                        <option value="Shop drawings">Shop drawings</option>
                        <option value="Site plans">Site plans</option>
                        <option value="Technical drawings">Technical drawings</option>
                      </select>
									  </div><!-- col-md-6 Finish -->

								   </div><!-- form-group Finish -->

								   <div class="form-group"><!-- form-group Begin -->

									  <label class="col-md-3 control-label"> Type of Property: </label>

									  <div class="col-md-6"><!-- col-md-6 Begin -->

                      <select id = "typeProperty" name ="typeProperty" style="font-size:15px;
	width:74%;
	 margin-bottom: 10px;
    color: #424242;">
                      <option value="House">House</option>
                        <option value="Apartment/Flat">Apartment/Flat</option>
                        <option value="Townhouse">Townhouse</option>
                        <option value="Vacant Land/Plot">Vacant Land/Plot</option>
                        <option value="Farm">Farm</option>
                        <option value="Commercial Property">Commercial Property</option>
                        <option value="Industrial Property">Industrial Property</option>
                      </select>
									  </div><!-- col-md-6 Finish -->

								   </div><!-- form-group Finish -->

								   <div class="form-group"><!-- form-group Begin -->

									  <label class="col-md-3 control-label"> Property Size(m²):</label>

									  <div class="col-md-6"><!-- col-md-6 Begin -->

                                          <input type="number" id="propertySize" name="propertySize"  style="font-size:15px;
	width:74%;
	 margin-bottom: 10px;
    color: #424242;">
                      
									  </div><!-- col-md-6 Finish -->

								   </div><!-- form-group Finish -->

								   <div class="form-group"><!-- form-group Begin -->

									  <label class="col-md-3 control-label"> Area: </label>

									  <div class="col-md-6"><!-- col-md-6 Begin -->

                      <select id = "area" name ="area" style="font-size:15px;
	width:74%;
	 margin-bottom: 10px;
    color: #424242;">
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

									  <label class="col-md-3 control-label"> Number of bedrooms:</label>

									  <div class="col-md-6"><!-- col-md-6 Begin -->

                      <select id = "bedrooms" name ="bedrooms" style="font-size:15px;
	width:74%;
	 margin-bottom: 10px;
    color: #424242;">
                           <option value="1">0</option>
                      <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5+">5+</option>
                      </select>

									  </div><!-- col-md-6 Finish -->

								   </div><!-- form-group Finish -->

								   <div class="form-group"><!-- form-group Begin -->

									  <label class="col-md-3 control-label"> Number of bathrooms:</label>

									  <div class="col-md-6"><!-- col-md-6 Begin -->

                      <select id = "bathrooms" name ="bathrooms" style="font-size:15px;
	width:74%;
	 margin-bottom: 10px;
    color: #424242;">
                           <option value="1">0</option>
                      <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5+">5+</option>
                      </select>

									  </div><!-- col-md-6 Finish -->

								   </div><!-- form-group Finish -->

								   <div class="form-group"><!-- form-group Begin -->

									  <label class="col-md-3 control-label"> Number of garages:</label>

									  <div class="col-md-6"><!-- col-md-6 Begin -->

										  <!--<input name="garage" cols="19" rows="6" class="form-control">-->
                                          <select id = "garage" name ="garage" style="font-size:15px;
	width:74%;
	 margin-bottom: 10px;
    color: #424242;">
                                          <option value="1">0</option>
                                              <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                                <option value="5+">5+</option>
                                          </select>

									  </div><!-- col-md-6 Finish -->

								   </div><!-- form-group Finish -->

								   <div class="form-group"><!-- form-group Begin -->

									  <label class="col-md-3 control-label"> Add drawing file :</label>

									  <div class="col-md-6"><!-- col-md-6 Begin -->
										  <br>
										  <input id="drawingFile" name="drawingFile" value="Upload drawing file" type="file" class="form-control" required >

									  </div><!-- col-md-6 Finish -->

								   </div><!-- form-group Finish -->

									<div class="form-group"><!-- form-group Begin -->

									  <label class="col-md-3 control-label"></label>

									  <div class="col-md-6"><!-- col-md-6 Begin -->

										  <input id="button" name="submit" value="Upload drawing details" type="submit" class="btn btn-primary form-control" required>

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
    <script>tinymce.init({ selector:'textarea'});</script>

</body>
</html>


<?php



if(isset($_POST['submit'])){

    $drawingId = $_POST['drawingId'];
    $name = $_POST['name'];
    $typeDrawing = $_POST['typeDrawing'];
    $typeProperty = $_POST['typeProperty'];
    $propertySize = $_POST['propertySize'];
    $area = $_POST['area'];
    $bedrooms = $_POST['bedrooms'];
    $bathrooms = $_POST['bathrooms'];
    $garage = $_POST['garage'];
    $drawingFile = $_FILES['drawingFile']['name'];







    $drawing_documents = "insert into drawings (drawingId,name,typeDrawing,typeProperty,propertySize,area,bedrooms,bathrooms,garage,drawingFile) values ('$drawingId','$name','$typeDrawing','$typeProperty','$propertySize','$area','$bedrooms','$bathrooms','$garage','$drawingFile')";

    $run_drawing = mysqli_query($con,$drawing_documents);

    if($run_drawing)
    {

        if (isset($_FILES['drawingFile']))
        {
            $temp_drawing_file = $_FILES['drawingFile']['tmp_drawing_name'];

    $file= $_FILES['drawingFile'];
    $file_name= $file['name'];
    $file_tmp= $file['tmp_name'];
    if (!file_exists('drawinguploads')) {
      mkdir('drawinguploads');
    }
    $destination = '../drawinguploads/' . $file_name;
    move_uploaded_file($file_tmp, $destination);
        }

        echo "<script>alert('Details and document has been successfully uploaded')</script>";
        echo "<script>window.open('drawing_documents.php','_self')</script>";

    }

}

?>

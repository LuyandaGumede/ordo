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
    <title> Insert Contract Documents </title>
    <link href="Construct.css" rel="stylesheet" type="text/css">
</head>
<body>
    <!-- jusitn laout-->
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
			<div class="content" style="background-image: url('../Images/arc1.jpg');  background-size:70%; background-repeat: no-repeat; background-position:140% 82%;">
				<!-- tylor contentadding -->


				<div id="canvasTract" class="row"><!-- row Begin -->
					<a href="projects.php"><button style="height: 30px; width: 100px; margin-top: 5px;font-size: 20px; margin-bottom: 10px; background-color: #2FC6E6; border-radius: 8px;">back</button></a>

					<div class="col-lg-12"><!-- col-lg-12 Begin -->

						<div class="panel panel-default"><!-- panel panel-default Begin -->

						   <div class="panel-heading"><!-- panel panel-default Begin -->

							   <h3 class="panel-title"><!-- panel-title Begin -->

								   <i class="fa fa-pencil fa-fw"></i> Insert Contract document

							   </h3><!-- panel-title Finish -->

						   </div> <!-- canel panel-default Finish -->

						   <div class="panel-body"><!-- panel-body Begin -->

							   <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->


						   <div class="form-group"><!-- form-group Begin -->

									  <label class="col-md-3 control-label"> Contract ID: </label>

									  <div class="col-md-6"><!-- col-md-6 Begin -->

										  <input name="contractId" type="text" class="form-control" required style="font-size:15px;
	width:74%;
	 margin-bottom: 10px;
    color: #424242;">

									  </div><!-- col-md-6 Finish -->

								   </div><!-- form-group Finish -->

								   <div class="form-group"><!-- form-group Begin -->

									  <label class="col-md-3 control-label"> Name of the Contract: </label>

									  <div class="col-md-6"><!-- col-md-6 Begin -->

										  <input name="nameOfContract" type="text" class="form-control" required style="font-size:15px;
	width:74%;
	 margin-bottom: 10px;
    color: #424242;">

									  </div><!-- col-md-6 Finish -->

								   </div><!-- form-group Finish -->

								   <div class="form-group"><!-- form-group Begin -->

									  <label class="col-md-3 control-label"> Customer Name: </label>

									  <div class="col-md-6"><!-- col-md-6 Begin -->

										  <input name="customerName" type="text" class="form-control" required style="font-size:15px;
	width:74%;
	 margin-bottom: 10px;
    color: #424242;">

									  </div><!-- col-md-6 Finish -->

								   </div><!-- form-group Finish -->

								   <div class="form-group"><!-- form-group Begin -->

									  <label class="col-md-3 control-label"> Status of contract: </label>

									  <div class="col-md-6"><!-- col-md-6 Begin -->

                      <select id = "status" name ="status" style="font-size:15px;
	width:74%;
	 margin-bottom: 10px;
    color: #424242;">
                      <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                      </select>
									  </div><!-- col-md-6 Finish -->

								   </div><!-- form-group Finish -->

								   <div class="form-group"><!-- form-group Begin -->

									  <label class="col-md-3 control-label"> Contract start date:</label>

									  <div class="col-md-6"><!-- col-md-6 Begin -->

										  <input name="startDate" type="date" class="form-control" required style="font-size:15px;
	width:74%;
	 margin-bottom: 10px;
    color: #424242;">

									  </div><!-- col-md-6 Finish -->

								   </div><!-- form-group Finish -->

								   <div class="form-group"><!-- form-group Begin -->

									  <label class="col-md-3 control-label"> Contract expiry date: </label>

									  <div class="col-md-6"><!-- col-md-6 Begin -->

										  <input name="endDate" type="date" class="form-control" required style="font-size:15px;
	width:74%;
	 margin-bottom: 10px;
    color: #424242;">

									  </div><!-- col-md-6 Finish -->

								   </div><!-- form-group Finish -->

								   <div class="form-group"><!-- form-group Begin -->

									  <label class="col-md-3 control-label"> Contract details:</label> 

									  <div class="col-md-6"><!-- col-md-6 Begin -->

										  <textarea id="textarea" name="details" cols="19" rows="6" class="form-control" style="font-size:15px;
	width:74%;
	 margin-bottom: 10px;
    color: #424242;"></textarea>

									  </div><!-- col-md-6 Finish -->

								   </div><!-- form-group Finish -->

								   <div class="form-group"><!-- form-group Begin -->

									  <label class="col-md-3 control-label"> Add contract file :</label>

									  <div class="col-md-6"><!-- col-md-6 Begin -->
										  <br>
										  <input id="contractFile" name="contractFile" value="Upload Contract File" type="file" class="form-control" required>

									  </div><!-- col-md-6 Finish -->

								   </div><!-- form-group Finish -->



									<div class="form-group"><!-- form-group Begin -->

									  <label class="col-md-3 control-label"></label>

									  <div class="col-md-6"><!-- col-md-6 Begin -->

										  <input id="button"name="submit" value="Upload contract details" type="submit" class="btn btn-primary form-control" required>

									  </div><!-- col-md-6 Finish -->

								   </div><!-- form-group Finish -->

							   </form><!-- form-horizontal Finish -->

						   </div><!-- panel-body Finish -->

						</div><!-- canel panel-default Finish -->

					</div><!-- col-lg-12 Finish -->

				</div><!-- row Finish -->
				<!--Tyolor part end-->
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

    $contractId = $_POST['contractId'];
    $nameOfContract = $_POST['nameOfContract'];
    $customerName = $_POST['customerName'];
    $status = $_POST['status'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    $details = $_POST['details'];
    $contractFile = $_FILES['contractFile']['name'];
    $temp_contract_file = $_FILES['contractFile']['tmp_contract_name'];



    $contract_documents = "insert into contract_documents (contractId,nameOfContract,customerName,status,startDate,endDate,details,contractFile) values ('$contractId','$nameOfContract','$customerName','$status','$startDate','$endDate','$details','$contractFile')";

    $run_contract = mysqli_query($con,$contract_documents);

    if($run_contract)
    {
        if (isset($_FILES['contractFile']))
        {
    $file= $_FILES['contractFile'];
    $file_name= $file['name'];
    $file_tmp= $file['tmp_name'];
    if (!file_exists('contractuploads')) {
      mkdir('contractuploads');
    }
    $destination = '../contractuploads/' . $file_name;
    move_uploaded_file($file_tmp, $destination);}

        echo "<script>alert('Details and document has been successfully uploaded')</script>";
        echo "<script>window.open('contract_documents.php','_self')</script>";

    }

}

?>

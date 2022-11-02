<?php 



    define('TITLE',"ES - Dropbox");
    include 'includes/header2.php';
    include 'bs_include_cdn.php';
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: index.php");
        exit();
    }
?>

<?php

include("bs_include_cdn.php");


?>

<!--Styling sheet-->
<link href="dash.css" rel="stylesheet" type="text/css">
 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css">
<!--top half fixed logo, name and search-->

    <!---NAVIGATION--->
	<div class="Topfix"> 
		<a href="Dash.php" alt="dash"><img src="../Images/logo ES.png" alt="logo"></a>
       
	</div>
	<!--bottom half -->
	<div class="bHalf">
		<!--top half fixed Naveigation-->
		<div class="lFix"  >
			
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
        
<br><br>

     
  <div class="content">  
      


      
      
      
      
<!--Javascript dropbox extention-->        
<script type="text/javascript" src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="pmacof9hfoltyic"></script>
   
        
<!--embedder start-->        
    
        
<a
  href="https://www.dropbox.com/sh/8jco4g4kad8qolc/AACD3qK8O9_NlQC4iQrK5zhUa?dl=0"
  class="dropbox-embed"
  data-height=1000
  data-width=1000
></a>
        </div>
<!--end-->

<script>
    var options = {
      // Shared link to Dropbox file
      link: "https://www.dropbox.com/sh/keptcjl08q3wsid/AACui966iXcXPbagCJ2py2L-a?dl=0",
      file: {
        // Sets the zoom mode for embedded files. Defaults to 'best'.
        zoom: "best" // or "fit"
      },
      folder: {
        // Sets the view mode for embedded folders. Defaults to 'list'.
        view: "list" // or "grid"
        headerSize: "normal" // or "small"
      }
    }
    Dropbox.embed(options, element);</script>
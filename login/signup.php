<?php

/*
Jarryd:
<GOAL>
Destory session and alow a user to sign up
*/


    define('TITLE',"Signup");
    include 'includes/header.php';
    include "bs_include_cdn.php";
    if(isset($_SESSION['userId']))
    {
        header("Location: index.php");
        exit();
    }
?>

<div id="contact">
    
 <h1 class="display-3">Enter Details:</h1>
                      <br>
 
      <h2>Add a new user:</h2>
    <br><br>
    <h1>Signup</h1>
    <hr>
    <?php
    
        $userName = '';
        $email = '';
    
        if(isset($_GET['error']))
        {
            if($_GET['error'] == 'emptyfields')
            {
                echo '<p class="closed"><div class="alert alert-warning" role="alert">
 All fields must have values
</div></p>';
                $userName = $_GET['uid'];
                $email = $_GET['mail'];
            }
            else if ($_GET['error'] == 'invalidmailuid')
            {
                echo '<p class="closed"><div class="alert alert-danger" role="alert">
  Email and username is invalid
</div></p>';
            }
            else if ($_GET['error'] == 'invalidmail')
            {
                echo '<p class="closed"><div class="alert alert-danger" role="alert">
 Please enter a valid email
</div></p>';
            }
            else if ($_GET['error'] == 'invaliduid')
            {
                echo '<p class="closed"><div class="alert alert-danger" role="alert">
  Please enter a username
</div></p>';
            }
            else if ($_GET['error'] == 'passwordcheck')
            {
                echo '<p class="closed"><div class="alert alert-danger" role="alert">
 Passwords do not match!
</div></p>';
            }
            else if ($_GET['error'] == 'usertaken')
            {
                echo '<p class="closed"><div class="alert alert-warning" role="alert">
 Sorry username is already taken
</div></p>';
            }
            else if ($_GET['error'] == 'invalidimagetype')
            {
                echo '<p class="closed"><div class="alert alert-danger" role="alert">
 *Invalid image type. Profile image must be a .jpg or .png file
</div>
                </p>';
            }
            else if ($_GET['error'] == 'imguploaderror')
            {
                echo '<p class="closed"><div class="alert alert-danger" role="alert">
image upload error
</div></p>';
            }
            else if ($_GET['error'] == 'imgsizeexceeded')
            {
                echo '<p class="closed"><div class="alert alert-danger" role="alert">
Image is to large!
</div></p>';
            }
            else if ($_GET['error'] == 'sqlerror')
            {
                echo '<p class="closed"><div class="alert alert-danger" role="alert">
Website error.. Please contact Admin.
</div></p>';
            }
        }
        else if (isset($_GET['signup']) == 'success')
        {
            echo '<p class="open"><div class="alert alert-success" role="alert">
User Registration Successful! - Redirecting you to Login!
</div></p>';
            
             header("refresh:1; url= index.php");
        }
    ?>
    

    
    <form action="includes/signup.inc.php" method='post' id="contact-form" enctype="multipart/form-data">

        <input type="text" id="name" name="uid" placeholder="Username" value=<?php echo $userName; ?>>
        <input type="email" id="email" name="mail" placeholder="email" value=<?php echo $email; ?>>
        <input type="password" id="pwd" name="pwd" placeholder="password">
        <input type="password" id="pwd-repeat" name="pwd-repeat" placeholder="repeat password">
        <hr>
        <h5>Add a Profile Picture:</h5>
        <div class="upload-btn-wrapper">
            <button class="btn">Upload a file</button>
            <input type="file" name='dp'>
        </div>
        <!-- <img id="userDp" src="" >-->
        
        <hr>
        <h5>Select Gender:</h5>
        <label class="" for="gender-m">Male
          <input type="radio" checked="checked" name="gender" value="m" id="gender-m">
          <span class="checkmark"></span>
        </label>
        <label class="" for="gender-f">Female
          <input type="radio" name="gender" value="f" id="gender-f">
          <span class="checkmark"></span>
        </label>

        <hr>
        <h5>Additional Information (Optional):</h5>
        <input type="text" id="f-name" name="f-name" placeholder="First Name" >
        <input type="text" id="l-name" name="l-name" placeholder="Last Name" >
        <input type="text" id="headline" name="headline" placeholder="Your Profile Headline">
        <textarea id="bio" name="bio" placeholder="What you want to tell people about yourself"></textarea>
        
        <hr>
        
        
        <input type="submit" class="btn btn-success btn-lg" name="signup-submit" value="Add User to System">
        
        <a href="includes/logout.inc.php"><button type="button" class="btn btn-danger btn-lg">Cancel registration</button></a>
        
    </form>
    <hr>
</div>

<?php include 'includes/footer.php'; ?> 

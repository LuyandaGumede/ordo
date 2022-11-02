<?php


/*
Jarryd:

Goal: Allow the user to edit data
data should be updated if successful

*/
    define("TITLE","ES - Edit Profile");
    include 'includes/header.php';
     include "bs_include_cdn.php";
    if (!isset($_SESSION['userId']))
    {
        header("Location: index.php");
        exit();
    }    
?>

<a href="profile.php"><button type="button" class="btn btn-primary">Back</button></a>
<br>
<br>

<div style="text-align: center">
    <img id="userDp" src=<?php echo "./uploads/".$_SESSION['userImg']; ?> >
 
    <h1></h1> 
    <h1 class="display-4"><?php echo strtoupper($_SESSION['userUid']); ?></h1>
</div>

<?php
        $userName = '';
        $email = ''; 
    
        if(isset($_GET['error']))
        {
            if($_GET['error'] == 'emptyemail')
            {
                echo '<p class="closed">*Profile email cannot be empty</p>';
                $email = $_GET['mail'];
            }
            else if ($_GET['error'] == 'invalidmail')
            {
                echo '<p class="closed">*Please enter a valid email</p>';
            }
            else if ($_GET['error'] == 'emptyoldpwd')
            {
                echo '<p class="closed">*You must enter the current password to change it</p>';
            }
            else if ($_GET['error'] == 'emptynewpwd')
            {
                echo '<p class="closed">*Please enter the new password</p>';
            }
            else if ($_GET['error'] == 'emptyreppwd')
            {
                echo '<p class="closed">*Please confirm new password</p>';
            }
            else if ($_GET['error'] == 'wrongpwd')
            {
                echo '<p class="closed">*Current password is wrong</p>';
            }
            else if ($_GET['error'] == 'samepwd')
            {
                echo '<p class="closed">*New password cannot be same as old password</p>';
            }
            else if ($_GET['error'] == 'passwordcheck')
            {
                echo '<p class="closed">*Confirmation password is not the same as the new password</p>';
            }
        }
        else if (isset($_GET['edit']) == 'success')
        {
            echo '<p class="open"><div class="alert alert-success" role="alert">
Profile Update Successfully!
</div></p>';
        }
?>

<form action="includes/profileUpdate.inc.php" method='post' id="contact-form" enctype="multipart/form-data">

    <hr>
    <br>
    <p class="h4">Pearsonal Information</p>
<br>

        
        <label for="email"><h5>Email:</h5></label>
        <input type="email" id="email" name="email" placeholder="email" 
               value=<?php echo $_SESSION['emailUsers']; ?>><br>
                <br>
          <hr>          
                    
        <label><h5>FULL NAME:</h5></label>
        <input type="text" id="f-name" name="f-name" placeholder="First Name" 
               value=<?php echo $_SESSION['f_name']; ?>>
        <input type="text" id="l-name" name="l-name" placeholder="Last Name" 
               value=<?php echo $_SESSION['l_name']; ?>>
                <hr>
        

    <h5>GENDER:</h5>
    <!--Male-->
        <label class="" for="gender-m">  Male
          <input type="radio" name="gender" value="m" id="gender-m"
                 <?php if ($_SESSION['gender'] == 'm'){ ?> 
                 checked="checked"
                 <?php } ?>>
          <span class="checkmark"></span>
        </label>
    
    <!--Feale-->
        <label class="" for="gender-f">  Female
          <input type="radio" name="gender" value="f" id="gender-f"
                 <?php if ($_SESSION['gender'] == 'f'){ ?> 
                 checked="checked"
                 <?php } ?>>
          <span class="checkmark"></span>
        </label>
    <hr>
    
     
        <label for="headline"><h5>Profile Headline:</h5></label>
        <input type="text" id="headline" name="headline" placeholder="Your Profile Headline"
               value='<?php echo $_SESSION['headline']; ?>'><br>
    <hr>
     
        <label for="bio"><h5>PROFILE BIO:</h5></label>
        <textarea id="bio" name="bio" maxlength="5000"
            placeholder="What you want to tell people about yourself" 
            ><?php echo $_SESSION['bio']; ?></textarea>
        <br><br>
    
    <hr>
        <h5>CHANGE PASSWORD:</h5>
        <input type="password" id="old-pwd" name="old-pwd" placeholder="current password"><br>
        <input type="password" id="pwd" name="pwd" placeholder="new password">
        <input type="password" id="pwd-repeat" name="pwd-repeat" placeholder="repeat new password">
        <br><br>
    <hr>
    
        <h5>PROFILE PICTURE:</h5>
        <div class="upload-btn-wrapper">
            <button class="btn">Upload a file</button>
            <input type="file" name='dp' value=<?php echo $_SESSION['userImg']; ?>>
        </div>
    <hr>
        <br>
    <div class="d-flex justify-content-center"><input type="submit" class="btn btn-success btn-lg" name="update-profile" value="Update Profile"></div>
<br>
        
        
    </form>
<hr>

<?php include 'includes/footer.php'; ?> 
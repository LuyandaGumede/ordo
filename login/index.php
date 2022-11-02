<?php 



/*
Jarryd:
<Goal>
-Main index for login
-allows uer to enter password and email


*/

    define('TITLE',"Admin Login");
    include 'includes/header.php';
    include "bs_include_cdn.php";
?>
<div id="philosophy">
  
    

    
 <div id="login">
        
        <?php 
            
            if(isset($_SESSION['userId']))
            {
                echo'
                <div class="d-flex justify-content-center">
                <div style="text-align: center;">
                <h1 class="display-1">
                Welcome <h3>' . strtoupper($_SESSION['userUid']) . '</h3></h1>
                <div>
                <br>
                <div class="d-flex justify-content-center">
                        <img id="userDp" src=./uploads/'.$_SESSION["userImg"].'>
                        <br><bR>
                        <a href="Dash.php">
                    </div>    
                    <br>
                <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-success">Continue</button>
                       </a>
                      </div>
                    </div>';
            }
            else
            {
                if(isset($_GET['error']))
                {
                    if($_GET['error'] == 'emptyfields')
                    {
                        echo '<p class="closed"><div class="alert alert-danger" role="alert">
Error: Please Fill in all the fields
</div></p>';
                    }
                    else if($_GET['error'] == 'nouser')
                    {
                        echo '<p class="closed"><div class="alert alert-danger" role="alert">
Error: Username does not exisit
</div></p>';
                    }
                    else if ($_GET['error'] == 'wrongpwd')
                    {
                        echo '<p class="closed"><div class="alert alert-danger" role="alert">
Error: Wrong password
</div></p>';
                    }
                    else if ($_GET['error'] == 'sqlerror')
                    {
                        echo '<p class="closed"><div class="alert alert-danger" role="alert">
Error: SQL ERROR CONTACT ADMIN
</div></p>';
                    }
                }

                //Login  form//
                
                echo '
                
                <div class="d-flex justify-content-center">
                <a href="../index.php">
                <img src="logo ES.png" alt="Italian Trulli" style="width:500px;height:100px;"></a>
                </div>
                <div class="d-flex justify-content-center">
                <form method="post" action="includes/login.inc.php" id="login-form">
                    <input type="text" id="name" name="mailuid" placeholder="Username...">
                    <input type="password" id="password" name="pwd" placeholder="Password...">
                    <div class="d-flex justify-content-center">
                    <input type="submit" class="btn btn-info btn-lg" name="login-submit" value="Login">
                    <a href="../index.php"><button type="button" class="btn btn-dark btn-lg">Cancel</button></a>
                    </div>
                    <br><br>
                    
                </form>
                </div>
                ';               
            }
        ?>

    </div>

    <br><br><br>
    
</div>

<?php 
    include 'includes/footer.php';
?>

<?php
/*
Functions for login and registration - ETERNITY SERVICES
*/

/******************helper functions*************/

//function to clean text
function clean($string){
    
    return htmlentities($string);
    
}

//function to redirect
function redirect($location){
    
    return header("Location: {$location}");
}


//function for messages
function set_message($message){
    
    if(!empty($message)){
        
        $_SESSION['message'] = $message;
    }
    else{
        $message = " ";
    }
}

//function to display a message
function display_message(){
    
    if(isset($_SESSION['message'])){
        
        
        echo $_SESSION['message'];
        
        unset($_SESSION['message']);
    }
}


//function to generate a token
function token_generator(){
    
    
    $token = $_SESSION['token'] = md5(uniqid(mt_rand(),true));
    
    
    return $token;
}

function validation_errors($error_message){
 
$error_message = <<<DELIMITER

<div class="alert alert-danger" role="alert">
   <a href="#" class="alert-link">Error Warning:</a> $error_message
</div>

DELIMITER;
        
return $error_message;
    
}
/****************Check if exisits******************/

//check is an email exisits function//
function email_exists($email){
    
    $sql = "SELECT id FROM users WHERE email = '$email'";
    
    $result = query($sql);
    
    if(row_count($result) == 1){
        
        return true;
    }else{
        return false;
    }
    
}

//check if a username exisits function
function username_exists($username){
    
    $sql = "SELECT id FROM users WHERE username = '$username' ";
    
    $result = query($sql);
    
    if(row_count($result) == 1)
    {
        return true;
        
    }else{
        return false;
    }
    
}
/*****************end of check if exists***********/



function send_email($email, $subject, $msg, $headers){
 
 return mail($email, $subject, $msg, $headers);
 
    
}





/****************validation functions**************/

function validate_user_registration(){
    
    /*Error array - hold all the errors which happen after the submit button has been clicked*/
    $errors = [];
    
    $min = 3;
    $max = 30;
    $Emailmax = 64;
    
    
 if($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $first_name      = clean($_POST['first_name']);
    $last_name       = clean($_POST['last_name']);
    $username        = clean($_POST['username']);
    $email           = clean($_POST['email']);
    $password        = clean($_POST['password']);
    $confirm_password    = clean($_POST['confirm_password']);
    
     
//--------First name validation--------//
if(strlen($first_name) < $min)
 {         
    $errors[] = "Your First Name cannot be less than {$min} characters";        
 }
  
if(strlen($first_name) > $max)
{
    $errors[] = "Your First Name cannot be more than  
    {$max} characters";   
}        
//---End of First name validation-----//
     
     
     
//--------Last name validation--------//
if(strlen($last_name) < $min)
 {         
    $errors[] = "Your Last Name cannot be less than {$min} characters";        
 }
  
if(strlen($last_name) > $max)
{
    $errors[] = "Your Last Name cannot be more than  
    {$max} characters";   
}  
//---End of last name validation-----//     

     
//--------username validation--------//
if(strlen($username) < $min)
 {         
    $errors[] = "Your username cannot be less than {$min} characters";        
 }
  
if(strlen($username) > $max)
{
    $errors[] = "Your username cannot be more than  
    {$max} characters";   
}  
//---End of username validation-----// 
     

//--------email validation--------//
if(strlen($email) < $min)
 {         
    $errors[] = "Your email cannot be less than {$min} characters";        
 }
  
if(strlen($email) > $Emailmax)
{
    $errors[] = "Your email cannot be more than  
    {$Emailmax} characters";   
}  
     
//---End of email validation-----//     

     
//Check if email exists//
if(email_exists($email)) {
    $errors[] = "Sorry that Email is registered";
}   
     
//check if username exisits//
if(username_exists($username)) {
    $errors[] = "Sorry that username is already taken";
}     
     
     
     
//check if password is equal to confirm password//
if($password !== $confirm_password)
    {
      $errors[] = "Your password fields do not match";
    }
     
     
//Checks if the error array is not empty to display errors//
     if(!empty($errors)){
         
         foreach ($errors as $error){
          
        echo validation_errors($error);
             
         }
     } else{
      if(register_user($first_name, $last_name, $username, $email, $password)){
          
          
        set_message("<p class='bg-success text-center'>Please check your email or your Spam folder for activation link</p>");
            
    redirect("index.php");
          
        
      }
         else{
              set_message("<p class='bg-danger text-center'>Sorry could not register the user</p>");
            
            redirect("index.php");
         }
     }
     
    }//end of if(post) statement
    
}//end of validation fucntion





/*********REGISTER USER FUNCTIONS******************/

function register_user($first_name, $last_name, $username, $email, $password){
    
    
  $first_name    = escape($first_name);
  $last_name     = escape($last_name);
  $username      = escape($username);
  $email         = escape($email);
  $password      = escape($password);
    
    
    if(email_exists($email))
        {
    
            return false;
        
        }

    else if(username_exists($username))
        {
        
            return false;
        }

    else
        {
            $password = md5($password);
        
            $validation_code = md5($username);
            
            $sql = "INSERT INTO users(first_name, last_name, username, email, password, validation_code, active)";
$sql.= "VALUES('$first_name','$last_name','$username','$email','$password','$validation_code', '0')";
        $result = query($sql);
        confirm($result);
       
        $subject = "Activate Account";
        $msg = " Please Click the link below to Activate your account
        http://localhost/login/activate.php?email=$email&code=$validation_code";
        
        $header = "From :noreply@eternity.com";
        
        //send a email to user// 
        send_email($email, $subject, $msg, $headers);
       
        return true;
    }
   
}
//end of register_user//


//*******************Activate the user function***********************//

function activate_user(){
    
    if($_SERVER['REQUEST_METHOD'] == "GET"){
        
        if(isset($_GET['email'])){
           
            //get email
        echo   $email = clean($_GET['email']);
            //get validation code
         echo  $validation_code = clean($_GET['code']);
        
            
        $sql = "SELECT id FROM users WHERE email = '".escape($_GET['email'])."' AND validation_code = '".escape($_GET['code'])."' ";
        $result = query($sql);
        confirm($result);
           
        if(row_count($result) == 1){
            
            
        $sql2 = "UPDATE users SET active = 1, validation_code = 0 WHERE email = '".escape($email)."' AND validation_code = '".escape($validation_code)."' ";
        $result2 = query($sql2);
        confirm($result2);
        
        
        
        
    
          set_message("<p class= 'bg-success'>Your account has been activated, Please Login in</p>");

        $location = "login.php";
        redirect($location);
            }
        }
      
        
    }
    
}


/***************************Login Functionality*****************************/


function validate_user_login(){
    
    /*Error array - hold all the errors which happen after the submit button has been clicked*/
    $errors = [];
    
    $min = 3;
    $max = 30;
    $Emailmax = 64;
    
    
 if($_SERVER['REQUEST_METHOD'] == "POST") {
  

    $email           = clean($_POST['email']);
    $password        = clean($_POST['password']);
    $remember        = isset($_POST['remember']);
 
     
     
     if(empty($email)){
         
         $errors[] = "Email Field cannot be empty";
         
     }
         
     if(empty($password)){
         
         $errors[] = "Password Field cannot be empty";
         
     }
     
     
     
     
     
     
     
    if(!empty($errors))
    {
         
         foreach ($errors as $error){
          
        echo validation_errors($error);
             
         }
     } 
     else{
              
              
       if(login_user($email, $password, $remember)){
           
           redirect("dash.html");
       }
         else{
             
             echo validation_errors("Incorrect creditials");
         }
              
     }
 }






}//end of validation login funciton



/**********User login Connect db***********************/

function login_user($email, $password, $remember){
    
    
    
$sql = "SELECT password, id FROM users WHERE email = '".escape($email)."'
AND active = 1";
$result = query($sql);
    
    if(row_count($result)==1){
        
       $row = fetch_array($result);
    
        $db_password = $row['password'];
        
        //returns yes or no if password is true
        if(md5($password) === $db_password){
            
            //Remeber me button//
            if($remember == "on"){
                
                //Cookie for session
                setcookie('email', $email, time() + 60);
            }
            
            
            
            $_SESSION['email'] =$email;
            
            
            return true;
        }
        else{
            return false;
        }
        
        
        
        
        
        return true;
    }
    else
    {
        
        return false;
    }
    
    
}//end of login user function


//function to allow user to be logged on until session is destoryed//
function logged_in(){
    
    
    if(isset($_SESSION['email']) || isset($_COOKIE['email']))
    {
        
        return true;
    }
    else{
        return false;
    }
}


















?>
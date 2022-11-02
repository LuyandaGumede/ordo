<?php
/*
Header functions 
Goal:
-start session
-get db sql
-display html
*/
    session_start();
    require 'dbh.inc.php';

    $companyName = "Eternity Services";
    
    function strip_bad_chars( $input ){
        $output = preg_replace( "/[^a-zA-Z0-9_-]/", "", $input);
        return $output;
    }
?>  




    <head>
        <title><?php echo TITLE; ?></title>
  
 </head>
   


    <!-------     LOGIN / LOGOUT FORM               --------->
    
    <?php 
    
    if(isset($_SESSION['userId']))
    {
        echo '<img id="status" src="">';
    }
    else
    {
        echo '<img id="status" src="">';
    }
    
    ?>
        
   
    
    <!-------     LOGIN / LOGOUT FORM END           --------->
  
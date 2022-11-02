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

<!DOCTYPE html>

<html>
    <head>
        <title><?php echo TITLE; ?></title>
  <link rel="stylesheet" href="includes/styles.css">
        <link rel="shortcut icon" href="" />
    </head>
    <body id="final-example">
       <!-- Just an image -->

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
        <div class="wrapper">
            <div class="content">
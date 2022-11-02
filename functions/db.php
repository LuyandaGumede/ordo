<?php
/*
files database functions
*/

//connection statement
$con = mysqli_connect('localhost', 'root', '', 'login_db');

//count rows in the database//
function row_count($result){
    
    return mysqli_num_rows($result);
}

//CLEAN/ESCAPE DATABASE DATA//
function escape($string){
    global $con;
    
   return mysqli_real_escape_string($con, $string);    
}


//query statement
function query($query){
    
    //get connection
    global $con;
    
   return mysqli_query($con, $query);
}

//confirm function
function confirm($result){
    
    global $con;
    
    if(!$result){
        
        die("QUERY FAILED". mysqli_error($con));
        
    }
}





//fetches data from db
function fetch_array($result){
    global $con;
    
    return mysqli_fetch_array($result);
}










?>
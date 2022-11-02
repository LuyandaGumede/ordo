<?php

/*
ETERNITY SERVICES:
GOAL?
- DEFINE THE CONNECTION FOR SQL
-IF FAILED - SEND FAILED MESSAGE

*/


$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "loginsystem";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName, 3306);

if (!$conn)
{
    die("Connection failed: ". mysqli_connect_error());
}
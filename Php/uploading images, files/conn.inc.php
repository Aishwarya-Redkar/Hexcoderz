<?php 
$server ="localhost";
$user="root";
$pass="";
$database = "upload";

$connection = mysql_connect($server, $user, $pass) or die ('Could not connect: '.mysql_error());

mysql_select_db($database,$connection);  
?>

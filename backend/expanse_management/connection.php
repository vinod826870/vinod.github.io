<?php


 $db_host = 'localhost';
 $db_username = 'root';
 $db_password = '';
 $db_name = 'expanse_management';
 				
$conn = mysqli_connect($db_host, $db_username, $db_password,$db_name);
 
if ($conn->connect_error) {
    die('Error : ('. $conn->connect_errno .') '. $conn->connect_error);
}




 ?>
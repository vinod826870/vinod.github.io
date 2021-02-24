<?php
require_once('connection.php');

$user_id = $_GET['user_id'];
$select = "SELECT * FROM `expense` WHERE `user_id`=".$user_id;
$query = mysqli_query($conn,$select);
$response = [];
while($res = mysqli_fetch_assoc($query)){
	$response[] = $res;
}
echo json_encode($response);
?>
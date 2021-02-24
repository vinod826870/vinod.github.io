
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	require_once('connection.php');
	$name = $_POST['name'];
	$user_id = $_POST['user_id'];
	
	$insert = "INSERT INTO `member` (`name`,`user_id`) VALUES ('".$name."','".$user_id."')";
	mysqli_query($conn,$insert);
	$res = ['status'=>1,'msg'=>'Data inserted successfully'];
	echo json_encode($res);
}else{
	$res = ['status'=>0,'msg'=>'Method POST Required'];
	echo json_encode($res);
}

?>

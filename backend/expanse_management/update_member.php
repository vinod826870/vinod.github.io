<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	require_once('connection.php');
	$id = $_POST['id'];
	$name = $_POST['name'];
	
	$update = "UPDATE `member` SET `name`='".$name."' WHERE `id`=".$id;
	mysqli_query($conn,$update);
	$res = ['status'=>1,'msg'=>'Data updated successfully'];
	echo json_encode($res);
}else{
	$res = ['status'=>0,'msg'=>'Method POST Required'];
	echo json_encode($res);
}

?>
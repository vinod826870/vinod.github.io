
<?php
require_once('connection.php');
$email = $_POST['email'];
$password = $_POST['password'];

$select = "SELECT * FROM `user` where `email`='$email' and `password`='$password'";
$query = mysqli_query($conn,$select);

if(mysqli_num_rows($query) > 0){
	$result = mysqli_fetch_assoc($query);
	$res = ['status'=>1,'userdata'=>$result];
	echo json_encode($res);
}else{
	$res = ['status'=>0,'msg'=>'Username or password is incorrect.'];
	echo json_encode($res);
}
?>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
  require_once('connection.php');
  $username = $_POST['username'];
  $email = $_POST['email'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $password = $_POST['password'];
  
  $insert = "INSERT INTO `user`(`id`,`username`, `email`, `firstname`, `lastname`, `password`) VALUES (null,'{$username}','{$email}','{$firstname}','{$lastname}','{$password}')";
  mysqli_query($conn,$insert);
  $res = ['status'=>1,'msg'=>'Data inserted successfully'];
  echo json_encode($res);
}else{
  $res = ['status'=>0,'msg'=>'Method POST Required'];
  echo json_encode($res);
}

?>
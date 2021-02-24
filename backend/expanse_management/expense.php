
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  require_once('connection.php');
  $user_id = $_POST['user_id'];
  $amount = $_POST['amount'];
  $description = $_POST['description'];
  $given = $_POST['given'];

  $insert = "INSERT INTO `expense`(`user_id`,`amount`, `description`, `given`) VALUES('{$user_id}','{$amount}','{$description}','{$given}')";

  mysqli_query($conn,$insert);

  $res = ['status'=>1,'msg'=>'data inserted successfully'];
  echo  json_encode($res);
}else{
  $res = ['status'=>0,'msg'=>'Method Post Required'];
  echo  json_encode($res);
}
?>

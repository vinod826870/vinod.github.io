<?php
require_once('connection.php');

$id = $_GET['id'];

$delete = "DELETE FROM `member` WHERE `id`=".$id;

mysqli_query($conn,$delete);

$res = ['status'=>1,'msg'=>'Member Delete successfully'];

echo json_encode($res);

?>
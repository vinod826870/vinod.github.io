<?php

require_once('connection.php');

$id = $_GET['id'];

$query = "SELECT SUM(amount)  FROM `expense` WHERE `user_id`=".$id;

$response = [];

$result = mysqli_query($conn,$query);
    // Print out result
    while($row = mysqli_fetch_assoc($result)){
      

   $response[] = $row['SUM(amount)'];

    
}

echo json_encode($response);

 ?>
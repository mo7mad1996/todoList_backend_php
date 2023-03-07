<?php

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT id FROM `users` where (`users`.`password` = '$password' AND `users`.`email` = '$email')";

$result = mysqli_query($conn, $sql);
$userID = null;

if (mysqli_num_rows($result) > 0) {
    
  while($row = mysqli_fetch_assoc($result)) {
    $userID = $row['id'];
  }

}

print(json_encode( $userID));

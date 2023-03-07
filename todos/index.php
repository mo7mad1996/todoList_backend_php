<?php

$tasks = [];

$sql = "SELECT * FROM `tasks` WHERE `user_id` = ".$_GET['user_id'];

$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
        array_push($tasks, $row);
    }
}

print(json_encode( $tasks));

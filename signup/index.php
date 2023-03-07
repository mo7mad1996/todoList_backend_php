<?php

$keys = ['username', 'email', 'password'];

$colomns = '';
$values = '';

foreach($keys as $key) {
    $colomns .= ", `$key`";

    $value = $_POST[$key];
    $values .= ", '$value'";
}

$colomns = trim($colomns, ', ');
$values = trim($values, ', ');


$sql = "INSERT INTO `users`($colomns) VALUES ($values)";
$res = mysqli_query( $conn, $sql);

print(json_encode($res));

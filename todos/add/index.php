<?php 

$keys = array_keys($tables['tasks']);

$colomns = implode(', ', $keys);

$values = "";
foreach($keys as $key) {
    $value = $_POST[$key];
    $values .= "'$value', ";
}

$values = trim($values, ', ');


$sql = "INSERT INTO `tasks`($colomns) VALUES ($values)";
$res = mysqli_query( $conn, $sql);



if($res) {
    print(json_encode(mysqli_insert_id($conn)));
} else {
    print(json_encode(false));
}


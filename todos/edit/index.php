<?php
$keys = array_keys($tables['tasks']);

$sql = "UPDATE `tasks` SET ";

foreach($keys as $key){
    $$key = $_POST[$key];
    $value = $$key;

    $sql .= "`$key` = '$value', ";
}

$sql = trim($sql, ', ');
$sql .= " WHERE `tasks`.`id` = " . $_POST['id'];

$res = mysqli_query($conn, $sql);

print(json_encode( $res));

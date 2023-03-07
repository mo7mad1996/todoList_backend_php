<?php
    $sql = "DELETE FROM `tasks` WHERE `tasks`.`id` = " . $_GET['id'];
    
    $result = mysqli_query($conn, $sql);
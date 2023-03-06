<?php

include "includes/app.php";
session_start();
$conn = connectDB();

$idBtn = $_COOKIE['id'];
$typeBtn = $_COOKIE['type'];
if ($typeBtn === 'VIP'){
    $sql = "UPDATE `users` SET `vip`=0 WHERE id='${idBtn}'";
} elseif ($typeBtn === 'Plus') {
    $sql = "UPDATE `users` SET `plus`=0 WHERE id='${idBtn}'";
} elseif ($typeBtn === 'Elite') {
    $sql = "UPDATE `users` SET `elite`=0 WHERE id='${idBtn}'";
} elseif ($typeBtn === 'Fenotipe') {
    $sql = "UPDATE `users` SET `fenotipo`=0 WHERE id='${idBtn}'";
}
mysqli_query($conn, $sql);
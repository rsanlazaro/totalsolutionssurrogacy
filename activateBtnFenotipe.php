<?php

include "includes/app.php";
session_start();
$conn = connectDB();

$idBtn = $_COOKIE['id'];
$typeBtn = $_COOKIE['type'];
if ($typeBtn === 'Fenotipe') {
    $sql = "UPDATE `users` SET `fenotipo`=1, `vip`=0, `plus`=0, `elite`=0 WHERE id='${idBtn}'";
}
mysqli_query($conn, $sql);

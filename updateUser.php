<?php

if (!$_SESSION['login']) {
    header('location: /index.php');
} else {
    if (!($_SESSION['type'] === 'ADMIN')) {
        header('location: /index.php');
    } 
}

session_start();
include "includes/config/database.php";
$conn = connectDB();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $mail = $_POST['mail'];
    $type = $_POST['type'];
    $VIP = $_POST['VIP'];
    $Plus = $_POST['Plus'];
    $Elite = $_POST['Elite'];
}
if ($id) {
    $query = "UPDATE users SET username='${user}', password='${pass}', email='${mail}', type='${type}', VIP='${VIP}', Elite='${Elite}', Plus='${Plus}' WHERE id = ${id}";
    $result = mysqli_query($conn, $query);
    header("Location: users.php?msg=Los datos se han actualizado correctamente");
}
?>
<?php
include "includes/app.php";
if (!$_SESSION['login']) {
    header('location: /index.php');
} else {
    if (!($_SESSION['type'] === 'admin' || $_SESSION['type'] === 'admin-jr')) {
        header('location: /index.php');
    } 
}
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
    $donant_1 = $_POST['donant_1'];
    $donant_2 = $_POST['donant_2'];
    $donant_3 = $_POST['donant_3'];
    $code = $_POST['code'];
}
if ($id) {
    $query = "UPDATE users SET username='${user}', password='${pass}', email='${mail}', type='${type}', VIP='${VIP}', Elite='${Elite}', Plus='${Plus}', donant_1='${donant_1}', donant_2='${donant_2}', donant_3='${donant_3}', code='${code}' WHERE id = ${id}";
    $result = mysqli_query($conn, $query);
    header("Location: users.php?msg=Los datos se han actualizado correctamente");
}
?>
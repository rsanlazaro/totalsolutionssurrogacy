<?php
include "includes/app.php";
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$conn = connectDB();

if (!($_SESSION['login'])) {
    header('location: /index.php');
}

    
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $type = $_POST['type'];
}
if ($id) {
    $query = "UPDATE users SET username='${user}', password='${pass}', profile='${type}' WHERE id = ${id}";
    $result = mysqli_query($conn, $query);
    header("Location: users_adm.php?msg=Los datos se han actualizado correctamente");
}
?>
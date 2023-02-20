<?php
session_start();
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
    var_dump($id);
}
if ($id) {
    $query = "DELETE FROM users WHERE id = ${id}";
    $result = mysqli_query($conn, $query);
    header("Location: users.php?msg=El usuario se ha eliminado exitosamente");
}
?>
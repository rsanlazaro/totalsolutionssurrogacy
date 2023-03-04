<?php
include "includes/app.php";

if (!$_SESSION['login']) {
    header('location: /index.php');
} else {
    if (!($_SESSION['type'] === 'admin' || $_SESSION['type'] === 'admin-jr')) {
        header('location: /index.php');
    } 
}

$db = new mysqli(
        $_ENV['DB_HOST'],
        $_ENV['DB_USER'],
        $_ENV['DB_PASS'] ?? '',
        $_ENV['DB_BD']);

    if(!$db) {
        echo "Error, no se pudo conectar";
        exit;
    }
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
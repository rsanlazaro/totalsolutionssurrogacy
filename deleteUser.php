<?php
include "includes/app.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!($_SESSION['login'])) {
    header('location: /index.php');
}

$conn = connectDB();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    $user = $_POST['user'];
    // echo $id;
    if (isset($id)) {
        $query = "DELETE FROM users WHERE id = ${id}";
        $result = mysqli_query($conn, $query);
        header("Location: users_adm.php?msg=El usuario '" . $user . "' se ha eliminado exitosamente");
    }
}

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
    $form_name = $_POST['form_name'];
}
if ($id) {
    $query = "DELETE FROM candidates WHERE id = ${id}";
    $result1 = mysqli_query($conn, $query);
    $query = "DELETE FROM pregnants WHERE candidateId = ${id}";
    $result2 = mysqli_query($conn, $query);
    $query = "DELETE FROM family WHERE candidateId = ${id}";
    $result3 = mysqli_query($conn, $query);
    if ($result1 && $result2 && $result3) {
        header("Location: profile_adm.php?msg=El usuario '" . $form_name . "' se ha eliminado exitosamente");
    }
}
?>
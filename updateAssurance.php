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
    $assurance_name = $_POST['assurance_name'];
    $assurance_begin = $_POST['assurance_begin'];
    $assurance_payment1 = $_POST['assurance_payment1'];
    $assurance_payment2 = $_POST['assurance_payment2'];
}
if ($id) {
    $query = "UPDATE assurance SET assurance_name='${assurance_name}', assurance_begin='${assurance_begin}', assurance_payment1='${assurance_payment1}', assurance_payment2='${assurance_payment2}' WHERE id = ${id}";
    $result = mysqli_query($conn, $query);
    header("Location: assurance_adm.php?msg=Los datos se han actualizado correctamente");
}
?>
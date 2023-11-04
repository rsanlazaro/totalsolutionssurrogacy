<?php
include "includes/app.php";
$conn = connectDB();
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $code = $_POST['code'];
    $id = $_SESSION['id'];
    $query    = "UPDATE `users` SET phenotype_selected = '${code}' WHERE id='${id}'";
    $result   = mysqli_query($conn, $query);
    if ($result) {
        header("Location: catalogue.php?msg=El usuario se ha creado exitosamente. Recuerde que no puede seleccionar más perfiles");
    } else {
        header("Location: catalogue.php?msg=Hubo un problema registrando al usuario. Por favor, intente nuevamente");
    }
}

<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!($_SESSION['login'])) {
    header('location: /index.php');
}

include "includes/app.php";
$conn = connectDB();

$val_id = $_POST['id'];
$key = 'action_value_' . $val_id;  // Dynamically create the key

if (isset($_POST[$key])) {
    if ($_POST[$key] == "Inicial") {
        $action_value = "initial";
    } else if ($_POST[$key] == "Descartadas") {
        $action_value = "discarded";
    } else if ($_POST[$key] == "Registro") {
        $action_value = "register";
    } else if ($_POST[$key] == "Gestante") {
        $action_value = "pregnant";
    }
}

// var_dump($action_value);
// var_dump($_POST);

// if (isset($action_value)) {
//     header('location: /profile_adm2.php?msg=No se ha podido cambiar el estado del perfil');
// } else {
    $sql = "UPDATE `candidates` SET `form_label`='$action_value' WHERE id='$val_id'";
    if (mysqli_query($conn, $sql)) {
        header('location: /profile_adm2.php?msg=El perfil se ha movido con éxito');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
// }

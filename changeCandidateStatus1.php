2<?php

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    if (!($_SESSION['login'])) {
        header('location: /index.php');
    }

    include "includes/app.php";
    $conn = connectDB();

    if (isset($_POST['action_value1'])) {
        if ($_POST['action_value1'] == "Inicial") {
            $action_value = "initial";
        } else if ($_POST['action_value1'] == "Descartadas") {
            $action_value = "discarded";
        }
    } else {
        $action_value = $_POST['action_value1'];
    }

    $val_id = $_POST['id'];

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
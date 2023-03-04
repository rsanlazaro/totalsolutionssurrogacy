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

    
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
}
if ($id) {
    $sql = "SELECT * FROM donants WHERE id=${id}";
    $result = mysqli_query($db, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $code = $row['code'];
    }    
    $dir = 'build/img/admin/donants/' . $code . "_1";
    array_map('unlink', glob("{$dir}.*"));
    $dir = 'build/img/admin/donants/' . $code . "_2";
    array_map('unlink', glob("{$dir}.*"));
    $dir = 'build/img/admin/donants/' . $code . "_3";
    array_map('unlink', glob("{$dir}.*"));
    $dir = 'build/img/admin/donants/' . $code . "_4";
    array_map('unlink', glob("{$dir}.*"));
    $query = "DELETE FROM donants WHERE id = ${id}";
    $result = mysqli_query($db, $query);
    header("Location: donants.php?msg=El usuario se ha eliminado exitosamente");
}

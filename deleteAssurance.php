<?php
include "includes/app.php";

if (!$_SESSION['login']) {
    header('location: /index.php');
} else {
    if (!($_SESSION['type'] === 'admin' || $_SESSION['type'] === 'admin-jr')) {
        header('location: /index.php');
    }
}

$conn = connectDB();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
}
if ($id) {
    $sql = "SELECT * FROM assurance WHERE id=${id}";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $code = $row['code'];
    }
    $query = "DELETE FROM assurance WHERE id = ${id}";
    $result = mysqli_query($conn, $query);
    header("Location: assurance_adm.php?msg=La póliza se ha eliminado exitosamente");
}

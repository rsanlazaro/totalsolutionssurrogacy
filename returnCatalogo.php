<?php
include "includes/app.php";
if (!$_SESSION['login']) {
    header('location: /index.php');
} else {
    if (!($_SESSION['type'] === 'user' || $_SESSION['type'] === 'admin' || $_SESSION['type'] === 'admin-jr') || $_SESSION['type'] === 'donant') {
        header('location: /index.php');
    }
}

$id = $_GET['id'];
$conn = connectDB();

$sql = "SELECT * FROM donants WHERE id=${id}";
$result = mysqli_query($conn, $sql);
$result = mysqli_query($conn, $sql);
if (!$result->num_rows) {
    header('location: /');
}
while ($row = mysqli_fetch_assoc($result)) {
    $profile = $row['profile'];
}

if ($profile === "Elite") {
    header("Location: donantElite.php?id=" . $id);
}
if ($profile === "Plus") {
    header("Location: donantPlus.php?id=" . $id);
}
if ($profile === "VIP") {
    header("Location: donantVIP.php?id=" . $id);
}
if ($profile === "Fenotipe") {
    header("Location: donantFenotipe.php?id=" . $id);
}
?>
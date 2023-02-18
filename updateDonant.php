<?php

if (!$_SESSION['login']) {
    header('location: /index.php');
} else {
    if (!($_SESSION['type'] === 'admin' || $_SESSION['type'] === 'admin-jr')) {
        header('location: /index.php');
    }
}

session_start();
include "includes/config/database.php";
$conn = connectDB();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (($_FILES['image-1']['size'] > 0)) {
        $file = $_FILES['image-1']['name'];
        $path = pathinfo($file);
        $ext = $path['extension'];
        $_FILES['image-1']['name'] = $_POST['code'] . "_1." . $ext;
        move_uploaded_file($_FILES['image-1']['tmp_name'], "build/img/admin/donants/" . $_FILES['image-1']['name']);
    }
    if (($_FILES['image-2']['size'] > 0)) {
        $file2 = $_FILES['image-2']['name'];
        $path2 = pathinfo($file2);
        $ext2 = $path2['extension'];
        $_FILES['image-2']['name'] = $_POST['code'] . "_2." . $ext2;
        move_uploaded_file($_FILES['image-2']['tmp_name'], "build/img/admin/donants/" . $_FILES['image-2']['name']);
    }
    if (($_FILES['image-3']['size'] > 0)) {
        $file3 = $_FILES['image-3']['name'];
        $path3 = pathinfo($file3);
        $ext3 = $path3['extension'];
        $_FILES['image-3']['name'] = $_POST['code'] . "_3." . $ext3;
        move_uploaded_file($_FILES['image-3']['tmp_name'], "build/img/admin/donants/" . $_FILES['image-3']['name']);
    }
    if (($_FILES['image-4']['size'] > 0)) {
        $file4 = $_FILES['image-4']['name'];
        $path4 = pathinfo($file4);
        $ext4 = $path4['extension'];
        $_FILES['image-4']['name'] = $_POST['code'] . "_4." . $ext4;
        move_uploaded_file($_FILES['image-4']['tmp_name'], "build/img/admin/donants/" . $_FILES['image-4']['name']);
    }
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    $nationality = $_POST['nationality'];
    $date_birth = $_POST['date_birth'];
    $color_eyes = $_POST['color_eyes'];
    $color_skin = $_POST['color_skin'];
    $blood_type = $_POST['blood_type'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $education = $_POST['education'];
    $color_hair = $_POST['color_hair'];
    $type_hair = $_POST['type_hair'];
    $type_body = $_POST['type_body'];
    $ocupation = $_POST['ocupation'];
    $profile = $_POST['profile'];
    $supplier = $_POST['supplier'];
    $price = $_POST['price'];
    $code = $_POST['code'];
}
if ($id) {
    $query = "UPDATE donants SET code='${code}', nationality='${nationality}', date_birth='${date_birth}', color_eyes='${color_eyes}', color_skin='${color_skin}', blood_type='${blood_type}', height='${height}', weight='${weight}', education='${education}', color_hair='${color_hair}', type_hair='${type_hair}', type_body='${type_body}', ocupation='${ocupation}', profile='${profile}', supplier='${supplier}', price='${price}' WHERE id = ${id}";
    $result = mysqli_query($conn, $query);
    header("Location: donants.php?msg=Los datos se han actualizado correctamente");
}

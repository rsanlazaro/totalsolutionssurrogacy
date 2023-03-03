<?php

session_start();

if (!$_SESSION['login']) {
    // header('location: /index.php');
} else {
    if (!($_SESSION['type'] === 'admin' || $_SESSION['type'] === 'admin-jr')) {
        // header('location: /index.php');
    }
}

include "includes/app.php";
$conn = connectDB();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
    $code = strtoupper($code);

    $sql = "SELECT * FROM donants WHERE id=${id}";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $code_img = $row['code_img'];
        $ext_img_1 = $row['ext_img_1'];
        $ext_img_2 = $row['ext_img_2'];
        $ext_img_3 = $row['ext_img_3'];
        $ext_img_4 = $row['ext_img_4'];
    }

    if (isset($_FILES['image-1']['name'])) {
        $file = $_FILES['image-1']['name'];
        $path = pathinfo($file);
        $ext_img_1 = $path['extension'];
        $_FILES['image-1']['name'] = $code_img . "_1";
        $result = $cloudinary->uploadApi()->upload(
            $_FILES['image-1']['tmp_name'],
            [
                'public_id' => $_FILES['image-1']['name'],
                'overwrite' => true,
                'folder' => 'test',
                'format' => 'png',
                'invalidate' => true,
                'media_metadata' => true
            ]
        );
        $json  = json_encode($result);
        $array = json_decode($json, true);
        $secureUrl = $array['secure_url'];
        $query = "UPDATE donants SET ext_img_1='${secureUrl}' WHERE id = ${id}";
        $result   = mysqli_query($conn, $query);
    }
    // if (isset($_FILES['image-2']['name'])) {
    //     $file2 = $_FILES['image-2']['name'];
    //     $path2 = pathinfo($file2);
    //     $ext_img_2 = $path2['extension'];
    //     $_FILES['image-2']['name'] = $code_img . "_2";
    //     $result = $cloudinary->uploadApi()->upload(
    //         $_FILES['image-2']['tmp_name'],
    //         [
    //             'public_id' => $_FILES['image-2']['name'],
    //             'overwrite' => true,
    //             'folder' => 'test',
    //             'format' => 'png',
    //             'invalidate' => true
    //         ]
    //     );
    //     var_dump($result);
    // }
    // if (isset($_FILES['image-3']['name'])) {
    //     $file3 = $_FILES['image-3']['name'];
    //     $path3 = pathinfo($file3);
    //     $ext_img_3 = $path3['extension'];
    //     $_FILES['image-3']['name'] = $code_img . "_3";
    //     $result = $cloudinary->uploadApi()->upload(
    //         $_FILES['image-3']['tmp_name'],
    //         [
    //             'public_id' => $_FILES['image-3']['name'],
    //             'overwrite' => true,
    //             'folder' => 'test',
    //             'format' => 'png',
    //             'invalidate' => true
    //         ]
    //     );
    // }
    // if (isset($_FILES['image-4']['name'])) {
    //     $file4 = $_FILES['image-4']['name'];
    //     $path4 = pathinfo($file4);
    //     $ext_img_4 = $path4['extension'];
    //     $_FILES['image-4']['name'] = $code_img . "_4";
    //     $result = $cloudinary->uploadApi()->upload(
    //         $_FILES['image-4']['tmp_name'],
    //         [
    //             'public_id' => $_FILES['image-4']['name'],
    //             'overwrite' => true,
    //             'folder' => 'test',
    //             'format' => 'png',
    //             'invalidate' => true
    //         ]
    //     );
    // }
}
// if ($id) {
//     $query = "UPDATE donants SET code='${code}', nationality='${nationality}', date_birth='${date_birth}', color_eyes='${color_eyes}', color_skin='${color_skin}', blood_type='${blood_type}', height='${height}', weight='${weight}', education='${education}', color_hair='${color_hair}', type_hair='${type_hair}', type_body='${type_body}', ocupation='${ocupation}', profile='${profile}', supplier='${supplier}', price='${price}' WHERE id = ${id}";
//     $result = mysqli_query($conn, $query);
//     header("Location: donants.php?msg=Los datos se han actualizado correctamente");
// }
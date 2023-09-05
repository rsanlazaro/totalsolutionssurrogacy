<?php
include 'includes/templates/header.php';
include "includes/app.php";
if (!$_SESSION['login']) {
    header('location: /index.php');
} else {
    if (!($_SESSION['type'] === 'user' || $_SESSION['type'] === 'admin' || $_SESSION['type'] === 'admin-jr')) {
        header('location: /index.php');
    }
}

$id = $_GET['id'];
$conn = connectDB();


$sql = "SELECT * FROM donants WHERE id=${id}";
$result = mysqli_query($conn, $sql);
if (!$result->num_rows) {
    header('location: /');
}
while ($row = mysqli_fetch_assoc($result)) {
    $nationality = $row['nationality'];
    $date_birth = $row['date_birth'];
    $color_eyes = $row['color_eyes'];
    $color_skin = $row['color_skin'];
    $blood_type = $row['blood_type'];
    $height = $row['height'];
    $weight = $row['weight'];
    $education = $row['education'];
    $color_hair = $row['color_hair'];
    $type_hair = $row['type_hair'];
    $type_body = $row['type_body'];
    $ocupation = $row['ocupation'];
    $profile = $row['profile'];
    $price = $row['price'];
    $code = $row['code'];
    $ext_img_1 = $row['ext_img_1'];
    $ext_img_2 = $row['ext_img_2'];
    $ext_img_3 = $row['ext_img_3'];
}
?>

<main class="donant-info">
    <div class="donants fenotipe">
        <?php if ($profile === "Fenotipe") { ?>
            <div class="phenotype-parent donant">
                <div class="img-1 div1">
                    <?php if ($ext_img_1 !== "-") { ?>
                        <img id="myImg1" <?php echo "src=" . $ext_img_1 ?> alt="img" style="width:100%">
                        <div id="myModal1" class="modal">

                            <!-- The Close Button -->
                            <span class="close1">&times;</span>

                            <!-- Modal Content (The Image) -->
                            <img <?php if ($ext_img_1 !== "-") {
                                        echo "class='modal-img'src=" . $ext_img_1;
                                    } else {
                                        echo "class='img-padding' src=build/img/admin/default.webp";
                                    }  ?> alt="picture">
                        </div>
                    <?php } else { ?>
                        <img <?php echo "class='img-padding' src=build/img/admin/default.webp"; ?> alt="picture">
                    <?php } ?>
                </div>
                <div class="img-2 div2">
                    <?php if ($ext_img_2 !== "-") { ?>
                        <img id="myImg2" <?php echo "src=" . $ext_img_2 ?> alt="img" style="width:100%">
                        <div id="myModal2" class="modal">

                            <!-- The Close Button -->
                            <span class="close2">&times;</span>

                            <!-- Modal Content (The Image) -->
                            <img <?php if ($ext_img_2 !== "-") {
                                        echo "class='modal-img'src=" . $ext_img_2;
                                    } else {
                                        echo "class='img-padding' src=build/img/admin/default.webp";
                                    }  ?> alt="picture">
                        </div>
                    <?php } else { ?>
                        <img <?php echo "class='img-padding' src=build/img/admin/default.webp"; ?> alt="picture">
                    <?php } ?>
                </div>
                <div class="img-3 div3">
                    <?php if ($ext_img_3 !== "-") { ?>
                        <img id="myImg3" <?php echo "src=" . $ext_img_3 ?> alt="img" style="width:100%">
                        <div id="myModal3" class="modal">

                            <!-- The Close Button -->
                            <span class="close3">&times;</span>

                            <!-- Modal Content (The Image) -->
                            <img <?php if ($ext_img_3 !== "-") {
                                        echo "class='modal-img'src=" . $ext_img_3;
                                    } else {
                                        echo "class='img-padding' src=build/img/admin/default.webp";
                                    }  ?> alt="picture">
                        </div>
                    <?php } else { ?>
                        <img <?php echo "class='img-padding' src=build/img/admin/default.webp"; ?> alt="picture">
                    <?php } ?>
                </div>
                <div class="donant-data div4">
                    <p>Código: <?php echo $code ?></p>
                    <ul>
                        <li>Nacionalidad: <?php echo $nationality ?></li>
                        <li>Fecha de nacimiento: <?php echo $date_birth ?></li>
                        <li>Color de ojos: <?php echo $color_eyes ?></li>
                        <li>Color de piel: <?php echo $color_skin ?></li>
                        <li>Grupo sanguíneo: <?php echo $blood_type ?></li>
                        <li>Estatura: <?php echo $height ?> m</li>
                        <li>Peso: <?php echo $weight ?> kg</li>
                        <li>Educación: <?php echo $education ?></li>
                        <li>Color de pelo: <?php echo $color_hair ?></li>
                        <li>TIpo de pelo: <?php echo $type_hair ?></li>
                        <li>Tipo de cuerpo: <?php echo $type_body ?></li>
                        <li>Ocupación: <?php echo $ocupation ?></li>
                        <li>Precio: <?php
                                    // if (isset($price)) {
                                    //                 echo number_format($price, 2, ',', '.') . " " . "\xE2\x82\xAc";
                                    //             }
                                    echo $price . " " . "\xE2\x82\xAc";
                                    ?></li>
                    </ul>
                </div>
            </div>

        <?php } ?>
    </div>
    <div class="menu-users">
        <div class="logout">
            <a href="logout.php">
                Cerrar sesión
            </a>
        </div>
    </div>
</main>
<?php include 'includes/templates/footer.php'; ?>
</body>

</html>
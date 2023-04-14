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
                    <img src=<?php if ($ext_img_1 !== "-") {
                                    echo $ext_img_1;
                                } else {
                                    echo "build/img/admin/default.webp";
                                }  ?> alt="picture">
                </div>
                <div class="img-2 div2">
                    <img src=<?php if ($ext_img_2 !== "-") {
                                    echo $ext_img_2;
                                } else {
                                    echo "build/img/admin/default.webp";
                                }  ?> alt="picture">
                </div>
                <div class="img-3 div3">
                    <img src=<?php if ($ext_img_3 !== "-") {
                                    echo $ext_img_3;
                                } else {
                                    echo "build/img/admin/default.webp";
                                }  ?> alt="picture">
                </div>
                <div class="donant-data div4">
                    <ul>
                        <li>Código: <?php echo $code ?></li>
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
                        <li>Precio: <?php if (isset($price)) {
                                        echo number_format($price, 2, ',', '.') . " " . "\xE2\x82\xAc";
                                    } ?></li>
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
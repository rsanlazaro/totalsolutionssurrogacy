<?php
include 'includes/templates/header.php';
include "includes/app.php";
// estaAutenticado();
if (!$_SESSION['login']) {
    header('location: /index.php');
} else {
    if (!($_SESSION['type'] === 'user' || $_SESSION['type'] === 'admin' || $_SESSION['type'] === 'admin-jr' || $_SESSION['type'] === 'donant')) {
        header('location: /index.php');
    }
}

$id = $_GET['id'];
$conn = connectDB();
$sql = "SELECT * FROM donants WHERE id={$id}";
$result = mysqli_query($conn, $sql);
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
}
?>

<main class="donant-info">
    <div class="hero-img">
        <div class="img-container">
            <img src="build/img/hero/vip.webp" alt="hero-image" />
        </div>
    </div>
    <div class="donants">
        <?php if ($profile === "VIP") { ?>
            <div class="donant parent">
                <div class="img-1 div1">
                    <img src=<?php echo "https://res.cloudinary.com/dyn4nexb0/image/upload/" . $code_img[$i] . "_1.png" ?> alt="picture">
                </div>
                <div class="donant-data div2">
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
                        <li>Precio: <?php if (isset($price)) {echo "$" . $price;} ?></li>
                    </ul>
                </div>
                <div class="img-2 div3">
                    <img src=<?php echo "https://res.cloudinary.com/dyn4nexb0/image/upload/" . $code_img[$i] . "_2.png" ?> alt="picture">
                </div>
                <div class="img-3 div4">
                    <img src=<?php echo "https://res.cloudinary.com/dyn4nexb0/image/upload/" . $code_img[$i] . "_3.png" ?> alt="picture">
                </div>
                <div class="img-4 div5">
                    <img src=<?php echo "https://res.cloudinary.com/dyn4nexb0/image/upload/" . $code_img[$i] . "_4.png" ?> alt="picture">
                </div>
            </div>
        <?php } ?>
    </div>
</main>
<?php include 'includes/templates/footer.php'; ?>
</body>

</html>
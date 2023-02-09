<?php
include 'includes/templates/header.php';
include "includes/config/database.php";
include 'includes/functions.php';
// estaAutenticado();
if (!$_SESSION['login']) {
    header('location: /index.php');
} else {
    if (!($_SESSION['type'] === 'ADMIN' || $_SESSION['type'] === 'USER')) {
        header('location: /index.php');
    }
}
$conn = connectDB();
$sql = "SELECT * FROM donants";
$result = mysqli_query($conn, $sql);
$index = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $id[++$index] = $row['id'];
    $nationality[$index] = $row['nationality'];
    $date_birth[$index] = $row['date_birth'];
    $color_eyes[$index] = $row['color_eyes'];
    $color_skin[$index] = $row['color_skin'];
    $blood_type[$index] = $row['blood_type'];
    $height[$index] = $row['height'];
    $weight[$index] = $row['weight'];
    $education[$index] = $row['education'];
    $color_hair[$index] = $row['color_hair'];
    $type_hair[$index] = $row['type_hair'];
    $type_body[$index] = $row['type_body'];
    $ocupation[$index] = $row['ocupation'];
    $profile[$index] = $row['profile'];
}
?>

<main class="register">
    <div class="hero-img">
        <div class="img-container">
            <img src="build/img/hero/plus.webp" alt="hero-image" />
        </div>
    </div>
    <div class="donants">
        <?php for ($i = 1; $i <= $index; $i++) {
            if ($profile[$i] === "Elite") { ?>
                <div class="donant parent">
                    <div class="img-1 div1">
                        <img src=<?php echo "build/img/admin/donants/" . $code[$i] . "_1.png"?> alt="picture">
                    </div>
                    <div class="donant-data div2">
                        <ul>
                            <li>Nacionalidad: <?php echo $nationality[$i] ?></li>
                            <li>Fecha de nacimiento: <?php echo $date_birth[$i] ?></li>
                            <li>Color de ojos: <?php echo $color_eyes[$i] ?></li>
                            <li>Color de piel: <?php echo $color_skin[$i] ?></li>
                            <li>Grupo sanguíneo: <?php echo $blood_type[$i] ?></li>
                            <li>Estatura: <?php echo $height[$i] ?> m</li>
                            <li>Peso: <?php echo $weight[$i] ?> kg</li>
                            <li>Educación: <?php echo $education[$i] ?></li>
                            <li>Color de pelo: <?php echo $color_hair[$i] ?></li>
                            <li>TIpo de pelo: <?php echo $type_hair[$i] ?></li>
                            <li>Tipo de cuerpo: <?php echo $type_body[$i] ?></li>
                            <li>Ocupación: <?php echo $ocupation[$i] ?></li>
                        </ul>
                    </div>
                    <div class="img-2 div3">
                        <img src=<?php echo "build/img/admin/donants/" . $code[$i] . "_2.png"?> alt="picture">
                    </div>
                    <div class="img-3 div4">
                        <img src=<?php echo "build/img/admin/donants/" . $code[$i] . "_3.png"?> alt="picture">
                    </div>
                    <div class="img-4 div5">
                        <img src=<?php echo "build/img/admin/donants/" . $code[$i] . "_4.png"?> alt="picture">
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</main>

</body>

</html>
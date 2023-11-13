<?php
include 'includes/templates/header.php';
include "includes/app.php";
if (!$_SESSION['login']) {
    header('location: /index.php');
} else {
    if (!($_SESSION['type'] === 'user' || $_SESSION['type'] === 'admin' || $_SESSION['type'] === 'admin-jr') || $_SESSION['type'] === 'donant') {
        header('location: /index.php');
    }
}

$id = $_GET['id'];
$id_donant = $id;
$conn = connectDB();

$sql = "SELECT * FROM donants WHERE id=${id}";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $profile = $row['profile'];
}
$index = 0;
$sql = "SELECT * FROM family WHERE donant_id=${id}";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $id[++$index] = $row['id'];
    $member[$index] = $row['member'];
    $color_eyes[$index] = $row['color_eyes'];
    $color_hair[$index] = $row['color_hair'];
    $height[$index] = $row['height'];
    $weight[$index] = $row['weight'];
    $health[$index] = $row['health'];
}
?>

<main class="donant-info">
    <?php if ($profile !== "Fenotipe") { ?>
        <div class="hero-img">
            <div class="img-container">
                <?php if ($profile === "Elite") { ?>
                    <img src="build/img/hero/elite.webp" alt="hero-image" />
                <?php } ?>
                <?php if ($profile === "Plus") { ?>
                    <img src="build/img/hero/plus.webp" alt="hero-image" />
                <?php } ?>
                <?php if ($profile === "VIP") { ?>
                    <img src="build/img/hero/vip.webp" alt="hero-image" />
                <?php } ?>
            </div>
        </div>
    <?php } ?>
    <div class="donants">
        <div class="donant donant-extra">
            <div class="donant-data">
                <?php if (isset($member)) { ?>
                    <?php if (count($member) > 0) { ?>
                        <?php for ($i = 1; $i <= $index; $i++) { ?>
                            <p class="member-title">Miembro de la familia: <?php echo $member[$i] ?></p>
                            <ul>
                                <li>Color de los ojos: <?php echo $color_eyes[$i] ?></li>
                                <li>Color del cabello: <?php echo $color_hair[$i] ?></li>
                                <li>Altura: <?php echo $height[$i] ?></li>
                                <li>Peso: <?php echo $weight[$i] ?></li>
                                <li>Estado de salud: <?php echo $health[$i] ?></li>
                            </ul>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
        <div class="catalogue-buttons center-button">
            <div class="catalogue-button">
                <a href=<?php echo "returnCatalogo.php?id=" . $id_donant ?>>Regresar</a>
            </div>
        </div>
    </div>
</main>
<?php include 'includes/templates/footer.php'; ?>
</body>

</html>
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
$conn = connectDB();

$sql = "SELECT * FROM donants WHERE id=${id}";
$result = mysqli_query($conn, $sql);
$result = mysqli_query($conn, $sql);
if (!$result->num_rows) {
    header('location: /');
}
while ($row = mysqli_fetch_assoc($result)) {
    $hobbie = $row['hobbie'];
    $color_favorite = $row['color_favorite'];
    $animal_favorite = $row['animal_favorite'];
    $book_movie_favorite = $row['book_movie_favorite'];
    $goal = $row['goal'];
    $dream = $row['dream'];
    $profile = $row['profile'];
}
?>

<main class="donant-info">
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
    <div class="donants">
            <div class="donant donant-extra">
                <div class="donant-data">
                    <ul>
                        <li>Hobbie: <?php echo $hobbie ?></li>
                        <li>Color favorito: <?php echo $color_favorite ?></li>
                        <li>Animal favorito: <?php echo $animal_favorite ?></li>
                        <li>Película/Libro favorito: <?php echo $book_movie_favorite ?></li>
                        <li>Meta: <?php echo $goal ?></li>
                        <li>Sueño: <?php echo $dream ?></li>
                    </ul>
                </div>
            </div>
            <div class="catalogue-buttons center-button">
                <div class="catalogue-button">
                    <a href=<?php echo "returnCatalogo.php?id=" . $id ?>>Regresar</a>
                </div>
            </div>
    </div>
</main>
<?php include 'includes/templates/footer.php'; ?>
</body>

</html>
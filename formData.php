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

$sql = "SELECT * FROM form WHERE userId=${id}";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $form_name = $row['form_name'];
    $form_last_name = $row['form_last_name'];
    $form_age = $row['form_age'];
    $form_size = $row['form_size'];
    $form_weight = $row['form_weight'];
    $form_race = $row['form_race'];
    $form_morfo = $row['form_morfo'];
    $form_skin = $row['form_skin'];
    $form_eyes_color = $row['form_eyes_color'];
    $form_hair_color = $row['form_hair_color'];
    $form_hair_type = $row['form_hair_type'];
    $form_face_shape = $row['form_face_shape'];
    $form_notes = $row['form_notes'];
    $form_date = $row['form_date'];
    $userId = $row['userId'];
}
?>

<main class="donant-info">
    <div class="donants fenotipe">
        <div class="donant-data">
            <ul>
                <li>Nombre: <?php echo $form_name ?></li>
                <li>Apellidos: <?php echo $form_last_name ?></li>
                <li>Edad de la donante: <?php echo $form_age ?></li>
                <li>Talla de la donante: <?php echo $form_size ?> cm</li>
                <li>Peso de la donante: <?php echo $form_weight ?> kg</li>
                <li>Raza de la donante: <?php echo $form_race ?></li>
                <li>Morfología: <?php echo $form_morfo ?></li>
                <li>Piel: <?php echo $form_skin ?></li>
                <li>Color de ojos: <?php echo $form_eyes_color ?></li>
                <li>Color de cabello: <?php echo $form_hair_color ?></li>
                <li>Tipo de cabello: <?php echo $form_hair_type ?></li>
                <li>Forma del rostro: <?php echo $form_face_shape ?></li>
                <li>Notas: <?php echo $form_notes ?></li>
                <li>Fecha: <?php echo $form_date ?></li>
            </ul>
        </div>
    </div>
</main>
<?php include 'includes/templates/footer.php'; ?>
</body>

</html>
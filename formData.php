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
    // $form_age = $row['form_age'];
    // $form_size = $row['form_size'];
    // $form_weight = $row['form_weight'];
    // $form_race = $row['form_race'];
    // $form_morfo = $row['form_morfo'];
    // $form_skin = $row['form_skin'];
    // $form_eyes_color = $row['form_eyes_color'];
    // $form_hair_color = $row['form_hair_color'];
    // $form_hair_type = $row['form_hair_type'];
    // $form_face_shape = $row['form_face_shape'];
    $form_notes = $row['form_notes'];
    $form_date = $row['form_date'];
    $userId = $row['userId'];
    $caucasico = $row['caucasico'];
    $arabe = $row['arabe'];
    $indoario = $row['indoario'];
    $amarillo = $row['amarillo'];
    $turco = $row['turco'];
    $negro_raza = $row['negro_raza'];
    $amerindio = $row['amerindio'];
    $mestizos = $row['mestizos'];
    $austronesia = $row['austronesia'];
    $muy_palido = $row['muy_palido'];
    $blanca = $row['blanca'];
    $mate = $row['mate'];
    $muy_mate = $row['muy_mate'];
    $negra = $row['negra'];
    $gris = $row['gris'];
    $azul = $row['azul'];
    $verde = $row['verde'];
    $marron_claro = $row['marron_claro'];
    $marron_oscuro = $row['marron_oscuro'];
    $negro = $row['negro'];
    $muy_delgada = $row['muy_delgada'];
    $delgada = $row['delgada'];
    $normal = $row['normal'];
    $atletica = $row['atletica'];
    $gruesa = $row['gruesa'];
    $rubio = $row['rubio'];
    $castano_claro = $row['castano_claro'];
    $castano_oscuro = $row['castano_oscuro'];
    $negro_cabello = $row['negro_cabello'];
    $pelirrojo = $row['pelirrojo'];
    $liso = $row['liso'];
    $ondulado = $row['ondulado'];
    $fino = $row['fino'];
    $grueso = $row['grueso'];
    $ovalada = $row['ovalada'];
    $redonda = $row['redonda'];
    $alargada = $row['alargada'];
    $cuadrada = $row['cuadrada'];
    $form_age = $row['form_age'];
    $form_size = $row['form_size'];
    $form_weight = $row['form_weight'];
}
?>

<main class="donant-info">
    <div class="donants fenotipe">
        <div class="donant-data">
            <ul>
                <li>Nombre: <?php echo $form_name ?></li>
                <li>Apellidos: <?php echo $form_last_name ?></li>
                <li>Edad de la donante: <?php echo $form_age ?> años</li>
                <li>Talla de la donante: <?php echo $form_size ?> m</li>
                <li>Peso de la donante: <?php echo $form_weight ?> kg</li>
                <li>Raza de la donante: <?php
                if (!($caucasico=="-")) {
                    echo "Caucásico" . " ";
                } 
                if (!($arabe=="-")) {
                    echo "Árabe" . " ";
                } 
                if (!($indoario=="-")) {
                    echo "Indoario" . " ";
                } 
                if (!($amarillo=="-")) {
                    echo "Amarillo" . " ";
                } 
                if (!($turco=="-")) {
                    echo "Turco" . " ";
                } 
                if (!($negro_raza=="-")) {
                    echo "Negro" . " ";
                } 
                if (!($amerindio=="-")) {
                    echo "Amerindio" . " ";
                } 
                if (!($mestizos=="-")) {
                    echo "Mestizos" . " ";
                }
                if (!($austronesia=="-")) {
                    echo "Austronesia" . " ";
                }
                ?></li>
                <li>Morfología: <?php
                if (!($muy_delgada=="-")) {
                    echo "Muy delgada" . " ";
                } 
                if (!($delgada=="-")) {
                    echo "Delgada" . " ";
                } 
                if (!($normal=="-")) {
                    echo "Normal" . " ";
                } 
                if (!($atletica=="-")) {
                    echo "Atlética" . " ";
                } 
                if (!($gruesa=="-")) {
                    echo "Gruesa" . " ";
                } 
                 ?></li>
                <li>Piel: <?php
                 if (!($muy_palido=="-")) {
                    echo "Muy pálido" . " ";
                } 
                if (!($blanca=="-")) {
                    echo "Blanca" . " ";
                } 
                if (!($mate=="-")) {
                    echo "Mate" . " ";
                } 
                if (!($muy_mate=="-")) {
                    echo "Muy mate" . " ";
                } 
                if (!($negra=="-")) {
                    echo "Negra" . " ";
                } 
                 ?></li>
                <li>Color de ojos: <?php
                if (!($gris=="-")) {
                    echo "Gris" . " ";
                } 
                if (!($azul=="-")) {
                    echo "Azul" . " ";
                } 
                if (!($verde=="-")) {
                    echo "Verde" . " ";
                } 
                if (!($marron_claro=="-")) {
                    echo "Marrón claro" . " ";
                } 
                if (!($marron_oscuro=="-")) {
                    echo "Marrón oscuro" . " ";
                } 
                if (!($negro=="-")) {
                    echo "Negro" . " ";
                } 
                ?></li>
                <li>Color de cabello: <?php
                if (!($rubio=="-")) {
                    echo "Rubio" . " ";
                } 
                if (!($castano_claro=="-")) {
                    echo "Castaño claro" . " ";
                } 
                if (!($castano_oscuro=="-")) {
                    echo "Castaño oscuro" . " ";
                } 
                if (!($negro_cabello=="-")) {
                    echo "Negro cabello" . " ";
                } 
                if (!($pelirrojo=="-")) {
                    echo "Pelirrojo" . " ";
                }
                ?></li>
                <li>Tipo de cabello: <?php
                if (!($liso=="-")) {
                    echo "Liso" . " ";
                } 
                if (!($ondulado=="-")) {
                    echo "Ondulado" . " ";
                } 
                if (!($fino=="-")) {
                    echo "Fino" . " ";
                } 
                if (!($grueso=="-")) {
                    echo "Grueso" . " ";
                }
                ?></li>
                <li>Forma del rostro: <?php
                if (!($ovalada=="-")) {
                    echo "Ovalada" . " ";
                } 
                if (!($redonda=="-")) {
                    echo "Redonda" . " ";
                } 
                if (!($alargada=="-")) {
                    echo "Alargada" . " ";
                } 
                if (!($cuadrada=="-")) {
                    echo "Cuadrada" . " ";
                } 
                ?></li>
                <li>Notas: <?php echo $form_notes ?></li>
                <li>Fecha: <?php echo $form_date ?></li>
            </ul>
        </div>
    </div>
</main>
<?php include 'includes/templates/footer.php'; ?>
</body>

</html>
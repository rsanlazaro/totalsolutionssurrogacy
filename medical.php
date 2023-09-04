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
while ($row = mysqli_fetch_assoc($result)) {
    $profile = $row['profile'];
}

$sql = "SELECT * FROM demographics WHERE donant_id=${id}";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $donant_adict = $row['donant_adict'];
        $donant_alergy = $row['donant_alergy'];
        $donant_eyes = $row['donant_eyes'];
        $donant_dream = $row['donant_dream'];
        $donant_jewesh = $row['donant_jewesh'];
        $donant_autism = $row['donant_autism'];
        $donant_cancer = $row['donant_cancer'];
        $donant_cario = $row['donant_cario'];
        $donant_surgery = $row['donant_surgery'];
        $donant_congenit = $row['donant_congenit'];
        $donant_mental = $row['donant_mental'];
        $donant_diabetes = $row['donant_diabetes'];
        $donant_heart = $row['donant_heart'];
        $donant_inmune = $row['donant_inmune'];
        $donant_metabolic = $row['donant_metabolic'];
        $donant_skin = $row['donant_skin'];
        $donant_psycho = $row['donant_psycho'];
        $donant_renal = $row['donant_renal'];
        $donant_ets = $row['donant_ets'];
        $donant_esquizo = $row['donant_esquizo'];
        $donant_sx = $row['donant_sx'];
        $donant_hemo = $row['donant_hemo'];
        $donant_artery = $row['donant_artery'];
        $donant_parkinson = $row['donant_parkinson'];
        $donant_diet = $row['donant_diet'];
        $donant_cigar = $row['donant_cigar'];
        $family_adict = $row['family_adict'];
        $family_alergy = $row['family_alergy'];
        $family_eyes = $row['family_eyes'];
        $family_dream = $row['family_dream'];
        $family_jewesh = $row['family_jewesh'];
        $family_autism = $row['family_autism'];
        $family_cancer = $row['family_cancer'];
        $family_cario = $row['family_cario'];
        $family_surgery = $row['family_surgery'];
        $family_congenit = $row['family_congenit'];
        $family_mental = $row['family_mental'];
        $family_diabetes = $row['family_diabetes'];
        $family_heart = $row['family_heart'];
        $family_inmune = $row['family_inmune'];
        $family_metabolic = $row['family_metabolic'];
        $family_skin = $row['family_skin'];
        $family_psycho = $row['family_psycho'];
        $family_renal = $row['family_renal'];
        $family_ets = $row['family_ets'];
        $family_esquizo = $row['family_esquizo'];
        $family_sx = $row['family_sx'];
        $family_hemo = $row['family_hemo'];
        $family_artery = $row['family_artery'];
        $family_parkinson = $row['family_parkinson'];
        $family_diet = $row['family_diet'];
        $family_cigar = $row['family_cigar'];
        $donant_id = $row['donant_id'];
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
                        <li>Adicciones (donante): <?php if (isset($donant_adict)) { echo $donant_adict;} ?></li>
                        <li>Alergias (donante): <?php if (isset($donant_alergy)) { echo $donant_alergy;} ?></li>
                        <li>Alteración de la vista (donante): <?php if (isset($donant_eyes)) { echo $donant_eyes;} ?></li>
                        <li>Alteraciones sueño (donante): <?php if (isset($donant_dream)) { echo $donant_dream;} ?></li>
                        <li>Alteraciones judía (donante): <?php if (isset($donant_jewesh)) { echo $donant_jewesh;} ?></li>
                        <li>Autismo (donante): <?php if (isset($donant_autism)) { echo $donant_autism;} ?></li>
                        <li>Cáncer (donante): <?php if (isset($donant_cancer)) { echo $donant_cancer;} ?></li>
                        <li>Cariotipo (donante): <?php if (isset($donant_cario)) { echo $donant_cario;} ?></li>
                        <li>Cirugías (donante): <?php if (isset($donant_surgery)) { echo $donant_surgery;} ?></li>
                        <li>Defectos congénitos (donante): <?php if (isset($donant_congenit)) { echo $donant_congenit;} ?></li>
                        <li>Deficiencia mental (donante): <?php if (isset($donant_mental)) { echo $donant_mental;} ?></li>
                        <li>Diabetes (donante): <?php if (isset($donant_diabetes)) { echo $donant_diabetes;} ?></li>
                        <li>Enfermedades cardiovasculares (donante): <?php if (isset($donant_heart)) { echo $donant_heart;} ?></li>
                        <li>Enfermedades inmunológicas (donante): <?php if (isset($donant_inmune)) { echo $donant_inmune;} ?></li>
                        <li>Enfermedades metabólicas (donante): <?php if (isset($donant_metabolic)) { echo $donant_metabolic;} ?></li>
                        <li>Enfermedades de la piel (donante): <?php if (isset($donant_skin)) { echo $donant_skin;} ?></li>
                        <li>Enfermedades psiquiátricas (donante): <?php if (isset($donant_psycho)) { echo $donant_psycho;} ?></li>
                        <li>Enfermedades renales (donante): <?php if (isset($donant_renal)) { echo $donant_renal;} ?></li>
                        <li>ETS (donante): <?php if (isset($donant_ets)) { echo $donant_ets;} ?></li>
                        <li>Gen SX frágil (donante): <?php if (isset($donant_sx)) { echo $donant_sx;} ?></li>
                        <li>Hemofilia (donante): <?php if (isset($donant_hemo)) { echo $donant_hemo;} ?></li>
                        <li>Hipertensión arterial (donante): <?php if (isset($donant_artery)) { echo $donant_artery;} ?></li>
                        <li>Parkinson (donante): <?php if (isset($donant_parkinson)) { echo $donant_parkinson;} ?></li>
                        <li>Restricciones de la dieta (donante): <?php if (isset($donant_diet)) { echo $donant_diet;} ?></li>
                        <li>Tabaquismo (donante): <?php if (isset($donant_cigar)) { echo $donant_cigar;} ?></li>
                        <li>Adicciones (familiares): <?php if (isset($family_adict)) { echo $family_adict;} ?></li>
                        <li>Alergias (familiares): <?php if (isset($family_alergy)) { echo $family_alergy;} ?></li>
                        <li>Alteración de la vista (familiares): <?php if (isset($family_eyes)) { echo $family_eyes;} ?></li>
                        <li>Alteraciones sueño (familiares): <?php if (isset($family_dream)) { echo $family_dream;} ?></li>
                        <li>Alteraciones judía (familiares): <?php if (isset($family_jewesh)) { echo $family_jewesh;} ?></li>
                        <li>Autismo (familiares): <?php if (isset($family_autism)) { echo $family_autism;} ?></li>
                        <li>Cáncer (familiares): <?php if (isset($family_cancer)) { echo $family_cancer;} ?></li>
                        <li>Cariotipo (familiares): <?php if (isset($family_cario)) { echo $family_cario;} ?></li>
                        <li>Cirugías (familiares): <?php if (isset($family_surgery)) { echo $family_surgery;} ?></li>
                        <li>Defectos congénitos (familiares): <?php if (isset($family_congenit)) { echo $family_congenit;} ?></li>
                        <li>Deficiencia mental (familiares): <?php if (isset($family_mental)) { echo $family_mental;} ?></li>
                        <li>Diabetes (familiares): <?php if (isset($family_diabetes)) { echo $family_diabetes;} ?></li>
                        <li>Enfermedades cardiovasculares (familiares): <?php if (isset($family_heart)) { echo $family_heart;} ?></li>
                        <li>Enfermedades inmunológicas (familiares): <?php if (isset($family_inmune)) { echo $family_inmune;} ?></li>
                        <li>Enfermedades metabólicas (familiares): <?php if (isset($family_metabolic)) { echo $family_metabolic;} ?></li>
                        <li>Enfermedades de la piel (familiares): <?php if (isset($family_skin)) { echo $family_skin;} ?></li>
                        <li>Enfermedades psiquiátricas (familiares): <?php if (isset($family_psycho)) { echo $family_psycho;} ?></li>
                        <li>Enfermedades renales (familiares): <?php if (isset($family_renal)) { echo $family_renal;} ?></li>
                        <li>ETS (familiares): <?php if (isset($family_ets)) { echo $family_ets;} ?></li>
                        <li>Gen SX frágil (familiares): <?php if (isset($family_sx)) { echo $family_sx;} ?></li>
                        <li>Hemofilia (familiares): <?php if (isset($family_hemo)) { echo $family_hemo;} ?></li>
                        <li>Hipertensión arterial (familiares): <?php if (isset($family_artery)) { echo $family_artery;} ?></li>
                        <li>Parkinson (familiares): <?php if (isset($family_parkinson)) { echo $family_parkinson;} ?></li>
                        <li>Restricciones de la dieta (familiares): <?php if (isset($family_diet)) { echo $family_diet;} ?></li>
                        <li>Tabaquismo (familiares): <?php if (isset($family_cigar)) { echo $family_cigar;} ?></li>
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
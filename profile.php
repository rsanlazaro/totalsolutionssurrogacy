<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<?php
include 'includes/templates/header.php';
include "includes/app.php";

$id = $_GET['id'];
$conn = connectDB();

if (!$_SESSION['login']) {
    header('location: /index.php');
}


$sql = "SELECT * FROM candidates WHERE id=${id}";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $form_name = $row['form_name'];
    $form_date = $row['form_date'];
    $form_age = $row['form_age'];
    $form_birth_place = $row['form_birth_place'];
    $form_status = $row['form_status'];
    $form_employment = $row['form_employment'];
    $form_height = $row['form_height'];
    $form_weight = $row['form_weight'];
    $form_hand = $row['form_hand'];
    $form_blood = $row['form_blood'];
    $form_implant = $row['form_implant'];
    $form_diu = $row['form_diu'];
    $form_risk_notes = $row['form_risk_notes'];
    $form_anemy = $row['form_anemy'];
    $form_diabetes = $row['form_diabetes'];
    $form_transfusion = $row['form_transfusion'];
    $form_hipertension = $row['form_hipertension'];
    $form_cancer = $row['form_cancer'];
    $form_dislexia = $row['form_dislexia'];
    $form_waist = $row['form_waist'];
    $form_migraine = $row['form_migraine'];
    $form_smoke = $row['form_smoke'];
    $form_smoke_times = $row['form_smoke_times'];
    $form_smoke_qty = $row['form_smoke_qty'];
    $form_alcohol = $row['form_alcohol'];
    $form_alcohol_freq = $row['form_alcohol_freq'];
    $form_fracture = $row['form_fracture'];
    $form_surgery = $row['form_surgery'];
    $form_fracture_info = $row['form_fracture_info'];
    $form_surgery_info = $row['form_surgery_info'];
    $form_curp = $row['form_curp'];
    $form_recluter = $row['form_recluter'];
}

$sql = "SELECT * FROM pregnants WHERE candidateId={$id}";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc(($result))) {
    $form_type_pregnant_1 = $row['form_type_pregnant_1'];
    $form_height_pregnant_1 = $row['form_height_pregnant_1'];
    $form_weight_pregnant_1 = $row['form_weight_pregnant_1'];
    $form_term_pregnant_1 = $row['form_term_pregnant_1'];
    $form_week_pregnant_1 = $row['form_week_pregnant_1'];
    $form_year_pregnant_1 = $row['form_year_pregnant_1'];
    $form_comments_pregnant_1 = $row['form_comments_pregnant_1'];
    $form_type_pregnant_2 = $row['form_type_pregnant_2'];
    $form_height_pregnant_2 = $row['form_height_pregnant_2'];
    $form_weight_pregnant_2 = $row['form_weight_pregnant_2'];
    $form_term_pregnant_2 = $row['form_term_pregnant_2'];
    $form_week_pregnant_2 = $row['form_week_pregnant_2'];
    $form_year_pregnant_2 = $row['form_year_pregnant_2'];
    $form_comments_pregnant_2 = $row['form_comments_pregnant_2'];
    $form_type_pregnant_3 = $row['form_type_pregnant_3'];
    $form_height_pregnant_3 = $row['form_height_pregnant_3'];
    $form_weight_pregnant_3 = $row['form_weight_pregnant_3'];
    $form_term_pregnant_3 = $row['form_term_pregnant_3'];
    $form_week_pregnant_3 = $row['form_week_pregnant_3'];
    $form_year_pregnant_3 = $row['form_year_pregnant_3'];
    $form_comments_pregnant_3 = $row['form_comments_pregnant_3'];
    $form_type_pregnant_4 = $row['form_type_pregnant_4'];
    $form_height_pregnant_4 = $row['form_height_pregnant_4'];
    $form_weight_pregnant_4 = $row['form_weight_pregnant_4'];
    $form_term_pregnant_4 = $row['form_term_pregnant_4'];
    $form_week_pregnant_4 = $row['form_week_pregnant_4'];
    $form_year_pregnant_4 = $row['form_year_pregnant_4'];
    $form_comments_pregnant_4 = $row['form_comments_pregnant_4'];
    $form_type_pregnant_5 = $row['form_type_pregnant_5'];
    $form_height_pregnant_5 = $row['form_height_pregnant_5'];
    $form_weight_pregnant_5 = $row['form_weight_pregnant_5'];
    $form_term_pregnant_5 = $row['form_term_pregnant_5'];
    $form_week_pregnant_5 = $row['form_week_pregnant_5'];
    $form_year_pregnant_5 = $row['form_year_pregnant_5'];
    $form_comments_pregnant_5 = $row['form_comments_pregnant_5'];
    $form_type_pregnant_6 = $row['form_type_pregnant_6'];
    $form_height_pregnant_6 = $row['form_height_pregnant_6'];
    $form_weight_pregnant_6 = $row['form_weight_pregnant_6'];
    $form_term_pregnant_6 = $row['form_term_pregnant_6'];
    $form_week_pregnant_6 = $row['form_week_pregnant_6'];
    $form_year_pregnant_6 = $row['form_year_pregnant_6'];
    $form_comments_pregnant_6 = $row['form_comments_pregnant_6'];
    $form_type_abort_1 = $row['form_type_abort_1'];
    $form_year_abort_1 = $row['form_year_abort_1'];
    $form_week_abort_1 = $row['form_week_abort_1'];
    $form_method_abort_1 = $row['form_method_abort_1'];
    $form_comments_abort_1 = $row['form_comments_abort_1'];
    $form_type_abort_2 = $row['form_type_abort_2'];
    $form_year_abort_2 = $row['form_year_abort_2'];
    $form_week_abort_2 = $row['form_week_abort_2'];
    $form_method_abort_2 = $row['form_method_abort_2'];
    $form_comments_abort_2 = $row['form_comments_abort_2'];
    $form_type_abort_3 = $row['form_type_abort_3'];
    $form_year_abort_3 = $row['form_year_abort_3'];
    $form_week_abort_3 = $row['form_week_abort_3'];
    $form_method_abort_3 = $row['form_method_abort_3'];
    $form_comments_abort_3 = $row['form_comments_abort_3'];
    $form_coded_comments_pregnant_1 = $row['form_coded_comments_pregnant_1'];
    $form_coded_comments_pregnant_2 = $row['form_coded_comments_pregnant_2'];
    $form_coded_comments_pregnant_3 = $row['form_coded_comments_pregnant_3'];
    $form_coded_comments_pregnant_4 = $row['form_coded_comments_pregnant_4'];
    $form_coded_comments_pregnant_5 = $row['form_coded_comments_pregnant_5'];
    $form_coded_comments_pregnant_6 = $row['form_coded_comments_pregnant_6'];
}

$codes_array = array(
    "Cirugía uterina previa",
    "Cirugía abdominal",
    "Multigesta",
    "Embarazo múltiple",
    "Hemorragia obstétrica",
    "Miomatosis uterina de grandes elementos",
    "Peso fetal estimado mayor a 4000 gr o menor a 2000 gr",
    "Obesidad con IMC > 37",
    "Malformación congenita",
    "Sin control prenatal en los embarazos",
    "Periodo intergenésico corto menor a 18 meses",
    "COVID en los últimos 6 meses",
    "Comorbilidades preexistentes que compliquen el embarazo y al neonato (endocrinológicas, cardiológicas e inmunológicas)",
    "Enfermedades hipertensivas",
    "Enfermedades infectocontagiosas (VIH, Hepatitis B y C)",
    "Sepsis",
    "Síndrome de Hellp",
    "Placenta previa",
    "Sospecha de placenta acreta o placenta percreta",
    "Sin control prenatal en los embarazos"
);

$codes_1 = (string)$form_coded_comments_pregnant_1;
for ($i = 1; $i <= 20; $i++) {
    ${"codes_1_$i"} = $codes_1[$i - 1];
}

$codes_2 = (string)$form_coded_comments_pregnant_2;
for ($i = 1; $i <= 20; $i++) {
    ${"codes_2_$i"} = $codes_2[$i - 1];
}

$codes_3 = (string)$form_coded_comments_pregnant_3;
for ($i = 1; $i <= 20; $i++) {
    ${"codes_3_$i"} = $codes_3[$i - 1];
}

$codes_4 = (string)$form_coded_comments_pregnant_4;
for ($i = 1; $i <= 20; $i++) {
    ${"codes_4_$i"} = $codes_4[$i - 1];
}

$codes_5 = (string)$form_coded_comments_pregnant_5;
for ($i = 1; $i <= 20; $i++) {
    ${"codes_5_$i"} = $codes_5[$i - 1];
}

$codes_6 = (string)$form_coded_comments_pregnant_6;
for ($i = 1; $i <= 20; $i++) {
    ${"codes_6_$i"} = $codes_6[$i - 1];
}

$num_pregnants = 0;
if ($form_height_pregnant_1 == 0 && $form_weight_pregnant_1 == 0 && $form_week_pregnant_1 == 0 && $form_year_pregnant_1 == 0) {
    $num_pregnants = $num_pregnants;
} else {
    $num_pregnants = $num_pregnants + 1;
}
if ($form_height_pregnant_2 == 0 && $form_weight_pregnant_2 == 0 && $form_week_pregnant_2 == 0 && $form_year_pregnant_2 == 0) {
    $num_pregnants = $num_pregnants;
} else {
    $num_pregnants = $num_pregnants + 1;
}
if ($form_height_pregnant_3 == 0 && $form_weight_pregnant_3 == 0 && $form_week_pregnant_3 == 0 && $form_year_pregnant_3 == 0) {
    $num_pregnants = $num_pregnants;
} else {
    $num_pregnants = $num_pregnants + 1;
}
if ($form_height_pregnant_4 == 0 && $form_weight_pregnant_4 == 0 && $form_week_pregnant_4 == 0 && $form_year_pregnant_4 == 0) {
    $num_pregnants = $num_pregnants;
} else {
    $num_pregnants = $num_pregnants + 1;
}
if ($form_height_pregnant_5 == 0 && $form_weight_pregnant_5 == 0 && $form_week_pregnant_5 == 0 && $form_year_pregnant_5 == 0) {
    $num_pregnants = $num_pregnants;
} else {
    $num_pregnants = $num_pregnants + 1;
}
if ($form_height_pregnant_6 == 0 && $form_weight_pregnant_6 == 0 && $form_week_pregnant_6 == 0 && $form_year_pregnant_6 == 0) {
    $num_pregnants = $num_pregnants;
} else {
    $num_pregnants = $num_pregnants + 1;
}

$num_aborts = 0;
if ($form_week_abort_1 == 0 && $form_year_abort_1 == 0) {
    $num_aborts = $num_aborts;
} else {
    $num_aborts = $num_aborts + 1;
}
if ($form_week_abort_2 == 0 && $form_year_abort_2 == 0) {
    $num_aborts = $num_aborts;
} else {
    $num_aborts = $num_aborts + 1;
}
if ($form_week_abort_3 == 0 && $form_year_abort_3 == 0) {
    $num_aborts = $num_aborts;
} else {
    $num_aborts = $num_aborts + 1;
}

$sql = "SELECT * FROM family WHERE candidateId={$id}";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc(($result))) {
    $family_alergy = $row['family_alergy'];
    $family_apoplejia = $row['family_apoplejia'];
    $family_cardiopathy = $row['family_cardiopathy'];
    $family_catarata = $row['family_catarata'];
    $family_cirrosis = $row['family_cirrosis'];
    $family_convulsive = $row['family_convulsive'];
    $family_distrophy = $row['family_distrophy'];
    $family_enfisem = $row['family_enfisem'];
    $family_epilepsy = $row['family_epilepsy'];
    $family_glaucom = $row['family_glaucom'];
    $family_hemofilia = $row['family_hemofilia'];
    $family_ictericia = $row['family_ictericia'];
    $family_migraine = $row['family_migraine'];
    $family_varicocele = $row['family_varicocele'];
    $family_equinovaro = $row['family_equinovaro'];
    $family_mental = $row['family_mental'];
    $family_drugs = $row['family_drugs'];
    $family_esquizo = $row['family_esquizo'];
    $family_alcohol = $row['family_alcohol'];
    $family_diabetes_young = $row['family_diabetes_young'];
    $family_bocio = $row['family_bocio'];
    $family_blind = $row['family_blind'];
    $family_daltonic = $row['family_daltonic'];
    $family_diabetes = $row['family_diabetes'];
    $family_psiquiatric = $row['family_psiquiatric'];
    $family_endometriosis = $row['family_endometriosis'];
    $family_fibrosis = $row['family_fibrosis'];
    $family_gota = $row['family_gota'];
    $family_hipertension = $row['family_hipertension'];
    $family_paladar = $row['family_paladar'];
    $family_kidney = $row['family_kidney'];
    $family_circulation = $row['family_circulation'];
    $family_psoriasis = $row['family_psoriasis'];
    $family_deaf = $row['family_deaf'];
    $family_alzheimer = $row['family_alzheimer'];
    $family_parkinson = $row['family_parkinson'];
}

$family_variables = array(
    "family_alergy",
    "family_apoplejia",
    "family_cardiopathy",
    "family_catarata",
    "family_cirrosis",
    "family_convulsive",
    "family_distrophy",
    "family_enfisem",
    "family_epilepsy",
    "family_glaucom",
    "family_hemofilia",
    "family_ictericia",
    "family_migraine",
    "family_varicocele",
    "family_equinovaro",
    "family_mental",
    "family_drugs",
    "family_esquizo",
    "family_alcohol",
    "family_diabetes_young",
    "family_bocio",
    "family_blind",
    "family_daltonic",
    "family_diabetes",
    "family_psiquiatric",
    "family_endometriosis",
    "family_fibrosis",
    "family_gota",
    "family_hipertension",
    "family_paladar",
    "family_kidney",
    "family_circulation",
    "family_psoriasis",
    "family_deaf",
    "family_alzheimer",
    "family_parkinson"
);

$family_select = array(
    "Ninguno",
    "Madre",
    "Padre",
    "Abuelos maternos",
    "Abuelos paternos"
);

$family_diseases = array(
    "Alergias",
    "Apoplejia",
    "Cardiopatía",
    "Cataratas",
    "Cirrosis",
    "Desorden convulsivo",
    "Distrofia muscular",
    "Enfisema",
    "Epilepsia",
    "Glaucoma",
    "Hemofilia",
    "Ictericia",
    "Migraña",
    "Varicocele",
    "Pie equinovaro",
    "Retraso mental",
    "Uso de drogas",
    "Esquizofrenia",
    "Alcoholismo",
    "Diabetes juvenil",
    "Bocio",
    "Ceguera",
    "Daltonismo",
    "Diabetes",
    "Enfermedad psiquiátrica",
    "Endometriosis",
    "Fibrosis quística",
    "Gota",
    "Hipertensión",
    "Labio/Paladar Hendido",
    "Crisis Renales",
    "Circulación",
    "Psoriasis",
    "Sordera",
    "Alzheimer",
    "Parkinson"
);

?>

<main>
    <div class="form-header">
        <div class="form-header-logo">
            <img src="build/img/icons/TotalSolutionsSurrogacyWhite.webp" alt="EggDonor">
        </div>
        <div class="form-header-title form-white">
            <div class="spanish">
                Datos de la gestante <?php echo $form_name; ?>
            </div>
        </div>
    </div>
    <form class="form form-phenotype" action="report.php" method="post" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $id; ?>" name="id">
        <div class="form-characteristics">
            <div class="form-subtitle form-white">
                <div class="spanish">Datos generales</div>
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div class="spanish">
                        CURP: <?php echo $form_curp; ?>
                    </div>
                </label>
            </div>
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div class="spanish">
                        Reclutadora: <?php echo $form_recluter; ?>
                    </div>
                </label>
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div class="spanish">
                        Nombre completo: <?php echo $form_name; ?>
                    </div>
                </label>
            </div>
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div class="spanish">
                        Fecha de nacimiento: <?php echo $form_date; ?>
                    </div>
                </label>
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div <?php if ($form_age > 38) {
                                echo "class='red-label'";
                            } else {
                                echo "class='green-label'";
                            } ?>>
                        Edad: <?php echo $form_age . " años"; ?>
                    </div>
                </label>
            </div>
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div class="spanish">
                        Lugar de nacimiento: <?php
                                                $form_birth_place_eval = strtoupper($form_birth_place);
                                                $form_birth_place_eval = iconv('UTF-8', 'ASCII//TRANSLIT', $form_birth_place_eval);
                                                if (
                                                    $form_birth_place_eval == "CIUDAD DE MEXICO" ||
                                                    $form_birth_place_eval == "CDMX" ||
                                                    $form_birth_place_eval == "ESTADO DE MEXICO" ||
                                                    $form_birth_place_eval == "EDO MEX" ||
                                                    $form_birth_place_eval == "EDO. MEX" ||
                                                    $form_birth_place_eval == "EDO. DE MEX" ||
                                                    $form_birth_place_eval == "EDO DE MEX" ||
                                                    $form_birth_place_eval == "EDOMEX"
                                                ) {
                                                    echo "<div class='green-label'>" . $form_birth_place . "</div>";
                                                } else {
                                                    echo "<div class='red-label'>" . $form_birth_place . "</div>";
                                                } ?>
                    </div>
                </label>
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div class="spanish">
                        Estado civil: <?php echo $form_status; ?>
                    </div>
                </label>
            </div>
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div class="spanish">
                        Ocupación: <?php echo $form_employment; ?>
                    </div>
                </label>
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div class="spanish">
                        Altura: <?php echo $form_height . " m"; ?>
                    </div>
                </label>
            </div>
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div class="spanish">
                        Peso: <?php echo $form_weight . "kg"; ?>
                    </div>
                </label>
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <?php if (($form_height != 0) && ($form_weight != 0)) { ?>
                        <div <?php if ((round(($form_weight) / ($form_height * $form_height), 2)) > 28) {
                                    echo "class='red-label'";
                                } else {
                                    echo "class='green-label'";
                                } ?>>
                            IMC: <?php if ($form_height != 0) {
                                        echo round(($form_weight) / ($form_height * $form_height), 2);
                                    } ?>
                        </div>
                    <?php } else { ?>
                        <div> IMC: Ingrese datos para peso y altura</div>
                    <?php } ?>
                </label>
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div class="spanish">
                        Mano predominante: <?php echo $form_hand; ?>
                    </div>
                </label>
            </div>
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div <?php if ($form_blood == "A-" || $form_blood == "B-" || $form_blood == "O-" || $form_blood == "AB-") {
                                echo "class='yellow-label'";
                            } else {
                                echo "class='green-label'";
                            } ?>>
                        Tipo de sangre: <?php echo $form_blood; ?>
                    </div>
                </label>
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div class="spanish">
                        Tiene implante: <?php echo $form_implant; ?>
                    </div>
                </label>
            </div>
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div class="spanish">
                        Tiene DIU: <?php echo $form_diu; ?>
                    </div>
                </label>
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div class="spanish">
                        Notas de riesgo: <?php echo $form_risk_notes; ?>
                    </div>
                </label>
            </div>
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div class="spanish">
                        <?php if ($form_anemy == "sí") {
                            echo "<div class='yellow-label'> Tiene anemia: " . $form_anemy . "</div>";
                        } else {
                            echo "<div class='green-label'> Tiene anemia: " . $form_anemy . "</div>";
                        } ?>
                    </div>
                </label>
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div class="spanish">
                        <?php if ($form_diabetes == "sí") {
                            echo "<div class='red-label'> Tiene diabetes: " . $form_diabetes . "</div>";
                        } else {
                            echo "<div class='green-label'> Tiene diabetes: " . $form_diabetes . "</div>";
                        } ?>
                    </div>
                </label>
            </div>
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div class="spanish">
                        <?php if ($form_transfusion == "sí") {
                            echo "<div class='red-label'> Tuvo alguna transfusión: " . $form_transfusion . "</div>";
                        } else {
                            echo "<div class='green-label'> Tuvo alguna transfusión: " . $form_transfusion . "</div>";
                        } ?>
                    </div>
                </label>
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div class="spanish">
                        <?php if ($form_hipertension == "sí") {
                            echo "<div class='red-label'> Tiene hipertensión: " . $form_hipertension . "</div>";
                        } else {
                            echo "<div class='green-label'> Tiene hipertensión: " . $form_hipertension . "</div>";
                        } ?>
                    </div>
                </label>
            </div>
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div class="spanish">
                        <?php if ($form_cancer == "sí") {
                            echo "<div class='red-label'> Tiene cáncer: " . $form_cancer . "</div>";
                        } else {
                            echo "<div class='green-label'> Tiene cáncer: " . $form_cancer . "</div>";
                        } ?>
                    </div>
                </label>
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div class="spanish">
                        <?php if ($form_dislexia == "sí") {
                            echo "<div class='yellow-label'> Tiene dislexia: " . $form_dislexia . "</div>";
                        } else {
                            echo "<div class='green-label'> Tiene dislexia: " . $form_dislexia . "</div>";
                        } ?>
                    </div>
                </label>
            </div>
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div class="spanish">
                        <?php if ($form_waist == "sí") {
                            echo "<div class='yellow-label'> Tiene dislocación en la cadera: " . $form_waist . "</div>";
                        } else {
                            echo "<div class='green-label'> Tiene dislocación en la cadera: " . $form_waist . "</div>";
                        } ?>
                    </div>
                </label>
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div class="spanish">
                        <?php if ($form_migraine == "sí") {
                            echo "<div class='yellow-label'> Tiene migraña: " . $form_migraine . "</div>";
                        } else {
                            echo "<div class='green-label'> Tiene migraña: " . $form_migraine . "</div>";
                        } ?>
                    </div>
                </label>
            </div>
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div class="spanish">
                        <?php if ($form_smoke == "sí") {
                            echo "<div class='yellow-label'> Fuma: " . $form_smoke . "</div>";
                        } else {
                            echo "<div class='green-label'> Fuma: " . $form_smoke . "</div>";
                        } ?>
                    </div>
                </label>
            </div>
        </div>
        <?php if ($form_smoke == "sí") { ?>
            <div class="form-top">
                <div class="col-md-6 form-top-element">
                    <label for="validationDefault01">
                        <div class="spanish">
                            Con qué frecuencia fuma: <?php echo $form_smoke_times; ?>
                        </div>
                    </label>
                </div>
                <div class="col-md-6 form-top-element">
                    <label for="validationDefault01">
                        <div class="spanish">
                            Cuántos cigarros fuma: <?php echo $form_smoke_qty; ?>
                        </div>
                    </label>
                </div>
            </div>
        <?php } ?>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div class="spanish">
                        <?php if ($form_alcohol == "sí") {
                            echo "<div class='yellow-label'> Toma alcohol: " . $form_alcohol . "</div>";
                        } else {
                            echo "<div class='green-label'> Toma alcohol: " . $form_alcohol . "</div>";
                        } ?>
                    </div>
                </label>
            </div>
            <?php if ($form_alcohol == "sí") { ?>
                <div class="col-md-6 form-top-element">
                    <label for="validationDefault01">
                        <div class="spanish">
                            Con qué frecuencia toma alcohol: <?php echo $form_alcohol_freq; ?>
                        </div>
                    </label>
                </div>
            <?php } ?>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div class="spanish">
                        <?php if ($form_fracture == "sí") {
                            echo "<div class='yellow-label'> Tuvo fractura: " . $form_fracture . "</div>";
                        } else {
                            echo "<div class='green-label'> Tuvo fractura: " . $form_fracture . "</div>";
                        } ?>
                    </div>
                </label>
            </div>
            <?php if ($form_fracture == "sí") { ?>
                <div class="col-md-6 form-top-element">
                    <label for="validationDefault01">
                        <div class="spanish">
                            Detalles de la fractura: <?php echo $form_fracture_info; ?>
                        </div>
                    </label>
                </div>
            <?php } ?>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div class="spanish">
                        <?php if ($form_surgery == "sí") {
                            echo "<div class='yellow-label'> Tuvo cirugía: " . $form_surgery . "</div>";
                        } else {
                            echo "<div class='green-label'> Tuvo cirugía: " . $form_surgery . "</div>";
                        } ?>
                    </div>
                </label>
            </div>
            <?php if ($form_surgery == "sí") { ?>
                <div class="col-md-6 form-top-element">
                    <label for="validationDefault01">
                        <div class="spanish">
                            Detalles de la cirugía: <?php echo $form_surgery_info; ?>
                        </div>
                    </label>
                </div>
            <?php } ?>
        </div>
        <?php if ($num_pregnants > 0) { ?>
            <div class="form-characteristics">
                <div class="form-subtitle form-white">
                    <div class="spanish">Datos de los embarazos</div>
                </div>
            </div>
            <div class="form-top">
                <div class="col-md-4">
                    <label for="validationDefault01">
                        <div class="spanish">
                            Embarazo 1: <?php echo $form_type_pregnant_1; ?>
                        </div>
                    </label>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault01">
                        <div class="spanish">
                            Altura del embarazo 1: <?php echo $form_height_pregnant_1 . " m"; ?>
                        </div>
                    </label>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault01">
                        <div class="spanish">
                            Peso del embarazo 1: <?php echo $form_weight_pregnant_1 . " kg"; ?>
                        </div>
                    </label>
                </div>
            </div>
            <div class="form-top">
                <div class="col-md-4">
                    <label for="validationDefault01">
                        <div class="spanish">
                            Término del embarazo 1: <?php echo $form_term_pregnant_1; ?>
                        </div>
                    </label>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault01">
                        <div class="spanish">
                            Semana del embarazo 1: <?php echo $form_week_pregnant_1; ?>
                        </div>
                    </label>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault01">
                        <div class="spanish">
                            Año del embarazo 1: <?php echo $form_year_pregnant_1; ?>
                        </div>
                    </label>
                </div>
            </div>
            <div class="form-top">
                <div class="col-md-12">
                    <label for="validationDefault01">
                        <div class="spanish">
                            Comentarios del embarazo 1: <?php echo $form_comments_pregnant_1; ?>
                        </div>
                    </label>
                </div>
            </div>
            <div class="form-top">
                <div class="col-md-12">
                    <label for="validationDefault01">
                        <div class="spanish">
                            Datos relacionados con el embarazo 1:
                        </div>
                        <?php for ($i = 1; $i <= 20; $i++) {
                            if (${"codes_1_$i"} == 2) {
                                if (
                                    $codes_array[$i - 1] == "Hemorragia obstétrica" ||
                                    $codes_array[$i - 1] == "Obesidad con IMC > 37" ||
                                    $codes_array[$i - 1] == "Obesidad con IMC > 37" ||
                                    $codes_array[$i - 1] == "Comorbilidades preexistentes que compliquen el embarazo y al neonato (endocrinológicas, cardiológicas e inmunológicas)" ||
                                    $codes_array[$i - 1] == "Enfermedades hipertensivas" ||
                                    $codes_array[$i - 1] == "Enfermedades infectocontagiosas (VIH, Hepatitis B y C)" ||
                                    $codes_array[$i - 1] == "Sepsis" ||
                                    $codes_array[$i - 1] == "Síndrome de Hellp" ||
                                    $codes_array[$i - 1] == "Sospecha de placenta acreta o placenta percreta" ||
                                    $codes_array[$i - 1] == "Sin control prenatal en los embarazos"
                                ) {
                                    echo "<div class='red-label'>" .  $codes_array[$i - 1] . "</div>";
                                } else {
                                    echo "<div class='yellow-label'>" .  $codes_array[$i - 1] . "</div>";
                                }
                            }
                        } ?>
                    </label>
                </div>
            </div>
            <?php if ($num_pregnants > 1) { ?>
                <div class="form-top">
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Embarazo 2: <?php echo $form_type_pregnant_2; ?>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Altura del embarazo 2: <?php echo $form_height_pregnant_2 . " m"; ?>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Peso del embarazo 2: <?php echo $form_weight_pregnant_2 . " kg"; ?>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="form-top">
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Término del embarazo 2: <?php echo $form_term_pregnant_2; ?>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Semana del embarazo 2: <?php echo $form_week_pregnant_2; ?>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Año del embarazo 2: <?php echo $form_year_pregnant_2; ?>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="form-top">
                    <div class="col-md-12">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Comentarios del embarazo 2: <?php echo $form_comments_pregnant_2; ?>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="form-top">
                    <div class="col-md-12">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Datos relacionados con el embarazo 2:
                            </div>
                            <?php for ($i = 1; $i <= 20; $i++) {
                                if (${"codes_2_$i"} == 2) {
                                    echo "<div>" .  $codes_array[$i - 1] . "</div>";
                                }
                            } ?>
                        </label>
                    </div>
                </div>
            <?php } ?>
            <?php if ($num_pregnants > 2) { ?>
                <div class="form-top">
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Embarazo 3: <?php echo $form_type_pregnant_3; ?>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Altura del embarazo 3: <?php echo $form_height_pregnant_3 . " m"; ?>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Peso del embarazo 3: <?php echo $form_weight_pregnant_3 . " kg"; ?>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="form-top">
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Término del embarazo 3: <?php echo $form_term_pregnant_3; ?>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Semana del embarazo 3: <?php echo $form_week_pregnant_3; ?>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Año del embarazo 3: <?php echo $form_year_pregnant_3; ?>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="form-top">
                    <div class="col-md-12">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Comentarios del embarazo 3: <?php echo $form_comments_pregnant_3; ?>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="form-top">
                    <div class="col-md-12">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Datos relacionados con el embarazo 3:
                            </div>
                            <?php for ($i = 1; $i <= 20; $i++) {
                                if (${"codes_3_$i"} == 2) {
                                    echo "<div>" .  $codes_array[$i - 1] . "</div>";
                                }
                            } ?>
                        </label>
                    </div>
                </div>
            <?php } ?>
            <?php if ($num_pregnants > 3) { ?>
                <div class="form-top">
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Embarazo 4: <?php echo $form_type_pregnant_4; ?>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Altura del embarazo 4: <?php echo $form_height_pregnant_4 . " m"; ?>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Peso del embarazo 4: <?php echo $form_weight_pregnant_4 . " kg"; ?>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="form-top">
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Término del embarazo 4: <?php echo $form_term_pregnant_4; ?>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Semana del embarazo 4: <?php echo $form_week_pregnant_4; ?>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Año del embarazo 4: <?php echo $form_year_pregnant_4; ?>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="form-top">
                    <div class="col-md-12">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Comentarios del embarazo 4: <?php echo $form_comments_pregnant_4; ?>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="form-top">
                    <div class="col-md-12">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Datos relacionados con el embarazo 4:
                            </div>
                            <?php for ($i = 1; $i <= 20; $i++) {
                                if (${"codes_4_$i"} == 2) {
                                    echo "<div>" .  $codes_array[$i - 1] . "</div>";
                                }
                            } ?>
                        </label>
                    </div>
                </div>
            <?php } ?>
            <?php if ($num_pregnants > 4) { ?>
                <div class="form-top">
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Embarazo 5: <?php echo $form_type_pregnant_5; ?>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Altura del embarazo 5: <?php echo $form_height_pregnant_5 . " m"; ?>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Peso del embarazo 5: <?php echo $form_weight_pregnant_5 . " kg"; ?>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="form-top">
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Término del embarazo 5: <?php echo $form_term_pregnant_5; ?>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Semana del embarazo 5: <?php echo $form_week_pregnant_5; ?>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Año del embarazo 5: <?php echo $form_year_pregnant_5; ?>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="form-top">
                    <div class="col-md-12">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Comentarios del embarazo 5: <?php echo $form_comments_pregnant_5; ?>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="form-top">
                    <div class="col-md-12">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Datos relacionados con el embarazo 5:
                            </div>
                            <?php for ($i = 1; $i <= 20; $i++) {
                                if (${"codes_5_$i"} == 2) {
                                    echo "<div>" .  $codes_array[$i - 1] . "</div>";
                                }
                            } ?>
                        </label>
                    </div>
                </div>
            <?php } ?>
            <?php if ($num_pregnants > 5) { ?>
                <div class="form-top">
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Embarazo 6: <?php echo $form_type_pregnant_6; ?>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Altura del embarazo 6: <?php echo $form_height_pregnant_6 . " m"; ?>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Peso del embarazo 6: <?php echo $form_weight_pregnant_6 . " kg"; ?>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="form-top">
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Término del embarazo 6: <?php echo $form_term_pregnant_6; ?>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Semana del embarazo 6: <?php echo $form_week_pregnant_6; ?>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Año del embarazo 6: <?php echo $form_year_pregnant_6; ?>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="form-top">
                    <div class="col-md-12">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Comentarios del embarazo 6: <?php echo $form_comments_pregnant_6; ?>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="form-top">
                    <div class="col-md-12">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Datos relacionados con el embarazo 6:
                            </div>
                            <?php for ($i = 1; $i <= 20; $i++) {
                                if (${"codes_6_$i"} == 2) {
                                    echo "<div>" .  $codes_array[$i - 1] . "</div>";
                                }
                            } ?>
                        </label>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
        <?php if ($num_aborts > 0) { ?>
            <div class="form-characteristics">
                <div class="form-subtitle form-white">
                    <div class="spanish">Datos de los abortos</div>
                </div>
            </div>
            <div class="form-top">
                <div class="col-md-4">
                    <label for="validationDefault01">
                        <div class="spanish">
                            Aborto 1: <?php echo $form_type_abort_1; ?>
                        </div>
                    </label>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault01">
                        <div class="spanish">
                            Semana del aborto 1: <?php echo $form_week_abort_1; ?>
                        </div>
                    </label>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault01">
                        <div class="spanish">
                            Año del aborto 1: <?php echo $form_year_abort_1; ?>
                        </div>
                    </label>
                </div>
            </div>
            <div class="form-top">
                <div class="col-md-4">
                    <label for="validationDefault01">
                        <div class="spanish">
                            Método: <?php echo $form_method_abort_1; ?>
                        </div>
                    </label>
                </div>
                <div class="col-md-8">
                    <label for="validationDefault01">
                        <div class="spanish">
                            Comentarios del aborto 1: <?php echo $form_comments_abort_1; ?>
                        </div>
                    </label>
                </div>
            </div>
            <?php if ($num_aborts > 1) { ?>
                <div class="form-top">
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Aborto 2: <?php echo $form_type_abort_2; ?>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Semana del aborto 2: <?php echo $form_week_abort_2; ?>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Año del aborto 2: <?php echo $form_year_abort_2; ?>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="form-top">
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Método: <?php echo $form_method_abort_2; ?>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-8">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Comentarios del aborto 2: <?php echo $form_comments_abort_2; ?>
                            </div>
                        </label>
                    </div>
                </div>
            <?php } ?>
            <?php if ($num_aborts > 2) { ?>
                <div class="form-top">
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Aborto 3: <?php echo $form_type_abort_3; ?>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Semana del aborto 3: <?php echo $form_week_abort_3; ?>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Año del aborto 3: <?php echo $form_year_abort_3; ?>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="form-top">
                    <div class="col-md-4">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Método: <?php echo $form_method_abort_3; ?>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-8">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Comentarios del aborto 3: <?php echo $form_comments_abort_3; ?>
                            </div>
                        </label>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
        <div class="form-characteristics">
            <div class="form-subtitle form-white">
                <div class="spanish">Datos de los familiares</div>
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-12">
                <label for="validationDefault01">
                    <?php for ($i = 1; $i <= 36; $i++) {
                        $selected = " ";
                        $selected_idx = 0;
                        $ic = $i - 1;
                        $family_code = ${"$family_variables[$ic]"};
                        $codes = (string)$family_code;
                        for ($m = 1; $m <= 5; $m++) {
                            ${"code_$m"} = $codes[$m - 1];
                            if (${"code_$m"} == 2) {
                                if ($selected_idx > 0) {
                                    $selected = $selected . ", " . $family_select[$m - 1];
                                } else {
                                    $selected = $selected . $family_select[$m - 1];
                                    ++$selected_idx;
                                }
                            }
                        }
                        if ($selected == " ") {
                            $selected = "Ninguno";
                        }
                        echo "<div>" .  $family_diseases[$i - 1] . ": " . "<div class='inline-bold'>" . $selected . "</div> </div> </br>";
                    } ?>
                </label>
            </div>
        </div>
        <input type="hidden" name="form_name" value="<?php echo $form_name ?>">
        <input type="hidden" name="form_date" value="<?php echo $form_date ?>">
        <input type="hidden" name="form_age" value="<?php echo $form_age ?>">
        <input type="hidden" name="form_birth_place" value="<?php echo $form_birth_place ?>">
        <input type="hidden" name="form_status" value="<?php echo $form_status ?>">
        <input type="hidden" name="form_employment" value="<?php echo $form_employment ?>">
        <input type="hidden" name="form_height" value="<?php echo $form_height ?>">
        <input type="hidden" name="form_weight" value="<?php echo $form_weight ?>">
        <input type="hidden" name="form_hand" value="<?php echo $form_hand ?>">
        <input type="hidden" name="form_blood" value="<?php echo $form_blood ?>">
        <input type="hidden" name="form_implant" value="<?php echo $form_implant ?>">
        <input type="hidden" name="form_diu" value="<?php echo $form_diu ?>">
        <input type="hidden" name="form_risk_notes" value="<?php echo $form_risk_notes ?>">
        <input type="hidden" name="form_anemy" value="<?php echo $form_anemy ?>">
        <input type="hidden" name="form_diabetes" value="<?php echo $form_diabetes ?>">
        <input type="hidden" name="form_transfusion" value="<?php echo $form_transfusion ?>">
        <input type="hidden" name="form_hipertension" value="<?php echo $form_hipertension ?>">
        <input type="hidden" name="form_cancer" value="<?php echo $form_cancer ?>">
        <input type="hidden" name="form_dislexia" value="<?php echo $form_dislexia ?>">
        <input type="hidden" name="form_waist" value="<?php echo $form_waist ?>">
        <input type="hidden" name="form_migraine" value="<?php echo $form_migraine ?>">
        <input type="hidden" name="form_smoke" value="<?php echo $form_smoke ?>">
        <input type="hidden" name="form_smoke_times" value="<?php echo $form_smoke_times ?>">
        <input type="hidden" name="form_smoke_qty" value="<?php echo $form_smoke_qty ?>">
        <input type="hidden" name="form_alcohol" value="<?php echo $form_alcohol ?>">
        <input type="hidden" name="form_alcohol_freq" value="<?php echo $form_alcohol_freq ?>">
        <input type="hidden" name="form_fracture" value="<?php echo $form_fracture ?>">
        <input type="hidden" name="form_surgery" value="<?php echo $form_surgery ?>">
        <input type="hidden" name="form_fracture_info" value="<?php echo $form_fracture_info ?>">
        <input type="hidden" name="form_surgery_info" value="<?php echo $form_surgery_info ?>">
        <input type="hidden" name="form_type_pregnant_1" value="<?php echo $form_type_pregnant_1 ?>">
        <input type="hidden" name="form_height_pregnant_1" value="<?php echo $form_height_pregnant_1 ?>">
        <input type="hidden" name="form_weight_pregnant_1" value="<?php echo $form_weight_pregnant_1 ?>">
        <input type="hidden" name="form_term_pregnant_1" value="<?php echo $form_term_pregnant_1 ?>">
        <input type="hidden" name="form_week_pregnant_1" value="<?php echo $form_week_pregnant_1 ?>">
        <input type="hidden" name="form_year_pregnant_1" value="<?php echo $form_year_pregnant_1 ?>">
        <input type="hidden" name="form_comments_pregnant_1" value="<?php echo $form_comments_pregnant_1 ?>">
        <input type="hidden" name="form_type_pregnant_2" value="<?php echo $form_type_pregnant_2 ?>">
        <input type="hidden" name="form_height_pregnant_2" value="<?php echo $form_height_pregnant_2 ?>">
        <input type="hidden" name="form_weight_pregnant_2" value="<?php echo $form_weight_pregnant_2 ?>">
        <input type="hidden" name="form_term_pregnant_2" value="<?php echo $form_term_pregnant_2 ?>">
        <input type="hidden" name="form_week_pregnant_2" value="<?php echo $form_week_pregnant_2 ?>">
        <input type="hidden" name="form_year_pregnant_2" value="<?php echo $form_year_pregnant_2 ?>">
        <input type="hidden" name="form_comments_pregnant_2" value="<?php echo $form_comments_pregnant_2 ?>">
        <input type="hidden" name="form_type_pregnant_3" value="<?php echo $form_type_pregnant_3 ?>">
        <input type="hidden" name="form_height_pregnant_3" value="<?php echo $form_height_pregnant_3 ?>">
        <input type="hidden" name="form_weight_pregnant_3" value="<?php echo $form_weight_pregnant_3 ?>">
        <input type="hidden" name="form_term_pregnant_3" value="<?php echo $form_term_pregnant_3 ?>">
        <input type="hidden" name="form_week_pregnant_3" value="<?php echo $form_week_pregnant_3 ?>">
        <input type="hidden" name="form_year_pregnant_3" value="<?php echo $form_year_pregnant_3 ?>">
        <input type="hidden" name="form_comments_pregnant_3" value="<?php echo $form_comments_pregnant_3 ?>">
        <input type="hidden" name="form_type_pregnant_4" value="<?php echo $form_type_pregnant_4 ?>">
        <input type="hidden" name="form_height_pregnant_4" value="<?php echo $form_height_pregnant_4 ?>">
        <input type="hidden" name="form_weight_pregnant_4" value="<?php echo $form_weight_pregnant_4 ?>">
        <input type="hidden" name="form_term_pregnant_4" value="<?php echo $form_term_pregnant_4 ?>">
        <input type="hidden" name="form_week_pregnant_4" value="<?php echo $form_week_pregnant_4 ?>">
        <input type="hidden" name="form_year_pregnant_4" value="<?php echo $form_year_pregnant_4 ?>">
        <input type="hidden" name="form_comments_pregnant_4" value="<?php echo $form_comments_pregnant_4 ?>">
        <input type="hidden" name="form_type_pregnant_5" value="<?php echo $form_type_pregnant_5 ?>">
        <input type="hidden" name="form_height_pregnant_5" value="<?php echo $form_height_pregnant_5 ?>">
        <input type="hidden" name="form_weight_pregnant_5" value="<?php echo $form_weight_pregnant_5 ?>">
        <input type="hidden" name="form_term_pregnant_5" value="<?php echo $form_term_pregnant_5 ?>">
        <input type="hidden" name="form_week_pregnant_5" value="<?php echo $form_week_pregnant_5 ?>">
        <input type="hidden" name="form_year_pregnant_5" value="<?php echo $form_year_pregnant_5 ?>">
        <input type="hidden" name="form_comments_pregnant_5" value="<?php echo $form_comments_pregnant_5 ?>">
        <input type="hidden" name="form_type_pregnant_6" value="<?php echo $form_type_pregnant_6 ?>">
        <input type="hidden" name="form_height_pregnant_6" value="<?php echo $form_height_pregnant_6 ?>">
        <input type="hidden" name="form_weight_pregnant_6" value="<?php echo $form_weight_pregnant_6 ?>">
        <input type="hidden" name="form_term_pregnant_6" value="<?php echo $form_term_pregnant_6 ?>">
        <input type="hidden" name="form_week_pregnant_6" value="<?php echo $form_week_pregnant_6 ?>">
        <input type="hidden" name="form_year_pregnant_6" value="<?php echo $form_year_pregnant_6 ?>">
        <input type="hidden" name="form_comments_pregnant_6" value="<?php echo $form_comments_pregnant_6 ?>">
        <input type="hidden" name="form_type_abort_1" value="<?php echo $form_type_abort_1 ?>">
        <input type="hidden" name="form_year_abort_1" value="<?php echo $form_year_abort_1 ?>">
        <input type="hidden" name="form_week_abort_1" value="<?php echo $form_week_abort_1 ?>">
        <input type="hidden" name="form_comments_abort_1" value="<?php echo $form_comments_abort_1 ?>">
        <input type="hidden" name="form_type_abort_2" value="<?php echo $form_type_abort_2 ?>">
        <input type="hidden" name="form_year_abort_2" value="<?php echo $form_year_abort_2 ?>">
        <input type="hidden" name="form_week_abort_2" value="<?php echo $form_week_abort_2 ?>">
        <input type="hidden" name="form_comments_abort_2" value="<?php echo $form_comments_abort_2 ?>">
        <input type="hidden" name="form_type_abort_3" value="<?php echo $form_type_abort_3 ?>">
        <input type="hidden" name="form_year_abort_3" value="<?php echo $form_year_abort_3 ?>">
        <input type="hidden" name="form_week_abort_3" value="<?php echo $form_week_abort_3 ?>">
        <input type="hidden" name="form_comments_abort_3" value="<?php echo $form_comments_abort_3 ?>">
        <input type="hidden" name="form_coded_comments_pregnant_1" value="<?php echo $form_coded_comments_pregnant_1 ?>">
        <input type="hidden" name="form_coded_comments_pregnant_2" value="<?php echo $form_coded_comments_pregnant_2 ?>">
        <input type="hidden" name="form_coded_comments_pregnant_3" value="<?php echo $form_coded_comments_pregnant_3 ?>">
        <input type="hidden" name="form_coded_comments_pregnant_4" value="<?php echo $form_coded_comments_pregnant_4 ?>">
        <input type="hidden" name="form_coded_comments_pregnant_5" value="<?php echo $form_coded_comments_pregnant_5 ?>">
        <input type="hidden" name="form_coded_comments_pregnant_6" value="<?php echo $form_coded_comments_pregnant_6 ?>">
        <input type="hidden" name="family_alergy" value="<?php echo $family_alergy ?>">
        <input type="hidden" name="family_apoplejia" value="<?php echo $family_apoplejia ?>">
        <input type="hidden" name="family_cardiopathy" value="<?php echo $family_cardiopathy ?>">
        <input type="hidden" name="family_catarata" value="<?php echo $family_catarata ?>">
        <input type="hidden" name="family_cirrosis" value="<?php echo $family_cirrosis ?>">
        <input type="hidden" name="family_convulsive" value="<?php echo $family_convulsive ?>">
        <input type="hidden" name="family_distrophy" value="<?php echo $family_distrophy ?>">
        <input type="hidden" name="family_enfisem" value="<?php echo $family_enfisem ?>">
        <input type="hidden" name="family_epilepsy" value="<?php echo $family_epilepsy ?>">
        <input type="hidden" name="family_glaucom" value="<?php echo $family_glaucom ?>">
        <input type="hidden" name="family_hemofilia" value="<?php echo $family_hemofilia ?>">
        <input type="hidden" name="family_ictericia" value="<?php echo $family_ictericia ?>">
        <input type="hidden" name="family_migraine" value="<?php echo $family_migraine ?>">
        <input type="hidden" name="family_varicocele" value="<?php echo $family_varicocele ?>">
        <input type="hidden" name="family_equinovaro" value="<?php echo $family_equinovaro ?>">
        <input type="hidden" name="family_mental" value="<?php echo $family_mental ?>">
        <input type="hidden" name="family_drugs" value="<?php echo $family_drugs ?>">
        <input type="hidden" name="family_esquizo" value="<?php echo $family_esquizo ?>">
        <input type="hidden" name="family_alcohol" value="<?php echo $family_alcohol ?>">
        <input type="hidden" name="family_diabetes_young" value="<?php echo $family_diabetes_young ?>">
        <input type="hidden" name="family_bocio" value="<?php echo $family_bocio ?>">
        <input type="hidden" name="family_blind" value="<?php echo $family_blind ?>">
        <input type="hidden" name="family_daltonic" value="<?php echo $family_daltonic ?>">
        <input type="hidden" name="family_diabetes" value="<?php echo $family_diabetes ?>">
        <input type="hidden" name="family_psiquiatric" value="<?php echo $family_psiquiatric ?>">
        <input type="hidden" name="family_endometriosis" value="<?php echo $family_endometriosis ?>">
        <input type="hidden" name="family_fibrosis" value="<?php echo $family_fibrosis ?>">
        <input type="hidden" name="family_gota" value="<?php echo $family_gota ?>">
        <input type="hidden" name="family_hipertension" value="<?php echo $family_hipertension ?>">
        <input type="hidden" name="family_paladar" value="<?php echo $family_paladar ?>">
        <input type="hidden" name="family_kidney" value="<?php echo $family_kidney ?>">
        <input type="hidden" name="family_circulation" value="<?php echo $family_circulation ?>">
        <input type="hidden" name="family_psoriasis" value="<?php echo $family_psoriasis ?>">
        <input type="hidden" name="family_deaf" value="<?php echo $family_deaf ?>">
        <input type="hidden" name="family_alzheimer" value="<?php echo $family_alzheimer ?>">
        <input type="hidden" name="family_parkinson" value="<?php echo $family_parkinson ?>">
        <div class="form-btn btn-arrange">
            <button class="btn btn-send" type="submit">
                <div>Generar PDF</div>
            </button>
        </div>
    </form>
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
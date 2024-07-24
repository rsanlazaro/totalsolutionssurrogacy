<?php
include 'includes/templates/header.php';
include "includes/app.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$conn = connectDB();

if (!($_SESSION['login'])) {
    header('location: /index.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM candidates WHERE id=${id}";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $form_name = $row['form_name'];
    $form_curp = $row['form_curp'];
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
    $form_scheme = $row['form_scheme'];
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

echo $num_aborts;
?>
<main class="register">
    <div class="register-info">
        <h3>Editar información de la candidata</h3>
    </div>
    <form class="form form-phenotype" action="candidate2.php" method="post" enctype="multipart/form-data">
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div class="spanish">
                        CURP:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="form_curp" value="<?php echo $form_curp; ?>" required />
                <div class="invalid-feedback">
                    <div>Ingrese el CURP</div>
                </div>
            </div>
            <div class="col-md-6 form-top-element">
                <label for="validationCustom01">
                    <div class="spanish">
                        Esquema:
                    </div>
                </label>
                <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                <select name="form_scheme">
                    <?php if ($form_scheme == "375") { ?>
                        <option value="375" selected>375</option>
                        <option value="400">400</option>
                        <option value="425">425</option>
                    <?php } elseif ($form_scheme == "400") { ?>
                        <option value="375">375</option>
                        <option value="400" selected>400</option>
                        <option value="425">425</option>
                    <?php } elseif ($form_scheme == "425") { ?>
                        <option value="375">375</option>
                        <option value="400">400</option>
                        <option value="425" selected>425</option>
                    <?php } else { ?>
                        <option value="375">375</option>
                        <option value="400">400</option>
                        <option value="425">425</option>
                    <?php } ?>
                </select>
                <div class="invalid-feedback">
                    <div>Ingrese la ocupación</div>
                </div>
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div class="spanish">
                        Nombre completo:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="form_name" value="<?php echo $form_name; ?>" required />
                <div class="invalid-feedback">
                    <div>Ingrese el nombre</div>
                </div>
            </div>
            <div class="col-md-6 form-top-element">
                <label for="validationCustom01">
                    <div class="spanish">
                        Fecha de nacimiento:
                    </div>
                </label>
                <input type="date" class="form-control-phenotype" id="validationCustom01" name="form_date" value="<?php echo $form_date; ?>" />
                <div class="invalid-feedback">
                    <div>Ingrese la fecha de nacimiento</div>
                </div>
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div class="spanish">
                        Edad:
                    </div>
                </label>
                <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_age" value="<?php echo $form_age; ?>" />
                <div class="invalid-feedback">
                    <div>Ingrese la edad</div>
                </div>
            </div>
            <div class="col-md-6 form-top-element">
                <label for="validationCustom01">
                    <div class="spanish">
                        Lugar de nacimiento:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_birth_place" value="<?php echo $form_birth_place; ?>" />
                <div class="invalid-feedback">
                    <div>Ingrese el lugar de nacimiento</div>
                </div>
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationCustom01">
                    <div class="spanish">
                        Estado civil:
                    </div>
                </label>
                <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                <select name="form_status">
                    <?php if ($form_status == "casada") { ?>
                        <option value="casada" selected>Casada / Unión libre</option>
                        <option value="soltera">Soltera / Divorciada</option>
                    <?php } elseif ($form_status == "soltera") { ?>
                        <option value="casada">Casada / Unión libre</option>
                        <option value="soltera" selected>Soltera / Divorciada</option>
                    <?php } ?>
                </select>
                <div class="invalid-feedback">
                    <div>Seleccione una opción</div>
                </div>
            </div>
            <div class="col-md-6 form-top-element">
                <label for="validationCustom01">
                    <div class="spanish">
                        Ocupación:
                    </div>
                </label>
                <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                <select name="form_employment">
                    <?php if ($form_employment == "empleada") { ?>
                        <option value="empleada" selected>Empleada</option>
                        <option value="ama de casa">Ama de casa</option>
                        <option value="independiente">Independiente</option>
                    <?php } elseif ($form_employment == "ama de casa") { ?>
                        <option value="empleada">Empleada</option>
                        <option value="ama de casa" selected>Ama de casa</option>
                        <option value="independiente">Independiente</option>
                    <?php } elseif ($form_employment == "independiente") { ?>
                        <option value="empleada">Empleada</option>
                        <option value="ama de casa">Ama de casa</option>
                        <option value="independiente" selected>Independiente</option>
                    <?php } ?>
                </select>
                <div class="invalid-feedback">
                    <div>Ingrese la ocupación</div>
                </div>
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div class="spanish">
                        Estatura (m):
                    </div>
                </label>
                <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height" value="<?php echo $form_height; ?>" />
                <div class="invalid-feedback">
                    <div>Ingrese la estatura</div>
                </div>
            </div>
            <div class="col-md-6 form-top-element">
                <label for="validationCustom01">
                    <div class="spanish">
                        Peso (kg):
                    </div>
                </label>
                <input type="number" class="form-control-phenotype" step=".01" id="validationCustom01" name="form_weight" value="<?php echo $form_weight; ?>" />
                <div class="invalid-feedback">
                    <div>Ingrese el peso</div>
                </div>
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationCustom01">
                    <div class="spanish">
                        Mano predominante:
                    </div>
                </label>
                <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                <select name="form_hand">
                    <?php if ($form_hand == "derecha") { ?>
                        <option value="derecha" selected>Derecha</option>
                        <option value="izquierda">Izquierda</option>
                    <?php } elseif ($form_hand == "izquierda") { ?>
                        <option value="derecha">Derecha</option>
                        <option value="izquierda" selected>Izquierda</option>
                    <?php } ?>
                </select>
                <div class="invalid-feedback">
                    <div>Seleccione una opción</div>
                </div>
            </div>
            <div class="col-md-6 form-top-element">
                <label for="validationCustom01">
                    <div class="spanish">
                        Grupo sanguíneo:
                    </div>
                </label>
                <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                <select name="form_blood">
                    <?php if ($form_blood == "A+") { ?>
                        <option value="A+" selected>A+</option>
                        <option value="O+">O+</option>
                        <option value="B+">B+</option>
                        <option value="AB+">AB+</option>
                        <option value="A-">A-</option>
                        <option value="O-">O-</option>
                        <option value="B-">B-</option>
                        <option value="AB-">AB-</option>
                    <?php } elseif ($form_blood == "O+") { ?>
                        <option value="A+">A+</option>
                        <option value="O+" selected>O+</option>
                        <option value="B+">B+</option>
                        <option value="AB+">AB+</option>
                        <option value="A-">A-</option>
                        <option value="O-">O-</option>
                        <option value="B-">B-</option>
                        <option value="AB-">AB-</option>
                    <?php } elseif ($form_blood == "B+") { ?>
                        <option value="A+">A+</option>
                        <option value="O+">O+</option>
                        <option value="B+" selected>B+</option>
                        <option value="AB+">AB+</option>
                        <option value="A-">A-</option>
                        <option value="O-">O-</option>
                        <option value="B-">B-</option>
                        <option value="AB-">AB-</option>

                    <?php } elseif ($form_blood == "AB+") { ?>
                        <option value="A+">A+</option>
                        <option value="O+">O+</option>
                        <option value="B+">B+</option>
                        <option value="AB+" selected>AB+</option>
                        <option value="A-">A-</option>
                        <option value="O-">O-</option>
                        <option value="B-">B-</option>
                        <option value="AB-">AB-</option>

                    <?php } elseif ($form_blood == "A-") { ?>
                        <option value="A+">A+</option>
                        <option value="O+">O+</option>
                        <option value="B+">B+</option>
                        <option value="AB+">AB+</option>
                        <option value="A-" selected>A-</option>
                        <option value="O-">O-</option>
                        <option value="B-">B-</option>
                        <option value="AB-">AB-</option>

                    <?php } elseif ($form_blood == "O-") { ?>
                        <option value="A+">A+</option>
                        <option value="O+">O+</option>
                        <option value="B+">B+</option>
                        <option value="AB+">AB+</option>
                        <option value="A-">A-</option>
                        <option value="O-" selected>O-</option>
                        <option value="B-">B-</option>
                        <option value="AB-">AB-</option>

                    <?php } elseif ($form_blood == "B-") { ?>
                        <option value="A+">A+</option>
                        <option value="O+">O+</option>
                        <option value="B+">B+</option>
                        <option value="AB+">AB+</option>
                        <option value="A-">A-</option>
                        <option value="O-">O-</option>
                        <option value="B-" selected>B-</option>
                        <option value="AB-">AB-</option>

                    <?php } elseif ($form_blood == "AB-") { ?>
                        <option value="A+">A+</option>
                        <option value="O+">O+</option>
                        <option value="B+">B+</option>
                        <option value="AB+">AB+</option>
                        <option value="A-">A-</option>
                        <option value="O-">O-</option>
                        <option value="B-">B-</option>
                        <option value="AB-" selected>AB-</option>
                    <?php } ?>
                </select>
                <div class="invalid-feedback">
                    <div>Seleccione una opción</div>
                </div>
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationCustom01">
                    <div class="spanish">
                        Implante anticonceptivo:
                    </div>
                </label>
                <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                <select name="form_implant">
                    <?php if ($form_implant == "sí") { ?>
                        <option value="sí" selected>Sí</option>
                        <option value="no">No</option>
                    <?php } elseif ($form_implant == "no") { ?>
                        <option value="sí">Sí</option>
                        <option value="no" selected>No</option>
                    <?php } ?>
                </select>
                <div class="invalid-feedback">
                    <div>Seleccione una opción</div>
                </div>
            </div>
            <div class="col-md-6 form-top-element">
                <label for="validationCustom01">
                    <div class="spanish">
                        Dispositivo DIU:
                    </div>
                </label>
                <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                <select name="form_diu">
                    <?php if ($form_diu == "sí") { ?>
                        <option value="sí" selected>Sí</option>
                        <option value="no">No</option>
                    <?php } elseif ($form_diu == "no") { ?>
                        <option value="sí">Sí</option>
                        <option value="no" selected>No</option>
                    <?php } ?>
                </select>
                <div class="invalid-feedback">
                    <div>Seleccione una opción</div>
                </div>
            </div>
        </div>
        <div class="form-characteristics">
            <div class="form-subtitle form-white">
                <div class="spanish">Antecedentes gineco-obstétricos</div>
            </div>
        </div>
        <?php if ($num_pregnants > 0) { ?>
            <div class="pregancySection">
                <div class="form-top">
                    <div class="col-md-6">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Embarazo 1:
                            </div>
                        </label>
                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                        <select name="form_type_pregnant_1">
                            <?php if ($form_type_pregnant_1 == "natural") { ?>
                                <option value="natural" selected>Parto natural</option>
                                <option value="cesarea">Cesárea</option>
                            <?php } else { ?>
                                <option value="natural">Parto natural</option>
                                <option value="cesarea" selected>Cesárea</option>
                            <?php } ?>
                        </select>
                        <div class="invalid-feedback">
                            <div>Seleccione una opción</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Estatura (m):
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_1" value="<?php echo $form_height_pregnant_1 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese la estatura</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Peso (kg):
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_1" value="<?php echo $form_weight_pregnant_1 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese el peso</div>
                        </div>
                    </div>
                </div>
                <div class="form-top">
                    <div class="col-md-6">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Término:
                            </div>
                        </label>
                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                        <select name="form_term_pregnant_1">
                            <?php if ($form_term_pregnant_1 == "preterm") { ?>
                                <option value="preterm" selected>Pre término</option>
                                <option value="term">término</option>
                                <option value="program">programado</option>
                                <option value="induced">inducido</option>
                            <?php } elseif ($form_term_pregnant_1 == "term") { ?>
                                <option value="preterm">Pre término</option>
                                <option value="term" selected>término</option>
                                <option value="program">programado</option>
                                <option value="induced">inducido</option>
                            <?php } elseif ($form_term_pregnant_1 == "program") { ?>
                                <option value="preterm">Pre término</option>
                                <option value="term">término</option>
                                <option value="program" selected>programado</option>
                                <option value="induced">inducido</option>
                            <?php } elseif ($form_term_pregnant_1 == "induced") { ?>
                                <option value="preterm">Pre término</option>
                                <option value="term">término</option>
                                <option value="program">programado</option>
                                <option value="induced" selected>inducido</option>
                            <?php } ?>
                        </select>
                        <div class="invalid-feedback">
                            <div>Seleccione una opción</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Semana:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_1" value="<?php echo $form_week_pregnant_1 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese un número de semana</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Año:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_1" value="<?php echo $form_year_pregnant_1 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese el año</div>
                        </div>
                    </div>
                </div>
                <div class="form-top">
                    <div class="col-md-6">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Complicaciones:
                            </div>
                        </label>
                        <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_1" value="<?php echo $form_comments_pregnant_1 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese algún comentario</div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ($num_pregnants > 1) { ?>
                <div class="pregancySection">
                    <div class="form-top">
                        <div class="col-md-6">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Embarazo 2:
                                </div>
                            </label>
                            <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                            <select name="form_type_pregnant_2">
                                <?php if ($form_type_pregnant_2 == "natural") { ?>
                                    <option value="natural" selected>Parto natural</option>
                                    <option value="cesarea">Cesárea</option>
                                <?php } else { ?>
                                    <option value="natural">Parto natural</option>
                                    <option value="cesarea" selected>Cesárea</option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback">
                                <div>Seleccione una opción</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationDefault01">
                                <div class="spanish">
                                    Estatura (m):
                                </div>
                            </label>
                            <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_2" value="<?php echo $form_height_pregnant_2 ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese la estatura</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationDefault01">
                                <div class="spanish">
                                    Peso (kg):
                                </div>
                            </label>
                            <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_2" value="<?php echo $form_weight_pregnant_2 ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese el peso</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-top">
                        <div class="col-md-6">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Término:
                                </div>
                            </label>
                            <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                            <select name="form_term_pregnant_2">
                                <?php if ($form_term_pregnant_2 == "preterm") { ?>
                                    <option value="preterm">Pre término</option>
                                    <option value="term">término</option>
                                    <option value="program">programado</option>
                                    <option value="induced">inducido</option>
                                <?php } elseif ($form_term_pregnant_2 == "term") { ?>
                                    <option value="preterm">Pre término</option>
                                    <option value="term">término</option>
                                    <option value="program">programado</option>
                                    <option value="induced">inducido</option>
                                <?php } elseif ($form_term_pregnant_2 == "term") { ?>
                                    <option value="preterm">Pre término</option>
                                    <option value="term">término</option>
                                    <option value="program">programado</option>
                                    <option value="induced">inducido</option>
                                <?php } elseif ($form_term_pregnant_2 == "term") { ?>
                                    <option value="preterm">Pre término</option>
                                    <option value="term">término</option>
                                    <option value="program">programado</option>
                                    <option value="induced">inducido</option>
                                <?php } elseif ($form_term_pregnant_2 == "term") { ?>
                                    <option value="preterm">Pre término</option>
                                    <option value="term">término</option>
                                    <option value="program">programado</option>
                                    <option value="induced">inducido</option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback">
                                <div>Seleccione una opción</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Semana:
                                </div>
                            </label>
                            <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_2" value="<?php echo $form_week_pregnant_2 ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese un número de semana</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Año:
                                </div>
                            </label>
                            <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_2" value="<?php echo $form_year_pregnant_2 ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese el año</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-top">
                        <div class="col-md-6">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Complicaciones:
                                </div>
                            </label>
                            <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_2" value="<?php echo $form_comments_pregnant_2 ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese algún comentario</div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if ($num_pregnants > 2) { ?>
                    <div class="pregancySection">
                        <div class="form-top">
                            <div class="col-md-6">
                                <label for="validationCustom01">
                                    <div class="spanish">
                                        Embarazo 3:
                                    </div>
                                </label>
                                <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                                <select name="form_type_pregnant_3">
                                    <?php if ($form_type_pregnant_3 == "natural") { ?>
                                        <option value="natural" selected>Parto natural</option>
                                        <option value="cesarea">Cesárea</option>
                                    <?php } else { ?>
                                        <option value="natural">Parto natural</option>
                                        <option value="cesarea" selected>Cesárea</option>
                                    <?php } ?>
                                </select>
                                <div class="invalid-feedback">
                                    <div>Seleccione una opción</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationDefault01">
                                    <div class="spanish">
                                        Estatura (m):
                                    </div>
                                </label>
                                <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_3" value="<?php echo $form_height_pregnant_3 ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese la estatura</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationDefault01">
                                    <div class="spanish">
                                        Peso (kg):
                                    </div>
                                </label>
                                <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_3" value="<?php echo $form_weight_pregnant_3 ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese el peso</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-top">
                            <div class="col-md-6">
                                <label for="validationCustom01">
                                    <div class="spanish">
                                        Término:
                                    </div>
                                </label>
                                <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                                <select name="form_term_pregnant_3">
                                    <?php if ($form_term_pregnant_3 == "preterm") { ?>
                                        <option value="preterm">Pre término</option>
                                        <option value="term">término</option>
                                        <option value="program">programado</option>
                                        <option value="induced">inducido</option>
                                    <?php } elseif ($form_term_pregnant_3 == "term") { ?>
                                        <option value="preterm">Pre término</option>
                                        <option value="term">término</option>
                                        <option value="program">programado</option>
                                        <option value="induced">inducido</option>
                                    <?php } elseif ($form_term_pregnant_3 == "term") { ?>
                                        <option value="preterm">Pre término</option>
                                        <option value="term">término</option>
                                        <option value="program">programado</option>
                                        <option value="induced">inducido</option>
                                    <?php } elseif ($form_term_pregnant_3 == "term") { ?>
                                        <option value="preterm">Pre término</option>
                                        <option value="term">término</option>
                                        <option value="program">programado</option>
                                        <option value="induced">inducido</option>
                                    <?php } elseif ($form_term_pregnant_3 == "term") { ?>
                                        <option value="preterm">Pre término</option>
                                        <option value="term">término</option>
                                        <option value="program">programado</option>
                                        <option value="induced">inducido</option>
                                    <?php } ?>
                                </select>
                                <div class="invalid-feedback">
                                    <div>Seleccione una opción</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom01">
                                    <div class="spanish">
                                        Semana:
                                    </div>
                                </label>
                                <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_3" value="<?php echo $form_week_pregnant_3 ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese un número de semana</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom01">
                                    <div class="spanish">
                                        Año:
                                    </div>
                                </label>
                                <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_3" value="<?php echo $form_year_pregnant_3 ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese el año</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-top">
                            <div class="col-md-6">
                                <label for="validationCustom01">
                                    <div class="spanish">
                                        Complicaciones:
                                    </div>
                                </label>
                                <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_3" value="<?php echo $form_comments_pregnant_3 ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese algún comentario</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if ($num_pregnants > 3) { ?>
                        <div class="pregancySection">
                            <div class="form-top">
                                <div class="col-md-6">
                                    <label for="validationCustom01">
                                        <div class="spanish">
                                            Embarazo 4:
                                        </div>
                                    </label>
                                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                                    <select name="form_type_pregnant_4">
                                        <?php if ($form_type_pregnant_4 == "natural") { ?>
                                            <option value="natural" selected>Parto natural</option>
                                            <option value="cesarea">Cesárea</option>
                                        <?php } else { ?>
                                            <option value="natural">Parto natural</option>
                                            <option value="cesarea" selected>Cesárea</option>
                                        <?php } ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <div>Seleccione una opción</div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationDefault01">
                                        <div class="spanish">
                                            Estatura (m):
                                        </div>
                                    </label>
                                    <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_4" value="<?php echo $form_height_pregnant_4 ?>" />
                                    <div class="invalid-feedback">
                                        <div>Ingrese la estatura</div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationDefault01">
                                        <div class="spanish">
                                            Peso (kg):
                                        </div>
                                    </label>
                                    <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_4" value="<?php echo $form_weight_pregnant_4 ?>" />
                                    <div class="invalid-feedback">
                                        <div>Ingrese el peso</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-top">
                                <div class="col-md-6">
                                    <label for="validationCustom01">
                                        <div class="spanish">
                                            Término:
                                        </div>
                                    </label>
                                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                                    <select name="form_term_pregnant_4">
                                        <?php if ($form_term_pregnant_4 == "preterm") { ?>
                                            <option value="preterm">Pre término</option>
                                            <option value="term">término</option>
                                            <option value="program">programado</option>
                                            <option value="induced">inducido</option>
                                        <?php } elseif ($form_term_pregnant_4 == "term") { ?>
                                            <option value="preterm">Pre término</option>
                                            <option value="term">término</option>
                                            <option value="program">programado</option>
                                            <option value="induced">inducido</option>
                                        <?php } elseif ($form_term_pregnant_4 == "term") { ?>
                                            <option value="preterm">Pre término</option>
                                            <option value="term">término</option>
                                            <option value="program">programado</option>
                                            <option value="induced">inducido</option>
                                        <?php } elseif ($form_term_pregnant_4 == "term") { ?>
                                            <option value="preterm">Pre término</option>
                                            <option value="term">término</option>
                                            <option value="program">programado</option>
                                            <option value="induced">inducido</option>
                                        <?php } elseif ($form_term_pregnant_4 == "term") { ?>
                                            <option value="preterm">Pre término</option>
                                            <option value="term">término</option>
                                            <option value="program">programado</option>
                                            <option value="induced">inducido</option>
                                        <?php } ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <div>Seleccione una opción</div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationCustom01">
                                        <div class="spanish">
                                            Semana:
                                        </div>
                                    </label>
                                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_4" value="<?php echo $form_week_pregnant_4 ?>" />
                                    <div class="invalid-feedback">
                                        <div>Ingrese un número de semana</div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationCustom01">
                                        <div class="spanish">
                                            Año:
                                        </div>
                                    </label>
                                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_4" value="<?php echo $form_year_pregnant_4 ?>" />
                                    <div class="invalid-feedback">
                                        <div>Ingrese el año</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-top">
                                <div class="col-md-6">
                                    <label for="validationCustom01">
                                        <div class="spanish">
                                            Complicaciones:
                                        </div>
                                    </label>
                                    <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_4" value="<?php echo $form_comments_pregnant_4 ?>" />
                                    <div class="invalid-feedback">
                                        <div>Ingrese algún comentario</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if ($num_pregnants > 4) { ?>
                            <div class="pregancySection">
                                <div class="form-top">
                                    <div class="col-md-6">
                                        <label for="validationCustom01">
                                            <div class="spanish">
                                                Embarazo 5:
                                            </div>
                                        </label>
                                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                                        <select name="form_type_pregnant_5">
                                            <?php if ($form_type_pregnant_5 == "natural") { ?>
                                                <option value="natural" selected>Parto natural</option>
                                                <option value="cesarea">Cesárea</option>
                                            <?php } else { ?>
                                                <option value="natural">Parto natural</option>
                                                <option value="cesarea" selected>Cesárea</option>
                                            <?php } ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            <div>Seleccione una opción</div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationDefault01">
                                            <div class="spanish">
                                                Estatura (m):
                                            </div>
                                        </label>
                                        <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_5" value="<?php echo $form_height_pregnant_5 ?>" />
                                        <div class="invalid-feedback">
                                            <div>Ingrese la estatura</div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationDefault01">
                                            <div class="spanish">
                                                Peso (kg):
                                            </div>
                                        </label>
                                        <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_5" value="<?php echo $form_weight_pregnant_5 ?>" />
                                        <div class="invalid-feedback">
                                            <div>Ingrese el peso</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-top">
                                    <div class="col-md-6">
                                        <label for="validationCustom01">
                                            <div class="spanish">
                                                Término:
                                            </div>
                                        </label>
                                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                                        <select name="form_term_pregnant_5">
                                            <?php if ($form_term_pregnant_5 == "preterm") { ?>
                                                <option value="preterm">Pre término</option>
                                                <option value="term">término</option>
                                                <option value="program">programado</option>
                                                <option value="induced">inducido</option>
                                            <?php } elseif ($form_term_pregnant_5 == "term") { ?>
                                                <option value="preterm">Pre término</option>
                                                <option value="term">término</option>
                                                <option value="program">programado</option>
                                                <option value="induced">inducido</option>
                                            <?php } elseif ($form_term_pregnant_5 == "term") { ?>
                                                <option value="preterm">Pre término</option>
                                                <option value="term">término</option>
                                                <option value="program">programado</option>
                                                <option value="induced">inducido</option>
                                            <?php } elseif ($form_term_pregnant_5 == "term") { ?>
                                                <option value="preterm">Pre término</option>
                                                <option value="term">término</option>
                                                <option value="program">programado</option>
                                                <option value="induced">inducido</option>
                                            <?php } elseif ($form_term_pregnant_5 == "term") { ?>
                                                <option value="preterm">Pre término</option>
                                                <option value="term">término</option>
                                                <option value="program">programado</option>
                                                <option value="induced">inducido</option>
                                            <?php } ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            <div>Seleccione una opción</div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom01">
                                            <div class="spanish">
                                                Semana:
                                            </div>
                                        </label>
                                        <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_5" value="<?php echo $form_week_pregnant_5 ?>" />
                                        <div class="invalid-feedback">
                                            <div>Ingrese un número de semana</div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom01">
                                            <div class="spanish">
                                                Año:
                                            </div>
                                        </label>
                                        <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_5" value="<?php echo $form_year_pregnant_5 ?>" />
                                        <div class="invalid-feedback">
                                            <div>Ingrese el año</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-top">
                                    <div class="col-md-6">
                                        <label for="validationCustom01">
                                            <div class="spanish">
                                                Complicaciones:
                                            </div>
                                        </label>
                                        <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_5" value="<?php echo $form_comments_pregnant_5 ?>" />
                                        <div class="invalid-feedback">
                                            <div>Ingrese algún comentario</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php if ($num_pregnants > 5) { ?>
                                <div class="pregancySection">
                                    <div class="form-top">
                                        <div class="col-md-6">
                                            <label for="validationCustom01">
                                                <div class="spanish">
                                                    Embarazo 6:
                                                </div>
                                            </label>
                                            <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                                            <select name="form_type_pregnant_6">
                                                <?php if ($form_type_pregnant_6 == "natural") { ?>
                                                    <option value="natural" selected>Parto natural</option>
                                                    <option value="cesarea">Cesárea</option>
                                                <?php } else { ?>
                                                    <option value="natural">Parto natural</option>
                                                    <option value="cesarea" selected>Cesárea</option>
                                                <?php } ?>
                                            </select>
                                            <div class="invalid-feedback">
                                                <div>Seleccione una opción</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="validationDefault01">
                                                <div class="spanish">
                                                    Estatura (m):
                                                </div>
                                            </label>
                                            <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_6" value="<?php echo $form_height_pregnant_6 ?>" />
                                            <div class="invalid-feedback">
                                                <div>Ingrese la estatura</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="validationDefault01">
                                                <div class="spanish">
                                                    Peso (kg):
                                                </div>
                                            </label>
                                            <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_6" value="<?php echo $form_weight_pregnant_6 ?>" />
                                            <div class="invalid-feedback">
                                                <div>Ingrese el peso</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-top">
                                        <div class="col-md-6">
                                            <label for="validationCustom01">
                                                <div class="spanish">
                                                    Término:
                                                </div>
                                            </label>
                                            <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                                            <select name="form_term_pregnant_6">
                                                <?php if ($form_term_pregnant_6 == "preterm") { ?>
                                                    <option value="preterm">Pre término</option>
                                                    <option value="term">término</option>
                                                    <option value="program">programado</option>
                                                    <option value="induced">inducido</option>
                                                <?php } elseif ($form_term_pregnant_6 == "term") { ?>
                                                    <option value="preterm">Pre término</option>
                                                    <option value="term">término</option>
                                                    <option value="program">programado</option>
                                                    <option value="induced">inducido</option>
                                                <?php } elseif ($form_term_pregnant_6 == "term") { ?>
                                                    <option value="preterm">Pre término</option>
                                                    <option value="term">término</option>
                                                    <option value="program">programado</option>
                                                    <option value="induced">inducido</option>
                                                <?php } elseif ($form_term_pregnant_6 == "term") { ?>
                                                    <option value="preterm">Pre término</option>
                                                    <option value="term">término</option>
                                                    <option value="program">programado</option>
                                                    <option value="induced">inducido</option>
                                                <?php } elseif ($form_term_pregnant_6 == "term") { ?>
                                                    <option value="preterm">Pre término</option>
                                                    <option value="term">término</option>
                                                    <option value="program">programado</option>
                                                    <option value="induced">inducido</option>
                                                <?php } ?>
                                            </select>
                                            <div class="invalid-feedback">
                                                <div>Seleccione una opción</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="validationCustom01">
                                                <div class="spanish">
                                                    Semana:
                                                </div>
                                            </label>
                                            <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_6" value="<?php echo $form_week_pregnant_6 ?>" />
                                            <div class="invalid-feedback">
                                                <div>Ingrese un número de semana</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="validationCustom01">
                                                <div class="spanish">
                                                    Año:
                                                </div>
                                            </label>
                                            <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_6" value="<?php echo $form_year_pregnant_6 ?>" />
                                            <div class="invalid-feedback">
                                                <div>Ingrese el año</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-top">
                                        <div class="col-md-6">
                                            <label for="validationCustom01">
                                                <div class="spanish">
                                                    Complicaciones:
                                                </div>
                                            </label>
                                            <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_6" value="<?php echo $form_comments_pregnant_6 ?>" />
                                            <div class="invalid-feedback">
                                                <div>Ingrese algún comentario</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="pregancySection display-none">
                                    <div class="form-top">
                                        <div class="col-md-6">
                                            <label for="validationCustom01">
                                                <div class="spanish">
                                                    Embarazo 6:
                                                </div>
                                            </label>
                                            <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                                            <select name="form_type_pregnant_6">
                                                <?php if ($form_type_pregnant_6 == "natural") { ?>
                                                    <option value="natural" selected>Parto natural</option>
                                                    <option value="cesarea">Cesárea</option>
                                                <?php } else { ?>
                                                    <option value="natural">Parto natural</option>
                                                    <option value="cesarea" selected>Cesárea</option>
                                                <?php } ?>
                                            </select>
                                            <div class="invalid-feedback">
                                                <div>Seleccione una opción</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="validationDefault01">
                                                <div class="spanish">
                                                    Estatura (m):
                                                </div>
                                            </label>
                                            <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_6" value="<?php echo $form_height_pregnant_6 ?>" />
                                            <div class="invalid-feedback">
                                                <div>Ingrese la estatura</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="validationDefault01">
                                                <div class="spanish">
                                                    Peso (kg):
                                                </div>
                                            </label>
                                            <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_6" value="<?php echo $form_weight_pregnant_6 ?>" />
                                            <div class="invalid-feedback">
                                                <div>Ingrese el peso</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-top">
                                        <div class="col-md-6">
                                            <label for="validationCustom01">
                                                <div class="spanish">
                                                    Término:
                                                </div>
                                            </label>
                                            <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                                            <select name="form_term_pregnant_6">
                                                <?php if ($form_term_pregnant_6 == "preterm") { ?>
                                                    <option value="preterm">Pre término</option>
                                                    <option value="term">término</option>
                                                    <option value="program">programado</option>
                                                    <option value="induced">inducido</option>
                                                <?php } elseif ($form_term_pregnant_6 == "term") { ?>
                                                    <option value="preterm">Pre término</option>
                                                    <option value="term">término</option>
                                                    <option value="program">programado</option>
                                                    <option value="induced">inducido</option>
                                                <?php } elseif ($form_term_pregnant_6 == "term") { ?>
                                                    <option value="preterm">Pre término</option>
                                                    <option value="term">término</option>
                                                    <option value="program">programado</option>
                                                    <option value="induced">inducido</option>
                                                <?php } elseif ($form_term_pregnant_6 == "term") { ?>
                                                    <option value="preterm">Pre término</option>
                                                    <option value="term">término</option>
                                                    <option value="program">programado</option>
                                                    <option value="induced">inducido</option>
                                                <?php } elseif ($form_term_pregnant_6 == "term") { ?>
                                                    <option value="preterm">Pre término</option>
                                                    <option value="term">término</option>
                                                    <option value="program">programado</option>
                                                    <option value="induced">inducido</option>
                                                <?php } ?>
                                            </select>
                                            <div class="invalid-feedback">
                                                <div>Seleccione una opción</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="validationCustom01">
                                                <div class="spanish">
                                                    Semana:
                                                </div>
                                            </label>
                                            <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_6" value="<?php echo $form_week_pregnant_6 ?>" />
                                            <div class="invalid-feedback">
                                                <div>Ingrese un número de semana</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="validationCustom01">
                                                <div class="spanish">
                                                    Año:
                                                </div>
                                            </label>
                                            <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_6" value="<?php echo $form_year_pregnant_6 ?>" />
                                            <div class="invalid-feedback">
                                                <div>Ingrese el año</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-top">
                                        <div class="col-md-6">
                                            <label for="validationCustom01">
                                                <div class="spanish">
                                                    Complicaciones:
                                                </div>
                                            </label>
                                            <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_6" value="<?php echo $form_comments_pregnant_6 ?>" />
                                            <div class="invalid-feedback">
                                                <div>Ingrese algún comentario</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } else { ?>
                            <div class="pregancySection display-none">
                                <div class="form-top">
                                    <div class="col-md-6">
                                        <label for="validationCustom01">
                                            <div class="spanish">
                                                Embarazo 5:
                                            </div>
                                        </label>
                                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                                        <select name="form_type_pregnant_5">
                                            <?php if ($form_type_pregnant_5 == "natural") { ?>
                                                <option value="natural" selected>Parto natural</option>
                                                <option value="cesarea">Cesárea</option>
                                            <?php } else { ?>
                                                <option value="natural">Parto natural</option>
                                                <option value="cesarea" selected>Cesárea</option>
                                            <?php } ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            <div>Seleccione una opción</div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationDefault01">
                                            <div class="spanish">
                                                Estatura (m):
                                            </div>
                                        </label>
                                        <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_5" value="<?php echo $form_height_pregnant_5 ?>" />
                                        <div class="invalid-feedback">
                                            <div>Ingrese la estatura</div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationDefault01">
                                            <div class="spanish">
                                                Peso (kg):
                                            </div>
                                        </label>
                                        <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_5" value="<?php echo $form_weight_pregnant_5 ?>" />
                                        <div class="invalid-feedback">
                                            <div>Ingrese el peso</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-top">
                                    <div class="col-md-6">
                                        <label for="validationCustom01">
                                            <div class="spanish">
                                                Término:
                                            </div>
                                        </label>
                                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                                        <select name="form_term_pregnant_5">
                                            <?php if ($form_term_pregnant_5 == "preterm") { ?>
                                                <option value="preterm">Pre término</option>
                                                <option value="term">término</option>
                                                <option value="program">programado</option>
                                                <option value="induced">inducido</option>
                                            <?php } elseif ($form_term_pregnant_5 == "term") { ?>
                                                <option value="preterm">Pre término</option>
                                                <option value="term">término</option>
                                                <option value="program">programado</option>
                                                <option value="induced">inducido</option>
                                            <?php } elseif ($form_term_pregnant_5 == "term") { ?>
                                                <option value="preterm">Pre término</option>
                                                <option value="term">término</option>
                                                <option value="program">programado</option>
                                                <option value="induced">inducido</option>
                                            <?php } elseif ($form_term_pregnant_5 == "term") { ?>
                                                <option value="preterm">Pre término</option>
                                                <option value="term">término</option>
                                                <option value="program">programado</option>
                                                <option value="induced">inducido</option>
                                            <?php } elseif ($form_term_pregnant_5 == "term") { ?>
                                                <option value="preterm">Pre término</option>
                                                <option value="term">término</option>
                                                <option value="program">programado</option>
                                                <option value="induced">inducido</option>
                                            <?php } ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            <div>Seleccione una opción</div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom01">
                                            <div class="spanish">
                                                Semana:
                                            </div>
                                        </label>
                                        <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_5" value="<?php echo $form_week_pregnant_5 ?>" />
                                        <div class="invalid-feedback">
                                            <div>Ingrese un número de semana</div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom01">
                                            <div class="spanish">
                                                Año:
                                            </div>
                                        </label>
                                        <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_5" value="<?php echo $form_year_pregnant_5 ?>" />
                                        <div class="invalid-feedback">
                                            <div>Ingrese el año</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-top">
                                    <div class="col-md-6">
                                        <label for="validationCustom01">
                                            <div class="spanish">
                                                Complicaciones:
                                            </div>
                                        </label>
                                        <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_5" value="<?php echo $form_comments_pregnant_5 ?>" />
                                        <div class="invalid-feedback">
                                            <div>Ingrese algún comentario</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pregancySection display-none">
                                <div class="form-top">
                                    <div class="col-md-6">
                                        <label for="validationCustom01">
                                            <div class="spanish">
                                                Embarazo 6:
                                            </div>
                                        </label>
                                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                                        <select name="form_type_pregnant_6">
                                            <?php if ($form_type_pregnant_6 == "natural") { ?>
                                                <option value="natural" selected>Parto natural</option>
                                                <option value="cesarea">Cesárea</option>
                                            <?php } else { ?>
                                                <option value="natural">Parto natural</option>
                                                <option value="cesarea" selected>Cesárea</option>
                                            <?php } ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            <div>Seleccione una opción</div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationDefault01">
                                            <div class="spanish">
                                                Estatura (m):
                                            </div>
                                        </label>
                                        <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_6" value="<?php echo $form_height_pregnant_6 ?>" />
                                        <div class="invalid-feedback">
                                            <div>Ingrese la estatura</div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationDefault01">
                                            <div class="spanish">
                                                Peso (kg):
                                            </div>
                                        </label>
                                        <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_6" value="<?php echo $form_weight_pregnant_6 ?>" />
                                        <div class="invalid-feedback">
                                            <div>Ingrese el peso</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-top">
                                    <div class="col-md-6">
                                        <label for="validationCustom01">
                                            <div class="spanish">
                                                Término:
                                            </div>
                                        </label>
                                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                                        <select name="form_term_pregnant_6">
                                            <?php if ($form_term_pregnant_6 == "preterm") { ?>
                                                <option value="preterm">Pre término</option>
                                                <option value="term">término</option>
                                                <option value="program">programado</option>
                                                <option value="induced">inducido</option>
                                            <?php } elseif ($form_term_pregnant_6 == "term") { ?>
                                                <option value="preterm">Pre término</option>
                                                <option value="term">término</option>
                                                <option value="program">programado</option>
                                                <option value="induced">inducido</option>
                                            <?php } elseif ($form_term_pregnant_6 == "term") { ?>
                                                <option value="preterm">Pre término</option>
                                                <option value="term">término</option>
                                                <option value="program">programado</option>
                                                <option value="induced">inducido</option>
                                            <?php } elseif ($form_term_pregnant_6 == "term") { ?>
                                                <option value="preterm">Pre término</option>
                                                <option value="term">término</option>
                                                <option value="program">programado</option>
                                                <option value="induced">inducido</option>
                                            <?php } elseif ($form_term_pregnant_6 == "term") { ?>
                                                <option value="preterm">Pre término</option>
                                                <option value="term">término</option>
                                                <option value="program">programado</option>
                                                <option value="induced">inducido</option>
                                            <?php } ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            <div>Seleccione una opción</div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom01">
                                            <div class="spanish">
                                                Semana:
                                            </div>
                                        </label>
                                        <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_6" value="<?php echo $form_week_pregnant_6 ?>" />
                                        <div class="invalid-feedback">
                                            <div>Ingrese un número de semana</div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom01">
                                            <div class="spanish">
                                                Año:
                                            </div>
                                        </label>
                                        <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_6" value="<?php echo $form_year_pregnant_6 ?>" />
                                        <div class="invalid-feedback">
                                            <div>Ingrese el año</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-top">
                                    <div class="col-md-6">
                                        <label for="validationCustom01">
                                            <div class="spanish">
                                                Complicaciones:
                                            </div>
                                        </label>
                                        <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_6" value="<?php echo $form_comments_pregnant_6 ?>" />
                                        <div class="invalid-feedback">
                                            <div>Ingrese algún comentario</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } else { ?>
                        <div class="pregancySection display-none">
                            <div class="form-top">
                                <div class="col-md-6">
                                    <label for="validationCustom01">
                                        <div class="spanish">
                                            Embarazo 4:
                                        </div>
                                    </label>
                                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                                    <select name="form_type_pregnant_4">
                                        <?php if ($form_type_pregnant_4 == "natural") { ?>
                                            <option value="natural" selected>Parto natural</option>
                                            <option value="cesarea">Cesárea</option>
                                        <?php } else { ?>
                                            <option value="natural">Parto natural</option>
                                            <option value="cesarea" selected>Cesárea</option>
                                        <?php } ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <div>Seleccione una opción</div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationDefault01">
                                        <div class="spanish">
                                            Estatura (m):
                                        </div>
                                    </label>
                                    <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_4" value="<?php echo $form_height_pregnant_4 ?>" />
                                    <div class="invalid-feedback">
                                        <div>Ingrese la estatura</div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationDefault01">
                                        <div class="spanish">
                                            Peso (kg):
                                        </div>
                                    </label>
                                    <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_4" value="<?php echo $form_weight_pregnant_4 ?>" />
                                    <div class="invalid-feedback">
                                        <div>Ingrese el peso</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-top">
                                <div class="col-md-6">
                                    <label for="validationCustom01">
                                        <div class="spanish">
                                            Término:
                                        </div>
                                    </label>
                                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                                    <select name="form_term_pregnant_4">
                                        <?php if ($form_term_pregnant_4 == "preterm") { ?>
                                            <option value="preterm">Pre término</option>
                                            <option value="term">término</option>
                                            <option value="program">programado</option>
                                            <option value="induced">inducido</option>
                                        <?php } elseif ($form_term_pregnant_4 == "term") { ?>
                                            <option value="preterm">Pre término</option>
                                            <option value="term">término</option>
                                            <option value="program">programado</option>
                                            <option value="induced">inducido</option>
                                        <?php } elseif ($form_term_pregnant_4 == "term") { ?>
                                            <option value="preterm">Pre término</option>
                                            <option value="term">término</option>
                                            <option value="program">programado</option>
                                            <option value="induced">inducido</option>
                                        <?php } elseif ($form_term_pregnant_4 == "term") { ?>
                                            <option value="preterm">Pre término</option>
                                            <option value="term">término</option>
                                            <option value="program">programado</option>
                                            <option value="induced">inducido</option>
                                        <?php } elseif ($form_term_pregnant_4 == "term") { ?>
                                            <option value="preterm">Pre término</option>
                                            <option value="term">término</option>
                                            <option value="program">programado</option>
                                            <option value="induced">inducido</option>
                                        <?php } ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <div>Seleccione una opción</div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationCustom01">
                                        <div class="spanish">
                                            Semana:
                                        </div>
                                    </label>
                                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_4" value="<?php echo $form_week_pregnant_4 ?>" />
                                    <div class="invalid-feedback">
                                        <div>Ingrese un número de semana</div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationCustom01">
                                        <div class="spanish">
                                            Año:
                                        </div>
                                    </label>
                                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_4" value="<?php echo $form_year_pregnant_4 ?>" />
                                    <div class="invalid-feedback">
                                        <div>Ingrese el año</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-top">
                                <div class="col-md-6">
                                    <label for="validationCustom01">
                                        <div class="spanish">
                                            Complicaciones:
                                        </div>
                                    </label>
                                    <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_4" value="<?php echo $form_comments_pregnant_4 ?>" />
                                    <div class="invalid-feedback">
                                        <div>Ingrese algún comentario</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pregancySection display-none">
                            <div class="form-top">
                                <div class="col-md-6">
                                    <label for="validationCustom01">
                                        <div class="spanish">
                                            Embarazo 5:
                                        </div>
                                    </label>
                                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                                    <select name="form_type_pregnant_5">
                                        <?php if ($form_type_pregnant_5 == "natural") { ?>
                                            <option value="natural" selected>Parto natural</option>
                                            <option value="cesarea">Cesárea</option>
                                        <?php } else { ?>
                                            <option value="natural">Parto natural</option>
                                            <option value="cesarea" selected>Cesárea</option>
                                        <?php } ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <div>Seleccione una opción</div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationDefault01">
                                        <div class="spanish">
                                            Estatura (m):
                                        </div>
                                    </label>
                                    <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_5" value="<?php echo $form_height_pregnant_5 ?>" />
                                    <div class="invalid-feedback">
                                        <div>Ingrese la estatura</div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationDefault01">
                                        <div class="spanish">
                                            Peso (kg):
                                        </div>
                                    </label>
                                    <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_5" value="<?php echo $form_weight_pregnant_5 ?>" />
                                    <div class="invalid-feedback">
                                        <div>Ingrese el peso</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-top">
                                <div class="col-md-6">
                                    <label for="validationCustom01">
                                        <div class="spanish">
                                            Término:
                                        </div>
                                    </label>
                                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                                    <select name="form_term_pregnant_5">
                                        <?php if ($form_term_pregnant_5 == "preterm") { ?>
                                            <option value="preterm">Pre término</option>
                                            <option value="term">término</option>
                                            <option value="program">programado</option>
                                            <option value="induced">inducido</option>
                                        <?php } elseif ($form_term_pregnant_5 == "term") { ?>
                                            <option value="preterm">Pre término</option>
                                            <option value="term">término</option>
                                            <option value="program">programado</option>
                                            <option value="induced">inducido</option>
                                        <?php } elseif ($form_term_pregnant_5 == "term") { ?>
                                            <option value="preterm">Pre término</option>
                                            <option value="term">término</option>
                                            <option value="program">programado</option>
                                            <option value="induced">inducido</option>
                                        <?php } elseif ($form_term_pregnant_5 == "term") { ?>
                                            <option value="preterm">Pre término</option>
                                            <option value="term">término</option>
                                            <option value="program">programado</option>
                                            <option value="induced">inducido</option>
                                        <?php } elseif ($form_term_pregnant_5 == "term") { ?>
                                            <option value="preterm">Pre término</option>
                                            <option value="term">término</option>
                                            <option value="program">programado</option>
                                            <option value="induced">inducido</option>
                                        <?php } ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <div>Seleccione una opción</div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationCustom01">
                                        <div class="spanish">
                                            Semana:
                                        </div>
                                    </label>
                                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_5" value="<?php echo $form_week_pregnant_5 ?>" />
                                    <div class="invalid-feedback">
                                        <div>Ingrese un número de semana</div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationCustom01">
                                        <div class="spanish">
                                            Año:
                                        </div>
                                    </label>
                                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_5" value="<?php echo $form_year_pregnant_5 ?>" />
                                    <div class="invalid-feedback">
                                        <div>Ingrese el año</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-top">
                                <div class="col-md-6">
                                    <label for="validationCustom01">
                                        <div class="spanish">
                                            Complicaciones:
                                        </div>
                                    </label>
                                    <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_5" value="<?php echo $form_comments_pregnant_5 ?>" />
                                    <div class="invalid-feedback">
                                        <div>Ingrese algún comentario</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pregancySection display-none">
                            <div class="form-top">
                                <div class="col-md-6">
                                    <label for="validationCustom01">
                                        <div class="spanish">
                                            Embarazo 6:
                                        </div>
                                    </label>
                                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                                    <select name="form_type_pregnant_6">
                                        <?php if ($form_type_pregnant_6 == "natural") { ?>
                                            <option value="natural" selected>Parto natural</option>
                                            <option value="cesarea">Cesárea</option>
                                        <?php } else { ?>
                                            <option value="natural">Parto natural</option>
                                            <option value="cesarea" selected>Cesárea</option>
                                        <?php } ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <div>Seleccione una opción</div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationDefault01">
                                        <div class="spanish">
                                            Estatura (m):
                                        </div>
                                    </label>
                                    <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_6" value="<?php echo $form_height_pregnant_6 ?>" />
                                    <div class="invalid-feedback">
                                        <div>Ingrese la estatura</div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationDefault01">
                                        <div class="spanish">
                                            Peso (kg):
                                        </div>
                                    </label>
                                    <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_6" value="<?php echo $form_weight_pregnant_6 ?>" />
                                    <div class="invalid-feedback">
                                        <div>Ingrese el peso</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-top">
                                <div class="col-md-6">
                                    <label for="validationCustom01">
                                        <div class="spanish">
                                            Término:
                                        </div>
                                    </label>
                                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                                    <select name="form_term_pregnant_6">
                                        <?php if ($form_term_pregnant_6 == "preterm") { ?>
                                            <option value="preterm">Pre término</option>
                                            <option value="term">término</option>
                                            <option value="program">programado</option>
                                            <option value="induced">inducido</option>
                                        <?php } elseif ($form_term_pregnant_6 == "term") { ?>
                                            <option value="preterm">Pre término</option>
                                            <option value="term">término</option>
                                            <option value="program">programado</option>
                                            <option value="induced">inducido</option>
                                        <?php } elseif ($form_term_pregnant_6 == "term") { ?>
                                            <option value="preterm">Pre término</option>
                                            <option value="term">término</option>
                                            <option value="program">programado</option>
                                            <option value="induced">inducido</option>
                                        <?php } elseif ($form_term_pregnant_6 == "term") { ?>
                                            <option value="preterm">Pre término</option>
                                            <option value="term">término</option>
                                            <option value="program">programado</option>
                                            <option value="induced">inducido</option>
                                        <?php } elseif ($form_term_pregnant_6 == "term") { ?>
                                            <option value="preterm">Pre término</option>
                                            <option value="term">término</option>
                                            <option value="program">programado</option>
                                            <option value="induced">inducido</option>
                                        <?php } ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <div>Seleccione una opción</div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationCustom01">
                                        <div class="spanish">
                                            Semana:
                                        </div>
                                    </label>
                                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_6" value="<?php echo $form_week_pregnant_6 ?>" />
                                    <div class="invalid-feedback">
                                        <div>Ingrese un número de semana</div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationCustom01">
                                        <div class="spanish">
                                            Año:
                                        </div>
                                    </label>
                                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_6" value="<?php echo $form_year_pregnant_6 ?>" />
                                    <div class="invalid-feedback">
                                        <div>Ingrese el año</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-top">
                                <div class="col-md-6">
                                    <label for="validationCustom01">
                                        <div class="spanish">
                                            Complicaciones:
                                        </div>
                                    </label>
                                    <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_6" value="<?php echo $form_comments_pregnant_6 ?>" />
                                    <div class="invalid-feedback">
                                        <div>Ingrese algún comentario</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } else { ?>
                    <div class="pregancySection display-none">
                        <div class="form-top">
                            <div class="col-md-6">
                                <label for="validationCustom01">
                                    <div class="spanish">
                                        Embarazo 3:
                                    </div>
                                </label>
                                <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                                <select name="form_type_pregnant_3">
                                    <?php if ($form_type_pregnant_3 == "natural") { ?>
                                        <option value="natural" selected>Parto natural</option>
                                        <option value="cesarea">Cesárea</option>
                                    <?php } else { ?>
                                        <option value="natural">Parto natural</option>
                                        <option value="cesarea" selected>Cesárea</option>
                                    <?php } ?>
                                </select>
                                <div class="invalid-feedback">
                                    <div>Seleccione una opción</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationDefault01">
                                    <div class="spanish">
                                        Estatura (m):
                                    </div>
                                </label>
                                <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_3" value="<?php echo $form_height_pregnant_3 ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese la estatura</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationDefault01">
                                    <div class="spanish">
                                        Peso (kg):
                                    </div>
                                </label>
                                <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_3" value="<?php echo $form_weight_pregnant_3 ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese el peso</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-top">
                            <div class="col-md-6">
                                <label for="validationCustom01">
                                    <div class="spanish">
                                        Término:
                                    </div>
                                </label>
                                <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                                <select name="form_term_pregnant_3">
                                    <?php if ($form_term_pregnant_3 == "preterm") { ?>
                                        <option value="preterm">Pre término</option>
                                        <option value="term">término</option>
                                        <option value="program">programado</option>
                                        <option value="induced">inducido</option>
                                    <?php } elseif ($form_term_pregnant_3 == "term") { ?>
                                        <option value="preterm">Pre término</option>
                                        <option value="term">término</option>
                                        <option value="program">programado</option>
                                        <option value="induced">inducido</option>
                                    <?php } elseif ($form_term_pregnant_3 == "term") { ?>
                                        <option value="preterm">Pre término</option>
                                        <option value="term">término</option>
                                        <option value="program">programado</option>
                                        <option value="induced">inducido</option>
                                    <?php } elseif ($form_term_pregnant_3 == "term") { ?>
                                        <option value="preterm">Pre término</option>
                                        <option value="term">término</option>
                                        <option value="program">programado</option>
                                        <option value="induced">inducido</option>
                                    <?php } elseif ($form_term_pregnant_3 == "term") { ?>
                                        <option value="preterm">Pre término</option>
                                        <option value="term">término</option>
                                        <option value="program">programado</option>
                                        <option value="induced">inducido</option>
                                    <?php } ?>
                                </select>
                                <div class="invalid-feedback">
                                    <div>Seleccione una opción</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom01">
                                    <div class="spanish">
                                        Semana:
                                    </div>
                                </label>
                                <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_3" value="<?php echo $form_week_pregnant_3 ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese un número de semana</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom01">
                                    <div class="spanish">
                                        Año:
                                    </div>
                                </label>
                                <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_3" value="<?php echo $form_year_pregnant_3 ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese el año</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-top">
                            <div class="col-md-6">
                                <label for="validationCustom01">
                                    <div class="spanish">
                                        Complicaciones:
                                    </div>
                                </label>
                                <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_3" value="<?php echo $form_comments_pregnant_3 ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese algún comentario</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pregancySection display-none">
                        <div class="form-top">
                            <div class="col-md-6">
                                <label for="validationCustom01">
                                    <div class="spanish">
                                        Embarazo 4:
                                    </div>
                                </label>
                                <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                                <select name="form_type_pregnant_4">
                                    <?php if ($form_type_pregnant_4 == "natural") { ?>
                                        <option value="natural" selected>Parto natural</option>
                                        <option value="cesarea">Cesárea</option>
                                    <?php } else { ?>
                                        <option value="natural">Parto natural</option>
                                        <option value="cesarea" selected>Cesárea</option>
                                    <?php } ?>
                                </select>
                                <div class="invalid-feedback">
                                    <div>Seleccione una opción</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationDefault01">
                                    <div class="spanish">
                                        Estatura (m):
                                    </div>
                                </label>
                                <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_4" value="<?php echo $form_height_pregnant_4 ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese la estatura</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationDefault01">
                                    <div class="spanish">
                                        Peso (kg):
                                    </div>
                                </label>
                                <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_4" value="<?php echo $form_weight_pregnant_4 ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese el peso</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-top">
                            <div class="col-md-6">
                                <label for="validationCustom01">
                                    <div class="spanish">
                                        Término:
                                    </div>
                                </label>
                                <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                                <select name="form_term_pregnant_4">
                                    <?php if ($form_term_pregnant_4 == "preterm") { ?>
                                        <option value="preterm">Pre término</option>
                                        <option value="term">término</option>
                                        <option value="program">programado</option>
                                        <option value="induced">inducido</option>
                                    <?php } elseif ($form_term_pregnant_4 == "term") { ?>
                                        <option value="preterm">Pre término</option>
                                        <option value="term">término</option>
                                        <option value="program">programado</option>
                                        <option value="induced">inducido</option>
                                    <?php } elseif ($form_term_pregnant_4 == "term") { ?>
                                        <option value="preterm">Pre término</option>
                                        <option value="term">término</option>
                                        <option value="program">programado</option>
                                        <option value="induced">inducido</option>
                                    <?php } elseif ($form_term_pregnant_4 == "term") { ?>
                                        <option value="preterm">Pre término</option>
                                        <option value="term">término</option>
                                        <option value="program">programado</option>
                                        <option value="induced">inducido</option>
                                    <?php } elseif ($form_term_pregnant_4 == "term") { ?>
                                        <option value="preterm">Pre término</option>
                                        <option value="term">término</option>
                                        <option value="program">programado</option>
                                        <option value="induced">inducido</option>
                                    <?php } ?>
                                </select>
                                <div class="invalid-feedback">
                                    <div>Seleccione una opción</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom01">
                                    <div class="spanish">
                                        Semana:
                                    </div>
                                </label>
                                <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_4" value="<?php echo $form_week_pregnant_4 ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese un número de semana</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom01">
                                    <div class="spanish">
                                        Año:
                                    </div>
                                </label>
                                <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_4" value="<?php echo $form_year_pregnant_4 ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese el año</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-top">
                            <div class="col-md-6">
                                <label for="validationCustom01">
                                    <div class="spanish">
                                        Complicaciones:
                                    </div>
                                </label>
                                <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_4" value="<?php echo $form_comments_pregnant_4 ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese algún comentario</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pregancySection display-none">
                        <div class="form-top">
                            <div class="col-md-6">
                                <label for="validationCustom01">
                                    <div class="spanish">
                                        Embarazo 5:
                                    </div>
                                </label>
                                <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                                <select name="form_type_pregnant_5">
                                    <?php if ($form_type_pregnant_5 == "natural") { ?>
                                        <option value="natural" selected>Parto natural</option>
                                        <option value="cesarea">Cesárea</option>
                                    <?php } else { ?>
                                        <option value="natural">Parto natural</option>
                                        <option value="cesarea" selected>Cesárea</option>
                                    <?php } ?>
                                </select>
                                <div class="invalid-feedback">
                                    <div>Seleccione una opción</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationDefault01">
                                    <div class="spanish">
                                        Estatura (m):
                                    </div>
                                </label>
                                <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_5" value="<?php echo $form_height_pregnant_5 ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese la estatura</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationDefault01">
                                    <div class="spanish">
                                        Peso (kg):
                                    </div>
                                </label>
                                <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_5" value="<?php echo $form_weight_pregnant_5 ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese el peso</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-top">
                            <div class="col-md-6">
                                <label for="validationCustom01">
                                    <div class="spanish">
                                        Término:
                                    </div>
                                </label>
                                <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                                <select name="form_term_pregnant_5">
                                    <?php if ($form_term_pregnant_5 == "preterm") { ?>
                                        <option value="preterm">Pre término</option>
                                        <option value="term">término</option>
                                        <option value="program">programado</option>
                                        <option value="induced">inducido</option>
                                    <?php } elseif ($form_term_pregnant_5 == "term") { ?>
                                        <option value="preterm">Pre término</option>
                                        <option value="term">término</option>
                                        <option value="program">programado</option>
                                        <option value="induced">inducido</option>
                                    <?php } elseif ($form_term_pregnant_5 == "term") { ?>
                                        <option value="preterm">Pre término</option>
                                        <option value="term">término</option>
                                        <option value="program">programado</option>
                                        <option value="induced">inducido</option>
                                    <?php } elseif ($form_term_pregnant_5 == "term") { ?>
                                        <option value="preterm">Pre término</option>
                                        <option value="term">término</option>
                                        <option value="program">programado</option>
                                        <option value="induced">inducido</option>
                                    <?php } elseif ($form_term_pregnant_5 == "term") { ?>
                                        <option value="preterm">Pre término</option>
                                        <option value="term">término</option>
                                        <option value="program">programado</option>
                                        <option value="induced">inducido</option>
                                    <?php } ?>
                                </select>
                                <div class="invalid-feedback">
                                    <div>Seleccione una opción</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom01">
                                    <div class="spanish">
                                        Semana:
                                    </div>
                                </label>
                                <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_5" value="<?php echo $form_week_pregnant_5 ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese un número de semana</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom01">
                                    <div class="spanish">
                                        Año:
                                    </div>
                                </label>
                                <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_5" value="<?php echo $form_year_pregnant_5 ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese el año</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-top">
                            <div class="col-md-6">
                                <label for="validationCustom01">
                                    <div class="spanish">
                                        Complicaciones:
                                    </div>
                                </label>
                                <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_5" value="<?php echo $form_comments_pregnant_5 ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese algún comentario</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pregancySection display-none">
                        <div class="form-top">
                            <div class="col-md-6">
                                <label for="validationCustom01">
                                    <div class="spanish">
                                        Embarazo 6:
                                    </div>
                                </label>
                                <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                                <select name="form_type_pregnant_6">
                                    <?php if ($form_type_pregnant_6 == "natural") { ?>
                                        <option value="natural" selected>Parto natural</option>
                                        <option value="cesarea">Cesárea</option>
                                    <?php } else { ?>
                                        <option value="natural">Parto natural</option>
                                        <option value="cesarea" selected>Cesárea</option>
                                    <?php } ?>
                                </select>
                                <div class="invalid-feedback">
                                    <div>Seleccione una opción</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationDefault01">
                                    <div class="spanish">
                                        Estatura (m):
                                    </div>
                                </label>
                                <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_6" value="<?php echo $form_height_pregnant_6 ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese la estatura</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationDefault01">
                                    <div class="spanish">
                                        Peso (kg):
                                    </div>
                                </label>
                                <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_6" value="<?php echo $form_weight_pregnant_6 ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese el peso</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-top">
                            <div class="col-md-6">
                                <label for="validationCustom01">
                                    <div class="spanish">
                                        Término:
                                    </div>
                                </label>
                                <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                                <select name="form_term_pregnant_6">
                                    <?php if ($form_term_pregnant_6 == "preterm") { ?>
                                        <option value="preterm">Pre término</option>
                                        <option value="term">término</option>
                                        <option value="program">programado</option>
                                        <option value="induced">inducido</option>
                                    <?php } elseif ($form_term_pregnant_6 == "term") { ?>
                                        <option value="preterm">Pre término</option>
                                        <option value="term">término</option>
                                        <option value="program">programado</option>
                                        <option value="induced">inducido</option>
                                    <?php } elseif ($form_term_pregnant_6 == "term") { ?>
                                        <option value="preterm">Pre término</option>
                                        <option value="term">término</option>
                                        <option value="program">programado</option>
                                        <option value="induced">inducido</option>
                                    <?php } elseif ($form_term_pregnant_6 == "term") { ?>
                                        <option value="preterm">Pre término</option>
                                        <option value="term">término</option>
                                        <option value="program">programado</option>
                                        <option value="induced">inducido</option>
                                    <?php } elseif ($form_term_pregnant_6 == "term") { ?>
                                        <option value="preterm">Pre término</option>
                                        <option value="term">término</option>
                                        <option value="program">programado</option>
                                        <option value="induced">inducido</option>
                                    <?php } ?>
                                </select>
                                <div class="invalid-feedback">
                                    <div>Seleccione una opción</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom01">
                                    <div class="spanish">
                                        Semana:
                                    </div>
                                </label>
                                <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_6" value="<?php echo $form_week_pregnant_6 ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese un número de semana</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom01">
                                    <div class="spanish">
                                        Año:
                                    </div>
                                </label>
                                <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_6" value="<?php echo $form_year_pregnant_6 ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese el año</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-top">
                            <div class="col-md-6">
                                <label for="validationCustom01">
                                    <div class="spanish">
                                        Complicaciones:
                                    </div>
                                </label>
                                <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_6" value="<?php echo $form_comments_pregnant_6 ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese algún comentario</div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <div class="pregancySection display-none">
                    <div class="form-top">
                        <div class="col-md-6">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Embarazo 2:
                                </div>
                            </label>
                            <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                            <select name="form_type_pregnant_2">
                                <?php if ($form_type_pregnant_2 == "natural") { ?>
                                    <option value="natural" selected>Parto natural</option>
                                    <option value="cesarea">Cesárea</option>
                                <?php } else { ?>
                                    <option value="natural">Parto natural</option>
                                    <option value="cesarea" selected>Cesárea</option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback">
                                <div>Seleccione una opción</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationDefault01">
                                <div class="spanish">
                                    Estatura (m):
                                </div>
                            </label>
                            <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_2" value="<?php echo $form_height_pregnant_2 ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese la estatura</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationDefault01">
                                <div class="spanish">
                                    Peso (kg):
                                </div>
                            </label>
                            <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_2" value="<?php echo $form_weight_pregnant_2 ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese el peso</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-top">
                        <div class="col-md-6">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Término:
                                </div>
                            </label>
                            <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                            <select name="form_term_pregnant_2">
                                <?php if ($form_term_pregnant_2 == "preterm") { ?>
                                    <option value="preterm">Pre término</option>
                                    <option value="term">término</option>
                                    <option value="program">programado</option>
                                    <option value="induced">inducido</option>
                                <?php } elseif ($form_term_pregnant_2 == "term") { ?>
                                    <option value="preterm">Pre término</option>
                                    <option value="term">término</option>
                                    <option value="program">programado</option>
                                    <option value="induced">inducido</option>
                                <?php } elseif ($form_term_pregnant_2 == "term") { ?>
                                    <option value="preterm">Pre término</option>
                                    <option value="term">término</option>
                                    <option value="program">programado</option>
                                    <option value="induced">inducido</option>
                                <?php } elseif ($form_term_pregnant_2 == "term") { ?>
                                    <option value="preterm">Pre término</option>
                                    <option value="term">término</option>
                                    <option value="program">programado</option>
                                    <option value="induced">inducido</option>
                                <?php } elseif ($form_term_pregnant_2 == "term") { ?>
                                    <option value="preterm">Pre término</option>
                                    <option value="term">término</option>
                                    <option value="program">programado</option>
                                    <option value="induced">inducido</option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback">
                                <div>Seleccione una opción</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Semana:
                                </div>
                            </label>
                            <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_2" value="<?php echo $form_week_pregnant_2 ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese un número de semana</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Año:
                                </div>
                            </label>
                            <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_2" value="<?php echo $form_year_pregnant_2 ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese el año</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-top">
                        <div class="col-md-6">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Complicaciones:
                                </div>
                            </label>
                            <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_2" value="<?php echo $form_comments_pregnant_2 ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese algún comentario</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pregancySection display-none">
                    <div class="form-top">
                        <div class="col-md-6">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Embarazo 3:
                                </div>
                            </label>
                            <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                            <select name="form_type_pregnant_3">
                                <?php if ($form_type_pregnant_3 == "natural") { ?>
                                    <option value="natural" selected>Parto natural</option>
                                    <option value="cesarea">Cesárea</option>
                                <?php } else { ?>
                                    <option value="natural">Parto natural</option>
                                    <option value="cesarea" selected>Cesárea</option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback">
                                <div>Seleccione una opción</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationDefault01">
                                <div class="spanish">
                                    Estatura (m):
                                </div>
                            </label>
                            <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_3" value="<?php echo $form_height_pregnant_3 ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese la estatura</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationDefault01">
                                <div class="spanish">
                                    Peso (kg):
                                </div>
                            </label>
                            <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_3" value="<?php echo $form_weight_pregnant_3 ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese el peso</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-top">
                        <div class="col-md-6">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Término:
                                </div>
                            </label>
                            <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                            <select name="form_term_pregnant_3">
                                <?php if ($form_term_pregnant_3 == "preterm") { ?>
                                    <option value="preterm">Pre término</option>
                                    <option value="term">término</option>
                                    <option value="program">programado</option>
                                    <option value="induced">inducido</option>
                                <?php } elseif ($form_term_pregnant_3 == "term") { ?>
                                    <option value="preterm">Pre término</option>
                                    <option value="term">término</option>
                                    <option value="program">programado</option>
                                    <option value="induced">inducido</option>
                                <?php } elseif ($form_term_pregnant_3 == "term") { ?>
                                    <option value="preterm">Pre término</option>
                                    <option value="term">término</option>
                                    <option value="program">programado</option>
                                    <option value="induced">inducido</option>
                                <?php } elseif ($form_term_pregnant_3 == "term") { ?>
                                    <option value="preterm">Pre término</option>
                                    <option value="term">término</option>
                                    <option value="program">programado</option>
                                    <option value="induced">inducido</option>
                                <?php } elseif ($form_term_pregnant_3 == "term") { ?>
                                    <option value="preterm">Pre término</option>
                                    <option value="term">término</option>
                                    <option value="program">programado</option>
                                    <option value="induced">inducido</option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback">
                                <div>Seleccione una opción</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Semana:
                                </div>
                            </label>
                            <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_3" value="<?php echo $form_week_pregnant_3 ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese un número de semana</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Año:
                                </div>
                            </label>
                            <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_3" value="<?php echo $form_year_pregnant_3 ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese el año</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-top">
                        <div class="col-md-6">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Complicaciones:
                                </div>
                            </label>
                            <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_3" value="<?php echo $form_comments_pregnant_3 ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese algún comentario</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pregancySection display-none">
                    <div class="form-top">
                        <div class="col-md-6">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Embarazo 4:
                                </div>
                            </label>
                            <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                            <select name="form_type_pregnant_4">
                                <?php if ($form_type_pregnant_4 == "natural") { ?>
                                    <option value="natural" selected>Parto natural</option>
                                    <option value="cesarea">Cesárea</option>
                                <?php } else { ?>
                                    <option value="natural">Parto natural</option>
                                    <option value="cesarea" selected>Cesárea</option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback">
                                <div>Seleccione una opción</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationDefault01">
                                <div class="spanish">
                                    Estatura (m):
                                </div>
                            </label>
                            <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_4" value="<?php echo $form_height_pregnant_4 ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese la estatura</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationDefault01">
                                <div class="spanish">
                                    Peso (kg):
                                </div>
                            </label>
                            <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_4" value="<?php echo $form_weight_pregnant_4 ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese el peso</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-top">
                        <div class="col-md-6">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Término:
                                </div>
                            </label>
                            <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                            <select name="form_term_pregnant_4">
                                <?php if ($form_term_pregnant_4 == "preterm") { ?>
                                    <option value="preterm">Pre término</option>
                                    <option value="term">término</option>
                                    <option value="program">programado</option>
                                    <option value="induced">inducido</option>
                                <?php } elseif ($form_term_pregnant_4 == "term") { ?>
                                    <option value="preterm">Pre término</option>
                                    <option value="term">término</option>
                                    <option value="program">programado</option>
                                    <option value="induced">inducido</option>
                                <?php } elseif ($form_term_pregnant_4 == "term") { ?>
                                    <option value="preterm">Pre término</option>
                                    <option value="term">término</option>
                                    <option value="program">programado</option>
                                    <option value="induced">inducido</option>
                                <?php } elseif ($form_term_pregnant_4 == "term") { ?>
                                    <option value="preterm">Pre término</option>
                                    <option value="term">término</option>
                                    <option value="program">programado</option>
                                    <option value="induced">inducido</option>
                                <?php } elseif ($form_term_pregnant_4 == "term") { ?>
                                    <option value="preterm">Pre término</option>
                                    <option value="term">término</option>
                                    <option value="program">programado</option>
                                    <option value="induced">inducido</option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback">
                                <div>Seleccione una opción</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Semana:
                                </div>
                            </label>
                            <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_4" value="<?php echo $form_week_pregnant_4 ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese un número de semana</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Año:
                                </div>
                            </label>
                            <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_4" value="<?php echo $form_year_pregnant_4 ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese el año</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-top">
                        <div class="col-md-6">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Complicaciones:
                                </div>
                            </label>
                            <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_4" value="<?php echo $form_comments_pregnant_4 ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese algún comentario</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pregancySection display-none">
                    <div class="form-top">
                        <div class="col-md-6">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Embarazo 5:
                                </div>
                            </label>
                            <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                            <select name="form_type_pregnant_5">
                                <?php if ($form_type_pregnant_5 == "natural") { ?>
                                    <option value="natural" selected>Parto natural</option>
                                    <option value="cesarea">Cesárea</option>
                                <?php } else { ?>
                                    <option value="natural">Parto natural</option>
                                    <option value="cesarea" selected>Cesárea</option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback">
                                <div>Seleccione una opción</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationDefault01">
                                <div class="spanish">
                                    Estatura (m):
                                </div>
                            </label>
                            <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_5" value="<?php echo $form_height_pregnant_5 ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese la estatura</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationDefault01">
                                <div class="spanish">
                                    Peso (kg):
                                </div>
                            </label>
                            <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_5" value="<?php echo $form_weight_pregnant_5 ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese el peso</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-top">
                        <div class="col-md-6">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Término:
                                </div>
                            </label>
                            <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                            <select name="form_term_pregnant_5">
                                <?php if ($form_term_pregnant_5 == "preterm") { ?>
                                    <option value="preterm">Pre término</option>
                                    <option value="term">término</option>
                                    <option value="program">programado</option>
                                    <option value="induced">inducido</option>
                                <?php } elseif ($form_term_pregnant_5 == "term") { ?>
                                    <option value="preterm">Pre término</option>
                                    <option value="term">término</option>
                                    <option value="program">programado</option>
                                    <option value="induced">inducido</option>
                                <?php } elseif ($form_term_pregnant_5 == "term") { ?>
                                    <option value="preterm">Pre término</option>
                                    <option value="term">término</option>
                                    <option value="program">programado</option>
                                    <option value="induced">inducido</option>
                                <?php } elseif ($form_term_pregnant_5 == "term") { ?>
                                    <option value="preterm">Pre término</option>
                                    <option value="term">término</option>
                                    <option value="program">programado</option>
                                    <option value="induced">inducido</option>
                                <?php } elseif ($form_term_pregnant_5 == "term") { ?>
                                    <option value="preterm">Pre término</option>
                                    <option value="term">término</option>
                                    <option value="program">programado</option>
                                    <option value="induced">inducido</option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback">
                                <div>Seleccione una opción</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Semana:
                                </div>
                            </label>
                            <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_5" value="<?php echo $form_week_pregnant_5 ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese un número de semana</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Año:
                                </div>
                            </label>
                            <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_5" value="<?php echo $form_year_pregnant_5 ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese el año</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-top">
                        <div class="col-md-6">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Complicaciones:
                                </div>
                            </label>
                            <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_5" value="<?php echo $form_comments_pregnant_5 ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese algún comentario</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pregancySection display-none">
                    <div class="form-top">
                        <div class="col-md-6">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Embarazo 6:
                                </div>
                            </label>
                            <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                            <select name="form_type_pregnant_6">
                                <?php if ($form_type_pregnant_6 == "natural") { ?>
                                    <option value="natural" selected>Parto natural</option>
                                    <option value="cesarea">Cesárea</option>
                                <?php } else { ?>
                                    <option value="natural">Parto natural</option>
                                    <option value="cesarea" selected>Cesárea</option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback">
                                <div>Seleccione una opción</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationDefault01">
                                <div class="spanish">
                                    Estatura (m):
                                </div>
                            </label>
                            <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_6" value="<?php echo $form_height_pregnant_6 ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese la estatura</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationDefault01">
                                <div class="spanish">
                                    Peso (kg):
                                </div>
                            </label>
                            <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_6" value="<?php echo $form_weight_pregnant_6 ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese el peso</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-top">
                        <div class="col-md-6">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Término:
                                </div>
                            </label>
                            <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                            <select name="form_term_pregnant_6">
                                <?php if ($form_term_pregnant_6 == "preterm") { ?>
                                    <option value="preterm">Pre término</option>
                                    <option value="term">término</option>
                                    <option value="program">programado</option>
                                    <option value="induced">inducido</option>
                                <?php } elseif ($form_term_pregnant_6 == "term") { ?>
                                    <option value="preterm">Pre término</option>
                                    <option value="term">término</option>
                                    <option value="program">programado</option>
                                    <option value="induced">inducido</option>
                                <?php } elseif ($form_term_pregnant_6 == "term") { ?>
                                    <option value="preterm">Pre término</option>
                                    <option value="term">término</option>
                                    <option value="program">programado</option>
                                    <option value="induced">inducido</option>
                                <?php } elseif ($form_term_pregnant_6 == "term") { ?>
                                    <option value="preterm">Pre término</option>
                                    <option value="term">término</option>
                                    <option value="program">programado</option>
                                    <option value="induced">inducido</option>
                                <?php } elseif ($form_term_pregnant_6 == "term") { ?>
                                    <option value="preterm">Pre término</option>
                                    <option value="term">término</option>
                                    <option value="program">programado</option>
                                    <option value="induced">inducido</option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback">
                                <div>Seleccione una opción</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Semana:
                                </div>
                            </label>
                            <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_6" value="<?php echo $form_week_pregnant_6 ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese un número de semana</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Año:
                                </div>
                            </label>
                            <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_6" value="<?php echo $form_year_pregnant_6 ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese el año</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-top">
                        <div class="col-md-6">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Complicaciones:
                                </div>
                            </label>
                            <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_6" value="<?php echo $form_comments_pregnant_6 ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese algún comentario</div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } else { ?>
            <div class="pregancySection display-none">
                <div class="form-top">
                    <div class="col-md-6">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Embarazo 1:
                            </div>
                        </label>
                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                        <select name="form_type_pregnant_1">
                            <?php if ($form_type_pregnant_1 == "natural") { ?>
                                <option value="natural" selected>Parto natural</option>
                                <option value="cesarea">Cesárea</option>
                            <?php } else { ?>
                                <option value="natural">Parto natural</option>
                                <option value="cesarea" selected>Cesárea</option>
                            <?php } ?>
                        </select>
                        <div class="invalid-feedback">
                            <div>Seleccione una opción</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Estatura (m):
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_1" value="<?php echo $form_height_pregnant_1 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese la estatura</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Peso (kg):
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_1" value="<?php echo $form_weight_pregnant_1 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese el peso</div>
                        </div>
                    </div>
                </div>
                <div class="form-top">
                    <div class="col-md-6">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Término:
                            </div>
                        </label>
                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                        <select name="form_term_pregnant_1">
                            <?php if ($form_term_pregnant_1 == "preterm") { ?>
                                <option value="preterm">Pre término</option>
                                <option value="term">término</option>
                                <option value="program">programado</option>
                                <option value="induced">inducido</option>
                            <?php } elseif ($form_term_pregnant_1 == "term") { ?>
                                <option value="preterm">Pre término</option>
                                <option value="term">término</option>
                                <option value="program">programado</option>
                                <option value="induced">inducido</option>
                            <?php } elseif ($form_term_pregnant_1 == "term") { ?>
                                <option value="preterm">Pre término</option>
                                <option value="term">término</option>
                                <option value="program">programado</option>
                                <option value="induced">inducido</option>
                            <?php } elseif ($form_term_pregnant_1 == "term") { ?>
                                <option value="preterm">Pre término</option>
                                <option value="term">término</option>
                                <option value="program">programado</option>
                                <option value="induced">inducido</option>
                            <?php } elseif ($form_term_pregnant_1 == "term") { ?>
                                <option value="preterm">Pre término</option>
                                <option value="term">término</option>
                                <option value="program">programado</option>
                                <option value="induced">inducido</option>
                            <?php } ?>
                        </select>
                        <div class="invalid-feedback">
                            <div>Seleccione una opción</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Semana:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_1" value="<?php echo $form_week_pregnant_1 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese un número de semana</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Año:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_1" value="<?php echo $form_year_pregnant_1 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese el año</div>
                        </div>
                    </div>
                </div>
                <div class="form-top">
                    <div class="col-md-6">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Complicaciones:
                            </div>
                        </label>
                        <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_1" value="<?php echo $form_comments_pregnant_1 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese algún comentario</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pregancySection display-none">
                <div class="form-top">
                    <div class="col-md-6">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Embarazo 2:
                            </div>
                        </label>
                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                        <select name="form_type_pregnant_2">
                            <?php if ($form_type_pregnant_2 == "natural") { ?>
                                <option value="natural" selected>Parto natural</option>
                                <option value="cesarea">Cesárea</option>
                            <?php } else { ?>
                                <option value="natural">Parto natural</option>
                                <option value="cesarea" selected>Cesárea</option>
                            <?php } ?>
                        </select>
                        <div class="invalid-feedback">
                            <div>Seleccione una opción</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Estatura (m):
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_2" value="<?php echo $form_height_pregnant_2 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese la estatura</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Peso (kg):
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_2" value="<?php echo $form_weight_pregnant_2 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese el peso</div>
                        </div>
                    </div>
                </div>
                <div class="form-top">
                    <div class="col-md-6">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Término:
                            </div>
                        </label>
                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                        <select name="form_term_pregnant_2">
                            <option value="preterm">Pre término</option>
                            <option value="term">término</option>
                            <option value="program">programado</option>
                            <option value="induced">inducido</option>
                        </select>
                        <div class="invalid-feedback">
                            <div>Seleccione una opción</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Semana:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_2" value="<?php echo $form_week_pregnant_2 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese un número de semana</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Año:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_2" value="<?php echo $form_year_pregnant_2 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese el año</div>
                        </div>
                    </div>
                </div>
                <div class="form-top">
                    <div class="col-md-6">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Complicaciones:
                            </div>
                        </label>
                        <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_2" value="<?php echo $form_comments_pregnant_2 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese algún comentario</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pregancySection display-none">
                <div class="form-top">
                    <div class="col-md-6">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Embarazo 3:
                            </div>
                        </label>
                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                        <select name="form_type_pregnant_3">
                            <?php if ($form_type_pregnant_3 == "natural") { ?>
                                <option value="natural" selected>Parto natural</option>
                                <option value="cesarea">Cesárea</option>
                            <?php } else { ?>
                                <option value="natural">Parto natural</option>
                                <option value="cesarea" selected>Cesárea</option>
                            <?php } ?>
                        </select>
                        <div class="invalid-feedback">
                            <div>Seleccione una opción</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Estatura (m):
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_3" value="<?php echo $form_height_pregnant_3 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese la estatura</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Peso (kg):
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_3" value="<?php echo $form_weight_pregnant_3 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese el peso</div>
                        </div>
                    </div>
                </div>
                <div class="form-top">
                    <div class="col-md-6">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Término:
                            </div>
                        </label>
                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                        <select name="form_term_pregnant_3">
                            <?php if ($form_term_pregnant_3 == "preterm") { ?>
                                <option value="preterm">Pre término</option>
                                <option value="term">término</option>
                                <option value="program">programado</option>
                                <option value="induced">inducido</option>
                            <?php } elseif ($form_term_pregnant_3 == "term") { ?>
                                <option value="preterm">Pre término</option>
                                <option value="term">término</option>
                                <option value="program">programado</option>
                                <option value="induced">inducido</option>
                            <?php } elseif ($form_term_pregnant_3 == "term") { ?>
                                <option value="preterm">Pre término</option>
                                <option value="term">término</option>
                                <option value="program">programado</option>
                                <option value="induced">inducido</option>
                            <?php } elseif ($form_term_pregnant_3 == "term") { ?>
                                <option value="preterm">Pre término</option>
                                <option value="term">término</option>
                                <option value="program">programado</option>
                                <option value="induced">inducido</option>
                            <?php } elseif ($form_term_pregnant_3 == "term") { ?>
                                <option value="preterm">Pre término</option>
                                <option value="term">término</option>
                                <option value="program">programado</option>
                                <option value="induced">inducido</option>
                            <?php } ?>
                        </select>
                        <div class="invalid-feedback">
                            <div>Seleccione una opción</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Semana:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_3" value="<?php echo $form_week_pregnant_3 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese un número de semana</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Año:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_3" value="<?php echo $form_year_pregnant_3 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese el año</div>
                        </div>
                    </div>
                </div>
                <div class="form-top">
                    <div class="col-md-6">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Complicaciones:
                            </div>
                        </label>
                        <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_3" value="<?php echo $form_comments_pregnant_3 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese algún comentario</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pregancySection display-none">
                <div class="form-top">
                    <div class="col-md-6">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Embarazo 4:
                            </div>
                        </label>
                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                        <select name="form_type_pregnant_4">
                            <?php if ($form_type_pregnant_4 == "natural") { ?>
                                <option value="natural" selected>Parto natural</option>
                                <option value="cesarea">Cesárea</option>
                            <?php } else { ?>
                                <option value="natural">Parto natural</option>
                                <option value="cesarea" selected>Cesárea</option>
                            <?php } ?>
                        </select>
                        <div class="invalid-feedback">
                            <div>Seleccione una opción</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Estatura (m):
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_4" value="<?php echo $form_height_pregnant_4 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese la estatura</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Peso (kg):
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_4" value="<?php echo $form_weight_pregnant_4 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese el peso</div>
                        </div>
                    </div>
                </div>
                <div class="form-top">
                    <div class="col-md-6">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Término:
                            </div>
                        </label>
                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                        <select name="form_term_pregnant_4">
                            <?php if ($form_term_pregnant_4 == "preterm") { ?>
                                <option value="preterm">Pre término</option>
                                <option value="term">término</option>
                                <option value="program">programado</option>
                                <option value="induced">inducido</option>
                            <?php } elseif ($form_term_pregnant_4 == "term") { ?>
                                <option value="preterm">Pre término</option>
                                <option value="term">término</option>
                                <option value="program">programado</option>
                                <option value="induced">inducido</option>
                            <?php } elseif ($form_term_pregnant_4 == "term") { ?>
                                <option value="preterm">Pre término</option>
                                <option value="term">término</option>
                                <option value="program">programado</option>
                                <option value="induced">inducido</option>
                            <?php } elseif ($form_term_pregnant_4 == "term") { ?>
                                <option value="preterm">Pre término</option>
                                <option value="term">término</option>
                                <option value="program">programado</option>
                                <option value="induced">inducido</option>
                            <?php } elseif ($form_term_pregnant_4 == "term") { ?>
                                <option value="preterm">Pre término</option>
                                <option value="term">término</option>
                                <option value="program">programado</option>
                                <option value="induced">inducido</option>
                            <?php } ?>
                        </select>
                        <div class="invalid-feedback">
                            <div>Seleccione una opción</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Semana:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_4" value="<?php echo $form_week_pregnant_4 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese un número de semana</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Año:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_4" value="<?php echo $form_year_pregnant_4 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese el año</div>
                        </div>
                    </div>
                </div>
                <div class="form-top">
                    <div class="col-md-6">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Complicaciones:
                            </div>
                        </label>
                        <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_4" value="<?php echo $form_comments_pregnant_4 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese algún comentario</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pregancySection display-none">
                <div class="form-top">
                    <div class="col-md-6">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Embarazo 5:
                            </div>
                        </label>
                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                        <select name="form_type_pregnant_5">
                            <?php if ($form_type_pregnant_5 == "natural") { ?>
                                <option value="natural" selected>Parto natural</option>
                                <option value="cesarea">Cesárea</option>
                            <?php } else { ?>
                                <option value="natural">Parto natural</option>
                                <option value="cesarea" selected>Cesárea</option>
                            <?php } ?>
                        </select>
                        <div class="invalid-feedback">
                            <div>Seleccione una opción</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Estatura (m):
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_5" value="<?php echo $form_height_pregnant_5 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese la estatura</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Peso (kg):
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_5" value="<?php echo $form_weight_pregnant_5 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese el peso</div>
                        </div>
                    </div>
                </div>
                <div class="form-top">
                    <div class="col-md-6">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Término:
                            </div>
                        </label>
                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                        <select name="form_term_pregnant_5">
                            <?php if ($form_term_pregnant_5 == "preterm") { ?>
                                <option value="preterm">Pre término</option>
                                <option value="term">término</option>
                                <option value="program">programado</option>
                                <option value="induced">inducido</option>
                            <?php } elseif ($form_term_pregnant_5 == "term") { ?>
                                <option value="preterm">Pre término</option>
                                <option value="term">término</option>
                                <option value="program">programado</option>
                                <option value="induced">inducido</option>
                            <?php } elseif ($form_term_pregnant_5 == "term") { ?>
                                <option value="preterm">Pre término</option>
                                <option value="term">término</option>
                                <option value="program">programado</option>
                                <option value="induced">inducido</option>
                            <?php } elseif ($form_term_pregnant_5 == "term") { ?>
                                <option value="preterm">Pre término</option>
                                <option value="term">término</option>
                                <option value="program">programado</option>
                                <option value="induced">inducido</option>
                            <?php } elseif ($form_term_pregnant_5 == "term") { ?>
                                <option value="preterm">Pre término</option>
                                <option value="term">término</option>
                                <option value="program">programado</option>
                                <option value="induced">inducido</option>
                            <?php } ?>
                        </select>
                        <div class="invalid-feedback">
                            <div>Seleccione una opción</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Semana:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_5" value="<?php echo $form_week_pregnant_5 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese un número de semana</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Año:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_5" value="<?php echo $form_year_pregnant_5 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese el año</div>
                        </div>
                    </div>
                </div>
                <div class="form-top">
                    <div class="col-md-6">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Complicaciones:
                            </div>
                        </label>
                        <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_5" value="<?php echo $form_comments_pregnant_5 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese algún comentario</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pregancySection display-none">
                <div class="form-top">
                    <div class="col-md-6">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Embarazo 6:
                            </div>
                        </label>
                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                        <select name="form_type_pregnant_6">
                            <?php if ($form_type_pregnant_6 == "natural") { ?>
                                <option value="natural" selected>Parto natural</option>
                                <option value="cesarea">Cesárea</option>
                            <?php } else { ?>
                                <option value="natural">Parto natural</option>
                                <option value="cesarea" selected>Cesárea</option>
                            <?php } ?>
                        </select>
                        <div class="invalid-feedback">
                            <div>Seleccione una opción</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Estatura (m):
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_6" value="<?php echo $form_height_pregnant_6 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese la estatura</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Peso (kg):
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_6" value="<?php echo $form_weight_pregnant_6 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese el peso</div>
                        </div>
                    </div>
                </div>
                <div class="form-top">
                    <div class="col-md-6">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Término:
                            </div>
                        </label>
                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                        <select name="form_term_pregnant_6">
                            <?php if ($form_term_pregnant_6 == "preterm") { ?>
                                <option value="preterm">Pre término</option>
                                <option value="term">término</option>
                                <option value="program">programado</option>
                                <option value="induced">inducido</option>
                            <?php } elseif ($form_term_pregnant_6 == "term") { ?>
                                <option value="preterm">Pre término</option>
                                <option value="term">término</option>
                                <option value="program">programado</option>
                                <option value="induced">inducido</option>
                            <?php } elseif ($form_term_pregnant_6 == "term") { ?>
                                <option value="preterm">Pre término</option>
                                <option value="term">término</option>
                                <option value="program">programado</option>
                                <option value="induced">inducido</option>
                            <?php } elseif ($form_term_pregnant_6 == "term") { ?>
                                <option value="preterm">Pre término</option>
                                <option value="term">término</option>
                                <option value="program">programado</option>
                                <option value="induced">inducido</option>
                            <?php } elseif ($form_term_pregnant_6 == "term") { ?>
                                <option value="preterm">Pre término</option>
                                <option value="term">término</option>
                                <option value="program">programado</option>
                                <option value="induced">inducido</option>
                            <?php } ?>
                        </select>
                        <div class="invalid-feedback">
                            <div>Seleccione una opción</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Semana:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_6" value="<?php echo $form_week_pregnant_6 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese un número de semana</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Año:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_6" value="<?php echo $form_year_pregnant_6 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese el año</div>
                        </div>
                    </div>
                </div>
                <div class="form-top">
                    <div class="col-md-6">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Complicaciones:
                            </div>
                        </label>
                        <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_6" value="<?php echo $form_comments_pregnant_6 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese algún comentario</div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="form-btn">
            <?php if ($num_pregnants > 0) { ?>
                <button class="btn btn-send" id="pregnancy">
                    <div>Agregar embarazo</div>
                </button>
                <button class="btn btn-send" id="pregnancyRmv">
                    <div>Remover embarazo</div>
                </button>
            <?php } else { ?>
                <button class="btn btn-send" id="pregnancy">
                    <div>Agregar embarazo</div>
                </button>
                <button class="btn btn-send display-none" id="pregnancyRmv">
                    <div>Remover embarazo</div>
                </button>
            <?php } ?>
        </div>
        <div class="form-top">
            <!-- <div class="col-md-6 form-top-element">
                <label for="validationCustom01">
                    <div class="spanish">
                        Abortos:
                    </div>
                </label>
                <select name="form_abort" onchange="abortEnable()" id="enableAbort">
                    <option value="no">No</option>
                    <option value="yes">Sí</option>
                </select>
                <div class="invalid-feedback">
                    <div>Ingrese la edad</div>
                </div>
            </div> -->
            <!-- <div class="col-md-6 form-top-element display-none" id="abortEnable1">
                    <label for="validationDefault01">
                        <div class="spanish">
                            Número de abortos:
                        </div>
                    </label>
                    <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_name" />
                    <div class="invalid-feedback">
                        <div>Ingrese la estatura</div>
                    </div>
                </div> -->
        </div>
        <?php if ($num_aborts > 0) { ?>
            <div class="abortSection">
                <div class="form-top">
                    <div class="col-md-3">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Aborto 1:
                            </div>
                        </label>
                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                        <select name="form_type_abort_1">
                            <?php if ($form_type_abort_1 == "Voluntario") { ?>
                                <option value="Voluntario" selected>Voluntario</option>
                                <option value="Involuntario">Involuntario</option>
                            <?php } elseif ($form_type_abort_1 == "Involuntario") { ?>
                                <option value="Voluntario">Voluntario</option>
                                <option value="Involuntario" selected>Involuntario</option>
                            <?php } ?>
                        </select>
                        <div class="invalid-feedback">
                            <div>Seleccione una opción</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Año:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_year_abort_1" value="<?php echo $form_year_abort_1 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese el año</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Método:
                            </div>
                        </label>
                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                        <select name="form_method_abort_1">
                            <?php if ($form_method_abort_1 == "Bioquímico") { ?>
                                <option value="Bioquímico" selected>Bioquímico</option>
                                <option value="Legrado">Legrado</option>
                                <option value="Espontáneo">Espontáneo</option>
                            <?php } elseif ($form_method_abort_1 == "Legrado") { ?>
                                <option value="Bioquímico">Bioquímico</option>
                                <option value="Legrado" selected>Legrado</option>
                                <option value="Espontáneo">Espontáneo</option>
                            <?php } elseif ($form_method_abort_1 == "Espontáneo") { ?>
                                <option value="Bioquímico">Bioquímico</option>
                                <option value="Legrado">Legrado</option>
                                <option value="Espontáneo" selected>Espontáneo</option>
                            <?php } ?>
                        </select>
                        <div class="invalid-feedback">
                            <div>Seleccione una opción</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Semana:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_week_abort_1" value="<?php echo $form_week_abort_1; ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese el año</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationDefault01">
                        <div class="spanish">
                            Complicaciones:
                        </div>
                    </label>
                    <input type="text" class="form-control-phenotype" id="validationDefault01" name="form_comments_abort_1" value="<?php echo $form_comments_abort_1; ?>" />
                    <div class="invalid-feedback">
                        <div>Ingrese el año</div>
                    </div>
                </div>
            </div>
            <?php if ($num_aborts > 1) { ?>
                <div class="abortSection">
                    <div class="form-top">
                        <div class="col-md-3">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Aborto 2:
                                </div>
                            </label>
                            <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                            <select name="form_type_abort_2">
                                <?php if ($form_type_abort_2 == "Voluntario") { ?>
                                    <option value="Voluntario" selected>Voluntario</option>
                                    <option value="Involuntario">Involuntario</option>
                                <?php } elseif ($form_type_abort_2 == "Involuntario") { ?>
                                    <option value="Voluntario">Voluntario</option>
                                    <option value="Involuntario" selected>Involuntario</option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback">
                                <div>Seleccione una opción</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationDefault01">
                                <div class="spanish">
                                    Año:
                                </div>
                            </label>
                            <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_year_abort_2" value="<?php echo $form_year_abort_2 ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese el año</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Método:
                                </div>
                            </label>
                            <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                            <select name="form_method_abort_2">
                                <?php if ($form_method_abort_2 == "Bioquímico") { ?>
                                    <option value="Bioquímico" selected>Bioquímico</option>
                                    <option value="Legrado">Legrado</option>
                                    <option value="Espontáneo">Espontáneo</option>
                                <?php } elseif ($form_method_abort_2 == "Legrado") { ?>
                                    <option value="Bioquímico">Bioquímico</option>
                                    <option value="Legrado" selected>Legrado</option>
                                    <option value="Espontáneo">Espontáneo</option>
                                <?php } elseif ($form_method_abort_2 == "Espontáneo") { ?>
                                    <option value="Bioquímico">Bioquímico</option>
                                    <option value="Legrado">Legrado</option>
                                    <option value="Espontáneo" selected>Espontáneo</option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback">
                                <div>Seleccione una opción</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationDefault01">
                                <div class="spanish">
                                    Semana:
                                </div>
                            </label>
                            <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_week_abort_2" value="<?php echo $form_week_abort_2; ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese el año</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Complicaciones:
                            </div>
                        </label>
                        <input type="text" class="form-control-phenotype" id="validationDefault01" name="form_comments_abort_2" value="<?php echo $form_comments_abort_2; ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese el año</div>
                        </div>
                    </div>
                </div>
                <?php if ($num_aborts > 2) { ?>
                    <div class="abortSection">
                        <div class="form-top">
                            <div class="col-md-3">
                                <label for="validationCustom01">
                                    <div class="spanish">
                                        Aborto 3:
                                    </div>
                                </label>
                                <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                                <select name="form_type_abort_3">
                                    <?php if ($form_type_abort_3 == "Voluntario") { ?>
                                        <option value="Voluntario" selected>Voluntario</option>
                                        <option value="Involuntario">Involuntario</option>
                                    <?php } elseif ($form_type_abort_3 == "Involuntario") { ?>
                                        <option value="Voluntario">Voluntario</option>
                                        <option value="Involuntario" selected>Involuntario</option>
                                    <?php } ?>
                                </select>
                                <div class="invalid-feedback">
                                    <div>Seleccione una opción</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationDefault01">
                                    <div class="spanish">
                                        Año:
                                    </div>
                                </label>
                                <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_year_abort_3" value="<?php echo $form_year_abort_3 ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese el año</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom01">
                                    <div class="spanish">
                                        Método:
                                    </div>
                                </label>
                                <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                                <select name="form_method_abort_3">
                                    <?php if ($form_method_abort_3 == "Bioquímico") { ?>
                                        <option value="Bioquímico" selected>Bioquímico</option>
                                        <option value="Legrado">Legrado</option>
                                        <option value="Espontáneo">Espontáneo</option>
                                    <?php } elseif ($form_method_abort_3 == "Legrado") { ?>
                                        <option value="Bioquímico">Bioquímico</option>
                                        <option value="Legrado" selected>Legrado</option>
                                        <option value="Espontáneo">Espontáneo</option>
                                    <?php } elseif ($form_method_abort_3 == "Espontáneo") { ?>
                                        <option value="Bioquímico">Bioquímico</option>
                                        <option value="Legrado">Legrado</option>
                                        <option value="Espontáneo" selected>Espontáneo</option>
                                    <?php } ?>
                                </select>
                                <div class="invalid-feedback">
                                    <div>Seleccione una opción</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationDefault01">
                                    <div class="spanish">
                                        Semana:
                                    </div>
                                </label>
                                <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_week_abort_3" value="<?php echo $form_week_abort_3; ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese el año</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefault01">
                                <div class="spanish">
                                    Complicaciones:
                                </div>
                            </label>
                            <input type="text" class="form-control-phenotype" id="validationDefault01" name="form_comments_abort_3" value="<?php echo $form_comments_abort_3; ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese el año</div>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="abortSection display-none">
                        <div class="form-top">
                            <div class="col-md-3">
                                <label for="validationCustom01">
                                    <div class="spanish">
                                        Aborto 3:
                                    </div>
                                </label>
                                <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                                <select name="form_type_abort_3">
                                    <?php if ($form_type_abort_3 == "Voluntario") { ?>
                                        <option value="Voluntario" selected>Voluntario</option>
                                        <option value="Involuntario">Involuntario</option>
                                    <?php } elseif ($form_type_abort_3 == "Involuntario") { ?>
                                        <option value="Voluntario">Voluntario</option>
                                        <option value="Involuntario" selected>Involuntario</option>
                                    <?php } ?>
                                </select>
                                <div class="invalid-feedback">
                                    <div>Seleccione una opción</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationDefault01">
                                    <div class="spanish">
                                        Año:
                                    </div>
                                </label>
                                <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_year_abort_3" value="<?php echo $form_year_abort_3 ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese el año</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom01">
                                    <div class="spanish">
                                        Método:
                                    </div>
                                </label>
                                <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                                <select name="form_method_abort_3">
                                    <?php if ($form_method_abort_3 == "Bioquímico") { ?>
                                        <option value="Bioquímico" selected>Bioquímico</option>
                                        <option value="Legrado">Legrado</option>
                                        <option value="Espontáneo">Espontáneo</option>
                                    <?php } elseif ($form_method_abort_3 == "Legrado") { ?>
                                        <option value="Bioquímico">Bioquímico</option>
                                        <option value="Legrado" selected>Legrado</option>
                                        <option value="Espontáneo">Espontáneo</option>
                                    <?php } elseif ($form_method_abort_3 == "Espontáneo") { ?>
                                        <option value="Bioquímico">Bioquímico</option>
                                        <option value="Legrado">Legrado</option>
                                        <option value="Espontáneo" selected>Espontáneo</option>
                                    <?php } ?>
                                </select>
                                <div class="invalid-feedback">
                                    <div>Seleccione una opción</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationDefault01">
                                    <div class="spanish">
                                        Semana:
                                    </div>
                                </label>
                                <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_week_abort_3" value="<?php echo $form_week_abort_3; ?>" />
                                <div class="invalid-feedback">
                                    <div>Ingrese el año</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefault01">
                                <div class="spanish">
                                    Complicaciones:
                                </div>
                            </label>
                            <input type="text" class="form-control-phenotype" id="validationDefault01" name="form_comments_abort_3" value="<?php echo $form_comments_abort_3; ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese el año</div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <div class="abortSection display-none">
                    <div class="form-top">
                        <div class="col-md-3">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Aborto 2:
                                </div>
                            </label>
                            <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                            <select name="form_type_abort_2">
                                <?php if ($form_type_abort_2 == "Voluntario") { ?>
                                    <option value="Voluntario" selected>Voluntario</option>
                                    <option value="Involuntario">Involuntario</option>
                                <?php } elseif ($form_type_abort_2 == "Involuntario") { ?>
                                    <option value="Voluntario">Voluntario</option>
                                    <option value="Involuntario" selected>Involuntario</option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback">
                                <div>Seleccione una opción</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationDefault01">
                                <div class="spanish">
                                    Año:
                                </div>
                            </label>
                            <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_year_abort_2" value="<?php echo $form_year_abort_2 ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese el año</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Método:
                                </div>
                            </label>
                            <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                            <select name="form_method_abort_2">
                                <?php if ($form_method_abort_2 == "Bioquímico") { ?>
                                    <option value="Bioquímico" selected>Bioquímico</option>
                                    <option value="Legrado">Legrado</option>
                                    <option value="Espontáneo">Espontáneo</option>
                                <?php } elseif ($form_method_abort_2 == "Legrado") { ?>
                                    <option value="Bioquímico">Bioquímico</option>
                                    <option value="Legrado" selected>Legrado</option>
                                    <option value="Espontáneo">Espontáneo</option>
                                <?php } elseif ($form_method_abort_2 == "Espontáneo") { ?>
                                    <option value="Bioquímico">Bioquímico</option>
                                    <option value="Legrado">Legrado</option>
                                    <option value="Espontáneo" selected>Espontáneo</option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback">
                                <div>Seleccione una opción</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationDefault01">
                                <div class="spanish">
                                    Semana:
                                </div>
                            </label>
                            <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_week_abort_2" value="<?php echo $form_week_abort_2; ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese el año</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Complicaciones:
                            </div>
                        </label>
                        <input type="text" class="form-control-phenotype" id="validationDefault01" name="form_comments_abort_2" value="<?php echo $form_comments_abort_2; ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese el año</div>
                        </div>
                    </div>
                </div>
                <div class="abortSection display-none">
                    <div class="form-top">
                        <div class="col-md-3">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Aborto 3:
                                </div>
                            </label>
                            <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                            <select name="form_type_abort_3">
                                <?php if ($form_type_abort_3 == "Voluntario") { ?>
                                    <option value="Voluntario" selected>Voluntario</option>
                                    <option value="Involuntario">Involuntario</option>
                                <?php } elseif ($form_type_abort_3 == "Involuntario") { ?>
                                    <option value="Voluntario">Voluntario</option>
                                    <option value="Involuntario" selected>Involuntario</option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback">
                                <div>Seleccione una opción</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationDefault01">
                                <div class="spanish">
                                    Año:
                                </div>
                            </label>
                            <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_year_abort_3" value="<?php echo $form_year_abort_3 ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese el año</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom01">
                                <div class="spanish">
                                    Método:
                                </div>
                            </label>
                            <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                            <select name="form_method_abort_3">
                                <?php if ($form_method_abort_3 == "Bioquímico") { ?>
                                    <option value="Bioquímico" selected>Bioquímico</option>
                                    <option value="Legrado">Legrado</option>
                                    <option value="Espontáneo">Espontáneo</option>
                                <?php } elseif ($form_method_abort_3 == "Legrado") { ?>
                                    <option value="Bioquímico">Bioquímico</option>
                                    <option value="Legrado" selected>Legrado</option>
                                    <option value="Espontáneo">Espontáneo</option>
                                <?php } elseif ($form_method_abort_3 == "Espontáneo") { ?>
                                    <option value="Bioquímico">Bioquímico</option>
                                    <option value="Legrado">Legrado</option>
                                    <option value="Espontáneo" selected>Espontáneo</option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback">
                                <div>Seleccione una opción</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationDefault01">
                                <div class="spanish">
                                    Semana:
                                </div>
                            </label>
                            <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_week_abort_3" value="<?php echo $form_week_abort_3; ?>" />
                            <div class="invalid-feedback">
                                <div>Ingrese el año</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Complicaciones:
                            </div>
                        </label>
                        <input type="text" class="form-control-phenotype" id="validationDefault01" name="form_comments_abort_3" value="<?php echo $form_comments_abort_3; ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese el año</div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } else { ?>
            <div class="abortSection display-none">
                <div class="form-top">
                    <div class="col-md-3">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Aborto 1:
                            </div>
                        </label>
                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                        <select name="form_type_abort_1">
                            <?php if ($form_type_abort_1 == "Voluntario") { ?>
                                <option value="Voluntario" selected>Voluntario</option>
                                <option value="Involuntario">Involuntario</option>
                            <?php } elseif ($form_type_abort_1 == "Involuntario") { ?>
                                <option value="Voluntario">Voluntario</option>
                                <option value="Involuntario" selected>Involuntario</option>
                            <?php } ?>
                        </select>
                        <div class="invalid-feedback">
                            <div>Seleccione una opción</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Año:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_year_abort_1" value="<?php echo $form_year_abort_1 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese el año</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Método:
                            </div>
                        </label>
                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                        <select name="form_method_abort_1">
                            <?php if ($form_method_abort_1 == "Bioquímico") { ?>
                                <option value="Bioquímico" selected>Bioquímico</option>
                                <option value="Legrado">Legrado</option>
                                <option value="Espontáneo">Espontáneo</option>
                            <?php } elseif ($form_method_abort_1 == "Legrado") { ?>
                                <option value="Bioquímico">Bioquímico</option>
                                <option value="Legrado" selected>Legrado</option>
                                <option value="Espontáneo">Espontáneo</option>
                            <?php } elseif ($form_method_abort_1 == "Espontáneo") { ?>
                                <option value="Bioquímico">Bioquímico</option>
                                <option value="Legrado">Legrado</option>
                                <option value="Espontáneo" selected>Espontáneo</option>
                            <?php } ?>
                        </select>
                        <div class="invalid-feedback">
                            <div>Seleccione una opción</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Semana:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_week_abort_1" value="<?php echo $form_week_abort_1; ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese el año</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationDefault01">
                        <div class="spanish">
                            Complicaciones:
                        </div>
                    </label>
                    <input type="text" class="form-control-phenotype" id="validationDefault01" name="form_comments_abort_1" value="<?php echo $form_comments_abort_1; ?>" />
                    <div class="invalid-feedback">
                        <div>Ingrese el año</div>
                    </div>
                </div>
            </div>
            <div class="abortSection display-none">
                <div class="form-top">
                    <div class="col-md-3">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Aborto 2:
                            </div>
                        </label>
                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                        <select name="form_type_abort_2">
                            <?php if ($form_type_abort_2 == "Voluntario") { ?>
                                <option value="Voluntario" selected>Voluntario</option>
                                <option value="Involuntario">Involuntario</option>
                            <?php } elseif ($form_type_abort_2 == "Involuntario") { ?>
                                <option value="Voluntario">Voluntario</option>
                                <option value="Involuntario" selected>Involuntario</option>
                            <?php } ?>
                        </select>
                        <div class="invalid-feedback">
                            <div>Seleccione una opción</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Año:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_year_abort_2" value="<?php echo $form_year_abort_2 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese el año</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Método:
                            </div>
                        </label>
                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                        <select name="form_method_abort_2">
                            <?php if ($form_method_abort_2 == "Bioquímico") { ?>
                                <option value="Bioquímico" selected>Bioquímico</option>
                                <option value="Legrado">Legrado</option>
                                <option value="Espontáneo">Espontáneo</option>
                            <?php } elseif ($form_method_abort_2 == "Legrado") { ?>
                                <option value="Bioquímico">Bioquímico</option>
                                <option value="Legrado" selected>Legrado</option>
                                <option value="Espontáneo">Espontáneo</option>
                            <?php } elseif ($form_method_abort_2 == "Espontáneo") { ?>
                                <option value="Bioquímico">Bioquímico</option>
                                <option value="Legrado">Legrado</option>
                                <option value="Espontáneo" selected>Espontáneo</option>
                            <?php } ?>
                        </select>
                        <div class="invalid-feedback">
                            <div>Seleccione una opción</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Semana:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_week_abort_2" value="<?php echo $form_week_abort_2; ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese el año</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationDefault01">
                        <div class="spanish">
                            Complicaciones:
                        </div>
                    </label>
                    <input type="text" class="form-control-phenotype" id="validationDefault01" name="form_comments_abort_2" value="<?php echo $form_comments_abort_2; ?>" />
                    <div class="invalid-feedback">
                        <div>Ingrese el año</div>
                    </div>
                </div>
            </div>
            <div class="abortSection display-none">
                <div class="form-top">
                    <div class="col-md-3">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Aborto 3:
                            </div>
                        </label>
                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                        <select name="form_type_abort_3">
                            <?php if ($form_type_abort_3 == "Voluntario") { ?>
                                <option value="Voluntario" selected>Voluntario</option>
                                <option value="Involuntario">Involuntario</option>
                            <?php } elseif ($form_type_abort_3 == "Involuntario") { ?>
                                <option value="Voluntario">Voluntario</option>
                                <option value="Involuntario" selected>Involuntario</option>
                            <?php } ?>
                        </select>
                        <div class="invalid-feedback">
                            <div>Seleccione una opción</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Año:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_year_abort_3" value="<?php echo $form_year_abort_3 ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese el año</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Método:
                            </div>
                        </label>
                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                        <select name="form_method_abort_3">
                            <?php if ($form_method_abort_3 == "Bioquímico") { ?>
                                <option value="Bioquímico" selected>Bioquímico</option>
                                <option value="Legrado">Legrado</option>
                                <option value="Espontáneo">Espontáneo</option>
                            <?php } elseif ($form_method_abort_3 == "Legrado") { ?>
                                <option value="Bioquímico">Bioquímico</option>
                                <option value="Legrado" selected>Legrado</option>
                                <option value="Espontáneo">Espontáneo</option>
                            <?php } elseif ($form_method_abort_3 == "Espontáneo") { ?>
                                <option value="Bioquímico">Bioquímico</option>
                                <option value="Legrado">Legrado</option>
                                <option value="Espontáneo" selected>Espontáneo</option>
                            <?php } ?>
                        </select>
                        <div class="invalid-feedback">
                            <div>Seleccione una opción</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Semana:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_week_abort_3" value="<?php echo $form_week_abort_3; ?>" />
                        <div class="invalid-feedback">
                            <div>Ingrese el año</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationDefault01">
                        <div class="spanish">
                            Complicaciones:
                        </div>
                    </label>
                    <input type="text" class="form-control-phenotype" id="validationDefault01" name="form_comments_abort_3" value="<?php echo $form_comments_abort_3; ?>" />
                    <div class="invalid-feedback">
                        <div>Ingrese el año</div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php if ($num_aborts > 0) { ?>
            <div class="form-btn" id="abortEnable2">
                <button class="btn btn-send" id="abort">
                    <div>Agregar datos de aborto</div>
                </button>
                <button class="btn btn-send" id="abortRmv">
                    <div>Remover campo de aborto</div>
                </button>
            </div>
        <?php } else { ?>
            <div class="form-btn" id="abortEnable2">
                <button class="btn btn-send" id="abort">
                    <div>Agregar datos de aborto</div>
                </button>
                <button class="btn btn-send display-none" id="abortRmv">
                    <div>Remover campo de aborto</div>
                </button>
            </div>
        <?php } ?>
        <input type="hidden" id="pregnancyNum" name="pregnancyNum" value="<?php echo $num_pregnants; ?>">
        <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
        <input type="hidden" id="form_risk_notes" name="form_risk_notes" value="<?php echo $form_risk_notes; ?>">
        <input type="hidden" id="form_anemy" name="form_anemy" value="<?php echo $form_anemy ?>">
        <input type="hidden" id="form_diabetes" name="form_diabetes" value="<?php echo $form_diabetes ?>">
        <input type="hidden" id="form_transfusion" name="form_transfusion" value="<?php echo $form_transfusion ?>">
        <input type="hidden" id="form_hipertension" name="form_hipertension" value="<?php echo $form_hipertension ?>">
        <input type="hidden" id="form_cancer" name="form_cancer" value="<?php echo $form_cancer ?>">
        <input type="hidden" id="form_dislexia" name="form_dislexia" value="<?php echo $form_dislexia ?>">
        <input type="hidden" id="form_waist" name="form_waist" value="<?php echo $form_waist ?>">
        <input type="hidden" id="form_migraine" name="form_migraine" value="<?php echo $form_migraine ?>">
        <input type="hidden" id="form_smoke" name="form_smoke" value="<?php echo $form_smoke ?>">
        <input type="hidden" id="form_smoke_times" name="form_smoke_times" value="<?php echo $form_smoke_times ?>">
        <input type="hidden" id="form_smoke_qty" name="form_smoke_qty" value="<?php echo $form_smoke_qty ?>">
        <input type="hidden" id="form_alcohol" name="form_alcohol" value="<?php echo $form_alcohol ?>">
        <input type="hidden" id="form_alcohol_freq" name="form_alcohol_freq" value="<?php echo $form_alcohol_freq ?>">
        <input type="hidden" id="form_fracture" name="form_fracture" value="<?php echo $form_fracture ?>">
        <input type="hidden" id="form_surgery" name="form_surgery" value="<?php echo $form_surgery ?>">
        <input type="hidden" id="form_fracture_info" name="form_fracture_info" value="<?php echo $form_fracture_info ?>">
        <input type="hidden" id="form_surgery_info" name="form_surgery_info" value="<?php echo $form_surgery_info ?>">
        <input type="hidden" id="form_coded_comments_pregnant_1" name="form_coded_comments_pregnant_1" value="<?php echo $form_coded_comments_pregnant_1 ?>">
        <input type="hidden" id="form_coded_comments_pregnant_2" name="form_coded_comments_pregnant_2" value="<?php echo $form_coded_comments_pregnant_2 ?>">
        <input type="hidden" id="form_coded_comments_pregnant_3" name="form_coded_comments_pregnant_3" value="<?php echo $form_coded_comments_pregnant_3 ?>">
        <input type="hidden" id="form_coded_comments_pregnant_4" name="form_coded_comments_pregnant_4" value="<?php echo $form_coded_comments_pregnant_4 ?>">
        <input type="hidden" id="form_coded_comments_pregnant_5" name="form_coded_comments_pregnant_5" value="<?php echo $form_coded_comments_pregnant_5 ?>">
        <input type="hidden" id="form_coded_comments_pregnant_6" name="form_coded_comments_pregnant_6" value="<?php echo $form_coded_comments_pregnant_6 ?>">
        <input type="hidden" id="family_alergy" name="family_alergy" value="<?php echo $family_alergy; ?>">
        <input type="hidden" id="family_apoplejia" name="family_apoplejia" value="<?php echo $family_apoplejia; ?>">
        <input type="hidden" id="family_cardiopathy" name="family_cardiopathy" value="<?php echo $family_cardiopathy; ?>">
        <input type="hidden" id="family_catarata" name="family_catarata" value="<?php echo $family_catarata; ?>">
        <input type="hidden" id="family_cirrosis" name="family_cirrosis" value="<?php echo $family_cirrosis; ?>">
        <input type="hidden" id="family_convulsive" name="family_convulsive" value="<?php echo $family_convulsive; ?>">
        <input type="hidden" id="family_distrophy" name="family_distrophy" value="<?php echo $family_distrophy; ?>">
        <input type="hidden" id="family_enfisem" name="family_enfisem" value="<?php echo $family_enfisem; ?>">
        <input type="hidden" id="family_epilepsy" name="family_epilepsy" value="<?php echo $family_epilepsy; ?>">
        <input type="hidden" id="family_glaucom" name="family_glaucom" value="<?php echo $family_glaucom; ?>">
        <input type="hidden" id="family_hemofilia" name="family_hemofilia" value="<?php echo $family_hemofilia; ?>">
        <input type="hidden" id="family_ictericia" name="family_ictericia" value="<?php echo $family_ictericia; ?>">
        <input type="hidden" id="family_migraine" name="family_migraine" value="<?php echo $family_migraine; ?>">
        <input type="hidden" id="family_varicocele" name="family_varicocele" value="<?php echo $family_varicocele; ?>">
        <input type="hidden" id="family_equinovaro" name="family_equinovaro" value="<?php echo $family_equinovaro; ?>">
        <input type="hidden" id="family_mental" name="family_mental" value="<?php echo $family_mental; ?>">
        <input type="hidden" id="family_drugs" name="family_drugs" value="<?php echo $family_drugs; ?>">
        <input type="hidden" id="family_esquizo" name="family_esquizo" value="<?php echo $family_esquizo; ?>">
        <input type="hidden" id="family_alcohol" name="family_alcohol" value="<?php echo $family_alcohol; ?>">
        <input type="hidden" id="family_diabetes_young" name="family_diabetes_young" value="<?php echo $family_diabetes_young; ?>">
        <input type="hidden" id="family_bocio" name="family_bocio" value="<?php echo $family_bocio; ?>">
        <input type="hidden" id="family_blind" name="family_blind" value="<?php echo $family_blind; ?>">
        <input type="hidden" id="family_daltonic" name="family_daltonic" value="<?php echo $family_daltonic; ?>">
        <input type="hidden" id="family_diabetes" name="family_diabetes" value="<?php echo $family_diabetes; ?>">
        <input type="hidden" id="family_psiquiatric" name="family_psiquiatric" value="<?php echo $family_psiquiatric; ?>">
        <input type="hidden" id="family_endometriosis" name="family_endometriosis" value="<?php echo $family_endometriosis; ?>">
        <input type="hidden" id="family_fibrosis" name="family_fibrosis" value="<?php echo $family_fibrosis; ?>">
        <input type="hidden" id="family_gota" name="family_gota" value="<?php echo $family_gota; ?>">
        <input type="hidden" id="family_hipertension" name="family_hipertension" value="<?php echo $family_hipertension; ?>">
        <input type="hidden" id="family_paladar" name="family_paladar" value="<?php echo $family_paladar; ?>">
        <input type="hidden" id="family_kidney" name="family_kidney" value="<?php echo $family_kidney; ?>">
        <input type="hidden" id="family_circulation" name="family_circulation" value="<?php echo $family_circulation; ?>">
        <input type="hidden" id="family_psoriasis" name="family_psoriasis" value="<?php echo $family_psoriasis; ?>">
        <input type="hidden" id="family_deaf" name="family_deaf" value="<?php echo $family_deaf; ?>">
        <input type="hidden" id="family_alzheimer" name="family_alzheimer" value="<?php echo $family_alzheimer; ?>">
        <input type="hidden" id="family_parkinson" name="family_parkinson" value="<?php echo $family_parkinson; ?>">
        <div class="form-btn btn-right">
            <button class="btn btn-send" type="submit">
                <div>Siguiente</div>
            </button>
        </div>
    </form>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="build/js/form.min.js"></script>
</body>

</html>
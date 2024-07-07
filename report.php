<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!($_SESSION['login'])) {
    header('location: /index.php');
}
// Include Composer's autoload file
require_once __DIR__ . '/vendor/autoload.php';
// Create an instance of mPDF
$mpdf = new \Mpdf\Mpdf();
$form_name = ucfirst($_POST['form_name']);
$form_date = ucfirst($_POST['form_date']);
$form_age = ucfirst($_POST['form_age']);
$form_birth_place = ucfirst($_POST['form_birth_place']);
$form_status = ucfirst($_POST['form_status']);
$form_employment = ucfirst($_POST['form_employment']);
$form_height = ucfirst($_POST['form_height']);
$form_weight = ucfirst($_POST['form_weight']);
$form_hand = ucfirst($_POST['form_hand']);
$form_blood = ucfirst($_POST['form_blood']);
$form_implant = ucfirst($_POST['form_implant']);
$form_diu = ucfirst($_POST['form_diu']);
$form_risk_notes = ucfirst($_POST['form_risk_notes']);
$form_anemy = ucfirst($_POST['form_anemy']);
$form_diabetes = ucfirst($_POST['form_diabetes']);
$form_transfusion = ucfirst($_POST['form_transfusion']);
$form_hipertension = ucfirst($_POST['form_hipertension']);
$form_cancer = ucfirst($_POST['form_cancer']);
$form_dislexia = ucfirst($_POST['form_dislexia']);
$form_waist = ucfirst($_POST['form_waist']);
$form_migraine = ucfirst($_POST['form_migraine']);
$form_smoke = ucfirst($_POST['form_smoke']);
$form_smoke_times = ucfirst($_POST['form_smoke_times']);
$form_smoke_qty = ucfirst($_POST['form_smoke_qty']);
$form_alcohol = ucfirst($_POST['form_alcohol']);
$form_alcohol_freq = ucfirst($_POST['form_alcohol_freq']);
$form_fracture = ucfirst($_POST['form_fracture']);
$form_surgery = ucfirst($_POST['form_surgery']);
$form_fracture_info = ucfirst($_POST['form_fracture_info']);
$form_surgery_info = ucfirst($_POST['form_surgery_info']);
$form_type_pregnant_1 = ucfirst($_POST['form_type_pregnant_1']);
$form_height_pregnant_1 = ucfirst($_POST['form_height_pregnant_1']);
$form_weight_pregnant_1 = ucfirst($_POST['form_weight_pregnant_1']);
$form_term_pregnant_1 = ucfirst($_POST['form_term_pregnant_1']);
$form_week_pregnant_1 = ucfirst($_POST['form_week_pregnant_1']);
$form_year_pregnant_1 = ucfirst($_POST['form_year_pregnant_1']);
$form_comments_pregnant_1 = ucfirst($_POST['form_comments_pregnant_1']);
$form_type_pregnant_2 = ucfirst($_POST['form_type_pregnant_2']);
$form_height_pregnant_2 = ucfirst($_POST['form_height_pregnant_2']);
$form_weight_pregnant_2 = ucfirst($_POST['form_weight_pregnant_2']);
$form_term_pregnant_2 = ucfirst($_POST['form_term_pregnant_2']);
$form_week_pregnant_2 = ucfirst($_POST['form_week_pregnant_2']);
$form_year_pregnant_2 = ucfirst($_POST['form_year_pregnant_2']);
$form_comments_pregnant_2 = ucfirst($_POST['form_comments_pregnant_2']);
$form_type_pregnant_3 = ucfirst($_POST['form_type_pregnant_3']);
$form_height_pregnant_3 = ucfirst($_POST['form_height_pregnant_3']);
$form_weight_pregnant_3 = ucfirst($_POST['form_weight_pregnant_3']);
$form_term_pregnant_3 = ucfirst($_POST['form_term_pregnant_3']);
$form_week_pregnant_3 = ucfirst($_POST['form_week_pregnant_3']);
$form_year_pregnant_3 = ucfirst($_POST['form_year_pregnant_3']);
$form_comments_pregnant_3 = ucfirst($_POST['form_comments_pregnant_3']);
$form_type_pregnant_4 = ucfirst($_POST['form_type_pregnant_4']);
$form_height_pregnant_4 = ucfirst($_POST['form_height_pregnant_4']);
$form_weight_pregnant_4 = ucfirst($_POST['form_weight_pregnant_4']);
$form_term_pregnant_4 = ucfirst($_POST['form_term_pregnant_4']);
$form_week_pregnant_4 = ucfirst($_POST['form_week_pregnant_4']);
$form_year_pregnant_4 = ucfirst($_POST['form_year_pregnant_4']);
$form_comments_pregnant_4 = ucfirst($_POST['form_comments_pregnant_4']);
$form_type_pregnant_5 = ucfirst($_POST['form_type_pregnant_5']);
$form_height_pregnant_5 = ucfirst($_POST['form_height_pregnant_5']);
$form_weight_pregnant_5 = ucfirst($_POST['form_weight_pregnant_5']);
$form_term_pregnant_5 = ucfirst($_POST['form_term_pregnant_5']);
$form_week_pregnant_5 = ucfirst($_POST['form_week_pregnant_5']);
$form_year_pregnant_5 = ucfirst($_POST['form_year_pregnant_5']);
$form_comments_pregnant_5 = ucfirst($_POST['form_comments_pregnant_5']);
$form_type_pregnant_6 = ucfirst($_POST['form_type_pregnant_6']);
$form_height_pregnant_6 = ucfirst($_POST['form_height_pregnant_6']);
$form_weight_pregnant_6 = ucfirst($_POST['form_weight_pregnant_6']);
$form_term_pregnant_6 = ucfirst($_POST['form_term_pregnant_6']);
$form_week_pregnant_6 = ucfirst($_POST['form_week_pregnant_6']);
$form_year_pregnant_6 = ucfirst($_POST['form_year_pregnant_6']);
$form_comments_pregnant_6 = ucfirst($_POST['form_comments_pregnant_6']);
$form_type_abort_1 = ucfirst($_POST['form_type_abort_1']);
$form_year_abort_1 = ucfirst($_POST['form_year_abort_1']);
$form_week_abort_1 = ucfirst($_POST['form_week_abort_1']);
$form_comments_abort_1 = ucfirst($_POST['form_comments_abort_1']);
$form_type_abort_2 = ucfirst($_POST['form_type_abort_2']);
$form_year_abort_2 = ucfirst($_POST['form_year_abort_2']);
$form_week_abort_2 = ucfirst($_POST['form_week_abort_2']);
$form_comments_abort_2 = ucfirst($_POST['form_comments_abort_2']);
$form_type_abort_3 = ucfirst($_POST['form_type_abort_3']);
$form_year_abort_3 = ucfirst($_POST['form_year_abort_3']);
$form_week_abort_3 = ucfirst($_POST['form_week_abort_3']);
$form_comments_abort_3 = ucfirst($_POST['form_comments_abort_3']);
$form_coded_comments_pregnant_1 = ucfirst($_POST['form_coded_comments_pregnant_1']);
$form_coded_comments_pregnant_2 = ucfirst($_POST['form_coded_comments_pregnant_2']);
$form_coded_comments_pregnant_3 = ucfirst($_POST['form_coded_comments_pregnant_3']);
$form_coded_comments_pregnant_4 = ucfirst($_POST['form_coded_comments_pregnant_4']);
$form_coded_comments_pregnant_5 = ucfirst($_POST['form_coded_comments_pregnant_5']);
$form_coded_comments_pregnant_6 = ucfirst($_POST['form_coded_comments_pregnant_6']);
$family_alergy = ucfirst($_POST['family_alergy']);
$family_apoplejia = ucfirst($_POST['family_apoplejia']);
$family_cardiopathy = ucfirst($_POST['family_cardiopathy']);
$family_catarata = ucfirst($_POST['family_catarata']);
$family_cirrosis = ucfirst($_POST['family_cirrosis']);
$family_convulsive = ucfirst($_POST['family_convulsive']);
$family_distrophy = ucfirst($_POST['family_distrophy']);
$family_enfisem = ucfirst($_POST['family_enfisem']);
$family_epilepsy = ucfirst($_POST['family_epilepsy']);
$family_glaucom = ucfirst($_POST['family_glaucom']);
$family_hemofilia = ucfirst($_POST['family_hemofilia']);
$family_ictericia = ucfirst($_POST['family_ictericia']);
$family_migraine = ucfirst($_POST['family_migraine']);
$family_varicocele = ucfirst($_POST['family_varicocele']);
$family_equinovaro = ucfirst($_POST['family_equinovaro']);
$family_mental = ucfirst($_POST['family_mental']);
$family_drugs = ucfirst($_POST['family_drugs']);
$family_esquizo = ucfirst($_POST['family_esquizo']);
$family_alcohol = ucfirst($_POST['family_alcohol']);
$family_diabetes_young = ucfirst($_POST['family_diabetes_young']);
$family_bocio = ucfirst($_POST['family_bocio']);
$family_blind = ucfirst($_POST['family_blind']);
$family_daltonic = ucfirst($_POST['family_daltonic']);
$family_diabetes = ucfirst($_POST['family_diabetes']);
$family_psiquiatric = ucfirst($_POST['family_psiquiatric']);
$family_endometriosis = ucfirst($_POST['family_endometriosis']);
$family_fibrosis = ucfirst($_POST['family_fibrosis']);
$family_gota = ucfirst($_POST['family_gota']);
$family_hipertension = ucfirst($_POST['family_hipertension']);
$family_paladar = ucfirst($_POST['family_paladar']);
$family_kidney = ucfirst($_POST['family_kidney']);
$family_circulation = ucfirst($_POST['family_circulation']);
$family_psoriasis = ucfirst($_POST['family_psoriasis']);
$family_deaf = ucfirst($_POST['family_deaf']);
$family_alzheimer = ucfirst($_POST['family_alzheimer']);
$family_parkinson = ucfirst($_POST['family_parkinson']);

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

if ($form_smoke == "No") {
    $form_smoke_qty = " ";
    $form_smoke_times = " ";
}

if ($form_alcohol == "No") {
    $form_alcohol_freq = " ";
}

$pregnants = '';

for ($j=1;$j<=$num_pregnants;$j++) {
    $pregnants = $pregnants . '
    <p> Tipo de embarazo ' . $j . ": " . ${"form_type_pregnant_$j"} . '<br>
    Altura del embarazo ' . $j . ": " . ${"form_height_pregnant_$j"} . " m" . '<br>
    Peso del embarazo ' . $j . ": " . ${"form_weight_pregnant_$j"} . " kg" . '<br>
    Término del embarazo ' . $j . ": " . ${"form_term_pregnant_$j"} . '<br>
    Semana del embarazo ' . $j . ": " . ${"form_week_pregnant_$j"} . '<br>
    Año del embarazo ' . $j . ": " . ${"form_year_pregnant_$j"} . '<br>
    Comentarios del embarazo ' . $j . ": " . ${"form_comments_pregnant_$j"} . '<br>';
    for ($i = 1; $i <= 20; $i++) {
        if (${"codes_" . $j . "_" . $i} == 2) {
            $pregnants = $pregnants . ' - ' .  $codes_array[$i - 1] . '<br>';
        }
    }
    $pregnants = $pregnants . '</p>';
}

$aborts = '';

for ($j=1;$j<=$num_aborts;$j++) {
    $aborts = $aborts . '
    <p> Tipo de aborto ' . $j . ": " . ${"form_type_abort_$j"} . '<br>
    Semana del aborto ' . $j . ": " . ${"form_week_abort_$j"} . '<br>
    Año del aborto ' . $j . ": " . ${"form_year_abort_$j"} . '<br>
    Método del aborto ' . $j . ": " . ${"form_method_abort_$j"} . '<br>
    Comentarios del aborto ' . $j . ": " . ${"form_comments_abort_$j"} . '</p>';
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

$family = '<p>';

for ($i = 1; $i <= 36; $i++) {
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
    $family =  $family .  $family_diseases[$i - 1] . ': ' . $selected . '<br>';
}

$family = $family . '</p>';

// Sample HTML content
$html = '
    <html>

<head>
    <title>PDF report</title>
    <style>
    body {
        margin: 2rem;
    }
    .signature {
        display: flex;
        flex-direction: column;
        align-items: end;
        margin-top: 4rem;
        margin-left: 30rem;
    }
    .line {
        width: 15rem;
        border-bottom: 1px solid black;
    }
    .name {
        margin-top: 0.5rem;
        width: 15rem;
        text-align: center;
    }
</style>
</head>

<body>
    <h2>Datos de la gestante </h2>
    <p> Nombre completo: ' . $form_name . '<br>
    Fecha de nacimiento: ' . $form_date . '<br>
    Edad: ' . $form_age . " años" . '<br>
    Lugar de nacimiento: ' . $form_birth_place . '<br>
    Estado civil: ' . $form_status . '<br>
    Ocupación: ' . $form_employment . '<br>
    Altura: ' . $form_height . " m" . '<br>
    Peso: ' . $form_weight . " kg" . '<br>
    Mano predominante: ' . $form_hand . '<br>
    Tipo de sangre: ' . $form_blood . '<br>
    Tiene implante: ' . $form_implant . '<br>
    Tiene DIU: ' . $form_diu . '<br>
    Notas adicionales de riesgo: ' . $form_risk_notes . '<br>
    Tiene anemia: ' . $form_anemy . '<br>
    Tiene diabetes: ' . $form_diabetes . '<br>
    Tuvo alguna transfusión: ' . $form_transfusion . '<br>
    Tiene hipertensión: ' . $form_hipertension . '<br>
    Tiene cáncer: ' . $form_cancer . '<br>
    Tiene dislexia: ' . $form_dislexia . '<br>
    Tiene lesión en la cadera: ' . $form_waist . '<br>
    Tiene migraña: ' . $form_migraine . '<br>
    Fuma: ' . $form_smoke . '<br>
    Con qué frecuencia fuma: ' . $form_smoke_times . '<br>
    Cuántos cigarros fuma: ' . $form_smoke_qty . '<br>
    Toma alcohol: ' . $form_alcohol . '<br>
    Con qué frecuencia toma alcohol: ' . $form_alcohol_freq . '<br>
    Tuvo fractura: ' . $form_fracture . '<br>
    Detalles de la fractura: ' . $form_fracture_info . '<br>
    Tuvo cirugía: ' . $form_cirugía . '<br>
    Detalles de la cirugía: ' . $form_surgery_info . '</p>
    <h2>Datos de los embarazos</h2>
    <p> Número de embarazos: ' . $num_pregnants . '<br>
    </p>' 
    . $pregnants .
    '<p>
    <h2>Datos de los abortos</h2>
    <p> Número de abortos: ' . $num_aborts . '<br>
    </p>'
    . $aborts .
    '<h2>Datos de los familiares</h2>'
    . $family .
    '<div class="signature">
        <div class="line"></div>
        <div class="name">Firma de la gestante</div>
        <div class="name">' . date("l, F j, Y") . '</div>
    </div>
</body>

</html>
';

$form_name = $_POST['form_name'];
$form_date = $_POST['form_date'];
$form_age = $_POST['form_age'];
$form_birth_place = $_POST['form_birth_place'];
$form_status = $_POST['form_status'];
$form_employment = $_POST['form_employment'];
$form_height = $_POST['form_height'];
$form_weight = $_POST['form_weight'];
$form_hand = $_POST['form_hand'];
$form_blood = $_POST['form_blood'];
$form_implant = $_POST['form_implant'];
$form_diu = $_POST['form_diu'];
$form_risk_notes = $_POST['form_risk_notes'];
$form_anemy = $_POST['form_anemy'];
$form_diabetes = $_POST['form_diabetes'];
$form_transfusion = $_POST['form_transfusion'];
$form_hipertension = $_POST['form_hipertension'];
$form_cancer = $_POST['form_cancer'];
$form_dislexia = $_POST['form_dislexia'];
$form_waist = $_POST['form_waist'];
$form_migraine = $_POST['form_migraine'];
$form_smoke = $_POST['form_smoke'];
$form_smoke_times = $_POST['form_smoke_times'];
$form_smoke_qty = $_POST['form_smoke_qty'];
$form_alcohol = $_POST['form_alcohol'];
$form_alcohol_freq = $_POST['form_alcohol_freq'];
$form_fracture = $_POST['form_fracture'];
$form_surgery = $_POST['form_surgery'];
$form_fracture_info = $_POST['form_fracture_info'];

// Add HTML content to mPDF
$mpdf->WriteHTML($html);

// Output PDF
$mpdf->Output('sample.pdf', 'I'); // D = force download, I = inline display, F = save to file

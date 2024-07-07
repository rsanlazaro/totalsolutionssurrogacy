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

$pregnancyNum = $_POST['pregnancyNum'];
$id = $_POST['id'];
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
$form_surgery_info = $_POST['form_surgery_info']; 
$form_coded_comments_pregnant_1 = $_POST['form_coded_comments_pregnant_1']; 
$form_coded_comments_pregnant_2 = $_POST['form_coded_comments_pregnant_2']; 
$form_coded_comments_pregnant_3 = $_POST['form_coded_comments_pregnant_3']; 
$form_coded_comments_pregnant_4 = $_POST['form_coded_comments_pregnant_4']; 
$form_coded_comments_pregnant_5 = $_POST['form_coded_comments_pregnant_5']; 
$form_coded_comments_pregnant_6 = $_POST['form_coded_comments_pregnant_6'];
$family_alergy = $_POST['family_alergy'];
$family_apoplejia = $_POST['family_apoplejia'];
$family_cardiopathy = $_POST['family_cardiopathy'];
$family_catarata = $_POST['family_catarata'];
$family_cirrosis = $_POST['family_cirrosis'];
$family_convulsive = $_POST['family_convulsive'];
$family_distrophy = $_POST['family_distrophy'];
$family_enfisem = $_POST['family_enfisem'];
$family_epilepsy = $_POST['family_epilepsy'];
$family_glaucom = $_POST['family_glaucom'];
$family_hemofilia = $_POST['family_hemofilia'];
$family_ictericia = $_POST['family_ictericia'];
$family_migraine = $_POST['family_migraine'];
$family_varicocele = $_POST['family_varicocele'];
$family_equinovaro = $_POST['family_equinovaro'];
$family_mental = $_POST['family_mental'];
$family_drugs = $_POST['family_drugs'];
$family_esquizo = $_POST['family_esquizo'];
$family_alcohol = $_POST['family_alcohol'];
$family_diabetes_young = $_POST['family_diabetes_young'];
$family_bocio = $_POST['family_bocio'];
$family_blind = $_POST['family_blind'];
$family_daltonic = $_POST['family_daltonic'];
$family_diabetes = $_POST['family_diabetes'];
$family_psiquiatric = $_POST['family_psiquiatric'];
$family_endometriosis = $_POST['family_endometriosis'];
$family_fibrosis = $_POST['family_fibrosis'];
$family_gota = $_POST['family_gota'];
$family_hipertension = $_POST['family_hipertension'];
$family_paladar = $_POST['family_paladar'];
$family_kidney = $_POST['family_kidney'];
$family_circulation = $_POST['family_circulation'];
$family_psoriasis = $_POST['family_psoriasis'];
$family_deaf = $_POST['family_deaf'];
$family_alzheimer = $_POST['family_alzheimer'];
$family_parkinson = $_POST['family_parkinson'];

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

if (!$_SESSION['login']) {
    header('location: /index.php');
}
if (isset($_POST['pregnancyNum'])) { $prenancy_num = $_POST['pregnancyNum']; }
$conn = connectDB();
if (isset($_POST['form_name'])) {$form_name = $_POST['form_name']; $_SESSION['form_name'] = $form_name;}
if (isset($_POST['form_curp'])) {$form_curp = $_POST['form_curp']; $_SESSION['form_curp'] = $form_curp;}
if (isset($_POST['form_date'])) {$form_date = $_POST['form_date']; $_SESSION['form_date'] = $form_date;}
if (isset($_POST['form_age'])) {$form_age = $_POST['form_age']; $_SESSION['form_age'] = $form_age;}
if (isset($_POST['form_birth_place'])) {$form_birth_place = $_POST['form_birth_place']; $_SESSION['form_birth_place'] = $form_birth_place;}
if (isset($_POST['form_status'])) {$form_status = $_POST['form_status']; $_SESSION['form_status'] = $form_status;}
if (isset($_POST['form_employment'])) {$form_employment = $_POST['form_employment']; $_SESSION['form_employment'] = $form_employment;}
if (isset($_POST['form_height'])) {$form_height = $_POST['form_height']; $_SESSION['form_height'] = $form_height;}
if (isset($_POST['form_weight'])) {$form_weight = $_POST['form_weight']; $_SESSION['form_weight'] = $form_weight;}
if (isset($_POST['form_hand'])) {$form_hand = $_POST['form_hand']; $_SESSION['form_hand'] = $form_hand;}
if (isset($_POST['form_blood'])) {$form_blood = $_POST['form_blood']; $_SESSION['form_blood'] = $form_blood;}
if (isset($_POST['form_implant'])) {$form_implant = $_POST['form_implant']; $_SESSION['form_implant'] = $form_implant;}
if (isset($_POST['form_diu'])) {$form_diu = $_POST['form_diu']; $_SESSION['form_diu'] = $form_diu;}
if (isset($_POST['form_type_pregnant_1'])) {$form_type_pregnant_1 = $_POST['form_type_pregnant_1']; $_SESSION['form_type_pregnant_1'] = $form_type_pregnant_1;}
if (isset($_POST['form_height_pregnant_1'])) {$form_height_pregnant_1 = $_POST['form_height_pregnant_1']; $_SESSION['form_height_pregnant_1'] = $form_height_pregnant_1;}
if (isset($_POST['form_weight_pregnant_1'])) {$form_weight_pregnant_1 = $_POST['form_weight_pregnant_1']; $_SESSION['form_weight_pregnant_1'] = $form_weight_pregnant_1;}
if (isset($_POST['form_term_pregnant_1'])) {$form_term_pregnant_1 = $_POST['form_term_pregnant_1']; $_SESSION['form_term_pregnant_1'] = $form_term_pregnant_1;}
if (isset($_POST['form_week_pregnant_1'])) {$form_week_pregnant_1 = $_POST['form_week_pregnant_1']; $_SESSION['form_week_pregnant_1'] = $form_week_pregnant_1;}
if (isset($_POST['form_year_pregnant_1'])) {$form_year_pregnant_1 = $_POST['form_year_pregnant_1']; $_SESSION['form_year_pregnant_1'] = $form_year_pregnant_1;}
if (isset($_POST['form_comments_pregnant_1'])) {$form_comments_pregnant_1 = $_POST['form_comments_pregnant_1']; $_SESSION['form_comments_pregnant_1'] = $form_comments_pregnant_1;}
if (isset($_POST['form_type_pregnant_2'])) {$form_type_pregnant_2 = $_POST['form_type_pregnant_2']; $_SESSION['form_type_pregnant_2'] = $form_type_pregnant_2;}
if (isset($_POST['form_height_pregnant_2'])) {$form_height_pregnant_2 = $_POST['form_height_pregnant_2']; $_SESSION['form_height_pregnant_2'] = $form_height_pregnant_2;}
if (isset($_POST['form_weight_pregnant_2'])) {$form_weight_pregnant_2 = $_POST['form_weight_pregnant_2']; $_SESSION['form_weight_pregnant_2'] = $form_weight_pregnant_2;}
if (isset($_POST['form_term_pregnant_2'])) {$form_term_pregnant_2 = $_POST['form_term_pregnant_2']; $_SESSION['form_term_pregnant_2'] = $form_term_pregnant_2;}
if (isset($_POST['form_week_pregnant_2'])) {$form_week_pregnant_2 = $_POST['form_week_pregnant_2']; $_SESSION['form_week_pregnant_2'] = $form_week_pregnant_2;}
if (isset($_POST['form_year_pregnant_2'])) {$form_year_pregnant_2 = $_POST['form_year_pregnant_2']; $_SESSION['form_year_pregnant_2'] = $form_year_pregnant_2;}
if (isset($_POST['form_comments_pregnant_2'])) {$form_comments_pregnant_2 = $_POST['form_comments_pregnant_2']; $_SESSION['form_comments_pregnant_2'] = $form_comments_pregnant_2;}
if (isset($_POST['form_type_pregnant_3'])) {$form_type_pregnant_3 = $_POST['form_type_pregnant_3']; $_SESSION['form_type_pregnant_3'] = $form_type_pregnant_3;}
if (isset($_POST['form_height_pregnant_3'])) {$form_height_pregnant_3 = $_POST['form_height_pregnant_3']; $_SESSION['form_height_pregnant_3'] = $form_height_pregnant_3;}
if (isset($_POST['form_weight_pregnant_3'])) {$form_weight_pregnant_3 = $_POST['form_weight_pregnant_3']; $_SESSION['form_weight_pregnant_3'] = $form_weight_pregnant_3;}
if (isset($_POST['form_term_pregnant_3'])) {$form_term_pregnant_3 = $_POST['form_term_pregnant_3']; $_SESSION['form_term_pregnant_3'] = $form_term_pregnant_3;}
if (isset($_POST['form_week_pregnant_3'])) {$form_week_pregnant_3 = $_POST['form_week_pregnant_3']; $_SESSION['form_week_pregnant_3'] = $form_week_pregnant_3;}
if (isset($_POST['form_year_pregnant_3'])) {$form_year_pregnant_3 = $_POST['form_year_pregnant_3']; $_SESSION['form_year_pregnant_3'] = $form_year_pregnant_3;}
if (isset($_POST['form_comments_pregnant_3'])) {$form_comments_pregnant_3 = $_POST['form_comments_pregnant_3']; $_SESSION['form_comments_pregnant_3'] = $form_comments_pregnant_3;}
if (isset($_POST['form_type_pregnant_4'])) {$form_type_pregnant_4 = $_POST['form_type_pregnant_4']; $_SESSION['form_type_pregnant_4'] = $form_type_pregnant_4;}
if (isset($_POST['form_height_pregnant_4'])) {$form_height_pregnant_4 = $_POST['form_height_pregnant_4']; $_SESSION['form_height_pregnant_4'] = $form_height_pregnant_4;}
if (isset($_POST['form_weight_pregnant_4'])) {$form_weight_pregnant_4 = $_POST['form_weight_pregnant_4']; $_SESSION['form_weight_pregnant_4'] = $form_weight_pregnant_4;}
if (isset($_POST['form_term_pregnant_4'])) {$form_term_pregnant_4 = $_POST['form_term_pregnant_4']; $_SESSION['form_term_pregnant_4'] = $form_term_pregnant_4;}
if (isset($_POST['form_week_pregnant_4'])) {$form_week_pregnant_4 = $_POST['form_week_pregnant_4']; $_SESSION['form_week_pregnant_4'] = $form_week_pregnant_4;}
if (isset($_POST['form_year_pregnant_4'])) {$form_year_pregnant_4 = $_POST['form_year_pregnant_4']; $_SESSION['form_year_pregnant_4'] = $form_year_pregnant_4;}
if (isset($_POST['form_comments_pregnant_4'])) {$form_comments_pregnant_4 = $_POST['form_comments_pregnant_4']; $_SESSION['form_comments_pregnant_4'] = $form_comments_pregnant_4;}
if (isset($_POST['form_type_pregnant_5'])) {$form_type_pregnant_5 = $_POST['form_type_pregnant_5']; $_SESSION['form_type_pregnant_5'] = $form_type_pregnant_5;}
if (isset($_POST['form_height_pregnant_5'])) {$form_height_pregnant_5 = $_POST['form_height_pregnant_5']; $_SESSION['form_height_pregnant_5'] = $form_height_pregnant_5;}
if (isset($_POST['form_weight_pregnant_5'])) {$form_weight_pregnant_5 = $_POST['form_weight_pregnant_5']; $_SESSION['form_weight_pregnant_5'] = $form_weight_pregnant_5;}
if (isset($_POST['form_term_pregnant_5'])) {$form_term_pregnant_5 = $_POST['form_term_pregnant_5']; $_SESSION['form_term_pregnant_5'] = $form_term_pregnant_5;}
if (isset($_POST['form_week_pregnant_5'])) {$form_week_pregnant_5 = $_POST['form_week_pregnant_5']; $_SESSION['form_week_pregnant_5'] = $form_week_pregnant_5;}
if (isset($_POST['form_year_pregnant_5'])) {$form_year_pregnant_5 = $_POST['form_year_pregnant_5']; $_SESSION['form_year_pregnant_5'] = $form_year_pregnant_5;}
if (isset($_POST['form_comments_pregnant_5'])) {$form_comments_pregnant_5 = $_POST['form_comments_pregnant_5']; $_SESSION['form_comments_pregnant_5'] = $form_comments_pregnant_5;}
if (isset($_POST['form_type_pregnant_6'])) {$form_type_pregnant_6 = $_POST['form_type_pregnant_6']; $_SESSION['form_type_pregnant_6'] = $form_type_pregnant_6;}
if (isset($_POST['form_height_pregnant_6'])) {$form_height_pregnant_6 = $_POST['form_height_pregnant_6']; $_SESSION['form_height_pregnant_6'] = $form_height_pregnant_6;}
if (isset($_POST['form_weight_pregnant_6'])) {$form_weight_pregnant_6 = $_POST['form_weight_pregnant_6']; $_SESSION['form_weight_pregnant_6'] = $form_weight_pregnant_6;}
if (isset($_POST['form_term_pregnant_6'])) {$form_term_pregnant_6 = $_POST['form_term_pregnant_6']; $_SESSION['form_term_pregnant_6'] = $form_term_pregnant_6;}
if (isset($_POST['form_week_pregnant_6'])) {$form_week_pregnant_6 = $_POST['form_week_pregnant_6']; $_SESSION['form_week_pregnant_6'] = $form_week_pregnant_6;}
if (isset($_POST['form_year_pregnant_6'])) {$form_year_pregnant_6 = $_POST['form_year_pregnant_6']; $_SESSION['form_year_pregnant_6'] = $form_year_pregnant_6;}
if (isset($_POST['form_comments_pregnant_6'])) {$form_comments_pregnant_6 = $_POST['form_comments_pregnant_6']; $_SESSION['form_comments_pregnant_6'] = $form_comments_pregnant_6;}
if (isset($_POST['form_type_abort_1'])) {$form_type_abort_1 = $_POST['form_type_abort_1']; $_SESSION['form_type_abort_1'] = $form_type_abort_1;}
if (isset($_POST['form_year_abort_1'])) {$form_year_abort_1 = $_POST['form_year_abort_1']; $_SESSION['form_year_abort_1'] = $form_year_abort_1;}
if (isset($_POST['form_method_abort_1'])) {$form_method_abort_1 = $_POST['form_method_abort_1']; $_SESSION['form_method_abort_1'] = $form_method_abort_1;}
if (isset($_POST['form_week_abort_1'])) {$form_week_abort_1 = $_POST['form_week_abort_1']; $_SESSION['form_week_abort_1'] = $form_week_abort_1;}
if (isset($_POST['form_comments_abort_1'])) {$form_comments_abort_1 = $_POST['form_comments_abort_1']; $_SESSION['form_comments_abort_1'] = $form_comments_abort_1;}
if (isset($_POST['form_type_abort_2'])) {$form_type_abort_2 = $_POST['form_type_abort_2']; $_SESSION['form_type_abort_2'] = $form_type_abort_2;}
if (isset($_POST['form_year_abort_2'])) {$form_year_abort_2 = $_POST['form_year_abort_2']; $_SESSION['form_year_abort_2'] = $form_year_abort_2;}
if (isset($_POST['form_method_abort_2'])) {$form_method_abort_2 = $_POST['form_method_abort_2']; $_SESSION['form_method_abort_2'] = $form_method_abort_2;}
if (isset($_POST['form_week_abort_2'])) {$form_week_abort_2 = $_POST['form_week_abort_2']; $_SESSION['form_week_abort_2'] = $form_week_abort_2;}
if (isset($_POST['form_comments_abort_2'])) {$form_comments_abort_2 = $_POST['form_comments_abort_2']; $_SESSION['form_comments_abort_2'] = $form_comments_abort_2;}
if (isset($_POST['form_type_abort_3'])) {$form_type_abort_3 = $_POST['form_type_abort_3']; $_SESSION['form_type_abort_3'] = $form_type_abort_3;}
if (isset($_POST['form_year_abort_3'])) {$form_year_abort_3 = $_POST['form_year_abort_3']; $_SESSION['form_year_abort_3'] = $form_year_abort_3;}
if (isset($_POST['form_method_abort_3'])) {$form_method_abort_3 = $_POST['form_method_abort_3']; $_SESSION['form_method_abort_3'] = $form_method_abort_3;}
if (isset($_POST['form_week_abort_3'])) {$form_week_abort_3 = $_POST['form_week_abort_3']; $_SESSION['form_week_abort_3'] = $form_week_abort_3;}
if (isset($_POST['form_comments_abort_3'])) {$form_comments_abort_3 = $_POST['form_comments_abort_3']; $_SESSION['form_comments_abort_3'] = $form_comments_abort_3;}

if (isset($_SESSION['form_name'])) { $form_name = $_SESSION['form_name']; }
if (isset($_SESSION['form_curp'])) { $form_curp = $_SESSION['form_curp']; }
if (isset($_SESSION['form_date'])) { $form_date = $_SESSION['form_date']; }
if (isset($_SESSION['form_age'])) { $form_age = $_SESSION['form_age']; }
if (isset($_SESSION['form_birth_place'])) { $form_birth_place = $_SESSION['form_birth_place']; }
if (isset($_SESSION['form_status'])) { $form_status = $_SESSION['form_status']; }
if (isset($_SESSION['form_employment'])) { $form_employment = $_SESSION['form_employment']; }
if (isset($_SESSION['form_height'])) { $form_height = $_SESSION['form_height']; }
if (isset($_SESSION['form_weight'])) { $form_weight = $_SESSION['form_weight']; }
if (isset($_SESSION['form_hand'])) { $form_hand = $_SESSION['form_hand']; }
if (isset($_SESSION['form_blood'])) { $form_blood = $_SESSION['form_blood']; }
if (isset($_SESSION['form_implant'])) { $form_implant = $_SESSION['form_implant']; }
if (isset($_SESSION['form_diu'])) { $form_diu = $_SESSION['form_diu']; }
if (isset($_SESSION['form_type_pregnant_1'])) { $form_type_pregnant_1 = $_SESSION['form_type_pregnant_1']; }
if (isset($_SESSION['form_height_pregnant_1'])) { $form_height_pregnant_1 = $_SESSION['form_height_pregnant_1']; }
if (isset($_SESSION['form_weight_pregnant_1'])) { $form_weight_pregnant_1 = $_SESSION['form_weight_pregnant_1']; }
if (isset($_SESSION['form_term_pregnant_1'])) { $form_term_pregnant_1 = $_SESSION['form_term_pregnant_1']; }
if (isset($_SESSION['form_week_pregnant_1'])) { $form_week_pregnant_1 = $_SESSION['form_week_pregnant_1']; }
if (isset($_SESSION['form_year_pregnant_1'])) { $form_year_pregnant_1 = $_SESSION['form_year_pregnant_1']; }
if (isset($_SESSION['form_comments_pregnant_1'])) { $form_comments_pregnant_1 = $_SESSION['form_comments_pregnant_1']; }
if (isset($_SESSION['form_type_pregnant_2'])) { $form_type_pregnant_2 = $_SESSION['form_type_pregnant_2']; }
if (isset($_SESSION['form_height_pregnant_2'])) { $form_height_pregnant_2 = $_SESSION['form_height_pregnant_2']; }
if (isset($_SESSION['form_weight_pregnant_2'])) { $form_weight_pregnant_2 = $_SESSION['form_weight_pregnant_2']; }
if (isset($_SESSION['form_term_pregnant_2'])) { $form_term_pregnant_2 = $_SESSION['form_term_pregnant_2']; }
if (isset($_SESSION['form_week_pregnant_2'])) { $form_week_pregnant_2 = $_SESSION['form_week_pregnant_2']; }
if (isset($_SESSION['form_year_pregnant_2'])) { $form_year_pregnant_2 = $_SESSION['form_year_pregnant_2']; }
if (isset($_SESSION['form_comments_pregnant_2'])) { $form_comments_pregnant_2 = $_SESSION['form_comments_pregnant_2']; }
if (isset($_SESSION['form_type_pregnant_3'])) { $form_type_pregnant_3 = $_SESSION['form_type_pregnant_3']; }
if (isset($_SESSION['form_height_pregnant_3'])) { $form_height_pregnant_3 = $_SESSION['form_height_pregnant_3']; }
if (isset($_SESSION['form_weight_pregnant_3'])) { $form_weight_pregnant_3 = $_SESSION['form_weight_pregnant_3']; }
if (isset($_SESSION['form_term_pregnant_3'])) { $form_term_pregnant_3 = $_SESSION['form_term_pregnant_3']; }
if (isset($_SESSION['form_week_pregnant_3'])) { $form_week_pregnant_3 = $_SESSION['form_week_pregnant_3']; }
if (isset($_SESSION['form_year_pregnant_3'])) { $form_year_pregnant_3 = $_SESSION['form_year_pregnant_3']; }
if (isset($_SESSION['form_comments_pregnant_3'])) { $form_comments_pregnant_3 = $_SESSION['form_comments_pregnant_3']; }
if (isset($_SESSION['form_type_pregnant_4'])) { $form_type_pregnant_4 = $_SESSION['form_type_pregnant_4']; }
if (isset($_SESSION['form_height_pregnant_4'])) { $form_height_pregnant_4 = $_SESSION['form_height_pregnant_4']; }
if (isset($_SESSION['form_weight_pregnant_4'])) { $form_weight_pregnant_4 = $_SESSION['form_weight_pregnant_4']; }
if (isset($_SESSION['form_term_pregnant_4'])) { $form_term_pregnant_4 = $_SESSION['form_term_pregnant_4']; }
if (isset($_SESSION['form_week_pregnant_4'])) { $form_week_pregnant_4 = $_SESSION['form_week_pregnant_4']; }
if (isset($_SESSION['form_year_pregnant_4'])) { $form_year_pregnant_4 = $_SESSION['form_year_pregnant_4']; }
if (isset($_SESSION['form_comments_pregnant_4'])) { $form_comments_pregnant_4 = $_SESSION['form_comments_pregnant_4']; }
if (isset($_SESSION['form_type_pregnant_5'])) { $form_type_pregnant_5 = $_SESSION['form_type_pregnant_5']; }
if (isset($_SESSION['form_height_pregnant_5'])) { $form_height_pregnant_5 = $_SESSION['form_height_pregnant_5']; }
if (isset($_SESSION['form_weight_pregnant_5'])) { $form_weight_pregnant_5 = $_SESSION['form_weight_pregnant_5']; }
if (isset($_SESSION['form_term_pregnant_5'])) { $form_term_pregnant_5 = $_SESSION['form_term_pregnant_5']; }
if (isset($_SESSION['form_week_pregnant_5'])) { $form_week_pregnant_5 = $_SESSION['form_week_pregnant_5']; }
if (isset($_SESSION['form_year_pregnant_5'])) { $form_year_pregnant_5 = $_SESSION['form_year_pregnant_5']; }
if (isset($_SESSION['form_comments_pregnant_5'])) { $form_comments_pregnant_5 = $_SESSION['form_comments_pregnant_5']; }
if (isset($_SESSION['form_type_pregnant_6'])) { $form_type_pregnant_6 = $_SESSION['form_type_pregnant_6']; }
if (isset($_SESSION['form_height_pregnant_6'])) { $form_height_pregnant_6 = $_SESSION['form_height_pregnant_6']; }
if (isset($_SESSION['form_weight_pregnant_6'])) { $form_weight_pregnant_6 = $_SESSION['form_weight_pregnant_6']; }
if (isset($_SESSION['form_term_pregnant_6'])) { $form_term_pregnant_6 = $_SESSION['form_term_pregnant_6']; }
if (isset($_SESSION['form_week_pregnant_6'])) { $form_week_pregnant_6 = $_SESSION['form_week_pregnant_6']; }
if (isset($_SESSION['form_year_pregnant_6'])) { $form_year_pregnant_6 = $_SESSION['form_year_pregnant_6']; }
if (isset($_SESSION['form_comments_pregnant_6'])) { $form_comments_pregnant_6 = $_SESSION['form_comments_pregnant_6']; }
if (isset($_SESSION['form_type_abort_1'])) { $form_type_abort_1 = $_SESSION['form_type_abort_1']; }
if (isset($_SESSION['form_year_abort_1'])) { $form_year_abort_1 = $_SESSION['form_year_abort_1']; }
if (isset($_SESSION['form_method_abort_1'])) { $form_method_abort_1 = $_SESSION['form_method_abort_1']; }
if (isset($_SESSION['form_week_abort_1'])) { $form_week_abort_1 = $_SESSION['form_week_abort_1']; }
if (isset($_SESSION['form_comments_abort_1'])) { $form_comments_abort_1 = $_SESSION['form_comments_abort_1']; }
if (isset($_SESSION['form_type_abort_2'])) { $form_type_abort_2 = $_SESSION['form_type_abort_2']; }
if (isset($_SESSION['form_year_abort_2'])) { $form_year_abort_2 = $_SESSION['form_year_abort_2']; }
if (isset($_SESSION['form_method_abort_2'])) { $form_method_abort_2 = $_SESSION['form_method_abort_2']; }
if (isset($_SESSION['form_week_abort_2'])) { $form_week_abort_2 = $_SESSION['form_week_abort_2']; }
if (isset($_SESSION['form_comments_abort_2'])) { $form_comments_abort_2 = $_SESSION['form_comments_abort_2']; }
if (isset($_SESSION['form_type_abort_3'])) { $form_type_abort_3 = $_SESSION['form_type_abort_3']; }
if (isset($_SESSION['form_year_abort_3'])) { $form_year_abort_3 = $_SESSION['form_year_abort_3']; }
if (isset($_SESSION['form_method_abort_3'])) { $form_method_abort_3 = $_SESSION['form_method_abort_3']; }
if (isset($_SESSION['form_week_abort_3'])) { $form_week_abort_3 = $_SESSION['form_week_abort_3']; }
if (isset($_SESSION['form_comments_abort_3'])) { $form_comments_abort_3 = $_SESSION['form_comments_abort_3']; }

?>
<main>
    <?php if (isset($_GET['msg'])) { ?>
        <p class="error"><?php echo $_GET['msg']; ?></p>
    <?php } else { ?>
        <div class="form-header">
            <div class="form-header-logo">
                <img src="build/img/icons/TotalSolutionsSurrogacyWhite.webp" alt="EggDonor">
            </div>
            <div class="form-header-title form-white">
                <div class="spanish">
                    Ficha de registro para gestante
                </div>
            </div>
        </div>
        <form class="form form-phenotype" action="candidate3.php" method="post" enctype="multipart/form-data">
            <?php if(!isset($prenancy_num)) { $prenancy_num = 0; } ?>
            <?php for ($i = 0; $i < $prenancy_num; $i++) { ?>
                <div class="form-characteristics">
                    <div class="form-subtitle form-white">
                        <div class="spanish">Datos relacionados con el embarazo <?php echo $i + 1 ?></div>
                    </div>
                </div>
                <div class="form-grid">
                    <div class="column-1">
                        <div class="form-grid-element">
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_1_" . $i+1 ?>" type="checkbox" value="1" id="<?php echo "form_1_" . $i+1 ?>" <?php $p = $i + 1; if (${"codes_" . $p . "_1"} == "2") { echo "checked";} ?>>
                                <label class="form-check-label" for="<?php echo "form_1_" . $i+1 ?>">
                                    <div class="spanish">Cirugía uterina previa </div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_2_" . $i+1 ?>" type="checkbox" value="2" id="<?php echo "form_2_" . $i+1 ?>" <?php $p = $i + 1; if (${"codes_" . $p . "_2"} == "2") { echo "checked";} ?>>
                                <label class="form-check-label" for="<?php echo "form_2_" . $i+1 ?>">
                                    <div class="spanish">Cirugía abdominal</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_3_" . $i+1 ?>" type="checkbox" value="3" id="<?php echo "form_3_" . $i+1 ?>" <?php $p = $i + 1; if (${"codes_" . $p . "_3"} == "2") { echo "checked";} ?>>
                                <label class="form-check-label" for="<?php echo "form_3_" . $i+1 ?>">
                                    <div class="spanish">Multigesta</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_4_" . $i+1 ?>" type="checkbox" value="4" id="<?php echo "form_4_" . $i+1 ?>" <?php $p = $i + 1; if (${"codes_" . $p . "_4"} == "2") { echo "checked";} ?>>
                                <label class="form-check-label" for="<?php echo "form_4_" . $i+1 ?>">
                                    <div class="spanish">Embarazo múltiple</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_5_" . $i+1 ?>" type="checkbox" value="5" id="<?php echo "form_5_" . $i+1 ?>" <?php $p = $i + 1; if (${"codes_" . $p . "_5"} == "2") { echo "checked";} ?>>
                                <label class="form-check-label" for="<?php echo "form_5_" . $i+1 ?>">
                                    <div class="spanish">Hemorragia obstétrica</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_6_" . $i+1 ?>" type="checkbox" value="6" id="<?php echo "form_6_" . $i+1 ?>" <?php $p = $i + 1; if (${"codes_" . $p . "_6"} == "2") { echo "checked";} ?>>
                                <label class="form-check-label" for="<?php echo "form_6_" . $i+1 ?>">
                                    <div class="spanish">Miomatosis uterina de grandes elementos</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_7_" . $i+1 ?>" type="checkbox" value="7" id="<?php echo "form_7_" . $i+1 ?>" <?php $p = $i + 1; if (${"codes_" . $p . "_7"} == "2") { echo "checked";} ?>>
                                <label class="form-check-label" for="<?php echo "form_7_" . $i+1 ?>">
                                    <div class="spanish">Peso fetal estimado > 4000 gr < 2000 gr</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_8_" . $i+1 ?>" type="checkbox" value="8" id="<?php echo "form_8_" . $i+1 ?>" <?php $p = $i + 1; if (${"codes_" . $p . "_8"} == "2") { echo "checked";} ?>>
                                <label class="form-check-label" for="<?php echo "form_8_" . $i+1 ?>">
                                    <div class="spanish">Obesidad IMC > 37</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_9_" . $i+1 ?>" type="checkbox" value="9" id="<?php echo "form_9_" . $i+1 ?>" <?php $p = $i + 1; if (${"codes_" . $p . "_9"} == "2") { echo "checked";} ?>>
                                <label class="form-check-label" for="<?php echo "form_9_" . $i+1 ?>">
                                    <div class="spanish">Malformación congénita</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_10_" . $i+1 ?>" type="checkbox" value="10" id="<?php echo "form_10_" . $i+1 ?>" <?php $p = $i + 1; if (${"codes_" . $p . "_10"} == "2") { echo "checked";} ?>>
                                <label class="form-check-label" for="<?php echo "form_10_" . $i+1 ?>">
                                    <div class="spanish">Sin control prenatal en los embarazos</div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="column-2">
                        <div class="form-grid-element">
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_11_" . $i+1 ?>" type="checkbox" value="11" id="<?php echo "form_11_" . $i+1 ?>" <?php $p = $i + 1; if (${"codes_" . $p . "_11"} == "2") { echo "checked";} ?>>
                                <label class="form-check-label" for="<?php echo "form_11_" . $i+1 ?>">
                                    <div class="spanish">Periodo intergenésico corto < 18 meses </div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_12_" . $i+1 ?>" type="checkbox" value="12" id="<?php echo "form_12_" . $i+1 ?>" <?php $p = $i + 1; if (${"codes_" . $p . "_12"} == "2") { echo "checked";} ?>>
                                <label class="form-check-label" for="<?php echo "form_12_" . $i+1 ?>">
                                    <div class="spanish">COVID en los últimos 6 meses</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_13_" . $i+1 ?>" type="checkbox" value="13" id="<?php echo "form_13_" . $i+1 ?>" <?php $p = $i + 1; if (${"codes_" . $p . "_13"} == "2") { echo "checked";} ?>>
                                <label class="form-check-label" for="<?php echo "form_13_" . $i+1 ?>">
                                    <div class="spanish">Comorbilidades preexistentes que compliquen el embarazo y al neonato (endocrinológicas, cardiológicas, e inmunológicas)</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_14_" . $i+1 ?>" type="checkbox" value="14" id="<?php echo "form_14_" . $i+1 ?>" <?php $p = $i + 1; if (${"codes_" . $p . "_14"} == "2") { echo "checked";} ?>>
                                <label class="form-check-label" for="<?php echo "form_14_" . $i+1 ?>">
                                    <div class="spanish">Enfermedad hipertensivas</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_15_" . $i+1 ?>" type="checkbox" value="15" id="<?php echo "form_15_" . $i+1 ?>" <?php $p = $i + 1; if (${"codes_" . $p . "_15"} == "2") { echo "checked";} ?>>
                                <label class="form-check-label" for="<?php echo "form_15_" . $i+1 ?>">
                                    <div class="spanish">Enfermedades infectocontagiosos (VIH, Hepatitis B y C)</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_16_" . $i+1 ?>" type="checkbox" value="16" id="<?php echo "form_16_" . $i+1 ?>" <?php $p = $i + 1; if (${"codes_" . $p . "_16"} == "2") { echo "checked";} ?>>
                                <label class="form-check-label" for="<?php echo "form_16_" . $i+1 ?>">
                                    <div class="spanish">Sepsis</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_17_" . $i+1 ?>" type="checkbox" value="17" id="<?php echo "form_17_" . $i+1 ?>" <?php $p = $i + 1; if (${"codes_" . $p . "_17"} == "2") { echo "checked";} ?>>
                                <label class="form-check-label" for="<?php echo "form_17_" . $i+1 ?>">
                                    <div class="spanish">Síndrome de Hellp</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_18_" . $i+1 ?>" type="checkbox" value="18" id="<?php echo "form_18_" . $i+1 ?>" <?php $p = $i + 1; if (${"codes_" . $p . "_18"} == "2") { echo "checked";} ?>>
                                <label class="form-check-label" for="<?php echo "form_18_" . $i+1 ?>">
                                    <div class="spanish">Placenta previa</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_19_" . $i+1 ?>" type="checkbox" value="19" id="<?php echo "form_19_" . $i+1 ?>" <?php $p = $i + 1; if (${"codes_" . $p . "_19"} == "2") { echo "checked";} ?>>
                                <label class="form-check-label" for="<?php echo "form_19_" . $i+1 ?>">
                                    <div class="spanish">Sospecha de placenta acreta o placenta percreta</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_20_" . $i+1 ?>" type="checkbox" value="20" id="<?php echo "form_20_" . $i+1 ?>" <?php $p = $i + 1; if (${"codes_" . $p . "_20"} == "2") { echo "checked";} ?>>
                                <label class="form-check-label" for="<?php echo "form_20_" . $i+1 ?>">
                                    <div class="spanish">Sin control prenatal en los embarazos</div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="form-characteristics">
                <div class="form-subtitle form-white">
                    <div class="spanish">¿Cuenta con alguna otra enfermedad que genere algún riesgo adicional para su salud? Especifique </div>
                </div>
            </div>
            <div class="col-md-12">
                <label for="validationTextarea" class="form-label"></label>
                <textarea class="form-control-phenotype-msg" name="form_risk_notes" id="validationTextarea"> <?php echo $form_risk_notes; ?> </textarea>
            </div>
            <div class="form-characteristics">
                <div class="form-subtitle form-white">
                    <div class="spanish">Antecedentes médico históricos</div>
                </div>
            </div>
            <div class="form-top">
                <div class="col-md-6 form-top-element">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Anemia:
                        </div>
                    </label>
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                    <select name="form_anemy">
                        <?php if($form_anemy == "sí") { ?>
                            <option value="sí" selected>Sí</option>
                            <option value="no">No</option>
                        <?php } else { ?>
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
                            Diabetes:
                        </div>
                    </label>
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                    <select name="form_diabetes">
                    <?php if($form_diabetes == "sí") { ?>
                            <option value="sí" selected>Sí</option>
                            <option value="no">No</option>
                        <?php } else { ?>
                            <option value="sí">Sí</option>
                            <option value="no" selected>No</option>
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
                            Transfusión:
                        </div>
                    </label>
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                    <select name="form_transfusion">
                        <?php if($form_transfusion == "sí") { ?>
                            <option value="sí" selected>Sí</option>
                            <option value="no">No</option>
                        <?php } else { ?>
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
                            Hipertensión:
                        </div>
                    </label>
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                    <select name="form_hipertension">
                        <?php if($form_hipertension == "sí") { ?>
                            <option value="sí" selected>Sí</option>
                            <option value="no">No</option>
                        <?php } else { ?>
                            <option value="sí">Sí</option>
                            <option value="no" selected>No</option>
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
                            Cáncer:
                        </div>
                    </label>
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                    <select name="form_cancer">
                        <?php if($form_cancer == "sí") { ?>
                            <option value="sí" selected>Sí</option>
                            <option value="no">No</option>
                        <?php } else { ?>
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
                            Dislexia:
                        </div>
                    </label>
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                    <select name="form_dislexia">
                        <?php if($form_dislexia == "sí") { ?>
                            <option value="sí" selected>Sí</option>
                            <option value="no">No</option>
                        <?php } else { ?>
                            <option value="sí">Sí</option>
                            <option value="no" selected>No</option>
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
                            Dislocación de cadera:
                        </div>
                    </label>
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                    <select name="form_waist">
                        <?php if($form_waist == "sí") { ?>
                            <option value="sí" selected>Sí</option>
                            <option value="no">No</option>
                        <?php } else { ?>
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
                            Migraña:
                        </div>
                    </label>
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                    <select name="form_migraine">
                        <?php if($form_migraine == "sí") { ?>
                            <option value="sí" selected>Sí</option>
                            <option value="no">No</option>
                        <?php } else { ?>
                            <option value="sí">Sí</option>
                            <option value="no" selected>No</option>
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
                            Fuma:
                        </div>
                    </label>
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                    <select name="form_smoke" id="form-smoke-select" onchange="smokeEnable()">
                        <?php if($form_smoke == "sí") { ?>
                            <option value="sí" selected>Sí</option>
                            <option value="no">No</option>
                        <?php } else { ?>
                            <option value="sí">Sí</option>
                            <option value="no" selected>No</option>
                        <?php } ?>
                    </select>
                    <div class="invalid-feedback">
                        <div>Seleccione una opción</div>
                    </div>
                </div>
            </div>
            <div class="form-top display-none" id="form-smoke-field">
                <div class="col-md-6 form-top-element">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Frecuencia:
                        </div>
                    </label>
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                    <select name="form_smoke_times">
                        <?php if($form_smoke_times == "3 veces por semana") { ?>
                            <option value="3 veces por semana" selected>3 veces por semana</option>
                            <option value="2 veces por semana">2 veces por semana</option>
                            <option value="1 vez por semana">1 veces por semana</option>
                            <option value="en eventos">En eventos/reuniones</option>
                            <option value="eventualmente">Eventualmente</option>
                            <option value="diario">Diario</option>
                        <?php } elseif ($form_smoke_times == "2 veces por semana") {?>
                            <option value="3 veces por semana">3 veces por semana</option>
                            <option value="2 veces por semana" selected>2 veces por semana</option>
                            <option value="1 vez por semana">1 veces por semana</option>
                            <option value="en eventos">En eventos/reuniones</option>
                            <option value="eventualmente">Eventualmente</option>
                            <option value="diario">Diario</option>
                        <?php } elseif ($form_smoke_times == "1 vez por semana") {?>
                            <option value="3 veces por semana">3 veces por semana</option>
                            <option value="2 veces por semana">2 veces por semana</option>
                            <option value="1 vez por semana" selected>1 veces por semana</option>
                            <option value="en eventos">En eventos/reuniones</option>
                            <option value="eventualmente">Eventualmente</option>
                            <option value="diario">Diario</option>
                        <?php } elseif ($form_smoke_times == "en eventos") {?>
                            <option value="3 veces por semana">3 veces por semana</option>
                            <option value="2 veces por semana">2 veces por semana</option>
                            <option value="1 vez por semana">1 veces por semana</option>
                            <option value="en eventos" selected>En eventos/reuniones</option>
                            <option value="eventualmente">Eventualmente</option>
                            <option value="diario">Diario</option>
                        <?php } elseif ($form_smoke_times == "eventualmente") {?>
                            <option value="3 veces por semana">3 veces por semana</option>
                            <option value="2 veces por semana">2 veces por semana</option>
                            <option value="1 vez por semana">1 veces por semana</option>
                            <option value="en eventos">En eventos/reuniones</option>
                            <option value="eventualmente" selected>Eventualmente</option>
                            <option value="diario">Diario</option>
                        <?php } elseif ($form_smoke_times == "diario") {?>
                            <option value="3 veces por semana">3 veces por semana</option>
                            <option value="2 veces por semana">2 veces por semana</option>
                            <option value="1 vez por semana">1 veces por semana</option>
                            <option value="en eventos">En eventos/reuniones</option>
                            <option value="eventualmente">Eventualmente</option>
                            <option value="diario" selected>Diario</option>
                        <?php } ?>
                    </select>
                    <div class="invalid-feedback">
                        <div>Seleccione una opción</div>
                    </div>
                </div>
                <div class="col-md-6 form-top-element">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Cantidad:
                        </div>
                    </label>
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                    <select name="form_smoke_qty">
                        <?php if ($form_smoke_qty = "más de 10 al día") { ?>
                            <option value="más de 10 al día" selected>Más de 10 al día</option>
                            <option value="de 5 a 10 al día">De 5 a 10 al día</option>
                            <option value="de 3 a 5 por día">De 3 a 5 por día</option>
                            <option value="hasta 3 al día">Hasta 3 al día</option>
                            <option value="1 al día">1 al día</option>
                        <?php } elseif ($form_smoke_qty = "de 5 a 10 al día") { ?>
                            <option value="más de 10 al día">Más de 10 al día</option>
                            <option value="de 5 a 10 al día" selected>De 5 a 10 al día</option>
                            <option value="de 3 a 5 por día">De 3 a 5 por día</option>
                            <option value="hasta 3 al día">Hasta 3 al día</option>
                            <option value="1 al día">1 al día</option>
                        <?php } elseif ($form_smoke_qty = "de 3 a 5 por día") { ?>
                            <option value="más de 10 al día">Más de 10 al día</option>
                            <option value="de 5 a 10 al día">De 5 a 10 al día</option>
                            <option value="de 3 a 5 por día" selected>De 3 a 5 por día</option>
                            <option value="hasta 3 al día">Hasta 3 al día</option>
                            <option value="1 al día">1 al día</option>
                        <?php } elseif ($form_smoke_qty = "hasta 3 al día") { ?>
                            <option value="más de 10 al día">Más de 10 al día</option>
                            <option value="de 5 a 10 al día">De 5 a 10 al día</option>
                            <option value="de 3 a 5 por día">De 3 a 5 por día</option>
                            <option value="hasta 3 al día" selected>Hasta 3 al día</option>
                            <option value="1 al día">1 al día</option>
                        <?php } elseif ($form_smoke_qty = "1 al día") { ?>
                            <option value="más de 10 al día">Más de 10 al día</option>
                            <option value="de 5 a 10 al día">De 5 a 10 al día</option>
                            <option value="de 3 a 5 por día">De 3 a 5 por día</option>
                            <option value="hasta 3 al día">Hasta 3 al día</option>
                            <option value="1 al día" selected>1 al día</option>
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
                            Toma alcohol:
                        </div>
                    </label>
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                    <select name="form_alcohol" id="form-alcohol-select" onchange="alcoholEnable()">
                        <?php if($form_alcohol == "sí") { ?>
                            <option value="sí" selected>Sí</option>
                            <option value="no">No</option>
                        <?php } else { ?>
                            <option value="sí">Sí</option>
                            <option value="no" selected>No</option>
                        <?php } ?>
                    </select>
                    <div class="invalid-feedback">
                        <div>Seleccione una opción</div>
                    </div>
                </div>
                <div class="col-md-6 form-top-element display-none" id="form-alcohol-field">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Frecuencia:
                        </div>
                    </label>
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                    <select name="form_alcohol_freq">
                    <?php if($form_alcohol_freq == "3 veces por semana") { ?>
                            <option value="3 veces por semana" selected>3 veces por semana</option>
                            <option value="2 veces por semana">2 veces por semana</option>
                            <option value="1 vez por semana">1 veces por semana</option>
                            <option value="en eventos">En eventos/reuniones</option>
                            <option value="eventualmente">Eventualmente</option>
                            <option value="diario">Diario</option>
                        <?php } elseif ($form_alcohol_freq == "2 veces por semana") {?>
                            <option value="3 veces por semana">3 veces por semana</option>
                            <option value="2 veces por semana" selected>2 veces por semana</option>
                            <option value="1 vez por semana">1 veces por semana</option>
                            <option value="en eventos">En eventos/reuniones</option>
                            <option value="eventualmente">Eventualmente</option>
                            <option value="diario">Diario</option>
                        <?php } elseif ($form_alcohol_freq == "1 vez por semana") {?>
                            <option value="3 veces por semana">3 veces por semana</option>
                            <option value="2 veces por semana">2 veces por semana</option>
                            <option value="1 vez por semana" selected>1 veces por semana</option>
                            <option value="en eventos">En eventos/reuniones</option>
                            <option value="eventualmente">Eventualmente</option>
                            <option value="diario">Diario</option>
                        <?php } elseif ($form_alcohol_freq == "en eventos") {?>
                            <option value="3 veces por semana">3 veces por semana</option>
                            <option value="2 veces por semana">2 veces por semana</option>
                            <option value="1 vez por semana">1 veces por semana</option>
                            <option value="en eventos" selected>En eventos/reuniones</option>
                            <option value="eventualmente">Eventualmente</option>
                            <option value="diario">Diario</option>
                        <?php } elseif ($form_alcohol_freq == "eventualmente") {?>
                            <option value="3 veces por semana">3 veces por semana</option>
                            <option value="2 veces por semana">2 veces por semana</option>
                            <option value="1 vez por semana">1 veces por semana</option>
                            <option value="en eventos">En eventos/reuniones</option>
                            <option value="eventualmente" selected>Eventualmente</option>
                            <option value="diario">Diario</option>
                        <?php } elseif ($form_alcohol_freq == "diario") {?>
                            <option value="3 veces por semana">3 veces por semana</option>
                            <option value="2 veces por semana">2 veces por semana</option>
                            <option value="1 vez por semana">1 veces por semana</option>
                            <option value="en eventos">En eventos/reuniones</option>
                            <option value="eventualmente">Eventualmente</option>
                            <option value="diario" selected>Diario</option>
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
                            Fractura:
                        </div>
                    </label>
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                    <select name="form_fracture" id="form-fracture-select" onchange="fractureEnable()">
                        <?php if($form_fracture == "sí") { ?>
                            <option value="sí" selected>Sí</option>
                            <option value="no">No</option>
                        <?php } else { ?>
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
                            Cirugía:
                        </div>
                    </label>
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                    <select name="form_surgery" id="form-surgery-select" onchange="surgeryEnable()">
                        <?php if($form_surgery == "sí") { ?>
                            <option value="sí" selected>Sí</option>
                            <option value="no">No</option>
                        <?php } else { ?>
                            <option value="sí">Sí</option>
                            <option value="no" selected>No</option>
                        <?php } ?>
                    </select>
                    <div class="invalid-feedback">
                        <div>Seleccione una opción</div>
                    </div>
                </div>
            </div>
            <div class="form-top">
                <div class="col-md-6 form-top-element display-transparent" id="form-fracture-field">
                    <label for="validationDefault01">
                        <div class="spanish">
                            Especifique la fractura:
                        </div>
                    </label>
                    <input type="text" class="form-control-phenotype" id="validationDefault01" name="form_fracture_info" value="<?php echo $form_fracture_info; ?>" />
                    <div class="invalid-feedback">
                        <div>Ingrese la información</div>
                    </div>
                </div>
                <div class="col-md-6 form-top-element display-transparent" id="form-surgery-field">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Especifique la cirugía:
                        </div>
                    </label>
                    <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_surgery_info" value="<?php echo $form_surgery_info; ?>" />
                    <div class="invalid-feedback">
                        <div>Ingrese el información</div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="form_curp" value="<?php echo $form_curp ?>">
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
            <input type="hidden" name="form_method_abort_1" value="<?php echo $form_method_abort_1 ?>">
            <input type="hidden" name="form_week_abort_1" value="<?php echo $form_week_abort_1 ?>">
            <input type="hidden" name="form_comments_abort_1" value="<?php echo $form_comments_abort_1 ?>">
            <input type="hidden" name="form_type_abort_2" value="<?php echo $form_type_abort_2 ?>">
            <input type="hidden" name="form_year_abort_2" value="<?php echo $form_year_abort_2 ?>">
            <input type="hidden" name="form_method_abort_2" value="<?php echo $form_method_abort_2 ?>">
            <input type="hidden" name="form_week_abort_2" value="<?php echo $form_week_abort_2 ?>">
            <input type="hidden" name="form_comments_abort_2" value="<?php echo $form_comments_abort_2 ?>">
            <input type="hidden" name="form_type_abort_3" value="<?php echo $form_type_abort_3 ?>">
            <input type="hidden" name="form_year_abort_3" value="<?php echo $form_year_abort_3 ?>">
            <input type="hidden" name="form_method_abort_3" value="<?php echo $form_method_abort_3 ?>">
            <input type="hidden" name="form_week_abort_3" value="<?php echo $form_week_abort_3 ?>">
            <input type="hidden" name="form_comments_abort_3" value="<?php echo $form_comments_abort_3 ?>">
            <input type="hidden" id="pregnancyNum" name="pregnancyNum" value="<?php echo $num_pregnants; ?>">
            <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
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
            <div class="form-btn btn-arrange">
                <button class="btn btn-send" id="return1">
                    <div>Anterior</div>
                </button>
                <button class="btn btn-send" type="submit">
                    <div>Siguiente</div>
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
    <?php } ?>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="build/js/form2.min.js"></script>
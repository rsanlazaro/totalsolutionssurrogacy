<?php

use Symfony\Component\VarDumper\VarDumper;

include 'includes/templates/header.php';
include "includes/app.php";

$conn = connectDB();
if (isset($_POST['form_name'])) {
    $form_name = $_POST['form_name'];
    $_SESSION['form_name'] = $form_name;
}
if (isset($_POST['form_date'])) {
    $form_date = $_POST['form_date'];
    $_SESSION['form_date'] = $form_date;
}
if (isset($_POST['form_age'])) {
    $form_age = $_POST['form_age'];
    $_SESSION['form_age'] = $form_age;
}
if (isset($_POST['form_birth_place'])) {
    $form_birth_place = $_POST['form_birth_place'];
    $_SESSION['form_birth_place'] = $form_birth_place;
}
if (isset($_POST['form_status'])) {
    $form_status = $_POST['form_status'];
    $_SESSION['form_status'] = $form_status;
}
if (isset($_POST['form_employment'])) {
    $form_employment = $_POST['form_employment'];
    $_SESSION['form_employment'] = $form_employment;
}
if (isset($_POST['form_height'])) {
    $form_height = $_POST['form_height'];
    $_SESSION['form_height'] = $form_height;
}
if (isset($_POST['form_weight'])) {
    $form_weight = $_POST['form_weight'];
    $_SESSION['form_weight'] = $form_weight;
}
if (isset($_POST['form_hand'])) {
    $form_hand = $_POST['form_hand'];
    $_SESSION['form_hand'] = $form_hand;
}
if (isset($_POST['form_blood'])) {
    $form_blood = $_POST['form_blood'];
    $_SESSION['form_blood'] = $form_blood;
}
if (isset($_POST['form_implant'])) {
    $form_implant = $_POST['form_implant'];
    $_SESSION['form_implant'] = $form_implant;
}
if (isset($_POST['form_diu'])) {
    $form_diu = $_POST['form_diu'];
    $_SESSION['form_diu'] = $form_diu;
}
if (isset($_POST['form_type_pregnant_1'])) {
    $form_type_pregnant_1 = $_POST['form_type_pregnant_1'];
    $_SESSION['form_type_pregnant_1'] = $form_type_pregnant_1;
}
if (isset($_POST['form_height_pregnant_1'])) {
    $form_height_pregnant_1 = $_POST['form_height_pregnant_1'];
    $_SESSION['form_height_pregnant_1'] = $form_height_pregnant_1;
}
if (isset($_POST['form_weight_pregnant_1'])) {
    $form_weight_pregnant_1 = $_POST['form_weight_pregnant_1'];
    $_SESSION['form_weight_pregnant_1'] = $form_weight_pregnant_1;
}
if (isset($_POST['form_term_pregnant_1'])) {
    $form_term_pregnant_1 = $_POST['form_term_pregnant_1'];
    $_SESSION['form_term_pregnant_1'] = $form_term_pregnant_1;
}
if (isset($_POST['form_week_pregnant_1'])) {
    $form_week_pregnant_1 = $_POST['form_week_pregnant_1'];
    $_SESSION['form_week_pregnant_1'] = $form_week_pregnant_1;
}
if (isset($_POST['form_year_pregnant_1'])) {
    $form_year_pregnant_1 = $_POST['form_year_pregnant_1'];
    $_SESSION['form_year_pregnant_1'] = $form_year_pregnant_1;
}
if (isset($_POST['form_comments_pregnant_1'])) {
    $form_comments_pregnant_1 = $_POST['form_comments_pregnant_1'];
    $_SESSION['form_comments_pregnant_1'] = $form_comments_pregnant_1;
}
if (isset($_POST['form_type_pregnant_2'])) {
    $form_type_pregnant_2 = $_POST['form_type_pregnant_2'];
    $_SESSION['form_type_pregnant_2'] = $form_type_pregnant_2;
}
if (isset($_POST['form_height_pregnant_2'])) {
    $form_height_pregnant_2 = $_POST['form_height_pregnant_2'];
    $_SESSION['form_height_pregnant_2'] = $form_height_pregnant_2;
}
if (isset($_POST['form_weight_pregnant_2'])) {
    $form_weight_pregnant_2 = $_POST['form_weight_pregnant_2'];
    $_SESSION['form_weight_pregnant_2'] = $form_weight_pregnant_2;
}
if (isset($_POST['form_term_pregnant_2'])) {
    $form_term_pregnant_2 = $_POST['form_term_pregnant_2'];
    $_SESSION['form_term_pregnant_2'] = $form_term_pregnant_2;
}
if (isset($_POST['form_week_pregnant_2'])) {
    $form_week_pregnant_2 = $_POST['form_week_pregnant_2'];
    $_SESSION['form_week_pregnant_2'] = $form_week_pregnant_2;
}
if (isset($_POST['form_year_pregnant_2'])) {
    $form_year_pregnant_2 = $_POST['form_year_pregnant_2'];
    $_SESSION['form_year_pregnant_2'] = $form_year_pregnant_2;
}
if (isset($_POST['form_comments_pregnant_2'])) {
    $form_comments_pregnant_2 = $_POST['form_comments_pregnant_2'];
    $_SESSION['form_comments_pregnant_2'] = $form_comments_pregnant_2;
}
if (isset($_POST['form_type_pregnant_3'])) {
    $form_type_pregnant_3 = $_POST['form_type_pregnant_3'];
    $_SESSION['form_type_pregnant_3'] = $form_type_pregnant_3;
}
if (isset($_POST['form_height_pregnant_3'])) {
    $form_height_pregnant_3 = $_POST['form_height_pregnant_3'];
    $_SESSION['form_height_pregnant_3'] = $form_height_pregnant_3;
}
if (isset($_POST['form_weight_pregnant_3'])) {
    $form_weight_pregnant_3 = $_POST['form_weight_pregnant_3'];
    $_SESSION['form_weight_pregnant_3'] = $form_weight_pregnant_3;
}
if (isset($_POST['form_term_pregnant_3'])) {
    $form_term_pregnant_3 = $_POST['form_term_pregnant_3'];
    $_SESSION['form_term_pregnant_3'] = $form_term_pregnant_3;
}
if (isset($_POST['form_week_pregnant_3'])) {
    $form_week_pregnant_3 = $_POST['form_week_pregnant_3'];
    $_SESSION['form_week_pregnant_3'] = $form_week_pregnant_3;
}
if (isset($_POST['form_year_pregnant_3'])) {
    $form_year_pregnant_3 = $_POST['form_year_pregnant_3'];
    $_SESSION['form_year_pregnant_3'] = $form_year_pregnant_3;
}
if (isset($_POST['form_comments_pregnant_3'])) {
    $form_comments_pregnant_3 = $_POST['form_comments_pregnant_3'];
    $_SESSION['form_comments_pregnant_3'] = $form_comments_pregnant_3;
}
if (isset($_POST['form_type_pregnant_4'])) {
    $form_type_pregnant_4 = $_POST['form_type_pregnant_4'];
    $_SESSION['form_type_pregnant_4'] = $form_type_pregnant_4;
}
if (isset($_POST['form_height_pregnant_4'])) {
    $form_height_pregnant_4 = $_POST['form_height_pregnant_4'];
    $_SESSION['form_height_pregnant_4'] = $form_height_pregnant_4;
}
if (isset($_POST['form_weight_pregnant_4'])) {
    $form_weight_pregnant_4 = $_POST['form_weight_pregnant_4'];
    $_SESSION['form_weight_pregnant_4'] = $form_weight_pregnant_4;
}
if (isset($_POST['form_term_pregnant_4'])) {
    $form_term_pregnant_4 = $_POST['form_term_pregnant_4'];
    $_SESSION['form_term_pregnant_4'] = $form_term_pregnant_4;
}
if (isset($_POST['form_week_pregnant_4'])) {
    $form_week_pregnant_4 = $_POST['form_week_pregnant_4'];
    $_SESSION['form_week_pregnant_4'] = $form_week_pregnant_4;
}
if (isset($_POST['form_year_pregnant_4'])) {
    $form_year_pregnant_4 = $_POST['form_year_pregnant_4'];
    $_SESSION['form_year_pregnant_4'] = $form_year_pregnant_4;
}
if (isset($_POST['form_comments_pregnant_4'])) {
    $form_comments_pregnant_4 = $_POST['form_comments_pregnant_4'];
    $_SESSION['form_comments_pregnant_4'] = $form_comments_pregnant_4;
}
if (isset($_POST['form_type_pregnant_5'])) {
    $form_type_pregnant_5 = $_POST['form_type_pregnant_5'];
    $_SESSION['form_type_pregnant_5'] = $form_type_pregnant_5;
}
if (isset($_POST['form_height_pregnant_5'])) {
    $form_height_pregnant_5 = $_POST['form_height_pregnant_5'];
    $_SESSION['form_height_pregnant_5'] = $form_height_pregnant_5;
}
if (isset($_POST['form_weight_pregnant_5'])) {
    $form_weight_pregnant_5 = $_POST['form_weight_pregnant_5'];
    $_SESSION['form_weight_pregnant_5'] = $form_weight_pregnant_5;
}
if (isset($_POST['form_term_pregnant_5'])) {
    $form_term_pregnant_5 = $_POST['form_term_pregnant_5'];
    $_SESSION['form_term_pregnant_5'] = $form_term_pregnant_5;
}
if (isset($_POST['form_week_pregnant_5'])) {
    $form_week_pregnant_5 = $_POST['form_week_pregnant_5'];
    $_SESSION['form_week_pregnant_5'] = $form_week_pregnant_5;
}
if (isset($_POST['form_year_pregnant_5'])) {
    $form_year_pregnant_5 = $_POST['form_year_pregnant_5'];
    $_SESSION['form_year_pregnant_5'] = $form_year_pregnant_5;
}
if (isset($_POST['form_comments_pregnant_5'])) {
    $form_comments_pregnant_5 = $_POST['form_comments_pregnant_5'];
    $_SESSION['form_comments_pregnant_5'] = $form_comments_pregnant_5;
}
if (isset($_POST['form_type_pregnant_6'])) {
    $form_type_pregnant_6 = $_POST['form_type_pregnant_6'];
    $_SESSION['form_type_pregnant_6'] = $form_type_pregnant_6;
}
if (isset($_POST['form_height_pregnant_6'])) {
    $form_height_pregnant_6 = $_POST['form_height_pregnant_6'];
    $_SESSION['form_height_pregnant_6'] = $form_height_pregnant_6;
}
if (isset($_POST['form_weight_pregnant_6'])) {
    $form_weight_pregnant_6 = $_POST['form_weight_pregnant_6'];
    $_SESSION['form_weight_pregnant_6'] = $form_weight_pregnant_6;
}
if (isset($_POST['form_term_pregnant_6'])) {
    $form_term_pregnant_6 = $_POST['form_term_pregnant_6'];
    $_SESSION['form_term_pregnant_6'] = $form_term_pregnant_6;
}
if (isset($_POST['form_week_pregnant_6'])) {
    $form_week_pregnant_6 = $_POST['form_week_pregnant_6'];
    $_SESSION['form_week_pregnant_6'] = $form_week_pregnant_6;
}
if (isset($_POST['form_year_pregnant_6'])) {
    $form_year_pregnant_6 = $_POST['form_year_pregnant_6'];
    $_SESSION['form_year_pregnant_6'] = $form_year_pregnant_6;
}
if (isset($_POST['form_comments_pregnant_6'])) {
    $form_comments_pregnant_6 = $_POST['form_comments_pregnant_6'];
    $_SESSION['form_comments_pregnant_6'] = $form_comments_pregnant_6;
}
if (isset($_POST['form_type_abort_1'])) {
    $form_type_abort_1 = $_POST['form_type_abort_1'];
    $_SESSION['form_type_abort_1'] = $form_type_abort_1;
}
if (isset($_POST['form_year_abort_1'])) {
    $form_year_abort_1 = $_POST['form_year_abort_1'];
    $_SESSION['form_year_abort_1'] = $form_year_abort_1;
}
if (isset($_POST['form_week_abort_1'])) {
    $form_week_abort_1 = $_POST['form_week_abort_1'];
    $_SESSION['form_week_abort_1'] = $form_week_abort_1;
}
if (isset($_POST['form_comments_abort_1'])) {
    $form_comments_abort_1 = $_POST['form_comments_abort_1'];
    $_SESSION['form_comments_abort_1'] = $form_comments_abort_1;
}
if (isset($_POST['form_type_abort_2'])) {
    $form_type_abort_2 = $_POST['form_type_abort_2'];
    $_SESSION['form_type_abort_2'] = $form_type_abort_2;
}
if (isset($_POST['form_year_abort_2'])) {
    $form_year_abort_2 = $_POST['form_year_abort_2'];
    $_SESSION['form_year_abort_2'] = $form_year_abort_2;
}
if (isset($_POST['form_week_abort_2'])) {
    $form_week_abort_2 = $_POST['form_week_abort_2'];
    $_SESSION['form_week_abort_2'] = $form_week_abort_2;
}
if (isset($_POST['form_comments_abort_2'])) {
    $form_comments_abort_2 = $_POST['form_comments_abort_2'];
    $_SESSION['form_comments_abort_2'] = $form_comments_abort_2;
}
if (isset($_POST['form_type_abort_3'])) {
    $form_type_abort_3 = $_POST['form_type_abort_3'];
    $_SESSION['form_type_abort_3'] = $form_type_abort_3;
}
if (isset($_POST['form_year_abort_3'])) {
    $form_year_abort_3 = $_POST['form_year_abort_3'];
    $_SESSION['form_year_abort_3'] = $form_year_abort_3;
}
if (isset($_POST['form_week_abort_3'])) {
    $form_week_abort_3 = $_POST['form_week_abort_3'];
    $_SESSION['form_week_abort_3'] = $form_week_abort_3;
}
if (isset($_POST['form_comments_abort_3'])) {
    $form_comments_abort_3 = $_POST['form_comments_abort_3'];
    $_SESSION['form_comments_abort_3'] = $form_comments_abort_3;
}
if (isset($_POST['form_risk_notes'])) {
    $form_risk_notes = $_POST['form_risk_notes'];
    $_SESSION['form_risk_notes'] = $form_risk_notes;
}
if (isset($_POST['form_anemy'])) {
    $form_anemy = $_POST['form_anemy'];
    $_SESSION['form_anemy'] = $form_anemy;
}
if (isset($_POST['form_diabetes'])) {
    $form_diabetes = $_POST['form_diabetes'];
    $_SESSION['form_diabetes'] = $form_diabetes;
}
if (isset($_POST['form_transfusion'])) {
    $form_transfusion = $_POST['form_transfusion'];
    $_SESSION['form_transfusion'] = $form_transfusion;
}
if (isset($_POST['form_hipertension'])) {
    $form_hipertension = $_POST['form_hipertension'];
    $_SESSION['form_hipertension'] = $form_hipertension;
}
if (isset($_POST['form_cancer'])) {
    $form_cancer = $_POST['form_cancer'];
    $_SESSION['form_cancer'] = $form_cancer;
}
if (isset($_POST['form_dislexia'])) {
    $form_dislexia = $_POST['form_dislexia'];
    $_SESSION['form_dislexia'] = $form_dislexia;
}
if (isset($_POST['form_waist'])) {
    $form_waist = $_POST['form_waist'];
    $_SESSION['form_waist'] = $form_waist;
}
if (isset($_POST['form_migraine'])) {
    $form_migraine = $_POST['form_migraine'];
    $_SESSION['form_migraine'] = $form_migraine;
}
if (isset($_POST['form_smoke'])) {
    $form_smoke = $_POST['form_smoke'];
    $_SESSION['form_smoke'] = $form_smoke;
}
if (isset($_POST['form_smoke_times'])) {
    $form_smoke_times = $_POST['form_smoke_times'];
    $_SESSION['form_smoke_times'] = $form_smoke_times;
}
if (isset($_POST['form_smoke_qty'])) {
    $form_smoke_qty = $_POST['form_smoke_qty'];
    $_SESSION['form_smoke_qty'] = $form_smoke_qty;
}
if (isset($_POST['form_alcohol'])) {
    $form_alcohol = $_POST['form_alcohol'];
    $_SESSION['form_alcohol'] = $form_alcohol;
}
if (isset($_POST['form_alcohol_freq'])) {
    $form_alcohol_freq = $_POST['form_alcohol_freq'];
    $_SESSION['form_alcohol_freq'] = $form_alcohol_freq;
}
if (isset($_POST['form_fracture'])) {
    $form_fracture = $_POST['form_fracture'];
    $_SESSION['form_fracture'] = $form_fracture;
}
if (isset($_POST['form_surgery'])) {
    $form_surgery = $_POST['form_surgery'];
    $_SESSION['form_surgery'] = $form_surgery;
}
if (isset($_POST['form_fracture_info'])) {
    $form_fracture_info = $_POST['form_fracture_info'];
    $_SESSION['form_fracture_info'] = $form_fracture_info;
}
if (isset($_POST['form_surgery_info'])) {
    $form_surgery_info = $_POST['form_surgery_info'];
    $_SESSION['form_surgery_info'] = $form_surgery_info;
}

if (isset($_SESSION['form_name'])) {
    $form_name = $_SESSION['form_name'];
}
if (isset($_SESSION['form_date'])) {
    $form_date = $_SESSION['form_date'];
}
if (isset($_SESSION['form_age'])) {
    $form_age = $_SESSION['form_age'];
}
if (isset($_SESSION['form_birth_place'])) {
    $form_birth_place = $_SESSION['form_birth_place'];
}
if (isset($_SESSION['form_status'])) {
    $form_status = $_SESSION['form_status'];
}
if (isset($_SESSION['form_employment'])) {
    $form_employment = $_SESSION['form_employment'];
}
if (isset($_SESSION['form_height'])) {
    $form_height = $_SESSION['form_height'];
}
if (isset($_SESSION['form_weight'])) {
    $form_weight = $_SESSION['form_weight'];
}
if (isset($_SESSION['form_hand'])) {
    $form_hand = $_SESSION['form_hand'];
}
if (isset($_SESSION['form_blood'])) {
    $form_blood = $_SESSION['form_blood'];
}
if (isset($_SESSION['form_implant'])) {
    $form_implant = $_SESSION['form_implant'];
}
if (isset($_SESSION['form_diu'])) {
    $form_diu = $_SESSION['form_diu'];
}
if (isset($_SESSION['form_type_pregnant_1'])) {
    $form_type_pregnant_1 = $_SESSION['form_type_pregnant_1'];
}
if (isset($_SESSION['form_height_pregnant_1'])) {
    $form_height_pregnant_1 = $_SESSION['form_height_pregnant_1'];
}
if (isset($_SESSION['form_weight_pregnant_1'])) {
    $form_weight_pregnant_1 = $_SESSION['form_weight_pregnant_1'];
}
if (isset($_SESSION['form_term_pregnant_1'])) {
    $form_term_pregnant_1 = $_SESSION['form_term_pregnant_1'];
}
if (isset($_SESSION['form_week_pregnant_1'])) {
    $form_week_pregnant_1 = $_SESSION['form_week_pregnant_1'];
}
if (isset($_SESSION['form_year_pregnant_1'])) {
    $form_year_pregnant_1 = $_SESSION['form_year_pregnant_1'];
}
if (isset($_SESSION['form_comments_pregnant_1'])) {
    $form_comments_pregnant_1 = $_SESSION['form_comments_pregnant_1'];
}
if (isset($_SESSION['form_type_pregnant_2'])) {
    $form_type_pregnant_2 = $_SESSION['form_type_pregnant_2'];
}
if (isset($_SESSION['form_height_pregnant_2'])) {
    $form_height_pregnant_2 = $_SESSION['form_height_pregnant_2'];
}
if (isset($_SESSION['form_weight_pregnant_2'])) {
    $form_weight_pregnant_2 = $_SESSION['form_weight_pregnant_2'];
}
if (isset($_SESSION['form_term_pregnant_2'])) {
    $form_term_pregnant_2 = $_SESSION['form_term_pregnant_2'];
}
if (isset($_SESSION['form_week_pregnant_2'])) {
    $form_week_pregnant_2 = $_SESSION['form_week_pregnant_2'];
}
if (isset($_SESSION['form_year_pregnant_2'])) {
    $form_year_pregnant_2 = $_SESSION['form_year_pregnant_2'];
}
if (isset($_SESSION['form_comments_pregnant_2'])) {
    $form_comments_pregnant_2 = $_SESSION['form_comments_pregnant_2'];
}
if (isset($_SESSION['form_type_pregnant_3'])) {
    $form_type_pregnant_3 = $_SESSION['form_type_pregnant_3'];
}
if (isset($_SESSION['form_height_pregnant_3'])) {
    $form_height_pregnant_3 = $_SESSION['form_height_pregnant_3'];
}
if (isset($_SESSION['form_weight_pregnant_3'])) {
    $form_weight_pregnant_3 = $_SESSION['form_weight_pregnant_3'];
}
if (isset($_SESSION['form_term_pregnant_3'])) {
    $form_term_pregnant_3 = $_SESSION['form_term_pregnant_3'];
}
if (isset($_SESSION['form_week_pregnant_3'])) {
    $form_week_pregnant_3 = $_SESSION['form_week_pregnant_3'];
}
if (isset($_SESSION['form_year_pregnant_3'])) {
    $form_year_pregnant_3 = $_SESSION['form_year_pregnant_3'];
}
if (isset($_SESSION['form_comments_pregnant_3'])) {
    $form_comments_pregnant_3 = $_SESSION['form_comments_pregnant_3'];
}
if (isset($_SESSION['form_type_pregnant_4'])) {
    $form_type_pregnant_4 = $_SESSION['form_type_pregnant_4'];
}
if (isset($_SESSION['form_height_pregnant_4'])) {
    $form_height_pregnant_4 = $_SESSION['form_height_pregnant_4'];
}
if (isset($_SESSION['form_weight_pregnant_4'])) {
    $form_weight_pregnant_4 = $_SESSION['form_weight_pregnant_4'];
}
if (isset($_SESSION['form_term_pregnant_4'])) {
    $form_term_pregnant_4 = $_SESSION['form_term_pregnant_4'];
}
if (isset($_SESSION['form_week_pregnant_4'])) {
    $form_week_pregnant_4 = $_SESSION['form_week_pregnant_4'];
}
if (isset($_SESSION['form_year_pregnant_4'])) {
    $form_year_pregnant_4 = $_SESSION['form_year_pregnant_4'];
}
if (isset($_SESSION['form_comments_pregnant_4'])) {
    $form_comments_pregnant_4 = $_SESSION['form_comments_pregnant_4'];
}
if (isset($_SESSION['form_type_pregnant_5'])) {
    $form_type_pregnant_5 = $_SESSION['form_type_pregnant_5'];
}
if (isset($_SESSION['form_height_pregnant_5'])) {
    $form_height_pregnant_5 = $_SESSION['form_height_pregnant_5'];
}
if (isset($_SESSION['form_weight_pregnant_5'])) {
    $form_weight_pregnant_5 = $_SESSION['form_weight_pregnant_5'];
}
if (isset($_SESSION['form_term_pregnant_5'])) {
    $form_term_pregnant_5 = $_SESSION['form_term_pregnant_5'];
}
if (isset($_SESSION['form_week_pregnant_5'])) {
    $form_week_pregnant_5 = $_SESSION['form_week_pregnant_5'];
}
if (isset($_SESSION['form_year_pregnant_5'])) {
    $form_year_pregnant_5 = $_SESSION['form_year_pregnant_5'];
}
if (isset($_SESSION['form_comments_pregnant_5'])) {
    $form_comments_pregnant_5 = $_SESSION['form_comments_pregnant_5'];
}
if (isset($_SESSION['form_type_pregnant_6'])) {
    $form_type_pregnant_6 = $_SESSION['form_type_pregnant_6'];
}
if (isset($_SESSION['form_height_pregnant_6'])) {
    $form_height_pregnant_6 = $_SESSION['form_height_pregnant_6'];
}
if (isset($_SESSION['form_weight_pregnant_6'])) {
    $form_weight_pregnant_6 = $_SESSION['form_weight_pregnant_6'];
}
if (isset($_SESSION['form_term_pregnant_6'])) {
    $form_term_pregnant_6 = $_SESSION['form_term_pregnant_6'];
}
if (isset($_SESSION['form_week_pregnant_6'])) {
    $form_week_pregnant_6 = $_SESSION['form_week_pregnant_6'];
}
if (isset($_SESSION['form_year_pregnant_6'])) {
    $form_year_pregnant_6 = $_SESSION['form_year_pregnant_6'];
}
if (isset($_SESSION['form_comments_pregnant_6'])) {
    $form_comments_pregnant_6 = $_SESSION['form_comments_pregnant_6'];
}
if (isset($_SESSION['form_type_abort_1'])) {
    $form_type_abort_1 = $_SESSION['form_type_abort_1'];
}
if (isset($_SESSION['form_year_abort_1'])) {
    $form_year_abort_1 = $_SESSION['form_year_abort_1'];
}
if (isset($_SESSION['form_week_abort_1'])) {
    $form_week_abort_1 = $_SESSION['form_week_abort_1'];
}
if (isset($_SESSION['form_comments_abort_1'])) {
    $form_comments_abort_1 = $_SESSION['form_comments_abort_1'];
}
if (isset($_SESSION['form_type_abort_2'])) {
    $form_type_abort_2 = $_SESSION['form_type_abort_2'];
}
if (isset($_SESSION['form_year_abort_2'])) {
    $form_year_abort_2 = $_SESSION['form_year_abort_2'];
}
if (isset($_SESSION['form_week_abort_2'])) {
    $form_week_abort_2 = $_SESSION['form_week_abort_2'];
}
if (isset($_SESSION['form_comments_abort_2'])) {
    $form_comments_abort_2 = $_SESSION['form_comments_abort_2'];
}
if (isset($_SESSION['form_type_abort_3'])) {
    $form_type_abort_3 = $_SESSION['form_type_abort_3'];
}
if (isset($_SESSION['form_year_abort_3'])) {
    $form_year_abort_3 = $_SESSION['form_year_abort_3'];
}
if (isset($_SESSION['form_week_abort_3'])) {
    $form_week_abort_3 = $_SESSION['form_week_abort_3'];
}
if (isset($_SESSION['form_comments_abort_3'])) {
    $form_comments_abort_3 = $_SESSION['form_comments_abort_3'];
}
if (isset($_SESSION['form_risk_notes'])) {
    $form_risk_notes = $_SESSION['form_risk_notes'];
}
if (isset($_SESSION['form_anemy'])) {
    $form_anemy = $_SESSION['form_anemy'];
}
if (isset($_SESSION['form_diabetes'])) {
    $form_diabetes = $_SESSION['form_diabetes'];
}
if (isset($_SESSION['form_transfusion'])) {
    $form_transfusion = $_SESSION['form_transfusion'];
}
if (isset($_SESSION['form_hipertension'])) {
    $form_hipertension = $_SESSION['form_hipertension'];
}
if (isset($_SESSION['form_cancer'])) {
    $form_cancer = $_SESSION['form_cancer'];
}
if (isset($_SESSION['form_dislexia'])) {
    $form_dislexia = $_SESSION['form_dislexia'];
}
if (isset($_SESSION['form_waist'])) {
    $form_waist = $_SESSION['form_waist'];
}
if (isset($_SESSION['form_migraine'])) {
    $form_migraine = $_SESSION['form_migraine'];
}
if (isset($_SESSION['form_smoke'])) {
    $form_smoke = $_SESSION['form_smoke'];
}
if (isset($_SESSION['form_smoke_times'])) {
    $form_smoke_times = $_SESSION['form_smoke_times'];
}
if (isset($_SESSION['form_smoke_qty'])) {
    $form_smoke_qty = $_SESSION['form_smoke_qty'];
}
if (isset($_SESSION['form_alcohol'])) {
    $form_alcohol = $_SESSION['form_alcohol'];
}
if (isset($_SESSION['form_alcohol_freq'])) {
    $form_alcohol_freq = $_SESSION['form_alcohol_freq'];
}
if (isset($_SESSION['form_fracture'])) {
    $form_fracture = $_SESSION['form_fracture'];
}
if (isset($_SESSION['form_surgery'])) {
    $form_surgery = $_SESSION['form_surgery'];
}
if (isset($_SESSION['form_fracture_info'])) {
    $form_fracture_info = $_SESSION['form_fracture_info'];
}
if (isset($_SESSION['form_surgery_info'])) {
    $form_surgery_info = $_SESSION['form_surgery_info'];
}

$form_1 = "";
for ($x = 1; $x <= 20; $x++) {
    $index = "form_" . $x . "_1";
    if (isset($_POST[$index])) {
        $value = 2;
    } else {
        $value = 1;
    }
    $form_1 = $form_1 . $value;
}

$form_2 = "";
for ($x = 1; $x <= 20; $x++) {
    $index = "form_" . $x . "_2";
    if (isset($_POST[$index])) {
        $value = 2;
    } else {
        $value = 1;
    }
    $form_2 = $form_2 . $value;
}

$form_3 = "";
for ($x = 1; $x <= 20; $x++) {
    $index = "form_" . $x . "_3";
    if (isset($_POST[$index])) {
        $value = 2;
    } else {
        $value = 1;
    }
    $form_3 = $form_3 . $value;
}

$form_4 = "";
for ($x = 1; $x <= 20; $x++) {
    $index = "form_" . $x . "_4";
    if (isset($_POST[$index])) {
        $value = 2;
    } else {
        $value = 1;
    }
    $form_4 = $form_4 . $value;
}

$form_5 = "";
for ($x = 1; $x <= 20; $x++) {
    $index = "form_" . $x . "_5";
    if (isset($_POST[$index])) {
        $value = 2;
    } else {
        $value = 1;
    }
    $form_5 = $form_5 . $value;
}

$form_6 = "";
for ($x = 1; $x <= 20; $x++) {
    $index = "form_" . $x . "_6";
    if (isset($_POST[$index])) {
        $value = 2;
    } else {
        $value = 1;
    }
    $form_6 = $form_6 . $value;
}

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
        <form class="form form-phenotype" action="formPOST.php" method="post" enctype="multipart/form-data">
            <table class="responsive-table myTable table hover" id="myTable">
                <thead>
                    <tr class="thead">
                        <th>Antecedente</th>
                        <th>Ninguno</th>
                        <th>Madre</th>
                        <th>Padre</th>
                        <th>Abuelos maternos</th>
                        <th>Abuelos paternos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-title="Alergias"> Alergias </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="alergy-none" name="alergy-none" value="alergy-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="alergy-mom" name="alergy-mom" value="alergy-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="alergy-dad" name="alergy-dad" value="alergy-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="alergy-mom-grandpas" name="alergy-mom-grandpas" value="alergy-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="alergy-dad-grandpas" name="alergy-dad-grandpas" value="alergy-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Apoplejía </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="apoplejia-none" name="apoplejia-none" value="apoplejia-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="apoplejia-mom" name="apoplejia-mom" value="apoplejia-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="apoplejia-dad" name="apoplejia-dad" value="apoplejia-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="apoplejia-mom-grandpas" name="apoplejia-mom-grandpas" value="apoplejia-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="apoplejia-dad-grandpas" name="apoplejia-dad-grandpas" value="apoplejia-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Cardiopatía </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="cardiopathy-none" name="cardiopathy-none" value="cardiopathy-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="cardiopathy-mom" name="cardiopathy-mom" value="cardiopathy-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="cardiopathy-dad" name="cardiopathy-dad" value="cardiopathy-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="cardiopathy-mom-grandpas" name="cardiopathy-mom-grandpas" value="cardiopathy-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="cardiopathy-dad-grandpas" name="cardiopathy-dad-grandpas" value="cardiopathy-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Cataratas </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="catarata-none" name="catarata-none" value="catarata-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="catarata-mom" name="catarata-mom" value="catarata-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="catarata-dad" name="catarata-dad" value="catarata-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="catarata-mom-grandpas" name="catarata-mom-grandpas" value="catarata-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="catarata-dad-grandpas" name="catarata-dad-grandpas" value="catarata-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Cirrosis </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="cirrosis-none" name="cirrosis-none" value="cirrosis-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="cirrosis-mom" name="cirrosis-mom" value="cirrosis-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="cirrosis-dad" name="cirrosis-dad" value="cirrosis-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="cirrosis-mom-grandpas" name="cirrosis-mom-grandpas" value="cirrosis-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="cirrosis-dad-grandpas" name="cirrosis-dad-grandpas" value="cirrosis-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Desorden convulsivo </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="convulsive-none" name="convulsive-none" value="convulsive-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="convulsive-mom" name="convulsive-mom" value="convulsive-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="convulsive-dad" name="convulsive-dad" value="convulsive-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="convulsive-mom-grandpas" name="convulsive-mom-grandpas" value="convulsive-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="convulsive-dad-grandpas" name="convulsive-dad-grandpas" value="convulsive-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Distrofia muscular </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="distrophy-none" name="distrophy-none" value="distrophy-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="distrophy-mom" name="distrophy-mom" value="distrophy-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="distrophy-dad" name="distrophy-dad" value="distrophy-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="distrophy-mom-grandpas" name="distrophy-mom-grandpas" value="distrophy-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="distrophy-dad-grandpas" name="distrophy-dad-grandpas" value="distrophy-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Enfisema </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="enfisem-none" name="enfisem-none" value="enfisem-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="enfisem-mom" name="enfisem-mom" value="enfisem-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="enfisem-dad" name="enfisem-dad" value="enfisem-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="enfisem-mom-grandpas" name="enfisem-mom-grandpas" value="enfisem-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="enfisem-dad-grandpas" name="enfisem-dad-grandpas" value="enfisem-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Epilepsia </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="epilepsy-none" name="epilepsy-none" value="epilepsy-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="epilepsy-mom" name="epilepsy-mom" value="epilepsy-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="epilepsy-dad" name="epilepsy-dad" value="epilepsy-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="epilepsy-mom-grandpas" name="epilepsy-mom-grandpas" value="epilepsy-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="epilepsy-dad-grandpas" name="epilepsy-dad-grandpas" value="epilepsy-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Glaucoma </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="glaucom-none" name="glaucom-none" value="glaucom-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="glaucom-mom" name="glaucom-mom" value="glaucom-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="glaucom-dad" name="glaucom-dad" value="glaucom-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="glaucom-mom-grandpas" name="glaucom-mom-grandpas" value="glaucom-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="glaucom-dad-grandpas" name="glaucom-dad-grandpas" value="glaucom-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Hemofilia </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="hemofilia-none" name="hemofilia-none" value="hemofilia-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="hemofilia-mom" name="hemofilia-mom" value="hemofilia-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="hemofilia-dad" name="hemofilia-dad" value="hemofilia-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="hemofilia-mom-grandpas" name="hemofilia-mom-grandpas" value="hemofilia-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="hemofilia-dad-grandpas" name="hemofilia-dad-grandpas" value="hemofilia-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Ictericia </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="ictericia-none" name="ictericia-none" value="ictericia-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="ictericia-mom" name="ictericia-mom" value="ictericia-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="ictericia-dad" name="ictericia-dad" value="ictericia-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="ictericia-mom-grandpas" name="ictericia-mom-grandpas" value="ictericia-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="ictericia-dad-grandpas" name="ictericia-dad-grandpas" value="ictericia-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Migraña </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="migraine-none" name="migraine-none" value="migraine-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="migraine-mom" name="migraine-mom" value="migraine-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="migraine-dad" name="migraine-dad" value="migraine-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="migraine-mom-grandpas" name="migraine-mom-grandpas" value="migraine-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="migraine-dad-grandpas" name="migraine-dad-grandpas" value="migraine-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Varicocele </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="varicocele-none" name="varicocele-none" value="varicocele-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="varicocele-mom" name="varicocele-mom" value="varicocele-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="varicocele-dad" name="varicocele-dad" value="varicocele-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="varicocele-mom-grandpas" name="varicocele-mom-grandpas" value="varicocele-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="varicocele-dad-grandpas" name="varicocele-dad-grandpas" value="varicocele-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Pie equinovaro </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="equinovaro-none" name="equinovaro-none" value="equinovaro-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="equinovaro-mom" name="equinovaro-mom" value="equinovaro-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="equinovaro-dad" name="equinovaro-dad" value="equinovaro-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="equinovaro-mom-grandpas" name="equinovaro-mom-grandpas" value="equinovaro-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="equinovaro-dad-grandpas" name="equinovaro-dad-grandpas" value="equinovaro-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Retraso mental </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="mental-none" name="mental-none" value="mental-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="mental-mom" name="mental-mom" value="mental-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="mental-dad" name="mental-dad" value="mental-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="mental-mom-grandpas" name="mental-mom-grandpas" value="mental-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="mental-dad-grandpas" name="mental-dad-grandpas" value="mental-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Uso de drogas </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="drugs-none" name="drugs-none" value="drugs-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="drugs-mom" name="drugs-mom" value="drugs-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="drugs-dad" name="drugs-dad" value="drugs-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="drugs-mom-grandpas" name="drugs-mom-grandpas" value="drugs-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="drugs-dad-grandpas" name="drugs-dad-grandpas" value="drugs-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Esquizofrenia </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="esquizo-none" name="esquizo-none" value="esquizo-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="esquizo-mom" name="esquizo-mom" value="esquizo-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="esquizo-dad" name="esquizo-dad" value="esquizo-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="esquizo-mom-grandpas" name="esquizo-mom-grandpas" value="esquizo-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="esquizo-dad-grandpas" name="esquizo-dad-grandpas" value="esquizo-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Alcoholismo </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="alcohol-none" name="alcohol-none" value="alcohol-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="alcohol-mom" name="alcohol-mom" value="alcohol-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="alcohol-dad" name="alcohol-dad" value="alcohol-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="alcohol-mom-grandpas" name="alcohol-mom-grandpas" value="alcohol-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="alcohol-dad-grandpas" name="alcohol-dad-grandpas" value="alcohol-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Diabetes juvenil </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="diabetes_young-none" name="diabetes_young-none" value="diabetes_young-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="diabetes_young-mom" name="diabetes_young-mom" value="diabetes_young-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="diabetes_young-dad" name="diabetes_young-dad" value="diabetes_young-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="diabetes_young-mom-grandpas" name="diabetes_young-mom-grandpas" value="diabetes_young-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="diabetes_young-dad-grandpas" name="diabetes_young-dad-grandpas" value="diabetes_young-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Bocio </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="bocio-none" name="bocio-none" value="bocio-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="bocio-mom" name="bocio-mom" value="bocio-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="bocio-dad" name="bocio-dad" value="bocio-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="bocio-mom-grandpas" name="bocio-mom-grandpas" value="bocio-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="bocio-dad-grandpas" name="bocio-dad-grandpas" value="bocio-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Ceguera </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="blind-none" name="blind-none" value="blind-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="blind-mom" name="blind-mom" value="blind-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="blind-dad" name="blind-dad" value="blind-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="blind-mom-grandpas" name="blind-mom-grandpas" value="blind-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="blind-dad-grandpas" name="blind-dad-grandpas" value="blind-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Daltonismo </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="daltonic-none" name="daltonic-none" value="daltonic-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="daltonic-mom" name="daltonic-mom" value="daltonic-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="daltonic-dad" name="daltonic-dad" value="daltonic-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="daltonic-mom-grandpas" name="daltonic-mom-grandpas" value="daltonic-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="daltonic-dad-grandpas" name="daltonic-dad-grandpas" value="daltonic-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Diabetes </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="diabetes-none" name="diabetes-none" value="diabetes-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="diabetes-mom" name="diabetes-mom" value="diabetes-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="diabetes-dad" name="diabetes-dad" value="diabetes-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="diabetes-mom-grandpas" name="diabetes-mom-grandpas" value="diabetes-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="diabetes-dad-grandpas" name="diabetes-dad-grandpas" value="diabetes-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Enfermedad psiquiátrica </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="psiquiatric-none" name="psiquiatric-none" value="psiquiatric-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="psiquiatric-mom" name="psiquiatric-mom" value="psiquiatric-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="psiquiatric-dad" name="psiquiatric-dad" value="psiquiatric-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="psiquiatric-mom-grandpas" name="psiquiatric-mom-grandpas" value="psiquiatric-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="psiquiatric-dad-grandpas" name="psiquiatric-dad-grandpas" value="psiquiatric-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Endometriosis </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="endometriosis-none" name="endometriosis-none" value="endometriosis-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="endometriosis-mom" name="endometriosis-mom" value="endometriosis-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="endometriosis-dad" name="endometriosis-dad" value="endometriosis-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="endometriosis-mom-grandpas" name="endometriosis-mom-grandpas" value="endometriosis-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="endometriosis-dad-grandpas" name="endometriosis-dad-grandpas" value="endometriosis-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Fibrosis quística </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="fibrosis-none" name="fibrosis-none" value="fibrosis-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="fibrosis-mom" name="fibrosis-mom" value="fibrosis-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="fibrosis-dad" name="fibrosis-dad" value="fibrosis-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="fibrosis-mom-grandpas" name="fibrosis-mom-grandpas" value="fibrosis-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="fibrosis-dad-grandpas" name="fibrosis-dad-grandpas" value="fibrosis-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Gota </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="gota-none" name="gota-none" value="gota-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="gota-mom" name="gota-mom" value="gota-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="gota-dad" name="gota-dad" value="gota-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="gota-mom-grandpas" name="gota-mom-grandpas" value="gota-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="gota-dad-grandpas" name="gota-dad-grandpas" value="gota-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Hipertensión </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="hipertension-none" name="hipertension-none" value="hipertension-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="hipertension-mom" name="hipertension-mom" value="hipertension-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="hipertension-dad" name="hipertension-dad" value="hipertension-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="hipertension-mom-grandpas" name="hipertension-mom-grandpas" value="hipertension-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="hipertension-dad-grandpas" name="hipertension-dad-grandpas" value="hipertension-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Labio/Paladar Hendido </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="paladar-none" name="paladar-none" value="paladar-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="paladar-mom" name="paladar-mom" value="paladar-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="paladar-dad" name="paladar-dad" value="paladar-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="paladar-mom-grandpas" name="paladar-mom-grandpas" value="paladar-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="paladar-dad-grandpas" name="paladar-dad-grandpas" value="paladar-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Crisis Renales </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="kidney-none" name="kidney-none" value="kidney-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="kidney-mom" name="kidney-mom" value="kidney-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="kidney-dad" name="kidney-dad" value="kidney-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="kidney-mom-grandpas" name="kidney-mom-grandpas" value="kidney-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="kidney-dad-grandpas" name="kidney-dad-grandpas" value="kidney-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Circulación </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="circulation-none" name="circulation-none" value="circulation-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="circulation-mom" name="circulation-mom" value="circulation-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="circulation-dad" name="circulation-dad" value="circulation-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="circulation-mom-grandpas" name="circulation-mom-grandpas" value="circulation-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="circulation-dad-grandpas" name="circulation-dad-grandpas" value="circulation-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Psoriasis </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="psoriasis-none" name="psoriasis-none" value="psoriasis-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="psoriasis-mom" name="psoriasis-mom" value="psoriasis-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="psoriasis-dad" name="psoriasis-dad" value="psoriasis-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="psoriasis-mom-grandpas" name="psoriasis-mom-grandpas" value="psoriasis-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="psoriasis-dad-grandpas" name="psoriasis-dad-grandpas" value="psoriasis-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Sordera </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="deaf-none" name="deaf-none" value="deaf-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="deaf-mom" name="deaf-mom" value="deaf-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="deaf-dad" name="deaf-dad" value="deaf-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="deaf-mom-grandpas" name="deaf-mom-grandpas" value="deaf-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="deaf-dad-grandpas" name="deaf-dad-grandpas" value="deaf-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Alzheimer </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="alzheimer-none" name="alzheimer-none" value="alzheimer-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="alzheimer-mom" name="alzheimer-mom" value="alzheimer-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="alzheimer-dad" name="alzheimer-dad" value="alzheimer-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="alzheimer-mom-grandpas" name="alzheimer-mom-grandpas" value="alzheimer-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="alzheimer-dad-grandpas" name="alzheimer-dad-grandpas" value="alzheimer-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td data-title="Contraseña"> Parkinson </td>
                        <td data-title="Ninguno">
                            <input type="checkbox" id="parkinson-none" name="parkinson-none" value="parkinson-none" class="form-check-input">
                        </td>
                        <td data-title="Madre">
                            <input type="checkbox" id="parkinson-mom" name="parkinson-mom" value="parkinson-mom" class="form-check-input">
                        </td>
                        <td data-title="Padre">
                            <input type="checkbox" id="parkinson-dad" name="parkinson-dad" value="parkinson-dad" class="form-check-input">
                        </td>
                        <td data-title="Abuelos maternos">
                            <input type="checkbox" id="parkinson-mom-grandpas" name="parkinson-mom-grandpas" value="parkinson-mom-grandpas" class="form-check-input">
                        </td>
                        <td data-title="Abuelos paternos">
                            <input type="checkbox" id="parkinson-dad-grandpas" name="parkinson-dad-grandpas" value="parkinson-dad-grandpas" class="form-check-input">
                        </td>
                    </tr>
                </tbody>
            </table>
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
            <input type="hidden" name="form_1" value="<?php echo $form_1 ?>">
            <input type="hidden" name="form_2" value="<?php echo $form_2 ?>">
            <input type="hidden" name="form_3" value="<?php echo $form_3 ?>">
            <input type="hidden" name="form_4" value="<?php echo $form_4 ?>">
            <input type="hidden" name="form_5" value="<?php echo $form_5 ?>">
            <input type="hidden" name="form_6" value="<?php echo $form_6 ?>">
            <div class="form-btn btn-arrange">
                <button class="btn btn-send" id="return2">
                    <div>Anterior</div>
                </button>
                <button class="btn btn-send" type="submit">
                    <div>Finalizar</div>
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
<script src="build/js/form3.min.js"></script>
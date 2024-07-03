<?php
// session_start();
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
if (isset($_POST['form_1'])) {
    $form_1 = $_POST['form_1'];
    $_SESSION['form_1'] = $form_1;
}
if (isset($_POST['form_2'])) {
    $form_2 = $_POST['form_2'];
    $_SESSION['form_2'] = $form_2;
}
if (isset($_POST['form_3'])) {
    $form_3 = $_POST['form_3'];
    $_SESSION['form_3'] = $form_3;
}
if (isset($_POST['form_4'])) {
    $form_4 = $_POST['form_4'];
    $_SESSION['form_4'] = $form_4;
}
if (isset($_POST['form_5'])) {
    $form_5 = $_POST['form_5'];
    $_SESSION['form_5'] = $form_5;
}
if (isset($_POST['form_6'])) {
    $form_6 = $_POST['form_6'];
    $_SESSION['form_6'] = $form_6;
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
if (isset($_SESSION['form_1'])) {
    $form_1 = $_SESSION['form_1'];
}
if (isset($_SESSION['form_2'])) {
    $form_2 = $_SESSION['form_2'];
}
if (isset($_SESSION['form_3'])) {
    $form_3 = $_SESSION['form_3'];
}
if (isset($_SESSION['form_4'])) {
    $form_4 = $_SESSION['form_4'];
}
if (isset($_SESSION['form_5'])) {
    $form_5 = $_SESSION['form_5'];
}
if (isset($_SESSION['form_6'])) {
    $form_6 = $_SESSION['form_6'];
}

$family = array("none", "mom", "dad", "mom-grandpas", "dad-grandpas");
$diseases = array("alergy","apoplejia","cardiopathy","catarata","cirrosis","convulsive","distrophy","enfisem","epilepsy","glaucom","hemofilia","ictericia","migraine","varicocele","equinovaro","mental","drugs","esquizo","alcohol","diabetes_young","bocio","blind","daltonic","diabetes","psiquiatric","endometriosis","fibrosis","gota","hipertension","paladar","kidney","circulation","psoriasis","deaf","alzheimer","parkinson");

for ($j = 0; $j < count($diseases); $j++) {
    ${"family_$diseases[$j]"} ="";
    for ($i = 0; $i < count($family); $i++) {
        $variable = $diseases[$j] . "-" . $family[$i];
        if (isset($_POST[$variable])) {
            $value = 2;
        } else {
            $value = 1;
        }
        ${"family_$diseases[$j]"} = ${"family_$diseases[$j]"} . $value;
    }
    // echo "  PRINT:  " . ${"family_$diseases[$j]"};
}

$query1 = "INSERT into `candidates` 
(form_name, 
form_date, 
form_age, 
form_birth_place, 
form_status, 
form_employment, 
form_height, 
form_weight, 
form_hand, 
form_blood, 
form_implant, 
form_diu,
form_risk_notes,
form_anemy,
form_diabetes,
form_transfusion,
form_hipertension,
form_cancer,
form_dislexia,
form_waist,
form_migraine,
form_smoke,
form_smoke_times,
form_smoke_qty,
form_alcohol,
form_alcohol_freq,
form_fracture,
form_surgery,
form_fracture_info,
form_surgery_info) 
VALUES 
('$form_name', 
'$form_date', 
'$form_age', 
'$form_birth_place', 
'$form_status', 
'$form_employment', 
'$form_height', 
'$form_weight', 
'$form_hand', 
'$form_blood', 
'$form_implant', 
'$form_diu',
'$form_risk_notes',
'$form_anemy',
'$form_diabetes',
'$form_transfusion',
'$form_hipertension',
'$form_cancer',
'$form_dislexia',
'$form_waist',
'$form_migraine',
'$form_smoke',
'$form_smoke_times',
'$form_smoke_qty',
'$form_alcohol',
'$form_alcohol_freq',
'$form_fracture',
'$form_surgery',
'$form_fracture_info',
'$form_surgery_info')";
$result1   = mysqli_query($conn, $query1);

$query = "SELECT * FROM candidates ORDER BY ID DESC LIMIT 1";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $last_id = $row['id'];
}

$query2 = "INSERT into `pregnants`
(candidateId,
form_type_pregnant_1,
form_height_pregnant_1,
form_weight_pregnant_1,
form_term_pregnant_1,
form_week_pregnant_1,
form_year_pregnant_1,
form_comments_pregnant_1,
form_type_pregnant_2,
form_height_pregnant_2,
form_weight_pregnant_2,
form_term_pregnant_2,
form_week_pregnant_2,
form_year_pregnant_2,
form_comments_pregnant_2,
form_type_pregnant_3,
form_height_pregnant_3,
form_weight_pregnant_3,
form_term_pregnant_3,
form_week_pregnant_3,
form_year_pregnant_3,
form_comments_pregnant_3,
form_type_pregnant_4,
form_height_pregnant_4,
form_weight_pregnant_4,
form_term_pregnant_4,
form_week_pregnant_4,
form_year_pregnant_4,
form_comments_pregnant_4,
form_type_pregnant_5,
form_height_pregnant_5,
form_weight_pregnant_5,
form_term_pregnant_5,
form_week_pregnant_5,
form_year_pregnant_5,
form_comments_pregnant_5,
form_type_pregnant_6,
form_height_pregnant_6,
form_weight_pregnant_6,
form_term_pregnant_6,
form_week_pregnant_6,
form_year_pregnant_6,
form_comments_pregnant_6,
form_type_abort_1,
form_year_abort_1,
form_week_abort_1,
form_comments_abort_1,
form_type_abort_2,
form_year_abort_2,
form_week_abort_2,
form_comments_abort_2,
form_type_abort_3,
form_year_abort_3,
form_week_abort_3,
form_comments_abort_3,
form_coded_comments_pregnant_1,
form_coded_comments_pregnant_2,
form_coded_comments_pregnant_3,
form_coded_comments_pregnant_4,
form_coded_comments_pregnant_5,
form_coded_comments_pregnant_6)
VALUES
('$last_id',
'$form_type_pregnant_1',
'$form_height_pregnant_1',
'$form_weight_pregnant_1',
'$form_term_pregnant_1',
'$form_week_pregnant_1',
'$form_year_pregnant_1',
'$form_comments_pregnant_1',
'$form_type_pregnant_2',
'$form_height_pregnant_2',
'$form_weight_pregnant_2',
'$form_term_pregnant_2',
'$form_week_pregnant_2',
'$form_year_pregnant_2',
'$form_comments_pregnant_2',
'$form_type_pregnant_3',
'$form_height_pregnant_3',
'$form_weight_pregnant_3',
'$form_term_pregnant_3',
'$form_week_pregnant_3',
'$form_year_pregnant_3',
'$form_comments_pregnant_3',
'$form_type_pregnant_4',
'$form_height_pregnant_4',
'$form_weight_pregnant_4',
'$form_term_pregnant_4',
'$form_week_pregnant_4',
'$form_year_pregnant_4',
'$form_comments_pregnant_4',
'$form_type_pregnant_5',
'$form_height_pregnant_5',
'$form_weight_pregnant_5',
'$form_term_pregnant_5',
'$form_week_pregnant_5',
'$form_year_pregnant_5',
'$form_comments_pregnant_5',
'$form_type_pregnant_6',
'$form_height_pregnant_6',
'$form_weight_pregnant_6',
'$form_term_pregnant_6',
'$form_week_pregnant_6',
'$form_year_pregnant_6',
'$form_comments_pregnant_6',
'$form_type_abort_1',
'$form_year_abort_1',
'$form_week_abort_1',
'$form_comments_abort_1',
'$form_type_abort_2',
'$form_year_abort_2',
'$form_week_abort_2',
'$form_comments_abort_2',
'$form_type_abort_3',
'$form_year_abort_3',
'$form_week_abort_3',
'$form_comments_abort_3',
'$form_1',
'$form_2',
'$form_3',
'$form_4',
'$form_5',
'$form_6')";
$result2 = mysqli_query($conn, $query2);

$query3 = "INSERT into `family`
(candidateId,
family_alergy,
family_apoplejia,				
family_cardiopathy,				
family_catarata,				
family_cirrosis,				
family_convulsive,				
family_distrophy,				
family_enfisem,				
family_epilepsy,				
family_glaucom,				
family_hemofilia,				
family_ictericia,				
family_migraine,				
family_varicocele,				
family_equinovaro,				
family_mental,				
family_drugs,				
family_esquizo,				
family_alcohol,				
family_diabetes_young,				
family_bocio,				
family_blind,				
family_daltonic,				
family_diabetes,				
family_psiquiatric,				
family_endometriosis,				
family_fibrosis,				
family_gota,				
family_hipertension,				
family_paladar,				
family_kidney,				
family_circulation,				
family_psoriasis,				
family_deaf,				
family_alzheimer,				
family_parkinson				
)
VALUES
('$last_id',
'$family_alergy',
'$family_apoplejia',				
'$family_cardiopathy',				
'$family_catarata',				
'$family_cirrosis',				
'$family_convulsive',				
'$family_distrophy',				
'$family_enfisem',				
'$family_epilepsy',				
'$family_glaucom',				
'$family_hemofilia',				
'$family_ictericia',				
'$family_migraine',				
'$family_varicocele',				
'$family_equinovaro',				
'$family_mental',				
'$family_drugs',				
'$family_esquizo',				
'$family_alcohol',				
'$family_diabetes_young',				
'$family_bocio',				
'$family_blind',				
'$family_daltonic',				
'$family_diabetes',				
'$family_psiquiatric',				
'$family_endometriosis',				
'$family_fibrosis',				
'$family_gota',				
'$family_hipertension',				
'$family_paladar',				
'$family_kidney',				
'$family_circulation',				
'$family_psoriasis',				
'$family_deaf',				
'$family_alzheimer',				
'$family_parkinson'
)";
$result3 = mysqli_query($conn, $query3);

include 'includes/templates/header.php';
?>

<main class="home">
    <section class="temporary">
        <?php if ($result1 == 1 && $result2 == 1 && $result3 == 1) {
            echo "Los datos han sido guardados correctamente";
        } ?>
    </section>
</main>

<?php
include 'includes/templates/footer.php';
?>

<!-- Boostrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Custom JS -->
<script src="build/js/bundle.min.js"></script>
</body>

</html>
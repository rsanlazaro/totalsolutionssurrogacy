<?php
include 'includes/templates/header.php';
include "includes/app.php";
if (isset($_POST['pregnancyNum'])) { $prenancy_num = $_POST['pregnancyNum']; }
$conn = connectDB();
if (isset($_POST['form_name'])) {$form_name = $_POST['form_name']; $_SESSION['form_name'] = $form_name;}
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
if (isset($_POST['form_week_abort_1'])) {$form_week_abort_1 = $_POST['form_week_abort_1']; $_SESSION['form_week_abort_1'] = $form_week_abort_1;}
if (isset($_POST['form_comments_abort_1'])) {$form_comments_abort_1 = $_POST['form_comments_abort_1']; $_SESSION['form_comments_abort_1'] = $form_comments_abort_1;}
if (isset($_POST['form_type_abort_2'])) {$form_type_abort_2 = $_POST['form_type_abort_2']; $_SESSION['form_type_abort_2'] = $form_type_abort_2;}
if (isset($_POST['form_year_abort_2'])) {$form_year_abort_2 = $_POST['form_year_abort_2']; $_SESSION['form_year_abort_2'] = $form_year_abort_2;}
if (isset($_POST['form_week_abort_2'])) {$form_week_abort_2 = $_POST['form_week_abort_2']; $_SESSION['form_week_abort_2'] = $form_week_abort_2;}
if (isset($_POST['form_comments_abort_2'])) {$form_comments_abort_2 = $_POST['form_comments_abort_2']; $_SESSION['form_comments_abort_2'] = $form_comments_abort_2;}
if (isset($_POST['form_type_abort_3'])) {$form_type_abort_3 = $_POST['form_type_abort_3']; $_SESSION['form_type_abort_3'] = $form_type_abort_3;}
if (isset($_POST['form_year_abort_3'])) {$form_year_abort_3 = $_POST['form_year_abort_3']; $_SESSION['form_year_abort_3'] = $form_year_abort_3;}
if (isset($_POST['form_week_abort_3'])) {$form_week_abort_3 = $_POST['form_week_abort_3']; $_SESSION['form_week_abort_3'] = $form_week_abort_3;}
if (isset($_POST['form_comments_abort_3'])) {$form_comments_abort_3 = $_POST['form_comments_abort_3']; $_SESSION['form_comments_abort_3'] = $form_comments_abort_3;}

if (isset($_SESSION['form_name'])) { $form_name = $_SESSION['form_name']; }
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
if (isset($_SESSION['form_week_abort_1'])) { $form_week_abort_1 = $_SESSION['form_week_abort_1']; }
if (isset($_SESSION['form_comments_abort_1'])) { $form_comments_abort_1 = $_SESSION['form_comments_abort_1']; }
if (isset($_SESSION['form_type_abort_2'])) { $form_type_abort_2 = $_SESSION['form_type_abort_2']; }
if (isset($_SESSION['form_year_abort_2'])) { $form_year_abort_2 = $_SESSION['form_year_abort_2']; }
if (isset($_SESSION['form_week_abort_2'])) { $form_week_abort_2 = $_SESSION['form_week_abort_2']; }
if (isset($_SESSION['form_comments_abort_2'])) { $form_comments_abort_2 = $_SESSION['form_comments_abort_2']; }
if (isset($_SESSION['form_type_abort_3'])) { $form_type_abort_3 = $_SESSION['form_type_abort_3']; }
if (isset($_SESSION['form_year_abort_3'])) { $form_year_abort_3 = $_SESSION['form_year_abort_3']; }
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
        <form class="form form-phenotype" action="form3.php" method="post" enctype="multipart/form-data">
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
                                <input class="form-check-input" name="<?php echo "form_1_" . $i+1 ?>" type="checkbox" value="1_ id="<?php echo "form_1_" . $i+1 ?>">
                                <label class="form-check-label" for="<?php echo "form_1_" . $i+1 ?>">
                                    <div class="spanish">Cirugía uterina previa </div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_2_" . $i+1 ?>" type="checkbox" value="2_ id="<?php echo "form_2_" . $i+1 ?>">
                                <label class="form-check-label" for="<?php echo "form_2_" . $i+1 ?>">
                                    <div class="spanish">Cirugía abdominal</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_3_" . $i+1 ?>" type="checkbox" value="3_ id="<?php echo "form_3_" . $i+1 ?>">
                                <label class="form-check-label" for="<?php echo "form_3_" . $i+1 ?>">
                                    <div class="spanish">Multigesta</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_4_" . $i+1 ?>" type="checkbox" value="4_ id="<?php echo "form_4_" . $i+1 ?>">
                                <label class="form-check-label" for="<?php echo "form_4_" . $i+1 ?>">
                                    <div class="spanish">Embarazo múltiple</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_5_" . $i+1 ?>" type="checkbox" value="5_ id="<?php echo "form_5_" . $i+1 ?>">
                                <label class="form-check-label" for="<?php echo "form_5_" . $i+1 ?>">
                                    <div class="spanish">Hemorragia obstétrica</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_6_" . $i+1 ?>" type="checkbox" value="6_ id="<?php echo "form_6_" . $i+1 ?>">
                                <label class="form-check-label" for="<?php echo "form_6_" . $i+1 ?>">
                                    <div class="spanish">Miomatosis uterina de grandes elementos</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_7_" . $i+1 ?>" type="checkbox" value="7_ id="<?php echo "form_7_" . $i+1 ?>">
                                <label class="form-check-label" for="<?php echo "form_7_" . $i+1 ?>">
                                    <div class="spanish">Peso fetal estimado > 4000 gr < 2000 gr</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_8_" . $i+1 ?>" type="checkbox" value="8_ id="<?php echo "form_8_" . $i+1 ?>">
                                <label class="form-check-label" for="<?php echo "form_8_" . $i+1 ?>">
                                    <div class="spanish">Obesidad IMC > 37</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_9_" . $i+1 ?>" type="checkbox" value="9_ id="<?php echo "form_9_" . $i+1 ?>">
                                <label class="form-check-label" for="<?php echo "form_9_" . $i+1 ?>">
                                    <div class="spanish">Malformación congénita</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_10_" . $i+1 ?>" type="checkbox" value="10" id="<?php echo "form_10_" . $i+1 ?>">
                                <label class="form-check-label" for="<?php echo "form_10_" . $i+1 ?>">
                                    <div class="spanish">Sin control prenatal en los embarazos</div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="column-2">
                        <div class="form-grid-element">
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_11_" . $i+1 ?>" type="checkbox" value="11" id="<?php echo "form_11_" . $i+1 ?>">
                                <label class="form-check-label" for="<?php echo "form_11_" . $i+1 ?>">
                                    <div class="spanish">Periodo intergenésico corto < 18 meses </div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_12_" . $i+1 ?>" type="checkbox" value="12" id="<?php echo "form_12_" . $i+1 ?>">
                                <label class="form-check-label" for="<?php echo "form_12_" . $i+1 ?>">
                                    <div class="spanish">COVID en los últimos 6 meses</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_13_" . $i+1 ?>" type="checkbox" value="13" id="<?php echo "form_13_" . $i+1 ?>">
                                <label class="form-check-label" for="<?php echo "form_13_" . $i+1 ?>">
                                    <div class="spanish">Comorbilidades preexistentes que compliquen el embarazo y al neonato (endocrinológicas, cardiológicas, e inmunológicas)</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_14_" . $i+1 ?>" type="checkbox" value="14" id="<?php echo "form_14_" . $i+1 ?>">
                                <label class="form-check-label" for="<?php echo "form_14_" . $i+1 ?>">
                                    <div class="spanish">Enfermedad hipertensivas</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_15_" . $i+1 ?>" type="checkbox" value="15" id="<?php echo "form_15_" . $i+1 ?>">
                                <label class="form-check-label" for="<?php echo "form_15_" . $i+1 ?>">
                                    <div class="spanish">Enfermedades infectocontagiosos (VIH, Hepatitis B y C)</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_16_" . $i+1 ?>" type="checkbox" value="16" id="<?php echo "form_16_" . $i+1 ?>">
                                <label class="form-check-label" for="<?php echo "form_16_" . $i+1 ?>">
                                    <div class="spanish">Sepsis</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_17_" . $i+1 ?>" type="checkbox" value="17" id="<?php echo "form_17_" . $i+1 ?>">
                                <label class="form-check-label" for="<?php echo "form_17_" . $i+1 ?>">
                                    <div class="spanish">Síndrome de Hellp</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_18_" . $i+1 ?>" type="checkbox" value="18" id="<?php echo "form_18_" . $i+1 ?>">
                                <label class="form-check-label" for="<?php echo "form_18_" . $i+1 ?>">
                                    <div class="spanish">Placenta previa</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_19_" . $i+1 ?>" type="checkbox" value="19" id="<?php echo "form_19_" . $i+1 ?>">
                                <label class="form-check-label" for="<?php echo "form_19_" . $i+1 ?>">
                                    <div class="spanish">Sospecha de placenta acreta o placenta percreta</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="<?php echo "form_20_" . $i+1 ?>" type="checkbox" value="20" id="<?php echo "form_20_" . $i+1 ?>">
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
                <textarea class="form-control-phenotype-msg" name="form_risk_notes" id="validationTextarea"></textarea>
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
                        <option value="sí">Sí</option>
                        <option value="no">No</option>
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
                        <option value="sí">Sí</option>
                        <option value="no">No</option>
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
                        <option value="sí">Sí</option>
                        <option value="no">No</option>
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
                        <option value="sí">Sí</option>
                        <option value="no">No</option>
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
                        <option value="sí">Sí</option>
                        <option value="no">No</option>
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
                        <option value="sí">Sí</option>
                        <option value="no">No</option>
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
                        <option value="sí">Sí</option>
                        <option value="no">No</option>
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
                        <option value="sí">Sí</option>
                        <option value="no">No</option>
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
                        <option value="no">No</option>
                        <option value="sí">Sí</option>
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
                        <option value="3 veces por semana">3 veces por semana</option>
                        <option value="2 veces por semana">2 veces por semana</option>
                        <option value="1 vez por semana">1 veces por semana</option>
                        <option value="en eventos">En eventos/reuniones</option>
                        <option value="eventualmente">Eventualmente</option>
                        <option value="diario">Diario</option>
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
                        <option value="más de 10 al día">Más de 10 al día</option>
                        <option value="de 5 a 10 al día">De 5 a 10 al día</option>
                        <option value="de 3 a 5 por día">De 3 a 5 por día</option>
                        <option value="hasta 3 al día">Hasta 3 al día</option>
                        <option value="1 al día">1 al día</option>
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
                        <option value="no">No</option>
                        <option value="sí">Sí</option>
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
                        <option value="3 veces por semana">3 veces por semana</option>
                        <option value="2 veces por semana">2 veces por semana</option>
                        <option value="1 vez por semana">1 veces por semana</option>
                        <option value="en eventos">En eventos/reuniones</option>
                        <option value="eventualmente">Eventualmente</option>
                        <option value="diario">Diario</option>
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
                        <option value="no">No</option>
                        <option value="sí">Sí</option>
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
                        <option value="no">No</option>
                        <option value="sí">Sí</option>
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
                    <input type="text" class="form-control-phenotype" id="validationDefault01" name="form_fracture_info" />
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
                    <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_surgery_info" />
                    <div class="invalid-feedback">
                        <div>Ingrese el información</div>
                    </div>
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
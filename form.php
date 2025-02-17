<?php
include 'includes/templates/header.php';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!$_SESSION['login'] && (($_SESSION['type'] == "user") || $_SESSION['type'] == "admin")) {
    header('location: /index.php');
}
?>
<main>
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
    <?php if (isset($_GET['msg'])) { ?>
        <br>
        <p class="error"><?php echo $_GET['msg']; ?></p>
    <?php } ?>
    <form class="form form-phenotype" action="form2.php" method="post" enctype="multipart/form-data">
        <div class="form-top">
            <div class="col-md-12 form-top-element">
                <label for="validationDefault01">
                    <div class="spanish">
                        CURP:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="form_curp" value="<?php if (isset($_SESSION['form_curp'])) {
                                                                                                                        echo $_SESSION['form_curp'];
                                                                                                                    } ?>" required />
                <div class="invalid-feedback">
                    <div>Ingrese el CURP</div>
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
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="form_name" value="<?php if (isset($_SESSION['form_name'])) {
                                                                                                                        echo $_SESSION['form_name'];
                                                                                                                    } ?>" required />
                <div class="invalid-feedback">
                    <div>Ingrese el nombre</div>
                </div>
            </div>
            <div class="col-md-6 form-top-element">
                <label for="form_date">
                    <div class="spanish">
                        Fecha de nacimiento:
                    </div>
                </label>
                <input type="date" class="form-control-phenotype" id="form_date" name="form_date" value="<?php if (isset($_SESSION['form_date'])) {
                                                                                                                echo $_SESSION['form_date'];
                                                                                                            } ?>" onchange="formClick()" />
                <div class="invalid-feedback">
                    <div>Ingrese la fecha de nacimiento</div>
                </div>
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="form_age">
                    <div class="spanish">
                        Edad:
                    </div>
                </label>
                <input type="number" class="form-control-phenotype" id="form_age" name="form_age" value="<?php if (isset($_SESSION['form_age'])) {
                                                                                                                echo $_SESSION['form_age'];
                                                                                                            } ?>" />
                <div class="invalid-feedback">
                    <div>Ingrese la edad</div>
                </div>
            </div>
            <div class="col-md-6 form-top-element">
                <label for="form_birth_place">
                    <div class="spanish">
                        Lugar de nacimiento:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="form_birth_place" name="form_birth_place" value="<?php if (isset($_SESSION['form_birth_place'])) {
                                                                                                                            echo $_SESSION['form_birth_place'];
                                                                                                                        } ?>" />
                <div class="invalid-feedback">
                    <div>Ingrese el lugar de nacimiento</div>
                </div>
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="form_city">
                    <div class="spanish">
                        Ciudad de residencia:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="form_city" name="form_city" value="<?php if (isset($_SESSION['form_city'])) {
                                                                                                                echo $_SESSION['form_city'];
                                                                                                            } ?>" />
                <div class="invalid-feedback">
                    <div>Ingrese la ciudad de residencia</div>
                </div>
            </div>
            <div class="col-md-6 form-top-element">
                <label for="form_study">
                    <div class="spanish">
                        Nivel de estudios:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="form_study" name="form_study" value="<?php if (isset($_SESSION['form_study'])) {
                                                                                                                echo $_SESSION['form_study'];
                                                                                                            } ?>" />
                <div class="invalid-feedback">
                    <div>Ingrese el Nivel de estudios</div>
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
                    <option value="casada">Casada / Unión libre</option>
                    <option value="soltera">Soltera / Divorciada</option>
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
                    <option value="empleada">Empleada</option>
                    <option value="ama de casa">Ama de casa</option>
                    <option value="independiente">Independiente</option>
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
                <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height" value="<?php if (isset($_SESSION['form_height'])) {
                                                                                                                                        echo $_SESSION['form_height'];
                                                                                                                                    } ?>" />
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
                <input type="number" class="form-control-phenotype" step=".01" id="validationCustom01" name="form_weight" value="<?php if (isset($_SESSION['form_weight'])) {
                                                                                                                                        echo $_SESSION['form_weight'];
                                                                                                                                    } ?>" />
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
                    <option value="derecha">Derecha</option>
                    <option value="izquierda">Izquierda</option>
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
                    <option value="A+">A+</option>
                    <option value="O+">O+</option>
                    <option value="B+">B+</option>
                    <option value="AB+">AB+</option>
                    <option value="A-">A-</option>
                    <option value="O-">O-</option>
                    <option value="B-">B-</option>
                    <option value="AB-">AB-</option>
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
                        Dispositivo DIU:
                    </div>
                </label>
                <select name="form_diu">
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
                <label for="form_hobbies">
                    <div class="spanish">
                        Hobbies:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="form_hobbies" name="form_hobbies" value="<?php if (isset($_SESSION['form_hobbies'])) {
                                                                                                                        echo $_SESSION['form_hobbies'];
                                                                                                                    } ?>" />
                <div class="invalid-feedback">
                    <div>Ingrese los Hobbies</div>
                </div>
            </div>
            <div class="col-md-6 form-top-element">
                <label for="form_alergies">
                    <div class="spanish">
                        Alergias:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="form_alergies" name="form_alergies" value="<?php if (isset($_SESSION['form_alergies'])) {
                                                                                                                        echo $_SESSION['form_alergies'];
                                                                                                                    } ?>" />
                <div class="invalid-feedback">
                    <div>Ingrese las Alergias</div>
                </div>
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="form_description_auto">
                    <div class="spanish">
                        Autodescripción:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="form_description_auto" name="form_description_auto" value="<?php if (isset($_SESSION['form_description_auto'])) {
                                                                                                                                        echo $_SESSION['form_description_auto'];
                                                                                                                                    } ?>" />
                <div class="invalid-feedback">
                    <div>Ingrese la Autodescripción</div>
                </div>
            </div>
            <div class="col-md-6 form-top-element">
                <label for="form_description_others">
                    <div class="spanish">
                        Descripción de otros:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="form_description_others" name="form_description_others" value="<?php if (isset($_SESSION['form_description_others'])) {
                                                                                                                                            echo $_SESSION['form_description_others'];
                                                                                                                                        } ?>" />
                <div class="invalid-feedback">
                    <div>Ingrese el Descripción de otros</div>
                </div>
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationCustom01">
                    <div class="spanish">
                        Vacunas COVID:
                    </div>
                </label>
                <select name="form_covid_vaccines">
                    <option value="sí">Sí</option>
                    <option value="no">No</option>
                </select>
                <div class="invalid-feedback">
                    <div>Seleccione una opción</div>
                </div>
            </div>
            <div class="col-md-6 form-top-element">
                <label for="form_reason">
                    <div class="spanish">
                        Motivo para ser gestante subrogada:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="form_reason" name="form_reason" value="<?php if (isset($_SESSION['form_reason'])) {
                                                                                                                echo $_SESSION['form_reason'];
                                                                                                            } ?>" />
                <div class="invalid-feedback">
                    <div>Ingrese el motivo</div>
                </div>
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationCustom01">
                    <div class="spanish">
                        Problemas de adicción:
                    </div>
                </label>
                <select name="form_adiction">
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
                        Ha estado en prisión:
                    </div>
                </label>
                <select name="form_prison">
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
                        Tiene licencia para conducir:
                    </div>
                </label>
                <select name="form_license">
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
                        Tiene carro:
                    </div>
                </label>
                <select name="form_car">
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
                <label for="form_pregnancy_description">
                    <div class="spanish">
                        Describe tus embarazos:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="form_pregnancy_description" name="form_pregnancy_description" value="<?php if (isset($_SESSION['form_pregnancy_description'])) {
                                                                                                                                        echo $_SESSION['form_pregnancy_description'];
                                                                                                                                    } ?>" />
                <div class="invalid-feedback">
                    <div>Ingrese la descripción</div>
                </div>
            </div>
            <div class="col-md-6 form-top-element">
                <label for="form_ectopic_pregnancy">
                    <div class="spanish">
                        Número de embarazos ectópicos:
                    </div>
                </label>
                <input type="number" class="form-control-phenotype" id="form_ectopic_pregnancy" name="form_ectopic_pregnancy" value="<?php if (isset($_SESSION['form_ectopic_pregnancy'])) {
                                                                                                                                            echo $_SESSION['form_ectopic_pregnancy'];
                                                                                                                                        } ?>" />
                <div class="invalid-feedback">
                    <div>Ingrese el Número de embarazos ectópicos</div>
                </div>
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="form_last_pregnancy">
                    <div class="spanish">
                        Fecha del último embarazo:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="form_last_pregnancy" name="form_last_pregnancy" value="<?php if (isset($_SESSION['form_last_pregnancy'])) {
                                                                                                                                        echo $_SESSION['form_last_pregnancy'];
                                                                                                                                    } ?>" />
                <div class="invalid-feedback">
                    <div>Ingrese la descripción</div>
                </div>
            </div>
            <div class="col-md-6 form-top-element">
                <label for="form_last_birth">
                    <div class="spanish">
                        Fecha de la última vez que dio a luz:
                    </div>
                </label>
                <input type="number" class="form-control-phenotype" id="form_last_birth" name="form_last_birth" value="<?php if (isset($_SESSION['form_last_birth'])) {
                                                                                                                                            echo $_SESSION['form_last_birth'];
                                                                                                                                        } ?>" />
                <div class="invalid-feedback">
                    <div>Ingrese el Número de embarazos ectópicos</div>
                </div>
            </div>
        </div>
        <div class="form-characteristics">
            <div class="form-subtitle form-white">
                <div class="spanish">Antecedentes gineco-obstétricos</div>
            </div>
        </div>
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
                        <option value="natural">Parto natural</option>
                        <option value="cesarea">Cesárea</option>
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
                    <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_1" />
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
                    <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_1" />
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
                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_1" />
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
                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_1" />
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
                    <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_1" />
                    <div class="invalid-feedback">
                        <div>Ingrese algún comentario</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Edad:
                        </div>
                    </label>
                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_age_pregnant_1" />
                    <div class="invalid-feedback">
                        <div>Ingrese la edad</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Género:
                        </div>
                    </label>
                    <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_genre_pregnant_1" />
                    <div class="invalid-feedback">
                        <div>Ingrese el género</div>
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
                        <option value="natural">Parto natural</option>
                        <option value="cesarea">Cesárea</option>
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
                    <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_2" />
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
                    <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_2" />
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
                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_2" />
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
                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_2" />
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
                    <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_2" />
                    <div class="invalid-feedback">
                        <div>Ingrese algún comentario</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Edad:
                        </div>
                    </label>
                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_age_pregnant_2" />
                    <div class="invalid-feedback">
                        <div>Ingrese la edad</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Género:
                        </div>
                    </label>
                    <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_genre_pregnant_2" />
                    <div class="invalid-feedback">
                        <div>Ingrese el género</div>
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
                        <option value="natural">Parto natural</option>
                        <option value="cesarea">Cesárea</option>
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
                    <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_3" />
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
                    <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_3" />
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
                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_3" />
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
                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_3" />
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
                    <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_3" />
                    <div class="invalid-feedback">
                        <div>Ingrese algún comentario</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Edad:
                        </div>
                    </label>
                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_age_pregnant_3" />
                    <div class="invalid-feedback">
                        <div>Ingrese la edad</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Género:
                        </div>
                    </label>
                    <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_genre_pregnant_3" />
                    <div class="invalid-feedback">
                        <div>Ingrese el género</div>
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
                        <option value="natural">Parto natural</option>
                        <option value="cesarea">Cesárea</option>
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
                    <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_4" />
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
                    <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_4" />
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
                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_4" />
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
                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_4" />
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
                    <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_4" />
                    <div class="invalid-feedback">
                        <div>Ingrese algún comentario</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Edad:
                        </div>
                    </label>
                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_age_pregnant_4" />
                    <div class="invalid-feedback">
                        <div>Ingrese la edad</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Género:
                        </div>
                    </label>
                    <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_genre_pregnant_4" />
                    <div class="invalid-feedback">
                        <div>Ingrese el género</div>
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
                        <option value="natural">Parto natural</option>
                        <option value="cesarea">Cesárea</option>
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
                    <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_5" />
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
                    <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_5" />
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
                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_5" />
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
                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_5" />
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
                    <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_5" />
                    <div class="invalid-feedback">
                        <div>Ingrese algún comentario</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Edad:
                        </div>
                    </label>
                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_age_pregnant_5" />
                    <div class="invalid-feedback">
                        <div>Ingrese la edad</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Género:
                        </div>
                    </label>
                    <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_genre_pregnant_5" />
                    <div class="invalid-feedback">
                        <div>Ingrese el género</div>
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
                        <option value="natural">Parto natural</option>
                        <option value="cesarea">Cesárea</option>
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
                    <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_6" />
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
                    <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_6" />
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
                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_6" />
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
                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_6" />
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
                    <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_6" />
                    <div class="invalid-feedback">
                        <div>Ingrese algún comentario</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Edad:
                        </div>
                    </label>
                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_age_pregnant_6" />
                    <div class="invalid-feedback">
                        <div>Ingrese la edad</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Género:
                        </div>
                    </label>
                    <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_genre_pregnant_6" />
                    <div class="invalid-feedback">
                        <div>Ingrese el género</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-btn">
            <button class="btn btn-send" id="pregnancy">
                <div>Agregar embarazo</div>
            </button>
            <button class="btn btn-send display-none" id="pregnancyRmv">
                <div>Remover embarazo</div>
            </button>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationCustom01">
                    <div class="spanish">
                        Abortos:
                    </div>
                </label>
                <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                <select name="form_surrogacy" onchange="abortEnable()" id="enableAbort">
                    <option value="no">No</option>
                    <option value="yes">Sí</option>
                </select>
                <div class="invalid-feedback">
                    <div>Ingrese la edad</div>
                </div>
            </div>
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
                        <option value="Voluntario">Voluntario</option>
                        <option value="Involuntario">Involuntario</option>
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
                    <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_year_abort_1" />
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
                        <option value="Bioquímico">Bioquímico</option>
                        <option value="Legrado">Legrado</option>
                        <option value="Espontáneo">Espontáneo</option>
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
                    <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_week_abort_1" />
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
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="form_comments_abort_1" />
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
                        <option value="Voluntario">Voluntario</option>
                        <option value="Involuntario">Involuntario</option>
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
                    <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_year_abort_2" />
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
                        <option value="Bioquímico">Bioquímico</option>
                        <option value="Legrado">Legrado</option>
                        <option value="Espontáneo">Espontáneo</option>
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
                    <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_week_abort_2" />
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
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="form_comments_abort_2" />
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
                        <option value="Voluntario">Voluntario</option>
                        <option value="Involuntario">Involuntario</option>
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
                    <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_year_abort_3" />
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
                        <option value="Bioquímico">Bioquímico</option>
                        <option value="Legrado">Legrado</option>
                        <option value="Espontáneo">Espontáneo</option>
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
                    <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_week_abort_3" />
                    <div class="invalid-feedback">
                        <div>Ingrese el año</div>
                    </div>
                </div>
            </div>
            <input type="hidden" id="pregnancyNum" name="pregnancyNum" value="0">
            <div class="col-md-6">
                <label for="validationDefault01">
                    <div class="spanish">
                        Complicaciones:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="form_comments_abort_3" />
                <div class="invalid-feedback">
                    <div>Ingrese el año</div>
                </div>
            </div>
        </div>
        <div class="form-btn display-none" id="abortEnable2">
            <button class="btn btn-send" id="abort">
                <div>Agregar datos de aborto</div>
            </button>
            <button class="btn btn-send display-none" id="abortRmv">
                <div>Remover campo de aborto</div>
            </button>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationCustom01">
                    <div class="spanish">
                        ¿Ha sido madre sustituta antes?:
                    </div>
                </label>
                <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                <select name="form_surrogacy" onchange="surrogacyEnable()" id="enableSurrogacy">
                    <option value="no">No</option>
                    <option value="yes">Sí</option>
                </select>
                <div class="invalid-feedback">
                    <div>Seleccione una opción</div>
                </div>
            </div>
        </div>
        <div class="surrogacySection display-none">
            <div class="form-top">
                <div class="col-md-6">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Embarazo 1:
                        </div>
                    </label>
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                    <select name="form_type_pregnant_s_1">
                        <option value="natural">Parto natural</option>
                        <option value="cesarea">Cesárea</option>
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
                    <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_s_1" />
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
                    <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_s_1" />
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
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_a_sge" /> -->
                    <select name="form_term_pregnant_s_1">
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
                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_s_1" />
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
                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_s_1" />
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
                    <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_s_1" />
                    <div class="invalid-feedback">
                        <div>Ingrese algún comentario</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Edad:
                        </div>
                    </label>
                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_age_pregnant_s_1" />
                    <div class="invalid-feedback">
                        <div>Ingrese la edad</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Género:
                        </div>
                    </label>
                    <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_genre_pregnant_s_1" />
                    <div class="invalid-feedback">
                        <div>Ingrese el género</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="surrogacySection display-none">
            <div class="form-top">
                <div class="col-md-6">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Embarazo 2:
                        </div>
                    </label>
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_a_sge" /> -->
                    <select name="form_type_pregnant_s_2">
                        <option value="natural">Parto natural</option>
                        <option value="cesarea">Cesárea</option>
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
                    <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_s_2" />
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
                    <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_s_2" />
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
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_a_sge" /> -->
                    <select name="form_term_pregnant_s_2">
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
                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_s_2" />
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
                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_s_2" />
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
                    <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_s_2" />
                    <div class="invalid-feedback">
                        <div>Ingrese algún comentario</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Edad:
                        </div>
                    </label>
                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_age_pregnant_s_2" />
                    <div class="invalid-feedback">
                        <div>Ingrese la edad</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Género:
                        </div>
                    </label>
                    <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_genre_pregnant_s_2" />
                    <div class="invalid-feedback">
                        <div>Ingrese el género</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="surrogacySection display-none">
            <div class="form-top">
                <div class="col-md-6">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Embarazo 3:
                        </div>
                    </label>
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_a_sge" /> -->
                    <select name="form_type_pregnant_s_3">
                        <option value="natural">Parto natural</option>
                        <option value="cesarea">Cesárea</option>
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
                    <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height_pregnant_s_3" />
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
                    <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_weight_pregnant_s_3" />
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
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_a_sge" /> -->
                    <select name="form_term_pregnant_s_3">
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
                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_week_pregnant_s_3" />
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
                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_year_pregnant_s_3" />
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
                    <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_comments_pregnant_s_3" />
                    <div class="invalid-feedback">
                        <div>Ingrese algún comentario</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Edad:
                        </div>
                    </label>
                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_age_pregnant_s_3" />
                    <div class="invalid-feedback">
                        <div>Ingrese la edad</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Género:
                        </div>
                    </label>
                    <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_genre_pregnant_s_3" />
                    <div class="invalid-feedback">
                        <div>Ingrese el género</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-btn display-none" id="surrogacyEnable2">
            <button class="btn btn-send" id="surrogacy">
                <div>Agregar datos de embarazo</div>
            </button>
            <button class="btn btn-send display-none" id="surrogacyRmv">
                <div>Remover campo de embarazo</div>
            </button>
        </div>
        <div class="form-btn btn-right">
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
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="build/js/form.min.js"></script>
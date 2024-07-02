<?php
include 'includes/templates/header.php';
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
        <form class="form form-phenotype" action="form2.php" method="post" enctype="multipart/form-data">
            <div class="form-top">
                <div class="col-md-6 form-top-element">
                    <label for="validationDefault01">
                        <div class="spanish">
                            Nombre completo:
                        </div>
                    </label>
                    <input type="text" class="form-control-phenotype" id="validationDefault01" name="form_name" value="<?php if (isset($_SESSION['form_name'])) { echo $_SESSION['form_name'];} ?>" />
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
                    <input type="date" class="form-control-phenotype" id="validationCustom01" name="form_date" value="<?php if (isset($_SESSION['form_date'])) { echo $_SESSION['form_date'];} ?>"/>
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
                    <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_age" value="<?php if (isset($_SESSION['form_age'])) { echo $_SESSION['form_age'];} ?>"/>
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
                    <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_birth_place" value="<?php if (isset($_SESSION['form_birth_place'])) { echo $_SESSION['form_birth_place'];} ?>"/>
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
                            Estatura:
                        </div>
                    </label>
                    <input type="number" class="form-control-phenotype" step=".01" id="validationDefault01" name="form_height" value="<?php if (isset($_SESSION['form_height'])) { echo $_SESSION['form_height'];} ?>"/>
                    <div class="invalid-feedback">
                        <div>Ingrese la estatura</div>
                    </div>
                </div>
                <div class="col-md-6 form-top-element">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Peso:
                        </div>
                    </label>
                    <input type="number" class="form-control-phenotype" step=".01" id="validationCustom01" name="form_weight" value="<?php if (isset($_SESSION['form_weight'])) { echo $_SESSION['form_weight'];} ?>"/>
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
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                    <select name="form_diu">
                        <option value="sí">Sí</option>
                        <option value="no">No</option>
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
                                Estatura:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_height_pregnant_1" />
                        <div class="invalid-feedback">
                            <div>Ingrese la estatura</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Peso:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_weight_pregnant_1" />
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
                                Estatura:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_height_pregnant_2" />
                        <div class="invalid-feedback">
                            <div>Ingrese la estatura</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Peso:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_weight_pregnant_2" />
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
                                Estatura:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_height_pregnant_3" />
                        <div class="invalid-feedback">
                            <div>Ingrese la estatura</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Peso:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_weight_pregnant_3" />
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
                                Estatura:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_height_pregnant_4" />
                        <div class="invalid-feedback">
                            <div>Ingrese la estatura</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Peso:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_weight_pregnant_4" />
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
                                Estatura:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_height_pregnant_5" />
                        <div class="invalid-feedback">
                            <div>Ingrese la estatura</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Peso:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_weight_pregnant_5" />
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
                                Estatura:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_height_pregnant_6" />
                        <div class="invalid-feedback">
                            <div>Ingrese la estatura</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Peso:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_weight_pregnant_6" />
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
                    <select name="form_abort" onchange="abortEnable()" id="enableAbort">
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
                            <option value="voluntary">Voluntario</option>
                            <option value="involuntary">Involuntario</option>
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
                            <option value="biomechemical">Bioquímico</option>
                            <option value="legrado">Legrado</option>
                            <option value="spontaneous">Espontáneo</option>
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
                            <option value="voluntary">Voluntario</option>
                            <option value="involuntary">Involuntario</option>
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
                            <option value="biomechemical">Bioquímico</option>
                            <option value="legrado">Legrado</option>
                            <option value="spontaneous">Espontáneo</option>
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
                            <option value="voluntary">Voluntario</option>
                            <option value="involuntary">Involuntario</option>
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
                            <option value="biomechemical">Bioquímico</option>
                            <option value="legrado">Legrado</option>
                            <option value="spontaneous">Espontáneo</option>
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
    <?php } ?>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="build/js/form.min.js"></script>
<?php
include 'includes/templates/header.php';
$prenancy_num = 2;
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
                                <input class="form-check-input" name="caucasico" type="checkbox" value="caucasico" id="caucasico">
                                <label class="form-check-label" for="caucasico">
                                    <div class="spanish">Cirugía uterina previa </div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="arabe" type="checkbox" value="arabe" id="arabe">
                                <label class="form-check-label" for="arabe">
                                    <div class="spanish">Cirugía abdominal</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="indoario" type="checkbox" value="indoario" id="indoario">
                                <label class="form-check-label" for="indoario">
                                    <div class="spanish">Multigesta</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="indoario" type="checkbox" value="indoario" id="indoario">
                                <label class="form-check-label" for="indoario">
                                    <div class="spanish">Embarazo múltiple</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="indoario" type="checkbox" value="indoario" id="indoario">
                                <label class="form-check-label" for="indoario">
                                    <div class="spanish">Hemorragia obstétrica</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="indoario" type="checkbox" value="indoario" id="indoario">
                                <label class="form-check-label" for="indoario">
                                    <div class="spanish">Miomatosis uterina de grandes elementos</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="indoario" type="checkbox" value="indoario" id="indoario">
                                <label class="form-check-label" for="indoario">
                                    <div class="spanish">Peso fetal estimado > 4000 gr < 2000 gr</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="indoario" type="checkbox" value="indoario" id="indoario">
                                <label class="form-check-label" for="indoario">
                                    <div class="spanish">Obesidad IMC > 37</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="indoario" type="checkbox" value="indoario" id="indoario">
                                <label class="form-check-label" for="indoario">
                                    <div class="spanish">Malformación congénita</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="indoario" type="checkbox" value="indoario" id="indoario">
                                <label class="form-check-label" for="indoario">
                                    <div class="spanish">Sin control prenatal en los embarazos</div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="column-2">
                        <div class="form-grid-element">
                            <div class="form-check">
                                <input class="form-check-input" name="vehicle1" type="checkbox" value="vehicle1" id="vehicle1">
                                <label class="form-check-label" for="vehicle1">
                                    <div class="spanish">Periodo intergenésico corto < 18 meses </div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="arabe" type="checkbox" value="arabe" id="arabe">
                                <label class="form-check-label" for="arabe">
                                    <div class="spanish">COVID en los últimos 6 meses</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="indoario" type="checkbox" value="indoario" id="indoario">
                                <label class="form-check-label" for="indoario">
                                    <div class="spanish">Comorbilidades preexistentes que compliquen el embarazo y al neonato (endocrinológicas, cardiológicas, e inmunológicas)</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="1" type="checkbox" value="1" id="1">
                                <label class="form-check-label" for="1">
                                    <div class="spanish">Enfermedad hipertensivas</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="2" type="checkbox" value="2" id="2">
                                <label class="form-check-label" for="2">
                                    <div class="spanish">Enfermedades infectocontagiosos (VIH, Hepatitis B y C)</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="5" type="checkbox" value="5" id="5">
                                <label class="form-check-label" for="5">
                                    <div class="spanish">Sepsis</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="6" type="checkbox" value="6" id="6">
                                <label class="form-check-label" for="6">
                                    <div class="spanish">Síndrome de Hellp</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="7" type="checkbox" value="7" id="7">
                                <label class="form-check-label" for="7">
                                    <div class="spanish">Placenta previa</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="8" type="checkbox" value="8" id="8">
                                <label class="form-check-label" for="8">
                                    <div class="spanish">Sospecha de placenta acreta o placenta percreta</div>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="9" type="checkbox" value="9" id="9">
                                <label class="form-check-label" for="9">
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
                <textarea class="form-control-phenotype-msg" name="form_notes" id="validationTextarea"></textarea>
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
                    <select name="form_status">
                        <option value="taken">Sí</option>
                        <option value="single">No</option>
                    </select>
                    <div class="invalid-feedback">
                        <div>Ingrese la edad</div>
                    </div>
                </div>
                <div class="col-md-6 form-top-element">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Diabetes:
                        </div>
                    </label>
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                    <select name="form_status">
                        <option value="taken">Sí</option>
                        <option value="single">No</option>
                    </select>
                    <div class="invalid-feedback">
                        <div>Ingrese la edad</div>
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
                    <select name="form_status">
                        <option value="taken">Sí</option>
                        <option value="single">No</option>
                    </select>
                    <div class="invalid-feedback">
                        <div>Ingrese la edad</div>
                    </div>
                </div>
                <div class="col-md-6 form-top-element">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Hipertensión:
                        </div>
                    </label>
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                    <select name="form_status">
                        <option value="taken">Sí</option>
                        <option value="single">No</option>
                    </select>
                    <div class="invalid-feedback">
                        <div>Ingrese la edad</div>
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
                    <select name="form_status">
                        <option value="taken">Sí</option>
                        <option value="single">No</option>
                    </select>
                    <div class="invalid-feedback">
                        <div>Ingrese la edad</div>
                    </div>
                </div>
                <div class="col-md-6 form-top-element">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Dislexia:
                        </div>
                    </label>
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                    <select name="form_status">
                        <option value="taken">Sí</option>
                        <option value="single">No</option>
                    </select>
                    <div class="invalid-feedback">
                        <div>Ingrese la edad</div>
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
                    <select name="form_status">
                        <option value="taken">Sí</option>
                        <option value="single">No</option>
                    </select>
                    <div class="invalid-feedback">
                        <div>Ingrese la edad</div>
                    </div>
                </div>
                <div class="col-md-6 form-top-element">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Migraña:
                        </div>
                    </label>
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                    <select name="form_status">
                        <option value="taken">Sí</option>
                        <option value="single">No</option>
                    </select>
                    <div class="invalid-feedback">
                        <div>Ingrese la edad</div>
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
                    <select name="form_status" id="form-smoke-select" onchange="smokeEnable()">
                        <option value="no">No</option>
                        <option value="yes">Sí</option>
                    </select>
                    <div class="invalid-feedback">
                        <div>Ingrese la edad</div>
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
                    <select name="form_status" id="form-surgery-select" onchange="surgeryEnable()">
                        <option value="no">3 veces por semana</option>
                        <option value="yes">2 veces por semana</option>
                        <option value="yes">1 veces por semana</option>
                        <option value="yes">En eventos/reuniones</option>
                        <option value="yes">Eventualmente</option>
                        <option value="yes">Diario</option>
                    </select>
                    <div class="invalid-feedback">
                        <div>Ingrese la edad</div>
                    </div>
                </div>
                <div class="col-md-6 form-top-element">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Cantidad:
                        </div>
                    </label>
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                    <select name="form_status" id="form-fracture-select" onchange="fractureEnable()">
                        <option value="no">Más de 10 al día</option>
                        <option value="yes">De 5 a 10 al día</option>
                        <option value="yes">De 3 a 5 por día</option>
                        <option value="yes">Hasta 3 al día</option>
                        <option value="yes">1 al día</option>
                    </select>
                    <div class="invalid-feedback">
                        <div>Ingrese la edad</div>
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
                    <select name="form_status" id="form-alcohol-select" onchange="alcoholEnable()">
                        <option value="no">No</option>
                        <option value="yes">Sí</option>
                    </select>
                    <div class="invalid-feedback">
                        <div>Ingrese la edad</div>
                    </div>
                </div>
                <div class="col-md-6 form-top-element display-none" id="form-alcohol-field">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Frecuencia:
                        </div>
                    </label>
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                    <select name="form_status" id="form-surgery-select" onchange="surgeryEnable()">
                        <option value="no">3 veces por semana</option>
                        <option value="yes">2 veces por semana</option>
                        <option value="yes">1 veces por semana</option>
                        <option value="yes">En eventos/reuniones</option>
                        <option value="yes">Eventualmente</option>
                        <option value="yes">Diario</option>
                    </select>
                    <div class="invalid-feedback">
                        <div>Ingrese la edad</div>
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
                    <select name="form_status" id="form-fracture-select" onchange="fractureEnable()">
                        <option value="no">No</option>
                        <option value="yes">Sí</option>
                    </select>
                    <div class="invalid-feedback">
                        <div>Ingrese la edad</div>
                    </div>
                </div>
                <div class="col-md-6 form-top-element">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Cirugía:
                        </div>
                    </label>
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                    <select name="form_status" id="form-surgery-select" onchange="surgeryEnable()">
                        <option value="no">No</option>
                        <option value="yes">Sí</option>
                    </select>
                    <div class="invalid-feedback">
                        <div>Ingrese la edad</div>
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
                    <input type="text" class="form-control-phenotype" id="validationDefault01" name="form_name" />
                    <div class="invalid-feedback">
                        <div>Ingrese la estatura</div>
                    </div>
                </div>
                <div class="col-md-6 form-top-element display-transparent" id="form-surgery-field">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Especifique la cirugía:
                        </div>
                    </label>
                    <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_last_name" />
                    <div class="invalid-feedback">
                        <div>Ingrese el peso</div>
                    </div>
                </div>
            </div>
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
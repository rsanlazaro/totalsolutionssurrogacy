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
                    <input type="text" class="form-control-phenotype" id="validationDefault01" name="form_name" />
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
                    <input type="date" class="form-control-phenotype" id="validationCustom01" name="form_last_name" />
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
                    <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_name" />
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
                    <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_last_name" />
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
                        <option value="taken">Casada / Unión libre</option>
                        <option value="single">Soltera / Divorciada</option>
                    </select>
                    <div class="invalid-feedback">
                        <div>Ingrese la edad</div>
                    </div>
                </div>
                <div class="col-md-6 form-top-element">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Ocupación:
                        </div>
                    </label>
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                    <select name="form_status">
                        <option value="taken">Empleada</option>
                        <option value="single">Ama de casa</option>
                        <option value="single">Independiente</option>
                    </select>
                    <div class="invalid-feedback">
                        <div>Ingrese la edad</div>
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
                    <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_name" />
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
                    <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_last_name" />
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
                    <select name="form_status">
                        <option value="taken">Derecha</option>
                        <option value="single">Izquierda</option>
                    </select>
                    <div class="invalid-feedback">
                        <div>Ingrese la edad</div>
                    </div>
                </div>
                <div class="col-md-6 form-top-element">
                    <label for="validationCustom01">
                        <div class="spanish">
                            Grupo sanguíneo:
                        </div>
                    </label>
                    <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                    <select name="form_status">
                        <option value="taken">A+</option>
                        <option value="single">O+</option>
                        <option value="single">B+</option>
                        <option value="single">AB+</option>
                        <option value="single">A-</option>
                        <option value="single">O-</option>
                        <option value="single">B-</option>
                        <option value="single">AB-</option>
                    </select>
                    <div class="invalid-feedback">
                        <div>Ingrese el grupo sanguíneo</div>
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
                            Dispositivo DIU:
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
            <div class="form-characteristics">
                <div class="form-subtitle form-white">
                    <div class="spanish">Antecedentes gineco-obstétricos</div>
                </div>
            </div>
            <div class="pregancySection display-none">
                <div class="form-top">
                    <div class="col-md-6 form-top-element">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Embarazo 1:
                            </div>
                        </label>
                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                        <select name="form_status">
                            <option value="taken">Parto natural</option>
                            <option value="single">Cesárea</option>
                        </select>
                        <div class="invalid-feedback">
                            <div>Ingrese el tipo de parto</div>
                        </div>
                    </div>
                    <div class="col-md-6 form-top-element">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Complicaciones:
                            </div>
                        </label>
                        <input type="text" class="form-control-phenotype" id="validationDefault01" name="form_name" />
                        <div class="invalid-feedback">
                            <div>Ingrese el nombre</div>
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
                        <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_name" />
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
                        <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_last_name" />
                        <div class="invalid-feedback">
                            <div>Ingrese el peso</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pregancySection display-none">
                <div class="form-top">
                    <div class="col-md-6 form-top-element">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Embarazo 2:
                            </div>
                        </label>
                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                        <select name="form_status">
                            <option value="taken">Parto natural</option>
                            <option value="single">Cesárea</option>
                        </select>
                        <div class="invalid-feedback">
                            <div>Ingrese el tipo de parto</div>
                        </div>
                    </div>
                    <div class="col-md-6 form-top-element">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Complicaciones:
                            </div>
                        </label>
                        <input type="text" class="form-control-phenotype" id="validationDefault01" name="form_name" />
                        <div class="invalid-feedback">
                            <div>Ingrese el nombre</div>
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
                        <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_name" />
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
                        <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_last_name" />
                        <div class="invalid-feedback">
                            <div>Ingrese el peso</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pregancySection display-none">
                <div class="form-top">
                    <div class="col-md-6 form-top-element">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Embarazo 3:
                            </div>
                        </label>
                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                        <select name="form_status">
                            <option value="taken">Parto natural</option>
                            <option value="single">Cesárea</option>
                        </select>
                        <div class="invalid-feedback">
                            <div>Ingrese el tipo de parto</div>
                        </div>
                    </div>
                    <div class="col-md-6 form-top-element">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Complicaciones:
                            </div>
                        </label>
                        <input type="text" class="form-control-phenotype" id="validationDefault01" name="form_name" />
                        <div class="invalid-feedback">
                            <div>Ingrese el nombre</div>
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
                        <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_name" />
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
                        <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_last_name" />
                        <div class="invalid-feedback">
                            <div>Ingrese el peso</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pregancySection display-none">
                <div class="form-top">
                    <div class="col-md-6 form-top-element">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Embarazo 4:
                            </div>
                        </label>
                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                        <select name="form_status">
                            <option value="taken">Parto natural</option>
                            <option value="single">Cesárea</option>
                        </select>
                        <div class="invalid-feedback">
                            <div>Ingrese el tipo de parto</div>
                        </div>
                    </div>
                    <div class="col-md-6 form-top-element">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Complicaciones:
                            </div>
                        </label>
                        <input type="text" class="form-control-phenotype" id="validationDefault01" name="form_name" />
                        <div class="invalid-feedback">
                            <div>Ingrese el nombre</div>
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
                        <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_name" />
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
                        <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_last_name" />
                        <div class="invalid-feedback">
                            <div>Ingrese el peso</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pregancySection display-none">
                <div class="form-top">
                    <div class="col-md-6 form-top-element">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Embarazo 5:
                            </div>
                        </label>
                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                        <select name="form_status">
                            <option value="taken">Parto natural</option>
                            <option value="single">Cesárea</option>
                        </select>
                        <div class="invalid-feedback">
                            <div>Ingrese el tipo de parto</div>
                        </div>
                    </div>
                    <div class="col-md-6 form-top-element">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Complicaciones:
                            </div>
                        </label>
                        <input type="text" class="form-control-phenotype" id="validationDefault01" name="form_name" />
                        <div class="invalid-feedback">
                            <div>Ingrese el nombre</div>
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
                        <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_name" />
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
                        <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_last_name" />
                        <div class="invalid-feedback">
                            <div>Ingrese el peso</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pregancySection display-none">
                <div class="form-top">
                    <div class="col-md-6 form-top-element">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Embarazo 6:
                            </div>
                        </label>
                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                        <select name="form_status">
                            <option value="taken">Parto natural</option>
                            <option value="single">Cesárea</option>
                        </select>
                        <div class="invalid-feedback">
                            <div>Ingrese el tipo de parto</div>
                        </div>
                    </div>
                    <div class="col-md-6 form-top-element">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Complicaciones:
                            </div>
                        </label>
                        <input type="text" class="form-control-phenotype" id="validationDefault01" name="form_name" />
                        <div class="invalid-feedback">
                            <div>Ingrese el nombre</div>
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
                        <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_name" />
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
                        <input type="number" class="form-control-phenotype" id="validationCustom01" name="form_last_name" />
                        <div class="invalid-feedback">
                            <div>Ingrese el peso</div>
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
                <div class="col-md-6 form-top-element display-none" id="abortEnable1">
                    <label for="validationDefault01">
                        <div class="spanish">
                            Número de abortos:
                        </div>
                    </label>
                    <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_name" />
                    <div class="invalid-feedback">
                        <div>Ingrese la estatura</div>
                    </div>
                </div>
            </div>
            <div class="abortSection display-none">
                <div class="form-top">
                    <div class="col-md-6 form-top-element">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Aborto 1:
                            </div>
                        </label>
                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                        <select name="form_status">
                            <option value="taken">Voluntario</option>
                            <option value="single">Involuntario</option>
                        </select>
                        <div class="invalid-feedback">
                            <div>Ingrese el tipo de aborto</div>
                        </div>
                    </div>
                    <div class="col-md-6 form-top-element">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Año:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_name" />
                        <div class="invalid-feedback">
                            <div>Ingrese el año</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="abortSection display-none">
                <div class="form-top">
                    <div class="col-md-6 form-top-element">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Aborto 2:
                            </div>
                        </label>
                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                        <select name="form_status">
                            <option value="taken">Voluntario</option>
                            <option value="single">Involuntario</option>
                        </select>
                        <div class="invalid-feedback">
                            <div>Ingrese el tipo de aborto</div>
                        </div>
                    </div>
                    <div class="col-md-6 form-top-element">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Año:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_name" />
                        <div class="invalid-feedback">
                            <div>Ingrese el año</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="abortSection display-none">
                <div class="form-top">
                    <div class="col-md-6 form-top-element">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Aborto 3:
                            </div>
                        </label>
                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                        <select name="form_status">
                            <option value="taken">Voluntario</option>
                            <option value="single">Involuntario</option>
                        </select>
                        <div class="invalid-feedback">
                            <div>Ingrese el tipo de aborto</div>
                        </div>
                    </div>
                    <div class="col-md-6 form-top-element">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Año:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_name" />
                        <div class="invalid-feedback">
                            <div>Ingrese el año</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="abortSection display-none">
                <div class="form-top">
                    <div class="col-md-6 form-top-element">
                        <label for="validationCustom01">
                            <div class="spanish">
                                Aborto 4:
                            </div>
                        </label>
                        <!-- <input type="text" class="form-control-phenotype" id="validationCustom01" name="form_age" /> -->
                        <select name="form_status">
                            <option value="taken">Voluntario</option>
                            <option value="single">Involuntario</option>
                        </select>
                        <div class="invalid-feedback">
                            <div>Ingrese el tipo de aborto</div>
                        </div>
                    </div>
                    <div class="col-md-6 form-top-element">
                        <label for="validationDefault01">
                            <div class="spanish">
                                Año:
                            </div>
                        </label>
                        <input type="number" class="form-control-phenotype" id="validationDefault01" name="form_name" />
                        <div class="invalid-feedback">
                            <div>Ingrese el año</div>
                        </div>
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
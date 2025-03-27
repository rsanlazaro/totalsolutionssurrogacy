<?php
include 'includes/templates/header.php';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!$_SESSION['login'] && (($_SESSION['type'] == "user"))) {
    header('location: /index.php');
}
?>
<main>
    <div class="form-header">
        <div class="form-header-logo">
            <img src="build/img/icons/TotalSolutionsSurrogacyWhite.webp" alt="EggDonor">
        </div>
        <div class="form-header-title form-white">
            <div>
                Registro de datos para generar el PDF para itinerario
            </div>
        </div>
    </div>
    <form class="form form-phenotype" action="report3.php" method="post" enctype="multipart/form-data">
        <div class="form-top">
            <div class="col-md-12 form-top-element">
                <label for="validationDefault01">
                    <div>
                        Periodo:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="period" />
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-12 form-top-element">
                <label for="validationDefault01">
                    <div>
                        Nombre(s):
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="name" />
            </div>
        </div>
        <div class="form-characteristics">
            <div class="form-subtitle form-white">
                <div class="spanish">Primer día</div>
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div>
                        Fecha:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="date_1">
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div>
                        Actividad 1:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="activity_1_1">
            </div>
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div>
                        Actividad 2:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="activity_1_2">
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div>
                        Actividad 3:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="activity_1_3">
            </div>
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div>
                        Actividad 4:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="activity_1_4">
            </div>
        </div>
        <div class="form-characteristics">
            <div class="form-subtitle form-white">
                <div class="spanish">Segundo día</div>
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div>
                        Fecha:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="date_2">
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div>
                        Actividad 1:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="activity_2_1">
            </div>
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div>
                        Actividad 2:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="activity_2_2">
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div>
                        Actividad 3:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="activity_2_3">
            </div>
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div>
                        Actividad 4:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="activity_2_4">
            </div>
        </div>
        <div class="form-characteristics">
            <div class="form-subtitle form-white">
                <div class="spanish">Tercer día</div>
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div>
                        Fecha:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="date_3">
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div>
                        Actividad 1:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="activity_3_1">
            </div>
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div>
                        Actividad 2:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="activity_3_2">
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div>
                        Actividad 3:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="activity_3_3">
            </div>
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div>
                        Actividad 4:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="activity_3_4">
            </div>
        </div>
        <div class="form-characteristics">
            <div class="form-subtitle form-white">
                <div class="spanish">Cuarto día</div>
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div>
                        Fecha:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="date_4">
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div>
                        Actividad 1:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="activity_4_1">
            </div>
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div>
                        Actividad 2:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="activity_4_2">
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div>
                        Actividad 3:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="activity_4_3">
            </div>
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div>
                        Actividad 4:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="activity_4_4">
            </div>
        </div>
        <div class="form-characteristics">
            <div class="form-subtitle form-white">
                <div class="spanish">Quinto día</div>
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div>
                        Fecha:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="date_5">
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div>
                        Actividad 1:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="activity_5_1">
            </div>
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div>
                        Actividad 2:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="activity_5_2">
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div>
                        Actividad 3:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="activity_5_3">
            </div>
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div>
                        Actividad 4:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="activity_5_4">
            </div>
        </div>
        <div class="form-characteristics">
            <div class="form-subtitle form-white">
                <div class="spanish">Sexto día</div>
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div>
                        Fecha:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="date_6">
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div>
                        Actividad 1:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="activity_6_1">
            </div>
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div>
                        Actividad 2:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="activity_6_2">
            </div>
        </div>
        <div class="form-top">
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div>
                        Actividad 3:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="activity_6_3">
            </div>
            <div class="col-md-6 form-top-element">
                <label for="validationDefault01">
                    <div>
                        Actividad 4:
                    </div>
                </label>
                <input type="text" class="form-control-phenotype" id="validationDefault01" name="activity_6_4">
            </div>
        </div>
        <div class="form-btn btn-arrange">
            <button class="btn btn-send" type="submit">
                <div>Generar PDF</div>
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
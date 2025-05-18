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

// if (!$_SESSION['login']) {
//     header('location: /index.php');
// } else {
//     if (!($_SESSION['type'] === 'admin' || $_SESSION['type'] === 'admin-jr')) {
//         header('location: /index.php');
//     }
// }

// $conn = connectDB();

$sql = "SELECT * FROM candidates";
$result = mysqli_query($conn, $sql);
$indexOK = 0;

while ($row = mysqli_fetch_assoc($result)) {
    $id[++$indexOK] = $row['id'];
    $form_name[$indexOK] = $row['form_name'];
    $form_date[$indexOK] = $row['form_date'];
    $form_age[$indexOK] = $row['form_age'];
    $form_birth_place[$indexOK] = $row['form_birth_place'];
    $form_weight[$indexOK] = $row['form_weight'];
    $form_height[$indexOK] = $row['form_height'];
    $form_implant[$indexOK] = $row['form_implant'];
    $form_diu[$indexOK] = $row['form_diu'];
    $form_1[$indexOK] = $row['form_1'];
    $form_2[$indexOK] = $row['form_2'];
    $form_3[$indexOK] = $row['form_3'];
    $form_4[$indexOK] = $row['form_4'];
    $form_5[$indexOK] = $row['form_5'];
    $form_6[$indexOK] = $row['form_6'];
    $form_recluter[$indexOK] = $row['form_recluter'];
    $form_scheme[$indexOK] = $row['form_scheme'];
    if ($row['form_label'] == '' || $row['form_label'] == null) {
        $form_label[$indexOK] = 'register';
    } else {
        $form_label[$indexOK] = $row['form_label'];
    }
}
?>

<main class="register">
    <div class="register-info">
        <h3>Perfiles de gestantes registrados</h3>
    </div>

    <?php if (isset($_GET['msg'])) { ?>

        <p class="error"><?php echo $_GET['msg']; ?></p>

    <?php } ?>

    <p>
        <?php if (isset($id)) { ?>
            Hay un total de <?php echo count($id) ?> Perfiles registrados
        <?php } else { ?>
            No hay ningún perfil registrado
        <?php } ?>
    </p>
    <div class="menu-users">
        <div class="create-user">
            <a href="form.php">
                Nueva Candidata
            </a>
        </div>
        <div class="logout">
            <a href="logout.php">
                Cerrar sesión
            </a>
        </div>
    </div>

    <div class="container my-5">
        <ul class="container nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab" aria-controls="register" aria-selected="true" onclick="init1()">Registro</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="initial-tab" data-bs-toggle="tab" data-bs-target="#initial" type="button" role="tab" aria-controls="initial" aria-selected="false" onclick="init2()">Iniciales</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="discarded-tab" data-bs-toggle="tab" data-bs-target="#discarded" type="button" role="tab" aria-controls="discarded" aria-selected="false" onclick="init3()">Descartadas</button>
            </li>
        </ul>

        <div class="tab-content mt-3" id="myTabContent">
            <div class="tab-pane fade show active" id="register" role="tabpanel" aria-labelledby="register-tab">
                <div class="container lab-pagination">
                    <div class="panel">
                        <div class="body">
                            <div class="input-group">
                                <label for="searchBox">Búsqueda</label>
                                <input type="search" id="searchBox" placeholder="Filtrar..." />
                            </div>
                        </div>
                    </div>
                    <div id="table-scroll" class="content table-responsive table-full-width">
                        <table class="table table-hover myTable" id="myTable">
                            <thead>
                                <tr class="thead">
                                    <th>Gestante</th>
                                    <th>Edad</th>
                                    <th>Fecha de nacimiento</th>
                                    <th>Estatura (m)</th>
                                    <th>Peso (kg)</th>
                                    <!-- <th>Número de embarazos</th> -->
                                    <th>IMC</th>
                                    <th>Embarazos</th>
                                    <th>Complicaciones</th>
                                    <th>ACO</th>
                                    <!-- <th>Enfermedades</th> -->
                                    <th>Esquema</th>
                                    <th>Lugar de nacimiento</th>
                                    <th>Pagos</th>
                                    <th>Reclutadora</th>
                                    <th colspan="3">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 1; $i <= $indexOK; $i++) {
                                    if ($form_label[$i] == 'register') { ?>
                                        <?php
                                        $sql = "SELECT * FROM pregnants WHERE candidateId='" . $id[$i] . "'";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $form_type_pregnant_1 = $row['form_type_pregnant_1'];
                                            $form_height_pregnant_1 = $row['form_height_pregnant_1'];
                                            $form_weight_pregnant_1 = $row['form_weight_pregnant_1'];
                                            $form_term_pregnant_1 = $row['form_term_pregnant_1'];
                                            $form_week_pregnant_1 = $row['form_week_pregnant_1'];
                                            $form_year_pregnant_1 = $row['form_year_pregnant_1'];
                                            $form_comments_pregnant_1 = $row['form_comments_pregnant_1'];
                                            $form_type_pregnant_2 = $row['form_type_pregnant_2'];
                                            $form_height_pregnant_2 = $row['form_height_pregnant_2'];
                                            $form_weight_pregnant_2 = $row['form_weight_pregnant_2'];
                                            $form_term_pregnant_2 = $row['form_term_pregnant_2'];
                                            $form_week_pregnant_2 = $row['form_week_pregnant_2'];
                                            $form_year_pregnant_2 = $row['form_year_pregnant_2'];
                                            $form_comments_pregnant_2 = $row['form_comments_pregnant_2'];
                                            $form_type_pregnant_3 = $row['form_type_pregnant_3'];
                                            $form_height_pregnant_3 = $row['form_height_pregnant_3'];
                                            $form_weight_pregnant_3 = $row['form_weight_pregnant_3'];
                                            $form_term_pregnant_3 = $row['form_term_pregnant_3'];
                                            $form_week_pregnant_3 = $row['form_week_pregnant_3'];
                                            $form_year_pregnant_3 = $row['form_year_pregnant_3'];
                                            $form_comments_pregnant_3 = $row['form_comments_pregnant_3'];
                                            $form_type_pregnant_4 = $row['form_type_pregnant_4'];
                                            $form_height_pregnant_4 = $row['form_height_pregnant_4'];
                                            $form_weight_pregnant_4 = $row['form_weight_pregnant_4'];
                                            $form_term_pregnant_4 = $row['form_term_pregnant_4'];
                                            $form_week_pregnant_4 = $row['form_week_pregnant_4'];
                                            $form_year_pregnant_4 = $row['form_year_pregnant_4'];
                                            $form_comments_pregnant_4 = $row['form_comments_pregnant_4'];
                                            $form_type_pregnant_5 = $row['form_type_pregnant_5'];
                                            $form_height_pregnant_5 = $row['form_height_pregnant_5'];
                                            $form_weight_pregnant_5 = $row['form_weight_pregnant_5'];
                                            $form_term_pregnant_5 = $row['form_term_pregnant_5'];
                                            $form_week_pregnant_5 = $row['form_week_pregnant_5'];
                                            $form_year_pregnant_5 = $row['form_year_pregnant_5'];
                                            $form_comments_pregnant_5 = $row['form_comments_pregnant_5'];
                                            $form_type_pregnant_6 = $row['form_type_pregnant_6'];
                                            $form_height_pregnant_6 = $row['form_height_pregnant_6'];
                                            $form_weight_pregnant_6 = $row['form_weight_pregnant_6'];
                                            $form_term_pregnant_6 = $row['form_term_pregnant_6'];
                                            $form_week_pregnant_6 = $row['form_week_pregnant_6'];
                                            $form_year_pregnant_6 = $row['form_year_pregnant_6'];
                                            $form_comments_pregnant_6 = $row['form_comments_pregnant_6'];
                                            $form_type_abort_1 = $row['form_type_abort_1'];
                                            $form_year_abort_1 = $row['form_year_abort_1'];
                                            $form_week_abort_1 = $row['form_week_abort_1'];
                                            $form_method_abort_1 = $row['form_method_abort_1'];
                                            $form_comments_abort_1 = $row['form_comments_abort_1'];
                                            $form_type_abort_2 = $row['form_type_abort_2'];
                                            $form_year_abort_2 = $row['form_year_abort_2'];
                                            $form_week_abort_2 = $row['form_week_abort_2'];
                                            $form_method_abort_2 = $row['form_method_abort_2'];
                                            $form_comments_abort_2 = $row['form_comments_abort_2'];
                                            $form_type_abort_3 = $row['form_type_abort_3'];
                                            $form_year_abort_3 = $row['form_year_abort_3'];
                                            $form_week_abort_3 = $row['form_week_abort_3'];
                                            $form_method_abort_3 = $row['form_method_abort_3'];
                                            $form_comments_abort_3 = $row['form_comments_abort_3'];
                                            $form_coded_comments_pregnant_1 = $row['form_coded_comments_pregnant_1'];
                                            $form_coded_comments_pregnant_2 = $row['form_coded_comments_pregnant_2'];
                                            $form_coded_comments_pregnant_3 = $row['form_coded_comments_pregnant_3'];
                                            $form_coded_comments_pregnant_4 = $row['form_coded_comments_pregnant_4'];
                                            $form_coded_comments_pregnant_5 = $row['form_coded_comments_pregnant_5'];
                                            $form_coded_comments_pregnant_6 = $row['form_coded_comments_pregnant_6'];
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
                                            $num_ces = 0;
                                            if ($form_type_pregnant_1 == "cesarea") {
                                                $num_ces = $num_ces + 1;
                                            }
                                            if ($form_type_pregnant_2 == "cesarea") {
                                                $num_ces = $num_ces + 1;
                                            }
                                            if ($form_type_pregnant_3 == "cesarea") {
                                                $num_ces = $num_ces + 1;
                                            }
                                            if ($form_type_pregnant_4 == "cesarea") {
                                                $num_ces = $num_ces + 1;
                                            }
                                            if ($form_type_pregnant_5 == "cesarea") {
                                                $num_ces = $num_ces + 1;
                                            }
                                            if ($form_type_pregnant_6 == "cesarea") {
                                                $num_ces = $num_ces + 1;
                                            }
                                        }
                                        ?>
                                        <tr>
                                            <td data-title="Gestante" scope="row">
                                                <a href="profile.php?id=<?php echo $id[$i]; ?>"><?php echo $form_name[$i] ?></a>
                                            </td>
                                            <td data-title="Edad" <?php if ($form_age[$i] > 38) {
                                                                        echo "class='red-label'";
                                                                    } else {
                                                                        echo "class='green-label'";
                                                                    } ?>><?php echo $form_age[$i] ?></td>
                                            <td data-title="Fecha de nacimiento"><?php echo $form_date[$i] ?></td>
                                            <td data-title="Estatura (m)"><?php echo $form_height[$i] ?></td>
                                            <td data-title="Peso (kg)"><?php echo $form_weight[$i] ?></td>
                                            <td data-title="IMC" <?php if (($form_weight[$i] != 0) && ($form_height[$i] != 0)) {
                                                                        if ((round(($form_weight[$i]) / ($form_height[$i] * $form_height[$i]), 2)) > 28) {
                                                                            echo "class='red-label'";
                                                                        } else {
                                                                            echo "class='green-label'";
                                                                        } ?>><?php
                                                                                if ($form_height[$i] != 0) {
                                                                                    echo round(($form_weight[$i]) / ($form_height[$i] * $form_height[$i]), 2);
                                                                                }
                                                                            }
                                                                                ?></td>
                                            <td data-title="Embarazos"><?php if ($num_ces > 2) {
                                                                            echo $num_pregnants . " embarazos <div class='yellow-label'>" . $num_ces . " cesáreas </div>";
                                                                        } else {
                                                                            echo $num_pregnants . " embarazos <br>" . $num_ces . " cesáreas";
                                                                        } ?></td>
                                            <td data-title="Complicaciones"><?php
                                                                            if (($form_coded_comments_pregnant_1 == "11111111111111111111") && ($form_coded_comments_pregnant_2 == "11111111111111111111") && ($form_coded_comments_pregnant_3 == "11111111111111111111") && ($form_coded_comments_pregnant_4 == "11111111111111111111") && ($form_coded_comments_pregnant_5 == "11111111111111111111") && ($form_coded_comments_pregnant_6 == "11111111111111111111")) {
                                                                                echo "No";
                                                                            } else {
                                                                                echo "Sí";
                                                                            }
                                                                            ?></td>
                                            <td data-title="ACO"><?php if ($form_diu[$i] == "sí") {
                                                                        echo "DIU";
                                                                    }
                                                                    if ($form_implant[$i] == "sí") {
                                                                        echo " Implante ";
                                                                    } ?></td>
                                            <td data-title="Esquema"><?php echo $form_scheme[$i]; ?></td>
                                            <td data-title="Lugar de nacimiento"><?php
                                                                                    $form_birth_place_eval = strtoupper($form_birth_place[1]);
                                                                                    $form_birth_place_eval = iconv('UTF-8', 'ASCII//TRANSLIT', $form_birth_place_eval);
                                                                                    if (
                                                                                        $form_birth_place_eval == "CIUDAD DE MEXICO" ||
                                                                                        $form_birth_place_eval == "CDMX" ||
                                                                                        $form_birth_place_eval == "ESTADO DE MEXICO" ||
                                                                                        $form_birth_place_eval == "EDO MEX" ||
                                                                                        $form_birth_place_eval == "EDO. MEX" ||
                                                                                        $form_birth_place_eval == "EDO. DE MEX" ||
                                                                                        $form_birth_place_eval == "EDO DE MEX" ||
                                                                                        $form_birth_place_eval == "EDOMEX"
                                                                                    ) {
                                                                                        echo "<div class='green-label'>" . $form_birth_place[$i] . "</div>";
                                                                                    } else {
                                                                                        echo "<div class='red-label'>" . $form_birth_place[$i] . "</div>";
                                                                                    } ?></td>
                                            <td data-title="Calendario" scope="row">
                                                <a href="candidateCalendarEdit.php?id=<?php echo $id[$i]; ?>">Pagos</a>
                                            </td>
                                            <td><?php echo $form_recluter[$i]; ?></td>
                                            <td>
                                                <a href="candidate.php?id=<?php echo $id[$i]; ?>">Editar</a>
                                            </td>
                                            <td>
                                                <form method="POST" class="form-table" action="deleteCandidate.php">
                                                    <input type="hidden" name="id" value="<?php echo $id[$i]; ?>">
                                                    <input type="hidden" name="form_name" value="<?php echo $form_name[$i]; ?>">
                                                    <input type="submit" onclick="return confirm('¿Deseas eliminar a la candidata?')" class="boton-rojo-block" value="Eliminar">
                                                </form>
                                            </td>
                                            <td>
                                                <form method="POST" class="form-table" action="changeCandidateStatus.php" onsubmit="return confirmSubmit('<?php echo $id[$i]; ?>')">
                                                    <input type="hidden" name="id" value="<?php echo $id[$i]; ?>">
                                                    <input type="hidden" name="form_name" value="<?php echo $form_name[$i]; ?>">
                                                    <input type="hidden" name=<?php echo "action_value_" . $id[$i]; ?> id="<?php echo "action_value_" . $id[$i]; ?>">
                                                    <div class="dropdown">
                                                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Mover a
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li><input type="submit" onclick="setActionValue('<?php echo 'Inicial_' . $id[$i]; ?>')" class="boton-rojo-block" value="Inicial"></li>
                                                            <li><input type="submit" onclick="setActionValue('<?php echo 'Descartadas_' . $id[$i]; ?>')" class="boton-rojo-block" value="Descartadas"></li>
                                                        </ul>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                <?php }
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="initial" role="tabpanel" aria-labelledby="initial-tab">
                <div class="container lab-pagination">
                    <div class="panel">
                        <div class="body">
                            <div class="input-group">
                                <label for="searchBox2">Búsqueda</label>
                                <input type="search" id="searchBox2" placeholder="Filtrar..." />
                            </div>
                        </div>
                    </div>
                    <div id="table-scroll" class="content table-responsive table-full-width">
                        <table class="table table-hover myTable2" id="myTable2">
                            <thead>
                                <tr class="thead">
                                    <th>Gestante</th>
                                    <th>CURP</th>
                                    <th>RFC</th>
                                    <th>Edad</th>
                                    <th>Fecha de nacimiento</th>
                                    <th>Estado civil</th>
                                    <th>Ocupación</th>
                                    <th>Domicilio</th>
                                    <th>Cuenta CLABE</th>
                                    <th>Banco</th>
                                    <th>Esquema</th>
                                    <th>Entrevista psicológica</th>
                                    <th>Psicometría</th>
                                    <th>Solicitud de seguro</th>
                                    <th>Estudio socioeconómico</th>
                                    <th colspan="2">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 1; $i <= $indexOK; $i++) {
                                    if ($form_label[$i] == 'initial') { ?>
                                        <?php
                                        $sql = "SELECT * FROM pregnants WHERE candidateId='" . $id[$i] . "'";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $form_type_pregnant_1 = $row['form_type_pregnant_1'];
                                            $form_height_pregnant_1 = $row['form_height_pregnant_1'];
                                            $form_weight_pregnant_1 = $row['form_weight_pregnant_1'];
                                            $form_term_pregnant_1 = $row['form_term_pregnant_1'];
                                            $form_week_pregnant_1 = $row['form_week_pregnant_1'];
                                            $form_year_pregnant_1 = $row['form_year_pregnant_1'];
                                            $form_comments_pregnant_1 = $row['form_comments_pregnant_1'];
                                            $form_type_pregnant_2 = $row['form_type_pregnant_2'];
                                            $form_height_pregnant_2 = $row['form_height_pregnant_2'];
                                            $form_weight_pregnant_2 = $row['form_weight_pregnant_2'];
                                            $form_term_pregnant_2 = $row['form_term_pregnant_2'];
                                            $form_week_pregnant_2 = $row['form_week_pregnant_2'];
                                            $form_year_pregnant_2 = $row['form_year_pregnant_2'];
                                            $form_comments_pregnant_2 = $row['form_comments_pregnant_2'];
                                            $form_type_pregnant_3 = $row['form_type_pregnant_3'];
                                            $form_height_pregnant_3 = $row['form_height_pregnant_3'];
                                            $form_weight_pregnant_3 = $row['form_weight_pregnant_3'];
                                            $form_term_pregnant_3 = $row['form_term_pregnant_3'];
                                            $form_week_pregnant_3 = $row['form_week_pregnant_3'];
                                            $form_year_pregnant_3 = $row['form_year_pregnant_3'];
                                            $form_comments_pregnant_3 = $row['form_comments_pregnant_3'];
                                            $form_type_pregnant_4 = $row['form_type_pregnant_4'];
                                            $form_height_pregnant_4 = $row['form_height_pregnant_4'];
                                            $form_weight_pregnant_4 = $row['form_weight_pregnant_4'];
                                            $form_term_pregnant_4 = $row['form_term_pregnant_4'];
                                            $form_week_pregnant_4 = $row['form_week_pregnant_4'];
                                            $form_year_pregnant_4 = $row['form_year_pregnant_4'];
                                            $form_comments_pregnant_4 = $row['form_comments_pregnant_4'];
                                            $form_type_pregnant_5 = $row['form_type_pregnant_5'];
                                            $form_height_pregnant_5 = $row['form_height_pregnant_5'];
                                            $form_weight_pregnant_5 = $row['form_weight_pregnant_5'];
                                            $form_term_pregnant_5 = $row['form_term_pregnant_5'];
                                            $form_week_pregnant_5 = $row['form_week_pregnant_5'];
                                            $form_year_pregnant_5 = $row['form_year_pregnant_5'];
                                            $form_comments_pregnant_5 = $row['form_comments_pregnant_5'];
                                            $form_type_pregnant_6 = $row['form_type_pregnant_6'];
                                            $form_height_pregnant_6 = $row['form_height_pregnant_6'];
                                            $form_weight_pregnant_6 = $row['form_weight_pregnant_6'];
                                            $form_term_pregnant_6 = $row['form_term_pregnant_6'];
                                            $form_week_pregnant_6 = $row['form_week_pregnant_6'];
                                            $form_year_pregnant_6 = $row['form_year_pregnant_6'];
                                            $form_comments_pregnant_6 = $row['form_comments_pregnant_6'];
                                            $form_type_abort_1 = $row['form_type_abort_1'];
                                            $form_year_abort_1 = $row['form_year_abort_1'];
                                            $form_week_abort_1 = $row['form_week_abort_1'];
                                            $form_method_abort_1 = $row['form_method_abort_1'];
                                            $form_comments_abort_1 = $row['form_comments_abort_1'];
                                            $form_type_abort_2 = $row['form_type_abort_2'];
                                            $form_year_abort_2 = $row['form_year_abort_2'];
                                            $form_week_abort_2 = $row['form_week_abort_2'];
                                            $form_method_abort_2 = $row['form_method_abort_2'];
                                            $form_comments_abort_2 = $row['form_comments_abort_2'];
                                            $form_type_abort_3 = $row['form_type_abort_3'];
                                            $form_year_abort_3 = $row['form_year_abort_3'];
                                            $form_week_abort_3 = $row['form_week_abort_3'];
                                            $form_method_abort_3 = $row['form_method_abort_3'];
                                            $form_comments_abort_3 = $row['form_comments_abort_3'];
                                            $form_coded_comments_pregnant_1 = $row['form_coded_comments_pregnant_1'];
                                            $form_coded_comments_pregnant_2 = $row['form_coded_comments_pregnant_2'];
                                            $form_coded_comments_pregnant_3 = $row['form_coded_comments_pregnant_3'];
                                            $form_coded_comments_pregnant_4 = $row['form_coded_comments_pregnant_4'];
                                            $form_coded_comments_pregnant_5 = $row['form_coded_comments_pregnant_5'];
                                            $form_coded_comments_pregnant_6 = $row['form_coded_comments_pregnant_6'];
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
                                            $num_ces = 0;
                                            if ($form_type_pregnant_1 == "cesarea") {
                                                $num_ces = $num_ces + 1;
                                            }
                                            if ($form_type_pregnant_2 == "cesarea") {
                                                $num_ces = $num_ces + 1;
                                            }
                                            if ($form_type_pregnant_3 == "cesarea") {
                                                $num_ces = $num_ces + 1;
                                            }
                                            if ($form_type_pregnant_4 == "cesarea") {
                                                $num_ces = $num_ces + 1;
                                            }
                                            if ($form_type_pregnant_5 == "cesarea") {
                                                $num_ces = $num_ces + 1;
                                            }
                                            if ($form_type_pregnant_6 == "cesarea") {
                                                $num_ces = $num_ces + 1;
                                            }
                                        }
                                        ?>
                                        <tr>
                                            <td data-title="Gestante" scope="row">
                                                <a href="profile.php?id=<?php echo $id[$i]; ?>"><?php echo $form_name[$i] ?></a>
                                            </td>
                                            <td data-title="CURP"><?php echo "X"; ?></td>
                                            <td data-title="RFC"><?php echo "X"; ?></td>
                                            <td data-title="Edad"><?php echo "X"; ?></td>
                                            <td data-title="Fecha de nacimiento"><?php echo "X"; ?></td>
                                            <td data-title="Estado civil"><?php echo "X"; ?></td>
                                            <td data-title="Ocupación"><?php echo "X"; ?></td>
                                            <td data-title="Domicilio"><?php echo "X"; ?></td>
                                            <td data-title="Cuenta CLABE"><?php echo "X"; ?></td>
                                            <td data-title="Banco"><?php echo "X"; ?></td>
                                            <td data-title="Esquema"><?php echo "X"; ?></td>
                                            <td data-title="Entrevista psicológica"><?php echo "X"; ?></td>
                                            <td data-title="Psicometría"><?php echo "X"; ?></td>
                                            <td data-title="Solicitud de seguro"><?php echo "X"; ?></td>
                                            <td data-title="Estudio socioeconómico"><?php echo "X"; ?></td>
                                            <td>
                                                <a href="candidate.php?id=<?php echo $id[$i]; ?>">Editar</a>
                                            </td>
                                            <td>
                                                <form method="POST" class="form-table" action="changeCandidateStatus.php" onsubmit="return confirmSubmit('<?php echo $id[$i]; ?>')">
                                                    <input type="hidden" name="id" value="<?php echo $id[$i]; ?>">
                                                    <input type="hidden" name="form_name" value="<?php echo $form_name[$i]; ?>">
                                                    <input type="hidden" name=<?php echo "action_value_" . $id[$i]; ?> id="<?php echo "action_value_" . $id[$i]; ?>">
                                                    <div class="dropdown">
                                                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Mover a
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li><input type="submit" onclick="setActionValue('<?php echo 'Gestante_' . $id[$i]; ?>')" class="boton-rojo-block" value="Gestante"></li>
                                                            <li><input type="submit" onclick="setActionValue('<?php echo 'Descartadas_' . $id[$i]; ?>')" class="boton-rojo-block" value="Descartadas"></li>
                                                        </ul>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                <?php }
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="discarded" role="tabpanel" aria-labelledby="discarded-tab">
                <div class="container lab-pagination">
                    <div class="panel">
                        <div class="body">
                            <div class="input-group">
                                <label for="searchBox3">Búsqueda</label>
                                <input type="search" id="searchBox3" placeholder="Filtrar..." />
                            </div>
                        </div>
                    </div>
                    <div id="table-scroll" class="content table-responsive table-full-width">
                        <table class="table table-hover myTable3" id="myTable3">
                            <thead>
                                <tr class="thead">
                                    <th>Gestante</th>
                                    <th>CURP</th>
                                    <th>RFC</th>
                                    <th>Edad</th>
                                    <th>Fecha de nacimiento</th>
                                    <th>Estado civil</th>
                                    <th>Ocupación</th>
                                    <th>Domicilio</th>
                                    <th>Cuenta CLABE</th>
                                    <th>Banco</th>
                                    <th>Esquema</th>
                                    <th>Entrevista psicológica</th>
                                    <th>Psicometría</th>
                                    <th>Solicitud de seguro</th>
                                    <th>Estudio socioeconómico</th>
                                    <th colspan="2">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 1; $i <= $indexOK; $i++) {
                                    if ($form_label[$i] == 'discarded') { ?>
                                        <?php
                                        $sql = "SELECT * FROM pregnants WHERE candidateId='" . $id[$i] . "'";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $form_type_pregnant_1 = $row['form_type_pregnant_1'];
                                            $form_height_pregnant_1 = $row['form_height_pregnant_1'];
                                            $form_weight_pregnant_1 = $row['form_weight_pregnant_1'];
                                            $form_term_pregnant_1 = $row['form_term_pregnant_1'];
                                            $form_week_pregnant_1 = $row['form_week_pregnant_1'];
                                            $form_year_pregnant_1 = $row['form_year_pregnant_1'];
                                            $form_comments_pregnant_1 = $row['form_comments_pregnant_1'];
                                            $form_type_pregnant_2 = $row['form_type_pregnant_2'];
                                            $form_height_pregnant_2 = $row['form_height_pregnant_2'];
                                            $form_weight_pregnant_2 = $row['form_weight_pregnant_2'];
                                            $form_term_pregnant_2 = $row['form_term_pregnant_2'];
                                            $form_week_pregnant_2 = $row['form_week_pregnant_2'];
                                            $form_year_pregnant_2 = $row['form_year_pregnant_2'];
                                            $form_comments_pregnant_2 = $row['form_comments_pregnant_2'];
                                            $form_type_pregnant_3 = $row['form_type_pregnant_3'];
                                            $form_height_pregnant_3 = $row['form_height_pregnant_3'];
                                            $form_weight_pregnant_3 = $row['form_weight_pregnant_3'];
                                            $form_term_pregnant_3 = $row['form_term_pregnant_3'];
                                            $form_week_pregnant_3 = $row['form_week_pregnant_3'];
                                            $form_year_pregnant_3 = $row['form_year_pregnant_3'];
                                            $form_comments_pregnant_3 = $row['form_comments_pregnant_3'];
                                            $form_type_pregnant_4 = $row['form_type_pregnant_4'];
                                            $form_height_pregnant_4 = $row['form_height_pregnant_4'];
                                            $form_weight_pregnant_4 = $row['form_weight_pregnant_4'];
                                            $form_term_pregnant_4 = $row['form_term_pregnant_4'];
                                            $form_week_pregnant_4 = $row['form_week_pregnant_4'];
                                            $form_year_pregnant_4 = $row['form_year_pregnant_4'];
                                            $form_comments_pregnant_4 = $row['form_comments_pregnant_4'];
                                            $form_type_pregnant_5 = $row['form_type_pregnant_5'];
                                            $form_height_pregnant_5 = $row['form_height_pregnant_5'];
                                            $form_weight_pregnant_5 = $row['form_weight_pregnant_5'];
                                            $form_term_pregnant_5 = $row['form_term_pregnant_5'];
                                            $form_week_pregnant_5 = $row['form_week_pregnant_5'];
                                            $form_year_pregnant_5 = $row['form_year_pregnant_5'];
                                            $form_comments_pregnant_5 = $row['form_comments_pregnant_5'];
                                            $form_type_pregnant_6 = $row['form_type_pregnant_6'];
                                            $form_height_pregnant_6 = $row['form_height_pregnant_6'];
                                            $form_weight_pregnant_6 = $row['form_weight_pregnant_6'];
                                            $form_term_pregnant_6 = $row['form_term_pregnant_6'];
                                            $form_week_pregnant_6 = $row['form_week_pregnant_6'];
                                            $form_year_pregnant_6 = $row['form_year_pregnant_6'];
                                            $form_comments_pregnant_6 = $row['form_comments_pregnant_6'];
                                            $form_type_abort_1 = $row['form_type_abort_1'];
                                            $form_year_abort_1 = $row['form_year_abort_1'];
                                            $form_week_abort_1 = $row['form_week_abort_1'];
                                            $form_method_abort_1 = $row['form_method_abort_1'];
                                            $form_comments_abort_1 = $row['form_comments_abort_1'];
                                            $form_type_abort_2 = $row['form_type_abort_2'];
                                            $form_year_abort_2 = $row['form_year_abort_2'];
                                            $form_week_abort_2 = $row['form_week_abort_2'];
                                            $form_method_abort_2 = $row['form_method_abort_2'];
                                            $form_comments_abort_2 = $row['form_comments_abort_2'];
                                            $form_type_abort_3 = $row['form_type_abort_3'];
                                            $form_year_abort_3 = $row['form_year_abort_3'];
                                            $form_week_abort_3 = $row['form_week_abort_3'];
                                            $form_method_abort_3 = $row['form_method_abort_3'];
                                            $form_comments_abort_3 = $row['form_comments_abort_3'];
                                            $form_coded_comments_pregnant_1 = $row['form_coded_comments_pregnant_1'];
                                            $form_coded_comments_pregnant_2 = $row['form_coded_comments_pregnant_2'];
                                            $form_coded_comments_pregnant_3 = $row['form_coded_comments_pregnant_3'];
                                            $form_coded_comments_pregnant_4 = $row['form_coded_comments_pregnant_4'];
                                            $form_coded_comments_pregnant_5 = $row['form_coded_comments_pregnant_5'];
                                            $form_coded_comments_pregnant_6 = $row['form_coded_comments_pregnant_6'];
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
                                            $num_ces = 0;
                                            if ($form_type_pregnant_1 == "cesarea") {
                                                $num_ces = $num_ces + 1;
                                            }
                                            if ($form_type_pregnant_2 == "cesarea") {
                                                $num_ces = $num_ces + 1;
                                            }
                                            if ($form_type_pregnant_3 == "cesarea") {
                                                $num_ces = $num_ces + 1;
                                            }
                                            if ($form_type_pregnant_4 == "cesarea") {
                                                $num_ces = $num_ces + 1;
                                            }
                                            if ($form_type_pregnant_5 == "cesarea") {
                                                $num_ces = $num_ces + 1;
                                            }
                                            if ($form_type_pregnant_6 == "cesarea") {
                                                $num_ces = $num_ces + 1;
                                            }
                                        }
                                        ?>
                                        <tr>
                                            <td data-title="Gestante" scope="row">
                                                <a href="profile.php?id=<?php echo $id[$i]; ?>"><?php echo $form_name[$i] ?></a>
                                            </td>
                                            <td data-title="CURP"><?php echo "X"; ?></td>
                                            <td data-title="RFC"><?php echo "X"; ?></td>
                                            <td data-title="Edad"><?php echo "X"; ?></td>
                                            <td data-title="Fecha de nacimiento"><?php echo "X"; ?></td>
                                            <td data-title="Estado civil"><?php echo "X"; ?></td>
                                            <td data-title="Ocupación"><?php echo "X"; ?></td>
                                            <td data-title="Domicilio"><?php echo "X"; ?></td>
                                            <td data-title="Cuenta CLABE"><?php echo "X"; ?></td>
                                            <td data-title="Banco"><?php echo "X"; ?></td>
                                            <td data-title="Esquema"><?php echo "X"; ?></td>
                                            <td data-title="Entrevista psicológica"><?php echo "X"; ?></td>
                                            <td data-title="Psicometría"><?php echo "X"; ?></td>
                                            <td data-title="Solicitud de seguro"><?php echo "X"; ?></td>
                                            <td data-title="Estudio socioeconómico"><?php echo "X"; ?></td>
                                            <td>
                                                <a href="candidate.php?id=<?php echo $id[$i]; ?>">Editar</a>
                                            </td>
                                            <td>
                                                <form method="POST" class="form-table" action="changeCandidateStatus.php" onsubmit="return confirmSubmit('<?php echo $id[$i]; ?>')">
                                                    <input type="hidden" name="id" value="<?php echo $id[$i]; ?>">
                                                    <input type="hidden" name="form_name" value="<?php echo $form_name[$i]; ?>">
                                                    <input type="hidden" name=<?php echo "action_value_" . $id[$i]; ?> id="<?php echo "action_value_" . $id[$i]; ?>">
                                                    <div class="dropdown">
                                                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Mover a
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li><input type="submit" onclick="setActionValue('<?php echo 'Registro_' . $id[$i]; ?>')" class="boton-rojo-block" value="Registro"></li>
                                                            <li><input type="submit" onclick="setActionValue('<?php echo 'Inicial_' . $id[$i]; ?>')" class="boton-rojo-block" value="Inicial"></li>
                                                        </ul>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                <?php }
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script language="JavaScript" type="text/javascript">
        function checkDelete() {
            return confirm('Are you sure?');
        }
    </script>
    <!-- Select value from form 'Mover a' -->
    <script>
        function setActionValue(value) {
            let strVal = value.split('_')[0];
            let strNum = value.split('_')[1];
            document.getElementById(`action_value_${strNum}`).value = strVal;
        }
        function confirmSubmit(value) {
            let val = document.getElementById(`action_value_${value}`).value;
            return confirm(`¿Deseas mover a la candidata a ${val}?`);
        }
    </script>
    <!-- Custom JS -->
    <script src="build/js/bundle2.min.js"></script>
    <!-- Pagination -->
    <script>
        let options = {
            numberPerPage: 30, //Cantidad de datos por pagina
            goBar: true, //Barra donde puedes digitar el numero de la pagina al que quiere ir
            pageCounter: true, //Contador de paginas, en cual estas, de cuantas paginas
        };
        let filterOptions = {
            el: "#searchBox", //Caja de texto para filtrar, puede ser una clase o un ID
        };
        let options2 = {
            numberPerPage: 30, //Cantidad de datos por pagina
            goBar: true, //Barra donde puedes digitar el numero de la pagina al que quiere ir
            pageCounter: true, //Contador de paginas, en cual estas, de cuantas paginas
        };
        let filterOptions2 = {
            el: "#searchBox2", //Caja de texto para filtrar, puede ser una clase o un ID
        };
        let options3 = {
            numberPerPage: 30, //Cantidad de datos por pagina
            goBar: true, //Barra donde puedes digitar el numero de la pagina al que quiere ir
            pageCounter: true, //Contador de paginas, en cual estas, de cuantas paginas
        };
        let filterOptions3 = {
            el: "#searchBox3", //Caja de texto para filtrar, puede ser una clase o un ID
        };

        function init1() {
            paginate.init(".myTable", options, filterOptions);
            console.log("1");
        }

        function init2() {
            paginate.init(".myTable2", options2, filterOptions2);
            console.log("2");
        }

        function init3() {
            paginate.init(".myTable3", options3, filterOptions3);
            console.log("3");
        }
    </script>

    <script>
        function sortTable(n) {
            var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
            table = document.getElementById("myTable");
            switching = true;
            //Set the sorting direction to ascending:
            dir = "asc";
            /*Make a loop that will continue until
            no switching has been done:*/
            while (switching) {
                //start by saying: no switching is done:
                switching = false;
                rows = table.rows;
                /*Loop through all table rows (except the
                first, which contains table headers):*/
                for (i = 1; i < (rows.length - 1); i++) {
                    //start by saying there should be no switching:
                    shouldSwitch = false;
                    /*Get the two elements you want to compare,
                    one from current row and one from the next:*/
                    x = rows[i].getElementsByTagName("TD")[n];
                    y = rows[i + 1].getElementsByTagName("TD")[n];
                    /*check if the two rows should switch place,
                    based on the direction, asc or desc:*/
                    if (dir == "asc") {
                        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                            //if so, mark as a switch and break the loop:
                            shouldSwitch = true;
                            break;
                        }
                    } else if (dir == "desc") {
                        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                            //if so, mark as a switch and break the loop:
                            shouldSwitch = true;
                            break;
                        }
                    }
                }
                if (shouldSwitch) {
                    /*If a switch has been marked, make the switch
                    and mark that a switch has been done:*/
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                    //Each time a switch is done, increase this count by 1:
                    switchcount++;
                } else {
                    /*If no switching has been done AND the direction is "asc",
                    set the direction to "desc" and run the while loop again.*/
                    if (switchcount == 0 && dir == "asc") {
                        dir = "desc";
                        switching = true;
                    }
                }
            }
        }

        function ActivateBtnFenotipe(i) {
            btn = document.getElementById('fenotipe-' + i);
            btn2 = document.querySelector(".btn-green" + "#fenotipe-" + i);
            btnPlus = document.getElementById('plus-' + i);
            btnElite = document.getElementById('elite-' + i);
            btnVIP = document.getElementById('vip-' + i);
            var date = new Date();
            date.setTime(date.getTime() + (1 * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toGMTString();
            document.cookie = "id" + "=" + i + expires + "; path=/";
            document.cookie = "type" + "=" + "Fenotipe" + expires + "; path=/";
            if (btn2 === null) {
                btn.classList.remove("btn-gray");
                btn.classList.add("btn-green");
                btnPlus.classList.remove("btn-green");
                btnPlus.classList.add("btn-gray");
                btnElite.classList.remove("btn-green");
                btnElite.classList.add("btn-gray");
                btnVIP.classList.remove("btn-green");
                btnVIP.classList.add("btn-gray");
                fetch("activateBtnFenotipe.php")
                    .then(res => res.text())
                    .then(txt => console.log(txt))
                    .catch(err => console.error(err));
                return false;
            } else {
                btn.classList.add("btn-gray");
                btn.classList.remove("btn-green");
                fetch("deactivateBtn.php")
                    .then(res => res.text())
                    .then(txt => console.log(txt))
                    .catch(err => console.error(err));
                return false;
            }
        }

        function ActivateBtnPlus(i) {
            btn = document.getElementById('plus-' + i);
            btn2 = document.querySelector(".btn-green" + "#plus-" + i);
            btnFenotipe = document.querySelector(".btn-green" + "#fenotipe-" + i);
            var date = new Date();
            date.setTime(date.getTime() + (1 * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toGMTString();
            document.cookie = "id" + "=" + i + expires + "; path=/";
            document.cookie = "type" + "=" + "Plus" + expires + "; path=/";
            if ((btnFenotipe === null)) {
                if (btn2 === null) {
                    btn.classList.remove("btn-gray");
                    btn.classList.add("btn-green");
                    fetch("activateBtn.php")
                        .then(res => res.text())
                        .then(txt => console.log(txt))
                        .catch(err => console.error(err));
                    return false;
                } else {
                    btn.classList.add("btn-gray");
                    btn.classList.remove("btn-green");
                    fetch("deactivateBtn.php")
                        .then(res => res.text())
                        .then(txt => console.log(txt))
                        .catch(err => console.error(err));
                    return false;
                }
            }
        }

        function ActivateBtnElite(i) {
            btn = document.getElementById('elite-' + i);
            btn2 = document.querySelector(".btn-green" + "#elite-" + i);
            btnFenotipe = document.querySelector(".btn-green" + "#fenotipe-" + i);
            var date = new Date();
            date.setTime(date.getTime() + (1 * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toGMTString();
            document.cookie = "id" + "=" + i + expires + "; path=/";
            document.cookie = "type" + "=" + "Elite" + expires + "; path=/";
            if ((btnFenotipe === null)) {
                if (btn2 === null) {
                    btn.classList.remove("btn-gray");
                    btn.classList.add("btn-green");
                    fetch("activateBtn.php")
                        .then(res => res.text())
                        .then(txt => console.log(txt))
                        .catch(err => console.error(err));
                    return false;
                } else {
                    btn.classList.add("btn-gray");
                    btn.classList.remove("btn-green");
                    fetch("deactivateBtn.php")
                        .then(res => res.text())
                        .then(txt => console.log(txt))
                        .catch(err => console.error(err));
                    return false;
                }
            }
        }

        function ActivateBtnVIP(i) {
            btn = document.getElementById('vip-' + i);
            btn2 = document.querySelector(".btn-green" + "#vip-" + i);
            btnFenotipe = document.querySelector(".btn-green" + "#fenotipe-" + i);
            var date = new Date();
            date.setTime(date.getTime() + (1 * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toGMTString();
            document.cookie = "id" + "=" + i + expires + "; path=/";
            document.cookie = "type" + "=" + "VIP" + expires + "; path=/";
            if ((btnFenotipe === null)) {
                if (btn2 === null) {
                    btn.classList.remove("btn-gray");
                    btn.classList.add("btn-green");
                    fetch("activateBtn.php")
                        .then(res => res.text())
                        .then(txt => console.log(txt))
                        .catch(err => console.error(err));
                    return false;
                } else {
                    btn.classList.add("btn-gray");
                    btn.classList.remove("btn-green");
                    fetch("deactivateBtn.php")
                        .then(res => res.text())
                        .then(txt => console.log(txt))
                        .catch(err => console.error(err));
                    return false;
                }
            }
        }
    </script>
</main>

<?php
include 'includes/templates/footer.php';
?>
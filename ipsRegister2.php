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

if (isset($_GET['id'])) {
    $ip_id = $_GET['id'];
}

$sql = "SELECT * FROM ipregister WHERE id=${ip_id}";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    for ($i = 1; $i <= 100; $i++) {
        ${"stage_1_$i"} = $row['stage_1_' . $i];
    }
}
$sql = "SELECT * FROM ipregister WHERE id=${ip_id}";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    for ($i = 1; $i <= 2; $i++) {
        ${"stage_count_$i"} = $row['stage_count_' . $i];
    }
}

$counter_enable = 1;

$max_stage_1_1 = 4;
$max_stage_1_2 = 3;

$stage = 1;
$stage_1 = new stdClass();

// Define arrays
$titles = ["Agregar", "Crio embrio", "General Info", "Estado", "Underway", "Info", "Uploading", "Habilitar", "Uploading", "Habilitar", "Uploading", "Habilitar", "Habilitar Vista"];
$description_1 = [];
for ($i = 0; $i < $max_stage_1_1; $i++) {
    $description_1[$i] = "Creación embrionaria - Reporte <br> Rapport de création embryonnaire";
}
for ($i = 0; $i < $max_stage_1_1; $i++) {
    if ($i == 0) {
        if (${"stage_1_$counter_enable"} == '-' || ${"stage_1_$counter_enable"} == "true") {
            $add_1[0] =
                "<button class='addBtn' onclick='toggle(" . $counter_enable . ",true, " . $stage . ",1, " . $stage_count_1 . "," . $max_stage_1_1 . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-plus false'></i>
        </button>";
        } else {
            $add_1[0] =
                "<button class='addBtn' onclick='toggle(" . $counter_enable . ",false, " . $stage . ",1, " . $stage_count_1 . "," . $max_stage_1_1 . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-minus false'></i>
        </button>";
        }
        $counter_enable++;
    } else {
        "<button> </button>";
    }
}
$info_general_1 = [];
for ($i = 0; $i < $max_stage_1_1; $i++) {
    $info_general_1[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
$state_1 = [];
for ($i = 0; $i < $max_stage_1_1; $i++) {
    $state_1[$i] = "<select id='" . $counter_enable . "' onchange='saveContent2(this," . $stage . "," . $counter_enable . ")'>
        <option " . (${"stage_1_$counter_enable"} === "processing" ? "selected" : "") . " value='processing'>
            Processing
        </option>
        <option " . (${"stage_1_$counter_enable"} === "concluding" ? "selected" : "") . " value='concluding'>
            Concluding
        </option>
    </select>";
    $counter_enable++;
}
$underway_1 = [];
for ($i = 0; $i < $max_stage_1_1; $i++) {
    $underway_1[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
$info_1_1 = [];
for ($i = 0; $i < $max_stage_1_1; $i++) {
    $info_1_1[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
$info_2_1 = [];
for ($i = 0; $i < $max_stage_1_1; $i++) {
    $info_2_1[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
$uploading_1_1 = [];
for ($i = 0; $i < $max_stage_1_1; $i++) {
    $uploading_1_1[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
for ($i = 0; $i < $max_stage_1_1; $i++) {
    if (${"stage_1_$counter_enable"} == '-' || ${"stage_1_$counter_enable"} == "true") {
        $enable_1_1[$i] =
            "<button onclick='toggle(" . $counter_enable . ",true, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-toggle-on false'></i>
        </button>";
    } else {
        $enable_1_1[$i] =
            "<button onclick='toggle(" . $counter_enable . ",false, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-toggle-off false'></i>
        </button>";
    }
    $counter_enable++;
}
$uploading_2_1 = [];
for ($i = 0; $i < $max_stage_1_1; $i++) {
    $uploading_2_1[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
for ($i = 0; $i < count($uploading_1_1); $i++) {
    if (${"stage_1_$counter_enable"} == '-' || ${"stage_1_$counter_enable"} == "true") {
        $enable_2_1[$i] =
            "<button onclick='toggle(" . $counter_enable . ",true, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-toggle-on false'></i>
        </button>";
    } else {
        $enable_2_1[$i] =
            "<button onclick='toggle(" . $counter_enable . ",false, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-toggle-off false'></i>
        </button>";
    }
    $counter_enable++;
}
$uploading_3_1 = [];
for ($i = 0; $i < $max_stage_1_1; $i++) {
    $uploading_3_1[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
for ($i = 0; $i < count($uploading_1_1); $i++) {
    if (${"stage_1_$counter_enable"} == '-' || ${"stage_1_$counter_enable"} == "true") {
        $enable_3_1[$i] =
            "<button onclick='toggle(" . $counter_enable . ",true, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-toggle-on false'></i>
        </button>";
    } else {
        $enable_3_1[$i] =
            "<button onclick='toggle(" . $counter_enable . ",false, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-toggle-off false'></i>
        </button>";
    }
    $counter_enable++;
}
for ($i = 0; $i < count($uploading_1_1); $i++) {
    if (${"stage_1_$counter_enable"} == '-' || ${"stage_1_$counter_enable"} == "true") {
        $enableView_1[$i] =
            "<button onclick='toggle(" . $counter_enable . ",true, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-eye false'></i>
        </button>";
    } else {
        $enableView_1[$i] =
            "<button onclick='toggle(" . $counter_enable . ",false, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-eye-slash false'></i>
        </button>";
    }
    $counter_enable++;
}

// Second element
$description_2 = [];
for ($i = 0; $i < $max_stage_1_2; $i++) {
    $description_2[$i] = "Reporte Pgta <br> Rapport PGT-A";
}
for ($i = 0; $i < $max_stage_1_2; $i++) {
    if (${"stage_1_$counter_enable"} == '-' || ${"stage_1_$counter_enable"} == "true") {
        $add_2[0] =
            "<button class='addBtn' onclick='toggle(" . $counter_enable . ",true, " . $stage . ",2, " . $stage_count_2 . "," . $max_stage_1_2 . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-plus false'></i>
        </button>";
    } else {
        $add_2[0] =
            "<button class='addBtn' onclick='toggle(" . $counter_enable . ",false, " . $stage . ",2, " . $stage_count_2 . "," . $max_stage_1_2 . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-minus false'></i>
        </button>";
    }
    $counter_enable++;
}
$info_general_2 = [];
for ($i = 0; $i < $max_stage_1_2; $i++) {
    $info_general_2[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
$state_2 = [];
for ($i = 0; $i < $max_stage_1_2; $i++) {
    $state_2[$i] = "<select id='" . $counter_enable . "' onchange='saveContent2(this," . $stage . "," . $counter_enable . ")'>
        <option " . (${"stage_1_$counter_enable"} === "waiting" ? "selected" : "") . " value='waiting'>
            Esperando
        </option>
        <option " . (${"stage_1_$counter_enable"} === "sent" ? "selected" : "") . " value='sent'>
            Enviado
        </option>
        <option " . (${"stage_1_$counter_enable"} === "processing" ? "selected" : "") . " value='processing'>
            Processing
        </option>
        <option " . (${"stage_1_$counter_enable"} === "concluding" ? "selected" : "") . " value='concluding'>
            Concluding
        </option>
    </select>";
    $counter_enable++;
}
$underway_2 = [];
for ($i = 0; $i < $max_stage_1_2; $i++) {
    $underway_2[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
$info_1_2 = [];
for ($i = 0; $i < $max_stage_1_2; $i++) {
    $info_1_2[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
$info_2_2 = [];
for ($i = 0; $i < $max_stage_1_2; $i++) {
    $info_2_2[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
$uploading_1_2 = [];
for ($i = 0; $i < $max_stage_1_2; $i++) {
    $uploading_1_2[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
for ($i = 0; $i < $max_stage_1_2; $i++) {
    if (${"stage_1_$counter_enable"} == '-' || ${"stage_1_$counter_enable"} == "true") {
        $enable_1_2[$i] =
            "<button onclick='toggle(" . $counter_enable . ",true, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-toggle-on false'></i>
        </button>";
    } else {
        $enable_1_2[$i] =
            "<button onclick='toggle(" . $counter_enable . ",false, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-toggle-off false'></i>
        </button>";
    }
    $counter_enable++;
}
$uploading_2_2 = [];
for ($i = 0; $i < $max_stage_1_2; $i++) {
    $uploading_2_2[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
for ($i = 0; $i < $max_stage_1_2; $i++) {
    if (${"stage_1_$counter_enable"} == '-' || ${"stage_1_$counter_enable"} == "true") {
        $enable_2_2[$i] =
            "<button onclick='toggle(" . $counter_enable . ",true, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-toggle-on false'></i>
        </button>";
    } else {
        $enable_2_2[$i] =
            "<button onclick='toggle(" . $counter_enable . ",false, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-toggle-off false'></i>
        </button>";
    }
    $counter_enable++;
}
$uploading_3_2 = [];
for ($i = 0; $i < $max_stage_1_2; $i++) {
    $uploading_3_2[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
$counter_enable += 3;
for ($i = 0; $i < $max_stage_1_2; $i++) {
    if (${"stage_1_$counter_enable"} == '-' || ${"stage_1_$counter_enable"} == "true") {
        $enable_3_2[$i] =
            "<button onclick='toggle(" . $counter_enable . ",true, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-toggle-on false'></i>
        </button>";
    } else {
        $enable_3_2[$i] =
            "<button onclick='toggle(" . $counter_enable . ",false, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-toggle-off false'></i>
        </button>";
    }
    $counter_enable++;
}
for ($i = 0; $i < $max_stage_1_2; $i++) {
    if (${"stage_1_$counter_enable"} == '-' || ${"stage_1_$counter_enable"} == "true") {
        $enableView_2[$i] =
            "<button onclick='toggle(" . $counter_enable . ",true, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-eye false'></i>
        </button>";
    } else {
        $enableView_2[$i] =
            "<button onclick='toggle(" . $counter_enable . ",false, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-eye-slash false'></i>
        </button>";
    }
    $counter_enable++;
}

// Assign each array to a property
$stage_1->titles = $titles;
$stage_1->add_1 = $add_1;
$stage_1->description_1 = $description_1;
$stage_1->info_general_1 = $info_general_1;
$stage_1->state_1 = $state_1;
$stage_1->underway_1 = $underway_1;
$stage_1->info_1_1 = $info_1_1;
$stage_1->info_2_1 = $info_2_1;
$stage_1->uploading_1_1 = $uploading_1_1;
$stage_1->enable_1_1 = $enable_1_1;
$stage_1->uploading_2_1 = $uploading_2_1;
$stage_1->enable_2_1 = $enable_2_1;
$stage_1->uploading_3_1 = $uploading_3_1;
$stage_1->enable_3_1 = $enable_3_1;
$stage_1->enableView_1 = $enableView_1;
$stage_1->add_2 = $add_2;
$stage_1->description_2 = $description_2;
$stage_1->info_general_2 = $info_general_2;
$stage_1->state_2 = $state_2;
$stage_1->underway_2 = $underway_2;
$stage_1->info_1_2 = $info_1_2;
$stage_1->info_2_2 = $info_2_2;
$stage_1->uploading_1_2 = $uploading_1_2;
$stage_1->enable_1_2 = $enable_1_2;
$stage_1->uploading_2_2 = $uploading_2_2;
$stage_1->enable_2_2 = $enable_2_2;
$stage_1->uploading_3_2 = $uploading_3_2;
$stage_1->enable_3_2 = $enable_3_2;
$stage_1->enableView_2 = $enableView_2;

?>

<main class="register">
    <div class="register-info">
        <h3>Registro de IPs</h3>
    </div>
    <div class="tab-content mt-3" id="myTabContent">
        <div class="tab-pane fade show active" id="register" role="tabpanel" aria-labelledby="register-tab">
            <div class="container lab-pagination">
                <div id="table-scroll" class="content table-responsive table-full-width">
                    <table class="table table-hover myTable tableIps" id="myTable">
                        <thead class="table-light" data-bs-toggle="collapse" data-bs-target="#section1" aria-expanded="true" style="cursor: pointer;">
                            <tr class="thead">
                                <th colspan="14">Fase 1 - Crio Embrio</th>
                            </tr>
                        </thead>
                        <tbody id="section1" class="collapse show">
                            <tr class="thead">
                                <?php
                                foreach ($stage_1->titles as $title) {
                                    if ($title == "Info") {
                                        echo "<th colspan='2'>" . $title . "</th>";
                                    } else {
                                        echo "<th>" . $title . "</th>";
                                    }
                                }
                                ?>
                            </tr>
                            <?php
                            for ($x = 0; $x < $stage_count_1; $x++) {
                                echo "<tr>" .
                                    ($x == 0 ? "<td class='add'>" . $stage_1->add_1[$x] . "</td>" : "<td class='add'> </td>") .
                                    "<td class='description'>" . $stage_1->description_1[$x] . "</td>" .
                                    $stage_1->info_general_1[$x] .
                                    "<td>" . $stage_1->state_1[$x] . "</td>" .
                                    $stage_1->underway_1[$x] .
                                    $stage_1->info_1_1[$x] .
                                    $stage_1->info_2_1[$x] .
                                    $stage_1->uploading_1_1[$x] .
                                    "<td class='enable_1'>" . $stage_1->enable_1_1[$x] . "</td>" .
                                    $stage_1->uploading_2_1[$x] .
                                    "<td class='enable_2'>" . $stage_1->enable_2_1[$x] . "</td>" .
                                    $stage_1->uploading_3_1[$x] .
                                    "<td class='enable_3'>" . $stage_1->enable_3_1[$x] . "</td>" .
                                    "<td class='enableView'>" . $stage_1->enableView_1[$x] . "</td>" .
                                    "</tr>";
                            }
                            for ($x = 0; $x < $stage_count_2; $x++) {
                                echo "<tr>" .
                                    ($x == 0 ? "<td class='add'>" . $stage_1->add_2[$x] . "</td>" : "<td class='add'> </td>") .
                                    "<td class='description'>" . $stage_1->description_2[$x] . "</td>" .
                                    $stage_1->info_general_2[$x] .
                                    "<td>" . $stage_1->state_2[$x] . "</td>" .
                                    $stage_1->underway_2[$x] .
                                    $stage_1->info_1_2[$x] .
                                    $stage_1->info_2_2[$x] .
                                    $stage_1->uploading_1_2[$x] .
                                    "<td class='enable_1'>" . $stage_1->enable_1_2[$x] . "</td>" .
                                    $stage_1->uploading_2_2[$x] .
                                    "<td class='enable_2'>" . $stage_1->enable_2_2[$x] . "</td>" .
                                    $stage_1->uploading_3_2[$x] .
                                    "<td class='enable_3'>" . $stage_1->enable_3_2[$x] . "</td>" .
                                    "<td class='enableView'>" . $stage_1->enableView_2[$x] . "</td>" .
                                    "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <!-- Favicon -->
        <script src="https://kit.fontawesome.com/b8332e4c7c.js" crossorigin="anonymous"></script>
        <!-- Animation -->
        <script>
            function toggle(id, state, stage, row = 0, stage_count = 0, max_value = 0) {

                const icon = document.getElementById('toggleIcon_off_' + id);
                icon.classList.add('icon-animate');

                setTimeout(() => {
                    if (icon.className.split(" ")[1] == "fa-eye" || icon.className.split(" ")[1] == "fa-eye-slash") {
                        if (state) {
                            icon.classList.toggle('fa-eye');
                            icon.classList.toggle('fa-eye-slash');
                        } else {
                            icon.classList.toggle('fa-eye-slash');
                            icon.classList.toggle('fa-eye');
                        }
                    } else if (icon.className.split(" ")[1] == "fa-toggle-on" || icon.className.split(" ")[1] == "fa-toggle-off") {
                        if (state) {
                            icon.classList.toggle('fa-toggle-on');
                            icon.classList.toggle('fa-toggle-off');
                        } else {
                            icon.classList.toggle('fa-toggle-off');
                            icon.classList.toggle('fa-toggle-on');
                        }
                    }
                }, 150);
                let newValue = '-';

                // // Remove animation class after it's done
                setTimeout(() => {
                    icon.classList.remove('icon-animate');
                }, 300);
                if (row == 0) {
                    (state == true) ? newValue = 'false': newValue = 'true';
                } else {
                    if (stage_count == max_value) {
                        newValue = 'false';
                    } else if (stage_count == 1) {
                        newValue = 'true';
                    } else {
                        newValue = String(state);
                    }
                }
                fetchContent(id, newValue, stage, row, max_value);
                location.reload();
            };
            function saveContent(tdElement, stage, id) {
                const newValue = tdElement.innerText;
                const row = "";
                const max_value = "";
                fetchContent(id, newValue, stage, row, max_value);
            }

            function saveContent2(tdElement, stage, id) {
                const newValue = document.getElementById(id).value;
                const row = "";
                const max_value = "";
                fetchContent(id, newValue, stage, row, max_value);
            }

            function fetchContent(id, newValue, stage, row, max_value) {
                fetch('ipsRegisterPOST.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            id: id,
                            content: newValue,
                            stage: stage,
                            row: row,
                            max_value: max_value
                        })
                    })
                    .then(res => res.text()) // expect plain text for echo
                    .then(data => {
                        console.log('Server responded with:', data);
                    })
                    .catch(error => console.error('Error:', error));
            }
        </script>

        <!-- Custom JS -->
        <script src="build/js/bundle2.min.js"></script>
</main>

<?php
include 'includes/templates/footer.php';
?>
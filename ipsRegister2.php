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

$table = "ipregister_" . $stage;
$sql = "SELECT * FROM ipregister WHERE id=${ip_id}";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    for ($i = 1; $i <= 480; $i++) {
        ${"stage_{$component}_{$i}"} = $row['stage_' . $component . '_' . $i];
        global ${"stage_${component}_{$i}"};
    }
}
$sql = "SELECT * FROM ipregister WHERE id=${ip_id}";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    for ($i = 1; $i <= 5; $i++) {
        ${"stage_count_$i"} = $row['stage_count_' . $i];
        global ${"stage_count_$i"};
    }
}

$counter_enable = 1;

// ----------------- New Stage ----------------- //

$stage = 1;
${"stage_$stage"} = new stdClass();
$titles = ["Agregar", "Crio embrio", "General Info", "Estado", "Underway", "Info", "Uploading", "Habilitar", "Uploading", "Habilitar", "Uploading", "Habilitar", "Habilitar Vista"];
${"stage_$stage"}->titles = $titles;

// ---------------- New Component -------------- // 
$component = 1;
${"max_stage_1_$component"} = 3;
$description = "Creación embrionaria - Reporte <br> Rapport de création embryonnaire";
$select_options = [
    "processing" => "Processing",
    "concluding" => "Concluding"
];
generateRow($component, $stage, ${"stage_count_$component"}, $description, $select_options);

// ---------------- New Component -------------- // 

$component = 2;
${"max_stage_1_$component"} = 4;
$description = "Reporte Pgta <br> Rapport PGT-A";
$select_options = [
    "waiting" => "Esperando",
    "sent" => "Enviado",
    "processing" => "Processing",
    "concluding" => "Concluding"
];
generateRow($component, $stage, ${"stage_count_$component"}, $description, $select_options);

function generateRow(int $component, int $stage, int $stage_count, string $description, array $select_options)
{
    global $counter_enable;
    global ${"max_stage_{$stage}_{{$component}}"};
    global ${"stage_{$stage}_{$counter_enable}"};
    ${"info_general_$component"} = [];
    ${"info_1_$component"} = [];
    ${"info_2_$component"} = [];
    ${"uploading_1_$component"} = [];
    ${"uploading_2_$component"} = [];
    ${"uploading_3_$component"} = [];
    ${"underway_$component"} = [];
    ${"description_$component"} = [];
    ${"state_$component"} = [];
    global ${"info_general_$component"};
    global ${"info_1_$component"};
    global ${"info_2_$component"};
    global ${"uploading_1_$component"};
    global ${"uploading_2_$component"};
    global ${"uploading_3_$component"};
    global ${"underway_$component"};
    global ${"add_$component"};
    global ${"enable_1_$component"};
    global ${"enable_2_$component"};
    global ${"enable_3_$component"};
    global ${"enableView_$component"};
    global ${"description_$component"};
    global ${"stage_$stage"};
    global ${"state_$component"};
    global ${"max_stage_{$stage}_{$component}"};
    for ($i = 0; $i < ${"max_stage_{$stage}_{$component}"}; $i++) {
        ${"description_$component"}[$i] = $description;
    }
    for ($i = 0; $i < ${"max_stage_{$stage}_{$component}"}; $i++) {
        ${"state_$component"}[$i] = "<select id='" . $counter_enable . "' onchange='saveContent2(this," . $stage . "," . $counter_enable . ")'>";
        $state_variable = "";
        foreach ($select_options as $key => $value) {
            $state_variable .= "<option " . (${"stage_{$stage}_{$counter_enable}"} === $key ? "selected" : "") . " value=$key> " .
                $value .
                "</option>";
        }
        ${"state_$component"}[$i] .= $state_variable . "</select>";
        $counter_enable++;
        global ${"stage_{$stage}_{$counter_enable}"};
    }
    for ($i = 0; $i < ${"max_stage_{$stage}_{$component}"}; $i++) {
        if ($i == 0) {
            if (${"stage_{$stage}_{$counter_enable}"} == '-' || ${"stage_{$stage}_{$counter_enable}"} == "true") {
                ${"add_$component"}[0] =
                    "<button class='addBtn' onclick='toggle(" . $counter_enable . ",true, " . $stage . "," . $component . ", " . $stage_count . "," . ${"max_stage_{$stage}_{$component}"} . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-plus false'></i>
        </button>";
            } else {
                ${"add_$component"}[0] =
                    "<button class='addBtn' onclick='toggle(" . $counter_enable . ",false, " . $stage . "," . $component . ", " . $stage_count . "," . ${"max_stage_{$stage}_{$component}"} . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-minus false'></i>
        </button>";
            }
            $counter_enable++;
            global ${"stage_{$stage}_{$counter_enable}"};
        } else {
            "<button> </button>";
        }
        ${"info_general_$component"}[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_{$stage}_{$counter_enable}"} . "</td>";
        $counter_enable++;
        global ${"stage_{$stage}_{$counter_enable}"};
        ${"underway_$component"}[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_{$stage}_{$counter_enable}"} . "</td>";
        $counter_enable++;
        global ${"stage_{$stage}_{$counter_enable}"};
        ${"info_1_$component"}[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_{$stage}_{$counter_enable}"} . "</td>";
        $counter_enable++;
        global ${"stage_{$stage}_{$counter_enable}"};
        ${"info_2_$component"}[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_{$stage}_{$counter_enable}"} . "</td>";
        $counter_enable++;
        global ${"stage_{$stage}_{$counter_enable}"};
        ${"uploading_1_$component"}[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_{$stage}_{$counter_enable}"} . "</td>";
        $counter_enable++;
        global ${"stage_{$stage}_{$counter_enable}"};
        if (${"stage_{$stage}_{$counter_enable}"} == '-' || ${"stage_{$stage}_{$counter_enable}"} == "true") {
            ${"enable_1_$component"}[$i] =
                "<button onclick='toggle(" . $counter_enable . ",true, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-toggle-on false'></i>
        </button>";
        } else {
            ${"enable_1_$component"}[$i] =
                "<button onclick='toggle(" . $counter_enable . ",false, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-toggle-off false'></i>
        </button>";
        }
        $counter_enable++;
        global ${"stage_{$stage}_{$counter_enable}"};
        ${"uploading_2_$component"}[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_{$stage}_{$counter_enable}"} . "</td>";
        $counter_enable++;
        global ${"stage_{$stage}_{$counter_enable}"};
        if (${"stage_{$stage}_{$counter_enable}"} == '-' || ${"stage_{$stage}_{$counter_enable}"} == "true") {
            ${"enable_2_$component"}[$i] =
                "<button onclick='toggle(" . $counter_enable . ",true, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-toggle-on false'></i>
        </button>";
        } else {
            ${"enable_2_$component"}[$i] =
                "<button onclick='toggle(" . $counter_enable . ",false, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-toggle-off false'></i>
        </button>";
        }
        $counter_enable++;
        global ${"stage_{$stage}_{$counter_enable}"};
        ${"uploading_3_$component"}[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_{$stage}_{$counter_enable}"} . "</td>";
        $counter_enable++;
        global ${"stage_{$stage}_{$counter_enable}"};
        if (${"stage_{$stage}_{$counter_enable}"} == '-' || ${"stage_{$stage}_{$counter_enable}"} == "true") {
            ${"enable_3_$component"}[$i] =
                "<button onclick='toggle(" . $counter_enable . ",true, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-toggle-on false'></i>
        </button>";
        } else {
            ${"enable_3_$component"}[$i] =
                "<button onclick='toggle(" . $counter_enable . ",false, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-toggle-off false'></i>
        </button>";
        }
        $counter_enable++;
        global ${"stage_{$stage}_{$counter_enable}"};
        if (${"stage_{$stage}_{$counter_enable}"} == '-' || ${"stage_{$stage}_{$counter_enable}"} == "true") {
            ${"enableView_$component"}[$i] =
                "<button onclick='toggle(" . $counter_enable . ",true, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-eye false'></i>
        </button>";
        } else {
            ${"enableView_$component"}[$i] =
                "<button onclick='toggle(" . $counter_enable . ",false, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-eye-slash false'></i>
        </button>";
        }
        $counter_enable++;
        global ${"stage_{$stage}_{$counter_enable}"};
    }
    $propertyName = "add_$component";
    ${"stage_$stage"}->$propertyName = ${"add_$component"};
    $propertyName = "description_$component";
    ${"stage_$stage"}->$propertyName = ${"description_$component"};
    $propertyName = "info_general_$component";
    ${"stage_$stage"}->$propertyName = ${"info_general_$component"};
    $propertyName = "state_$component";
    ${"stage_$stage"}->$propertyName = ${"state_$component"};
    $propertyName = "underway_$component";
    ${"stage_$stage"}->$propertyName = ${"underway_$component"};
    $propertyName = "info_1_$component";
    ${"stage_$stage"}->$propertyName = ${"info_1_$component"};
    $propertyName = "info_2_$component";
    ${"stage_$stage"}->$propertyName = ${"info_2_$component"};
    $propertyName = "uploading_1_$component";
    ${"stage_$stage"}->$propertyName = ${"uploading_1_$component"};
    $propertyName = "uploading_2_$component";
    ${"stage_$stage"}->$propertyName = ${"uploading_2_$component"};
    $propertyName = "uploading_3_$component";
    ${"stage_$stage"}->$propertyName = ${"uploading_3_$component"};
    $propertyName = "enable_1_$component";
    ${"stage_$stage"}->$propertyName = ${"enable_1_$component"};
    $propertyName = "enable_2_$component";
    ${"stage_$stage"}->$propertyName = ${"enable_2_$component"};
    $propertyName = "enable_3_$component";
    ${"stage_$stage"}->$propertyName = ${"enable_3_$component"};
    $propertyName = "enableView_$component";
    ${"stage_$stage"}->$propertyName = ${"enableView_$component"};
}

// Stage 2
$max_stage_2_1 = 2;
$max_stage_2_2 = 2;
$max_stage_2_3 = 2;
$max_stage_2_4 = 2;
$max_stage_2_5 = 2;

// $stage = 1;
$stage_2 = new stdClass();

$titles = ["Agregar", "Preparación Endometrial > Transferencia", "General Info", "Resultado", "Underway", "Datos", "Uploading", "Habilitar", "Uploading", "Habilitar", "Uploading", "Habilitar", "Habilitar Vista"];
$description_1 = [];
for ($i = 0; $i < $max_stage_2_1; $i++) {
    $description_1[$i] = "Presentación de la candidata <br> Présentation de la candidate";
}
for ($i = 0; $i < $max_stage_2_1; $i++) {
    if ($i == 0) {
        if (${"stage_1_$counter_enable"} == '-' || ${"stage_1_$counter_enable"} == "true") {
            $add_1[0] =
                "<button class='addBtn' onclick='toggle(" . $counter_enable . ",true, " . $stage . ",3, " . $stage_count_3 . "," . $max_stage_2_1 . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-plus false'></i>
        </button>";
        } else {
            $add_1[0] =
                "<button class='addBtn' onclick='toggle(" . $counter_enable . ",false, " . $stage . ",3, " . $stage_count_3 . "," . $max_stage_2_1 . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-minus false'></i>
        </button>";
        }
        $counter_enable++;
    } else {
        "<button> </button>";
    }
}
$info_general_1 = [];
for ($i = 0; $i < $max_stage_2_1; $i++) {
    $info_general_1[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
$state_1 = [];
for ($i = 0; $i < $max_stage_2_1; $i++) {
    $state_1[$i] = "<select id='" . $counter_enable . "' onchange='saveContent2(this," . $stage . "," . $counter_enable . ")'>
        <option " . (${"stage_1_$counter_enable"} === "selection" ? "selected" : "") . " value='selection'>
            Selection
        </option>
        <option " . (${"stage_1_$counter_enable"} === "insurance" ? "selected" : "") . " value='insurance'>
            Insurance Period
        </option>
        <option " . (${"stage_1_$counter_enable"} === "start" ? "selected" : "") . " value='start'>
            Start Simulation
        </option>
        <option " . (${"stage_1_$counter_enable"} === "canceled" ? "selected" : "") . " value='canceled'>
            Canceled
        </option>
        <option " . (${"stage_1_$counter_enable"} === "Concluding" ? "selected" : "") . " value='Concluding'>
            Concluding
        </option>
    </select>";
    $counter_enable++;
}
$underway_1 = [];
for ($i = 0; $i < $max_stage_2_1; $i++) {
    $underway_1[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
$info_1_1 = [];
for ($i = 0; $i < $max_stage_2_1; $i++) {
    $info_1_1[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
$info_2_1 = [];
for ($i = 0; $i < $max_stage_2_1; $i++) {
    $info_2_1[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
$uploading_1_1 = [];
for ($i = 0; $i < $max_stage_2_1; $i++) {
    $uploading_1_1[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
for ($i = 0; $i < $max_stage_2_1; $i++) {
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
for ($i = 0; $i < $max_stage_2_1; $i++) {
    $uploading_2_1[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
for ($i = 0; $i < $max_stage_2_1; $i++) {
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
for ($i = 0; $i < $max_stage_2_1; $i++) {
    $uploading_3_1[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
for ($i = 0; $i < $max_stage_2_1; $i++) {
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
for ($i = 0; $i < $max_stage_2_1; $i++) {
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
for ($i = 0; $i < $max_stage_2_2; $i++) {
    $description_2[$i] = "Transfer. Embrionaria <br> Transfert embryonnaire";
}
for ($i = 0; $i < $max_stage_2_2; $i++) {
    if (${"stage_1_$counter_enable"} == '-' || ${"stage_1_$counter_enable"} == "true") {
        $add_2[0] =
            "<button class='addBtn' onclick='toggle(" . $counter_enable . ",true, " . $stage . ",4, " . $stage_count_4 . "," . $max_stage_2_2 . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-plus false'></i>
        </button>";
    } else {
        $add_2[0] =
            "<button class='addBtn' onclick='toggle(" . $counter_enable . ",false, " . $stage . ",4, " . $stage_count_4 . "," . $max_stage_2_2 . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-minus false'></i>
        </button>";
    }
    $counter_enable++;
}
$info_general_2 = [];
for ($i = 0; $i < $max_stage_2_2; $i++) {
    $info_general_2[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
$state_2 = [];
for ($i = 0; $i < $max_stage_2_2; $i++) {
    $state_2[$i] = "<select id='" . $counter_enable . "' onchange='saveContent2(this," . $stage . "," . $counter_enable . ")'>
        <option " . (${"stage_1_$counter_enable"} === "canceled" ? "selected" : "") . " value='canceled'>
            Canceled
        </option>
        <option " . (${"stage_1_$counter_enable"} === "underway" ? "selected" : "") . " value='underway'>
            Underway
        </option>
        <option " . (${"stage_1_$counter_enable"} === "concluding" ? "selected" : "") . " value='concluding'>
            Concluding
        </option>
    </select>";
    $counter_enable++;
}
$underway_2 = [];
for ($i = 0; $i < $max_stage_2_2; $i++) {
    $underway_2[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
$info_1_2 = [];
for ($i = 0; $i < $max_stage_2_2; $i++) {
    $info_1_2[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
$info_2_2 = [];
for ($i = 0; $i < $max_stage_2_2; $i++) {
    $info_2_2[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
$uploading_1_2 = [];
for ($i = 0; $i < $max_stage_2_2; $i++) {
    $uploading_1_2[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
for ($i = 0; $i < $max_stage_2_2; $i++) {
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
for ($i = 0; $i < $max_stage_2_2; $i++) {
    $uploading_2_2[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
for ($i = 0; $i < $max_stage_2_2; $i++) {
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
for ($i = 0; $i < $max_stage_2_2; $i++) {
    $uploading_3_2[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
for ($i = 0; $i < $max_stage_2_2; $i++) {
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
for ($i = 0; $i < $max_stage_2_2; $i++) {
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

// Third element
$description_3 = [];
for ($i = 0; $i < $max_stage_2_3; $i++) {
    $description_3[$i] = "Reporte Transfer <br> Rapport de transfert embryonnaire";
}
for ($i = 0; $i < $max_stage_2_3; $i++) {
    if (${"stage_1_$counter_enable"} == '-' || ${"stage_1_$counter_enable"} == "true") {
        $add_3[0] =
            "<button class='addBtn' onclick='toggle(" . $counter_enable . ",true, " . $stage . ",4, " . $stage_count_4 . "," . $max_stage_2_3 . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-plus false'></i>
        </button>";
    } else {
        $add_3[0] =
            "<button class='addBtn' onclick='toggle(" . $counter_enable . ",false, " . $stage . ",4, " . $stage_count_4 . "," . $max_stage_2_3 . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-minus false'></i>
        </button>";
    }
    $counter_enable++;
}
$info_general_3 = [];
for ($i = 0; $i < $max_stage_2_3; $i++) {
    $info_general_3[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
$state_3 = [];
for ($i = 0; $i < $max_stage_2_3; $i++) {
    $state_3[$i] = "<select id='" . $counter_enable . "' onchange='saveContent2(this," . $stage . "," . $counter_enable . ")'>
        <option " . (${"stage_1_$counter_enable"} === "waiting" ? "selected" : "") . " value='waiting'>
            Esperando
        </option>
        <option " . (${"stage_1_$counter_enable"} === "concluding" ? "selected" : "") . " value='concluding'>
            Concluding
        </option>
    </select>";
    $counter_enable++;
}
$underway_3 = [];
for ($i = 0; $i < $max_stage_2_3; $i++) {
    $underway_3[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
$info_1_3 = [];
for ($i = 0; $i < $max_stage_2_3; $i++) {
    $info_1_3[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
$info_2_3 = [];
for ($i = 0; $i < $max_stage_2_3; $i++) {
    $info_2_3[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
$uploading_1_3 = [];
for ($i = 0; $i < $max_stage_2_3; $i++) {
    $uploading_1_3[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
for ($i = 0; $i < $max_stage_2_3; $i++) {
    if (${"stage_1_$counter_enable"} == '-' || ${"stage_1_$counter_enable"} == "true") {
        $enable_1_3[$i] =
            "<button onclick='toggle(" . $counter_enable . ",true, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-toggle-on false'></i>
        </button>";
    } else {
        $enable_1_3[$i] =
            "<button onclick='toggle(" . $counter_enable . ",false, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-toggle-off false'></i>
        </button>";
    }
    $counter_enable++;
}
$uploading_2_3 = [];
for ($i = 0; $i < $max_stage_2_3; $i++) {
    $uploading_2_3[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
for ($i = 0; $i < $max_stage_2_3; $i++) {
    if (${"stage_1_$counter_enable"} == '-' || ${"stage_1_$counter_enable"} == "true") {
        $enable_2_3[$i] =
            "<button onclick='toggle(" . $counter_enable . ",true, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-toggle-on false'></i>
        </button>";
    } else {
        $enable_2_3[$i] =
            "<button onclick='toggle(" . $counter_enable . ",false, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-toggle-off false'></i>
        </button>";
    }
    $counter_enable++;
}
$uploading_3_3 = [];
for ($i = 0; $i < $max_stage_2_3; $i++) {
    $uploading_3_3[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
for ($i = 0; $i < $max_stage_2_3; $i++) {
    if (${"stage_1_$counter_enable"} == '-' || ${"stage_1_$counter_enable"} == "true") {
        $enable_3_3[$i] =
            "<button onclick='toggle(" . $counter_enable . ",true, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-toggle-on false'></i>
        </button>";
    } else {
        $enable_3_3[$i] =
            "<button onclick='toggle(" . $counter_enable . ",false, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-toggle-off false'></i>
        </button>";
    }
    $counter_enable++;
}
for ($i = 0; $i < $max_stage_2_3; $i++) {
    if (${"stage_1_$counter_enable"} == '-' || ${"stage_1_$counter_enable"} == "true") {
        $enableView_3[$i] =
            "<button onclick='toggle(" . $counter_enable . ",true, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-eye false'></i>
        </button>";
    } else {
        $enableView_3[$i] =
            "<button onclick='toggle(" . $counter_enable . ",false, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-eye-slash false'></i>
        </button>";
    }
    $counter_enable++;
}

// Fourth element
$description_4 = [];
for ($i = 0; $i < $max_stage_2_4; $i++) {
    $description_4[$i] = "Reporte Transfer <br> Rapport de transfert embryonnaire";
}
for ($i = 0; $i < $max_stage_2_4; $i++) {
    if (${"stage_1_$counter_enable"} == '-' || ${"stage_1_$counter_enable"} == "true") {
        $add_4[0] =
            "<button class='addBtn' onclick='toggle(" . $counter_enable . ",true, " . $stage . ",4, " . $stage_count_4 . "," . $max_stage_2_4 . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-plus false'></i>
        </button>";
    } else {
        $add_4[0] =
            "<button class='addBtn' onclick='toggle(" . $counter_enable . ",false, " . $stage . ",4, " . $stage_count_4 . "," . $max_stage_2_4 . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-minus false'></i>
        </button>";
    }
    $counter_enable++;
}
$info_general_4 = [];
for ($i = 0; $i < $max_stage_2_4; $i++) {
    $info_general_4[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
$state_4 = [];
for ($i = 0; $i < $max_stage_2_4; $i++) {
    $state_4[$i] = "<select id='" . $counter_enable . "' onchange='saveContent2(this," . $stage . "," . $counter_enable . ")'>
        <option " . (${"stage_1_$counter_enable"} === "waiting" ? "selected" : "") . " value='waiting'>
            Esperando
        </option>
        <option " . (${"stage_1_$counter_enable"} === "concluding" ? "selected" : "") . " value='concluding'>
            Concluding
        </option>
    </select>";
    $counter_enable++;
}
$underway_4 = [];
for ($i = 0; $i < $max_stage_2_4; $i++) {
    $underway_4[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
$info_1_4 = [];
for ($i = 0; $i < $max_stage_2_4; $i++) {
    $info_1_4[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
$info_2_4 = [];
for ($i = 0; $i < $max_stage_2_4; $i++) {
    $info_2_4[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
$uploading_1_4 = [];
for ($i = 0; $i < $max_stage_2_4; $i++) {
    $uploading_1_4[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
for ($i = 0; $i < $max_stage_2_4; $i++) {
    if (${"stage_1_$counter_enable"} == '-' || ${"stage_1_$counter_enable"} == "true") {
        $enable_1_4[$i] =
            "<button onclick='toggle(" . $counter_enable . ",true, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-toggle-on false'></i>
        </button>";
    } else {
        $enable_1_4[$i] =
            "<button onclick='toggle(" . $counter_enable . ",false, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-toggle-off false'></i>
        </button>";
    }
    $counter_enable++;
}
$uploading_2_4 = [];
for ($i = 0; $i < $max_stage_2_4; $i++) {
    $uploading_2_4[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
for ($i = 0; $i < $max_stage_2_4; $i++) {
    if (${"stage_1_$counter_enable"} == '-' || ${"stage_1_$counter_enable"} == "true") {
        $enable_2_4[$i] =
            "<button onclick='toggle(" . $counter_enable . ",true, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-toggle-on false'></i>
        </button>";
    } else {
        $enable_2_4[$i] =
            "<button onclick='toggle(" . $counter_enable . ",false, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-toggle-off false'></i>
        </button>";
    }
    $counter_enable++;
}
$uploading_3_4 = [];
for ($i = 0; $i < $max_stage_2_4; $i++) {
    $uploading_3_4[$i] = "<td contenteditable='true' onkeyup='saveContent(this," . $stage . "," . $counter_enable . ")'>" . ${"stage_1_$counter_enable"} . "</td>";
    $counter_enable++;
}
for ($i = 0; $i < $max_stage_2_4; $i++) {
    if (${"stage_1_$counter_enable"} == '-' || ${"stage_1_$counter_enable"} == "true") {
        $enable_3_4[$i] =
            "<button onclick='toggle(" . $counter_enable . ",true, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-toggle-on false'></i>
        </button>";
    } else {
        $enable_3_4[$i] =
            "<button onclick='toggle(" . $counter_enable . ",false, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-toggle-off false'></i>
        </button>";
    }
    $counter_enable++;
}
for ($i = 0; $i < $max_stage_2_4; $i++) {
    if (${"stage_1_$counter_enable"} == '-' || ${"stage_1_$counter_enable"} == "true") {
        $enableView_4[$i] =
            "<button onclick='toggle(" . $counter_enable . ",true, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-eye false'></i>
        </button>";
    } else {
        $enableView_4[$i] =
            "<button onclick='toggle(" . $counter_enable . ",false, " . $stage . ")'>
                <i id='toggleIcon_off_" . $counter_enable . "' class='fa-solid fa-eye-slash false'></i>
        </button>";
    }
    $counter_enable++;
}

$stage_2->titles = $titles;
$stage_2->add_1 = $add_1;
$stage_2->description_1 = $description_1;
$stage_2->info_general_1 = $info_general_1;
$stage_2->state_1 = $state_1;
$stage_2->underway_1 = $underway_1;
$stage_2->info_1_1 = $info_1_1;
$stage_2->info_2_1 = $info_2_1;
$stage_2->uploading_1_1 = $uploading_1_1;
$stage_2->enable_1_1 = $enable_1_1;
$stage_2->uploading_2_1 = $uploading_2_1;
$stage_2->enable_2_1 = $enable_2_1;
$stage_2->uploading_3_1 = $uploading_3_1;
$stage_2->enable_3_1 = $enable_3_1;
$stage_2->enableView_1 = $enableView_1;
$stage_2->add_2 = $add_2;
$stage_2->description_2 = $description_2;
$stage_2->info_general_2 = $info_general_2;
$stage_2->state_2 = $state_2;
$stage_2->underway_2 = $underway_2;
$stage_2->info_1_2 = $info_1_2;
$stage_2->info_2_2 = $info_2_2;
$stage_2->uploading_1_2 = $uploading_1_2;
$stage_2->enable_1_2 = $enable_1_2;
$stage_2->uploading_2_2 = $uploading_2_2;
$stage_2->enable_2_2 = $enable_2_2;
$stage_2->uploading_3_2 = $uploading_3_2;
$stage_2->enable_3_2 = $enable_3_2;
$stage_2->enableView_2 = $enableView_2;
$stage_2->add_3 = $add_3;
$stage_2->description_3 = $description_3;
$stage_2->info_general_3 = $info_general_3;
$stage_2->state_3 = $state_3;
$stage_2->underway_3 = $underway_3;
$stage_2->info_1_3 = $info_1_3;
$stage_2->info_2_3 = $info_2_3;
$stage_2->uploading_1_3 = $uploading_1_3;
$stage_2->enable_1_3 = $enable_1_3;
$stage_2->uploading_2_3 = $uploading_2_3;
$stage_2->enable_2_3 = $enable_2_3;
$stage_2->uploading_3_3 = $uploading_3_3;
$stage_2->enable_3_3 = $enable_3_3;
$stage_2->enableView_3 = $enableView_3;
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
                        <thead class="table-light" data-bs-toggle="collapse" data-bs-target="#section2" aria-expanded="true" style="cursor: pointer;">
                            <tr class="thead">
                                <th colspan="14">Fase 2.1 - Intentos de embarazo</th>
                            </tr>
                        </thead>
                        <tbody id="section2" class="collapse show">
                            <tr class="thead">
                                <?php
                                foreach ($stage_2->titles as $title) {
                                    if ($title == "Info") {
                                        echo "<th colspan='2'>" . $title . "</th>";
                                    } else {
                                        echo "<th>" . $title . "</th>";
                                    }
                                }
                                ?>
                            </tr>
                            <?php
                            for ($x = 0; $x < $stage_count_3; $x++) {
                                echo "<tr>" .
                                    ($x == 0 ? "<td class='add'>" . $stage_2->add_1[$x] . "</td>" : "<td class='add'> </td>") .
                                    "<td class='description'>" . $stage_2->description_1[$x] . "</td>" .
                                    $stage_2->info_general_1[$x] .
                                    "<td>" . $stage_2->state_1[$x] . "</td>" .
                                    $stage_2->underway_1[$x] .
                                    $stage_2->info_1_1[$x] .
                                    $stage_2->info_2_1[$x] .
                                    $stage_2->uploading_1_1[$x] .
                                    "<td class='enable_1'>" . $stage_2->enable_1_1[$x] . "</td>" .
                                    $stage_2->uploading_2_1[$x] .
                                    "<td class='enable_2'>" . $stage_2->enable_2_1[$x] . "</td>" .
                                    $stage_2->uploading_3_1[$x] .
                                    "<td class='enable_3'>" . $stage_2->enable_3_1[$x] . "</td>" .
                                    "<td class='enableView'>" . $stage_2->enableView_1[$x] . "</td>" .
                                    "</tr>";
                            }
                            for ($x = 0; $x < $stage_count_4; $x++) {
                                echo "<tr>" .
                                    ($x == 0 ? "<td class='add'>" . $stage_2->add_2[$x] . "</td>" : "<td class='add'> </td>") .
                                    "<td class='description'>" . $stage_2->description_2[$x] . "</td>" .
                                    $stage_2->info_general_2[$x] .
                                    "<td>" . $stage_2->state_2[$x] . "</td>" .
                                    $stage_2->underway_2[$x] .
                                    $stage_2->info_1_2[$x] .
                                    $stage_2->info_2_2[$x] .
                                    $stage_2->uploading_1_2[$x] .
                                    "<td class='enable_1'>" . $stage_2->enable_1_2[$x] . "</td>" .
                                    $stage_2->uploading_2_2[$x] .
                                    "<td class='enable_2'>" . $stage_2->enable_2_2[$x] . "</td>" .
                                    $stage_2->uploading_3_2[$x] .
                                    "<td class='enable_3'>" . $stage_2->enable_3_2[$x] . "</td>" .
                                    "<td class='enableView'>" . $stage_2->enableView_2[$x] . "</td>" .
                                    "</tr>";
                            }
                            for ($x = 0; $x < $stage_count_5; $x++) {
                                echo "<tr>" .
                                    ($x == 0 ? "<td class='add'>" . $stage_2->add_3[$x] . "</td>" : "<td class='add'> </td>") .
                                    "<td class='description'>" . $stage_2->description_3[$x] . "</td>" .
                                    $stage_2->info_general_3[$x] .
                                    "<td>" . $stage_2->state_3[$x] . "</td>" .
                                    $stage_2->underway_3[$x] .
                                    $stage_2->info_1_3[$x] .
                                    $stage_2->info_2_3[$x] .
                                    $stage_2->uploading_1_3[$x] .
                                    "<td class='enable_1'>" . $stage_2->enable_1_3[$x] . "</td>" .
                                    $stage_2->uploading_2_3[$x] .
                                    "<td class='enable_2'>" . $stage_2->enable_2_3[$x] . "</td>" .
                                    $stage_2->uploading_3_3[$x] .
                                    "<td class='enable_3'>" . $stage_2->enable_3_3[$x] . "</td>" .
                                    "<td class='enableView'>" . $stage_2->enableView_3[$x] . "</td>" .
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
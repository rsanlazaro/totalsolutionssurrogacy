<?php
// Make sure the response is plain text (not HTML)
header('Content-Type: text/plain');

// Read the raw POST body
$input = json_decode(file_get_contents('php://input'), true);

// Extract values
$id = $input['id'] ?? 'No ID';
$content = $input['content'] ?? 'No Content';
// var_dump($content);
$stage = $input['stage'] ?? 'No Stage';
$rowNumber = $input['row'] ?? 'No Row';
$max_value = $input['max_value'] ?? 'No max value';

include "includes/app.php";
$conn = connectDB();

$sql = "SELECT * FROM ipregister WHERE id=1";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    for ($i = 1; $i <= 2; $i++) {
        ${"stage_count_$i"} = $row['stage_count_' . $i];
    }
}

if ($rowNumber > 0) {
    if ($content == "false") {
        ${"stage_count_$rowNumber"} = ${"stage_count_$rowNumber"} - 1;
        if (${"stage_count_$rowNumber"} == 1) {
            $content = "true";
        }
    } else {
        ${"stage_count_$rowNumber"} = ${"stage_count_$rowNumber"} + 1;
        if (${"stage_count_$rowNumber"} == $max_value) {
            $content = "false";
        }
    }
    $variable = "stage_count_" . $rowNumber;
    $variableValue = ${"stage_count_$rowNumber"};
    $sql = "UPDATE `ipregister` SET $variable=$variableValue WHERE id=1";
    mysqli_query($conn, $sql);
}

$variable = "stage_" . $stage . "_" . $id;
$sql = "UPDATE `ipregister` SET $variable='$content' WHERE id=1";
mysqli_query($conn, $sql);

// Echo the data back
// echo "Received ID: $id\nReceived Content: $content from stage $stage and rowNumber $rowNumber \n";

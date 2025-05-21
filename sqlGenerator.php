<?php
$columns = [];
for ($i = 2; $i <= 200; $i++) {
    $columns[] = "ADD COLUMN `stage_$i` TEXT DEFAULT '-' COMMENT ''";
}

// Join all the columns with commas and line breaks
$sql = "ALTER TABLE `tts`.`ipregister_1`\n" . implode(",\n", $columns) . ";";

// Output the SQL so you can use it
echo $sql;

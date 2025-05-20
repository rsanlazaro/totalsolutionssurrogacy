<?php
$columns = [];
for ($i = 156; $i <= 500; $i++) {
    $columns[] = "ADD COLUMN `stage_1_$i` TEXT DEFAULT '-' COMMENT ''";
}

// Join all the columns with commas and line breaks
$sql = "ALTER TABLE `tts`.`ipregister`\n" . implode(",\n", $columns) . ";";

// Output the SQL so you can use it
echo $sql;

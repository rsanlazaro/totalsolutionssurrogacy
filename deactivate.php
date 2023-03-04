<?php

include "includes/app.php";
$conn = connectDB();

    

// Check if id is set or not, if true,
// toggle else simply go back to the page
if (isset($_GET['id'])) {

    // Store the value from get to
    // a local variable "course_id"
    $val_id = $_GET['id'];
    $type = $_GET['type'];

    // SQL query that sets the status to
    // 0 to indicate deactivation.
    if ($type == "fenotipo") {
        $sql = "UPDATE `users` SET
			`fenotipo`=0 WHERE id='$val_id'";
        // Execute the query
        mysqli_query($conn, $sql);
    }
    if ($type == "vip") {
        $sql = "UPDATE `users` SET
			`vip`=0 WHERE id='$val_id'";
        // Execute the query
        mysqli_query($conn, $sql);
    }
    if ($type == "plus") {
        $sql = "UPDATE `users` SET
			`plus`=0 WHERE id='$val_id'";
        // Execute the query
        mysqli_query($conn, $sql);
    }
    if ($type == "elite") {
        $sql = "UPDATE `users` SET
			`elite`=0 WHERE id='$val_id'";
        // Execute the query
        mysqli_query($conn, $sql);
    }
}

// Go back to course-page.php
header('location: users.php');
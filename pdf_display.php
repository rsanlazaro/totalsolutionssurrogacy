<?php

include 'includes/templates/header.php';
include "includes/app.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$conn = connectDB();
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $stmt = $conn->prepare("SELECT file_name, file_type, file_path FROM payments WHERE id = ?");
    if ($stmt) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($fileName, $fileType, $filePath);
            $stmt->fetch();

            // Check if file exists
            if (file_exists($filePath)) {
                // Set headers
                // var_dump($filePath);
                // header('Content-Type: application/pdf');
                // header("Content-Disposition: inline; filename=\"" . $fileName . "\"");

                // // Output the PDF data
                // readfile('uploads/Dialnet-UtilityAndBenefitsOfDifferentExoskeletonsForStroke-8899757.pdf');
                header('Content-Description: File Transfer');
                header('Content-Type: application/pdf');
                header('Content-Disposition: inline; filename=' . $fileName);
                header('Content-Transfer-Encoding: binary');
                header('Expires: 0');
                header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
                header('Pragma: public');
                header('Content-Length: ' . filesize($filePath));
                ob_clean();
                flush();
                readfile($filePath);
                exit();
            } else {
                echo "File not found.";
            }
        } else {
            echo "File not found.";
        }

        $stmt->close();
    } else {
        echo "Failed to prepare statement: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}

$conn->close();

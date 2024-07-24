<?php 

include 'includes/templates/header.php';
include "includes/app.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$conn = connectDB();

function sanitizeFileName($fileName) {
    // Replace any character that is not a letter, number, dot, or dash with an underscore
    return preg_replace('/[^A-Za-z0-9\.\-_]/', '_', $fileName);
}

if(isset($_POST['submit'])){
    if(isset($_FILES['file']) && $_FILES['file']['error'] == 0){
        $fileName = $_FILES['file']['name'];
        $sanitizedFileName = sanitizeFileName($fileName);
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileType = $_FILES['file']['type'];
        $filePath = 'uploads/' . basename($sanitizedFileName);
        
        // Move the uploaded file to the server
        if(move_uploaded_file($fileTmpName, $filePath)){
            $stmt = $conn->prepare("INSERT INTO payments (file_name, file_type, file_path) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $sanitizedFileName, $fileType, $filePath);

            if($stmt->execute()){
                echo "File uploaded and saved successfully.";
            } else {
                echo "Failed to save file path to database.";
            }

            $stmt->close();
        } else {
            echo "Failed to upload file.";
        }
    } else {
        echo "Please select a valid PDF file.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload PDF</title>
</head>
<body>
    <form action="pdf_upload.php" method="post" enctype="multipart/form-data">
        <label for="file">Choose PDF to upload:</label>
        <input type="file" name="file" id="file" accept="application/pdf" required>
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>
<?php
include "includes/app.php";
$conn = connectDB();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $code = $_POST['code'];
    $id = $_SESSION['id'];
    $query1 = "SELECT donant_1 FROM users WHERE id='${id}' AND donant_1 IS NULL OR donant_1 = ''";
    $result1 = mysqli_query($conn, $query1);
    $exists1 = $result1->num_rows;
    var_dump($exists1);
    if ($exists1 > 1) {
        $query = "UPDATE users SET donant_1='${code}' WHERE id='${id}'";
        $result = mysqli_query($conn, $query);
        header("location: /catalogue.php?msg=Aún puedes seleccionar 2 donantes");
    } else {
        $query2 = "SELECT donant_2 FROM users WHERE id='${id}' AND donant_2 IS NULL OR donant_2 = ''";
        $result2 = mysqli_query($conn, $query2);
        $exists2 = $result2->num_rows;
        if ($exists2 > 1) {
            $query = "UPDATE users SET donant_2='${code}' WHERE id='${id}'";
            $result = mysqli_query($conn, $query);
            header("location: /catalogue.php?msg=Aún puedes seleccionar 1 donante");
        } else {
            $query3 = "SELECT donant_3 FROM users WHERE id='${id}' AND donant_3 IS NULL OR donant_3 = ''";
            $result3 = mysqli_query($conn, $query3);
            $exists3 = $result3->num_rows;
            if ($exists3 > 1) {
                $query = "UPDATE users SET donant_3='${code}' WHERE id='${id}'";
                $result = mysqli_query($conn, $query);
                header("location: /catalogue.php?msg=Gracias. Ya has seleccionado las 3 donantes");
            } else {
                header("location: /catalogue.php?msg=Ya has seleccionado las 3 donantes. No es posible elegir más");
            }
        }
    }
}

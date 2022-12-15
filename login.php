<?php
session_start();
include "config/database.php";

$conn = connectDB();

if (isset($_POST['user']) && isset($_POST['password'])) {
  function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
}

$user = validate($_POST['user']);
$pass = validate($_POST['password']);

if (empty($user)) {

    header("Location: register.php?error = User Name is required");
    exit();

}else if(empty($pass)){

    header("Location: register.php?error = Password is required");
    exit();

}else{
    
    $sql = "SELECT * FROM users WHERE user='$user' AND password ='$pass'";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if($row['user'] === $user && $row['password'] === $pass) {
            echo "Logged In";
            $_SESSION['user'] = $row['user'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            echo "SI";
            header("Location: register.php");
            exit();
        }
        else {
            header("Location: register.php?error=Usuario o contraseña incorrecta");
            exit();
            // echo "INCORRECTO";
        }
    }else{
        header("Location: register.php?error=Usuario o contraseña incorrecta");    
        exit();
    }
}
?>
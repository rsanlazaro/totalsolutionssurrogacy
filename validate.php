<?php
session_start();
include "includes/config/database.php";

if (!$_SESSION['login']) {
    header('location: /index.php');
} else {
    if (!($_SESSION['type'] === 'ADMIN')) {
        header('location: /index.php');
    }
}

$conn = connectDB();

if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$username = validate($_POST['username']);
$password = validate($_POST['password']);

if (empty($username)) {

    header("Location: login.php?error = User Name is required");
    exit();
} else if (empty($password)) {

    header("Location: login.php?error = Password is required");
    exit();
} else {

    // $sql = "SELECT * FROM users WHERE username='$username' AND password ='$password'";
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    // $hash = $row['password'];
    // echo $hash;
    // echo "    ";
    // echo $password;
    // $auth = password_verify($password, $hash);
    // echo($auth);
    // echo($row['username']);
    // echo($username);
    // echo(mysqli_num_rows($result) === 1)
    if ($password === $row['password']) {
        $auth = 1;
    }

    if (mysqli_num_rows($result) === 1) {
        // $row = mysqli_fetch_assoc($result);

        if ($row['username'] === $username && $auth) {
            echo "Logged In";
            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['login'] = true;
            $_SESSION['type'] = $row['type'];
            $_SESSION['VIP'] = $row['VIP'];
            $_SESSION['Plus'] = $row['Plus'];
            $_SESSION['Elite'] = $row['Elite'];
            if ($row['type'] == "ADMIN") {
                header("Location: admin.php");
            } else {
                header("Location: catalogue.php");
            }
            exit();
        } else {
            echo "no";
            header("Location: login.php?error=Usuario o contraseña incorrecta");
            exit();
            echo "INCORRECTO";
        }
    } else {
        header("Location: login.php?error=Usuario o contraseña incorrecta");
        exit();
    }
}

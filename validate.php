<?php
session_start();
?>

<?php
include "includes/app.php";
// if ($_POST['username'] == 'test' && $_POST['password'] == 'test') {
//     header('location: /form.php');
// } else {
//     if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin') {
//         header('location: /profile_adm.php');
//     } else {
//         header('location: /index.php');
//     }
// }

// if (!$_SESSION['login']) {
//     header('location: /index.php');
// }

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
    if ($password === $row['password']) {
        $auth = 1;
    }

    if (mysqli_num_rows($result) === 1) {

        if ($row['username'] === $username && $auth) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['login'] = true;
            $_SESSION['type'] = $row['profile'];
            $_SESSION['user'] = $row['username'];
            if ($row['profile'] === "admin" || $row['profile'] === "super-admin") {
                header('location: /admin.php');
                echo $_SESSION['login'];
            } elseif ($row['profile'] == 'candidate') {
                header('location: /candidateCalendar.php');
            } else {
                // profile_candidates
                // header('location: /form.php');
                header('location: /recruiter.php');
            }
            exit();
        } else {
            header("Location: login.php?error=Usuario o contraseña incorrecta");
            exit();
        }
    } else {
        header("Location: login.php?error=Usuario o contraseña incorrecta");
        exit();
    }
}

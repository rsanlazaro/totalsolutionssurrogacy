<?php 
function connectDB() : mysqli{
    $db = new mysqli('localhost','root','','eggdonordb');

    if(!$db) {
        echo "Error, no se pudo conectar";
        exit;
    }

    return $db;
}
// // function conectarDB() : mysqli{
//     $usuario = 'usuario';
//     $password = 'password';
//     $db = mysqli_connect('localhost','root','','eggdonordb');

//     if(!$db) {
//         echo "Error, no se pudo conectar";
//         exit;
//     } else {
//         echo "SE PUDO CONECTAR";
//     }

//     $sql = "SELECT * FROM users WHERE user = '$usuario' AND password='$password' ";
//     $result = mysqli_query($db, $sql);

//     if (mysqli_num_rows($result) === 1) {

//         echo "si hubo";
//         // $row = mysqli_fetch_assoc($result);

//         // if ($row['user_name'] === $uname && $row['password'] === $pass) {

//         //     echo "Logged in!";

//         //     $_SESSION['user_name'] = $row['user_name'];

//         //     $_SESSION['name'] = $row['name'];

//         //     $_SESSION['id'] = $row['id'];

//         //     header("Location: home.php");

//         //     exit();

//         // }else{

//         //     header("Location: index.php?error=Incorect User name or password");

//         //     exit();

//         // }

//     } else {
//         echo "no hubo";
//     }
//     // echo $result;

// //     return $db;
// // }
?>
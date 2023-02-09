<?php

function estaAutenticado() : void {
    // session_start();

    if(!$_SESSION['login']) {
        header('location: /index.php');
    }
}
?>


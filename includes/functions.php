<?php

function estaAutenticado() : void {

    if(!$_SESSION['login']) {
        header('location: /index.php');
    }
}

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

?>
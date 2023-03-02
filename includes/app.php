<?php

require __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();
use Cloudinary\Cloudinary;
$cloudinary = new Cloudinary(
    [
        'cloud' => [
            'cloud_name' => 'dyn4nexb0',
            'api_key'    => '819175155546639',
            'api_secret' => 'pXH_jkaQUJf7aHL4gVKd7VUb11g',
        ],
    ]
);

$cloudinary->uploadApi()->upload(
    'https://https://www.adslzone.net/app/uploads-adslzone.net/2019/04/borrar-fondo-imagen.jpg',
    ['public_id' => 'olympic_flag',
     'overwrite' => true]
);

require 'functions.php';
require 'config/database.php';

?>
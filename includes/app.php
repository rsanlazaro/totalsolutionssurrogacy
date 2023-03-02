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
    'https://upload.wikimedia.org/wikipedia/commons/a/ae/Olympic_flag.jpg',
    ['public_id' => 'olympic_flag']
);

require 'functions.php';
require 'config/database.php';

?>
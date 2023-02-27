<?php

require __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();
use Cloudinary\Cloudinary;
$cloudinary = new Cloudinary(
    [
        'cloud' => [
            'cloud_name' => $_ENV['CLOUD_NAME'],
            'api_key'    => $_ENV['CLOUD_KEY'],
            'api_secret' => $_ENV['CLOUD_SECRET'],
        ],
    ]
);
require 'functions.php';
require 'config/database.php';

?>
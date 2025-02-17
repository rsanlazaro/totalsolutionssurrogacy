<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
    'mode' => 'utf-8',
    'format' => 'A4',
    'default_font' => 'Arial'
]);

// Define the HTML content with inline CSS for exact layout
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FICHA CANDIDATA ROCIO</title>
    <style>
        .circle-1 {
        position: absolute;
        left: -10rem;
        top: -5rem;
        width: 35rem;
        height: 35rem;
        background-color: pink;
        border-radius: 1000rem;
        }
        .circle-2 {
        position: absolute;
        left: -2rem;
        top: 3.5rem;
        width: 18rem;
        height: 18rem;
        background-color: white;
        border-radius: 1000rem;
        }
        .circle-3 {
        position: absolute;
        right: -10rem;
        bottom: 0;
        width: 20rem;
        height: 20rem;
        background-color: pink;
        border-radius: 1000rem;
        }
        .circle-4 {
        position: absolute;
        right: -3rem;
        bottom: 6.5rem;
        width: 7rem;
        height: 7rem;
        background-color: white;
        border-radius: 1000rem;
        }
        .rect-1 {
        position: absolute;
        left: 7rem;
        width: 20rem;
        height: 400rem;
        top: 5rem;
        z-index: -10;
        background-color: turquoise;
        border-radius: 20rem;
        }
        .line {
        position: absolute;
        left: 28rem;
        top: 35rem;
        width: 50rem;
        height: 1rem;
        background-color: turquoise;
        }
        img {
        width: 10rem;
        }
        .content {
        z-index: 10;
        display: grid;
        }
    </style>
</head>
<body>
    <div class="rect-1"></div>
    <div class="circle-1"></div>
    <div class="circle-2"></div>
    <div class="circle-3"></div>
    <div class="circle-4"></div>
    <div class="line"></div>
    <div class="content">
        <div class="content1">
            <h1>ROCIO</h1>
        </div>
        <div class="content2">
            <h1>ROCIO</h1>
        </div>
    </div>
</body>
</html>
';

// Write HTML to PDF
$mpdf->WriteHTML($html);

// Output the PDF
$mpdf->Output('Ficha_Candidata_Rocio.pdf', 'I'); // 'D' forces download, use 'I' to view in browser

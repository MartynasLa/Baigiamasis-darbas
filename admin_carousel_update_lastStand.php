<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <?php

require_once('db_functions.php');



        $esamasUzkoduotas = $_POST['imageName'];
        $naujasUzkoduotas = $_POST['imageName'];
        updateCarousel($esamasUzkoduotas, $naujasUzkoduotas);

           ?>


           <a  href="admin_carousel_isvedimas.php" class="btn btn-dark w-50 mb-5">Back To Carousel panel</a>

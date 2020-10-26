<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>

        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">

        <!-- !!idedame CSS faila, nes kitaip neveiks -->
        <link rel="stylesheet" href="css/main.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>






<?php

require_once('db_functions.php');
// require_once();

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$imagename = $_POST['imageName'];
$number = $_POST['amount'];
createStock( $name, $description, $price, $imagename, $number);





 ?>

<a  href="admin_item_isvedimas.php" class="btn btn-dark">Back To Stock Item panel</a>
<!-- <button class="btn-lg btn-dark" href="admin_panel.php" type="button" name="button">Back To Admin Panel</button> -->


    </body>
</html>

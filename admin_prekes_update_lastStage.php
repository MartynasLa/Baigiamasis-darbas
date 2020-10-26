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

        // $getOneItem=getItem( 1 );
        // print_r($getOneItem);

        // print_r($_GET);

        $getOneItemID=$_POST['id'];
        $getOneItemName=$_POST['name'];
        $getOneItemDescription=$_POST['description'];
        $getOneItemPrice=$_POST['price'];
        $getOneItemImageName=$_POST['imageName'];
        $getOneItemAmount=$_POST['amount'];

        $updatintaPreke=updateStock($getOneItemID,$getOneItemName,$getOneItemDescription,$getOneItemPrice,$getOneItemImageName,$getOneItemAmount);

        print_r($updatintaPreke);

        // require_once('db_function.php')
        //
        // $updatePrekeId=$_GET['id'];
        // $updatedPreke=updateStock($updatePrekeId);
        //
        //
        // print_r($GET);





            ?>


<a href="admin_item_isvedimas.php" class="btn-lg btn-dark"> Back To Stock Item Panel</a>

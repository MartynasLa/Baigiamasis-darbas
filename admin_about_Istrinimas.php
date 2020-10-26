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



// print_r($_GET);

$aboutId=$_GET['id'];
deleteAbout($aboutId);

?>


<a  href="admin_About_isvedimas.php" class="btn btn-dark w-50 mb-5">Back To About panel</a>


   </body>
</html>

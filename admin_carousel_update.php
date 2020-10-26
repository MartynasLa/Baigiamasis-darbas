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

$getOneCarousel=$_GET['id'];
$isvestaCaruoseleUpdeitui=getOneKarusele($getOneCarousel);

// print_r($isvestaCaruoseleUpdeitui);


           ?>


           <form class="form-group" action="admin_carousel_update_lastStand.php" method="post">
               <input type="hidden" name="id" value="<?php $isvestaCaruoseleUpdeitui['id']; ?>">
               <div class="col-sm-12 m-1">
                   <input class="form-control" type="imageName" name="imageName" value="<?php echo $isvestaCaruoseleUpdeitui['imageName']; ?>" placeholder="image name.jpg"  />
               </div>
               <button type="submit" class="btn btn-dark btn-lg btn-block">uPDATE Carousel Content</button>
           </form>




               </body>
           </html>

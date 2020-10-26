<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>

        <!-- !!! mano CSS failas vissada zemiau, nie kiti css failai -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">

        <!-- !!idedame CSS faila, nes kitaip neveiks -->
        <link rel="stylesheet" href="css/main.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <body>

        <h2 class="text-center">All Carousel Content DB</h2>
        <form class="form-group" action="admin_carousel_idejimas.php" method="post">
            <div class="col-sm-12 m-1">
                <input class="form-control" type="imageName" name="imageName" placeholder="image name.jpg"  />
            </div>
            <button type="submit" class="btn btn-dark btn-lg btn-block">Add Carousel Content</button>
        </form>

<?php
require_once('db_functions.php');


$allKarusele = getKarusele( 30 );
$oneKarusele = mysqli_fetch_assoc($allKarusele);

while ($oneKarusele==true) {
//     // echo "<div>";
echo '<div class="col-sm-12">
    <a href="admin_carousel_istrinimas.php?id='.$oneKarusele['id'].'" class="btn bg-danger"> Delete</a>
    <a href="admin_carousel_update.php?id='.$oneKarusele['id'].'" class="btn bg-info"> Update</a>
    <p class="card-text"> '.$oneKarusele['imageName'].' </p>

  </div>';
    // "</div>"
    // $oneItem=mysqli_fetch_assoc($allStock);
// echo '<img class="card-img-top" src="img/'.$oneItem['id'].'" alt="">';
$oneKarusele = mysqli_fetch_assoc($allKarusele );
}

 ?>

 <a href="admin_panel.php" class="btn-lg btn-dark"> Back To Admin Panel</a>
 

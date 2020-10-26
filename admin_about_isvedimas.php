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

        <h2 class="text-center">Add ABOUT Content DB</h2>
        <form class="form-group" action="admin_About_sukurimas.php" method="post">
            <div class="col-sm-12 m-1">
                <input class="form-control" type="headline" name="headline" placeholder="headline"  />
            </div>
            <div class="col-sm-12 m-1">
                <input class="form-control" type="content" name="content" placeholder="content"  />
            </div>
            <div class="col-sm-12 m-1">
                <input class="form-control" type="position" name="position" placeholder="position"  />
            </div>
            <div class="col-sm-12 m-1">
                <input class="form-control" type="showInfo" name="showInfo" placeholder="showInfo"  />
            </div>
            <button type="submit" class="btn btn-dark btn-lg btn-block">Add About Content</button>
        </form>

<?php
require_once('db_functions.php');


$allAbout = getAbout( 10 );
$oneAbout = mysqli_fetch_assoc($allAbout);

while ($oneAbout==true) {
//     // echo "<div>";
echo '<div class="col-sm-12">
    <a href="admin_about_istrinimas.php?id='.$oneAbout['id'].'" class="btn bg-danger"> Delete</a>
    <a href="admin_about_update.php?id='.$oneAbout['id'].'" class="btn bg-info"> Update</a>
    <h4 class="card-title">'.$oneAbout['headline'].'</h4>
    <p class="card-text"> '.$oneAbout['content'].' </p>

    <p>'.$oneAbout['position'].'</p>
    <p>'.$oneAbout['showInfo'].'</p>
  </div>';
    // "</div>"
    // $oneItem=mysqli_fetch_assoc($allStock);
// echo '<img class="card-img-top" src="img/'.$oneItem['id'].'" alt="">';
$oneAbout = mysqli_fetch_assoc($allAbout);
}

 ?>

 <a href="admin_panel.php" class="btn-lg btn-dark"> Back To Admin Panel</a>

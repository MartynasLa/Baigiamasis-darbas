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

        <h2>ALL ORDERS RECEIVED</h2>

        <!-- reikejo ideti ir data kada gautas uzsakymas -->


<?php

require_once('db_functions.php');


$allOrders = getOrders( 10 );
$oneOrder = mysqli_fetch_assoc($allOrders);

while ($oneOrder==true) {
//     // echo "<div>";
echo '<div class="card  col-2 text-center cardColor m-1">
    <a href="admin_order_istrinimas.php?id='.$oneOrder['id'].'" class="btn bg-danger"> Delete</a>
    <h4 class="card-title">'.$oneOrder['itemName'].'</h4>
    <p class="card-text"> '.$oneOrder['fullName'].' </p>
    <p class="card-text"> '.$oneOrder['fullAdrress'].' </p>
    <p class="card-text"> '.$oneOrder['email'].' </p>
    <p class="card-text"> '.$oneOrder['orderNr'].' </p>
    <p class="card-text"> '.$oneOrder['content'].' </p>

    <p>'.$oneOrder['price'].'</p>
  </div>';
    // "</div>"
    // $oneItem=mysqli_fetch_assoc($allStock);
// echo '<img class="card-img-top" src="img/'.$oneItem['id'].'" alt="">';
$oneOrder = mysqli_fetch_assoc($allOrders);
}


 ?>

 <a href="admin_panel.php" class="btn-lg btn-dark"> Back To Admin Panel</a>

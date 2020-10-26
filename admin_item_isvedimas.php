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


<h2>Add Items To Stock DB</h2>
</div>
<form class=" form-group" action="admin_prekes_idejimas.php" method="post">
<div class="col-sm-6 m-1">
    <input type="text" class="form-control" name="name" value="" placeholder="Item name"/>
</div>

<div class="col-sm-6 m-1">
    <input type="text" class="form-control" name="description" value="" placeholder="Item Descrition"/>
</div>
<div class="col-sm-6 m-1">
    <label for="price">  </label>
    <input class="form-control" type="price" name="price" placeholder="price"  />
</div>
<div class="col-sm-6 m-1">
    <input class="form-control" type="imageName" name="imageName" placeholder="imageName"  />
</div>
<div class="col-sm-6 m-1">
    <input class="form-control" type="amount" name="amount" placeholder="Amount of items"  />
</div>
<button type="submit" class="btn btn-dark btn-lg">Add new Item</button>
</form>
<?php

require_once('db_functions.php');


$allStock = getItems( 10 );
$oneItem = mysqli_fetch_assoc($allStock);

while ($oneItem==true) {
//     // echo "<div>";
echo '<div class="col-sm-2">
    <a href="admin_prekes_istrinimas.php?id='.$oneItem['id'].'" class="btn bg-danger"> Delete</a>
    <a href="admin_prekes_update.php?id='.$oneItem['id'].'" class="btn bg-info"> Update</a>
    <h4 class="card-title">'.$oneItem['name'].'</h4>
    <p class="card-text"> '.$oneItem['description'].' </p>

    <p>'.$oneItem['price'].'</p>
  </div>';
    // "</div>"
    // $oneItem=mysqli_fetch_assoc($allStock);
// echo '<img class="card-img-top" src="img/'.$oneItem['id'].'" alt="">';
$oneItem = mysqli_fetch_assoc($allStock);
}


 ?>
 <a  href="admin_panel.php" class="btn btn-dark w-75">Back To Admin panel</a>

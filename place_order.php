<?php include_once('header.php') ?>

<?php
include_once('db_functions.php');

$itemName=$_POST['itemName'];
$price=$_POST['price'];
$fullName=$_POST['fullName'];
$fullAddress=$_POST['fullAdrress'];
$email=$_POST['email'];
$orderNr=$_POST['orderNr'];
$content=$_POST['content'];
// $order_id=$_POST['order_id'];

// createContact( $name, $lname);
createOrder( $itemName,$price,$fullName,$fullAddress,$email,$orderNr,$content);

 ?>



<main class="container mt-5">
    <div class="row ">

        <h1 class="col-12 d-flex justify-content-center"> Thank you For Buying Please Come Again !!!</h1>

    </div>

<div class="row d-flex justify-content-center">

    <a  href="index.php" class=" col-12 btn btn-dark w-50 mb-5 mt-5">Back to Home Page</a>

</div>

</main>



<?php include_once('footer.php') ?>

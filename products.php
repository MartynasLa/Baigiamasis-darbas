<?php require_once('header.php') ?>

        <!-- header pabaiga -->



    <?php


    // echo $_GET['id'];


    include_once('db_functions.php');
    // print_r($_GET);
    // $stockId=$_GET['id'];
    // $name=$_GET['name'];
    // $description=$_GET['description'];
    // $price=$_GET['price'];
    // $imagename=$_GET['imageName'];
    // $amount=$_GET['amount'];

    $getOneItemId=$_GET['id'];


    $itemToBuy=getItem($getOneItemId);

//     $isvestaVienaPrekePirkimui=getItem($stockId);
//
//     // getItem($stockId);
// //
// // $test=getItem($stockId,$name,$description,$price,$imagename,$amount);
// //
// print_r($isvestaVienaPrekePirkimui);


?>


<main>
<section class="container">
    <div class="row">

        <div class="d-flex justify-content-center">
            <img class="col-sm-4" src="img/<?php $id = $_GET['id'];
            echo getItem($id)['imageName']; ?>" alt="">
        </div>

        <section class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="">
                        "<?php    $id = $_GET['id']; echo getItem($id)['name'];    ?>"
                    </h2>
                </div>
                <div class="col-12 text-center">
                    <p class=""><?php $id = $_GET['id']; echo getItem($id)['description'];    ?></p>
                </div>
                <div class="col-12 text-center">
                    <h4> <?php $id = $_GET['id']; echo getItem($id)['price']; ?></h4>
                </div>
            </div>
        </section>

            <form class="col-12 text-center" action="cart.php" method="post">
                <input type="hidden" name="id" value="">
                <section class="container">
                    <div class="row">
                        <div class="col-sm-12 d-flex justify-content-center">
                        <a href="cart.php?id=<?php echo getItem($id)['id']; ?>" class="btn-lg btn-dark"> Add To Shopping Cart</a>
                        </div>
                    </div>
                </section>
            </form>

    </div>
</section>






</main>




<?php
require_once('footer.php');

 ?>

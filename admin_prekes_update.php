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

        //
        require_once('db_functions.php');
        //
        // $getOneItem=getItem( 1 );
        // print_r($getOneItem);
        //
        // print_r($_GET);
        //
        $getOneItemID=$_GET['id'];
        // $getOneItemName=$_GET['name'];
        // $getOneItemDescription=$_GET['description'];
        // $getOneItemPrice=$_GET['price'];
        // $getOneItemImageName=$_GET['imageName'];
        // $getOneItemAmount=$_GET['amount'];
        // // //
        $isvestaPrekeUpdeitui=getItem($getOneItemID);

        // print_r($prekesIsvedimas);

        // require_once('db_function.php')
        //
        // $updatePrekeId=$_GET['id'];
        // $updatedPreke=updateStock($updatePrekeId);
        //
        //
        // print_r($GET);





            ?>


            <form class=" form-group" action="admin_prekes_update_lastStage.php" method="post">
                <input type="hidden" name="id" value="<?php echo $isvestaPrekeUpdeitui['id'];  ?>">
                <div class="col-sm-6 m-1">
                    <input type="text" class="form-control" name="name" value="<?php echo $isvestaPrekeUpdeitui['name']; ?>" placeholder="Item name"/>
                </div>

                <div class="col-sm-6 m-1">
                    <input type="text" class="form-control" name="description" value="<?php echo $isvestaPrekeUpdeitui['description']; ?>" placeholder="Item Descrition"/>
                </div>
                <div class="col-sm-6 m-1">
                    <label for="price">  </label>
                    <input class="form-control" type="price" name="price" value="<?php echo $isvestaPrekeUpdeitui['price']; ?>" placeholder="price"  />
                </div>
                <div class="col-sm-6 m-1">
                    <input class="form-control" type="imageName" name="imageName" value="<?php echo $isvestaPrekeUpdeitui['imageName']; ?>" placeholder="imageName"  />
                </div>
                <div class="col-sm-6 m-1">
                    <input class="form-control" type="amount" name="amount" value="<?php echo $isvestaPrekeUpdeitui['amount']; ?>" placeholder="Amount of items"  />
                </div>
                <button type="submit" class="btn btn-dark btn-lg">Update new Item</button>
                </form>






    </body>
</html>

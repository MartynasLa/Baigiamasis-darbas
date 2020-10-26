

<?php require_once('header.php') ?>
        <!-- header pabaiga -->

        <?php include_once('db_functions.php');

        $id=$_GET['id'];



        ?>



            <div class="container mt-5 mb-5">
                <div class=" form-group row d-flex justify-content-center">
                    <form class="form-group" action="place_order.php" method="post">
                        <h3 class="d-flex justify-content-center">Order Item Info</h3>
                        <div class="row d-flex justify-content-center">
                        <div class="col-sm-6 m-1">
                            <input type="itemnName" class="form-control text-center" name="itemName" value="<?php echo getItem($id)['name']; ?>" placeholder="Item Name"readonly/>
                        </div>
                        <div class="col-sm-6 m-1">
                            <input type="price" class="form-control text-center" name="price" value="<?php echo getItem($id)['price']; ?>" placeholder="price"readonly/>
                        </div>
                        </div>

                        <h3 class="d-flex justify-content-center">Billing Address</h3>
                        <div class="col-sm-12 m-1">
                            <input type="fullName" class="form-control" name="fullName" value="" placeholder="Full Name"required/>
                        </div>

                        <div class="col-sm-12 m-1">
                            <input type="fullAdrress" class="form-control" name="fullAdrress" value="" placeholder="Full Address (City,Country,POSTCODE ect.)" required />
                        </div>
                        <div class="col-sm-12 m-1">
                            <input class="form-control" type="email" name="email" placeholder="E-mail" required />
                        </div>


                        <div class="col-sm-12 m-1">
                            <input class="form-control" type="orderNr" name="orderNr" placeholder="Transfer Confirmation Code" required />
                        </div>
                        <div class="col-sm-12 m-1">
                            <textarea name="content" type="content" class="form-control" rows="11" cols="111" placeholder="">Please transfer money to this account:
SEB: LTxx xxxx xxxx xxx xxxx

Once your payment is processed, you will receive a confirmation with shipping details.

Please don't forget to enter order number when transferring money.

Please write our additional comments here.</textarea required>
                        </div>
                        <button type="submit"  class="btn btn-dark btn-lg btn-block">Place Our Order </button>



                        </form>

                    </div>
                </div>


        <!-- about pabaiga -->



<?php require_once('footer.php') ?>

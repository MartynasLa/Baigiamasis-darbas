<?php require_once('header.php') ?>

        <!-- header pabaiga -->



        <div class="container mt-5 mb-5">
            <div class=" form-group row d-flex justify-content-center">

                <form class="form-group" action="send-email.php" method="post">
                    <div class="col-sm-12 m-1">
                        <input type="text" class="form-control" name="name" value="" placeholder="Your Name"required/>
                    </div>
                    <div class="col-sm-12 m-1">
                        <input type="text" class="form-control" name="lname" value="" placeholder="Your Surname"required/>
                    </div>
                    <div class="col-sm-12 m-1">
                        <input class="form-control" type="email" name="email" placeholder="E-mail" required />
                    </div>
                    <div class="col-sm-12 m-1">
                        <textarea name="content" type="content" class="form-control" rows="8" cols="80" placeholder="Your Message"></textarea required>
                    </div>
                    <button type="submit" class="btn btn-dark btn-lg btn-block">Send Query</button>
                    </form>

                </div>
            </div>

            <div class="container">
                <div class="row">
                    

                </div>

            </div>


        <!-- about pabaiga -->

        <?php require_once('footer.php') ?>

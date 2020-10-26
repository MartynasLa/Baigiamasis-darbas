<?php

require_once("header.php")

 ?>

        <!-- header pabaiga -->


        <div class="container ">
            <div class="row">
                <div class="col-sm-6 mt-4 mb-4">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                          <img class="d-block w-100 active" src="img/karusele1.jpg" data-src="holder.js/900x400?theme=social" alt="First slide">
                        </div>
                        <?php
                        include('carousel_template.php');
                         ?>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                    </div>
                </div>
                <!-- karuseles columo pabaiga -->
                <div class="col-6 align-self-center" href="about.php">
                    <h2 class="text-center">What we got and What we are</h2>
                    <p class="text-center ">We are the people, just like you. Who have a dream
                    to fly and reach the stars. Therefore we offering you a chance
                    to fly with us. So fasten your seat belts and Scroll Down</p>
                    <p class="text-center signSize">&#8595;&#8595;&#8595;&#8595;&#8595;</p>
                </div>



        <div class="container">
            <div class="row">

                    <?php

                    include('item_template.php');

                     ?>
            </div>

        </div>

        <?php require_once('footer.php') ?>

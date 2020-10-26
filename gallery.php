<?php

include_once('header.php');?>



<div class="container ausktis-300 mt-4">
    <div class="row">

                <h2 class="col-12 text-center">First Photo Shoot Of 2187MARS</h2>

                <article class="row d-flex justify-content-center mt-2">
                <p class="col-3 text-justify">You can take a look into your first photo shoot.
                This particular PS took place in Kaunas region. This industral machinery
                is used to get sand. It has really urbanistic vibe to it. For a second one could
                 even convince him self that he/she or it are actually on planet Mars. We had a lot of fun there.
                </p>

                </article>
    </div>
</div>



<main class="container">
    <div class="row">
        <?php

        include_once('db_functions.php');

        $galleryFoto=getGallery( 18 );
        $oneGalleryFoto=mysqli_fetch_assoc($galleryFoto);

        while ($oneGalleryFoto==true) {
            echo '<img src="gallery/'.$oneGalleryFoto['imageName'].'" class="col-4 img-fluid mt-2 mb-2" alt="">
            <a href="gallery.php?id='.$oneGalleryFoto['id'].'"></a>';


            $oneGalleryFoto=mysqli_fetch_assoc($galleryFoto);
        }

         ?>

         <div class="col-sm-12">
             <!-- <img src="" class="rounded d-block imgSize" alt="gallery photo"> -->

         </div>

    </div>


</main>








<?php include_once('footer.php'); ?>

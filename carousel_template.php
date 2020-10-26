<?php

require_once('db_functions.php');


// include('login.php');


$allKarusele=getKarusele(6);
$oneKarusele=mysqli_fetch_assoc($allKarusele);

while ($oneKarusele==true) {
    echo '<div class="carousel-item">
    <img class="d-block w-100" src="img/'.$oneKarusele['imageName'].'"  data-src="holder.js/900x400?theme=industrial" alt="Second slide">
    </div>';
    $oneKarusele=mysqli_fetch_assoc($allKarusele);
}


// echo '<div class="carousel-item">
// <img class="d-block w-100" src="img/ '.$oneKarusele['id']." ".$oneKarusele['imageName'].'  data-src="holder.js/900x400?theme=industrial" alt="Second slide">
// </div>';

// echo '<h2>' .$oneKarusele['id']." ".$oneKarusele['imageName']. '</h2>';
// echo '<img src="img/'.$oneKarusele['imageName'].'"  alt="karusele">';
// $oneKarusele=mysqli_fetch_assoc($allKarusele);

// echo ".$allKarusele.";

// function getKarusele($allKaruseleItems=99999){
//     $manoSQL = "SELECT * FROM karusele LIMIT $allKaruseleItems";
//     //$rezultatai-mysql'o objektas
//     $rezultataiOBJ=mysqli_query(getprisijungimas(), $manoSQL);
//     if (!$rezultataiOBJ) {
//         echo "ERROR: nepavyko ikelti karuseles" . mysqli_error(getprisijungimas());
//         return null;
//     } else {
//         return $rezultataiOBJ; //graziname my sql objekta
//     }
//     }


 ?>

<?php

include_once('db_functions.php');

$allAbout = getAbout( 1 );
$oneAbout = mysqli_fetch_assoc($allAbout);

while ($oneAbout==true) {
//     // echo "<div>";
echo "<p>" .$oneAbout['content']. "</p>";
    // "</div>"
    // $oneItem=mysqli_fetch_assoc($allStock);
// echo '<img class="card-img-top" src="img/'.$oneItem['id'].'" alt="">';
$oneAbout = mysqli_fetch_assoc($allAbout);
}


 ?>

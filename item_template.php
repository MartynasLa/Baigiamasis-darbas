<?php require_once('db_functions.php');





// $nuotraukosImageStockDB=(getImagesStockInfo());
// $nuotraukaImageStockDB=mysqli_fetch_assoc($nuotraukosImageStockDB);

// for($i=2; $i<5; $i++){
//   echo "<div class='carousel-item '><img class='d-block w-100' src='img/" . getImagesStockInfo($i)['item_id'] . "' data-src='holder.js/900x400?theme=social'></div>";
// $rezultataiArray = mysqli_fetch_assoc($rezultatai);
//
// }

$allStock = getItems( 9 );
$oneItem = mysqli_fetch_assoc($allStock);

while ($oneItem==true) {
//     // echo "<div>";
echo '<div class="card  col-3 text-center cardColor">
  <img class="card-img-top " src="img/'.$oneItem['imageName'].'" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title">'.$oneItem['name'].'</h4>
    <p class="card-text cardFontSize"> '.$oneItem['description'].' </p>
    <a href="products.php?id='.$oneItem['id'].'" class="btn btn-dark">'.$oneItem['price'].'</a>
  </div>
</div>';



// print_r($oneItem);
// $id = $oneItem['id'];
// echo '<div class="">
// <form class="card  col-3 text-center cardColor" action="products.php?id=" method="get">
//     <input type="image" name="imageName" value="" src="img/' . $oneItem["imageName"] . '">
//     <div class="card-body">
//       <h4 class="card-title">' . $oneItem["name"] . '</h4>
//       <p class="card-text cardFontSize"> '. $oneItem["description"] . ' </p>
//       <button type="submit" href="products.php?id=' . $id . '" class="btn btn-dark btn-lg">' . $oneItem["price"] . '</button>
//     </div>
// </form>
// // </div>';
    // "</div>"
    // $oneItem=mysqli_fetch_assoc($allStock);
// echo '<img class="card-img-top" src="img/'.$oneItem['id'].'" alt="">';
$oneItem = mysqli_fetch_assoc($allStock);
}
//
// // echo '<img class="card-img-top" src="img/'.$allStock['_item_id'].'" alt="">';

?>



<!-- <form class="" action="products.php?id=" method="get">
    <input type="image" name="imageName" value="" src="img/'.$oneItem['imageName'].'">
    <div class="card-body">
      <h4 class="card-title">'.$oneItem['name'].'</h4>
      <p class="card-text cardFontSize"> '.$oneItem['description'].' </p>
      <button type="submit" href="products.php?id='.$oneItem['price'].'" class="btn btn-dark btn-lg">a</button>
    </div>
</form> -->

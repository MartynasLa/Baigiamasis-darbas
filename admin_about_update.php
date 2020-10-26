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




require_once('db_functions.php');
$aboutId=$_GET['id'];
// $headline=$_GET['headline'];
// $content=$_GET['content'];
// $position=$_GET['position'];
// $showInfo=$_GET['showInfo'];

$vienasAboutUpdeitui=getOneAbout($aboutId);


// print_r($vienasAboutUpdeitui);




 ?>

 <form class="form-group" action="admin_about_update_lastStage.php" method="post">
     <input type="hidden" name="id" value="<?php echo $vienasAboutUpdeitui['id']; ?>">
     <div class="col-sm-12 m-1">
         <input class="form-control" type="text" name="headline" value="<?php echo $vienasAboutUpdeitui['headline'];  ?>" placeholder="headline"  />
     </div>
     <div class="col-sm-12 m-1">
         <input class="form-control" type="text" name="content" value="<?php echo $vienasAboutUpdeitui['content'] ?>" placeholder="content"  />
     </div>
     <div class="col-sm-12 m-1">
         <input class="form-control" type="position" name="position" value="<?php echo $vienasAboutUpdeitui['position'] ?>" placeholder="position"  />
     </div>
     <div class="col-sm-12 m-1">
         <input class="form-control" type="showInfo" name="showInfo" value="<?php echo $vienasAboutUpdeitui['showInfo'] ?>" placeholder="showInfo"  />
     </div>
     <button type="submit" class="btn btn-dark btn-lg btn-block">Update About Content</button>
 </form>


</body>
</html>

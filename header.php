<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>

        <!-- !!! mano CSS failas vissada zemiau, nie kiti css failai -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">

        <!-- !!idedame CSS faila, nes kitaip neveiks -->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="./admin/admin_panel.php">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <!-- NOTE: jeigu neveikia:
            1) ar failo pavadinimas geras
            2) ar kelias geras?   (ar "/" teisingi; direktorija ar gere )
            3) ar   rel="stylesheet"
            4) ar link uzdalete ">"
         -->
    </head>
    <body class="bodyColor">
        <div class="container-fluid  sticky-top ">
            <header class="row headerNavColor">
                <nav class="col-sm-12 d-flex justify-content-between">
                    <button class="btn btn-dark dropdown-toggle" type="button" data-toggle="dropdown">Menu
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu font-size-menu">
                      <li><a href="index.php">Home</a></li>
                      <li><a href="about.php">About</a></li>
                      <li><a href="gallery.php">Gallery</a></li>
                      <li><a href="contacts.php">Contacts</a></li>
                    </ul>

                    <h1 class=""> 2187MARS </h1>
                    <a href="cart.php" class="btn btn-dark fa fa-shopping-cart d-flex flex-wrap align-content-center"> CART!</a>
                    <!-- <button class="btn btn-dark"> <a href="cart.php"></a> <i class="fa fa-shopping-cart"> 0.00 EUR</i></button> -->
                </nav>
            </header>
        </div>

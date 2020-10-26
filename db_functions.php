<?php

require_once('config.php');
// include_once('config.php');
// include('config.php');

include('login.php');

// ==============Login FUNKCIJA==================///


// ===============funkcija 1 About isvedimui=============//

function getOneAbout($Nr){
    $manoSQL = "SELECT * FROM about WHERE id=$Nr";
    //$rezultatai-mysql'o objektas
    $rezultataiOBJ=mysqli_query(getprisijungimas(), $manoSQL);
    // print_r( $rezultatai );
    $rezultatai=mysqli_fetch_assoc($rezultataiOBJ);
    // print_r( $rezultataiArray );
    return $rezultatai;
}




//=============funkcija About Teksto Isvedimui===============//


function getAbout($allAboutInfo=99999){
    $manoSQL = "SELECT * FROM about LIMIT $allAboutInfo";
    //$rezultatai-mysql'o objektas
    $rezultataiOBJ=mysqli_query(getprisijungimas(), $manoSQL);
    if (!$rezultataiOBJ) {
        echo "ERROR: pavyko ikelti karuseles" . mysqli_error(getprisijungimas());
        return $rezultataiOBJ;
    } else { echo "";
        return $rezultataiOBJ; //graziname my sql objekta
    }
    }

    // $about=getAbout();
    // print_r($about);

//====================about istrinimas==================

function deleteAbout($nr) {
    $manoSQL = "DELETE FROM about WHERE id=$nr LIMIT 1";

    $rezultatai = mysqli_query(getprisijungimas(), $manoSQL); // print_r(    $rezultataiOBJ );  // test
    if ( !$rezultatai) {
        echo "ERROR: About istrinti Prekes. SQL klaida:" . mysqli_error(getPrisijungtimas());
    } else {
        echo "About Istrinta!";
    }
}


// ====================Update About=================//

function    updateAbout($id,$headline, $content,$position, $showInfo) {
    $nrUzkoduotas = mysqli_real_escape_string (getprisijungimas(), $id );
    $headlineUzkoduotas = mysqli_real_escape_string (getprisijungimas(), $headline );
    $contentUzkoduotas = mysqli_real_escape_string (getprisijungimas(), $content );
    $positionUzkoduotas = mysqli_real_escape_string (getprisijungimas(), $position );
    $showInfoUzkoduotas = mysqli_real_escape_string (getprisijungimas(), $showInfo );



    $manoSQL = "UPDATE about SET
                                    headline = '$headlineUzkoduotas',
                                    content ='$contentUzkoduotas',
                                    position='$positionUzkoduotas',
                                    showInfo='$showInfoUzkoduotas'
                                WHERE id = '$nrUzkoduotas'
                                LIMIT 1
              ";
    $rezultatai = mysqli_query(getprisijungimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test
    if ( !$rezultatai) {
        echo "ERROR: nepavyko redaguoti. SQL klaida:" . mysqli_error(getprisijungimas());
    } else {
        echo "Preke updeitina!";
    }
}

// ============FUNKCIJA VIENAI KARUSELES NUOTRAIKAI GAUTI UPDEITUI=======//


function getOneKarusele($Nr){
    $manoSQL = "SELECT * FROM karusele WHERE id=$Nr";
    //$rezultatai-mysql'o objektas
    $rezultataiOBJ=mysqli_query(getprisijungimas(), $manoSQL);
    // print_r( $rezultatai );
    $rezultatai=mysqli_fetch_assoc($rezultataiOBJ);
    // print_r( $rezultataiArray );
    return $rezultatai;
}


// ======== FUNKCIJA KARUSELES ISVEDIMUI=============//

function getKarusele($allKaruseleItems=99999){
    $manoSQL = "SELECT * FROM karusele LIMIT $allKaruseleItems";
    //$rezultatai-mysql'o objektas
    $rezultataiOBJ=mysqli_query(getprisijungimas(), $manoSQL);
    if (!$rezultataiOBJ) {
        echo "ERROR: pavyko ikelti karuseles" . mysqli_error(getprisijungimas());
        return $rezultataiOBJ;
    } else { echo "";
        return $rezultataiOBJ; //graziname my sql objekta
    }
    }

    // $karusele1=getKarusele(1);
    // print_r($karusele1);

    // ===========create Carousel===============//

    function createKarusele($imageName) {

        $manoSQL = "INSERT INTO  karusele
                        VALUES( null, '$imageName') ";
        $rezultatai = mysqli_query(getprisijungimas(), $manoSQL); // print_r(    $rezultataiOBJ );  // test
        if ( !$rezultatai) {
            echo "ERROR: nepavyko  Ideti foto i karusele:" . mysqli_error(getprisijungimas());
        } else {
            echo "Karusele Ideta!";
        }
    }

    // =========== Carousel Istrinimas==============//


    function deleteCarouselItem($nr) {
        $manoSQL = "DELETE FROM karusele WHERE id=$nr LIMIT 1";

        $rezultatai = mysqli_query(getprisijungimas(), $manoSQL); // print_r(    $rezultataiOBJ );  // test
        if ( !$rezultatai) {
            echo "ERROR: nepavyko istrinti Karuseles Foto. SQL klaida:" . mysqli_error(getPrisijungtimas());
        } else {
            echo "Foto Istrinta!";
        }
    }

    // ================update Carousel========//

    function    updateCarousel($esamasPavadinimas,$naujasPavadinimas) {
        $esamasUzkoduotas = mysqli_real_escape_string (getprisijungimas(), $esamasPavadinimas );
        $naujasUzkoduotas = mysqli_real_escape_string (getprisijungimas(), $naujasPavadinimas );




        $manoSQL = "UPDATE karusele
                                    SET imageName= '$naujasUzkoduotas'
                                    WHERE imageName = '$esamasUzkoduotas'
                                    LIMIT 1
                  ";
        $rezultatai = mysqli_query(getprisijungimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test
        if ( !$rezultatai) {
            echo "ERROR: nepavyko redaguoti Karuseles. SQL klaida:" . mysqli_error(getprisijungimas());
        } else {
            echo "Karusele updeitina!";
        }
    }

    // ============Vienos PREKES Isvedimas==========//


    function getItem($Nr){
        $manoSQL = "SELECT * FROM stock1 WHERE id=$Nr";
        //$rezultatai-mysql'o objektas
        $rezultataiOBJ=mysqli_query(getprisijungimas(), $manoSQL);
        // print_r( $rezultatai );
        $rezultatai=mysqli_fetch_assoc($rezultataiOBJ);
        // print_r( $rezultataiArray );
        return $rezultatai;
    }

    // $vienaPreke=getItem(1);
    // print_r($vienaPreke);


    //=======PREKIU ISVEDIMAS=============/



function getItems($allStockItems=99999){
    $manoSQL = "SELECT * FROM stock1 LIMIT $allStockItems";
    //$rezultatai-mysql'o objektas
    $rezultataiOBJ=mysqli_query(getprisijungimas(), $manoSQL);
    if (!$rezultataiOBJ) {
        echo "ERROR: nepavyko rasti Duomenu" . mysqli_error(getprisijungimas());
        return null;
    } else {
        return $rezultataiOBJ; //graziname my sql objekta
    }
    }

// $stockOBJ=getItems(2);
// print_r($stockOBJ);


//===============PREKES SUKURIMAS=============//

function createStock($name, $description,$price, $imagename, $amount) {

    $manoSQL = "INSERT INTO  stock1
                    VALUES( null, '$name', '$description','$price', '$imagename','$amount') ";
    $rezultatai = mysqli_query(getprisijungimas(), $manoSQL); // print_r(    $rezultataiOBJ );  // test
    if ( !$rezultatai) {
        echo "ERROR: nepavyko sukurti naujos prekes. SQL klaida:" . mysqli_error(getprisijungimas());
    } else {
        echo "Preke Ideta!";
    }
}


//====================PREKES ISTRINIMAS=======================//

function deleteStock($nr) {
    $manoSQL = "DELETE FROM stock1 WHERE id=$nr LIMIT 1";

    $rezultatai = mysqli_query(getprisijungimas(), $manoSQL); // print_r(    $rezultataiOBJ );  // test
    if ( !$rezultatai) {
        echo "ERROR: nepavyko istrinti Prekes. SQL klaida:" . mysqli_error(getPrisijungtimas());
    } else {
        echo "Preke Istrinta!";
    }
}

// =======================update stock=================//


function    updateStock( $id,$name, $description,$price, $imageName, $amount) {
    $nrUzkoduotas = mysqli_real_escape_string (getprisijungimas(), $id );
    $vardasUzkoduotas = mysqli_real_escape_string (getprisijungimas(), $name );
    $aprasymasUzkoduotas = mysqli_real_escape_string (getprisijungimas(), $description );
    $kainaUzkoduotas = mysqli_real_escape_string (getprisijungimas(), $price );
    $nuotraukospavdUzkoduotas = mysqli_real_escape_string (getprisijungimas(), $imageName );
    $kiekisUzkoduotas = mysqli_real_escape_string (getprisijungimas(), $amount );


    $manoSQL = "UPDATE stock1 SET
                                    name = '$vardasUzkoduotas',
                                    description = '$aprasymasUzkoduotas',
                                    price ='$kainaUzkoduotas',
                                    imageName='$nuotraukospavdUzkoduotas',
                                    amount='$kiekisUzkoduotas'
                                WHERE id = '$nrUzkoduotas'
                                LIMIT 1
              ";
    $rezultatai = mysqli_query(getprisijungimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test
    if ( !$rezultatai) {
        echo "ERROR: nepavyko redaguoti. SQL klaida:" . mysqli_error(getprisijungimas());
    } else {
        echo "Preke updeitina!";
    }
}

//=====================ABOUT TEKSTO IDEJIMAS I DB PER ADMIN=======//

function createABOUT($headline, $content,$position, $showInfo) {

    $manoSQL = "INSERT INTO  about
                    VALUES( null, '$headline', '$content','$position', '$showInfo')";
    $rezultatai = mysqli_query(getprisijungimas(), $manoSQL); // print_r(    $rezultataiOBJ );  // test
    if ( !$rezultatai) {
        echo "ERROR: nepavyko sukurti naujos prekes. SQL klaida:" . mysqli_error(getprisijungimas());
    } else {
        echo "Preke Ideta!";
    }
}



//=====================KONTAKTU KURIMAS I DUOMBAZE CONTACTS===============//


function createMessage( $name, $lname,$content, $email) {
    $nameCrypted = mysqli_real_escape_string (getprisijungimas(), $name );
    $lnameCrypted = mysqli_real_escape_string (getprisijungimas(), $lname );
    $contentCrypted = mysqli_real_escape_string (getprisijungimas(), $content );
    $emailCrypted = mysqli_real_escape_string (getprisijungimas(), $email );

    $manoSQL = "INSERT INTO  contact
                    VALUES( null, '$nameCrypted','$lnameCrypted','$contentCrypted', '$emailCrypted') ";

    $rezultatai = mysqli_query(getprisijungimas(),  $manoSQL);
    if ( !$rezultatai) {
        echo "Your message was not sent." . mysqli_error(getprisijungimas());

    }
}

// ==============Create Message For Order==============//

function createOrderMessage( $itemName,$price,$fullName,$fullAdrress,$email,$orderNr,$content) {
    $nameCrypted = mysqli_real_escape_string (getprisijungimas(), $itemName );
            $priceCrypted = mysqli_real_escape_string (getprisijungimas(), $price );
            $fullNameCrypted = mysqli_real_escape_string (getprisijungimas(), $fullName );
            $fullAdrressCrypted = mysqli_real_escape_string (getprisijungimas(), $fullAdrress );
            $emailCrypted = mysqli_real_escape_string (getprisijungimas(), $email );
            $orderNrCrypted = mysqli_real_escape_string (getprisijungimas(), $orderNr );
            $contentCrypted = mysqli_real_escape_string (getprisijungimas(), $content );

    $manoSQL = "INSERT INTO  contactOrder
                    VALUES( null, '$nameCrypted','$priceCrypted','$fullNameCrypted', '$fullAdrressCrypted','$emailCrypted','$orderNrCrypted','$contentCrypted') ";

    $rezultatai = mysqli_query(getprisijungimas(),  $manoSQL);
    if ( !$rezultatai) {
        echo "Your message was not sent." . mysqli_error(getprisijungimas());

    }
}

// print_r($_POST);

// =====================Create Order DB====================//

function createOrder($itemName,$price,$fullName,$fullAdrress,$email,$orderNr,$content)
{       $nameCrypted = mysqli_real_escape_string (getprisijungimas(), $itemName );
        $priceCrypted = mysqli_real_escape_string (getprisijungimas(), $price );
        $fullNameCrypted = mysqli_real_escape_string (getprisijungimas(), $fullName );
        $fullAdrressCrypted = mysqli_real_escape_string (getprisijungimas(), $fullAdrress );
        $emailCrypted = mysqli_real_escape_string (getprisijungimas(), $email );
        $orderNrCrypted = mysqli_real_escape_string (getprisijungimas(), $orderNr );
        $contentCrypted = mysqli_real_escape_string (getprisijungimas(), $content );


        $manoSQL = "INSERT INTO  orders1
                        VALUES( null, '$nameCrypted','$priceCrypted','$fullNameCrypted', '$fullAdrressCrypted','$emailCrypted','$orderNrCrypted','$contentCrypted') ";

        $rezultatai = mysqli_query(getprisijungimas(),  $manoSQL);
        if ( !$rezultatai) {
            echo "Your Order Was Not Placed." . mysqli_error(getprisijungimas());

        }
}

// =============ORDER DB ISVEDIMAS====================//

function getOrders($allOrders=99999)
{$manoSQL = "SELECT * FROM orders1 LIMIT $allOrders";
//$rezultatai-mysql'o objektas
$rezultataiOBJ=mysqli_query(getprisijungimas(), $manoSQL);
if (!$rezultataiOBJ) {
    echo "ERROR: No Orders Received" . mysqli_error(getprisijungimas());
    return null;
} else {
    return $rezultataiOBJ; //graziname my sql objekta
}
}


// ====================DELETE ORDER===============================//

function deleteOrder($nr) {
    $manoSQL = "DELETE FROM orders1 WHERE id=$nr LIMIT 1";

    $rezultatai = mysqli_query(getprisijungimas(), $manoSQL); // print_r(    $rezultataiOBJ );  // test
    if ( !$rezultatai) {
        echo "ERROR: nepavyko istrinti Prekes. SQL klaida:" . mysqli_error(getPrisijungtimas());
    } else {
        echo "Preke Istrinta!";
    }
}

// ===================Galerijos Visos Isvedimas=======================//


function getGallery($allStockItems=99999){
    $manoSQL = "SELECT * FROM gallery LIMIT $allStockItems";
    //$rezultatai-mysql'o objektas
    $rezultataiOBJ=mysqli_query(getprisijungimas(), $manoSQL);
    if (!$rezultataiOBJ) {
        echo "ERROR: nepavyko rasti Duomenu" . mysqli_error(getprisijungimas());
        return null;
    } else {
        return $rezultataiOBJ; //graziname my sql objekta
    }
    }




//=================TUREJO IMTI INFORMACIJA IS IMDA IR STOCK================

function getImagesStockInfo($x){
    $sqlJOIN= "SELECT image.imageName, image.description, stock.id
                from image inner join stock
                on stock.id=image.item_id
                where image.item_id = $x";
    $rezultatai = mysqli_query(getprisijungimas(),  $sqlJOIN);
    $rezultataiArray = mysqli_fetch_assoc($rezultatai);
    return  $rezultatai;
    if (!$rezultatai) {
        echo "ERROR: nepavyko sujungti. SQL klaida:" . mysqli_error(getprisijungimas());

    }
}

// $nuotrauka1=getImagesStockInfo(1);
//
// print_r($nuotrauka1);


 ?>

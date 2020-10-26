<?php


require_once('config.php');

$prisijungimas = mysqli_connect(DB_HOST,MYSQL_USERNAME,MYSQL_PASSWORD,DB_NAME);



function getprisijungimas(){
    global $prisijungimas;
    return $prisijungimas;
}

getprisijungimas();


?>

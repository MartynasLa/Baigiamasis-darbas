<?php
 require_once('login.php');

 require_once('db_functions.php');

$prisijungimas = mysqli_connect(DB_HOST,MYSQL_USERNAME,MYSQL_PASSWORD,DB_NAME);
if (!$prisijungimas){
    die("Database Connection Failed" . mysqli_error($prisijungimas));
}
$rezultataiOBJ = mysqli_query(getprisijungimas(), $manoSQL);
if (!$rezultataiOBJ){
    die("Database Selection Failed" . mysqli_error($prisijungimas));
}

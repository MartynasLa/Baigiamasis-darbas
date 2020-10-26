

<?php include_once('header.php') ?>





<main class="container ">
    <div class="row ">

        <h1 class="col-12 d-flex justify-content-center"> Thank you !!!</h1>

    </div>

<div class="row d-flex justify-content-center">

    <a  href="index.php" class=" col-12 btn btn-outline-dark w-50 mb-5">Back to Home Page</a>

</div>

</main>



<?php include_once('footer.php') ?>








<?php









// print_r($_POST);

include_once('db_functions.php');

$itemName=$_POST['itemName'];
$price=$_POST['price'];
$fullName=$_POST['fullName'];
$fullAddress=$_POST['fullAdrress'];
$email=$_POST['email'];
$orderNr=$_POST['orderNr'];
$content=$_POST['content'];


// createContact( $name, $lname);
createOrderMessage( $itemName,$price,$fullName,$fullAddress,$email,$orderNr,$content);
// echo "$name $email $klausimas <br/>";


include_once('libs/PHPMailer-master/PHPMailerAutoload.php');

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);



try {
    // papildomi PhpMailer nustatymia, jeigu neveikia su standartiniais

        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
        );
        $mail->Host = 'tls://smtp.gmail.com:587';
        $mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                      // TCP port to connect to

        //Server settings
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP

        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'testinisWDmailas@gmail.com';
        $mail->Password = 'bandauWD12';                // SMTP username                             // TCP port to connect to

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('testinisWDmailas@gmail.com', $fullName);     // Add a recipient               // Name is optional
    $mail->addReplyTo($email, 'Web puslapio kurejai');

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Message';
    $mail->Body    = $content;
    $mail->AltBody = $content;

    $mail->send();
    echo '<h2></h2>';
} catch (Exception $e) {
    echo "<h2 class='bg-danger'>Laiskas neissiustas</h2> Error: {$mail->ErrorInfo}";
}


 ?>

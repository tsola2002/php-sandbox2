<?php 

// importing the phpmailer library
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST['send'])){

    $email = new PHPMailer(true);
    // setting SMTP for PHPMailer library
    $email->isSMTP();
    $email->Host = 'smtp.gmail.com';
    $email->SMTPAuth = true;
    $email->Username = 'omatsolasobotie@gmail.com';
    $email->Password = 'pusqvagyxfecenwj';
    $email->SMTPSecure = 'ssl';
    $email->Port = 465;

    $email->setFrom('tsola2002@yahoo.co.uk');
    $email->addAddress($_POST['email']);
    $email->isHTML(true);
    $email->Subject = $_POST['subject'];
    $email->Body = $_POST['message'];

    // this will send the email
    $email->send();

    echo   
    "
    <script>
        alert('Sent Successfully');
        document.location.href = 'index.php';
    </script>
    ";

}





?>
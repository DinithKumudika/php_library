<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPmailer\PHPmailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';
require '../classes/Email.class.php';

//Create an instance; passing `true` enables exceptions

if(isset($_POST['btn-send'])) {

     $name = $_POST['text-name'];
     $mailTo = $_POST['text-email'];
     $subject = $_POST['text-subject'];
     $body = $_POST['text-content'];
     $mail = new PHPMailer(true);
     $email = new Email($mail, $name, $mailTo, $subject, $body);
     $email->sendEmail();
}
<?php
     use PHPMailer\PHPMailer\PHPMailer;
     use PHPmailer\PHPmailer\SMTP;
     use PHPMailer\PHPMailer\Exception;

     class Email {
          public $email;
          public $name;
          public $mailTo;
          public $mailSubject;
          public $mailBody;

          function __construct($email, $name, $mailTo, $mailSubject, $mailBody)
          {
               $this->email = $email;
               $this->name = $name;
               $this->mailTo = $mailTo;
               $this->mailSubject = $mailSubject;
               $this->mailBody = $mailBody;
          }

          public function sendEmail(){
               try {
                    //Server settings
                    //$mail->SMTPDebug = 1;                      //Enable verbose debug output
                    $this->email->isSMTP();   
                    $this->email->Mailer = "smtp";                                         //Send using SMTP
                    $this->email->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                    $this->email->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $this->email->Username   = 'hiremelkofficial@gmail.com';                     //SMTP username
                    $this->email->Password   = 'wowtrnjomjqegthg';                               //SMTP password
                    $this->email->SMTPSecure = "ssl";            //Enable implicit TLS encryption
                    $this->email->Port       = 465;              //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
          
                    //Recipients
                    $this->email->setFrom('hiremelkofficial@gmail.com', 'www.hireme.lk');
                    $this->email->addAddress($this->mailTo, $this->name);     //Add a recipient
                    // $mail->addAddress('ellen@example.com');               //Name is optional
                    // $mail->addReplyTo('info@example.com', 'Information');
                    // $mail->addCC('cc@example.com');
                    // $mail->addBCC('bcc@example.com');
          
                    //Attachments
                    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
          
                    //Content
                    $this->email->isHTML(true);                                  //Set email format to HTML
                    $this->email->Subject = $this->mailSubject;
                    $this->email->Body    = $this->mailBody;
                    $this->email->AltBody = $this->mailBody;
                    $this->email->send();
                    header("Location: http://localhost/myApp/success.php");
                    
               } 
               catch (Exception $e) {
                    echo "Message could not be sent";
               }
          }
     }
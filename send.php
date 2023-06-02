<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST["send"]))
{
    $mail = new PHPMailer(true);

    $mail->isSMTP();  
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth = true; 
    $mail->Username = 'jktiash123@gmail.com';
    $mail->Password ='atzifypihawcdshe';
    $mail->SMTPSecure = 'tsl';  
    $mail->Port = 587;  

    $mail->setFrom('jktiash123@gmail.com');
    $mail->addAddress('jktiash123@gmail.com'); 
    $mail->isHTML(true); 

    $mail->Subject = "Message from Portfolio Contact.";
    $mail->Body = "Message from-".$_POST['email']." .Message Subject-".$_POST['subject']." . Message body - ".$_POST['message'] ;

    $mail->send();

    echo 
    "
    <script>
    alert('sent successfully');
    document.location.href = 'index.html';
    </script>

    ";

}

?>
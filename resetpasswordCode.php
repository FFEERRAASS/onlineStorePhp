<?php
include 'connection.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
include 'connection.php';
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    
    
}
$sql4="select password from users where email = '$email'";

$resultpass= mysqli_query($connection,$sql4);

if($row = mysqli_fetch_array($resultpass)){
    $Pass= $row['password'];
    sendEmailRest($email,$Pass);
    
}
function sendEmailRest($email,$Pass){
    $mail = new PHPMailer(true);
    $mail-> isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username='mutasemshboul6@gmail.com';
    $mail->Password ='knvbblyalpbrcbaq';
    $mail->SMTPSecure='ssl';
    $mail-> Port = 465;

    $mail-> setFrom('mutasemshboul6@gmail.com');
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject='Neptune Shop ';
    $mail->Body = 'Your password is:'.$Pass.' Please do not share your email with anyone';
    $mail->send();

}
header('location:login.php');




?>
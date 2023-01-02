<?php

include 'connection.php';
include 'sendemail.php';
if (isset($_POST['submit'])) {
    $fullname = htmlspecialchars(stripcslashes(trim($_POST['fullname'])));
    $username = htmlspecialchars(stripcslashes(trim($_POST['username'])));
    $email = htmlspecialchars(stripcslashes(trim($_POST['email'])));
    $image=$_FILES['image'];
    $img =$image['name'];
    copy($image['tmp_name'], 'uploads/'.$image['name']);
    $password = $_POST['password'];
    $sql = "insert into users values('','$username','$fullname','$email','$password',1,'$img',0)";
    $result = mysqli_query($connection, $sql);
    sendEmail($email);
    header('location:login.php');

}



?>
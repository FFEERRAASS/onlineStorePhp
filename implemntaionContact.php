<?php 
include 'connection.php';

$a = $connection;

if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $msg = $_POST['message'];
        $sql ="Insert into contact values ('','$name','$email','$subject','$msg')";
        mysqli_query($connection,$sql);



}
header('location:contact.php');

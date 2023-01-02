<?php 
session_start();
$id=$_SESSION['UserID'];
include 'connection.php';

$a = $connection;

if(isset($_POST['submit'])){
        $msg = $_POST['message'];
        $sql ="Insert into testimonial values ('','$id','$msg')";
        mysqli_query($connection,$sql);



}
header('location:testimonial.php');

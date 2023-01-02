<?php 
session_start();
include 'connection.php';
$a = $connection;

if(isset($_POST['fav'])){

    global $connection;
    $userid=$_SESSION['UserID'];
    $productId=$_POST['fav'];
    $sql = "insert into favorite values('','$productId','$userid')";
    mysqli_query($connection ,$sql);
    

    

}
header('location:product.php');

?>
<?php 
session_start();
include 'connection.php';
$a = $connection;

if(isset($_POST['cart'])){

    global $connection;
    $userid=$_SESSION['UserID'];
    $productId=$_POST['cart'];
    $sql = "insert into favorite values('','$productId','$userid')";

    mysqli_query($connection ,$sql);
    $sql2 = "Delete from favorite where ProductId = '$productId'";
    mysqli_query($connection ,$sql2);


    

}
header('location:favourite.php');

?>
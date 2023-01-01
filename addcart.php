<?php 
session_start();
include 'connection.php';
$a = $connection;

if(isset($_POST['cart'])){

    global $connection;
    $userid=$_SESSION['UserID'];
    $productId=$_POST['cart'];
    $sql = "insert into shopping_cart values('','$productId','$userid')";
    mysqli_query($connection ,$sql);
    

    

}
header('location:product.php');

?>
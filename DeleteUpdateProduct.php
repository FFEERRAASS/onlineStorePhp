<?php
session_start();
include 'connection.php';


if(isset($_POST['delete'])){
    $proId = $_POST['delete'];
    $sql = "delete from product where ProductID = '$proId'";
    mysqli_query($connection,$sql);
    header('location:productadmin.php');

}
else if(isset($_POST['update'])){
    $_SESSION['ProductID'] = $_POST['update'];
    header('location:udpateProductForm.php');

    

}

?>
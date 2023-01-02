<?php 
session_start();
include 'connection.php';
if(isset($_POST['addproduct'])){
    $pName = $_POST['pname'];
    $pSale = $_POST['psale'];
    $pPrice = $_POST['pprice'];
    $pCategory = $_POST['tree'];
    $image=$_FILES['pimage'];
    $img =$image['name'];
    copy($image['tmp_name'], 'uploads/'.$image['name']);
    $sqlcat = "select CategoryID from category where CategoryName = '$pCategory'";
    $result = mysqli_query($connection,$sqlcat);
    $rwo = mysqli_fetch_array($result);
    $catid = $rwo['CategoryID'];
    echo $catid;
    $sql = "insert into product values('','$pName','$pPrice','$catid','$pSale','$img')";
    mysqli_query($connection,$sql);
    header('location:productadmin.php');

}



?>
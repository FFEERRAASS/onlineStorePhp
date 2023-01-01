<?php 
session_start();
include 'connection.php';

if(isset($_POST['submit'])){

    global $connection;
    $userid=$_SESSION['UserID'];
    $fullname = $_POST['fullname'];
    $date = $_POST['date'];
    $iban = $_POST['iban'];
    $cvv = $_POST['cvv'];
    $sql = "select Balance from visa where FullName = '$fullname' and CVV = '$cvv' and Expired = '$date' and IBAN= '$iban'";
    $result = mysqli_query($connection ,$sql);
    
    if($row = mysqli_fetch_array($result)){
        $sql2 = "select * from shopping_cart where userId = '$userid'";
        $result2 = mysqli_query($connection ,$sql2);
        while($row = mysqli_fetch_array($result2)){
            $proId = $row['ProductId'];
            $sql3 = "insert into orders values('','$proId','$userid',5,10,'')";
            mysqli_query($connection ,$sql3);
        }
        $sql4 = "delete from shopping_cart where userId = '$userid'";
        mysqli_query($connection ,$sql4);
    }
    

    

}
header('location:payment.php');

?>
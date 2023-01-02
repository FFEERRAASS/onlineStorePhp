<?php 
session_start();
include 'connection.php';
$a = $connection;

if(isset($_POST['submit'])){

    global $connection;
    $userid=$_SESSION['UserID'];
    $name=$_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $image=$_FILES['image'];
    $img =$image['name'];
    copy($image['tmp_name'], 'uploads/'.$image['name']);
   

    $sql = "update users set Username='$username' ,Password ='$pass' , FullName='$name',Email='$email',ImagePath = '$img' where User_ID ='$userid' ";
    mysqli_query($connection ,$sql);
    

    

}
echo "EH";
header('location:updateprofile.php');
?>
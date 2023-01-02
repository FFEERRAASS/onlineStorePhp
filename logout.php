<?php 
include 'connection.php';

$a = $connection;
session_destroy();
    header('location:login.php');

?>
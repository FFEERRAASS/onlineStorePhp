<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $email = htmlspecialchars(stripcslashes(trim($_POST['email'])));
    $password = htmlspecialchars(stripcslashes(trim($_POST['password'])));
    $sql = "select * from users where Email='$email' && Password='$password' and IsBlocked = 0";
    $result = mysqli_query($connection,$sql);
    //$row = mysqli_fetch_array($result);
    
    while($row = mysqli_fetch_array($result)){
        
        session_start();
        $_SESSION['UserID']=$row['User_ID'];
		$_SESSION['Email']=$row['Email'];
        $_SESSION['RoleFk'] = $row['RoleFk'];
        $_SESSION['img'] = $row['ImagePath'];
        $_SESSION['Name'] = $row['FullName'];
		if($row['RoleFk']==1){
			header('location:homepage.php');

		}
		else{
			header('location:Dashbord.php');
		}

        

    }


    
}



?>
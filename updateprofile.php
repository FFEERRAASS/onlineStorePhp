<?php 
session_start();
include 'connection.php';
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>account setting or edit profile - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100" style="border: 2px solid #00B98E;">
	<div class="card-body">
        <?php  $id = $_SESSION['UserID'];
            $query = "select * from users where User_ID = '$id'";
            $result = mysqli_query($connection,$query);
            while($row = mysqli_fetch_array($result)){
		echo '<div class="account-settings">
			<div class="user-profile">
				<div class="user-avatar">
					<img src="uploads/'.$row['ImagePath'].'" alt="Maxwell Admin">
				</div>
				<h5 class="user-name">'.$row['FullName'].'</h5>
			</div>
			<div class="about">
				<h5>Email</h5>
				<h6 class="user-email">'.$row['Email'].'</h6>
			</div>
            <div class="about">
				<h5>Username</h5>
				<h6 class="user-email">'.$row['Username'].'</h6>
			</div>
		</div>';}
        ?>
	</div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100" style="border: 2px solid #00B98E;">
	<div class="card-body">
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mb-2 text-primary">Personal Details</h6>
			</div>
            <?php 
            $id = $_SESSION['UserID'];
            $query = "select * from users where User_ID = '$id'";
            $result = mysqli_query($connection,$query);
            while($row = mysqli_fetch_array($result)){

           

			echo'<form method="post" action="updateProfileCode.php" enctype="multipart/form-data"> 
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="fullName">Full Name</label>
                    
					<input type="text" class="form-control" name="name" value='.$row['FullName'].' >
				</div><br><br>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="eMail">Email</label>
					<input type="email" class="form-control" name="email" value='.$row['Email'].' >
				</div><br><br>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="phone">Username</label>
					<input type="text" class="form-control" name="username" value='.$row['Username'].' >
				</div><br><br>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="website">Password</label>
					<input type="password" class="form-control" name="password" value='.$row['Password'].' >
				</div><br><br>
			</div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="website">Image</label>
					<input type="file" class="form-control" name="image"   >
				</div><br><br>
			</div>
            <br><br>
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="text-right">
                        <button type="submit" id="submit" name="submit" class="btn btn-secondary">Update</button>
                    </div>
                </div>
            </div>
            </form>
            ';
        }
        ?>

		</div>
	
       
	</div>
</div>
</div>
</div>
</div>

<style type="text/css">

.account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}
.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 90px;
    height: 90px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
    color: #9fa8b9;
}
.account-settings .about {
    margin: 2rem 0 0 0;
    text-align: center;
}
.account-settings .about h5 {
    margin: 0 0 15px 0;
    color: #007ae1;
}
.account-settings .about p {
    font-size: 0.825rem;
}
.form-control {
    border: 1px solid #cfd1d8;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    background: #ffffff;
    color: #2e323c;
}

.card {
    background: #ffffff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}


</style>

<script type="text/javascript">

</script>
</body>
</html>
<?php 

include 'footer.php'?>
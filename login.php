<?php
session_start();
include("configure.php");

//if(isset($_SESSION['id'])) // If session is not set then redirect to Login Page


if(isset($_POST["login"])){
	$email=$_POST["username"];
	$password=$_POST["password"];

	$sql = mysqli_query($conn,"SELECT * FROM user_login WHERE email='$email'") ;
	if(mysqli_num_rows($sql)>0){
		$row=mysqli_fetch_array($sql); 
		// $verify=password_verify($password,$row['password']);
        $pass=$row['password'];

		if($pass==$password){
			echo"<script>alert('Login Sucessful'),window.location='admin/intern.php';</script>";
			$_SESSION['email']=$row['email'];
            $_SESSION['id']=$row['id'];
    //   header('admin/intern.php');
		}
		else{
			echo"<script>alert('Invalid Password'),window.location='admin/.php';</script>";
		}
	}else{
		echo"<script>alert('Wrong email'),window.location='login.php';</script>";
	}
	}

?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Internship Form Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="javascript/login.js">
</head>

<body>
       
    <div class="registration-form">
        <form role = "form" action ="" method="post" style="border-bottom-left-radius: 30px; border-bottom-right-radius: 30px;">
        <h4 class = "form-signin-heading"></h4>
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="username" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" id="password" name="password" placeholder="Password">
            </div>

            <div class="form-group">
                <button type="submit" value="login" name="login" class="btn btn-block create-account">Login</button>
            </div>
        </form>
        <!-- Click here to clean <a href = "logout.php" tite = "Logout">Session. -->
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js">
    </script>
    <script src="assets/js/script.js"></script>
</body>

</html>
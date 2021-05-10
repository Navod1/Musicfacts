<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$username','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "./CSS/styles.css">
    <title>Musicfacts | Signup</title>
</head>
<body style = "background-image:url(./images/background.jpg);">
    <!--Login and Sign up page-->
    <div class = "toppanel">
        <div class="container flex">
            <h1 class="logo" id = "one">Musicfacts</h1>
            <nav>
                <a href = "./login.php">
                <input type = "submit" value = "Login" class = "buttonclass">
                </a>
            </nav>
        </div>
    <hr style = "border:4px solid #333;">
    <form class= "box" method = "post">
        <h4>Username</h4>
        <input type = "textarea" name = "username" placeholder = "Enter username">
        <br>
        <br>
        <h4>Password</h4>
        <input type = "password" name = "password" placeholder = "Enter password">
        <br>
        <input type = "submit" value = "Sign up" class = "buttonclass">
        <p class = "massage">Already registered ?<a href = "login.php">Log in</a></p>
    </form>
</body>
</html>
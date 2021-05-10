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

			//read from database
			$query = "select * from users where user_name = '$username' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
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
    <title>Musicfacts | Login</title>
</head>
<body style = "background-image:url(./images/background.jpg);">
    <!--Login and Sign up page-->
    <div class = "toppanel">
        <div class="container flex">
            <h1 class="logo" id = "one">Musicfacts</h1>
            <nav>
                <a href = "./signup.php">
                <input type = "submit" value = "Sign up" class = "buttonclass">
                </a>
            </nav>
        </div>
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
        <input type = "submit" value = "Log in" class = "buttonclass">
        <p class = "massage">Still didn't sign up ? Click here to <a href = "signup.php">sign up</a></p>
    </form>
</body>
   
</html>
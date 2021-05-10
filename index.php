<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel = "stylesheet" href = "./CSS/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<title>Musicfacts | Get to know music even more !!</title>
</head>
<body style = "background-image:url(./images/background.jpg)">
    <div class = "toppanel">
		<div class = "container flex">
		<div class = "dropdown">
		    <button type = "sumbit" class = "dropbtn">Users</button>
			 <div class = "dropcon">
			     <a href = "#">Profile</a>
				 <a href = "#">Notifications</a>
				 <a href = "#">User settings</a>
				 <a href = "#">Help</a>
				 <a href = "./logout.php">Log out</a>
			 </div>
		</div>
			<div class = "search">
			  <form>
				<input type = "text" placeholder= "Search here..." name = "search">
				<button type = "submit"><i class = "fa fa-search"></i></button>
			  </form>
			</div>
			<h1 class = "logo" id = "one">Musicfacts</h1>
	    </div>
    </div>
<hr style = "border:4px solid #333;">
<div class = "sidenav">
   <a href = "#">HOME</a>
   <a href = "./general.php">GENERAL</a>
   <a href = "./artist.php">ARTISTS</a>
   <a href = "#">ABOUT</a>
</div>
<div class = "wrapper">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident reprehenderit quasi unde quas ipsa officiis, et quo recusandae mollitia ullam?</p>
	<div class = "header3">
		<h3>Members - 100</h3>
	</div>

</div>
<div class = "top">
	<h3>Forums</h3>
	<h3>Description</h3>
	<h3>Comments</h3>
	<h3>Views</h3>
</div>
<div class = "frmone">
	<div class = "frm">
		<a href = "#">Ed Sheeran</a>
	</div>
	<div class = "description">
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
	</div>
	<div class = "comicon">
	    <i class="fas fa-comment"></i><br>
		10
	</div>
	<div class = "viewicon">
	    <i class="far fa-eye"></i>22
	</div>
</div>
</body>
</html>
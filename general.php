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
				 <a href = "#">Log out</a>
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
   <a href = "./index.php">HOME</a>
   <a href = "#">GENERAL</a>
   <a href = "./artist.php">ARTISTS</a>
   <a href = "#">ABOUT</a>
</div>
<div class = "wrapper">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident reprehenderit quasi unde quas ipsa officiis, et quo recusandae mollitia ullam?</p>
	<div class = "header3">
		<h3>Members - 100</h3>
	</div>
<div class = "txtarea">
	<input type = "textarea" placeholder = "Post your articles here" class = "txtbox">
</div>
<div class = "main">
	<h3 class = "posttopic">Freddie Mercury&nbsp;&nbsp;<h5 class = "time">Posted by User 3H ago.</h5></h3>
</div>
<div class = "content">
	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum officia labore distinctio debitis, quasi minima laborum dicta eveniet provident expedita cumque ullam explicabo saepe iusto, ad, nisi dignissimos nesciunt iure quidem quis? Aperiam ea alias delectus consectetur et laboriosam cum explicabo, labore laudantium repellat autem doloremque, eum ipsa repudiandae nostrum sed maxime accusantium quae? Nulla placeat aperiam aliquid quisquam cupiditate excepturi facere molestiae fugiat error eaque laudantium veniam itaque, ab repudiandae adipisci. Eveniet ipsam veritatis assumenda sapiente dicta saepe, dolorem quidem voluptatum voluptatem error doloribus, ipsum quisquam aut repellat deleniti aperiam optio ducimus, repellendus sunt? Exercitationem beatae unde dolor consequuntur voluptatibus possimus officia accusantium. Itaque earum quaerat nostrum quod aperiam sunt dolorem natus fugit cum hic, laudantium similique fuga magni voluptate laborum quibusdam soluta et ullam dicta quia accusantium voluptatem perferendis! Inventore quas temporibus labore iusto esse quam maiores dolorem error at nulla corrupti dolores nesciunt odit, totam quo porro quis et dolore voluptas magnam eius amet aut tenetur sapiente. Temporibus aperiam consequuntur libero fugiat excepturi quam rerum explicabo nesciunt eos nihil laudantium, aut rem nobis. Tenetur placeat laudantium quae voluptate adipisci totam sequi, culpa molestias perspiciatis ut quos doloribus commodi saepe quisquam necessitatibus error dignissimos praesentium. Sunt, in quaerat?</p>
</div>
<dic class = "btns">
    <div class = "heart">
       <a href><i class="fas fa-heart"></i></a>
    </div>
    <div class = "comment">
       <a href><i class="fas fa-comment"></i></a>
    </div>
    <div class = "share">
       <a href><i class="fas fa-share"></i></a>
    </div>
</div>
</body>
</html>
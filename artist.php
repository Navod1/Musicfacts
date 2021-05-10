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
    <div class = "button-article">
        <button class = "btn"><i class="far fa-plus-square"></i>&nbsp;&nbsp;&nbsp;Create a new article</button>
    </div>
    <div class = "header">
        <p class = "head">Please select initial letter of the artist</p>
    </div>
    <div class= "initial">
        <select name="initials" class="artist-initials">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
            <option value="F">F</option>
            <option value="G">G</option>
            <option value="H">H</option>
            <option value="I">I</option>
            <option value="J">J</option>
            <option value="K">K</option>
            <option value="L">L</option>
            <option value="M">M</option>
            <option value="N">N</option>
            <option value="O">O</option>
            <option value="P">P</option>
            <option value="L">Q</option>
            <option value="R">R</option>
            <option value="S">S</option>
            <option value="P">T</option>
            <option value="L">U</option>
            <option value="V">V</option>
            <option value="W">W</option>
            <option value="X">X</option>
            <option value="Y">Y</option>
            <option value="Z">Z</option>
        </select>
    </div>
    <div class="dropmenu">
            <a href="#">Michael Jackson</a>
            <a href="#">Mabel</a>
            <a href="#">Madooo</a>
            <a href="#">Mc Powell</a>
            <a href="#">Mac Miller</a>
            <a href="#">Madina Lake</a>
            <a href="#">Maggie Rose</a>
            <a href="#">Madonna</a>
            <a href="#">major Lazer</a>
            <a href="#">Monfred Mann</a>
    </div>
    <section class = "artist-pic">
        <img src = "./images/prince.jpg" alt = "prince">
        <p class = "prince">Prince Rogers Nelson (June 7, 1958 – April 21, 2016) was an American singer-songwriter, multi-instrumentalist, record producer, actor, and director. Regarded as one of the greatest musicians of his generation, and guitar virtuoso, he worked across multiple genres performing in a flamboyant and androgynous persona, with a wide vocal range which included a far-reaching falsetto and high-pitched screams.

        Prince's music integrated a wide variety of styles, including funk, R&B, Latin, rock, new wave, classical, soul, synth-pop, psychedelia, pop, jazz, and hip hop. He pioneered the Minneapolis sound, a funk rock subgenre that emerged in the late 1970s.He was also known for his prolific output, releasing 39 albums during his life, with a vast array of unreleased projects left in a vault at his home after his death; it is believed that the vault contains dozens of fully produced albums and over 50 music videos that have never been released, along with various other media.He released hundreds of songs both under his own name and multiple pseudonyms during his life, as well as writing songs that were made famous by other musicians, such as "Nothing Compares 2 U" and "Manic Monday". Estimates of the complete number of songs written by Prince range anywhere from 500 to well over 1,000.
    </section>
    </div>
    <div class= "achievments">
       <a href="#" class="active">Achievements</a>
       <a href="#">Academy Awards. Best Original Song Score - "Purple Rain" - 1985.</a>
        <a href="#">Golden Globes.</a>
    </div>
    <div class= "songs">
        <a href="#" class="active">Songs</a>
        <a href="#">Kiss (1986)</a>
        <a href="#">Raspberry Beret (1985)</a>
    </div>
</div>
</body>
</html>
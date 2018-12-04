<?php
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
		<link rel=icon href="/FinalProject/images/Smash_Ball.png">
		<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
        <link rel=stylesheet href="/FinalProject/css/layout.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="home.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body onload="startTime()">
		<div class=wrapper>
			<div class="navbar">
				<a href="/FinalProject/">Home</a>
				<a href="/FinalProject/characters/">Characters</a>
				<div class="dropdown">
					<button class="dropbtn">Tier Lists 
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content">
						<a href="/FinalProject/tier-lists/make-a-tier-list/">Create Tier List</a>
						<a href="/FinalProject/tier-lists/">How to make a tier list</a>
					</div>
				</div> 
				<a id=login href="/FinalProject/login/">
					<?php
						if($_SESSION["loggedIn"] == true){
							echo "Logout";
						}
						else{
							echo "Login";
						}
					
					?>
					</a>
			</div>
			<div class="body">
				<h1>
					Welcome to my Super Smash Bros. fan site!
				</h1>
				<h2>
					Smash Ultimate releases in:
				</h2>
				<div id=timer-container>
					<div id=timer></div>
				</div>

				<br>
				<br>

				<h2>
					Let us enter the World of Light!
				</h2>

				<div id=video>
					<iframe src="https://www.youtube.com/embed/WShCN-AYHqA?origin=http://ec2-18-222-178-32.us-east-2.compute.amazonaws.com" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>

				<br>
				<br>


				<div class=paragraph-container>
					<p>
						On this site you can make your own tier lists of characters when you are logged in. When not logged in, feel free to look at the bios of the case. This game will most likely be the best smash game to come out. So, make sure you study up or you will get your butt kicked by the creator of this website: John Michael Oatey. Have a smashing day.
					</p>
				</div>
			</div>	
			<div class="footer">
				<div id=footer-info>
					All Rights go to Nintendo
				</div>
			</div>
		</div>

		<script src="home.js"></script>
		<script src="/FinalProject/javascript/getScreen.js"></script>
    </body>
</html>
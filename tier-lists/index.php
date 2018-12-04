<?php
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>How to make a tier list</title>
		<link rel=icon href="/FinalProject/images/Smash_Ball.png">
        <link rel=stylesheet href="/FinalProject/css/layout.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel=stylesheet href="about-tier-list.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
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
				<h2>How to make a Tier List</h2>
				
				<img src=/FinalProject/images/bigpicture.jpg>
				<div class=paragraph-container>
					<p>First I should say what a tier list is. It is a way to rank things by group. S tier is the best while D is the worst. In general, a fighter of rank A will beat most in rank B. The tier list on the "Make a tier list" page will let you drag and drop fighters when logged in.</p>
				</div>
			</div>
			<div class=footer>
				<div id=footer-info>
					All Rights go to Nintendo
				</div>
			</div>
		</div>

		<script src="home.js"></script>
		<script src="/FinalProject/javascript/getScreen.js"></script>
    </body>
</html>
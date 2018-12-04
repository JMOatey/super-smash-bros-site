<?php
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Fighters</title>
		<link rel=icon href="/FinalProject/images/Smash_Ball.png">
		<link rel=stylesheet href="/FinalProject/css/layout.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel=stylesheet href="characters.css">
		<link href="https://fonts.googleapis.com/css?family=Black+Ops+One" rel="stylesheet">
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
				<a id=login href="/FinalProject/login/">Login</a>
			</div>
			<div class="body">
				<div class=paragraph-container>
					<table>
						<tr>
							<td class=fighter-name colspan="3">
								<h1>
									Marth
								</h1>
							</td>
						</tr>
						<tr>
							<td class=fighter-image rowspan="2">
								<img src="/FinalProject/images/characters/marth.jpg">	
							</td>
							<td class=pro-con>
								<p>
									Pros: Extremely good at edge-guarding and spacing
								</p>
							</td>
						</tr>
						<tr>
							<td class=pro-con>
								<p>
									Cons: Can easily fall when pressured up close or from afar
								</p>
							</td>
						</tr>
						<tr>
							<td class=fighter-paragraph colspan="2">
								<p>
									Marth is easily one of the best characters in any of the smash games that he's in. He is really fun to play and the satisfaction of landing a hit at the tip of his sword is one of the best in all of video games.
								</p>
							</td>
						</tr>
						
					</table>
					
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
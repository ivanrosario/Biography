<!DOCTYPE html>
<html>
<head>
	<title>Ivan Rosario</title>
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
	<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
	<script src="javascript/js/app.js"></script>
</head>
<body>
	<header>
		<div id="banner"></div>
		<nav>
			<ul class="nav">
				<li><a  href="index.php">Home</a></li>
				<li><a  href="biography.php">Biography</a></li>
				<li><a  href="Resume.php">Resume</a></li>
				<li><a  href="codepen.php">CodePen</a></li>
				<li><a  href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</header>
	<div class="MyExperience">
		<h1 >My Experience</h1>
		<figure>
			<img id="ivan" src="img/ivan.png" alt="a image of Ivan Rosario">
			<figcaption> Ivan Rosario</figcaption>
		</figure>
		<p>	
			The R2H Program is a life changing experience. I enjoy everyday of the program You get to meet all sorts of 
			people with different backgrounds. The skills that you pick up are skills that change people's lives for the 
			better good.This is a program that I recommend to other young motivated adults.
		</p>
		<h2> What is RoadtoHire? </h2>
		<!-- embeded vid of R2H -->
		<iframe class="video" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Froadtohire%2Fvideos%2F843532572451422%2F"></iframe>
	</div>
	<!-- R2H paths -->
	<div class= "paths">
		<h2> Career Paths </h2>
		<div class="GraduateSales">
			<h3>Sales Path</h3>
			<figure>
				<img class="GraduateSales" src="img/chino.png" alt="img of Juan Rosario who graduated from r2h">
				<figcaption> 
					Juan is a Graduate from the previous Sales Academy, he now works at Red Ventures as a SSA agent 
					road to hire prepared him for the role he now fills. The sales path trains you in soft skills 
					and helps you obtain a job at Red Ventures within the sales department.
				</figcaption>
			</figure>
		</div>
		<div class="GraduateTech">
			<h3>Tech Path</h3>
				<figure>
					<img class="GraduateTech" src="img/jose.png" alt="img of Jose Perez who graduated from r2h">
					<figcaption>
						Jose Perez is a Graduate from the previous tech academy he now works at Red ventures as a 
						jr web developer, road to hire prepared him for the role he now fills. The tech path also 
						provides you with soft skills not only that but also gives you the skills to become a 
						software engineer and break out of the poverty line.
					</figcaption>
				</figure>
		</div>
	</div>
	<!-- bottom footer so user doesnt have to go back up  -->


<?php include("footer.php"); ?>



<!-- * Home page - Banner image, an introduction to the main sections of the website. Information about your participation in the R2H program.
* Biography page - Introduce yourself to the world
* Resume page - Professional resume
* CodePen page - Descriptions and links to the weekly challenges and any other challenges you complete
* Gallery page - minimum 12 images with captions. 
* Contact page - contact form with Name, Email, Phone, Company, Comments/Questions. You may add your phone and/or mailing address if you like. To submit the form, name, phone and email are required. Use JavaScript to make sure those fields are filled in and do not submit the form if they are not. Provide error message to user instead.
* Footer: social media links. LinkedIn required. Link to http://road2hire.org/

 -->
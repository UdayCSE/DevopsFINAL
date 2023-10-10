<!DOCTYPE HTML>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Evento: An Event Manager</title>
		<!-- <meta charset="utf-8" /> -->
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" /> -->
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<!--<php  require 'utils/styles.php';?> -->
	</head>
	
	<body class="is-preload">
	<?php require 'utils/header.php'; ?>
		<!-- Header 
			<header id="header">
				<h1><a href="index.php">Evento</a></h1>
				<nav>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="register.php">Register</a></li>
						<li><a href="contact.php">Contact Us</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="login_form.php">Admin</a></li>
						<li class="btnlogout"><a class = "btn btn-default navbar-btn" href = "login_form.php">LOG in <span class = "glyphicon glyphicon-log-in"></span></a></li>
					</ul>
				</nav>
			</header> -->

		<!-- Intro -->
			<section id="intro" class="main style1 dark fullscreen">
				<div class="content">
					<header>
						<h2>EVENTO</h2>
					</header>
					<p>Welcome to <strong>Evento</strong>. Evento is your go-to platform for college event registration. 
						We're dedicated to making the process of signing up for and participating in college events as smooth and
						 convenient as possible. Evento has been carefully designed with the needs and interests of college students in mind.
						Click the arrow below to explore more.</p>
					<footer>
						<a href="#one" class="button style2 down">More</a>
					</footer>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="main style2 right dark fullscreen">
				<div class="content box style2">
					<header>
					<?php $id=1;
                        echo
                             '<a class="btn btn-default"  href="viewEvent.php?id='.$id.'"> <h2>Technical Events</h2></a>'
                        ?>
					</header>
					<p>Explore the world of technology at Technical Events! 
					Learn the latest skills and trends from industry experts and 
					get inspired to create something amazing. Join us and be part of the technical revolution.</p>
					
				</div>
				<a href="#two" class="button style2 down anchored">Next</a>
			</section>

		<!-- Two (onstage)-->
			<section id="two" class="main style2 left dark fullscreen">
				<div class="content box style2">
					<header>
					<?php $id=2;
                        echo
                             '<a class="btn btn-default"  href="viewEvent.php?id='.$id.'"> <h2>Gaming Events</h2></a>'
                        ?>
					</header>
					<p>Are you ready to get your gaming fix? Look no further than Gaming Events,
						 the go-to source for all your gaming needs! Join us today to get access 
						 to the best gaming events from colleges all across the country.</p>
				</div>
				<a href="#three" class="button style2 down anchored">Next</a>
			</section>

      <!-- Three (gaming)-->
			<section id="three" class="main style2 right dark fullscreen">
				<div class="content box style2">
					<header>
					<?php $id=3;
                        echo
                             '<a class="btn btn-default"  href="viewEvent.php?id='.$id.'"> <h2>On-Stage Events</h2></a>'
                        ?>
					</header>
					<p>Ready to take your performance to the next level? On Stage Events is the perfect platform to show
					   off your talent! Join us and explore the world of college festivals - from music and drama to comedy and 
					   more.</p>
				</div>
				<a href="#four" class="button style2 down anchored">Next</a>
			</section>


      <!-- Four (offstage)-->
			<section id="four" class="main style2 left dark fullscreen">
				<div class="content box style2">
					<header>
					<?php $id=4;
                        echo
                             '<a class="btn btn-default"  href="viewEvent.php?id='.$id.'"> <h2>Off-Stage Events</h2></a>'
                        ?>
					</header>
					<p>Explore the creative side of college life! Off Stage Events brings you exciting 
						college festival events like creative writing, art, and more. 
						Join us for an unforgettable experience and discover your talents</p>
				</div>
				<a href="#work" class="button style2 down anchored">Next</a>
			</section>

		<!-- Work -->
			<section id="work" class="main style3 primary">
				<div class="content">
					<header>
						<h2>Major Events.</h2>
						<p>Have a glimpse of the major events that occured in the recent past. 
						</p>
					</header>

					<!-- Gallery  -->
						<div class="gallery">
							<article class="from-left">
								<a href="assets/images/events/01.jpg" class="image fit"><img src="assets/images/events/01.jpg" title="Utsav 2023 Regalia BMSCE" alt="" class="gall img"/></a>
							</article>
							<article class="from-right">
								<a href="assets/images/events/02.jpg" class="image fit"><img src="assets/images/events/02.jpg" title="8th Mile 2023 RVCE" alt="" class="gall img"/></a>
							</article>
							<article class="from-left">
								<a href="assets/images/events/03.jpg" class="image fit"><img src="assets/images/events/03.jpg" title="Utsav 2023: Whiplash" alt="" class="gall img"/></a>
							</article>
							<article class="from-right">
								<a href="assets/images/events/04.jpg" class="image fit"><img src="assets/images/events/04.jpg" title="Utsav 2023: Whiplash" alt="" class="gall img"/></a>
							</article>
							<article class="from-left">
								<a href="assets/images/events/05.jpg" class="image fit"><img src="assets/images/events/05.jpg" title="RE Hunter 350 Tour" alt="" class="gall img"/></a>
							</article>
							<article class="from-right">
								<a href="assets/images/events/06.jpg" class="image fit"><img src="assets/images/events/06.jpg" title="8th Mile: Verve" alt="" class="gall img"/></a>
							</article>
						</div>

				</div>
			</section>

		<!-- Contact -->
			<section id="contact" class="main style3 secondary">
				<div class="content">
					<header>
						<h2>Click below to register.</h2>
					</header>
					
					<div class="box">	
						<form action="register.php" method="GET">
						  <ul class="actions special">
								<li><input type="submit" value="Register" /></li>
						  </ul>
					    </form>
					</div>
					<!-- <div class="box">
						<header>
							<h1>Click below to register.</h1>
							
						</header>
						<form method="post" action="#">
							 <div class="fields">
								<div class="field half"><input type="text" name="name" placeholder="Name" /></div>
								<div class="field half"><input type="email" name="email" placeholder="Email" /></div>
								<div class="field"><textarea name="message" placeholder="Message" rows="6"></textarea></div>
							</div> 
						</form>
					</div> -->
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">

				<!-- Icons -->
					<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
					</ul>

				<!-- Menu -->
					<ul class="menu">
						<li>&copy; 2023 By: Uday Shivanna and team.</li>
					</ul>

			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
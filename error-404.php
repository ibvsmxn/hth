<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Page Not Found! | Helping the Homeless | MAKING A CHANGE</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="FontAwesome/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:100,400|News+Cycle|Titillium+Web:200" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="AnimateCSS/animate.css">
		<script src="scripts/the-scripts.js"></script>
		<script src="scripts/wow.min.js"></script>
	</head>
	<body onload="SplashScreenDismiss()" id="skrollr-body">

	<div class="splash-screen">
		<div class="container">
			<h1>Helping The Homeless</h1>
			<h2>Making a change</h2>
			<br>
			<i class="fa fa-circle-o-notch" aria-hidden="true"></i>
		</div> <!-- Ends Div Class Container -->
	</div> <!-- Ends Div Class Splash Screen -->

	<header class="wow fadeInDown" data-wow-delay="3.5s" data-0="background-color:rgba(0,0,0,0);padding:50px;border-bottom:1px solid rgba(255,255,255,0);" data-50="background-color:rgba(0,0,0,0.75);padding:0px;border-bottom:1px solid rgba(255,255,255,0.25)">
			<div class="container">
				<h1 class="title" data-0="font-size:3em;" data-50="font-size:2em;"><a href="index.php">Helping The Homeless</a></h1>
				<div class="menu-toggler">
					<a href="javascript:void(0)" class="open-menu-button" data-0="border:1px solid rgba(255,255,255,0.25);" data-50="border:1px solid rgba(255,255,255,0);border-left:1px solid rgba(255,255,255,0.25);border-right:1px solid rgba(255,255,255,0.25);" onclick="openNav()">&#9776;</a>
				</div><!-- Ends Div Class Menu Toggler -->
				<!-- <div class="donate-button">
					<a href="#">Donate</a>
				</div> -->
			</div> <!-- Ends Div Class Container -->
	</header>

	<div id="myNav" class="overlay big-event">
		<div class="menu">	
			<div class="menu-title">
				<h4 id="timed-greeting" onload="timeGreet()">Welcome to HTH.</h4>
				<h1>Menu</h1>
			</div> <!-- Ends Div Class Menu Title -->
			<div class="section-content">
				<h2 class="section-content-title">Big Event 2018 is coming soon.</h2>
				<h4 class="section-name-title">Day event &amp; Night Event </h4>
				<h3>Buy tickets now to avoid missing out.</h3>
				<br>
				<a class="cta" href="big-event.php">Find out more</a>
				<a class="cta highlight" href="#">Purchase Tickets</a>
			</div> <!-- Ends Div Class Section Content -->
		</div> <!-- Ends Div Class Menu -->
	</div> <!-- Ends Div ID MyNav & Class Overlay (Big Event) -->

	<div id="myNav-2" class="overlay-2">
		<div class="menu-2">
			<div class="container">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<div class="col-md-6">
				<ul>
					<a href="index.php">Home</a>
					<a href="about-us.php">About Us</a>
					<a href="#">Latest News</a>
					<a href="#">Shop</a>
					<a href="contact-us.php">Contact Us</a>
					<a href="big-event.php">Big Event</a>
					<a href="get-involved.php">Get Involved</a>
					<a href="#">Gallery</a>
					<a href="#">Site Information</a>
					<a href="donate.php">Donate</a>
				</ul>
			</div> <!-- Ends Div Class Column -->
			</div><!-- Ends Div Class Container -->
		</div> <!-- Ends Div Class Menu -->
	</div> <!-- Ends Div ID MyNav 2 & Class Overlay 2 -->

	<div data-0="background-color:rgba(0,0,0,0);" data-260p="background-color:rgba(0,0,0,0.0);" data-270p="background-color:rgba(0,0,0,0.75);" class="social-section wow fadeInLeft" data-wow-delay="10s">
		<i class="fa fa-facebook" aria-hidden="true"></i>
		<i class="fa fa-twitter" aria-hidden="true"></i>
		<i class="fa fa-snapchat-ghost" aria-hidden="true"></i>
		<i class="fa fa-youtube-play" aria-hidden="true"></i>
		<i class="fa fa-envelope-o" aria-hidden="true"></i>
	</div> <!-- Ends Div Class Social Section -->

	<div class="error404-page">
		<div class="jumbotron text-center wow fadeIn" data-wow-delay="4s">
			<div class="jumbotron-dim">
				<div class="container">
					<h1 class="wow fadeInLeft" data-wow-delay="4s">Error 404 - Page not found!</h1>
					<br>
					<p class="wow fadeInLeft" data-wow-delay="5s"><strong>You've probably arrived at this page due to an error. </strong></p>
					<br>
					<br>
					<a class="cta-main wow fadeIn" data-wow-delay="6s" href="#">Revert to previous page</a>
					<a class="cta-main highlight wow fadeIn" data-wow-delay="6.5s" href="index.php">Homepage</a> 
				</div> <!-- Ends Div Class Container -->
			</div><!-- Ends Div Class Jumbotron Dim -->
		</div>

	</div> <!-- Ends Div Class Error 404 Page -->

	<div class="back-to-top" data-0="bottom:-150px" data-600="bottom:0px" onclick="scrollToTop()">
		<span>Back to top <i class="fa fa-chevron-up" aria-hidden="true"></i></span>
	</div> <!-- Ends Div Class Back To Top -->

	<footer class="wow fadeInUp" data-wow-delay="1s">
		<script src="scripts/wow-init.js"></script>
		<div class="footer-dim">
			<div class="container">
				<div class="row">
					<div class="col-xs-6 col-md-2 col-md-offset-4 wow fadeInLeft" data-wow-delay="2s" style="text-align: right; border-right: 1px solid #b2afab">
						<a class="footer-link" href="index.php"><li>Home</li></a>
						<a class="footer-link" href="about-us.php"><li>About</li></a>
						<a class="footer-link" href="#"><li>Shop</li></a>
						<a class="footer-link" href="contact-us.php"><li>Contact Us</li></a>
						<a class="footer-link" href="big-event.php"><li>Big Event</li></a>
					</div> <!-- Ends Column -->
					<div class="col-xs-6 col-md-2 wow fadeInRight" data-wow-delay="2s" style="text-align: left;">
						<a class="footer-link" href="get-involved.php"><li>Get Involved</li></a>
						<a class="footer-link" href="#"><li>Gallery</li></a>
						<a class="footer-link" href="#"><li>Site Info</li></a>
						<a class="footer-link" href="#"><li>Latest News</li></a>
						<a class="footer-link" href="donate.php"><li>Donate</li></a>
					</div> <!-- Ends Column -->
				</div> <!-- Ends Div Class Row -->

				<div class="row">
					<div class="footer-fw">
						<div class="col-xs-12">
							<a href="#"><i class="fa fa-facebook wow fadeIn" data-wow-delay="1s" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-twitter wow fadeIn" data-wow-delay="1.5s" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-snapchat-ghost wow fadeIn" data-wow-delay="2s" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-youtube-play wow fadeIn" data-wow-delay="2.5s" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-envelope-o wow fadeIn" data-wow-delay="3s" aria-hidden="true"></i></a>
						</div> <!-- Ends Div Class Column -->
					</div> <!-- Ends Div Class Footer Full Width -->
				</div> <!-- Ends Div Class Row and Footer Full Width -->

				<div class="row">
					<div class="col-xs-12">
						<br>
						<span class="footer-copyright wow fadeInUp"> &copy;  <?php echo date("Y"); ?> Helping The Homeless, Making a Change 4.0 by <strong><a href="http://www.dandre.rf.gd" target="_blank"> D'Andr&eacute; T Phillips</a></strong> </span>
					</div> <!-- Ends Div Class Column -->
				</div> <!-- Ends Div Class Row -->
			</div> <!-- Ends Div Class Container -->
		</div><!-- Ends Div Class Footer Dim -->
	</footer>

	<script type="text/javascript" src="Skrollr/skrollr.min.js"></script>
	<script src="scripts/the-scripts.js"></script>
	</body>
</html>

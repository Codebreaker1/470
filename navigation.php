<?php include('header.php'); ?>
<?php include('dbconn.php'); ?>
<?php include('config.php'); ?>
<?php

 session_start();
 error_reporting(0);
session_start();
if (!isset($_SESSION['user'])) {
    header('location:logout.php');
}


$userID = $_SESSION['user'];

//echo $userID;
$checkIfThisUserHasProfile = "SELECT id FROM user_profile WHERE user_id=" . $userID;
$result = mysql_query($checkIfThisUserHasProfile);
$count = mysql_num_rows($result);

 
 ?>
<html>

	<head>
		<title>ShastoDarpon</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>

	<body class="landing">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span><?php echo $userID; ?></span></a>
									<div id="menu">
										<ul>
											<li><a href="index.html">Home</a></li>
											<li><a href="generic.html">Generic</a></li>
											<li><a href="elements.html">Elements</a></li>
										
											<li><a href="logout.php">log out</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>Shastho Darpon</h2>
              <p>   Reflecting Health, Reflecting life    <br />
            </p>
							<ul class="actions">
								<li><a href="registration.php" class="button special">Life Style</a></li>
								<li><a href="reg.php" class="button special">Insert report</a></li>
								<li><a href="/471/res/check.php" class="button special">Results</a></li>


							</ul>
						</div>
						<a href="#one" class="more scrolly">Learn More</a>
					</section>

				<!-- One -->
				

				<!-- Two -->
		

				<!-- Three -->
				

				<!-- CTA -->
				

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; All rights Reserved</li><li></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
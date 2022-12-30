<?php

require 'classes/db.php';

require 'classes/safe.php';

$db1=new Database();

$myQuery1=$db1->getRow(" Call sp_About()");

?>

<!DOCTYPE html>

<html lang="en">

<head>

	<title>hntr.tech</title>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



	<link rel="stylesheet" href="css/animate.css">



	<link rel="stylesheet" href="css/owl.carousel.min.css">

	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<link rel="stylesheet" href="css/magnific-popup.css">





	<link rel="stylesheet" href="css/flaticon.css">

	<link rel="stylesheet" href="css/style.css">

	<link rel="shortcut icon" href="images/h.png" />

</head>

<body>

<div id="colorlib-page">

	<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>

	<aside id="colorlib-aside" role="complementary" class="js-fullheight">



		<h1 id="colorlib-logo" class="mb-4 mb-md-5"><a href="index.php" style="background-image: url(images/bg_2.jpg);"><?php echo $myQuery1->site_name; ?></a></h1>

		<nav id="colorlib-main-menu" role="navigation">

			<ul>

				<li class="colorlib-active"><a href="index.php">ANASAYFA</a></li>

				<li><a href="about.php">HAKKIMIZDA</a></li>

				<li><a href="services.php">HİZMETLERİMİZ</a></li>

				<li><a href="contact.php">İLETİŞİM</a></li>

				<li><a href="blog.php">BLOG</a></li>

			</ul>

		</nav>

		<div class="colorlib-footer">

		<p class="pfooter">

			Tüm Hakları Saklıdır.<br>

			Copyright &copy; <script>document.write(new Date().getFullYear());</script><br>

			<a href="https://hntr.tech" target="_blank"><i class="fa fa-globe" aria-hidden="true"></i> hntr.tech</a>

			</p>

		</div>

	</aside> <!-- END COLORLIB-ASIDE -->
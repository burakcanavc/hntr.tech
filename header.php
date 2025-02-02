<?php

require 'classes/db.php';

require 'classes/safe.php';

$db1=new Database();

$myQuery1=$db1->getRow(" Call sp_About()");
/* Menüdeki aktif sayfayı renkli gösterme işlemi */
switch($title){
	case '':
		$activePage1="colorlib-active";
		break;
	case 'Hakkımızda • ':
		$activePage2="colorlib-active";
		break;
	case 'Hizmetlerimiz • ':
		$activePage3="colorlib-active";
		break;
	case 'İletişim • ':
		$activePage4="colorlib-active";
		break;
	case 'Blog • ':
		$activePage5="colorlib-active";
		break;			
}
/*İşlem Sonu */

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-H8CYZ2B2PC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-H8CYZ2B2PC');
</script>

	<title><?php echo $title;?><?php echo $myQuery1->site_name;?></title>

	<meta charset="utf-8">

    <meta name="description" content="Hntr Tech. website ve mobil uygulama ihtiyaçlarınız için her türlü desteğe hazır. Websitemizi ziyaret edebilir ve bizimle iletişime geçebilirsiniz.">

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

		<h1 id="colorlib-logo" class="mb-4 mb-md-5"><a href="/" style="background-color:#fff;"><?php echo $myQuery1->site_name; ?></a></h1>

		<nav id="colorlib-main-menu" role="navigation">

			<ul>

				<li class="<?=$activePage1?>"><a href="/">ANASAYFA</a></li>

				<li class="<?=$activePage2?>"><a href="hakkimizda">HAKKIMIZDA</a></li>

				<li class="<?=$activePage3?>"><a href="hizmetlerimiz">HİZMETLERİMİZ</a></li>

				<li class="<?=$activePage4?>"><a href="iletisim">İLETİŞİM</a></li>

				<li class="<?=$activePage5?>"><a href="blog">BLOG</a></li>

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
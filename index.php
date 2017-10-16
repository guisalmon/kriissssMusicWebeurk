<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Pi controle</title>
		<meta charset="utf-8" />
		<meta http-equiv="refresh" content="2" >
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<link rel="apple-touch-icon" sizes="180x180" href="/fav/apple-touch-icon.png?v=1">
		<link rel="icon" type="image/png" sizes="32x32" href="/fav/favicon-32x32.png?v=1">
		<link rel="icon" type="image/png" sizes="194x194" href="/fav/favicon-194x194.png?v=1">
		<link rel="icon" type="image/png" sizes="192x192" href="/fav/android-chrome-192x192.png?v=1">
		<link rel="icon" type="image/png" sizes="16x16" href="/fav/favicon-16x16.png?v=1">
		<link rel="manifest" href="/fav/manifest.json?v=1">
		<link rel="mask-icon" href="/fav/safari-pinned-tab.svg?v=1" color="#5bbad5">
		<link rel="shortcut icon" href="/fav/favicon.ico?v=1">
		<meta name="apple-mobile-web-app-title" content="Pi Audio">
		<meta name="application-name" content="Pi Audio">
		<meta name="msapplication-TileColor" content="#2b5797">
		<meta name="msapplication-TileImage" content="/fav/mstile-144x144.png?v=1">
		<meta name="msapplication-config" content="/fav/browserconfig.xml?v=1">
		<meta name="theme-color" content="#ffffff">
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1>Pi</h1>
						<p></p>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Content -->
<?php
if ( isset($_GET['ret']) AND !empty($_GET['ret']) ) {
echo '<section id="erreur" class="main">';
echo '<div class="spotlight">';
echo '<div class="content">';
echo '<header class="major">';
echo '<h2>Erreur</h2>';
echo '</header>';
echo '<p>';
echo $_GET['ret'];
echo '</p>';
echo '</div></div>';
echo '</section>';
}?>
							<section id="content" class="main">
									<section>
										<ul class="actions fit">
<?php
$id = file_get_contents("/gpio/id");
?>
											<li><a href="set.php?id=3" class="<?php if ($id==3){ echo "button special fit";} else { echo "button fit";}?>">FreeBox</a></li>
											<li><a href="set.php?id=4" class="<?php if ($id==4){ echo "button special fit";} else { echo "button fit";}?>">Tv</a></li>
											<li><a href="set.php?id=5" class="<?php if ($id==5){ echo "button special fit";} else { echo "button fit";}?>">Cyke</a></li>
										</ul>
										<ul class="actions fit">
											<li><a href="set.php?id=2" class="<?php if ($id==2){ echo "button special fit";} else { echo "button fit";}?>">Kriss</a></li>
											<li><a href="set.php?id=1" class="<?php if ($id==1){ echo "button special fit";} else { echo "button fit";}?>">Salon</a></li>
										</ul>
									</section>
								</section>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
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

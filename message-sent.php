<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = "Message from Portfolio";
$message = $_POST['message'];

$mailHeader = "From:".$name."<".$email.">\r\n";

$recipient = "ethansanderson0@gmail.com";

mail($recipient, $subject, $message, $mailHeader) or die("Error sending message.");

?>
<html>
	<head>
		<title>Ethan Sanderson</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<?php include 'navbar.php' ?>

				<!-- Main -->
					<div id="main">
						<header>
							<h2>Success!</h2>
							<p>Your message was sent, I will get back to you as soon as possible!</p>
						</header>
						<!-- Posts -->
					</div>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Ethan Sanderson</li><li>Design: <a href="https://html5up.net" target="_blank">HTML5 UP</a></li></ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
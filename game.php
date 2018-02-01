	<?php
	session_start(); //now it is possible to use global variable "$_SESSION" to send data between many ".php scripts"
	
	if(!isset($_SESSION['logIn']) || ($_SESSION['logIn']==false)){
		header('Location: index.php');
		exit();
	}
?>
	<!DOCTYPE HTML>
<html lang="ang">
	<head>
		<meta charset="utf-8" />
		<title>Gallows - login</title>
		
		<link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700&amp;subset=latin-ext" rel="stylesheet">
		<link rel="stylesheet" href="style.css" type="text/css" />
		<script src="gallows.js"></script>
		
	
	</head>
	<body>
	
		<div id="container">
			<div id="board"></div>
			<div id="gallows">
				<img src="img/s0.jpg" alt="" />
			</div>
			<div id="alphabet"></div>
			<div id="logout">
				<a class="logout" href="logout.php">LOG OUT</a>
			</div>
		</div>
		
	</body>
</html>

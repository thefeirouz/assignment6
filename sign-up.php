<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Newsletter Sign Up | Assignment 6</title>
	<link rel="stylesheet" href="css/styles-three.css">
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans|IBM+Plex+Serif" rel="stylesheet">
</head>
<body class="grid-container">
	<section class="head">
		<?php include "inc/logo.inc"; ?>
	</section>

	<section class="nav-bar">
		<?php include "inc/nav.inc"; ?>
	</section>

	<section class="sign-up">
		<h1>Sign Up For Our Overwatch Newsletter!</h1>
		<form method="post" action="insert.php">

			<div>
				<label for="first">First Name: </label>
				<input type="text" name="first" id="first">
			</div>

			<div>
				<label for="last">Last Name: </label>
				<input type="text" name="last" id="last">
			</div>

			<div>
				<label for="email">E-mail: </label>
				<input type="email" name="email" id="email">
			</div>

			<input type="submit" value="Sign Up!">
			<input type="hidden" name="redirect" value="info.php">

		</form>
	</section>

<?php include "inc/scripts.inc"; ?>
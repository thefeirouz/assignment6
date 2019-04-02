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
				<div class="labels">
				<label for="first">First Name: </label>
				</div>
				<div class="response">
				<input type="text" name="first" id="first" placeholder = "Your First Name...">
				</div>
			</div>

			<div>
				<div class="labels">
				<label for="last">Last Name: </label>
				</div>
				<div class="response">
				<input type="text" name="last" id="last" placeholder = "Your Last Name...">
				</div>
			</div>

			<div>
				<div class="labels">
				<label for="email">E-mail: </label>
				</div>
				<div class="response">
				<input type="email" name="email" id="email" placeholder = "Your Email...">
				</div>
			</div>

			<div class="button"><input type="submit" value="Sign Up!"></div>
			<input type="hidden" name="redirect" value="info.php">

		</form>
	</section>

<?php include "inc/scripts.inc"; ?>
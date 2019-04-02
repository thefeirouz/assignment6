<?php
	// 1. Create a database connection


	// Usually this data would come from HTML form values in $_POST
	require_once("config.php");

	// This data is coming from HTML form values in $_POST
	$insertFirstName = $_POST["first"];
	$insertLastName = $_POST["last"];
	$insertEmail = $_POST["email"];

	// You really should escape all strings
	$insertFirstName = mysqli_real_escape_string($connection, $insertFirstName);
	$insertLastName = mysqli_real_escape_string($connection, $insertLastName);
	$insertEmail = mysqli_real_escape_string($connection, $insertEmail);
	
	// 2. Perform database query
	$query  = "INSERT INTO mytable (firstname, lastname, email) VALUES ('$insertFirstName','$insertLastName ','$insertEmail')";
	$result = mysqli_query($connection, $query);

?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Database Insert | Assignment 6</title>
	<link rel="stylesheet" href="css/styles-four.css">
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans|IBM+Plex+Serif" rel="stylesheet">
</head>
<body class="grid-container">
	<h1>Success!</h1>

<?php
	if ($result) {
		echo "You have signed up for our newsletter! Click the link below to learn more about Overwatch!";
?>
<?php
	} else {
		die("Database query failed.");
	}
?>
	<div>
	<a href="index.php">Click here to return to the home page!</a>
	<div>
	<a href="more-info.php">Click here to learn more!</a>
</body>
</html>

<?php
	// 4. Step 4 is unnecessary here because we didn't 
	//	  get data that needs to be released
	//mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>
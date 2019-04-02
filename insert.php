<?php
	// 1. Create a database connection
	require_once("config.php");

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
	<title>Database Insert</title>
</head>
<body>

	<h1>Database Insert</h1>

<?php
	if ($result) {
		echo "Success! - the query seemed to work! (At least it didn't error-out.)";
?>
<?php
	} else {
		die("Database query failed.");
	}
?>
</body>
</html>

<?php
	// 4. Step 4 is unnecessary here because we didn't 
	//	  get data that needs to be released
	//mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>
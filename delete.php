<?php
// connect to the database
include('config.php');

// check if the 'id' variable is set in URL, and check that it is valid
if (isset($_POST['id']) && is_numeric($_POST['id'])) {
	
	// get id value
	$id = $_POST['id'];

	// delete the entry
	$result = mysqli_query($connection, "DELETE FROM test WHERE id=$id");

}

// redirect back to the homepage to see the results
header("Location: new-read.php");

?>
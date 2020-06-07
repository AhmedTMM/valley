<?php
// Change this to your connection info.
require 'config/constants4.php';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['clan'], $_POST['name'])) {
	// Could not get the data that should have been sent.
	exit('Complete all data, else log in');
}


// Make sure the submitted registration values are not empty. 
if (empty($_POST['clan']) ||  empty($_POST['name'])) {
	// One or more values are empty.
	exit('Please complete the registration form');
}



// We need to check if the account with that clan exists.




if ($stmt = $con->prepare('SELECT id, name FROM requests WHERE clan = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash the ab using the PHP ab_hash function.
	$stmt->bind_param('s', $_POST['clan']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows < 0) {
		// clan already exists
		echo 'clan exists, please choose another!';
	} else {
		// clan doesnt exists, insert new account
		if ($stmt = $con->prepare('INSERT INTO requests (clan, name) VALUES (?, ?)')) {
	
	
	$stmt->bind_param('ss', $_POST['clan'], $_POST['name']);
	$stmt->execute();
	echo 'You have successfully registered, you can now login!';
} else {
	// Something is wrong with the sql statement, check to make sure requests table exists with all 3 fields.
	echo 'Could not prepare statement 1!';
}
	}
	$stmt->close();
} else {
	// Something is wrong with the se654ql statement, check to make sure requests table exists with all 3 fields.
	echo 'Could not prepare statement! 2';
}
$con->close();
?>
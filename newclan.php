<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}

?>





<?php
// Change this to your connection info.
require 'config/constants3.php';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['cname'], $_POST['ab'], $_POST['dc'], $_POST['fl'], $_POST['name'])) {
	// Could not get the data that should have been sent.
	exit('Complete all data, else log in');
}


// Make sure the submitted registration values are not empty. 
if (empty($_POST['cname']) || empty($_POST['ab']) || empty($_POST['dc']) || empty($_POST['fl']) || empty($_POST['name'])) {
	// One or more values are empty.
	exit('Please complete the registration form');
}



// We need to check if the account with that cname exists.


$id = $_SESSION['id'];

if ($stmt = $con->prepare('SELECT id, ab FROM list WHERE cname = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash the ab using the PHP ab_hash function.
	$stmt->bind_param('s', $_POST['cname']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// cname already exists
		echo 'cname exists, please choose another!';
	} else {
		// cname doesnt exists, insert new account
		if ($stmt = $con->prepare('INSERT INTO list (cname, ab, dc, fl, name) VALUES (?, ?, ?, ?, ?)')) {
	
	
	$stmt->bind_param('sssss', $_POST['cname'], $_POST['ab'], $_POST['dc'], $_POST['fl'], $_POST['name']);
	$stmt->execute();
	echo 'You have successfully registered, you can now login!';
	
} else {
	// Something is wrong with the sql statement, check to make sure list table exists with all 3 fields.
	echo 'Could not prepare statement 1!';
}
	}
	$stmt->close();
} else {
	// Something is wrong with the se654ql statement, check to make sure list table exists with all 3 fields.
	echo 'Could not prepare statement! 2';
}
$con->close();
?>
<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}

?>








<!DOCTYPE html>
<html>
	<head>
        <link href="style.css" rel="stylesheet" type="text/css">
		<meta charset="utf-8">
		<title>Register</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
		<div class="register">
			<h1>Join clan</h1>
			<h2>Logged in as: <?=$_SESSION['name']?> </h2>
			<h2> Debug ID: <?=$_SESSION['id']?> </h2>
			<form action="joinc2.php" method="post" autocomplete="off">
				<label for="clan">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="clan" placeholder="Clan name" id="Clan" required>
				<input type="hidden" name="name" value="<?=$_SESSION['name']?>" id="name" required>

				


				
				<p> Provide all information necessary. If you don't have your actual first name, your account will be deleted. If you
					don't have a valid code, your account will be deleted.
				</p>
				<div style="margin-right: 200px; text-decoration: none; ">
				

					<p>Already have a account?</p> <a href="index.html">Log In</a>
	
	
					</div>




				<input type="submit" value="Register">






			</form>

			
		</div>
	</body>
</html>
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
            <h1>New clan</h1>
	<p> Logged in as: <?=$_SESSION['name']?> </p>
			<form action="newclan.php" method="post" autocomplete="off">
				<label for="cname">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="cname" placeholder="Clan name" id="cname" required>
				<label for="ab">
					<i class="fas fa-lock"></i>
				</label>
				<input type="text" name="ab" placeholder="Abbreviation (1-4 letters)" id="ab" maxlength="4" minlength="2" required>
				<label for="dc">
					<i class="fas fa-key"></i>
				</label>
                <input type="text" name="dc" placeholder="Description" id="dc" required>
                



                <div style="margin-right: 180px; text-decoration: none; ">
                    

                <label for="fl">
					<i class="fas fa-key"></i>
				</label>
                <input type="url" name="fl" placeholder="Flag image link" id="fl" required>
                
            </div>

				


				<div style="margin-right: 200px; text-decoration: none; ">
				

					<p>Want to join a clan?</p> <a href="index.html">Join</a>
	
	
					</div>




				<input type="submit" value="Register">


                <input type="hidden" name="name" value="<?=$_SESSION['name']?>" id="name" required>



			</form>

			
		</div>
	</body>
</html>
<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>






<html>
	<head>
        <link href="style.css" rel="stylesheet" type="text/css">
		<meta charset="utf-8">
		<title>Valley</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
		<div class="login">

			<h1>Create Trade</h1>

			
			<a href="home.php"><i class="fas fa-home"></i>Home</a>


			<h3>Logged in as: <?=$_SESSION['name']?></a> </h3>


			
			<form action="add.php" method="post">
			

				




				<label for="tname">
					<i class="fas fa-pen"></i>
				</label>
				<input type="text" name="tname" placeholder="Trade name" id="tname" required>

			
				<label for="dc">
					<i class="fas fa-file-alt"></i>
				</label>
				<textarea name="dc" rows="10" id="dc" cols="41" placeholder=" Trade description" required></textarea>
				

				<label for="price">
					<i class="fas fa-coins"></i>
				</label>

				
				<div>

				<input type="text"  min="0" max="1000" name="price" placeholder="Price (set as zero for other item)" id="price" required>

	</div>

				<div style="margin-right: 180px; margin-top: 10px;">

				<label for="img"> <i class="fas fa-image"></i></label>

				<input type="url" name="img" placeholder=" Paste Image Link Here" id="img" required>

				</div>

				<div style="margin-top: 40px; margin-left: 20px;" class="content">



					<h2>Set Trade Center</h2>

				<select name="tc" id="tc" required>
					<option value="Basking Ridge Park">Basking Ridge Park</option>
					<option value="Percy Park">Percy Park</option>
					<option value="Life Cycles Trailhead">Life Cycles Trailhead</option>
					
				  </select>
				
					  </div>
					  
					  
					  <input type="hidden" name="name" value="<?=$_SESSION['name']?>" id="name" required>



				




				<input type="submit" value="Create">


			</form>
		</div>
	</body>
</html>
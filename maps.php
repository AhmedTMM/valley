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

   <!-- start -->

	<style>
		body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
	</style>	
	<title>Valley</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  
   <! tabs >
   
   <a href="home.php">Valley</a>
  <a href="maps.php">Maps</a>
  <a href="news.php">News</a>
  <a href="profile.php">My Profile</a>
  <a href="trading.php">Trading</a>
  <a href="clans.php">Clans</a>
  <a href="chat.php">Chat</a>
 
  
  <! end >
  
    </div>
	<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

<! actual end >

		
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		
		<nav class="navtop">
			
			<div>
				
				<h1>Valley</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i><?=$_SESSION['name']?></a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Maps and Territory</h2>
			
			
			

		</div>

		<!-- copy paste above for template -->

  <div class="content">
        <h1> Territory system </h1>
   <p> The territory system uses the google earth on the maps page and rocks which have your
       clan's flag painted on them. It sounds dumb, and it kind of is but it actually works. Unlike other systems.
    If you follow the valley system Tyler and Ahmed made, you should place the rocks around the entrances
to your base. Once again, you don't have to. But for the sake of warning people to come on your territory, I would do it.
You must design a flag to paint on your rocks. Use acrylic paint it works the best.  </p>


<h1>Map System </h1>

<p> The map system is run by a google earth project that displays the territories and who owns them. 
    there will be a sort of 'census' every week which you can state as little or as much information as you want.
    (Regarding your clan and it's members and stuff). I don't really care how you run your territory, or your clan,
    you don't even really have to use the map system. It's not that important, but you still should if you want to. </p>


</div>
    <a class="mapbutton" href="https://earth.google.com/earth/rpc/cc/drive?state=%7B%22ids%22%3A%5B%221gsb5ltx3DxyX4VF7UQukZcJnxFBSr0lf%22%5D%2C%22action%22%3A%22open%22%2C%22userId%22%3A%22115168549982821896991%22%7D&usp=sharing">Map</a>


	</body>
</html>
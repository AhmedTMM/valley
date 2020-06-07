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
		<title>title</title>
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
			<h2>How to trade</h2>
			
			
			

		</div>

		<div class="content">

   <p>
    Clans are groups in the valley which has it's own government system and other things. If you're not
    in any clan, you're called a Nomad, which means you're not part of any clan. You can still gain
    money and have a base, but you can't really claim your own territory. To join a clan, go to the clans page to 
    send a request to join one. (on the top right) To create one, listen to the next paragraph. Your clan leader decides 
    the rules and ranks and the rest of the desicions for your clan. You might be able 
    to get a higher rank and make some clan descisions for yourself. Or, you can start your own clan.
    You can get kicked from a clan. If you join a clan that doesn't exist, it will either not work 
    or you will be removed from the clan depending on if I can get that to work. 
   </p>


    

   <p>
    To start your own clan, navigate to the clans page. Click on new clan in the top right corner. It will 
    redirect you to the clan creation form. Fill out the form in full. The clan name part is the name of your clan. 
    The abbreviation part is what will be displayed next to your username. So do something like VR if your clan 
    is called the Valley Republic or something like that. The description is there so you can describe your clan. 
    The flag image link is there so you can add your flag. This is required as it is used to mark your 
    territory. You can contact a moderator to get a unwanted account removed from your clan. 
   </p>








</div>

	</body>
</html>
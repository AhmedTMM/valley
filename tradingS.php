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

<p> To make a trade, it's pretty simple. Click on +Trade at the top right. That will take you 
  to the trading chat room for the valley. Press no to notifications, and then scroll down and 
  press join room. Once again, the password for all chat rooms is 'ValleyChat'. Enter it, then you 
  can trade. To create a trade, type in chat what item you're selling, how much Valleycoin or what item 
  you want in return, a image link to a image of your item, (tutorial on how to shorten image links below) 
  and a description of the item. You also have to add where you will be selling the item, and what time.
  The trade center MUST be one of the following places: Basking Ridge Park, Piercy Park, or the 
  Coyote Creek Life Cycles Trailhead. Don't trade anywhere else for safety reasons. The time must be 
  only between 8:00 AM and 8:00 PM. 

</p>

<p> To trade with someone who has made a trade, all you have to do is direct message them. (check your messages frequently
  By the way, a full tutorial on how to use the chat system is on another page. The direct message will contain
  a image link (only if you're giving a item not valleycoin) to the item you will trade back. Otherwise, 
  say how much valleycoin you will spend. This is to confirm that you know how much you're spending. 
  The seller may change the price if they wish. Other than that, you can discuss how you can trade and at what time 
  and all that. 

</p>

<h2>How to shorten image links and get image links</h2>


<p>To get a image link for your image, you can download the Google Drive app on your phone. Then, take or upload 
  a picture of what you want to turn into a link. Then, you can go onto a computer (or use your phone) 
  Then, you can open the image in google drive. You can get a sharable link by clicking the share button and then 
  clicking 'get sharable link' Change it to anyone with this link can view, and paste your link on wherever it needs 
  to be. This allows anyone with the link you provided to see the image you uploaded. Alternatively, you can 
  register a email and password to the chat system, where then you can upload photos without using a link.
  
</p>






</div>

	</body>
</html>
<?php
session_start();


	require_once "db_connect.php";
	$userID = $_SESSION['id'];
	$query = "SELECT * FROM deliveryman_info WHERE id='$userID'";
	$userData = get($query);
	$userData = $userData[0];

?>

<html>
	<head></head>
	<body>
	    <center><img src="logo2.png" style="height:100px"></center><br/>
		<fieldset align="center">
	    <legend><h1>Deliveryman Profile</h1></legend>
		
		
			<center><h1>Account</h1></center>
			
			
			<h4 style="text-align:center;">Name: <?=$userData['name']?></h4>
			<h4 style="text-align:center;">ID: <?=$userData['id']?></h4>
			<h4 style="text-align:center;">UserName: <?=$userData['uname']?></h4>
			<h4 style="text-align:center;">Email: <?=$userData['email']?></h4>
			<h4 style="text-align:center;">Phone: <?=$userData['phone']?></h4>
			<h4 style="text-align:center;">Gender: <?=$userData['gender']?></h4>
			
			<h4 style="text-align:center;">Birth Date: <?=$userData['birthdate']?></h4>
			
				
				
				
				
			
			
			<center><button  onclick="window.location.href='edit_deliveryman_info.php'">Edit</button> &nbsp; <a href="Home_Delivery.php".php">Home</a></center>
	
		
		</fieldset>	
		</body>
</html>
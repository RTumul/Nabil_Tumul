<?php
session_start();


	require_once "db_connect.php";
	$userID = $_SESSION['id'];
	$query = "SELECT * FROM deliveryman_info WHERE id='$userID'";
	$userData = get($query);
	$userData = $userData[0];
	

?>

<html>
	<head><link rel="stylesheet" type="text/css" href="styles/mystyle.css"></head>
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
			
				
				
				
				
			<table align="center">
			<tr>
			<td><button class="btn-mine "  style="height: 50px; width: 50px;  align: center" onclick="window.location.href='edit_deliveryman_info.php'">Edit</button>
			</td>
           
		   
		   			
			<td><button class="btn-mine "  style="height: 50px; width: 50px;  align: center"  onclick="window.location.href='Home_Delivery.php'"> Home</button>
	         </td>
	</tr>
	</table>
		
		</fieldset>	
		</body>
</html>
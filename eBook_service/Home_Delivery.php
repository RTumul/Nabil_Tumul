<?php
	session_start();
	if(!isset($_SESSION["deliveryman_info"])){
	header("Location: loginDeliveryMan.php");
}
?>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="styles/mystyle.css">
	</head>
	<body>
				  				    
			<center><img src="logo2.png" style="height:100px"></center><br/>
			      
	<form action="" method="post">
		<div class="text-center">
			<a href="doc info.php" class="btn btn-danger">Medicine</a>
			<a href="path.php" class="btn btn-warning">Pathodology</a>			
			<a href="card.php" class="btn btn-danger">Cardology</a>
			<a href="anes.php" class="btn btn-warning">Anesthetics</a>
			<a href="login.php" class="btn btn-primary">Logout</a>		
		</div>
		</fieldset>
	
	
	<br/><br/><br/><br/><hr/><h4 style="text-align:left;">User Name: <?php echo $_SESSION["deliveryman_info"];?></h4>
	<h5 style="text-align:left;">User Type: Delivery Man</h5>
	
	</html>
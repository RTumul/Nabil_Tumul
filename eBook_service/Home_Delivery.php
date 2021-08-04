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
			<a href="#" class="btn btn-danger">Available Work</a>
			<a href="#" class="btn btn-primary">Logout</a>		
		</div>
		</fieldset>
	
	
	<br/><br/><br/><br/><hr/><h4 style="text-align:left;">User Name: <?php echo $_SESSION["deliveryman_info"];?></h4>
	<h5 style="text-align:left;">User Type: Delivery Man</h5>
	
	</html>
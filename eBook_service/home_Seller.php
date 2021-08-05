<?php
	session_start();
	if(!isset($_SESSION["id"])){
	header("Location: loginSeller.php");
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
			<a href="book_upload.php" class="btn btn-danger">Upload A Book</a>
			<a href="seller_profile_info.php" class="btn btn-warning">Edit Information</a>
			
			<a href="loginSeller.php" class="btn btn-primary">Logout</a>		
		</div>
		</fieldset>
	
	
	<br/><br/><br/><br/><hr/><h4 style="text-align:left;">User Name: <?php echo $_SESSION["uname"];?></h4>
	<h5 style="text-align:left;">User Type: Seller</h5>
	
	
	</html>
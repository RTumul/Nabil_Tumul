<?php
	session_start();
	if(!isset($_SESSION["id"])){
	header("Location: loginDeliveryMan.php");
}
?>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="styles/mystyle.css">
	</head>
	<body>
				  				    
		<center><img src="logo2.png" style="height:100px"></center>
		<h4 style="text-align:right;">User Name: <?php echo $_SESSION["uname"];?></h4>
	    <h5 style="text-align:right;">User Type: Delivery Man</h5>
			      
	<form action="" method="post">
		<div class="text-center">
			<a href="#" class="btn btn-primary">My Job</a>
			<a href="deliveryman_profile_info.php" class="btn btn-warning">Edit Information</a>
			<a href="deleteDeliverymanProfile.php" class="btn btn-danger">Delete Account</a>
			<a href="loginDeliveryMan.php" class="btn btn-warning">Logout</a>		
		</div>
		</fieldset><br/><br/>
	<div class="col-md-12">
	<div class="card-product col-md-4">
		<a href="item.php">
			<div><img class="card-image" src="bookimg.jpg"></img></div>
			<b class="text"> Sample Book</b>
		</a>
		<div class="pick-add"><span ><b>Pickup Address: ABC</b></span></div>
		<div class="del-add"><span ><b>Delivery Address: DEF</b></span></div>
		<div class="add-to-cart"><a class="btn btn-success" style="width:185px;font-family:consolas;margin-top:5px;">Take This Job</a></span></div>
		
	</div>
	<div class="card-product col-md-4">
		<a href="item.php">
			<div><img class="card-image" src="bookimg.jpg"></img></div>
			<b class="text"> Sample Book</b>
		</a>
		<div class="pick-add"><span ><b>Pickup Address: ABC</b></span></div>
		<div class="del-add"><span ><b>Delivery Address: DEF</b></span></div>
		<div class="add-to-cart"><a class="btn btn-success" style="width:185px;font-family:consolas;margin-top:5px;">Take This Job</a></span></div>
		
	</div>
	<div class="card-product col-md-4">
		<a href="item.php">
			<div><img class="card-image" src="bookimg.jpg"></img></div>
			<b class="text"> Sample Book</b>
		</a>
		<div class="pick-add"><span ><b>Pickup Address: ABC</b></span></div>
		<div class="del-add"><span ><b>Delivery Address: DEF</b></span></div>
		<div class="add-to-cart"><a class="btn btn-success" style="width:185px;font-family:consolas;margin-top:5px;">Take This Job</a></span></div>
		
	</div>
	<div class="card-product col-md-4">
		<a href="item.php">
			<div><img class="card-image" src="bookimg.jpg"></img></div>
			<b class="text"> Sample Book</b>
		</a>
		<div class="pick-add"><span ><b>Pickup Address: ABC</b></span></div>
		<div class="del-add"><span ><b>Delivery Address: DEF</b></span></div>
		<div class="add-to-cart"><a class="btn btn-success" style="width:185px;font-family:consolas;margin-top:5px;">Take This Job</a></span></div>
		
	</div>
	<div class="card-product col-md-4">
		<a href="item.php">
			<div><img class="card-image" src="bookimg.jpg"></img></div>
			<b class="text"> Sample Book</b>
		</a>
		<div class="pick-add"><span ><b>Pickup Address: ABC</b></span></div>
		<div class="del-add"><span ><b>Delivery Address: DEF</b></span></div>
		<div class="add-to-cart"><a class="btn btn-success" style="width:185px;font-family:consolas;margin-top:5px;">Take This Job</a></span></div>
		
	</div>
	<div class="card-product col-md-4">
		<a href="item.php">
			<div><img class="card-image" src="bookimg.jpg"></img></div>
			<b class="text"> Sample Book</b>
		</a>
		<div class="pick-add"><span ><b>Pickup Address: ABC</b></span></div>
		<div class="del-add"><span ><b>Delivery Address: DEF</b></span></div>
		<div class="add-to-cart"><a class="btn btn-success" style="width:185px;font-family:consolas;margin-top:5px;">Take This Job</a></span></div>
		
	</div>
	<div class="card-product col-md-4">
		<a href="item.php">
			<div><img class="card-image" src="bookimg.jpg"></img></div>
			<b class="text"> Sample Book</b>
		</a>
		<div class="pick-add"><span ><b>Pickup Address: ABC</b></span></div>
		<div class="del-add"><span ><b>Delivery Address: DEF</b></span></div>
		<div class="add-to-cart"><a class="btn btn-success" style="width:185px;font-family:consolas;margin-top:5px;">Take This Job</a></span></div>
		
	</div>
	<div class="card-product col-md-4">
		<a href="item.php">
			<div><img class="card-image" src="bookimg.jpg"></img></div>
			<b class="text"> Sample Book</b>
		</a>
		<div class="pick-add"><span ><b>Pickup Address: ABC</b></span></div>
		<div class="del-add"><span ><b>Delivery Address: DEF</b></span></div>
		<div class="add-to-cart"><a class="btn btn-success" style="width:185px;font-family:consolas;margin-top:5px;">Take This Job</a></span></div>
		
	</div>
	<div class="card-product col-md-4">
		<a href="item.php">
			<div><img class="card-image" src="bookimg.jpg"></img></div>
			<b class="text"> Sample Book</b>
		</a>
		<div class="pick-add"><span ><b>Pickup Address: ABC</b></span></div>
		<div class="del-add"><span ><b>Delivery Address: DEF</b></span></div>
		<div class="add-to-cart"><a class="btn btn-success" style="width:185px;font-family:consolas;margin-top:5px;">Take This Job</a></span></div>
		
	</div>
	<div class="card-product col-md-4">
		<a href="item.php">
			<div><img class="card-image" src="bookimg.jpg"></img></div>
			<b class="text"> Sample Book</b>
		</a>
		<div class="pick-add"><span ><b>Pickup Address: ABC</b></span></div>
		<div class="del-add"><span ><b>Delivery Address: DEF</b></span></div>
		<div class="add-to-cart"><a class="btn btn-success" style="width:185px;font-family:consolas;margin-top:5px;">Take This Job</a></span></div>
		
	</div>
	<div class="card-product col-md-4">
		<a href="item.php">
			<div><img class="card-image" src="bookimg.jpg"></img></div>
			<b class="text"> Sample Book</b>
		</a>
		<div class="pick-add"><span ><b>Pickup Address: ABC</b></span></div>
		<div class="del-add"><span ><b>Delivery Address: DEF</b></span></div>
		<div class="add-to-cart"><a class="btn btn-success" style="width:185px;font-family:consolas;margin-top:5px;">Take This Job</a></span></div>
		
	</div>
	<div class="card-product col-md-4">
		<a href="item.php">
			<div><img class="card-image" src="bookimg.jpg"></img></div>
			<b class="text"> Sample Book</b>
		</a>
		<div class="pick-add"><span ><b>Pickup Address: ABC</b></span></div>
		<div class="del-add"><span ><b>Delivery Address: DEF</b></span></div>
		<div class="add-to-cart"><a class="btn btn-success" style="width:185px;font-family:consolas;margin-top:5px;">Take This Job</a></span></div>
		
	</div>
	<div class="card-product col-md-4">
		<a href="item.php">
			<div><img class="card-image" src="bookimg.jpg"></img></div>
			<b class="text"> Sample Book</b>
		</a>
		<div class="pick-add"><span ><b>Pickup Address: ABC</b></span></div>
		<div class="del-add"><span ><b>Delivery Address: DEF</b></span></div>
		<div class="add-to-cart"><a class="btn btn-success" style="width:185px;font-family:consolas;margin-top:5px;">Take This Job</a></span></div>
		
	</div>
	<div class="card-product col-md-4">
		<a href="item.php">
			<div><img class="card-image" src="bookimg.jpg"></img></div>
			<b class="text"> Sample Book</b>
		</a>
		<div class="pick-add"><span ><b>Pickup Address: ABC</b></span></div>
		<div class="del-add"><span ><b>Delivery Address: DEF</b></span></div>
		<div class="add-to-cart"><a class="btn btn-success" style="width:185px;font-family:consolas;margin-top:5px;">Take This Job</a></span></div>
		
	</div>
	<div class="card-product col-md-4">
		<a href="item.php">
			<div><img class="card-image" src="bookimg.jpg"></img></div>
			<b class="text"> Sample Book</b>
		</a>
		<div class="pick-add"><span ><b>Pickup Address: ABC</b></span></div>
		<div class="del-add"><span ><b>Delivery Address: DEF</b></span></div>
		<div class="add-to-cart"><a class="btn btn-success" style="width:185px;font-family:consolas;margin-top:5px;">Take This Job</a></span></div>
		
	</div>
	</div>
	
		
	
	
	
	
	</html>
<?php
	session_start();
	if(!isset($_SESSION["id"])){
	header("Location: loginSeller.php");
}
    require_once "db_connect.php";
	$userID = $_SESSION['uname'];
	$query = "SELECT * FROM books_info WHERE uname='$userID'";
	$userData = get($query);
	
?>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="styles/mystyle.css">
		
	</head>
	<body>
				  				    
		<div>		  				    
		<center><img src="logo2.png" style="height:100px"></center>
		</div>
		<div>
		<h4 style="text-align:right;">User Name: <?php echo $_SESSION['uname'];?></h4>
	    <h5 style="text-align:right;">User Type: Seller</h5>
		</div>
			      
	<form action="" method="post">
		<div class="text-center">
			<a href="book_upload.php" class="btn btn-danger">Upload A Book</a>
			<a href="seller_profile_info.php" class="btn btn-warning">Edit Information</a>
			<span><a href="controllers/deleteSellerInfo.php?id=<?php echo $_SESSION['id'];?>"  class="btn btn-danger">Delete Account</a></span>
			<a href="loginSeller.php" class="btn btn-primary">Logout</a>		
		</div>
		</fieldset><br/><br/>
		<div class="col-md-12">
		<?php foreach ($userData as $i => $data): ?>
		
	<div class="card-product col-md-4">
		<a href="item.php">
			<div><img width="160px" class="card-image" src="<?php echo $data["image"];?>"></img></div>
			<h4><b class="text">Book Name : <?php echo $data["bname"];?></b></h4>
		</a>
		<div class="price-label"><span><h4><b>Price : <?php echo $data["pri"];?></b></h4></span></div>
		<div class="add-to-cart"><a href="booksInfo.php?id=<?php echo $data['id'] ?>" class="btn btn-success" style="width:185px;font-family:consolas;margin-top:5px;">Edit</a></span></div>
		<div class="add-to-cart"><a href="controllers/deleteBookInfoSeller.php?id=<?php echo $data['id'] ?>"    class="btn btn-danger" style="width:185px;font-family:consolas;margin-top:5px;">Delete</a></span></div>
		
	</div>
	
	<?php endforeach; ?>
	</div>
	
	
	
	
	
	</html>
	
	
<?php
require_once "controllers/editControllerSeller.php";
	
	require_once "db_connect.php";
    $userID = $_SESSION['id'];
	$sql1 = "SELECT * FROM seller_info WHERE id='$userID'";
	$userData = get($sql1);
	$userData = $userData[0];
	
	
	


?>


<html>
	<head></head>
	<body>
	<center><img src="logo2.png" style="height:100px"></center><br>
	
	<fieldset align="center">
		<legend><h1><b>Edit Selller Profile</b></h1></legend>
		
		<br>
			<?php
				if(!empty($_SESSION['message'])){
					echo $_SESSION['message'];
					unset($_SESSION['message']);
				}
				
			?>
		<br>
		<form action="" method="post" enctype="multipart/form-data">
		
		
		<br>
		
		<table align="center">
			    <tr>
					<td><span><b>Name</b> : <b><?=$userData['name']?></b></span></td>
					<td><input type="text" name="name" value = "<?php echo $name;?>"><br>
					<td><span><?php echo $err_name;?></span></td>
				</tr>
				
				<tr>
					<td><span><b>Password</b> : </b></span></td>
					<td><input type="password" name="pass" value = "<?php echo $pass;?>"><br>
					<td><span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Confirm Password</b> : </b></span></td>
					<td><input type="password" name="cpass" value = "<?php echo $cpass;?>"><br>
					<td><span><?php echo $err_cpass;?></span></td>
				</tr>
				
				<tr>
					<td><span><b>Email</b> : <b><?=$userData['email']?></b></span></td>
					<td><input type="text" name="email" value = "<?php echo $email;?>"><br>
					<td><span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
				    <td><span><b>Phone</b> : <b><?=$userData['phone']?></b></span></td>
					<td><input type="text" name="number" size="9"  value="<?php echo $number;?>"><br>
					<td><span><?php echo $err_number;?></span></td>
				</tr>
				<tr>
				    <td><span><b>Address</b> : <b><?=$userData['address']?></b></span></td>
					<td><input type="text" name="address" size="9"  value="<?php echo $address;?>"><br>
					<td><span><?php echo $err_address;?></span></td>
				</tr>
				
				
				
				
			</table>
		
		
		
		
		<br><center><input type="submit" name="updateDetails" value="Update"> &nbsp; <a href="home_Seller.php".php">Home</a> &nbsp; <a href="seller_profile_info.php">Back</a></center>
		
	
	</form>
	</fieldset>
		
		
	</body>
</html>
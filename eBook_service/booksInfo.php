<?php
require_once 'controllers/editBookInfo.php';
session_start();
    require_once "db_connect.php";
	$userID = $_GET['id'];
	$query = "SELECT * FROM books_info WHERE id='$userID'";
	$userData = get($query);
	$userData = $userData[0];

?>

<html>
	<head></head>
	<body>
	<center><img src="logo2.png" style="height:100px"></center><br>
	    <fieldset align="center">
	    <legend><h1>Books Information</h1></legend>
		
		
			<form action="" method="post" enctype="multipart/form-data">
			<table align='center'>
			<tr>
			 <td><style="text-align:center;">ID: <?=$userData['id']?></td>
			 
			 </tr>
			<tr>
			<td><b><style="text-align:center;">Book Name: <?=$userData['bname']?></b></td>
			<td><input type="text" name="bname" value = "<?php echo $bname;?>"></td>
			<td><span><?php echo $err_bname;?></span></td>
			 </tr>
			 <tr>
			<td><b><style="text-align:center;">Writer Name: <?=$userData['wname']?></b></td>
			<td><input type="text" name="wname" value = "<?php echo $wname;?>"></td>
			<td><span><?php echo $err_wname;?></span></td>
			 </tr>
			 <tr>
			<td><b><style="text-align:center;">Price: <?=$userData['pri']?></b></td>
			<td><input type="text" name="pri" value = "<?php echo $pri;?>"></td>
			<td><span><?php echo $err_pri;?></span></td>
			 </tr>
			 <tr>
			<td><b><style="text-align:center;">Email: <?=$userData['email']?></b></td>
			<td><input type="text" name="email" value = "<?php echo $email;?>"></td>
			<td><span><?php echo $err_email;?></span></td>
			 </tr>
			 <tr>
			<td><b><style="text-align:center;">Phone: <?=$userData['phone']?></b></td>
			<td><input type="number" name="phone" value = "<?php echo $phone;?>"></td>
			<td><span><?php echo $err_phone;?></span></td>
			 </tr>
			 <tr>
			<td><b><style="text-align:center;">Address: <?=$userData['address']?></b></td>
			<td><input type="text" name="address" value = "<?php echo $address;?>"></td>
			<td><span><?php echo $err_phone;?></span></td>
			 </tr>
			 <tr>
			<td><b><style="text-align:center;">Image: <img width="160px" src="<?=$userData['image']?>"></b></td>
			<td><input type="file" id="file" name="file"></td>
			</tr>
			</table>
				
				
				
			
			
			<center><center><input type="submit" name="updateDetails" value="Update"> &nbsp; <a href="home_Seller.php".php">Home</a></center>
	
		</form >
		</fieldset>	
		</body>
</html>
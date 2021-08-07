<?php 
require_once "controllers\RegistrationControllerDelivary.php";

?>


<html>
	<head><link rel="stylesheet" href="styles/mystyle.css"></head>
	<body>
	    <center><img src="logo2.png"></center><br/>
		<fieldset style="width:1000px align: center" >
	    <legend align="center"><center><h1>Sign Up As Delivery Man</h1></center></legend>
		<br>
			 <?php
			 if(!empty($_SESSION['message'])){
				 echo $_SESSION['message'];
					 //$_SESSION['message']=""
				 }
				
			 ?>
		<br>
		<form action="" method="post">
			<table align="center">
			     <tr>
					<td><span><b>Name</b>:</span></td>
					<td><input type="text" name="name" id ="name" value = "<?php echo $name;?>"><br>
					<td><span id="err_name"><font color="red"> <?php echo $err_name;?> </font></span></td>
				</tr>
				<tr>
					<td><span><b>Username</b>:</span></td>
					<td><input type="text" name="uname" id="uname" value = "<?php echo $uname;?>"><br>
					<td><span id="err_uname"><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td><span><b>Password</b>:</span></td>
					<td><input type="password" name="pass" id ="pass" value = "<?php echo $pass;?>"><br>
					<td><span id="err_pass"><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Confirm Password</b>:</span></td>
					<td><input type="password" name="conpass" id="conpass" value = "<?php echo $conpass;?>"><br>
					<td><span id="err_conpass"><?php echo $err_conpass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Email</b>:</span></td>
					<td><input type="text" name="email" id="email" value = "<?php echo $email;?>"><br>
					<td><span id="err_email"><?php echo $err_email;?></span></td>
				</tr>
				<tr>
				    <td><span><b>Phone</b>:</span></td>
					<td><input type="text" name="number" size="9" id="number" value="<?php echo $number;?>"><br>
					<td><span id="err_number"><?php echo $err_number;?></span></td>
				</tr>
				
				
					
				<tr>
					<td><span><b>Birth Date</b>:</span></td>
                    <td>
                        <select name="day" id="day">
                            <option disabled selected>Day</option>
                            <?php 
                                for($i=1;$i<=31;$i++)
                                {
                                    echo "<option>$i<option>";
                                }
                            ?>
                        </select>
                        <select name="month" id="month">
                            <option disabled selected>Month</option>
                            <?php 
                                $months=array("Jan"=>"1", "Feb"=>"2", "Mar"=>"3", "Apr"=>"4", "May"=>"5", "June"=>"6","Jul"=>"7", "Aug"=>"8", "Sep"=>"9", "Oct"=>"10", "Nov"=>"11", "Dec"=>"12");
                                foreach($months as $x => $x_value) {
                                    echo "<option>$x($x_value)<option>";
                                    
                                  }
                            ?>
                        </select>
                        <select name="year" id="year">
                        <option disabled selected>Year</option>
                        <?php 
                                for($i=1985;$i<=2021;$i++)
                                {
                                    echo "<option>$i<option>";
                                }
                            ?>
                        </select>
					</td>
					   <td><span id="err_birthday"><?php echo $err_birthday; ?></span></td>					

				</tr>
				<tr>
					<td><span><b>Gender</b>:</span></td>
					<td><input type="radio" name="gender" id="gender1" value="Male"><span>Male</span>
					    <input type="radio" name="gender" id="gender2" value="Female"><span>Female</span></td>
					<td><span id="err_gender" ><?php echo $err_gender;?></span></td>
				</tr>
				
			</table>
			<br>
			<center><input class="btn-mine my-font" style="height:50px; width: 100px" type="submit" name="Sign Up"></center>
			<br>
			<h5 style="text-align:center;">Already have an account? <a href="loginDeliveryMan.php">Log-In</a></h5><br>
			<h5 style="text-align:center;"><a href="signup.php">Back</a></h5><br>

			<center><a href="index.php">Go To HOME</a></center>
			
		</form>
		</fieldset>
	</body>
		<script src="JS/Reg.js"></script>

<script>
      //ajax

		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200){
				//when server respond
				var rsp = this.responseText;
				if(rsp == "true"){
					document.getElementById("err_uname").innerHTML = "<br>Valid";
				}else{
					document.getElementById("err_uname").innerHTML = "<br>Not Valid";
				}
			}
		};
		xhttp.open("GET","checkusernamedelivery.php?uname="+username,true);
		xhttp.send();
	}
			
	
	 
	 </script>


</html>


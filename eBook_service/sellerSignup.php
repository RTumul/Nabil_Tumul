<?php 
require_once "controllers\RegistrationControllerSeller.php";



?>


<html>
	<head><link rel="stylesheet" href="styles/mystyle.css"></head>
	<body>
	    <div id="error"></div>
		<center><img src="logo2.png"></center><br/>
		<fieldset style="width:1000px align: center" >
	    <legend align="center"><center><h1>Sign Up As Seller</h1></center></legend>
		<br>
			 <?php
			 if(!empty($_SESSION['message'])){
				 echo $_SESSION['message'];
					 //$_SESSION['message']=""
				 }
				
			 ?>
		<br>
		<form action="" method="post" onsubmit="return validate()">
			<table align="center">
			     <tr>
					<td><span><b>Name</b>:</span></td>
					<td><input type="text" name="name" id ="name" value = "<?php echo $name;?>"><br>
					<span id="err_name"><font color="red"> <?php echo $err_name;?> </font></span></td>
				</tr>
				<tr>
					<td><span><b>Username</b>:</span></td>
					<td><input type="text" name="uname" id="uname" onfocusout="checkUsername(this)"value = "<?php echo $uname;?>"><br>
					<span id="err_uname"><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td><span><b>Password</b>:</span></td>
					<td><input type="password" name="pass" id ="pass" value = "<?php echo $pass;?>"><br>
					<span id="err_pass"><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Confirm Password</b>:</span></td>
					<td><input type="password" name="conpass" id="conpass" value = "<?php echo $conpass;?>"><br>
					<span id="err_conpass"><?php echo $err_conpass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Email</b>:</span></td>
					<td><input type="text" name="email" id="email"onfocusout="checkEmail(this)" value = "<?php echo $email;?>"><br>
					<span id="err_email"><?php echo $err_email;?></span></td>
				</tr>
				<tr>
				    <td><span><b>Phone</b>:</span></td>
					<td><input type="text" name="number" size="9" id="number" value="<?php echo $number;?>"><br>
					<span id="err_number"><?php echo $err_number;?></span></td>
				</tr>
				
				
					
				<tr>
					<td><span><b>Birth Date</b>:</span></td>
                    <td>
                        <input type="text" placeholder="dd/mm/yyyy" id="birthday" name="birthday" value="<?php echo $birthday?>">
					 
					<br/>
					   <span id="err_birthday"><?php echo $err_birthday; ?></span>	</td>			

				</tr>
				<tr>
					<td><span><b>Gender</b>:</span></td>
					<td><input type="radio" name="gender" id="male" value="Male"><span>Male</span>
					    <input type="radio" name="gender" id="female" value="Female"><span>Female</span></br>
					<span id="err_gender" ><?php echo $err_gender;?></span></td>
				</tr>
				
				<tr>
					<td><span><b>Address</b>:</span></td>
					<td><input type="text" name="address" id="address" value = "<?php echo $address;?>"><br>
					<span id="err_address"><?php echo $err_address;?></span></td>
				</tr>
				
			</table>
			<br>
			<center><input class="btn-mine my-font" style="height:50px; width: 100px" type="submit" name="Register" value="Register"></center>
			<br>
			<h5 style="text-align:center;">Already have an account? <a href="loginSeller.php">Log-In</a></h5><br>
			<h5 style="text-align:center;"><a href="signup.php">Back</a></h5><br>

			<center><a href="index.php">Go To HOME</a></center>
			
		</form>
		</fieldset>
	</body>
		

<script>
      
	  function get (id){
			return document.getElementById(id);
		}
	   function validate(){
		   //alert("Login");
		   cleanUp();
		   var hasError=false;		   
		   if(get("name").value == ""){
			   get ("err_name").innerHTML="*Name Required<br>";
			   get ("err_name").style.color="red";
			   hasError=true;			   
		   }
		   
		   if(get("uname").value == ""){
			   get ("err_uname").innerHTML="*Username Required<br>";
			   get ("err_uname").style.color="red";
			   hasError=true;			   
		   }
		   if(get("pass").value == ""){
			   get ("err_pass").innerHTML="Password Required<br>";
			   get ("err_pass").style.color="red";
			   hasError=true;			   
		   }
		   if(get("conpass").value == ""){
			   get ("err_conpass").innerHTML="*Please re-enter your password<br>";
			   get ("err_conpass").style.color="red";
			   hasError=true;			   
		   }
		   if(get("email").value == ""){
			   get ("err_email").innerHTML="*Email Required<br>";
			   get ("err_email").style.color="red";
			   hasError=true;			   
		   }
		   if(get("number").value == ""){
			   get ("err_number").innerHTML="*Phone Number Required<br>";
			   get ("err_number").style.color="red";
			   hasError=true;			   
		   }
		   if(get("email").value == ""){
			   get ("err_email").innerHTML="*Email Required<br>";
			   get ("err_email").style.color="red";
			   hasError=true;			   
		   }
		   
		   
		   if(!get("male").checked && !get("female").checked ){
				get("err_gender").innerHTML="*Select gender";
				get("err_gender").style.color="red";
				has_error=true;
			}
			if(get("birthday").value == ""){
			   get ("err_birthday").innerHTML="*Date Of Birth Required<br>";
			   get ("err_birthday").style.color="red";
			   hasError=true;
			   
		   }
		   if(get("address").value == ""){
			   get ("err_address").innerHTML="*Date Of Birth Required<br>";
			   get ("err_address").style.color="red";
			   hasError=true;
			   
		   }
		   
		   //alert (err_msg);
		   if(!hasError){
		   return true;
		   }		  
			   return false;
		   
	   }
		function cleanUp(){			
			get ("err_name").innerHTML="";
			get ("err_uname").innerHTML="";
			get ("err_pass").innerHTML="";	
            get ("err_conpass").innerHTML="";
            get ("err_email").innerHTML="";	
            get ("err_number").innerHTML="";
            get ("err_birthday").innerHTML="";
            get ("err_gender").innerHTML="";	
            get ("err_address").innerHTML="";				
		}
									
	function checkUsername(e){
		
		//ajax
		var xhttp = new XMLHttpRequest();
        xhttp.open("GET","checkusername.php?uname="+e.value,true);
		xhttp.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200){
				//when server respond
				var rsp = this.responseText;

				if(rsp == "false" ){
					
					document.getElementById("err_uname").innerHTML = "";
					window.stop();
				}else{
					document.getElementById("err_uname").innerHTML = "User Exists";
					document.getElementById("err_uname").style.color = "Red";
					window.stop();
				}
			}
		};
		
		xhttp.send();
	}


	function checkEmail(e){
		
		//ajax
		var xhttp = new XMLHttpRequest();
        xhttp.open("GET","checkemailseller.php?email="+e.value,true);
		xhttp.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200){
				//when server respond
				var rsp = this.responseText;

				if(rsp == "false" ){
					
					document.getElementById("err_email").innerHTML = "";
					window.stop();
				}else{
					document.getElementById("err_email").innerHTML = "Email Exists";
					document.getElementById("err_email").style.color = "Red";
					window.stop();
				}
			}
		};
		
		xhttp.send();
	}
	 
	 </script>


</html>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>



    <header>
		<div id="logo">
			<a href="home.php"><img src="logo2.png" class="logo" alt="logo"></a>
		</div>
		<nav>
     		<div class="threeline">
        		<div class="line"></div>
        		<div class="line"></div>
        		<div class="line"></div>
      		</div>
           <ul class="nav-links">
        <li><a href="login.php">Back</a>
        	
        </li>
             </ul>
        </nav>
	</header>

	
	<span class="textcenter textmain"><h1>Student Registration</h1></span>
	<br>
	<div class="textcenter">
	<div class="main_internaldiv textleft fontsize160">
		<form action="controller/createBuyer.php" method="POST" enctype="multipart/form-data" onsubmit="return validation()">

			<div class="form">
					<input type="text" id="name" name="name" autocomplete="off" required />
					<label for="" class="label-">
					<span class="content-"> Full Name </span>
					</label>
			</div>
			<span class="red_text" id="fne"></span>

			<div class="form">
					<input type="text" id="uname" name="uname" autocomplete="off" required />
					<label for="uname" class="label-">
					<span class="content-">User Name </span>
					</label>
			</div>
			
			<div class="form">
					<input type="Date" ="dob" autocomplete="off" required />
					<label for="dob" class="label-">
					<span class="content-">Date of Birth</span>
					</label>
			</div>

			<div class="form">
					<select ="gender" required />
						<option selected disabled hidden></option>	
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select> 
					<label for="gender" class="label-">
					<span class="content-">Gender</span>
					</label>
			</div>

			<div class="form">
					<input type="text" id="contact" name="contact" autocomplete="off" maxlength="15" size="15" required />
					<label for="contact" class="label-">
					<span class="content-">Contact</span>
					</label>
			</div>			
			<span class="red_text" id="contacte"></span>
			<div class="form">
					<input type="text" id="email" name="email" autocomplete="off" required />
					<label for="email" class="label-">
					<span class="content-">Email</span>
					</label>
			</div>
			<span class="red_text" id="emaile"></span>
			<div class="form">
					<select ="nationality" required />
						<option selected disabled hidden></option>
						<option value="Bangladesh">Bangladesh</option>
						</select>
					<label for="nationality" class="label-">
					<span class="content-">Nationality</span>
					</label>
			</div>

			<div class="form">
					<input type="text" autocomplete="off" ="address" required />
					<label for="address" class="label-">
					<span class="content-">Address</span>
					</label>
			</div>

			

			

			

			<div class="form">
					<input type="Password" name="password" autocomplete="off" required />
					<label for="password" class="label-">
					<span class="content-">Password</span>
					</label>
			</div>
			<img src= "userdp.png" alt="Profile Picture" class="userimage" ;><br>
  			<input type="file" id="file" ="file">
  			<label for="file" class="filelabel">Select</label>
  			<br>
  			<br>
			<hr>
			<input type="submit" value="submit" ="submit" >

		</form>
	</div>

</div>

	

<?php include('footer.php');?>

<script type="text/javascript">
	
	
	function checkmail( email ) {
	var at = email.indexOf( "@" );
	var dot = email.lastIndexOf( "\." );
	return email.length > 0 &&
	at > 0 &&
	dot > at + 1 &&
	dot < email.length &&
	email[at + 1] !== "." &&
	email.indexOf( " " ) === -1 &&
	email.indexOf( ".." ) === -1;
	}
	function validation(){
	var fn = document.getElementById("first").value;
	
	var phone = document.getElementById("contact").value;
	var email = document.getElementById("email").value;
	if( (fn!="") && (!(fn>='A' && fn<='Z' || fn>='a'&& fn<='z') || fn.length<2))
	{
	document.getElementById("fne").innerHTML = "Should be atleast 2 characters and only alphabet.";
		return false;
	}
	
	if(isNaN(phone) || phone.length >15)
	{
	document.getElementById("contacte").innerHTML = "Only digits and not morethan 15 digits.";
		return false;
	}
	if(!checkmail(email) && email != "")
	{
	document.getElementById("emaile").innerHTML = "Invalid email address.";
		return false;
	}
	
	}
</script>

</body>
</html>
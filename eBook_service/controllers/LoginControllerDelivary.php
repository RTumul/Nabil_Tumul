<?php
	require_once 'db_connect.php';
	session_start();
	
    $uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	
	$hasError=false;
	$err_message="";
		
	if(isset($_POST["login"])){
	
	   if(empty($_POST["uname"])){
		   $err_uname="Username Required";
		   $hasError = true;
	   }
	   else{
		   $uname = htmlspecialchars($_POST["uname"]);
	   }
	   if(empty($_POST["pass"])){
		   $err_pass="Password Required";
		   $hasError = true;
	   }
	   else{
		   $pass = htmlspecialchars($_POST["pass"]);
	   }
	   
	   if(!$hasError){
			//$_SESSION["user"]=authenticateManager($uname,$pass);
			if($user = authenticateManager($uname,$pass)){
				$_SESSION["deliveryman_info"]=$user["uname"];
				header("Location:Home_Delivery.php");
			}
			echo "Invalid username or password";
		}
	}
	
	function addsignup($id,$username,$password,$email,$num,$add,$gender,$birth){
		$query = "insert into deliveryman_info values('$id','$uname','$pass','$email','$num','$add','$gender','$birth')";		
		execute($query);
		header("Location:2medical.php");
	}
	
	function authenticateManager($uname,$pass){
		$query = "select * from deliveryman_info where uname='$uname' and pass='$pass'";
		$result = get($query);
		
		if(count($result) > 0){
			return $result[0];
		}
		return false;
		}
			
?>
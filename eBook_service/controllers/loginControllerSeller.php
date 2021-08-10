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
				$_SESSION["id"]=$user["id"];
				$_SESSION["uname"]=$user["uname"];
				header("Location:home_Seller.php");
			}
			echo "Invalid username or password";
		}
	}
	
	
	
	function authenticateManager($uname,$pass){
		$query = "select * from seller_info where uname='$uname' and pass='$pass'";
		$result = get($query);
		
		if(count($result) > 0){
			return $result[0];
		}
		return false;
		}
			
?>
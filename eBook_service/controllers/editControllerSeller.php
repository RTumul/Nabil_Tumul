<?php
  session_start();
  if(isset($_SESSION['updated']) && $_SESSION['updated']==true)
	header("Location:edit_seller_info.php");

	require_once "db_connect.php";
    $name="";
	$err_name="";
	$uname = "";
	$err_uname="";
	$email="";
	$err_email="";
	$number="";
	$err_number="";
	$pass = "";
	$err_pass="";
	$cpass="";
	$err_cpass="";
	$address="";
	$err_address="";
	$id=$_SESSION['id'];
	
	$hasError = true;


//Update User Function
    function updateUser($c_id, $c_name,$c_email,$c_phone, $c_pass,$c_address)
    {
        $query = "update seller_info set name='$c_name', pass ='$c_pass', email='$c_email', phone='$c_phone', address='$c_address'  where id='$c_id'";
        $result = execute($query);
		return $result;
	}
		
	if(isset($_POST["updateDetails"]))
	{
	 if(empty($_POST["name"]))
     {
	 $err_name="[Name Required]";
	 $hasError=false;
	 }
	 else
	 {
	 $name=htmlspecialchars($_POST["name"]);
	 }
	
     
	
	 if(empty($_POST["email"]))
     {
     $err_email="[email required]";
	 $hasError=false;

     }
     elseif(!strpos($_POST["email"],"@"))
     {
      $err_email="[email must contain '@' sign]";
      $hasError=false;
     }
     else
     {
      $pos_at  = strpos($_POST["email"],"@");
      if(!strpos($_POST["email"],".",$pos_at))
        {
         $err_email="[at least one dot needed after '@' sign]";
	     $hasError=false;
        }
        else
        {
         $email=htmlspecialchars($_POST["email"]);
        }
     }
		 
     if(empty($_POST["number"]))
     {
      $err_number="[Number Requires]";
	   $hasError=false;
     }
     elseif(!is_numeric($_POST["number"]))
     {
      $err_number="[number should only contain neumeric value]";
	  $hasError=false;
     }
      else
     {
       $number=htmlspecialchars($_POST["number"]);
     }
	 
	if(empty($_POST["pass"])){
		   $err_pass="*Password Required";
		   $hasError = true;
		}
		else if(strlen($_POST["pass"])>0 && strlen($_POST["pass"])<8 )
		{
			$err_pass="*Password should contain atleast 8 character";
			$has_error=true;
		}
		else
		{
			$pass=htmlspecialchars($_POST["pass"]);
		}
		
		if(empty($_POST["cpass"])){
			$err_cpass="*Confirm your password.";
			$has_error=true;
		}
		else if(($_POST["pass"])!=($_POST["cpass"]))
		{
			$err_cpass="*Password doesn't match";
			$has_error=true;
		}
		else
		{
			$cpass=htmlspecialchars($_POST["cpass"]);
		}
		if(empty($_POST["address"]))
         {
             $err_address="[Address Requires]";
			 $hasError=false;
         }
         else
         {
             $address=htmlspecialchars($_POST["address"]);
         }
	 
	 
	
	
      if(empty($err_number) && empty($err_email)  && empty($err_name) && empty($err_pass) && empty($err_address)  )
        {
            
            if(isset($_POST["updateDetails"]))
            {
                $result = updateUser($id,$name,$email,$number,$pass,$address);

				
				if($result){
					$_SESSION['message'] = "Successfully Updated!";
				}else{
					$_SESSION['message'] = "Failed to Update!";
				}
                
            }
        }else{
			$_SESSION['message'] = "There are one or many error!";
		}
		


        // echo "Name: ". $_POST["name"]."<br>";
		// echo "User Name: ". $_POST["uname"]."<br>";
		// echo "Email: ". $_POST["email"]."<br>";
		// echo "Number: ". $_POST["number"]."<br>";
		// echo "Hospital: ". $_POST["hospital"]."<br>";
		
	}




?>
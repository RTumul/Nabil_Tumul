<?php
    session_start();
	$_SESSION['message'] = "";
	require_once "db_connect.php";
	$name="";
	$err_name="";
	$address="";
	$err_address="";
	$uname = "";
	$err_uname="";
	$pass="";
	$err_pass="";
	$conpass="";
	$err_conpass="";
	$email="";
	$err_email="";
	$pcode="";
	$number="";
	$err_number="";
	$bdate="";
	$day="";
	$err_day="";
	$month="";
	$err_month="";
	$year="";
	$err_year="";
	$gender="";
	$err_gender="";
	$about="";
	$err_about="";
	$bio = "";
	$err_bio="";
	$err_birthday="";
	$birthday="";
	
	$hasError = true;
	
	//Insert User Function
    function insertUser($name,$uname,$pass,$email,$phone,$birthdate,$gender,$address)
    {
        $query = "insert into seller_info values(NULL,'$name','$uname','$pass','$email',$phone,'$birthdate','$gender','$address')";
		//echo $query;
        $result = execute($query);
		return $result;
    }
	
	
	
	//if($_SERVER["REQUEST_METHOD"] == "POST")
	if(isset($_POST["Register"]))
	{
		if(empty($_POST["name"]))
         {
             $err_name="[Name Requires]";
			 $hasError=false;
         }
         else
         {
             $name=htmlspecialchars($_POST["name"]);
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
		 if(empty($_POST["uname"]))
		 {
			 $err_uname="[Username Required]";
			 $hasError=false;
		 }
		 elseif(strlen($_POST["uname"])<6)
		 {
			 $err_uname="[Username must be 6 charachters long]";
			 $hasError=false;
		 }
		 elseif(strpos($_POST["uname"]," "))
		 {
			 $err_uname="[Username should not contain white space]";
			 $hasError=false;
		 }
		 else
		 {
			 $uname=htmlspecialchars($_POST["uname"]);
		 }
		if(empty($_POST["pass"]))
		 {
			 $err_pass="[Password Required]";
			 $hasError=false;
		 }
        elseif(strlen($_POST["pass"])<8)
        {
             $err_pass="[password must be at least 8 characters long]";
			 $hasError=false;
        }
		elseif(strpos($_POST["pass"]," "))
        {
                $err_pass="[Password should not contain white space]";
				$hasError=false;
        }
        elseif(!strpos($_POST["pass"],"#") && !strpos($_POST["pass"],"?"))
        {
                $err_pass="[Password should contain at least one special character]";
				
				$hasError=false;
        }
        else
		{
            $u=0; $l=0; $d=0;
            for($i=0; $i<strlen($_POST["pass"]); $i++)
            {
                if(ctype_upper($_POST["pass"][$i]))
                {
                    $u=1;
                    break;
                }
            }
            for($i=0; $i<strlen($_POST["pass"]); $i++)
            {
                if(ctype_lower($_POST["pass"][$i]))
                {
                    $l=1;
                    break;
                }
            }
            for($i=0; $i<strlen($_POST["pass"]); $i++)
            {
                if(ctype_digit($_POST["pass"][$i]))
                {
                    $d=1;
                    break;
                }
            }
            if(!$u==1 || !$l==1 || !$d==1)
            {
                $err_pass="[must have at least one upper case, one lower case & one numeric value]";
				$hasError=false;
            }
            else
            {
                $pass=htmlspecialchars($_POST["pass"]);
                if($_POST["pass"]==$_POST["conpass"])
                {
                    $confirm_pass=$_POST["pass"];
                }
                elseif(empty($_POST["confpass"]))
                {
                    $err_confirm_pass="[Please re-insert password]";
					$hasError=false;
                }
                else
                {
                    $err_confirm_pass="[pasword does not match]";
					$hasError=false;
                }
            }
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
		
		
		
		
		
		 
		if(!isset($_POST["gender"]))
		{ 
			$err_gender = "No buttons were checked."; 
			$hasError=false;
		} 
		else
		{
			$gender = $_POST["gender"];
		}
		
		
		if(!isset($_POST['day']) || !isset($_POST['month']) || !isset($_POST['year'])){
			$err_birthday = "Date of birth is required!";
			$hasError=false;
		}
		else{
			$birthday = $_POST['day']."/".$_POST['month']."/".$_POST['year'];
		}
		
		 //if(!$hasError) 
	if(empty($err_birthday)  && empty($err_gender) 
		&& empty($err_dname) && empty($err_number) 
		&& empty($err_email) && empty($err_confirm_pass)
		&& empty($err_pass)
		&& empty($err_uname) && empty($err_name)&& empty($err_address) )
        {
            
            if(isset($_POST["Register"]))
            {
                $result = insertUser($name,$uname,$pass,$email,$number,$birthday,$gender,$address);
				
				if($result){
					$_SESSION['message'] = "Successfully Uploaded!";
				}else{
					$_SESSION['message'] = "Failed to Upload!";
				}
                
            }
        }else{
			$_SESSION['message'] = "There are one or many error!";
		}
		
		
		
		
		
		// echo "Name: ". $_POST["name"]."<br>";
		// echo "User Name: ". $_POST["uname"]."<br>";
		// echo "Password: ". $_POST["pass"]."<br>";
		// echo "Confirmed Password: ". $_POST["conpass"]."<br>";
		// echo "Email: ". $_POST["email"]."<br>";
		// echo "Number: ". $_POST["number"]."<br>";
		// echo "Gender: ". $gender."<br>";
		// echo "Date of Birth: ". $birthday."<br>";
		
		
	}
	function checkUsernameValidity($username){
		$query = "select * from seller_info where uname='$username'";
		$result = get($query);
		
		if(count($result) > 0){
			return "false";
		}
		return "true";
		}
	
	

?>
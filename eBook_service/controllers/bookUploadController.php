<?php
    session_start();
	$_SESSION['message'] = "";
	require_once "db_connect.php";
	$name="";
	$err_name="";
	$wname = "";
	$err_wname="";
	$pri="";
	$err_pri="";
	$email="";
	$err_email="";
	
	$number="";
	$err_number="";
	
	$image = "";
	$err_image = "";
	
	$hasError = true;
	
	//Insert User Function
    function insertBook($name,$wname,$pri,$email,$phone)
    {
        $query = "insert into books_info values(NULL,'$name','$wname','$pri','$email','$phone')";
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
		 if(empty($_POST["wname"]))
		 {
			 $err_wname="[Writer Required]";
			 $hasError=false;
		 }
		 
		 else
		 {
			 $wname=htmlspecialchars($_POST["wname"]);
		 }
		if(empty($_POST["pri"]))
		 {
			 $err_pri="[price Required]";
			 $hasError=false;
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
		
		
		
		 
		
		
		
		 //if(!$hasError) 
	if(empty($err_number) && empty($err_email) && empty($err_pri)&& empty($err_wname) && empty($err_name) )
        {
            
            if(isset($_POST["Register"]))
            {
                $result = insertBook($name,$wname,$pri,$email,$number);
				
				if($result){
					$_SESSION['message'] = "Successfully Inserted!";
				}else{
					$_SESSION['message'] = "Failed to insert!";
				}
                
            }
        }else{
			$_SESSION['message'] = "There are one or many error!";
		}
		
		
		
		
		
		// echo "Name: ". $_POST["name"]."<br>";
		// echo "User Name: ". $_POST["wname"]."<br>";
		// echo "priword: ". $_POST["pri"]."<br>";
		// echo "Confirmed priword: ". $_POST["conpri"]."<br>";
		// echo "Email: ". $_POST["email"]."<br>";
		// echo "Number: ". $_POST["number"]."<br>";
		// echo "Gender: ". $gender."<br>";
		// echo "Date of Birth: ". $birthday."<br>";
		
		
	}
	
	

?>
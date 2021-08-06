<?php
  
   if(isset($_SESSION['updated']) && $_SESSION['updated']==true)
	header("Location:edit_deliveryman_info.php");

	require_once "db_connect.php";
    $bname="";
	$err_bname="";
	$wname = "";
	$err_wname="";
	$email="";
	$err_email="";
	$phone="";
	$err_phone="";
	$image="";
	$address="";
	$err_address="";
	$pri="";
	$err_pri="";
	$id=$_GET['id'];
	
	$hasError = true;


//Update User Function
    function updateUser( $id,$bname,$wname,$pri,$email,$phone, $address,$image)
    {
        $query = "update books_info set bname='$bname', pri='$pri',address='$address', wname ='$wname', email='$email', phone='$phone', image='$image'  where id='$id'";
        $result = execute($query);
		return $result;
	}
		
	if(isset($_POST["updateDetails"]))
	{
	 if(empty($_POST["bname"]))
         {
             $err_bname="[Name Requires]";
			 $hasError=false;
         }
         else
         {
             $bname=htmlspecialchars($_POST["bname"]);
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
         elseif(!is_numeric($_POST["pri"]))
         {
             $err_pri="[number should only contain neumeric value]";
			 $hasError=false;
         }		
		else{
			 $pri=htmlspecialchars($_POST["pri"]);
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
		if(empty($_POST["phone"]))
         {
             $err_phone="[Number Requires]";
			 $hasError=false;
         }
         elseif(!is_numeric($_POST["phone"]))
         {
             $err_phone="[number should only contain neumeric value]";
			 $hasError=false;
         }
         else
         {
             $phone=htmlspecialchars($_POST["phone"]);
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
         
		$file = $_FILES['file'];

	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));


	$allow = array('jpg','jpeg','png');
	if(!empty($fileName)){
	if (in_array($fileActualExt, $allow)) {
		if($fileError ===0){
			if($fileSize < 4194304){
				$fileNameNew = uniqid('',true).".".$fileActualExt;
				$fileDes = 'uploads/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDes);
				$ppm = "Image sucessfully uploaded";
				$image = $fileDes;
			}
			else{
				$pperror = "File size too large (Maximum file size- 4MB)";
			}
		}
		else{
			$pperror = "There was an error uploading your file!";
		}
	}
	else{
		$pperror = "Only images are allowed (jpeg, jpg, png)";
	}
}
	else{
		$pperror = "Please Select an image";
	}
		
	 
	
	 
	 
	
	
      if(empty($err_phone) && empty($err_email)  && empty($err_bname) && empty($err_wname)&& empty($err_pri) && empty($err_address))
        {
            
            if(isset($_POST["updateDetails"]))
            {
                $result = updateUser( $id,$bname,$wname,$pri,$email,$phone, $address,$image);

				
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

echo $id;


?>
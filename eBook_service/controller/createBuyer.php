<?php  
require_once '../model.php';






	$fnameerror = $lnameerror = $emailerror =  $doberror = $gendererror = $contacterror =  $nationalityerror = $addresserror =  "";

	$pperror ="";
	$picaddress = "userdp.png";

	if(isset($_POST['submit'])) {

  if (empty($_POST["name"])) {
    $fnameerror = "Name can not be empty";
  } else {
  	$regex ="/^[a-zA-Z][a-zA-Z-.]+$/";
  	if(!preg_match($regex, $_POST["name"])){
  		$fnameerror = "Only letters, period and dash is allowed";
  	}
    else{
    	$data["name"] = $_POST["name"];
    }
  }
  
  if (empty($_POST["uname"])) {
    $lnameerror = "Name can not be empty";
  } else {
  	$regex ="/^[a-zA-Z][a-zA-Z-.]+$/";
  	if(!preg_match($regex, $_POST["uname"])){
  		$lnameerror = "Only letters, period and dash is allowed";
  	}
    else{
    	$data["uname"] = $_POST["uname"];
    }
  }

  if (empty($_POST["email"])) {
    $emailerror = "Email can not be empty";
  } else {
    $data["email"] = ($_POST["email"]);
   
    if (!filter_var($data["email"], FILTER_VALIDATE_EMAIL)) {
      $emailerror = "Invalid email format";
      $email="";
    }
  }

  if(empty($_POST["dob"])){
  	$doberror = "Select your Date of Birth";
  }
  else{

  	$data["dob"]=$_POST["dob"];

  }

  if (empty($_POST["gender"])) {
    $gendererror = "Select gender";
  }
  else{
    $data["gender"] = $_POST['gender'];
  }
  if(empty($_POST["contact"])){
  	$contacterror = "You Must Enter Your Contact Number.";
  }
  {
  $pregx = "/^[0-9]*$/";

  if(!preg_match($pregx, $_POST["contact"]))
  {
  	$contacterror="Invalid Phone Number";
  }

  else{
  	$data["contact"] = $_POST["contact"];
  }
 }


  


   if(empty($_POST["nationality"])){
  	$nationalityerror = "Select Nationality";
  }
  else{
  	$data["nationality"] = $_POST["nationality"];
  }

  

  if(empty($_POST["address"])){
  	$addresserror = "Write Done An Address.";
  }
  else{
  	$data["address"] = $_POST["address"];
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
				$fileDes = '../uploads/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDes);
				$ppm = "Image sucessfully uploaded";
				$data["image"] = $fileDes;
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


	#$data['pass'] = pass_hash($_POST['pass'], pass_BCRYPT, ["cost" => 12]);
  $data['pass'] = $_POST['pass'];

	if(empty($fnameerror)&& empty($lnameerror) && empty($doberror) && empty($gendererror) && empty($contacterror)&& empty($emailerror) && empty($nationalityerror) && empty($addresserror) && empty($pperror))
 {

 	if (addStudent($data)) {
  		echo "<script>alert('Buyer Sucessfully Registered.'); window.location.href='../buyerreg.php';</script>";

  	
 	
 }
 }


  else{

  $errorm = " | ".$fnameerror."  |  ".$lnameerror."  |  ".$doberror."  |  ".$gendererror."  |  ".$contacterror."  |  ".$emailerror."  |  ".$nationalityerror."  |  ".$addresserror."  |    "." | ".$pperror." | ";
    echo "<script>alert('Error-".$errorm."'); window.location.href='../buyerreg.php';</script>"; 

 

 }
	}

else{

  		echo "<script>alert('Access not allowed.'); window.location.href='../buyerreg.php';</script>";

  	}
 

    

?>
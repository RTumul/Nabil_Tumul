<?php
	require_once "controllers/RegistrationControllerSeller.php";
	$email = $_GET["email"];
	$res = checkEmailValidity($email);
	echo $res;
	
?>
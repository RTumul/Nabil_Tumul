<?php
	require_once "controllers/RegistrationControllerSeller.php";
	$username = $_GET["uname"];
	$res = checkUsernameValidity($username);
	echo $res;
	
?>
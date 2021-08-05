<?php
	require_once "controllers/RegistrationControllerDeivary.php";
	$username = $_GET["uname"];
	$res = checkUsernameValidity($username);
	echo $res;
?>
<?php
	require_once 'controllers/RegistrationControllerDelivary.php';
	$username = $_GET["uname"];
	$res = checkUsernameValidity($username);
	echo $res;
?>
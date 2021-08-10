<?php
	require_once 'controllers/RegistrationControllerDelivary.php';
	$email = $_GET["email"];
	$res = checkEmailValidity($email);
	echo $res;
?>
<?php
    
	 require_once '../db_connect.php';
     header('Location: ../loginDeliveryMan.php');
	 $id = $_GET['id']; 
	 $query = "DELETE FROM deliveryman_info WHERE id = '$id'";
	 get($query);
	 
    
		 
?>
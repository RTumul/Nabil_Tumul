<?php
    
	 require_once '../db_connect.php';
     header('Location: ../index.php');
	 $id = $_GET['id']; 
	 $query = "DELETE FROM deliveryman_info WHERE id = '$id'";
	 get($query);
	 header('Location: ../index.php');
    
		 
?>
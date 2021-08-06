<?php
     $id = $_GET['id']; 
	 require_once '../db_connect.php';
     $query = "DELETE FROM deliveryman_info WHERE id = '$id'";
	 get($query);
	 header('Location: ../index.php');
    
		 
?>
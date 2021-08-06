<?php

     require_once '../db_connect.php';
     $id = $_GET['id'];
	 $query = "DELETE FROM seller_info WHERE id = '$id'";
     get($query);
	 
?>
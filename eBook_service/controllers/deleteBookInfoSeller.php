<?php

     require_once '../db_connect.php';
     $id = $_GET['id'];
	 $query = "DELETE FROM books_info WHERE id = '$id'";
     get($query);
	 echo "<script>alert('Access not allowed.'); window.location.href='../home_Seller.php';</script>";
?>
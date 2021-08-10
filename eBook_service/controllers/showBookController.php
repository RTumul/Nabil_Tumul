<?php
 function getData($uname){
	 require_once 'db_connect.php';
	 $query = "SELECT * FROM books_info where uname = '$uname'";
	 $result = execute($query);
	 return $result;
 }

?>
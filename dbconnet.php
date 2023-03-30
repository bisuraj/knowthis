<?php
	$conn_error = 'Error in connecting to server';
	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pass = '';
	$mysql_db = 'knowthis';
    $conn= new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
	if($conn->connect_error)
	{
		die($conn_error);
		
	}
?>
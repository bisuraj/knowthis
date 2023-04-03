<?php
	$conn_error = 'Error in connecting to server';
	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pass = '';
	$mysql_db = 'knowthis';
    $con= new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
	if($con->connect_error)
	{
		die($conn_error);
		
	}
?>
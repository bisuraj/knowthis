<?php
	ob_start();
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	require 'dbconnect.php';
	
	if(empty($_SESSION['user_id']))
	{
		if(isset($_POST['email']) && isset($_POST['password']))
		{
			$email = strtolower($_POST['email']);
			$password = $_POST['password'];
			
			if(!empty($_POST['email']) && !empty($_POST['password']))
			{
				$query = "SELECT * FROM Users WHERE email='$email' AND password='$password'";
				$result = mysqli_query($conn, $query);
				
				if(mysqli_num_rows($result) == 1)
				{
					$user = mysqli_fetch_assoc($result);
					
					$_SESSION['user_id'] = $user['user_id'];
					$_SESSION['user_type'] = $user['user_type'];
                    $_SESSION['flag_login'] = 1;

					echo '<script> window.location.href = "index.php"; </script>';
				}
				else
				{
					$_SESSION['login_error'] = "Invalid email or password";
					echo '<script> window.location.href = "login.php"; </script>';
				}
			}
			else
			{
				$_SESSION['login_error'] = "Email and password are required";
				echo '<script> window.location.href = "login.php"; </script>';
			}
		}
	}
	else
	{
		header('Location: index.php');
	}
?>
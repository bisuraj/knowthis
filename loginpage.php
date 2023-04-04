<?php
session_start();
$_SESSION['errmsg'] = "";
$SESSION['status'] = 0;
// error_reporting(0);
include("dbconnect.php");
if (isset($_POST['submit'])) {
	$ret = mysqli_query($con, "SELECT * FROM users WHERE email='" . $_POST['email_login'] . "' and password='" . md5($_POST['pass_login']) . "'");
	$num = mysqli_fetch_array($ret);
	if ($num > 0) {

		$_SESSION['username'] = $_num['username'];
		$_SESSION['user_id'] = $num['user_id'];
		$_SESSION['utype'] = $num['user_type'];
		$_SESSION['status'] = 1;
		print_r($_SESSION,);
		$extra = "index.php";
		$host = $_SERVER['HTTP_HOST'];
		$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		header("location:http://$host$uri/$extra");
		exit();
	} else {

		$_SESSION['status'] = 2;
		$_SESSION['errmsg'] = "Invalid username or password";
		$extra = "loginpage.php";
		$host = $_SERVER['HTTP_HOST'];
		$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		header("location:http://$host$uri/$extra");
		exit();
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Sign in </title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logo.png">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script src="https://unpkg.com/handsfree@8.5.1/build/lib/handsfree.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
	<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
	</link>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<style>
		.login-form {
			width: 400px;
			margin: 30px auto;
		}

		.login-form form {
			margin-bottom: 15px;
			background: #f7f7f7;
			padding: 30px;
			box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
			border-radius: 10px;
		}

		.login-form h2 {
			margin: 0 0 15px;
		}

		.form-control,
		.login-btn {
			border-radius: 2px;
		}

		.input-group-prepend .fa {
			font-size: 18px;
		}

		.login-btn {
			font-size: 15px;
			font-weight: bold;
			min-height: 40px;
		}

		.social-btn .btn {
			border: none;
			margin: 10px 3px 0;
			opacity: 1;
		}

		.social-btn .btn:hover {
			opacity: 0.9;
		}

		.social-btn .btn-secondary,
		.social-btn .btn-secondary:active {
			background: #507cc0 !important;
		}

		.social-btn .btn-info,
		.social-btn .btn-info:active {
			background: #64ccf1 !important;
		}

		.social-btn .btn-danger,
		.social-btn .btn-danger:active {
			background: #df4930 !important;
		}

		.or-seperator {
			margin-top: 20px;
			text-align: center;
			border-top: 1px solid #ccc;
		}

		.or-seperator i {
			padding: 0 10px;
			background: #f7f7f7;
			position: relative;
			top: -11px;
			z-index: 1;
		}
	</style>
</head>
<?php
if (!empty($_SESSION['EMP_ID']) || !empty($_SESSION['SEEK_ID'])) {
	include 'navbar.login.php';
} else {
	include 'navbar.php';
}
?>

<body>
	<div class="login-form mt-5 pt-5  mb-5">
		<form method="post" id="form1">
			<h1 class="text-center">KnowThis</h2>
				<h2 class="text-center">Sign in</h2>
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">
								<span class="fa fa-user"></span>
							</span>
						</div>
						<input type="text" class="form-control" name="email_login" placeholder="Email"
							required="required">
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">
								<i class="fa fa-lock"></i>
							</span>
						</div>
						<input type="password" class="form-control" name="pass_login" placeholder="Password"
							required="required">
					</div>
				</div>
				<span style="color:Blue;">
					<?php echo $_SESSION['errmsg']; ?>
				</span>

				<div class="form-group">
					<button type="submit" form="form1" class="btn btn-primary login-btn btn-block" name="submit"
						value="login ">Sign in</button>
				</div>
				<div class="clearfix">
					<label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
					<a href="#" class="float-right">
						<font color="#FF0000">Forgot Password?</font>
					</a>
				</div>
		</form>
		<br>
		<p class="text-center text-muted small">Don't have an account? <a href="signuppage.php">
				<font color="#FF0000">Signup Here</font>
			</a></p>
	</div>
	<br>

</body>
<?php
include 'footer.php';

if ($_SESSION['status'] == 2) {
	echo '<script> Swal.fire({
        icon: "error",
        title: "<i>Incorrect Email or Pass</i>", 
        text: "Please Enter the Correct Email and Password"
      }); </script>';
	unset($_SESSION['status']);
}

if ($_SESSION['status'] == 1) {
	echo '<script> Swal.fire({
        icon: "info",
        title: "<i>Alert</i>", 
        html: "Already Logged In",  
      }); </script>';
	;
}

?>

</html>
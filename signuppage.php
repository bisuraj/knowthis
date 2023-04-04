<?php
include_once('dbconnect.php');

if (isset($_POST['register'])) {
    $uname = $_POST['username'];
    $password = md5($_POST['pass']);
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $pincode = $_POST['pincode'];
    $user_type = $_POST['user_type'];

    $query = mysqli_query($con, "insert into users(user_name,email,password,user_type,country,city,gender,pincode) values('$uname','$email','$password','$user_type','$country','$city','$gender','$pincode')");
    if ($query) {
        $success = 1;

    }
}
?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="css/master.css" type="text/css" />
    <link rel="stylesheet" href="css/join.us.css" type="text/css" />
    <script type="text/javascript" src="js/signupvalidate.js"></script>
    <title>Signup</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        .reg-form {
            width: 600px;
            margin: 30px auto;
        }

        .reg-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }

        .reg-form h2 {
            margin: 0 0 15px;
        }
    </style>
</head>
<?php
include 'navbar.php';
?>

<div class="reg-form mt-5 pt-5">
    <form method="post" name="form_registeration">
        <h1 class="text-center">KnowThis</h2>
            <h2 class="text-center">Registration</h2>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <span class="fa fa-user"></span>
                        </span>
                    </div>
                    <input id="textbox" class="form-control" type="text" name="username" placeholder="Username">
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <span class="fa fa-envelope"></span>
                        </span>
                    </div>
                    <input id="textbox" class="form-control" type="text" name="email" placeholder="Email-ID">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <span class="fa fa-lock"></span>
                        </span>
                    </div>
                    <input id="textbox" class="form-control" type="password" name="pass" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <span class="fa fa-lock"></span>
                        </span>
                    </div>
                    <input id="textbox" class="form-control" type="password" name="repass"
                        placeholder="Confirm Password">
                </div>
            </div>
            <div class="form-group">
                <label class="form-check-label" for="inlineRadio2">Gender</label>
                <div class="form-check form-check-inline">
                    <input class="" type="radio" name="gender" value="Male">
                    <label class="form-check-label" for="inlineRadio1">Male </label>
                </div>
                <div class="form-check form-check-inline" style="margin-left: 50px;">
                    <input class="" type="radio" name="gender" value="Female">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
                <br>
                <label class="form-check-label" for="inlineRadio2" style="margin-right: 14px;">Type</label>
                <div class="form-check form-check-inline">
                    <input class="" type="radio" name="user_type" value="rural">
                    <label class="form-check-label" for="inlineRadio1">Rural People </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="" type="radio" name="user_type" value="professional">
                    <label class="form-check-label" for="inlineRadio2">Professional</label>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <span class="fa fa-globe"></span>
                            </span>
                        </div>
                        <input id="textbox" class="form-control" type="text" name="city" placeholder="City  Name">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <span class="fa fa-globe"></span>
                            </span>
                        </div>
                        <input id="textbox" class="form-control" type="text" name="country" placeholder="Country">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <span class="fa fa-flag"></span>
                            </span>
                        </div>
                        <input id="textbox" class="form-control" type="text" name="pincode"
                            placeholder="Your Area Pincode">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <span><input type="checkbox" name="agree" onclick="LoadPage()" /> </span>
                            </span>
                        </div>
                        I agree on <a href="index.php" style="text-decoration:none; color:#0000FF">Terms &amp;
                            Conditions</a>
                        <font color="#FF0000">&nbsp;*</font>
                    </div>
                </div>
                <div align="center">
                    <input type="submit" value="Register Me" id="button" onclick="return registervalidate()"
                        name="register" class="btn btn-primary login-btn btn-block">
                </div>

                <div>
                    <input type="hidden" value="<?php echo $query_run_num_username; ?>" name="emp_hddn_username" />
                </div>
    </form>
    <?php
    if ($success == 1) {
        echo "<script>
    Swal.fire({
      icon: 'success',
      title: 'Successfully Registered!',
      text: 'You can login now',
      confirmButtonText: 'OK'
    }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = 'askme.php';
        }
      });
    </script>";
        header('location:loginpage.php');
    }
    ?>
</div>
</div>
<script>
    function registervalidate() {
        var username = document.forms["form_registeration"]["username"].value;
        var email = document.forms["form_registeration"]["email"].value;
        var password = document.forms["form_registeration"]["pass"].value;
        var repassword = document.forms["form_registeration"]["repass"].value;
        var gender = document.forms["form_registeration"]["gender"].value;
        var userType = document.forms["form_registeration"]["user_type"].value;
        var city = document.forms["form_registeration"]["city"].value;
        var country = document.forms["form_registeration"]["country"].value;
        var pincode = document.forms["form_registeration"]["pincode"].value;
        var agree = document.forms["form_registeration"]["agree"].checked;

        if (username == "" || email == "" || password == "" || repassword == "" || gender == "" || userType == "" || city == "" || country == "" || pincode == "") {
            Swal.fire({
                title: "Error",
                text: "All fields are required.",
                icon: "error",
                confirmButtonText: "OK",
            });
            return false;
        }

        if (password != repassword) {
            Swal.fire({
                title: "Error",
                text: "Passwords do not match.",
                icon: "error",
                confirmButtonText: "OK",
            });
            return false;
        }

        if (!agree) {
            Swal.fire({
                title: "Error",
                text: "Please agree to the terms and conditions.",
                icon: "error",
                confirmButtonText: "OK",
            });
            return false;
        }

        if (isNaN(pincode) || pincode.length != 6) {
            Swal.fire({
                title: "Error",
                text: "Please enter a valid 6-digit pincode.",
                icon: "error",
                confirmButtonText: "OK",
            });
            return false;
        }

        return true;
    }


</script>
</body>

<?php
include 'footer.php';
?>

</html>
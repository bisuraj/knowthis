<?php
session_start();
error_reporting(0);
include_once('dbconnect.php');

$user_id = $_SESSION['user_id'];

// Query to fetch user details of specific user_id
$query = "SELECT * FROM users WHERE user_id = $user_id";
$result = mysqli_query($con, $query);
if ($result) {
    $user = mysqli_fetch_assoc($result);
} else {
    echo "Error: " . mysqli_error($con);
}
if (isset($_POST['submit'])) {
    $uname = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $pincode = $_POST['pincode'];

    $sql = mysqli_query($con, "Update users set user_name='$uname',email='$email',city='$city',gender='$gender',pincode='$pincode',country='$country' where user_id=$user_id");
    if ($sql) {
        $msg = "Your Profile updated Successfully";
        header('location:index.php');
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
            background-color: #15172b;
            border-radius: 20px;
            box-sizing: border-box;
            padding: 30px;

        }

        .reg-form h2 {
            margin: 0 0 15px;
        }

        .reg-form {
            color: white;
        }

        .reg-form input::placeholder {
            color: #0a1112;
        }
    </style>
</head>
<?php
include 'navbarlogin.php';
?>

<div class="reg-form mt-5 pt-5">
    <form method="post" onclick="return registervalidate()" name="form_registeration">
        <h1 class="text-center">KnowThis</h2>
            <h2 class="text-center">Update Profile</h2>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend  bg-white">
                        <span class="input-group-text">
                            <span class="fa fa-user"></span>
                        </span>
                    </div>
                    <input id="textbox" class="form-control" type="text" name="username" value=<?php echo $user['user_name']; ?> placeholder="Username">
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend bg-white">
                        <span class="input-group-text">
                            <span class="fa fa-envelope"></span>
                        </span>
                    </div>
                    <input id="textbox" class="form-control" type="text" name="email" value=<?php echo $user['email']; ?> placeholder="Email-ID">
                </div>
            </div>
            <div class="form-group">
                <div class="form-check form-check-inline">
                    <input class="" type="radio" name="gender" value="Male" <?php if ($user['gender'] == "male")
                        echo "checked"; ?>>
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="" type="radio" name="gender" value="Female" <?php if ($user['gender'] == "female")
                        echo "checked"; ?>>
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
            </div>

            <br>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend bg-white">
                        <span class="input-group-text">
                            <span class="fa fa-globe"></span>
                        </span>
                    </div>
                    <input id="textbox" class="form-control" type="text" name="user_type"
                        value="<?php echo $user['user_type']; ?>" disabled="true">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend bg-white">
                        <span class="input-group-text">
                            <span class="fa fa-globe"></span>
                        </span>
                    </div>
                    <input id="textbox" class="form-control" type="text" name="city"
                        value="<?php echo $user['city']; ?>" placeholder="City">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend bg-white">
                        <span class="input-group-text">
                            <span class="fa fa-globe"></span>
                        </span>
                    </div>
                    <input id="textbox" class="form-control" type="text" name="country"
                        value="<?php echo $user['country']; ?>" placeholder="Country">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend bg-white">
                        <span class="input-group-text">
                            <span class="fa fa-flag"></span>
                        </span>
                    </div>
                    <input id="textbox" class="form-control" type="text" name="pincode"
                        value="<?php echo $user['pincode']; ?>" placeholder="Your Area Pincode">
                </div>
            </div>

            <div align="center">
                <input type="submit" value="Update Profile" id="button" name="submit"
                    class="btn btn-primary login-btn btn-block">
            </div>

    </form>

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

        if (username == "" || email == "" || gender == "" || city == "" || country == "" || pincode == "") {
            alert("All fields are required.");
            return false;
        }


        if (isNaN(pincode) || pincode.length != 6) {
            alert("Please enter a valid 6-digit pincode.");
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
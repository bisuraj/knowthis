<style>
    .login-form {
			width: 950px;
			margin: 30px auto;
		}

		.login-form form {
			margin-bottom: 15px;
			background: #f7f7f7;
			padding: 30px;
			box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
			border-radius: 10px;
		}
</style>
<body>
    <?php
         session_start();

     include 'dbconnect.php';

    if (isset($_SESSION['user_id'])) {
        include 'navbarlogin.php';
    } else {
        include 'navbar.php';
    }

    ?>
<body>
    <div class="login-form mt-5 pt-5">
        <h3 class="text-center mb-4">Change Password</h3>

        <?php
        // Handle form submission
        if (isset($_POST['submit'])) {
            // Get current password and new password from form
            $current_password = mysqli_real_escape_string($con, $_POST['current_password']);
            $new_password = mysqli_real_escape_string($con, $_POST['new_password']);

            // Get user's current password from database
            $query = "SELECT password FROM users WHERE user_id = {$_SESSION['user_id']}";
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_assoc($result);

            // Verify current password
            if (password_verify($current_password, $row['password'])) {
                // Update password in database
                $new_password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                $query = "UPDATE users SET password = '{$new_password_hash}' WHERE user_id = {$_SESSION['user_id']}";
                mysqli_query($con, $query);
                echo '<script>
                Swal.fire({
                  title: "Password changed successfully!",
                  icon: "success",
                  timer: 3000,
                  timerProgressBar: true,
                  showConfirmButton: false
                });
                </script>';
            } else {
                echo '<script>
                Swal.fire({
                  icon: "error",
                  title: "Incorrect current password",
                  text: "Please enter your correct current password.",
                  confirmButtonColor: "#3085d6",
                  confirmButtonText: "OK",
                });
                </script>';            }
        }
        ?>

        <div class="row justify-content-center ">
            <div class="col-md-6 ">
                <form method="POST">
                    <div class="form-group">
                        <label for="current_password">Current Password:</label>
                        <input type="password" class="form-control" id="current_password" name="current_password" required>
                    </div>

                    <div class="form-group">
                        <label for="new_password">New Password:</label>
                        <input type="password" class="form-control" id="new_password" name="new_password" required>
                    </div>

                    <div class="text-center">
  <button type="submit" name="submit" class="btn btn-primary">Change Password</button>
</div>
                </form>
            </div>
        </div>
    </div>



    <?php
    include 'footer.php';
    ?>
</body>
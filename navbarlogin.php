<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://cdn.tailwindcss.com/3.0.12">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.8/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    </link>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #80bdff;
            outline: 0;
            box-shadow: none !important;
        }
        .small-icon {
    font-size: 16px; // Adjust the font size as needed
}
.swal2-icon.swal2-warning {
  font-size: 1rem;
}

        .dashboard-header .navbar {
            padding: 0px;
            /* border-bottom: 1px solid #000000; */
            -webkit-box-shadow: 0px 0px 28px 0px rgba(82, 63, 105, 0.13);
            box-shadow: 0px 0px 28px 0px rgba(82, 63, 105, 0.13);
            -webkit-transition: all 0.3s ease;
            min-height: 60px;
        }



        .navbar-brand {
            display: inline-block;
            margin-right: 1rem;
            line-height: inherit;
            white-space: nowrap;
            padding: 11px 20px;
            font-size: 30px;
            text-transform: uppercase;
            font-weight: 700;
            color: #007bff;
        }

        .navbar-brand:hover {
            color: #007bff;
        }

        .navbar .user-profile-image {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <!-- Start of ChatBot (www.chatbot.com) code -->
    <script type="text/javascript">
        window.__be = window.__be || {};
        window.__be.id = "642b295ac480070007e725b6";
        (function () {
            var be = document.createElement('script'); be.type = 'text/javascript'; be.async = true;
            be.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.chatbot.com/widget/plugin.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(be, s);
        })();
    </script>
    <!-- End of ChatBot code -->
    <div class="dashboard-header">
        <nav class="navbar navbar-expand-md bg-white fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">KnowThis</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top me-4">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <?php if($_SESSION['utype']=="rural"){
                    echo ' <li class="nav-item">
                    <a class="nav-link" href="askme.php">AskMe</a>
                </li>';
                }
                else{
                    echo ' <li class="nav-item">
                    <a class="nav-link" href="askme.php">Answer</a>
                </li>';
                }
                ?>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="news.php">Explore</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.php">Community</a>
                        </li>

                        <li class="nav-item dropdown me-5">
                            <a class="nav-link dropdown-toggle " href="#" role="button"
                                data-bs-toggle="dropdown">
                                <span class="username">
                                    <?php
                                    echo $_SESSION['uname'];
                                    ?>
                                </span>
                                <?php
                                if($_SESSION['utype']=="rural"){
                                    $imgpath="images/rural.jpg";
                                }
                                else{
                                    $imgpath="images/pro.jpg";
                                }
                                ?>
                                <img class="user-profile-image" src="<?php echo $imgpath ; ?>">
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="edit-profile.php"><i
                                            class="fas fa-user mr-2"></i>Account</a>
                                </li>
                                <li><a class="dropdown-item" onclick="logout()"><i class="fas fa-power-off mr-2"></i>Log
                                        out</a></li>
                                <li><a class="dropdown-item" href="changepass.php"><i class="fas fa-cog mr-2"></i>Change
                                        Password</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script>
        function logout() {
            Swal.fire({
    title: "Are You Sure You Want to Logout",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes",
    customClass: {
        icon: 'small-icon' // Add a custom class to the icon element
    }
}).then((result) => {
    if (result.isConfirmed) {
        Swal.fire(
            "Logged Out",
            "You Have Been Logged Out",
            "Successfully"
        )
        window.location.href = "logout.php"; // Redirect to logout.php
    }
});
        }
    </script>
</body>

</html>
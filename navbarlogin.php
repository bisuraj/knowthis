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

    <style>
        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #80bdff;
            outline: 0;
            box-shadow: none !important;
        }


        .dashboard-header .navbar {
            padding: 0px;
            border-bottom: 1px solid #000000;
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

        .navbar-right-top {}

        .navbar-right-top .nav-item {
            border-right: 1px solid #e6e6f2;
        }

        .navbar-right-top .nav-item:last-child {
            border: none;
        }

        .navbar-right-top .nav-item .nav-link {
            padding: 13px 20px;
            font-size: 16px;
            line-height: 2;
            color: #82849f;
        }


        /* ----- User Nav Dropdown -----*/









        .nav-user-dropdown .dropdown-item {
            display: block;
            width: 100%;
            padding: 12px 22px 15px;
            clear: both;
            font-weight: 400;
            color: #686972;
            text-align: inherit;
            white-space: nowrap;
            background-color: transparent;
            border: 0;
            font-size: 13px;
            line-height: 0.4;
        }

        .nav-user-dropdown .dropdown-item:hover {
            background-color: #f7f7fb;
        }

        /*---- User icon sizes ---*/

        .user-avatar-xxl {
            height: 128px;
            width: 128px;
        }

        .user-avatar-xl {
            height: 90px;
            width: 90px;
        }

        .user-avatar-lg {
            height: 48px;
            width: 48px;
        }

        .user-avatar-md {
            height: 32px;
            width: 32px;
        }

        .user-avatar-sm {
            height: 24px;
            width: 24px;
        }

        .user-avatar-xs {
            height: 18px;
            width: 18px;
        }



        .avatar {
            width: 2.25rem;
            height: 2.25rem;
            border-radius: 50%;
            border: 2px solid #F7F9FA;
            background: #F7F9FA;
            color: #fff;
        }


        .media-attachment div.avatar {
            border: none;
        }

        .avatar.bg-primary {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .avatar.bg-primary i {
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="dashboard-header">
        <nav class="navbar navbar-expand-md bg-white fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">KnowThis</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="askme.php">AskMe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="news.php">Explore</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.php">Community</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle btn btn-outline-regular" href="#" role="button"
                                data-bs-toggle="dropdown">
                                <span class="username">
                                    <?php
                                    echo $_SESSION['utype'];
                                    ?>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="edit-profile.php"><i
                                            class="fas fa-user mr-2"></i>Account</a>
                                </li>
                                <li><a class="dropdown-item" href="logout.php"><i class="fas fa-power-off mr-2"></i>Log
                                        out</a></li>
                                <li><a class="dropdown-item" href="change-password.php"><i
                                            class="fas fa-cog mr-2"></i>Change
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
</body>

</html>
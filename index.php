<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <title>KnowThis</title>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://cdn.tailwindcss.com/3.0.12">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />


    <style>
        body {
            margin-top: 20px;
        }

        .footer .footer-socila-icon a {
            width: 30px;
            height: 30px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #F84E77;
            color: #ffffff;
            border-radius: 50%;
            margin-right: 8px;
            font-size: 15px;
        }

        .footer .footer-socila-icon a:hover {
            background: #1baaa0;
        }

        .footer .footer-links {
            margin: 0;
        }

        .footer .footer-links li+li {
            padding-top: 10px;
        }

        .footer .footer-links li a {
            position: relative;
        }

        .footer .footer-links li a:after {
            content: "";
            position: absolute;
            width: 0px;
            left: auto;
            right: 0;
            bottom: 0;
            height: 1px;
            transition: ease all 0.35s;
            background: #F84E77;
        }

        .footer .footer-links li a:hover:after {
            width: 100%;
            left: 0;
            right: auto;
        }

        .footer .footer-top {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .footer .footer-top h5,
        .footer .footer-top .h5 {
            position: relative;
            font-size: 1.2rem;
            text-transform: uppercase;
        }

        @media (min-width: 768px) {
            .footer .footer-top {
                padding-top: 2rem;
                padding-bottom: 1rem;
            }
        }

        @media (min-width: 992px) {
            .footer .footer-top {
                padding-top: 3rem;
                padding-bottom: 2rem;
            }
        }

        .footer .footer-border-top {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer .footer-border-top.dark {
            border-top: 1px solid rgba(16, 16, 16, 0.1);
        }

        .footer .footer-border-bottom {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer .footer-border-bottom.dark {
            border-bottom: 1px solid rgba(16, 16, 16, 0.1);
        }

        .bg-dark-gradient {
            background: linear-gradient(180deg, #101010 50%, black 100%) repeat-x !important;
        }

        .white-link a {
            color: rgba(255, 255, 255, 0.65);
        }

        a {
            text-decoration: none
        }

        .avatar-lg img {
            width: 90px;
            height: 90px;
        }
    </style>
</head>

<body>
    <?php
    session_start();

    if (isset($_SESSION['user_id'])) {
        include 'navbarlogin.php';
    } else {
        include 'navbar.php';
    }

    ?>
    <?php
    include 'homepage.php';
    include 'footer.php';
    ?>
</body>

</html>
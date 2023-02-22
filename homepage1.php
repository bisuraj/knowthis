<?php 
$currentTime = date("H:i");
if ($currentTime >= "05:00" && $currentTime < "12:00") {
    $greeting = "Good morning";
} elseif ($currentTime >= "12:00" && $currentTime < "18:00") {
    $greeting = "Good afternoon";
} else {
    $greeting = "Good evening";
}
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    $username = "";
    $new="New to This Platform";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/baguetteBox.min.css">
</head>
</head>
<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="57">
<header class="text-center text-white d-flex masthead" style="background-image: url('assets/bg.jpg');">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1 class="text-uppercase"><strong>Any Questions<br>We are Here&nbsp;</strong></h1>
                    <hr>
                </div>
            </div>
            <div class="col-lg-8 mx-auto">
                <p class="text-faded mb-5">We can Answer Your Questions</p><a class="btn btn-primary btn-xl" role="button" href="#services">Ask</a>
            </div>
        </div>
    </header>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/baguetteBox.min.js"></script>
    <script src="assets/js/creative.js"></script>
</body>
</html>
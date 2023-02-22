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

</head>
<body>




<div class="home-content">
    <h2></h2>
    <?php if (!isset($_SESSION['username'])) { ?>
        <a href="signup.php" class="btn btn-primary">Signup here</a>
    <?php } ?>
</div>
<main class="page landing-page">
<section class="bg-image" style="background-image:url('assets/bg.jpg');">
            <div class="text">
                <h2><?php echo $greeting . " " . $username; ?></h2>
                <p><?php echo $new . " " . $username; ?></p>
                <?php if (!isset($_SESSION['username'])) { ?>
                    <button class="btn btn-outline-light btn-lg"  href="signup.php" type="button">Signup here</button>
    <?php } ?>
    <br>
    <p><?php echo "Ask Your Questions Here "; ?></p>
    <button class="btn btn-outline-light btn-lg"  href="signup.php" type="button">Ask </button>
    
        </section>
    </main>


    </body>





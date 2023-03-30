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


<head>
<style>
    .section-styling:before {
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: currentColor;
    z-index: 1;
}
.section-styling {
    min-height: 680px;
}
    .section-styling{
        position: relative;
    text-align: center;
    background-size: cover;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
    padding-bottom: 0;
    }

    .dark1 {
  font-weight: 600;
  background: radial-gradient(circle at 10% 20%, rgb(0, 0, 0) 0%, rgb(64, 64, 64) 90.2%);
  color: transparent;
  background-clip: text;
  -webkit-background-clip: text;  
}
.dark1.header{
    font-size: 70px;
}  

</style>
</head>

<body>

<div class="home-content">
    <h1 class="dark"></h1>
    <?php if (!isset($_SESSION['username'])) { ?>
        <a href="signup.php" class="btn btn-primary">Signup here</a>
    <?php } ?>
</div>
<main class="page landing-page">
<section class="section-styling" style="background-image:url('assets/bg.jpg');">
            <div class="text">
                <h1 class="dark1 header"><?php echo $greeting . " " . $username; ?></h1>
                <h2 class="dark1"><?php echo $new . " " . $username; ?></h2>
                <?php if (!isset($_SESSION['username'])) { ?>
                    <button class="btn btn-primary"data-toggle="modal" data-target="#signupModal" type="button">Signup here</button>
    <?php } ?>
    <br>
    <br>
    <h2 class="dark1"><?php echo "Ask Your Questions Here "; ?></h2><br>
    <button class="btn btn-primary"  href="signup.php" type="button">Ask </button>
    
        </section>
    </main>


    </body>





<?php
date_default_timezone_set('Asia/Kolkata');
$currentTime = date("H:i");
if ($currentTime >= "05:00" && $currentTime < "12:00") {
    $greeting = "Good Morning";
} elseif ($currentTime >= "12:00" && $currentTime < "18:00") {
    $greeting = "Good Afternoon";
} else {
    $greeting = "Good Evening";
}
if (isset($_SESSION['uname'])) {
    $username = $_SESSION['uname'];
    $new = "";
} else {
    $username = "";
    $new = "New to This Platform";
}
error_reporting(E_ERROR | E_PARSE);

?>


<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
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

        .section-styling {
            position: relative;
            text-align: center;
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-bottom: 0;
        }

        @import url('https://fonts.googleapis.com/css?family=Manifold+CF&display=swap');

        .dark1 {
            font-weight: 450;
            background: linear-gradient(right, #080808, #2b2b2b, #080808);
            color: #fff;
            text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.7);
            font-family: 'Manifold CF', sans-serif;
        }

        .dark1.header {
            font-size: 60px;
        }

        .dark1.header2 {
            margin-top: 25px;
            font-size: 50px;
            '
 margin-bottom: 20px;
        }
        .weather {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 10px;
}

.weather img {
    height: 30px;
    margin-right: 10px;
}

.weather span {
    font-size: 35px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: white;
}
    </style>
</head>

<body>
<?php
$api_key = "f7a0740993da7861a6a873d99c4b82d6";
$city = "Vellore"; // Replace with user's location

$url = "https://api.openweathermap.org/data/2.5/weather?q=" . $city . "&appid=" . $api_key . "&units=metric";

$response = file_get_contents($url);

$weather_data = json_decode($response, true);
$temperature = $weather_data['main']['temp'];
$icon = "https://openweathermap.org/img/w/" . $weather_data['weather'][0]['icon'] . ".png";
$description = $weather_data['weather'][0]['description'];

?>
    <div class="home-content">
        <h1 class="dark"></h1>
        <!-- <?php if (!isset($_SESSION['username'])) { ?>
            <a href="signup.php" class="btn btn-primary">Signup here</a>
        <?php } ?> -->
    </div>

    <main class="page landing-page">
        <section class="section-styling" style="background-image:url('images/bgimage.jpg'); position:relative;">
            <div style="background-color:rgba(0,0,0,0.5); position:absolute; top:0; left:0; width:100%; height:100%;">
            </div>
            <div class="text"
                style="position:absolute; top:50%; left:50%; transform:translate(-50%,-50%); text-align:center; z-index:1;">
                <h1 class="dark1 header">
                    <?php echo $greeting . " "; ?>
                </h1>
                <h2 class="dark1 header2">
                    <?php echo $new . " " . strtoupper($username); ?>
                </h2>

                <?php if (!isset($_SESSION['uname'])) { ?>
                    <a href="signuppage.php"><button type="button" class="btn btn-primary">Signup here</button></a>
                <?php } ?>
                <div class="weather">
                    <img src="<?php echo $icon; ?>" alt="<?php echo $description; ?>">
                    <span>
                        <?php echo $temperature . "°C"; ?>
                    </span>
                </div>
                <br>
                <br>
                <?php
                if (isset($_SESSION['utype'])) {
                    if ($_SESSION['utype'] == "rural") {
                        echo '<h2 class="dark1">Ask Your Questions Here</h2>
          <br>
          <a href="askme.php"><button class="btn btn-primary" type="button">Ask</button></a>';
                    } else {
                        echo '<h2 class="dark1">Answer Questions Here</h2>
          <br>
          <a href="askme.php"><button class="btn btn-primary" type="button">Answer</button></a>';
                    }
                }
                ?>


            </div>
        </section>
    </main>


</body>
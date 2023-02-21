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

.container-1 {
  margin: 20px 25px;
  width: 600px;
  height: 300px;
  overflow: hidden;
  background: #fff;
  border-radius: 10px;
  transition: height 0.2s ease;
  box-shadow: 0 12px 28px rgba(0, 0, 0, 0.12);
}

.container.active {
  height: 590px;
}

.container .wrapper {
  width: 1000px;
  display: flex;
}

.container .wrapper section {
  width: 500px;
  background: #fff;
}

.container .post {
  transition: margin-left 0.18s ease;
}

.container.active .post {
  margin-left: -500px;
}

.post header {
  font-size: 22px;
  font-weight: 600;
  padding: 17px 0;
  text-align: center;
  border-bottom: 1px solid #bfbfbf;
}

.post form {
  margin: 20px 25px;
}

.post form textarea,
.post form button {
  width: 100%;
  outline: none;
  border: none;
}

.post form textarea {
  resize: none;
  font-size: 18px;
  margin-top: 30px;
  min-height: 100px;
}

.post form textarea::placeholder {
  color: #858585;
}

.post form textarea:focus::placeholder {
  color: #b3b3b3;
}

.post form button {
  height: 53px;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  cursor: pointer;
  color: #BCC0C4;
  cursor: no-drop;
  border-radius: 7px;
  background: #e2e5e9;
  transition: all 0.3s ease;
}

.post form textarea:valid ~ button {
  color: #fff;
  cursor: pointer;
  background: #4599FF;
}

.post form textarea:valid ~ button:hover {
  background: #1a81ff;
}

    </style>
</head>
<body>




<div class="home-content">
    <h2></h2>
    <?php if (!isset($_SESSION['username'])) { ?>
        <a href="signup.php" class="btn btn-primary">Signup here</a>
    <?php } ?>
</div>
<main class="page landing-page">
<section class="clean-block clean-hero" style="background-image:url('assets/bg.jpg');">
            <div class="text">
                <h2><?php echo $greeting . " " . $username; ?></h2>
                <p><?php echo $new . " " . $username; ?></p>
                <?php if (!isset($_SESSION['username'])) { ?>
                    <button class="btn btn-outline-light btn-lg"  href="signup.php" type="button">Signup here</button>
    <?php } ?>
    <div class="container-1">
      <div class="wrapper">
        <section class="post">
          <header>Ask Question</header>
          <form action="#">
            <div class="content-1">
            </div>
            <textarea placeholder="Ask Question" spellcheck="false" required></textarea>
            <button id="ask-button">Ask</button>
          </form>
        </section>
      </div>
    </div>
        </section>
    </main>


    </body>





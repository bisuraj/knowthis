<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KnowThis</title>
</head>
<body>
<?php
    session_start();

    if(isset($_SESSION['user_id'])) {
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

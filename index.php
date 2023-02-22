<?php
    session_start();

    if(isset($_SESSION['user_id'])) {
        include 'navbarlogin.php';
    } else {
        include 'navbar1.php';
    }
    
?>
 <?php
 include 'homepage.php';
 include 'footer.php';
 ?>
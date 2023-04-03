<?php
session_start();

if (isset($_SESSION['user_id'])) {
    include 'navbarlogin.php';
} else {
    include 'navbar.php';
}
include 'askme_content.php';
include 'footer.php';
?>
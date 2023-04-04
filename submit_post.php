<?php
if (!isset($_SESSION['user_id'])) {
    echo "Warning session not set cannot submit form";
    return;
    // include 'navbarlogin.php';
}

$post_content = $_POST['post_content'];

print_r($_POST);
// Process the post content (e.g. save to a database)
?>

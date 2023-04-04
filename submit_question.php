<?php require('./dbconnect.php') ?>

<?php
    session_start();

    if(!isset($_SESSION['user_id'])){
        echo "No Active session";
        return;
    }

    $user_id = $_SESSION['user_id'];
    $post_title = $_POST['post_title'];
    $post_content = $_POST['post_content'];

    // Validate inputs (e.g. check for empty values)
    if(empty($post_title) || empty($post_content)){
        echo "Please enter both a title and content for your question.";
        return;
    }

    // Prepare the SQL statement
    $stmt = $con->prepare("INSERT INTO Questions (user_id, question_title, question_text) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $user_id, $post_title, $post_content);

    // Execute the statement
    if ($stmt->execute() === TRUE) {
        echo "<script> alert(Question submitted successfully!)</script>";
        $host = $_SERVER['HTTP_HOST'];
		$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

        header("location: http://" . $host . $uri . "/askme.php");
        exit();
    } else {
        echo "Error submitting question: " . $con->error;
    }

    // Close the statement and connection
    $stmt->close();

?>

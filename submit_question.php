<?php require('./dbconnect.php') ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Question</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.8/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    </link>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
    session_start();

    if(!isset($_SESSION['user_id'])){
        echo "<script>
        Swal.fire({
          icon: 'error',
          title: 'Not Logged in!',
          confirmButtonText: 'OK'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = 'askme.php';
          }
        });
        </script>";
    }
    else{
    $user_id = $_SESSION['user_id'];
    $post_title = $_POST['post_title'];
    $post_content = $_POST['post_content'];

    if( empty($post_title) || empty($post_content)){
        echo "<script>
        Swal.fire({
          icon: 'error',
          title: 'Both Fields are Required',
          confirmButtonText: 'OK'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = 'askme.php';
          }
        });
        </script>";        return;
    }

    // Prepare the SQL statement
    $stmt = $con->prepare("INSERT INTO Questions (user_id, question_title, question_text) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $user_id, $post_title, $post_content);

    // Execute the statement
    if ($stmt->execute() === TRUE) {
        echo "<script>
        Swal.fire({
          icon: 'success',
          title: 'Successfully Posted Question!',
          confirmButtonText: 'OK'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = 'askme.php';
          }
        });
        </script>";        
        // $host = $_SERVER['HTTP_HOST'];
		// $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

        // header("location: http://" . $host . $uri . "/askme.php");
        // exit();
    } else {
        echo "Error submitting question: " . $con->error;
    }

    // Close the statement and connection
    $stmt->close();
    }
?>
</body>
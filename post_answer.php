<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Answer</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.8/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    </link>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<?php
include_once('dbconnect.php');
if (isset($_POST['answer_submit'])) {
    $user_id = $_POST['user_id'];
    $question_id = $_POST['q_id'];
    $answer_content = $_POST['answer_content'];

    // Check if question_id exists in the questions table
    $result = mysqli_query($con, "SELECT * FROM questions WHERE question_id = '$question_id'");
    if (mysqli_num_rows($result) == 0) {
        // Handle error here, e.g. by displaying an error message and/or redirecting to an error page
        echo "Error: Invalid question ID".$question_id;
        exit();
    }

    $query = mysqli_query($con, "INSERT INTO answers(user_id,question_id,answer_text) VALUES('$user_id','$question_id','$answer_content')");
    if ($query) {
        $success=1;
    }
}
?>
<body>
    <?php
    if($success==1){
        echo "<script>
        Swal.fire({
          icon: 'success',
          title: 'Successfully Posted Answer!',
          confirmButtonText: 'OK'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = 'askme.php';
          }
        });
        </script>";
        

    }

        ?>
</body>
</html>
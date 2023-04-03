<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Post</title>

    <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.css">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    if (isset($_SESSION['user_id'])) {
        include 'navbarlogin.php';
    } else {
        include 'navbar.php';
    }
    ?>

    <main class="d-flex align-items-center justify-content-center flex-column flex-wrap m-2 p-2 mt-5 pt-5 gap-4">
        <h2>Create a new blog post</h2>

        <form action="submit_post.php" class="w-75" method="post">
            <div class="form-group">
                <label for="post_title">Title:</label>
                <input type="text" name="post_title" id="post_title" class="form-control">
            </div>
            <div class="form-group">
                <label for="post_content">Post Content:</label>
                <textarea name="post_content" id="post_content" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Post</button>
        </form>
    </main>

    <?php
    include 'footer.php';
    ?>

    <script>
        ClassicEditor
            .create(document.querySelector('#post_content'))
            .catch(error => {
                console.error(error);
            });
    </script>

</body>

</html>
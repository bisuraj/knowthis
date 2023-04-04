
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="css/blogcss.css" rel="stylesheet">

    <style>
        .img-fluid img-crop {
            max-height: 300px;
            width: 100%;
            /* height: 300px; */
            /* width: auto; */
        }

        .img-crop {
            width: 400px;
            /* set the desired width */
            height: 300px;
            /* set the desired height */
            object-fit: cover;
            /* crop the image to fit the dimensions */
        }

        .img-container {
            width: 590px;
            /* set the desired width */
            height: 300px;
            /* set the desired height */
            overflow: hidden;
            /* hide the overflow content */
        }
    </style>


</head>

<body>
    <?php
    session_start();

    if (isset($_SESSION['user_id'])) {
        include 'navbarlogin.php';
    } else {
        include 'navbar.php';
    }

    ?>
    <div class="container mt-5 pt-5">
        <div class="text-center">
            <button type="button" class="btn btn-primary btn-lg pull-right" 
            <?php if (isset($_SESSION['user_id'])) {if ($_SESSION['utype'] == "rural"){echo "hidden";}} ?> onclick="window.location.href='newpost.php'">
                <span class=" glyphicon glyphicon-plus"></span> Create new Blog
                </button>
            </div>
        </div>
        <main class="d-flex align-items-center justify-content-center flex-column">
            <div class="d-flex align-items-center justify-content-center flex-wrap p-5" style="width : 90%">

                <article class="col-12 col-md-6 tm-post">
                    <a href="blog2.php" class="effect-lily tm-post-link tm-pt-60">
                        <div class="tm-post-link-inner img-container ">
                            <img src="images/gvt.jpg" alt="Image" class="img-fluid img-crop">
                        </div>
                        <span class="position-absolute tm-new-badge">New</span>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">Top 10 Central Government Schemes for farmers in India
                        </h2>
                    </a>
                    <p class="tm-pt-30">
                    The central government aims to maximize farm output and generate employment in the agriculture sector. To achieve this aim it intends to introduce various schemes and plans for the benefit of the farmers. The goal of the central government is ...
                    </p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">Government Schemes</span>
                        <span class="tm-color-primary">April 04,2024</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>0 comments</span>
                        <span>by Bisuraj Sharma</span>
                    </div>
                </article>
                <article class="col-12 col-md-6 tm-post">
                    <a href="blog1.php" class="effect-lily tm-post-link tm-pt-60">
                        <div class="tm-post-link-inner img-container ">
                            <img src="images/onion.jpeg" alt="Image" class="img-fluid img-crop">
                        </div>
                        <span class="position-absolute tm-new-badge">New</span>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">How a farmer from Nashik grew 195 quintal onion
                        </h2>
                    </a>
                    <p class="tm-pt-30">
                        Modern farming methods have often proven effective and have delivered outstanding results. A farmer
                        from Nashik, stands testimony to the wonders modern farming techniques can ...
                    </p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">Agriculture</span>
                        <span class="tm-color-primary">April 03,2024</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>0 comments</span>
                        <span>by Bisuraj Sharma</span>
                    </div>
                </article>
                <article class="col-12 col-md-6 tm-post">
                    <a href="blog3.php" class="effect-lily tm-post-link tm-pt-60">
                        <div class="tm-post-link-inner img-container ">
                            <img src="images/edu.jfif" alt="Image" class="img-fluid img-crop">
                        </div>
                        <span class="position-absolute tm-new-badge">New</span>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">IMPROVING THE QUALITY OF EDUCATION IN RURAL INDIA
                        </h2>
                    </a>
                    <p class="tm-pt-30">
                    The Indian demographic can be broadly divided into two categories, Rural and Urban. This divide is not on the basis of caste, religion or creed but the living standards of the community ...
                    </p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">Awareness</span>
                        <span class="tm-color-primary">April 03,2024</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>0 comments</span>
                        <span>by Bisuraj Sharma</span>
                    </div>
                </article>
                <article class="col-12 col-md-6 tm-post">
                    <a href="blog4.php" class="effect-lily tm-post-link tm-pt-60">
                        <div class="tm-post-link-inner img-container ">
                            <img src="images/tech.jpg" alt="Image" class="img-fluid img-crop">
                        </div>
                        <span class="position-absolute tm-new-badge">New</span>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">How technology investments are revolutionising the agriculture sector in India
                        </h2>
                    </a>
                    <p class="tm-pt-30">
                    Technological interventions are taking over the world gradually. We are entering into the fourth industrial revolution or Industry 4.0 with a focus on digitization and automation. With this ...
                    </p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">Technology</span>
                        <span class="tm-color-primary">April 05,2024</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>0 comments</span>
                        <span>by Bisuraj Sharma</span>
                    </div>
                </article>
                <div class="container-fluid tm-mt-100 tm-mb-75">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="tm-prev-next-wrapper d-flex justify-content-start">
                                <a href="#" class="tm-btn tm-btn-primary tm-prev-next disabled mr-2">Prev</a>
                                <a href="#" class="tm-btn tm-btn-primary tm-prev-next">Next</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tm-paging-wrapper d-flex justify-content-end">
                                <span class="mr-3">Page</span>
                                <nav class="tm-paging-nav">
                                    <ul class="pagination">
                                        <li class="tm-paging-item active">
                                            <a href="#" class="mb-2 tm-btn tm-paging-link">1</a>
                                        </li>
                                        <li class="tm-paging-item">
                                            <a href="#" class="mb-2 tm-btn tm-paging-link">2</a>
                                        </li>
                                        <li class="tm-paging-item">
                                            <a href="#" class="mb-2 tm-btn tm-paging-link">3</a>
                                        </li>
                                        <li class="tm-paging-item">
                                            <a href="#" class="mb-2 tm-btn tm-paging-link">4</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </main>

        <?php
            include 'footer.php';
            ?>
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>

</html>
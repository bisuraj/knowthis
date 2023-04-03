<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="../css/blogcss.css" rel="stylesheet">


</head>

<body>
    <?php
    session_start();

    if (isset($_SESSION['user_id'])) {
        include '../navbarlogin.php';
    } else {
        include '../navbar.php';
    }

    ?>

    <main class="d-flex align-items-center justify-content-center">

        <div class="d-flex align-items-center justify-content-center w-100">

            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="col-lg-8 tm-post-col">
                    <div class="tm-post-full">
                        <div class="mb-4">
                            <h2 class="pt-2 tm-color-primary tm-post-title">How A Farmer From Nashik Grew 195 Quintal
                                Onion</h2>
                            <p class="tm-mb-40">April 03 2023 posted by Bisuraj Sharma</p>



                            <p>Modern farming methods have often proven effective and have delivered outstanding
                                results. A farmer from Nashik, stands testimony to the wonders modern farming techniques
                                can do. Here’s how Mr. Balu Darade grew a whopping 195 quintal onion –</p>
                            <h2>NABARD’s Golden Initiative</h2>
                            <p>The National Bank for Agriculture and Rural Development (NABARD) initiated a noble
                                program where it trained the farmers for modern farming techniques. Mr. Balu Darade
                                participated in this program as he wished to yield more than 100 quintal, his average
                                produce.</p>
                            <h2>Goodbye to Traditional Techniques</h2>
                            <p>The traditional method of sowing on flat beds was replaced by raised beds. Following are
                                the advantages of raised bed sowing –</p>
                            <ul>
                                <li>Water can be supplied through drip irrigation</li>
                                <li>The temperature can be maintained in raised bed sowing</li>
                                <li>Spacing can be easily maintained</li>
                            </ul>
                            <h3>Drip Irrigation</h3>
                            <p>Raised bed sowing allowed the water to be supplied through drip irrigation, a method
                                which has its own advantages –</p>
                            <ul>
                                <li>Drip irrigation reduces water wastage</li>
                                <li>Evaporation is minimal and the consumption is lowered</li>
                                <li>Fertilisers can be used via the dripping system</li>
                                <li>The land between the plant rows remain dry and unwanted plant growth is prevented
                                </li>
                            </ul>
                            <p>Apart from the good yield, the new techniques helped him save labour cost for irrigation,
                                fertiliser application and removal of weeds. And guess what, he saved around Rs. 6,000
                                per acre.</p>
                            <p>If you too want to learn about modern farming techniques and get valuable tips, visit <a
                                    href="https://mahadhan.co.in/crop-portfolio/onion-farming/">https://mahadhan.co.in/crop-portfolio/onion-farming/</a>
                            </p>
                            <span class="d-block text-right tm-color-primary">Agriculture</span>
                        </div> <!-- Comments -->
                        <div>
                            <h2 class="tm-color-primary tm-post-title">Comments</h2>
                            <hr class="tm-hr-primary tm-mb-45">
                            <div class="tm-comment tm-mb-45">
                                <figure class="tm-comment-figure">
                                    <img src="../image/avatar1.jpg" alt="Image" class="mb-2 rounded-circle img-thumbnail">
                                    <figcaption class="tm-color-primary text-center">Mohan </figcaption>
                                </figure>
                                <div>
                                    <p>
                                      Comment 1
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="tm-color-primary">REPLY</a>
                                        <span class="tm-color-primary">April 3, 2023</span>
                                    </div>
                                </div>
                            <form action="" class="mb-5 tm-comment-form">
                                <h2 class="tm-color-primary tm-post-title mb-4">Your comment</h2>
                                <div class="mb-4">
                                    <input class="form-control" name="name" type="text">
                                </div>
                                <div class="mb-4">
                                    <input class="form-control" name="email" type="text">
                                </div>
                                <div class="mb-4">
                                    <textarea class="form-control" name="message" rows="6"></textarea>
                                </div>
                                <div class="text-right">
                                    <button class="tm-btn tm-btn-primary tm-btn-small">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <aside class="d-flex w-25">
                <div class="tm-post-sidebar">
                    <hr class="mb-3 tm-hr-primary">
                    <h2 class="mb-4 tm-post-title tm-color-primary">Categories</h2>
                    <ul class="tm-mb-75 pl-5 tm-category-list">
                        <li><a href="#" class="tm-color-primary">Agriculture</a></li>
                        <li><a href="#" class="tm-color-primary">Government Schemes</a></li>
                        <li><a href="#" class="tm-color-primary">Awareness</a></li>
                        <li><a href="#" class="tm-color-primary">Recent Technology</a></li>
                        <li><a href="#" class="tm-color-primary">Trends</a></li>
                    </ul>
                    <hr class="mb-3 tm-hr-primary">
                    <h2 class="tm-mb-40 tm-post-title tm-color-primary">Related Posts</h2>
                    <a href="#" class="d-block tm-mb-40">
                        <figure>
                            <img src="img/img-02.jpg" alt="Image" class="mb-3 img-fluid">
                            <figcaption class="tm-color-primary">Post 1
                            </figcaption>
                        </figure>
                    </a>
                    <a href="#" class="d-block tm-mb-40">
                        <figure>
                            <img src="img/img-05.jpg" alt="Image" class="mb-3 img-fluid">
                            <figcaption class="tm-color-primary">Post 2
                            </figcaption>
                        </figure>
                    </a>
                    <a href="#" class="d-block tm-mb-40">
                        <figure>
                            <img src="img/img-06.jpg" alt="Image" class="mb-3 img-fluid">
                            <figcaption class="tm-color-primary">Post 3</figcaption>
                        </figure>
                    </a>
                </div>
            </aside>

    </main>
    <?php
    include '../footer.php';
    ?>
    <script src="../js/jquery/jquery.min.js"></script>
    <script src="../js/templatemo-script.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="css/blogcss.css" rel="stylesheet">


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

    <main class="d-flex align-items-start justify-content-center mt-5 pt-5">

        <div class="w-50">

            <div class="d-flex align-items-center justify-content-center">
                <div class="tm-post-full">
                    <div class="mb-4">
                        <h2 class="pt-2 tm-color-primary tm-post-title">How A Farmer From Nashik Grew 195 Quintal
                            Onion</h2>
                        <p class="tm-mb-40 text-muted h6">April 03 2023 posted by Bisuraj Sharma</p>



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
                    <div class="container">
                        <h2 class="text-primary pb-3">Comments</h2>
                        <hr>
                        <div class="comment pb-3">
                        </div>
                        <form action="" class="comment-form pt-3">
                            <h2 class="text-primary pb-3">Your comment</h2>
                            <div class="form-group">
                                <input class="form-control" name="name" type="text" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="email" type="text" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message"></textarea>
                            </div>
                            <div class="text-right m-2 mb-4">
                                <button class="btn btn-primary">Submit</button>
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
                    <li><a href="blog1.php" class="tm-color-primary">Agriculture</a></li>
                    <li><a href="blog2.php" class="tm-color-primary">Government Schemes</a></li>
                    <li><a href="blog3.php" class="tm-color-primary">Awareness</a></li>
                    <li><a href="blog4.php" class="tm-color-primary">Recent Technology</a></li>
                    <li><a href="#" class="tm-color-primary">Trends</a></li>
                </ul>
                <hr class="mb-3 tm-hr-primary">
                <h2 class="tm-mb-40 tm-post-title tm-color-primary">Related Posts</h2>
                <a href="blog1.php" class="d-block tm-mb-40">
                    <figure>
                        <img src="images/onion.jpeg" alt="Image" class="mb-3 img-fluid">
                        <figcaption class="tm-color-primary">Post 1
                        </figcaption>
                    </figure>
                </a>
                <a href="blog2.php" class="d-block tm-mb-40">
                    <figure>
                        <img src="images/gvt.jpg" alt="Image" class="mb-3 img-fluid">
                        <figcaption class="tm-color-primary">Post 2
                        </figcaption>
                    </figure>
                </a>
                <a href="blog3.php" class="d-block tm-mb-40">
                    <figure>
                        <img src="images/edu.jfif" alt="Image" class="mb-3 img-fluid">
                        <figcaption class="tm-color-primary">Post 3</figcaption>
                    </figure>
                </a>
            </div>
        </aside>

    </main>
    <?php
    include 'footer.php';
    ?>
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>

</html>